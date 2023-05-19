<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo php</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>

    </header>
    <section id="s1">
        <h1>Exercice 1</h1>
        <form method="post" action="somme.php">
            <label for="n">Entrez un entier N :</label><br>
            <input type="number" id="n" name="n" required><br>
            <button type="submit">Calculer la somme</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = $_POST["n"];
            $somme = 0;
            for ($i = 1; $i <= $n; $i++) {
                $somme += $i;
            }
            echo "<p>La somme des $n premiers nombres entiers est $somme.</p>";
        }
        ?>
    </section>
    <section id="s2">
        <h1>Exercice 2</h1>
        <h2>Calcul de la somme des N premiers nombres entiers</h2>
        <form method="post" action="minmax.php">
            <label>Entrez les nombres, séparés par des virgules :</label>
            <input type="text" name="inputNumbers">
            <br><br>
            <button type="submit">Trouver le minimum et le maximum</button>
        </form>
        <br><br>
        <label>Le minimum est :</label>
        <span id="outputMin">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $input = $_POST["inputNumbers"];
                $numbers = explode(",", $input);
                $min = (int)$numbers[0];
                $max = (int)$numbers[0];

                foreach ($numbers as $number) {
                    $number = (int)$number;
                    if ($number < $min) {
                        $min = $number;
                    }
                    if ($number > $max) {
                        $max = $number;
                    }
                }

                echo $min;
            }
            ?>
        </span>
        <br>
        <label>Le maximum est :</label>
        <span id="outputMax">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo $max;
            }
            ?>
        </span>
    </section>
    <section id="s3">
        <h1>Exercice 3</h1>
        <h2>Calcul du quotient et reste de la division de deux entiers A et B sans utiliser
            l’opération de division.
        </h2>
        <p>Entrez deux entiers :</p>
        <form method="post" action="division.php">
            <input type="text" name="a" placeholder="Entier A"><br>
            <input type="text" name="b" placeholder="Entier B"><br>
            <button type="submit">Calculer</button>
        </form>
        <p id="resultat">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $a = $_POST["a"];
                $b = $_POST["b"];
                $quotient = 0;
                $reste = $a;
                while ($reste >= $b) {
                    $quotient++;
                    $reste -= $b;
                }
                echo "Le quotient est $quotient et le reste est $reste";
            }
            ?>
        </p>
    </section>
    <section id="s4">
        <h1>Exercice 4</h1>
        <h1>Conversion décimal vers binaire</h1><br>
        <form method="post" action="conversion.php">
            <label for="decimal">Entier décimal :</label><br>
            <input type="number" id="decimal" name="decimal"><br>
            <button type="submit">Convertir</button>
        </form>
        <p id="binary">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $decimal = $_POST["decimal"];
                $binary = decbin($decimal);
                echo "Binaire : $binary";
            }
            ?>
        </p>
    </section><br>
    <section id="s5">
        <h1>Exercice 5</h1>
        <h1>Conversion décimal vers binaire</h1><br>
        <form method="post" action="conversion.php">
            <label for="decimal">Entier décimal :</label><br>
            <input type="number" id="decimal" name="decimal"><br>
            <button type="submit">Convertir</button>
        </form>
        <p id="binary">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $decimal = $_POST["decimal"];
                $binary = decbin($decimal);
                echo "Binaire : $binary";
            }
            ?>
        </p>
    </section>
    <section id="s6">
        <h1>Exercice 6</h1>
        <h1>Vérification de la divisibilité</h1>
        <form method="post" action="">
            <label for="a">Entier A :</label>
            <input type="number" id="a" name="a" required>
            <label for="b">Entier B :</label>
            <input type="number" id="b" name="b" required>
            <button type="submit">Vérifier</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST["a"];
            $b = $_POST["b"];

            if ($a > 0 && $b > 0) {
                if ($a % $b === 0) {
                    echo "<p>" . $a . " est divisible par " . $b . "</p>";
                } else {
                    echo "<p>" . $a . " n'est pas divisible par " . $b . "</p>";
                }
            } else {
                echo "<p>Les entiers doivent être positifs.</p>";
            }
        }
        ?>

    </section>
    <section id="s7">
        <h1>Exercice 7</h1>
        <h1>Détermination des diviseurs</h1>
        <form method="post" action="">
            <label for="x">Entier X :</label>
            <input type="number" id="x" name="x" required>
            <button type="submit">Calculer</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $x = $_POST["x"];

            if ($x > 0) {
                echo "<p>Les diviseurs de " . $x . " sont :</p>";
                echo "<ul>";

                for ($i = 1; $i <= $x; $i++) {
                    if ($x % $i === 0) {
                        echo "<li>" . $i . "</li>";
                    }
                }

                echo "</ul>";
            } else {
                echo "<p>L'entier doit être positif.</p>";
            }
        }
        ?>
    </section>
    <section id="s8">
        <h1>Exercice 8</h1>
        <h1>Vérification de nombre premier</h1>
        <form method="post" action="">
            <label for="number">Entrez un nombre entier :</label>
            <input type="number" name="number" required>
            <input type="submit" value="Vérifier">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            $isPrime = true;

            if ($number < 2) {
                $isPrime = false;
            } else {
                for ($i = 2; $i <= sqrt($number); $i++) {
                    if ($number % $i == 0) {
                        $isPrime = false;
                        break;
                    }
                }
            }

            if ($isPrime) {
                echo "<p>$number est un nombre premier.</p>";
            } else {
                echo "<p>$number n'est pas un nombre premier.</p>";
            }
        }
        ?>
    </section>
    <section id="s9">
        <h1>Exercice 9</h1>
        <h1>Calcul de la somme des chiffres</h1>
        <form method="post" action="">
            <label for="n">Entier N :</label>
            <input type="number" id="n" name="n" required>
            <button type="submit">Calculer</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = $_POST["n"];

            $sum = 0;
            $digits = str_split($n);

            foreach ($digits as $digit) {
                $sum += intval($digit);
            }

            echo "<p>La somme des chiffres de " . $n . " est " . $sum . ".</p>";
        }
        ?>
    </section>
</body>

</html>