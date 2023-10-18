<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Categories();
        $category->name_categories = 'Apple';
        $category->save();

        $category = new Categories();
        $category->name_categories = 'Google';
        $category->save();

        $category = new Categories();
        $category->name_categories = 'Huawei';
        $category->save();

        $category = new Categories();
        $category->name_categories = 'Oppo';
        $category->save();

        $category = new Categories();
        $category->name_categories = 'Realme';
        $category->save();

        $category = new Categories();
        $category->name_categories = 'Vivo';
        $category->save();

        $category = new Categories();
        $category->name_categories = 'Samsung';
        $category->save();

        $category = new Categories();
        $category->name_categories = 'Xiaomi';
        $category->save();

        $category = new Categories();
        $category->name_categories = 'Infinix';
        $category->save();

        $category = new Categories();
        $category->name_categories = 'Asus';
        $category->save();
    }
}
