<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Promotion;
use App\Models\Parfum;
use Carbon\Carbon;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotions = [
            [
                'parfum_name' => 'Dior Sauvage Elixir',
                'reduction' => 15.00, // 15%
                'code' => 'PROMO15'
            ],
            [
                'parfum_name' => 'Givenchy Gentleman Réserve Privée',
                'reduction' => 10.00, // 10%
                'code' => 'GENTLE10'
            ],
            [
                'parfum_name' => 'Tom Ford Noir Extreme',
                'reduction' => 20.00, // 20%
                'code' => 'LUXE20'
            ],
            [
                'parfum_name' => "Miss Dior Rose N'Roses",
                'reduction' => 15.00, // 15%
                'code' => 'DIOR15'
            ]
        ];

        foreach ($promotions as $promoData) {
            $parfum = Parfum::where('nom', $promoData['parfum_name'])->first();
            
            if ($parfum) {
                Promotion::create([
                    'parfum_id' => $parfum->id,
                    'reduction' => $promoData['reduction'],
                    'code' => $promoData['code'],
                    'date_debut' => Carbon::now(),
                    'date_fin' => Carbon::now()->addMonths(1),
                    'is_active' => true,
                ]);
            }
        }
    }
}
