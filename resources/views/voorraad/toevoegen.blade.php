<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toevoegen levering</title>
    @vite(['resources/scss/magazijn/index.scss', 'resources/scss/magazijn/global.scss'])
</head>

<body>
    <div class="container">
        <h1>Toevoegen Product</h1>

        <div>
            <form action="{{ route('voorraad.store') }}" method="POST">
                @csrf
                <!-- Product name -->
                <label for="productnaam"><span>Productnaam</span></label>
                <input type="text" name="productnaam" id="productnaam" required>

                <!-- Streepjescode product -->
                <label for="streepjescode"><span>Streepjescode</span></label>
                <input type="text" name="streepjescode" id="streepjescode" required>

                <!-- Category -->
                <label for="categorie"><span>Categorie</span></label>
                <select name="categorie" id="categorie" required>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->naam }}</option>
                    @endforeach
                </select>

                <!-- Aantal aanwezig -->
                <label for="aantalaanwezig"><span>Aantal aanwezig</span></label>
                <input type="number" name="aantalaanwezig" id="aantalaanwezig" required>

                <input type="submit" value="Sla op">
            </form>

            @if(Session::has('error'))
            <div class="alert alert-error">
                {{ Session::get('error') }}
            </div>
            @endif
        </div>
    </div>
</body>

</html>