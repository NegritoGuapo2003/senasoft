<div class="sondeo-detalle">

        <?php

            if($detalles->so_imagen == "defecto.jpg"){
                $url = "uploads/images/defecto.jpg";
            }else{
                $url = "uploads/images/".$detalles->so_imagen;
            }

        ?>
        <div class="details-sondeo-detalle">
            <h1>Detalles del sondeo <?=$detalles->so_nombre?></h1><br>
            <img src="<?=$url?>" alt="imagen/sondeo"><br><br>
            <br><hr><br>
            <h2>Tema: <?=$detalles->tema?></h2><br>
            <p>Fecha de inicio: <?=$detalles->so_fecha_inicio?></p>
            <p>Fecha de cierre: <?=$detalles->so_fecha_cierre?></p><br>
            <p>Publicado por <b><?=$detalles->administrador?></b></p>
            <br>
            <a href="?controlador=sondeo&accion=restricciones&id=<?=$detalles->so_codigo?>">Ver Preguntas</a>
        </div>

    </div>