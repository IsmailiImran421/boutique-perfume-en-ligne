<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parfum;
use App\Models\Image;

class ParfumSeeder extends Seeder
{
    public function run()
    {
        $parfums = [
            [
                'nom' => 'Dior Sauvage Elixir',
                'description' => "Sauvage Elixir de Dior est une fragrance d'une concentration extrême, réinterprétant l'audace de Sauvage. Ce parfum masculin dévoile des notes épicées, boisées et lavandées grâce à une essence sur mesure, offrant un sillage puissant et captivant. Idéal comme meilleur parfum homme pour une présence intense et durable.",
                'prix' => 1400,
                'stock' => 50,
                'marque' => 'Dior',
                'genre' => 'homme',
                'saison' => 'hiver',
                'caracteristique' => "Fragrance masculine ultra-concentrée et magnétique | Notes d'épices chaudes (cannelle, cardamome) | Essence de lavande de Nyons et bois ambrés liquoreux",
                'format' => '60ml',
                'notes_details' => [
                    'top' => ['Cannelle', 'Cardamome', 'Noix de muscade'],
                    'middle' => ['Lavande'],
                    'base' => ['Réglisse', 'Santal', 'Ambre', 'Patchouli']
                ],
                'images' => [
                    'homme/hiver/Dior Sauvage Elixir-1.jfif', 
                    'homme/hiver/Dior Sauvage Elixir-2.jfif', 
                    'homme/hiver/Dior Sauvage Elixir-3.jfif'
                ]
            ],
            [
                'nom' => 'Givenchy Gentleman Réserve Privée',
                'description' => "Gentleman Réserve Privée de Givenchy est une fragrance élégante inspirée de l'univers du whisky d'exception. Ce parfum masculin associe la sophistication de l'iris à des notes boisées et ambrées, offrant un sillage chaud, raffiné et sensuel. Idéal comme meilleur parfum homme ou parfum homme maroc pour une allure distinguée.",
                'prix' => 1120,
                'stock' => 100,
                'marque' => 'Givenchy',
                'genre' => 'homme',
                'saison' => 'hiver',
                'caracteristique' => "Fragrance masculine boisée, florale et ambrée | Notes d'absolu de whisky et d'iris poudré | Accord de châtaigne et fond de bois de cèdre intense",
                'format' => '60ml',
                'notes_details' => [
                    'top' => ['Absolu de Whisky', 'Bergamote'],
                    'middle' => ['Iris', 'Châtaigne', 'Benjoin'],
                    'base' => ['Cèdre', 'Patchouli', 'Vétiver']
                ],
                'images' => [
                    'homme/hiver/GENTLEMAN GIVENCHY-1.jfif',
                    'homme/hiver/GENTLEMAN GIVENCHY-2.jfif',
                    'homme/hiver/GENTLEMAN GIVENCHY-3.jfif'
                ]
            ],
            [
                'nom' => 'Jean Paul Gaultier Le Male Elixir',
                'description' => "Le Male Elixir de Jean Paul Gaultier est une fragrance incandescente qui réinterprète le marin iconique avec une intensité maximale. Ce parfum masculin dévoile des notes ambrées, boisées et aromatiques grâce à une vanille brûlante, offrant un sillage sensuel, chaud et addictif. Idéal comme meilleur parfum homme pour une séduction intense et une tenue exceptionnelle.",
                'prix' => 1050,
                'stock' => 100,
                'marque' => 'Jean Paul Gaultier',
                'genre' => 'homme',
                'saison' => 'hiver',
                'caracteristique' => "Fragrance masculine ambrée aromatique intense | Notes de lavande fraîche et de fève tonka tropicale | Accord de benjoin suave et vanille envoûtante",
                'format' => '75ml',
                'notes_details' => [
                    'top' => ['Lavande', 'Menthe'],
                    'middle' => ['Vanille', 'Benjoin'],
                    'base' => ['Miel', 'Fève Tonka', 'Tabac']
                ],
                'images' => [
                    'homme/hiver/Le Male Elixir Parfum-1.jfif',
                    'homme/hiver/Le Male Elixir Parfum-2.jfif',
                    'homme/hiver/Le Male Elixir Parfum-3.jfif'
                ]
            ],
            [
                'nom' => 'Parfums de Marly Layton',
                'description' => "Layton de Parfums de Marly est une fragrance addictive qui capture l'élégance de la cour de Versailles. Ce parfum masculin dévoile des notes boisées et orientales grâce à la vanille et au poivre noir, offrant un côté à la fois frais et noble. Idéal comme meilleur parfum homme pour une signature olfactive charismatique et raffinée.",
                'prix' => 2000,
                'stock' => 100,
                'marque' => 'Parfums de Marly',
                'genre' => 'homme',
                'saison' => 'hiver',
                'caracteristique' => "Fragrance masculine orientale et florale intense | Notes de pomme croquante, lavande et bergamote | Fond de vanille précieuse, poivre rose et bois de gaïac",
                'format' => '75ml',
                'notes_details' => [
                    'top' => ['Pomme', 'Lavande', 'Bergamote', 'Mandarine'],
                    'middle' => ['Géranium', 'Violette', 'Jasmin'],
                    'base' => ['Vanille', 'Cardamome', 'Santal', 'Poivre Noir']
                ],
                'images' => [
                    'homme/hiver/marly layton-1.jfif',
                    'homme/hiver/marly layton-2.jfif',
                    'homme/hiver/marly layton-3.jfif'
                ]
            ],
            [
                'nom' => 'Armani Stronger With You Intensely',
                'description' => "Stronger With You Intensely d’Emporio Armani est une fragrance vibrante qui capture l'intensité d'une histoire d'amour audacieuse. Ce parfum masculin dévoile des notes boisées, ambrées et épicées grâce au poivre rose, offrant un caractère charnel et déterminé. Idéal comme meilleur parfum homme ou parfum homme maroc pour une allure magnétique.",
                'prix' => 1000,
                'stock' => 100,
                'marque' => 'Emporio Armani',
                'genre' => 'homme',
                'saison' => 'hiver',
                'caracteristique' => "Fragrance masculine intense et audacieuse | Notes de poivre rose et de vanille boisée | Accord de cannelle et de marron glacé pour un sillage gourmand",
                'format' => '50ml',
                'notes_details' => [
                    'top' => ['Poivre Rose', 'Genévrier', 'Violette'],
                    'middle' => ['Cannelle', 'Lavande', 'Sauge', 'Toffee'],
                    'base' => ['Vanille', 'Ambre', 'Fève Tonka', 'Daim']
                ],
                'images' => [
                    'homme/hiver/Stronger With You Intensely-1.jfif',
                    'homme/hiver/Stronger With You Intensely-2.jfif',
                    'homme/hiver/Stronger With You Intensely-3.jfif'
                ]
            ],
            [
                'nom' => 'Tom Ford Noir Extreme',
                'description' => "Noir Extreme de Tom Ford est une fragrance ambrée et boisée qui explore les facettes les plus opulentes de la masculinité. Ce parfum masculin dévoile des notes d'épices chaudes et d'agrumes frais contrastés par un cœur floral gourmand, offrant un sillage sophistiqué, charismatique et audacieux. Idéal comme meilleur parfum homme pour une soirée élégante ou une présence affirmée.",
                'prix' => 1600,
                'stock' => 100,
                'marque' => 'Tom Ford',
                'genre' => 'homme',
                'saison' => 'hiver',
                'format' => '50ml',
                'caracteristique' => "Fragrance masculine ambrée, boisée et orientale intense.| Notes de tête de cardamome, safran et mandarine. | Accord unique de Kulfi indien (dessert traditionnel) et de bois de santal.",
                'notes_details' => [
                    'top' => ['Cardamome', 'Safran', 'Mandarine', 'Muscade'],
                    'middle' => ['Kulfi', 'Rose', 'Jasmin', 'Fleur d\'Oranger'],
                    'base' => ['Ambre', 'Santal', 'Vanille']
                ],
                'images' => [
                    'homme/hiver/Tom Ford Noir Extreme-1.jfif',
                    'homme/hiver/Tom Ford Noir Extreme-2.jfif',
                    'homme/hiver/Tom Ford Noir Extreme-3.jfif'
                ]
            ],
            [
                'nom' => 'Acqua di Giò Profondo',
                'description' => "Acqua di Giò Profondo de Giorgio Armani est une interprétation marine et intense du parfum iconique. Ce parfum masculin plonge dans les profondeurs de l'âme avec des notes aquatiques et aromatiques, offrant un sillage frais, moderne et minéral. Idéal comme meilleur parfum homme ou parfum homme maroc pour une sensation de fraîcheur infinie et élégante.",
                'prix' => 1100,
                'stock' => 100,
                'marque' => 'Giorgio Armani',
                'genre' => 'homme',
                'saison' => 'ete',
                'format' => '75ml',
                'caracteristique' => "Fragrance masculine marine, aromatique et boisée. | Notes de tête de mandarine verte et de notes marines glacées. | Accord de romarin, lavande et fond de patchouli minéral.",
                'notes_details' => [
                    'top' => ['Notes Marines', 'Mandarine Verte', 'Cardamome'],
                    'middle' => ['Romarin', 'Lavande', 'Cypress', 'Lentisque'],
                    'base' => ['Patchouli', 'Musc', 'Ambre']
                ],
                'images' => [
                    'homme/ete/Acqua di Gio Profondo-1.jfif',
                    'homme/ete/Acqua di Gio Profondo-2.jfif',
                    'homme/ete/Acqua di Gio Profondo-3.jfif'
                ]
            ],
            [
                'nom' => 'Bleu de Chanel',
                'description' => "Bleu de Chanel Eau de Parfum est une fragrance boisée et aromatique qui incarne la liberté masculine. Ce parfum masculin dévoile des notes de bois de santal de Nouvelle-Calédonie et des facettes ambrées, offrant un sillage noble, sensuel et affirmé. Idéal comme meilleur parfum homme pour une élégance intemporelle et polyvalente.",
                'prix' => 1250,
                'stock' => 100,
                'marque' => 'Chanel',
                'genre' => 'homme',
                'saison' => 'ete',
                'format' => '50ml',
                'caracteristique' => "Fragrance masculine boisée-aromatique aux accents ambrés. | Notes de tête de zestes de citron, bergamote et menthe fraîche. | Fond intense de bois de santal, de cèdre et de fève tonka.",
                'notes_details' => [
                    'top' => ['Pamplemousse', 'Citron', 'Menthe', 'Poivre Rose'],
                    'middle' => ['Gingembre', 'Iso E Super', 'Muscade', 'Jasmin'],
                    'base' => ['Encens', 'Vétiver', 'Cèdre', 'Santal', 'Patchouli']
                ],
                'images' => [
                    'homme/ete/Bleu de Chanel Eau de Parfum-1.jfif',
                    'homme/ete/Bleu de Chanel Eau de Parfum-2.jfif',
                    'homme/ete/Bleu de Chanel Eau de Parfum-3.jfif'
                ]
            ],
            [
                'nom' => 'D&G Light Blue Pour Homme',
                'description' => "Light Blue Pour Homme de Dolce & Gabbana est une fragrance hespéridée et aromatique qui capture l'énergie de la Méditerranée. Ce parfum masculin dévoile des notes fraîches d'agrumes et de genièvre, offrant un sillage tonique, décontracté et ensoleillé. Idéal comme meilleur parfum homme pour les journées chaudes ou pour une sensation de fraîcheur immédiate.",
                'prix' => 800,
                'stock' => 100,
                'marque' => 'Dolce & Gabbana',
                'genre' => 'homme',
                'saison' => 'ete',
                'format' => '75ml',
                'caracteristique' => "Fragrance masculine fraîche, aquatique et agrumée. | Notes de tête de pamplemousse givré, bergamote et mandarine de Sicile. | Fond boisé de musc blanc, encens et bois de chêne.",
                'notes_details' => [
                    'top' => ['Pamplemousse', 'Bergamote', 'Mandarine de Sicile', 'Genièvre'],
                    'middle' => ['Romarin', 'Poivre', 'Bois de Rose'],
                    'base' => ['Musc', 'Encens', 'Mousse de Chêne']
                ],
                'images' => [
                    'homme/ete/Dolce & Gabbana-1.jfif',
                    'homme/ete/Dolce & Gabbana-2.jfif',
                    'homme/ete/Dolce & Gabbana-3.jfif'
                ]
            ],
            [
                'nom' => 'Nautica Voyage',
                'description' => "Nautica Voyage est une fragrance emblématique qui capture l'esprit de l'aventure et de la liberté en haute mer. Ce parfum masculin dévoile des notes aquatiques et vertes grâce à la pomme croquante, offrant un sillage incroyablement rafraîchissant et propre. Idéal comme meilleur parfum homme pour un usage quotidien, particulièrement lors des chaudes journées d'été au Maroc.",
                'prix' => 160,
                'stock' => 100,
                'marque' => 'Nautica',
                'genre' => 'homme',
                'saison' => 'ete',
                'format' => '50ml',
                'caracteristique' => "Fragrance masculine boisée aquatique, fraîche et revigorante. | Notes de tête de feuilles vertes et de pomme croquante. | Cœur floral de lotus et de mimosa avec un fond de cèdre et de mousse de chêne.",
                'notes_details' => [
                    'top' => ['Pomme', 'Feuilles Vertes'],
                    'middle' => ['Lotus', 'Mimosa'],
                    'base' => ['Musc', 'Cèdre', 'Mousse de Chêne', 'Ambre']
                ],
                'images' => [
                    'homme/ete/nautica-1.jfif',
                    'homme/ete/nautica-2.jfif',
                    'homme/ete/nautica-3.jfif'
                ]
            ],
            [
                'nom' => 'Versace Pour Homme',
                'description' => "Versace Pour Homme est une fragrance classique et dynamique qui incarne l'homme méditerranéen moderne. Ce parfum masculin dévoile des notes hespéridées et florales grâce au néroli, offrant un sillage frais, propre et distingué. Idéal comme meilleur parfum homme pour le bureau ou les sorties quotidiennes sous le soleil du Maroc.",
                'prix' => 650,
                'stock' => 100,
                'marque' => 'Versace',
                'genre' => 'homme',
                'saison' => 'ete',
                'format' => '50ml',
                'caracteristique' => "Fragrance masculine aromatique, fougère et très fraîche. | Notes de tête de citron de Diamante, feuilles d'oranger amer et fleurs de néroli. | Cœur minéral de sauge sclarée et fond boisé de bois de cèdre et d'amb",
                'notes_details' => [
                    'top' => ['Citron', 'Néroli', 'Bergamote', 'Rose de Mai'],
                    'middle' => ['Jacinthe', 'Sauge Sclarée', 'Cèdre', 'Géranium'],
                    'base' => ['Fève Tonka', 'Musc', 'Ambre']
                ],
                'images' => [
                    'homme/ete/Versace-1.jfif',
                    'homme/ete/Versace-2.jfif',
                    'homme/ete/Versace-3.jfif'
                ]
            ],
            [
                'nom' => 'YSL Y Eau de Parfum',
                'description' => "Y Eau de Parfum d'Yves Saint Laurent est une fragrance intense et profonde qui incarne l'esprit de l'accomplissement. Ce parfum masculin dévoile des notes boisées et aromatiques grâce à la sauge et au géranium, offrant un sillage puissant, frais et résolument moderne. Idéal comme meilleur parfum homme pour ceux qui osent poursuivre leurs rêves.",
                'prix' => 1000,
                'stock' => 100,
                'marque' => 'Yves Saint Laurent',
                'genre' => 'homme',
                'saison' => 'ete',
                'format' => '60ml',
                'caracteristique' => "Fragrance masculine fougère boisée, intense et lumineuse. | Notes de tête de pomme verte croquante et de gingembre frais. | Cœur de sauge sclarée et fond de bois ambrés et d'oliban.",
                'notes_details' => [
                    'top' => ['Pomme', 'Gingembre', 'Bergamote'],
                    'middle' => ['Sauge', 'Baies de Genièvre', 'Géranium'],
                    'base' => ['Ambrewood', 'Fève Tonka', 'Cèdre', 'Vétiver', 'Oliban']
                ],
                'images' => [
                    'homme/ete/YSL Y Eau de Parfum-1.jfif',
                    'homme/ete/YSL Y Eau de Parfum-2.jfif',
                    'homme/ete/YSL Y Eau de Parfum-3.jfif'
                ]
            ],
            [
                'nom' => 'MFK Baccarat Rouge 540 Extrait',
                'description' => "Baccarat Rouge 540 Extrait de parfum intensifie la puissance et l'éclat de l'aura fleurie ambrée boisée de la fragrance originale. Ce parfum dévoile des notes de fleurs de jasmin et de muscs ligneux, offrant une alchimie poétique, graphique et hautement condensée. Idéal comme meilleur parfum de prestige pour une signature olfactive sophistiquée et inoubliable.",
                'prix' => 4000,
                'stock' => 100,
                'marque' => 'Maison Francis Kurkdjian',
                'genre' => 'femme',
                'saison' => 'hiver',
                'format' => '70ml',
                'caracteristique' => "Fragrance boisée ambrée florale, d'une intensité et d'une tenue exceptionnelles. | Notes de tête de safran et de jasmin grandiflorum d'Égypte. | Cœur d'amande amère du Maroc et fond de bois de cèdre et d'accord ambre gris.",
                'notes_details' => [
                    'top' => ['Amande Amère', 'Safran'],
                    'middle' => ['Jasmin Egyptien', 'Cèdre'],
                    'base' => ['Ambre Gris', 'Notes Boisées', 'Musc']
                ],
                'images' => [
                    'femme/hiver/Maison Francis Kurkdjian-1.jfif',
                    'femme/hiver/Maison Francis Kurkdjian-2.jfif',
                    'femme/hiver/Maison Francis Kurkdjian-3.jfif'
                ]
            ],
            [
                'nom' => "Miss Dior Rose N'Roses",
                'description' => "Miss Dior Rose N'Roses est une fragrance florale pétillante, une profusion de roses de Grasse rafraîchies par un zeste de bergamote. Ce parfum féminin vous transporte au cœur d'un champ de fleurs à l'infini, offrant un sillage vif, frais et radieux. Idéal comme meilleur parfum femme pour celles qui recherchent une élégance florale moderne et spontanée.",
                'prix' => 1100,
                'stock' => 100,
                'marque' => 'Dior',
                'genre' => 'femme',
                'saison' => 'hiver',
                'format' => '50ml',
                'caracteristique' => "Fragrance féminine florale, fraîche et étincelante. | Notes de tête de bergamote d'Italie et de mandarine. | Cœur de rose de Grasse et rose damascena sur un fond de muscs blancs.",
                'notes_details' => [
                    'top' => ['Bergamote d\'Italie', 'Mandarine'],
                    'middle' => ['Rose de Grasse', 'Rose de Damas'],
                    'base' => ['Musc Blanc']
                ],
                'images' => [
                    'femme/hiver/Miss Dior Rose-1.jfif',
                    'femme/hiver/Miss Dior Rose-2.jfif',
                    'femme/hiver/Miss Dior Rose-3.jfif'
                ]
            ],
            [
                'nom' => "Parfums de Marly Delina Exclusif",
                'description' => "Delina Exclusif est une réinterprétation plus profonde et mystérieuse du célèbre bouquet floral. Ce parfum féminin dévoile des notes de rose damascena enveloppées d'un accord oriental, offrant un sillage velouté, sensuel et sophistiqué. Idéal comme meilleur parfum femme pour celles qui recherchent une élégance royale et une tenue exceptionnelle.",
                'prix' => 3100,
                'stock' => 100,
                'marque' => 'Parfums de Marly',
                'genre' => 'femme',
                'saison' => 'hiver',
                'format' => '75ml',
                'caracteristique' => "Fragrance féminine florale ambrée, riche et envoûtante. | Notes de tête de litchi, poire et bergamote. | Cœur de rose damascena et encens sur un fond de vanille et d'ambre.",
                'notes_details' => [
                    'top' => ['Litchi', 'Poire', 'Bergamote'],
                    'middle' => ['Rose de Damas', 'Encens', 'Oud'],
                    'base' => ['Vanille', 'Ambre', 'Notes Boisées']
                ],
                'images' => [
                    'femme/hiver/PARFUMS DE MARLY Delina-1.jfif',
                    'femme/hiver/PARFUMS DE MARLY Delina-2.jfif',
                    'femme/hiver/PARFUMS DE MARLY Delina-3.jfif'
                ]
            ],
            [
                'nom' => "Prada Paradoxe",
                'description' => "Prada Paradoxe est une fragrance florale ambrée qui célèbre l'expression de soi et la multidimensionnalité de la femme. Ce parfum féminin dévoile des notes de néroli et de jasmin réinventées par une signature ambrée innovante, offrant un sillage à la fois frais, chaleureux et vibrant. Idéal comme meilleur parfum femme pour une allure élégante et audacieuse.",
                'prix' => 1100,
                'stock' => 100,
                'marque' => 'Prada',
                'genre' => 'femme',
                'saison' => 'hiver',
                'format' => '50ml',
                'caracteristique' => "Fragrance féminine florale ambrée, intemporelle et avant-gardiste. | Notes de tête de poire, mandarine et bergamote. | Cœur de néroli et jasmin sur un fond d'ambre et de musc blanc.",
                'notes_details' => [
                    'top' => ['Poire', 'Mandarine', 'Bergamote'],
                    'middle' => ['Fleur d\'Oranger', 'Jasmin Sambac', 'Néroli'],
                    'base' => ['Ambre', 'Musc Blanc', 'Vanille Bourbon']
                ],
                'images' => [
                    'femme/hiver/prada-1.jfif',
                    'femme/hiver/prada-2.jfif',
                    'femme/hiver/prada-3.jfif'
                ]
            ],
            [
                'nom' => "Valentino Donna Born In Roma",
                'description' => "Born In Roma Donna de Valentino est une fragrance florale moderne et haute couture. Ce parfum féminin mélange l'élégance de trois fleurs de jasmin avec la douceur de la vanille Bourbon, offrant un sillage à la fois rock, luxueux et sophistiqué. Idéal comme meilleur parfum femme pour celles qui revendiquent leur personnalité avec audace.",
                'prix' => 1100,
                'stock' => 100,
                'marque' => 'Valentino',
                'genre' => 'femme',
                'saison' => 'hiver',
                'format' => '50ml',
                'caracteristique' => "Fragrance féminine florale boisée, chic et contemporaine. | Notes de tête de poivre rose et de cassis pétillant. | Cœur de jasmin grandiflorum et fond de vanille Bourbon intense et bois de cachemire.",
                'notes_details' => [
                    'top' => ['Cassis', 'Poivre Rose', 'Bergamote'],
                    'middle' => ['Jasmin Sambac', 'Jasmin', 'Thé au Jasmin'],
                    'base' => ['Vanille Bourbon', 'Cashmeran', 'Guaiac Wood']
                ],
                'images' => [
                    'femme/hiver/valentino donna-1.jfif',
                    'femme/hiver/valentino donna-2.jfif',
                    'femme/hiver/valentino donna-3.jfif',
                ]
            ],
            [
                'nom' => "Victoria's Secret Bombshell",
                'description' => "Bombshell est la fragrance iconique de Victoria's Secret, célèbre pour son mélange fruité et floral irrésistible. Ce parfum féminin dévoile des notes de fruits de la passion et de pivoine, offrant un sillage pétillant, frais et plein de confiance. Idéal comme meilleur parfum femme pour celles qui aiment une signature olfactive joyeuse et glamour au quotidien",
                'prix' => 800,
                'stock' => 100,
                'marque' => "Victoria's Secret",
                'genre' => 'femme',
                'saison' => 'hiver',
                'format' => '50ml',
                'caracteristique' => "Fragrance féminine fruitée florale, fraîche et énergique. | Notes de tête de fruit de la passion pourpré, agrumes et fraise. | Cœur de pivoine Shangri-la et orchidée vanille sur un fond de pin et musc.",
                'notes_details' => [
                    'top' => ['Fruit de la Passion', 'Pamplemousse', 'Ananas', 'Tangerine', 'Fraise'],
                    'middle' => ['Pivoine', 'Orchidée Vanille', 'Baies Rouges', 'Jasmin', 'Muguet'],
                    'base' => ['Musc', 'Notes Boisées', 'Mousse de Chêne']
                ],
                'images' => [
                    'femme/hiver/Victorias Secret Bombshell-1.jfif',
                    'femme/hiver/Victorias Secret Bombshell-2.jfif',
                    'femme/hiver/Victorias Secret Bombshell-3.jfif',
                ]
            ],
            [
                'nom' => "Guerlain Aqua Allegoria Forte Rosa Rossa",
                'description' => "Rosa Rossa Forte est une célébration majestueuse de la rose, magnifiée par des notes fruitées et boisées. Ce parfum féminin dévoile une rose bulgare et une rose de Damas baignées de lumière, offrant un sillage intense, velouté et solaire. Idéal comme meilleur parfum femme pour celles qui apprécient une élégance florale profonde et raffinée.",
                'prix' => 1300,
                'stock' => 100,
                'marque' => "Guerlain",
                'genre' => 'femme',
                'saison' => 'ete',
                'format' => '75ml',
                'caracteristique' => "Fragrance féminine florale fruitée, lumineuse et intense. | Notes de tête de pêche blanche juteuse et de poivre rose. | Cœur de roses précieuses sur un fond de bois de santal et de patchouli.",
                'notes_details' => [
                    'top' => ['Poivre Rose', 'Pêche'],
                    'middle' => ['Rose de Damas', 'Rose de Bulgarie'],
                    'base' => ['Santal', 'Patchouli']
                ],
                'images' => [
                    'femme/ete/aqua allegoria guerlain-1.jfif',
                    'femme/ete/aqua allegoria guerlain-2.jfif',
                    'femme/ete/aqua allegoria guerlain-3.jfif',
                ]
            ],
            [
                'nom' => "Coco Mademoiselle Intense",
                'description' => "Coco Mademoiselle Eau de Parfum Intense est une fragrance ambrée, boisée et orientale au caractère affirmé. Ce parfum féminin pousse à l'extrême la dose de patchouli et l'enveloppe d'un accord ambré de vanille et de fève tonka, offrant un sillage puissant, profond et irrésistible. Idéal comme meilleur parfum femme pour une élégance sophistiquée et une présence magnétique.",
                'prix' => 1400,
                'stock' => 100,
                'marque' => "Chanel",
                'genre' => 'femme',
                'saison' => 'ete',
                'format' => '50ml',
                'caracteristique' => "Fragrance féminine ambrée-boisée, intense et voluptueuse. | Notes de tête d'orange de Sicile et de bergamote de Calabre. | Cœur de rose et de jasmin sur un fond de patchouli extrême, fève tonka et vanille de Madagascar.",
                'notes_details' => [
                    'top' => ['Orange de Sicile', 'Bergamote de Calabre', 'Citron'],
                    'middle' => ['Rose', 'Jasmin', 'Notes Fruitées'],
                    'base' => ['Patchouli', 'Fève Tonka', 'Vanille de Madagascar', 'Musc Blanc', 'Labdanum']
                ],
                'images' => [
                    'femme/ete/coco mademoiselle chanel-1.jfif',
                    'femme/ete/coco mademoiselle chanel-2.jfif',
                    'femme/ete/coco mademoiselle chanel-3.jfif',
                ]
            ],
            [
                'nom' => "Marc Jacobs Daisy",
                'description' => "Daisy de Marc Jacobs est une fragrance fraîche et féminine, avec un côté ludique. Ce parfum féminin dévoile des notes de fraise sauvage et de violette, offrant un sillage à la fois lumineux, décontracté et sophistiqué. Idéal comme meilleur parfum femme pour celles qui recherchent une élégance pure et une touche de fantaisie au quotidien.",
                'prix' => 900,
                'stock' => 100,
                'marque' => "Marc Jacobs",
                'genre' => 'femme',
                'saison' => 'ete',
                'format' => '50ml',
                'caracteristique' => "Fragrance féminine florale boisée, étincelante et printanière. | Notes de tête de fraise sauvage, pamplemousse rose et feuilles de violette. | Cœur de gardénia et jasmin sur un fond de musc, infusion de vanille et bois blancs.",
                'notes_details' => [
                    'top' => ['Feuilles de Violette', 'Pamplemousse Rose', 'Fraise Sauvage'],
                    'middle' => ['Violette', 'Gardénia', 'Jasmin'],
                    'base' => ['Musc', 'Bois Blancs', 'Vanille']
                ],
                'images' => [
                    'femme/ete/daisy marc jacobs-1.jfif',
                    'femme/ete/daisy marc jacobs-2.jfif',
                    'femme/ete/daisy marc jacobs-3.jfif',
                ]
            ],
            [
                'nom' => "Dolce & Gabbana Light Blue Capri in Love",
                'description' => "Light Blue Capri in Love est une édition solaire et romantique qui rend hommage à l'élégance naturelle de l'île de Capri. Ce parfum féminin, créé par Emilie Coppermann, capture la lumière méditerranéenne avec une harmonie délicate et rafraîchissante. Idéal comme meilleur parfum femme pour celles qui recherchent une fragrance florale et fruitée évoquant la sérénité d'un été italien.",
                'prix' => 1400,
                'stock' => 100,
                'marque' => "Dolce & Gabbana",
                'genre' => 'femme',
                'saison' => 'ete',
                'format' => '50ml',
                'caracteristique' => "Fragrance féminine florale, fraîche et enveloppante. | Notes de tête de thé au jasmin délicat. | Cœur de pomme Granny Smith croquante sur un fond sophistiqué de Longoza. | Design du flacon orné de motifs en majolique bleue de Capri.",
                'notes_details' => [
                    'top' => ['Thé au Jasmin'],
                    'middle' => ['Pomme Granny Smith'],
                    'base' => ['Longoza']
                ],
                'images' => [
                    'femme/ete/dolce gabbana light blue-1.jfif',
                    'femme/ete/dolce gabbana light blue-2.jfif',
                    'femme/ete/dolce gabbana light blue-3.jfif',
                ]
            ],
            [
                'nom' => "Gucci Flora Gorgeous Gardenia",
                'description' => "Gorgeous Gardenia est un parfum joyeux et lumineux, imaginé comme un élixir de bonheur. Il met à l'honneur la fleur de gardénia, mélangée à la douceur du jasmin pour créer une odeur florale moderne et mystique. C'est un excellent choix pour celles qui aiment les parfums romantiques et délicatement sucrés.",
                'prix' => 1300,
                'stock' => 100,
                'marque' => "Gucci",
                'genre' => 'femme',
                'saison' => 'ete',
                'format' => '50ml',
                'caracteristique' => "Une fragrance florale et fruitée, très positive. | Un mélange de fleur de poirier, de gardénia blanc et de sucre roux. | Un joli verre rose laqué avec le célèbre motif de fleurs de Gucci",
                'notes_details' => [
                    'top' => ['Fleur de Poirier', 'Mandarine d\'Italie', 'Baies Rouges'],
                    'middle' => ['Gardénia Blanc', 'Jasmin Sambac', 'Frangipanier'],
                    'base' => ['Sucre Roux', 'Patchouli']
                ],
                'images' => [
                    'femme/ete/gucci flora perfume-1.jfif',
                    'femme/ete/gucci flora perfume-2.jfif',
                    'femme/ete/gucci flora perfume-3.jfif',
                ]
            ],
            [
                'nom' => "Versace Bright Crystal",
                'description' => "Bright Crystal est une fragrance iconique inspirée par la haute joaillerie de Versace. C'est un parfum floral et fruité, caractérisé par sa fraîcheur cristalline et son élégance lumineuse. Il est particulièrement apprécié pour sa polyvalence, idéal pour le bureau ou une sortie romantique, surtout durant les mois chauds.",
                'prix' => 800,
                'stock' => 100,
                'marque' => "Versace",
                'genre' => 'femme',
                'saison' => 'ete',
                'format' => '50ml',
                'caracteristique' => "Floral, fruité et frais. | Un mélange pétillant de grenade et de yuzu, suivi d'un cœur doux de pivoine et de magnolia, sur un fond de musc et d'acajou. | Élégant et luxueux, surmonté d'un bouchon imposant taillé comme un diamant.",
                'notes_details' => [
                    'top' => ['Yuzu', 'Grenade', 'Notes Glacées'],
                    'middle' => ['Pivoine', 'Lotus', 'Magnolia'],
                    'base' => ['Musc', 'Acajou', 'Ambre']
                ],
                'images' => [
                    'femme/ete/versace bright crystal-1.jfif',
                    'femme/ete/versace bright crystal-2.jfif',
                    'femme/ete/versace bright crystal-3.jfif',
                ]
            ],
        ];

        foreach ($parfums as $data) {
            $images = $data['images'];
            $notesDetails = $data['notes_details'] ?? null;
            unset($data['images'], $data['notes_details']);

            $parfum = Parfum::create($data);

            // Images
            foreach ($images as $index => $imagePath) {
                Image::create([
                    'url' => '/parfums/' . $imagePath,
                    'is_main' => ($index === 0),
                    'parfum_id' => $parfum->id
                ]);
            }

            // Notes Olfactives
            if ($notesDetails) {
                foreach ($notesDetails as $type => $notes) {
                    foreach ($notes as $noteName) {
                        $note = \App\Models\NoteOlfactive::firstOrCreate([
                            'nom' => $noteName,
                            'type' => $type
                        ]);
                        $parfum->notes()->attach($note->id);
                    }
                }
            }
        }
    }
}
