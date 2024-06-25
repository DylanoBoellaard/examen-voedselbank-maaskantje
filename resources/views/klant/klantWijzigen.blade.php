<!DOCTYPE html>
<html>
<head>
    @vite('resources/css/klant/klantWijzigen.css')
    <title>Klant Wijzigen</title>
</head>
<body>
    <div class="container">

        <h1>Klant Wijzigen</h1>
        <!-- route to update -->
        <form method="POST" action="{{route('klant.update', ['klant' => $klant])}}">
            @csrf
            @method('PUT')
            <!-- Form to edit a klant -->
            <label for="naam">Naam:</label><br>
            <input type="text" id="naam" name="naam" value="{{$klant->naam}}" required><br>
            <label for="aantalvolwassenen">Aantal Volwassenen:</label><br>
            <input type="number" id="aantalvolwassenen" name="aantalvolwassenen" value="{{$klant->aantalvolwassenen}}" required><br>
            <label for="aantalkinderen">Aantal Kinderen:</label><br>
            <input type="number" id="aantalkinderen" name="aantalkinderen" value="{{$klant->aantalkinderen}}" required><br>
            <label for="aantalbabies">Aantal Babies:</label><br>
            <input type="number" id="aantalbabies" name="aantalbabies" value="{{$klant->aantalbabies}}" required><br>
            <label for="huisnummer">Huisnummer:</label><br>
            <input type="text" id="huisnummer" name="huisnummer" value="{{$klant->huisnummer}}" required><br>
            <label for="postcode">Postcode:</label><br>
            <input type="text" id="postcode" name="postcode" value="{{$klant->postcode}}" required><br>
            <label for="plaats">Plaats:</label><br>
            <input type="text" id="plaats" name="plaats" value="{{$klant->plaats}}" required><br>
            <label for="straat">Straat:</label><br>
            <input type="text" id="straat" name="straat" value="{{$klant->straat}}" required><br>
            <label for="voornaam">Voornaam:</label><br>
            <input type="text" id="voornaam" name="voornaam" value="{{$klant->voornaam}}" required><br>
            <label for="tussenvoegsel">Tussenvoegsel:</label><br>
            <input type="text" id="tussenvoegsel" name="tussenvoegsel"><br>
            <label for="achternaam">Achternaam:</label><br>
            <input type="text" id="achternaam" name="achternaam" value="{{$klant->achternaam}}" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="{{$klant->email}}" required><br>
            <label for="telefoon">Telefoon:</label><br>
            <input type="tel" id="telefoon" name="telefoon" value="{{$klant->telefoon}}" required><br>
            <input type="submit" value="wijzig">
        </form>
    </div>
</body>
</html>
