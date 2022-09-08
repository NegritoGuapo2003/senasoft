<?php var_dump($_SESSION['ciudadano']);echo "<hr>"; var_dump($sondeos); ?>
<?php if($_SESSION['ciudadano']['ciu_edad'] == $sondeos->so_edad): ?>
    <p></p>
<?php endif; ?>