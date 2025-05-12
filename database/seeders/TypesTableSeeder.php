<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Kodomo',
                'description' => 'Per bambini (6-12 anni)'
            ],
            [
                'name' => 'Shōnen',
                'description' => 'Per ragazzi (12-18 anni)'
            ],
            [
                'name' => 'Shōjo',
                'description' => 'Per ragazze (12-18 anni)'
            ],
            [
                'name' => 'Seinen',
                'description' => 'Per giovani adulti uomini (18+ anni)'
            ],
            [
                'name' => 'Josei',
                'description' => 'Per giovani adulte donne (18+ anni)'
            ],
            [
                'name' => 'Gekiga',
                'description' => 'Manga realistici e drammatici (per adulti).'
            ]
        ];

        foreach ($types as $type) {
            $newType = new Type();

            $newType->name = $type['name'];
            $newType->description = $type['description'];

            $newType->save();
        }
    }
}
