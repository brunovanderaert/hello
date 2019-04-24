<?php
require "function.php";
$resultat = getAllannonces();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery.js"></script>

    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <?php
            echo $resultat["annonce1"][0];
            ?>
        </li>

        <li>
            <?php
                echo $resultat["annonce1"][1];
            ?>
        </li>
    </ul>
        <hr>
    <ul>
        <li>
            <?php
                echo $resultat["annonce2"][0];
            ?>
        </li>
        <li>
        <?php
            echo $resultat["annonce2"][1];
            ?>
        </li>
    </ul>
    <div></div>
</body>
</html>

<?php
$first = getFirstannonce();
print_r($first);

$newProduit= insertAnnonce('annonce3', array("fruit",2));

echo "<pre>";
print_r($newProduit);
function deleteAnnonce(){
    return[];
}
?>

<script>
$('div').html("hello");
</script>