<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssetType;

class AssetTypesSeeder extends Seeder
{
    public function run()
    {
        AssetType::create(['name' => 'Ações', 'description' => 'Ações de empresas']);
        AssetType::create(['name' => 'Fundos Imobiliários', 'description' => 'Fundos de investimento imobiliário']);
        AssetType::create(['name' => 'Renda Fixa', 'description' => 'Investimentos de renda fixa']);
        AssetType::create(['name' => 'Criptomoedas', 'description' => 'Criptomoedas']);
    }
}
