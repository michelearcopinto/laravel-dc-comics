<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        foreach ($comics as $element) {
            Comic::create([
                'title' => $element['title'],
                'description' => $element['description'],
                'thumb' => $element['thumb'],
                'price' => $element['price'],
                'series' => $element['series'],
                'sale_date' => $element['sale_date'],
                'type' => $element['type'],
            ]);
        }
    }
}
