<!DOCTYPE html>
@vite(['resources/css/klant/klantOverzicht.css'])
<html>
<head>
    <title>Klanten Overzicht</title>
</head>
<body>
    <!-- Creates a table with a header row and a body row -->
    <h1>Klant Overzicht</h1>
    <a href="/klant/toevoegen">Maak een nieuwe klant aan</a>
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>aantalvolwassenen</th>
                <th>aantalkinderen</th>
                <th>aantalbabies</th>
                <th>Huisnummer</th>
                <th>Postcode</th>
                <th>Plaats</th>
                <th>Straat</th>
                <th>Voornaam</th>
                <th>Tussenvoegsel</th>
                <th>Achternaam</th>
                <th>Email</th>
                <th>Telefoon</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loops through all klanten and creates a row for each klant -->
            @forelse ($klanten as $klant)
            <tr>
                <td>{{ $klant->naam }}</td>
                <td>{{ $klant->aantalvolwassenen }}</td>
                <td>{{ $klant->aantalkinderen }}</td>
                <td>{{ $klant->aantalbabies }}</td>
                <td>{{ $klant->huisnummer }}</td>
                <td>{{ $klant->postcode }}</td>
                <td>{{ $klant->plaats }}</td>
                <td>{{ $klant->straat }}</td>
                <td>{{ $klant->voornaam }}</td>
                <td>{{ $klant->tussenvoegsel }}</td>
                <td>{{ $klant->achternaam }}</td>
                <td>{{ $klant->email }}</td>
                <td>{{ $klant->telefoon }}</td>
                <td>
                    <a href="{{route('klant.wijzigen', [$klant -> id])}}">wijzigen</a>
                </td>
                <td>
                    <form action="{{ route('klant.verwijderen', [$klant -> id]) }}" method="POST">
                        <!-- Route to delete page with product ID -->
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
                            verwijderen
                        </button>
                    </form>
                </td>

                <!-- If there are no klanten, display a message -->
                @empty
            <tr>
                <td colspan="13">Er zijn geen klanten gevonden.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
