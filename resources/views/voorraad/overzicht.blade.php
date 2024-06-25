<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazijn overzicht</title>
    @vite(['resources/scss/voorraad/index.scss', 'resources/scss/voorraad/global.scss'])
</head>

<body>
    <div class="container">
        <h1>Overzicht Producten</h1>
        <a href="{{route('home')}}">Homepage</a>
        <a href="{{route('voorraad.toevoegen')}}">
            <img class="small-img" src="/img/Plus-button.png" alt="Plus-button.png">
        </a>

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product naam</th>
                    <th>Streepjescode</th>
                    <th>Categorie</th>
                    <th>Aantal aanwezig</th>
                    <th>Aanpassen</th>
                    <th>Verwijderen</th>
                </tr>
            </thead>
            <tbody>
                @forelse($productList as $product) <!-- Foreach Loop to display all product details -->
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->productnaam}}</td>
                    <td>{{$product->streepjescode}}</td>
                    <td>{{$product->naam}}</td>
                    <td>{{$product->aantalaanwezig}}</td>
                    <td>aanpassen</td>
                    <td>verwijderen</td>
                </tr>
                @empty
                <tr>
                    <td colspan="7">No products found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>