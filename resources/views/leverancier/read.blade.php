<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <a href="/leverancier/create">
            <h3>Ga terug</h3>
        </a>

        <p>{{ session('status') }}</p>
        <table>
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
                <td><a href="">🖊️</a></td>
                <td><a href="">X</a></td>
            </tr>
            @endforeach
        </table>
    </main>
</body>

</html>