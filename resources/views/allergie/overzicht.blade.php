<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<a href="/allergie/allergien_list">Lijst allergieën</a>

<body>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Allergie</th>
            </tr>
        </thead>
        <tbody>
            @if($productallergie->isEmpty())
            <tr>
                <td colspan="2">er zijn nog geen allergieën geregistreerd</td>
            </tr>
            @else
            @foreach ($productallergie as $item)
            <tr>
                <td>{{ $item['productNaam'] }}</td>
                <td>{{ $item['allergieen'] }}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</body>

</html>