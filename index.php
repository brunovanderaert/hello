<?php
require "function.php";
$resultat = getAllannonces();

?>

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

<?php
$first = getFirstannonce();
print_r($first);

$newProduit= insertAnnonce('annonce3', array("fruit",2));

echo "<pre>";
print_r($newProduit);
?>

<script href='Jquery.js'>
$('hello');
</script>