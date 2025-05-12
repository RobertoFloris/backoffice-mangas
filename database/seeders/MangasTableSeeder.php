<?php

namespace Database\Seeders;

use App\Models\Manga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class MangasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newManga = new Manga();

            $newManga->title = $faker->sentence();
            $newManga->author = $faker->name();
            $newManga->year_of_publication = $faker->year();
            $newManga->description = $faker->paragraph(12);

            $newManga->save();
        }
    }
}
