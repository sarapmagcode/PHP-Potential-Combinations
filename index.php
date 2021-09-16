<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Potential Combination</title>
    </head>
    <body>
        <div class="heading">
            <h1>Potential Combinations</h1>
        </div>
        <div class="container">
            <p>
                <?php
                    $n = 99;
                    for ($i = 0; $i <= $n; $i++) {
                        echo $i;
                        if ($i < $n) {
                            echo ", ";
                        }
                    }
                ?>
            </p>
        </div>
    </body>
</html>