<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            ['name' => 'Italiano', 'code' => 'IT'],
            ['name' => 'Inglese', 'code' => 'EN'],
            ['name' => 'Francese', 'code' => 'FR'],
            ['name' => 'Tedesco', 'code' => 'DE'],
            ['name' => 'Spagnolo', 'code' => 'ES'],
            ['name' => 'Portoghese', 'code' => 'PT'],
            ['name' => 'Russo', 'code' => 'RU'],
            ['name' => 'Cinese', 'code' => 'ZH'],
            ['name' => 'Giapponese', 'code' => 'JA'],
            ['name' => 'Arabo', 'code' => 'AR']
        ];

        foreach ($languages as $language) {
            $newLanguage = new Language();

            $newLanguage->name = $language['name'];
            $newLanguage->code = $language['code'];

            $newLanguage->save();
        }
    }
}
