<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fixed Income (Treasuries)
        Asset::create(['name' => 'Tesouro Selic 2026 (LFT)', 'type_id' => 2]);
        Asset::create(['name' => 'Tesouro IPCA+ 2035 (NTNB)', 'type_id' => 2]);
        Asset::create(['name' => 'Tesouro Prefixado 2029 (LTN)', 'type_id' => 2]);

        // Equities
        Asset::create(['name' => 'PETR4 - Petrobras', 'type_id' => 1]);
        Asset::create(['name' => 'VALE3 - Vale', 'type_id' => 1]);
        Asset::create(['name' => 'ITSA4 - Itaúsa', 'type_id' => 1]);
        Asset::create(['name' => 'AGRO3 - BrasilAgro', 'type_id' => 1]);
        Asset::create(['name' => 'ABEV3 - Ambev', 'type_id' => 1]);
        Asset::create(['name' => 'MGLU3 - Magazine Luiza', 'type_id' => 1]);

        // Real Estate Funds
        Asset::create(['name' => 'VISC11 - FII Vinci Shopping Centers', 'type_id' => 3]);
        Asset::create(['name' => 'HGLG11 - FII CSHG Logística', 'type_id' => 3]);
        Asset::create(['name' => 'XPML11 - FII XP Malls', 'type_id' => 3]);
        Asset::create(['name' => 'BTLG11 - FII BTG Logística', 'type_id' => 3]);
        Asset::create(['name' => 'KNRI11 - FII Kinea Renda Imobiliária', 'type_id' => 3]);

        // Commodities
        Asset::create(['name' => 'Ouro', 'type_id' => 4]);
        Asset::create(['name' => 'Petróleo Brent', 'type_id' => 4]);
        Asset::create(['name' => 'Café Arábica', 'type_id' => 4]);
        Asset::create(['name' => 'Açúcar', 'type_id' => 4]);
        Asset::create(['name' => 'Soja', 'type_id' => 4]);

        // Cryptocurrencies
        Asset::create(['name' => 'Bitcoin (BTC)', 'type_id' => 5]);
        Asset::create(['name' => 'Ethereum (ETH)', 'type_id' => 5]);
        Asset::create(['name' => 'Ripple (XRP)', 'type_id' => 5]);
        Asset::create(['name' => 'Litecoin (LTC)', 'type_id' => 5]);
        Asset::create(['name' => 'Binance Coin (BNB)', 'type_id' => 5]);

        // Treasuries
        Asset::create(['name' => 'Tesouro IPCA+ com Juros Semestrais 2045', 'type_id' => 6]);
        Asset::create(['name' => 'Tesouro Selic com Juros Semestrais 2030', 'type_id' => 6]);
    }
}
