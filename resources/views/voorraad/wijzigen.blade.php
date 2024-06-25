<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toevoegen levering</title>
    @vite(['resources/scss/voorraad/index.scss', 'resources/scss/voorraad/global.scss'])
</head>

<body>
    <div class="container">
        <h1>Wijzig Product</h1>

        <div>
            <form action="{{ route('voorraad.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Product name -->
                <label for="productnaam"><span>Productnaam</span></label>
                <input type="text" name="productnaam" id="productnaam" value="{{ old('productnaam', $product->productnaam) }}" required>

                <!-- Streepjescode product -->
                <label for="streepjescode"><span>Streepjescode</span></label>
                <input type="text" name="streepjescode" id="streepjescode" value="{{ old('streepjescode', $product->streepjescode) }}" required>

                <!-- Category -->
                <label for="categorie"><span>Categorie</span></label>
                <select name="categorie" id="categorie" required>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('categorie', $product->categories->first()->id ?? '') == $category->id ? 'selected' : '' }}>{{ $category->naam }}</option>
                    @endforeach
                </select>

                <!-- Aantal aanwezig -->
                <label for="aantalaanwezig"><span>Aantal aanwezig</span></label>
                <input type="number" name="aantalaanwezig" id="aantalaanwezig" value="{{ old('aantalaanwezig', $product->magazijn->aantalaanwezig ?? 0) }}" required>

                <input type="submit" value="Wijzig">
            </form>
        </div>

        @if ($errors->any())
        <div class="alert alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="alert-error">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</body>

</html>