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
            @foreach ($productallergie as $item)
            <tr>
                <td>{{ $item['productNaam'] }}</td>
                <td>{{ $item['allergieen'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>