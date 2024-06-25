<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Add New Allergie</h1>
    <form action="{{ route('allergie.store') }}" method="POST">
        @csrf <!-- CSRF Token for security -->
        @method ('POST')
        <label for="name">Allergie Name:</label><br>
        <input type="text" id="name" name="naam" required><br><br>
        <input type="submit" value="Voeg toe">
    </form>
</body>

</html>