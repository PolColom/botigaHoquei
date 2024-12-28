<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    /**
     * Seed the application's database.
     */
    public function run(): void{
        //Usuaris (inserits manualment per assignar ID coneguts)
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin1@example.com',
                'password' => bcrypt('Genis1234'),
                'equip' => 'Vic',
                'role' => 'admin',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Guest',
                'email' => 'test1@example.com',
                'password' => bcrypt('1234'),
                'equip' => 'Taradell',
                'role' => 'guest',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        

        //Tipus de Producte
        DB::table('tipus_producte')->insert([
            [
                'nom' => "Material Porter",
                'tipus' => "Porter",
                'talla' => null,
                'preu' => null,
                'image_url' => "https://example.com/material_porter.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => "Material Jugador",
                'tipus' => "Jugador",
                'talla' => null,
                'preu' => null,
                'image_url' => "https://example.com/material_jugador.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        //Productes
        DB::table('productes')->insert([
            //Porter
            ['nom_producte' => "Azemad GT-10 XL Carbono Porter (Blanc)", 'image_url' => "https://www.hockeymania.es/2560-thickbox_default/stick-azemad-gt-10-xl-carbono-porter.jpg", 'quantitat_stock' => 12, 'tipus_producte_id' => 1, 'preu' => 94.50, 'descripcio' => "Los GT10 vienen con 7 cm adicionales a los modelos estándar."],
            ['nom_producte' => "GUARDAS PORTERO AZEMAD V GUARD", 'image_url' => "https://www.hockeymania.es/4635-large_default/guardas-portero-azemad-v-guard-l.jpg", 'quantitat_stock' => 10, 'tipus_producte_id' => 1, 'preu' => 310.00, 'descripcio' => "Guardas de portero fabricadas en piel, puntera reforzada y correas deslizantes."],

            //Jugador
            ['nom_producte' => "Stick Azemad Special (Tap Blau)", 'image_url' => "https://www.hockeymania.es/144-large_default/stick-azemad-special.jpg", 'quantitat_stock' => 6, 'tipus_producte_id' => 2, 'preu' => 76.00, 'descripcio' => "Stick ligero para jugadores con mayor control del balón."],
            ['nom_producte' => "RUEDAS TOOR DYNAMIC 92A", 'image_url' => "https://www.hockeymania.es/751-large_default/ruedas-toor-dynamic-92a.jpg", 'quantitat_stock' => 8, 'tipus_producte_id' => 2, 'preu' => 88.00, 'descripcio' => "Ruedas ultraligeras con dureza 92A y diámetro de 62 mm."],
            ['nom_producte' => "ESPINILLERAS SIOUX CARBONO PROTECT", 'image_url' => "https://www.hockeymania.es/1386-large_default/espinilleras-sioux-carbono-protect.jpg", 'quantitat_stock' => 7, 'tipus_producte_id' => 2, 'preu' => 123.50, 'descripcio' => "Espinilleras de fibra de carbono para gran protección."],
            ['nom_producte' => "GUANTES AZEMAD ECLIPSE NEGRO XL", 'image_url' => "https://www.hockeymania.es/3217-large_default/guantes-azemad-eclipse-negro-xl.jpg", 'quantitat_stock' => 5, 'tipus_producte_id' => 2, 'preu' => 62.00, 'descripcio' => "Guantes ergonómicos con palma de cuero y tejido elástico."],
        ]);

        //Comandes
        DB::table('comanda')->insert([
            ['nom' => "Azemad GT-10 XL Carbono Porter (Blanc)", 'usuari_id' => 1, 'producte_id' => 1, 'data' => now()],
            ['nom' => "Stick Azemad Special (Tap Blau)", 'usuari_id' => 2, 'producte_id' => 3, 'data' => now()],
        ]);
    }
}
