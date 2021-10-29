<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'tech' => Str::slug('tech'),
            'healty' => Str::slug('healty')
        ];

        foreach ($data as $key => $item) {
            $toRole = Category::firstOrCreate(['name' => $item], ['slug' => $key]);
        }
    }
}
