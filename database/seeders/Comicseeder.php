<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Comic;
//importo faker
use Faker\Generator as Faker;

class Comicseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //funzione che va a popolare la tabella
    public function run(Faker $faker): void
    {
        //creo un nuovo Comic 
        $new_comic= new Comic;
        //con i relativi dati da inserire
        $new_comic->title="topolino";
        $new_comic->thumb="https://fumettirari.com/wp-content/uploads/2021/10/topolino-n-1-min-scaled.jpg";
        $new_comic->price="1.50";
        $new_comic->save();
        //-------------
        //creo 5 fumetti finti 
        for ($i=0; $i <5 ; $i++) { 
            $new_comic= new Comic;
            $new_comic->title=$faker->sentence(2);
            $new_comic->thumb="https://picsum.photos/id/" . $faker->numberBetween(1, 700) . "/1920/1080";
            $new_comic->price=$faker->randomFloat(2, 0.99, 5.99);
            $new_comic->save();   
        }

    }
}
