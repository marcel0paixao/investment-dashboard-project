<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssetCategories;

class AssetCategoriesSeeder extends Seeder
{
    public function run()
    {
        AssetCategories::create(['name' => 'Tecnologia']);
        AssetCategories::create(['name' => 'Financeiro']);
        AssetCategories::create(['name' => 'Imobiliário']);
        AssetCategories::create(['name' => 'Energia']);
    }
}
