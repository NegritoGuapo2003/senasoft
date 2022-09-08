<?php session_start(); ?>
<div class="aside">
    <div class="details-aside">
        <?php if(!isset($_SESSION['ciudadano']) || isset($_SESSION['admin'])): ?>
            <form action="<?=url('ciudadano','login'); ?>" method="post">
            <label for="">Tipo de documento: </label>
                <select name="tipo_documento" id="">
                    <option value="cedula_ciudadania">Cedula de Ciudadania</option>
                    <option value="tarjeta_identidad">Tarjeta de Identidad</option>
                    <option value="cedula_extranjeria">Cedula de Extranjería</option>
                </select><br>
                <label for="documento">Numero de documento: </label>
                <input type="text" name="documento" id=""><br>
                <label for="codigo">Codigo: </label>
                <input type="text" name="codigo"><br>
                
                <input type="submit" value="Enviar">
            </form>
            <br>
            <hr style="border: 1px solid #fff;">
            <br>
            <p>No tienes una cuenta? <a href="<?=url('ciudadano','registro')?>">Registrate!</a></p>
        <?php endif; ?>
        <?php if(isset($_SESSION['ciudadano']) || isset($_SESSION['admin'])): ?>
            <p><a href="<?=url('sondeo','mostrarSondeo'); ?>">Ver Sondeos</a></p>
            <p><a href="<?=url('ciudadano','logout'); ?>">Cerrar sesion</a></p>
        <?php endif; ?>
        <?php if(isset($_SESSION['admin'])): ?>
            <p><a href="<?=url('sondeo','registroSondeo'); ?>">Registrar un sondeo</a></p>
        <?php endif; ?>

    </div>
</div>
<div class="container">
    <div class="container-details">