<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public static int $recordCount = 10;
    public function run(): void
    { 
        Category::create([
            'name' => 'Root',
            'description' => 'This is the root category, don\'t delete this one',
            'parent_id' => null,
        ]);

        $categories = [];

        for ($i = 1; $i <= self::$recordCount; $i++) {
            $categories[] = [

                'name'          =>  fake()->name,
                'description'   =>  fake()->realText(100),
                'parent_id'     =>  1,
            ];
        }

        foreach (array_chunk($categories, 5) as $chunk) {
            Category::insert($chunk);
        }
    }
}
