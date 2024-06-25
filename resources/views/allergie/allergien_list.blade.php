<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Allergieën Lijst</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 10px;
    }
</style>
<a href="/allergie/allergie_toevoegen">Toevoegen</a>

<body>
    <table>
        <thead>
            <th>Allergieën</th>
            <th>Wijzig</th>
            <th>Verwijder</th>
        </thead>
        <tbody>
            @foreach ($allergie as $allergie)
            <tr>
                <td>{{ $allergie->naam }}</td>
                <td><a href="{{ route('allergie.wijzig', ['id' => $allergie->id]) }}">Wijzig</a></td>
                <form action="{{ route('allergie.verwijder', ['id' => $allergie->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" style="background:none!important; border:none; padding:0!important; color:#2010f4; text-decoration:underline; cursor:pointer;">Verwijder</button></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>