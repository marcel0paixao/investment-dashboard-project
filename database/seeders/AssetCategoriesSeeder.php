<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssetCategories;

class AssetCategoriesSeeder extends Seeder
{
    public function run()
    {
        AssetCategories::create(['name' => 'Equities']);
        AssetCategories::create(['name' => 'Fixed Income']);
        AssetCategories::create(['name' => 'Alternative Investments']);
        AssetCategories::create(['name' => 'Cash and Cash Equivalents']);
    }
}
