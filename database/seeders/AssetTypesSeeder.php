<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssetType;

class AssetTypesSeeder extends Seeder
{
    public function run()
    {
        AssetType::create(['name' => 'Equities', 'description' => 'Stocks of publicly traded companies']);
        AssetType::create(['name' => 'Fixed Income', 'description' => 'Investments with predictable returns']);
        AssetType::create(['name' => 'Real Estate Funds', 'description' => 'Funds investing in real estate']);
        AssetType::create(['name' => 'Commodities', 'description' => 'Investments in physical goods like metals or agricultural products']);
        AssetType::create(['name' => 'Cryptocurrencies', 'description' => 'Digital or virtual currencies']);
        AssetType::create(['name' => 'Treasuries', 'description' => 'Government bonds and similar securities']);
    }
}
