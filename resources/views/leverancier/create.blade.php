<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <a href=""><h3>Ga terug</h3></a>

        <h1>Leverancier Formulier</h1>
        <form action="/leverancier" method="post">
            @csrf

            @error('bedrijfsnaam')
            <p>{{ $message }}</p>
            @enderror
            <label for="bedrijfsnaam">Bedrijfsnaam :</label>
            <input type="text" name="bedrijfsnaam" maxlength="100">

            @error('huisnummer')
            <p>{{ $message }}</p>
            @enderror
            <label for="huisnummer">Huisnummer :</label>
            <input type="text" name="huisnummer" maxlength="10">

            @error('straat')
            <p>{{ $message }}</p>
            @enderror
            <label for="straat">Straat :</label>
            <input type="text" name="straat" maxlength="50">

            @error('plaats')
            <p>{{ $message }}</p>
            @enderror
            <label for="plaats">Plaats :</label>
            <input type="text" name="plaats" maxlength="50">

            @error('postcode')
            <p>{{ $message }}</p>
            @enderror
            <label for="postcode">postcode :</label>
            <input type="text" name="postcode" maxlength="6">

            @error('email')
            <p>{{ $message }}</p>
            @enderror
            <label for="email">E-mailadres :</label>
            <input type="email" name="email" maxlength="30">

            @error('voornaam')
            <p>{{ $message }}</p>
            @enderror
            <label for="voornaam">Voornaam :</label>
            <input type="text" name="voornaam" maxlength="50">

            @error('tussenvoegsel')
            <p>{{ $message }}</p>
            @enderror
            <label for="tussenvoegsel">Tussenvoegsel :</label>
            <input type="text" name="tussenvoegsel" maxlength="50">

            @error('achternaam')
            <p>{{ $message }}</p>
            @enderror
            <label for="achternaam">Achternaam :</label>
            <input type="text" name="achternaam" maxlength="250">

            @error('telefoonnummer')
            <p>{{ $message }}</p>
            @enderror
            <label for="telefoonnummer">Telefoonnummer :</label>
            <input type="text" name="telefoonnummer" placeholder="+316 1234567897" minlength="12" maxlength="40">

            <button type="submit">Toevoegen</button>
        </form>
    </main>
</body>

</html>