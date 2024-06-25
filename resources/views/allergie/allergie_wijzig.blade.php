<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('allergie.wijzig', $allergie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Allergie Naam:</label>
        <input type="text" id="name" name="naam" value="{{ $allergie->naam }}" required>
        <button type="submit">Wijzig</button>
    </form>
</body>

</html>