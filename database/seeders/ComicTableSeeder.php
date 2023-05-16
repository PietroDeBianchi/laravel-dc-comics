<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comic');

        foreach ($comics as $comic) {

            $newComic = new Comic();
            $newComic->title = $comic;
            $newComic->description = $comic;
            $newComic->thumb = $comic;
            $newComic->price = $comic;
            $newComic->series = $comic;
            $newComic->sale_date = $comic;
            $newComic->type = $comic;
        }
    }
}
