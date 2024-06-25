<?php

namespace App\Http\Controllers;

use App\Models\Categorieen;
use App\Models\Magazijn;
use App\Models\Productcategorieen;
use App\Models\Producten;
use Illuminate\Http\Request;

class VoorraadController extends Controller
{
    public function overzicht_producten()
    {
        // Get all product details
        $productList = Producten::select(
            'producten.id',
            'producten.productnaam',
            'producten.streepjescode',
            'magazijn.aantalaanwezig',
            'categorieen.naam'
        )
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

    // Function for creating a new product
    public function toevoegen()
    {
        // Get all categories from database
        $categories = Categorieen::all();

        // Return user to the create page
        return view('voorraad.toevoegen', compact('categories'));
    }

    // Function to handle the create producten form submit request
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'productnaam' => 'required|string|max:100',
            'streepjescode' => 'required|string|min:13|max:13',
            'categorie' => 'required|integer|exists:categorieen,id',
            'aantalaanwezig' => 'required|integer|min:0',
        ]);

        // Create the product
        $product = Producten::create([
            'productnaam' => $validatedData['productnaam'],
            'streepjescode' => $validatedData['streepjescode'],
            'isActief' => true,
            'opmerkingen' => $request->input('opmerkingen', null),
        ]);

        // Assign category to the product
        Productcategorieen::create([
            'product_Id' => $product->id,
            'categorie_Id' => $validatedData['categorie'],
            'isActief' => true,
            'opmerkingen' => $request->input('opmerkingen', null),
        ]);

        // Add product to the warehouse (magazijn)
        Magazijn::create([
            'product_Id' => $product->id,
            'aantalaanwezig' => $validatedData['aantalaanwezig'],
            'isActief' => true,
            'opmerkingen' => $request->input('opmerkingen', null),
        ]);

        // Return the user to the index page with a success message
        return redirect()->route('voorraad.overzicht_producten')->with('success', 'Product is succesvol toegevoegd');
    }

    // Function for editing the selected product details
    public function wijzigen($productId)
    {
        $product = Producten::findOrFail($productId);

        // Get all categories from database
        $categories = Categorieen::all();

        // Return user to the create page
        return view('voorraad.wijzigen', compact('product', 'categories'));
    }

    // Function to handle the edit producten form submit request
    public function update(Request $request, $productId)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'productnaam' => 'required|string|max:100',
            'streepjescode' => 'required|string|max:13',
            'categorie' => 'required|integer|exists:categorieen,id',
            'aantalaanwezig' => 'required|integer|min:0',
        ]);

        // Find the product by using the productId
        $product = Producten::findOrFail($productId);
        $product->update([
            'productnaam' => $validatedData['productnaam'],
            'streepjescode' => $validatedData['streepjescode'],
            'isActief' => true,
            'opmerkingen' => $request->input('opmerkingen', null),
        ]);

        // Update the category of the product
        $productCategory = ProductCategorieen::where('product_Id', $product->id)->first();
        $productCategory->update([
            'categorie_Id' => $validatedData['categorie'],
            'isActief' => true,
            'opmerkingen' => $request->input('opmerkingen', null),
        ]);

        // Update the product in the warehouse (magazijn)
        $magazijn = Magazijn::where('product_Id', $product->id)->first();
        $magazijn->update([
            'aantalaanwezig' => $validatedData['aantalaanwezig'],
            'isActief' => true,
            'opmerkingen' => $request->input('opmerkingen', null),
        ]);

        // Return the user to the index page with a success message
        return redirect()->route('voorraad.overzicht_producten')->with('success', 'Product is succesvol gewijzigd');
    }
}
