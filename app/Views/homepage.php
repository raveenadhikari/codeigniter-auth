<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <h1>Welcome, <?= esc($username) ?></h1>
    <p>Your email: <?= esc($email) ?></p>
    <a href="/logout">Logout</a>
</body>

</html>