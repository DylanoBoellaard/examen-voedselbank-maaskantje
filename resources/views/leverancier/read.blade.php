<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/scss/leverancier.scss'])
</head>

<body>
    <main>
        <div class="back">
            <a href="/leverancier/create">
                <h3>Ga terug</h3>
            </a>
        </div>

        <p class="succes">{{ session('status') }}</p>
        <p class="error">{{ session('error') }}</p>

        <div class="layout">
            <table>
                @if (count($leveranciers) === 0)
                <tr>
                    <td>Geen leveranciers aanwezig</td>
                </tr>
                @else
                <tr>
                    <th>Bedrijfsnaam</th>
                    <th>Adres</th>
                    <th>E-mailadres</th>
                    <th>Contactpersoon</th>
                    <th>Telefoonnummer</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach ($leveranciers as $leverancier)
                <tr>
                    <td>{{ $leverancier->bedrijfsnaam }}</td>
                    <td>{{ $leverancier->huisnummer }} {{ $leverancier->straat }} {{ $leverancier->plaats }} {{ $leverancier->postcode }}</td>
                    <td>{{ $leverancier->email }}</td>
                    <td>{{ $leverancier->voornaam }} {{ $leverancier->tussenvoegsel }} {{ $leverancier->achternaam }}</td>
                    <td>{{ $leverancier->telefoon }}</td>
                    <td><a href="/leverancier/edit/{{ $leverancier->id }}">🖊️</a></td>
                    <form action="/leverancier/{{ $leverancier->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td><input type="submit" value="❌"></td>
                    </form>
                </tr>
                @endforeach
                @endif
            </table>
        </div>
    </main>
</body>

</html>