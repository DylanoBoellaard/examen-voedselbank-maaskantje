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
            <a href="/leverancier/show">
                <h3>Ga terug</h3>
            </a>
        </div>

        <p class="error">{{ session('error') }}</p>

        <div class="layout">
            <h1>Leverancier Wijzigen</h1>
            <form action="/leverancier/{{ $leverancier->id }}" method="post">
                @csrf
                @method('PUT')

                @error('bedrijfsnaam')
                <p>{{ $message }}</p>
                @enderror
                <div class="form-content">
                    <label for="bedrijfsnaam">Bedrijfsnaam :</label>
                    <input type="text" name="bedrijfsnaam" maxlength="100" value="{{ $leverancier->bedrijfsnaam }}">
                </div>

                @error('huisnummer')
                <p>{{ $message }}</p>
                @enderror
                <div class="form-content">
                    <label for="huisnummer">Huisnummer :</label>
                    <input type="text" name="huisnummer" maxlength="10" value="{{ $leverancier->huisnummer }}">
                </div>

                @error('straat')
                <p>{{ $message }}</p>
                @enderror
                <div class="form-content">
                    <label for="straat">Straat :</label>
                    <input type="text" name="straat" maxlength="50" value="{{ $leverancier->straat }}">
                </div>

                @error('plaats')
                <p>{{ $message }}</p>
                @enderror
                <div class="form-content">
                    <label for="plaats">Plaats :</label>
                    <input type="text" name="plaats" maxlength="50" value="{{ $leverancier->plaats }}">
                </div>

                @error('postcode')
                <p>{{ $message }}</p>
                @enderror
                <div class="form-content">
                    <label for="postcode">postcode :</label>
                    <input type="text" name="postcode" maxlength="6" value="{{ $leverancier->postcode }}">
                </div>

                @error('email')
                <p>{{ $message }}</p>
                @enderror
                <div class="form-content">
                    <label for="email">E-mailadres :</label>
                    <input type="email" name="email" maxlength="30" value="{{ $leverancier->email }}">
                </div>

                @error('voornaam')
                <p>{{ $message }}</p>
                @enderror
                <div class="form-content">
                    <label for="voornaam">Voornaam :</label>
                    <input type="text" name="voornaam" maxlength="50" value="{{ $leverancier->voornaam }}">
                </div>

                @error('tussenvoegsel')
                <p>{{ $message }}</p>
                @enderror
                <div class="form-content">
                    <label for="tussenvoegsel">Tussenvoegsel :</label>
                    <input type="text" name="tussenvoegsel" maxlength="50" value="{{ $leverancier->tussenvoegsel }}">
                </div>

                @error('achternaam')
                <p>{{ $message }}</p>
                @enderror
                <div class="form-content">
                    <label for="achternaam">Achternaam :</label>
                    <input type="text" name="achternaam" maxlength="250" value="{{ $leverancier->achternaam }}">
                </div>

                @error('telefoonnummer')
                <p>{{ $message }}</p>
                @enderror
                <div class="form-content">
                    <label for="telefoonnummer">Telefoonnummer :</label>
                    <input type="text" name="telefoonnummer" placeholder="+316 1234567897" minlength="12" maxlength="40" value="{{ $leverancier->telefoon }}">
                </div>

                <button type="submit">Wijzigen</button>
            </form>
        </div>
    </main>
</body>

</html>