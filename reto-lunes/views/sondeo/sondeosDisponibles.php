  
    <div class="sondeo">
        <?php while($sondeo = $sondeos->fetch_object()): ?>
        <!-------------VALIDAR LA URL DE LA IMAGEN-------------->
        <?php

            if($sondeo->so_imagen == "defecto.jpg"){
                $url = "uploads/images/defecto.jpg";
            }else{
                $url = "uploads/images/".$sondeo->so_imagen;
            }

        ?>
        <div class="details-sondeo">

            <a href="?controlador=sondeo&accion=detalleSondeo&id=<?=$sondeo->so_codigo?>">
                <img src="<?=$url?>" alt="imagen/sondeo">
                <h2><?=$sondeo->so_nombre?></h2>
            </a>
            <h2>Tema: <?=$sondeo->te_codigo?></h2>
            <p>Fecha de inicio: <?=$sondeo->so_fecha_inicio?></p>
            <p>Fecha de cierre: <?=$sondeo->so_fecha_cierre?></p>

        </div>
        <?php endwhile; ?>

    </div>

