<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productallergie;
use App\Models\Product;
use App\Models\Allergie;
use Illuminate\Support\Facades\DB;

class ProductallergieController extends Controller
{
    public function overzicht_allergieen()
    {
        $productallergie = DB::table('productallergie')
            ->join('allergie', 'allergie.id', '=', 'productallergie.allergie_id')
            ->join('product', 'productallergie.product_id', '=', 'product.id')
            ->select('product.id as productId', 'allergie.naam as allergieNaam', 'product.productnaam as productNaam')
            ->orderBy('product.productnaam', 'asc')
            ->get();

        $grouped = $productallergie->groupBy('productId')->map(function ($items) {
            return [
                'productNaam' => $items->first()->productNaam,
                'allergieen' => $items->pluck('allergieNaam')->unique()->implode(', ')
            ];
        });

        return view('allergie/overzicht', ['productallergie' => $grouped]);
    }
    public function wijzig()
    {
        $allergieen = Allergie::all();
        return view('allergie/allergien_list', ['allergie' => $allergieen]);
    }
}
