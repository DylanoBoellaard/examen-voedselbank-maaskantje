<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="" method="post">
            @csrf
            <label for="bedrijfsnaam">Bedrijfsnaam :</label>
            <input type="text" maxlength="100">

            <label for="adres">Adres :</label>
            <input type="text" maxlength="116">

            <label for="email">E-mailadres :</label>
            <input type="email" maxlength="30">

            <label for="contactpersoon">Contactpersoon :</label>
            <input type="text" maxlength="250">

            <label for="telefoonnummer">Telefoonnummer :</label>
            <input type="text" placeholder="+316 1234567897" minlength="12" maxlength="40">

            <button>Toevoegen</button>
        </form>
    </main>
</body>
</html>