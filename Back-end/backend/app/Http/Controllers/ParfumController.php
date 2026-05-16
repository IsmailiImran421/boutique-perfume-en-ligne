<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parfum;
use Carbon\Carbon;

class ParfumController extends Controller
{
    public function getFemme()
    {
        $parfums = Parfum::where('genre', 'femme')
            ->with(['images' => function($query) {
                $query->where('is_main', true);
            }, 'notes', 'promotions'])
            ->get()
            ->map(function($parfum) {
                return $this->formatParfum($parfum);
            });

        return response()->json($parfums);
    }

    public function getHomme()
    {
        $parfums = Parfum::where('genre', 'homme')
            ->with(['images' => function($query) {
                $query->where('is_main', true);
            }, 'notes', 'promotions'])
            ->get()
            ->map(function($parfum) {
                return $this->formatParfum($parfum);
            });

        return response()->json($parfums);
    }

    public function getNouveautes()
    {
        $parfums = Parfum::orderBy('created_at', 'desc')
            ->take(8)
            ->with(['images' => function($query) {
                $query->where('is_main', true);
            }, 'notes', 'promotions'])
            ->get()
            ->map(function($parfum) {
                return $this->formatParfum($parfum);
            });

        return response()->json($parfums);
    }

    public function getPromotions()
    {
        $parfums = Parfum::whereHas('promotions', function($query) {
                $query->where('is_active', true)
                      ->where('date_debut', '<=', Carbon::now())
                      ->where('date_fin', '>=', Carbon::now());
            })
            ->with(['images' => function($query) {
                $query->where('is_main', true);
            }, 'notes', 'promotions'])
            ->get()
            ->map(function($parfum) {
                return $this->formatParfum($parfum);
            });

        return response()->json($parfums);
    }

    public function search(Request $request)
    {
        $query = $request->query('q');
        
        $parfums = Parfum::where('nom', 'LIKE', "%{$query}%")
            ->orWhere('marque', 'LIKE', "%{$query}%")
            ->with(['images' => function($q) {
                $q->where('is_main', true);
            }, 'notes', 'promotions'])
            ->get()
            ->map(function($parfum) {
                return $this->formatParfum($parfum);
            });

        return response()->json($parfums);
    }

    private function formatParfum($parfum)
    {
        $mainImage = $parfum->images->first();
        $notesString = $parfum->notes->pluck('nom')->join(', ');
        
        $originalPrice = (float)$parfum->prix;
        $finalPrice = $originalPrice;
        $oldPrice = null;
        $hasPromo = false;
        $reductionValue = 0;

        // On cherche la première promotion ACTIVE à la date d'aujourd'hui
        $today = Carbon::today()->toDateString();
        $activePromo = $parfum->promotions
            ->where('is_active', true)
            ->where('date_debut', '<=', $today)
            ->where('date_fin', '>=', $today)
            ->first();

        if ($activePromo) {
            $hasPromo = true;
            $reductionValue = (int) $activePromo->reduction;
            $finalPrice = $originalPrice * (1 - ($reductionValue / 100));
            $oldPrice = $originalPrice;
        }

        return [
            "id" => $parfum->id,
            "nom" => $parfum->nom,
            "marque" => $parfum->marque,
            "notes" => $notesString ?: $parfum->caracteristique,
            "prix" => (float)round($finalPrice, 2),
            "old_prix" => $oldPrice ? (float)round($oldPrice, 2) : null,
            "promo" => $hasPromo,
            "reduction" => $reductionValue,
            "image" => $mainImage ? asset($mainImage->url) : asset("/placeholder.png"),
            "genre" => $parfum->genre,
            "saison" => $parfum->saison,
            "format" => $parfum->format,
            "description" => $parfum->description
        ];
    }
}
