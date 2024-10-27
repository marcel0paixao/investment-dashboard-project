<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asset;

class AssetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Renda Fixa (Treasuries)
        Asset::create(['ticker' => 'LFT', 'name' => 'Tesouro Selic 2026', 'type_id' => 3]);
        Asset::create(['ticker' => 'NTNB', 'name' => 'Tesouro IPCA+ 2035', 'type_id' => 3]);
        Asset::create(['ticker' => 'LTN', 'name' => 'Tesouro Prefixado 2029', 'type_id' => 3]);

        // Ações (Equities)
        Asset::create(['ticker' => 'PETR4', 'name' => 'Petrobras', 'type_id' => 1]);
        Asset::create(['ticker' => 'VALE3', 'name' => 'Vale', 'type_id' => 1]);
        Asset::create(['ticker' => 'ITSA4', 'name' => 'Itaúsa', 'type_id' => 1]);
        Asset::create(['ticker' => 'AGRO3', 'name' => 'BrasilAgro', 'type_id' => 1]);
        Asset::create(['ticker' => 'ABEV3', 'name' => 'Ambev', 'type_id' => 1]);
        Asset::create(['ticker' => 'MGLU3', 'name' => 'Magazine Luiza', 'type_id' => 1]);

        // Fundos Imobiliários (Real Estate Funds)
        Asset::create(['ticker' => 'VISC11', 'name' => 'FII Vinci Shopping Centers', 'type_id' => 2]);
        Asset::create(['ticker' => 'HGLG11', 'name' => 'FII CSHG Logística', 'type_id' => 2]);
        Asset::create(['ticker' => 'XPML11', 'name' => 'FII XP Malls', 'type_id' => 2]);
        Asset::create(['ticker' => 'BTLG11', 'name' => 'FII BTG Logística', 'type_id' => 2]);
        Asset::create(['ticker' => 'KNRI11', 'name' => 'FII Kinea Renda Imobiliária', 'type_id' => 2]);

        // Criptomoedas (Cryptocurrencies)
        Asset::create(['ticker' => 'BTC', 'name' => 'Bitcoin', 'type_id' => 4]);
        Asset::create(['ticker' => 'ETH', 'name' => 'Ethereum', 'type_id' => 4]);
        Asset::create(['ticker' => 'XRP', 'name' => 'Ripple', 'type_id' => 4]);
        Asset::create(['ticker' => 'LTC', 'name' => 'Litecoin', 'type_id' => 4]);
        Asset::create(['ticker' => 'BNB', 'name' => 'Binance Coin', 'type_id' => 4]);
    }
}
