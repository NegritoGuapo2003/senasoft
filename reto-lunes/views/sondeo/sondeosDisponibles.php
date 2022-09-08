<?php while($tema = $temas->fetch_object()): ?>

    <h1><?=$tema->so_nombre?></h1>
    <img src="<?=$tema->so_nombre?>" alt="imagen/sondeo">
    <h2>Tema: <?=$tema->te_codigo?></h2>
    <p>Fecha de inicio: <?=$tema->so_fecha_inicio?></p>
    <p>Fecha de cierre: <?=$tema->so_fecha_cierre?></p>

<?php endwhile; ?>