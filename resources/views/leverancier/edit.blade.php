<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <a href="/leverancier/show"><h3>Ga terug</h3></a>

        <h1>Leverancier Formulier</h1>
        <form action="/leverancier/{{ $leverancier->id }}" method="post">
            @csrf
            @method('PUT')

            @error('bedrijfsnaam')
            <p>{{ $message }}</p>
            @enderror
            <label for="bedrijfsnaam">Bedrijfsnaam :</label>
            <input type="text" name="bedrijfsnaam" maxlength="100" value="{{ $leverancier->bedrijfsnaam }}">

            @error('huisnummer')
            <p>{{ $message }}</p>
            @enderror
            <label for="huisnummer">Huisnummer :</label>
            <input type="text" name="huisnummer" maxlength="10" value="{{ $leverancier->huisnummer }}">

            @error('straat')
            <p>{{ $message }}</p>
            @enderror
            <label for="straat">Straat :</label>
            <input type="text" name="straat" maxlength="50" value="{{ $leverancier->straat }}">

            @error('plaats')
            <p>{{ $message }}</p>
            @enderror
            <label for="plaats">Plaats :</label>
            <input type="text" name="plaats" maxlength="50" value="{{ $leverancier->plaats }}">

            @error('postcode')
            <p>{{ $message }}</p>
            @enderror
            <label for="postcode">postcode :</label>
            <input type="text" name="postcode" maxlength="6" value="{{ $leverancier->postcode }}">

            @error('email')
            <p>{{ $message }}</p>
            @enderror
            <label for="email">E-mailadres :</label>
            <input type="email" name="email" maxlength="30" value="{{ $leverancier->email }}">

            @error('voornaam')
            <p>{{ $message }}</p>
            @enderror
            <label for="voornaam">Voornaam :</label>
            <input type="text" name="voornaam" maxlength="50" value="{{ $leverancier->voornaam }}">

            @error('tussenvoegsel')
            <p>{{ $message }}</p>
            @enderror
            <label for="tussenvoegsel">Tussenvoegsel :</label>
            <input type="text" name="tussenvoegsel" maxlength="50" value="{{ $leverancier->tussenvoegsel }}">

            @error('achternaam')
            <p>{{ $message }}</p>
            @enderror
            <label for="achternaam">Achternaam :</label>
            <input type="text" name="achternaam" maxlength="250" value="{{ $leverancier->achternaam }}">

            @error('telefoonnummer')
            <p>{{ $message }}</p>
            @enderror
            <label for="telefoonnummer">Telefoonnummer :</label>
            <input type="text" name="telefoonnummer" placeholder="+316 1234567897" minlength="12" maxlength="40" value="{{ $leverancier->telefoon }}">

            <button type="submit">Wijzigen</button>
        </form>
    </main>
</body>

</html>