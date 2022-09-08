
<?php while($sondeo = $sondeos->fetch_object()): ?>

    <h1><?=$sondeo->so_nombre?></h1>
    <img src="<?=$sondeo->so_nombre?>" alt="imagen/sondeo">
    <h2>Tema: <?=$sondeo->te_codigo?></h2>
    <p>Fecha de inicio: <?=$sondeo->so_fecha_inicio?></p>
    <p>Fecha de cierre: <?=$sondeo->so_fecha_cierre?></p>

<?php endwhile; ?>