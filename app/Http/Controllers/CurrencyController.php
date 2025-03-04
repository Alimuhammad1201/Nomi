<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    

public function convertCurrency($from, $to)
{
    $apiKey = env('CURRENCY_API_KEY');

    if (!$apiKey) {
        return response()->json(['error' => 'API Key missing from environment'], 400);
    }

    $url = "https://api.currencyapi.com/v3/latest?apikey=$apiKey";

    try {
        $response = Http::get($url);
        $data = $response->json();

        if (!isset($data['data'][$to]) || !isset($data['data'][$from])) {
            return response()->json(['error' => 'Invalid currency codes or API issue'], 400);
        }

        $rate = $data['data'][$to]['value'] / $data['data'][$from]['value'];

        return response()->json([
            'exchange_rate' => $rate
        ]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}
}

