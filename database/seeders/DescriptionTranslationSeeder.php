<?php

namespace Database\Seeders;

use App\Models\Meal;
use Illuminate\Database\Seeder;
use App\Models\DescriptionTranslation;

class DescriptionTranslationSeeder extends Seeder
{
    public function run(): void
    {
        //english description translation
        $enFaker = \Faker\Factory::create('en_US');
        $enFaker->addProvider(new \Faker\Provider\en_US\Text($enFaker));
        foreach(Meal::all() as $index){
            static $n = 1;
            DescriptionTranslation::insert(
                [
                    'description'    => $enFaker->realText(100),
                    'description_id' => $n++,
                    'locale'         => 'en'
                ]
            );
        }
        //italian description translation
        $itFaker = \Faker\Factory::create('it_IT');
        $itFaker->addProvider(new \Faker\Provider\it_IT\Text($itFaker));
        foreach(Meal::all() as $index){
            static $n1 = 1;
            DescriptionTranslation::insert(
                [
                    'description'    => $itFaker->realText(100),
                    'description_id' => $n1++,
                    'locale'         => 'it'
                ]
            );
        }
        //german description translation
        $deFaker = \Faker\Factory::create('de_DE');
        $deFaker->addProvider(new \Faker\Provider\de_DE\Text($itFaker));
        foreach(Meal::all() as $index){
            static $n2 = 1;
            DescriptionTranslation::insert(
                [
                    'description'    => $deFaker->realText(100),
                    'description_id' => $n2++,
                    'locale'         => 'de'
                ]
            );
        }
        //croatian description translation
        $hrFaker = \Faker\Factory::create();
        foreach(Meal::all() as $index){
            static $n3 = 1;
            DescriptionTranslation::insert(
                [
                    'description'    => $hrFaker->paragraph(2),
                    'description_id' => $n3++,
                    'locale'         => 'hr'
                ]
            );
        }
    }
}
