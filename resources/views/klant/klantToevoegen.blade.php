<!DOCTYPE html>
<html>
<head>
    @vite(['resources/css/klant/klantToevoegen.css'])
    <title>Klant Toevoegen</title>
</head>
<body>
    <h1>Klant Toevoegen</h1>
    <!-- Form to add a new klant -->
    <form method="post" action="/klant/store">
        @csrf
        <label for="naam">Familie Naam</label>
        <input type="text" name="naam" id="naam">
        <br>
        <label for="aantalVolwassenen">Aantal Volwassenen</label>
        <input type="number" name="aantalvolwassenen" id="aantalVolwassenen">
        <br>
        <label for="aantalKinderen">Aantal Kinderen</label>
        <input type="number" name="aantalkinderen" id="aantalKinderen">
        <br>
        <label for="aantalBabies">Aantal Babies</label>
        <input type="number" name="aantalbabies" id="aantalBabies">
        <br>
        <label for="huisnummer">Huisnummer</label>
        <input type="text" name="huisnummer" id="huisnummer">
        <br>
        <label for="postcode">Postcode</label>
        <input type="text" name="postcode" id="postcode">
        <br>
        <label for="plaats">Plaats</label>
        <input type="text" name="plaats" id="plaats">
        <br>
        <label for="straat">Straat</label>
        <input type="text" name="straat" id="straat">
        <br>
        <label for="voornaam">Voornaam</label>
        <input type="text" name="voornaam" id="voornaam">
        <br>
        <label for="tussenvoegsel">Tussenvoegsel</label>
        <input type="text" name="tussenvoegsel" id="tussenvoegsel">
        <br>
        <label for="achternaam">Achternaam</label>
        <input type="text" name="achternaam" id="achternaam">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="telefoon">Telefoonnummer</label>
        <input type="text" name="telefoon" id="telefoon">
        <br>
        <!-- Submit button -->
        <input type="submit" value="Voeg Klant Toe">
</body>
</html>
