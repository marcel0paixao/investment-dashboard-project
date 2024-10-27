<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssetType;

class AssetTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creating asset types
        AssetType::create(['name' => 'Equity']);           // Ação
        AssetType::create(['name' => 'Real Estate Fund']); // Fundo imobiliário
        AssetType::create(['name' => 'Fixed Income']);     // Renda fixa
        AssetType::create(['name' => 'Cryptocurrency']);   // Criptomoeda
    }
}
