<html>

<head>
    <link rel="stylesheet" href="../assets/main.css">
</head>

<body>
    <h1 id="main-header">User Found!</h1>

    <div class="container">
        <a href="http://localhost:3333">Go Back</a>
    </div><br><br>
    <div class="container">
        Id: <?= $user->getId() ?><br>
        Name: <?= $user->getName() ?><br>
        Email: <?= $user->getEmail() ?>
    </div>
</body>

</html>