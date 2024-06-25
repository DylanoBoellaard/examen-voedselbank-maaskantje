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

<body>
    <table>
        <thead>
            <th>Allergieën</th>
        </thead>
        <tbody>
            @foreach ($allergie as $allergie)
            <tr>
                <td>{{ $allergie->naam }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>