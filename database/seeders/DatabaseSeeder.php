<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Usuaris (inserits manualment per assignar ID coneguts)
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'AdminUser',
                'email' => 'test1@example.com',
                'password' => bcrypt('1234'),
                'equip' => 'Vic',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'User2',
                'email' => 'test2@example.com',
                'password' => bcrypt('1234'),
                'equip' => 'Taradell',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'User3',
                'email' => 'test3@example.com',
                'password' => bcrypt('1234'),
                'equip' => 'Voltregà',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'User4',
                'email' => 'test4@example.com',
                'password' => bcrypt('1234'),
                'equip' => 'Taradell',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'User5',
                'email' => 'test5@example.com',
                'password' => bcrypt('1234'),
                'equip' => 'Voltrega',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Tipus de Producte
        DB::table('tipus_producte')->insert([
            ['nom' => "Stick Azemad Carbono", 'tipus' => "Porter", 'talla' => "L", 'preu' => 89.99],
            ['nom' => "Stick Azemad Tap Blau", 'tipus' => "Jugador", 'talla' => "L", 'preu' => 79.99],
            ['nom' => "Espinilleres Sioux", 'tipus' => "Jugador", 'talla' => "M", 'preu' => 59.99],
            ['nom' => "Guants Reno", 'tipus' => "Jugador", 'talla' => "M", 'preu' => 69.99],
            ['nom' => "Patins Azemad", 'tipus' => "Jugador", 'talla' => "L", 'preu' => 89.99],
        ]);

        // Productes
        DB::table('productes')->insert([
            ['nom_producte' => "Stick Azemad Carbono", 'quantitat_stock' => 12, 'tipus_producte_id' => 1],
            ['nom_producte' => "Stick Azemad Tap Blau", 'quantitat_stock' => 6, 'tipus_producte_id' => 2],
            ['nom_producte' => "Espinilleres Sioux", 'quantitat_stock' => 4, 'tipus_producte_id' => 3],
            ['nom_producte' => "Guants Reno", 'quantitat_stock' => 2, 'tipus_producte_id' => 4],
            ['nom_producte' => "Patins Azemad", 'quantitat_stock' => 1, 'tipus_producte_id' => 5],
        ]);

        // Comandes
        DB::table('comanda')->insert([
            ['nom' => "Stick Azemad Carbono", 'usuari_id' => 1, 'producte_id' => 1, 'data' => now()],
            ['nom' => "Stick Azemad Tap Blau", 'usuari_id' => 2, 'producte_id' => 2, 'data' => now()],
            ['nom' => "Espinilleres Sioux", 'usuari_id' => 3, 'producte_id' => 3, 'data' => now()],
            ['nom' => "Guants Reno", 'usuari_id' => 4, 'producte_id' => 4, 'data' => now()],
            ['nom' => "Patins Azemad", 'usuari_id' => 5, 'producte_id' => 5, 'data' => now()],
        ]);

        // Equips d'hoquei
        DB::table('equip_hoquei')->insert([
            ['usuari_id' => 1, 'nom' => "Stick Azemad Carbono", 'poblacio' => "Vic"],
            ['usuari_id' => 2, 'nom' => "Stick Azemad Tap Blau", 'poblacio' => "Taradell"],
            ['usuari_id' => 3, 'nom' => "Espinilleres Sioux", 'poblacio' => "Voltregà"],
            ['usuari_id' => 4, 'nom' => "Guants Reno", 'poblacio' => "Taradell"],
            ['usuari_id' => 5, 'nom' => "Patins Azemad", 'poblacio' => "Voltregà"],
        ]);

        // Comandes Productes
        DB::table('comanda_producte')->insert([
            ['producte_id' => 1, 'descompte' => true, 'percen_descompte' => 15, 'num_articles' => 1, 'preu_total' => 79.99],
            ['producte_id' => 2, 'descompte' => true, 'percen_descompte' => 15, 'num_articles' => 1, 'preu_total' => 69.99],
            ['producte_id' => 3, 'descompte' => false, 'percen_descompte' => 0, 'num_articles' => 1, 'preu_total' => 89.99],
            ['producte_id' => 4, 'descompte' => true, 'percen_descompte' => 15, 'num_articles' => 2, 'preu_total' => 119.98],
            ['producte_id' => 5, 'descompte' => false, 'percen_descompte' => 0, 'num_articles' => 1, 'preu_total' => 89.99],
        ]);
    }
}
