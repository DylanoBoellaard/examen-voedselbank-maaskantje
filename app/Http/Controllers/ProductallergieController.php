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
            ->select('allergie.naam as allergieNaam', 'product.productnaam as productNaam')
            ->get();

        return view('allergie/overzicht', ['productallergie' => $productallergie]);
    }
}
