<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title><?=$title?></title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <header>
                <nav>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="notes.php">Notes List</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <main>
                <?=$output?>
            </main>
        </div>
    </div>
</div>
</body>
</html>