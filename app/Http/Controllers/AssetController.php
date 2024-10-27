<?php

namespace App\Http\Controllers;

use Illuminate\Http\{ Request,  JsonResponse };
use App\Models\Asset, UserAssets;

class AssetController extends Controller
{
    public function getAll(): JsonResponse {
        // TODO: change to 30 when the project is done
        return response()->json(Asset::paginate(5), 200);
    }

    public function get(GetAssetRequest $request): JsonResponse {
        $asset = Asset::where('ticker', 'like', $request->ticker)->toArray();
        return $asset ? response()->json($asset, 200) : response()->json('not tickers found', 204);
    }

    public function store(StoreAssetRequest $request): JsonResponse {
        $asset = Asset::create($request->all());

        return response()->json([
            'status' => 'created',
            'data' => $asset
        ], 201);
    }

    public function buy(BuyAssetRequest $request): JsonResponse {
        $asset = Asset($request->asset_id);
        $user_asset = UserAssets::create([
            'asset_id' => $asset->id,
            'user_id' => Auth::id(),
            'quantity' => $request->quantity,
        ]);

        return response()->json([
            'status' => 'ok',
            'data' => $user_asset
        ], 201);
    }

    public function sell(SellAssetRequest $request): JsonResponse {
        $asset = Asset::create($request->all());

        return response()->json([
            'status' => 'ok',
            'data' => $asset
        ], 201);
    }

    public function delete(DeleteAssetRequest $request): JsonResponse {
        $asset = Asset::where('ticker', $request->ticker)->delete();

        return response()->json([
            'status' => 'ok',
            'data' => $asset
        ], 200);
    }
}
