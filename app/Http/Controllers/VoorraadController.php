<?php

namespace App\Http\Controllers;

use App\Models\Producten;
use Illuminate\Http\Request;

class VoorraadController extends Controller
{
    public function overzicht_producten()
    {
        // Get all product details
        $productList = Producten::select('producten.id', 'producten.productnaam', 'producten.streepjescode',
        'magazijn.aantalaanwezig',
        'categorieen.naam')
            // Join the different required tables by using the foreign keys
            ->join('magazijn', 'magazijn.product_Id', '=', 'producten.id')
            ->join('productcategorieen', 'producten.id', '=', 'productcategorieen.product_id')
            ->join('categorieen', 'categorieen.id', '=', 'productcategorieen.categorie_id')
            ->orderBy('producten.id', 'asc') // Sort by producten ID, ascending
            ->get();

        // Redirect user to the overzicht page
        return view('voorraad.overzicht', [
            'productList' => $productList
        ]);
    }
}
