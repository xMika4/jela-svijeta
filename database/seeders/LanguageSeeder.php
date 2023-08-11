<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguageSeeder extends Seeder
{
    public function run(): void
    {
        $languages = collect([
            [
                'code' => 'en',
                'language' => 'English'
            ],
            [
                'code' => 'it',
                'language' => 'Italian'
            ],
            [
                'code' => 'de',
                'language' => 'German'
            ],
            [
                'code' => 'hr',
                'language' => 'Croatian'
            ]
        ]);
        $this->createLanguages($languages);
    }

    private function createLanguages($languages) {
       
        Language::insert($languages->toArray());
    }
}
