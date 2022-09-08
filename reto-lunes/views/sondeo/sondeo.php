<h1>Registrar un sondeo</h1><br><hr><br>
<form action="<?=url('sondeo','sondeoGuardar'); ?>" method="post" class="form-registro" enctype="multipart/form-data">

    <label for="codigo">Codigo del sondeo: </label>
    <input type="number" name="codigo" >

    <label for="nombre">Titulo de Sondeo: </label>
    <input type="text" name="nombre" >

    <label for="fecha_inicio">Fecha inicio: </label>
    <input type="date" name="fecha_inicio">

    <label for="fecha_cierre">Fecha cierre: </label> 
    <input type="date" name="fecha_cierre">

    <label for="">Tema del sondeo</label>
    <select name="tema" id="">
        <?php while($tema = $temas->fetch_object()): ?>
            <option value="<?=$tema->te_codigo?>"><?=$tema->te_nombre?></option>
        <?php endwhile; ?>
    </select>

    <label for="imagen">Selecciona una imagen para el sondeo: </label> 
    <input type="file" name="imagen">

    <label for="admin">Codigo admin: </label>
    <input type="number" name="admin" >

    <hr>

    <h3>Preguntas del sondeo</h3>

    <div class="contenedor-preguntas">

        <div class="pregunta" hidden>

            <label for="">escribe la pregunta</label>
            <input type="text">

        </div>

    </div>

    <button id="pregunta-btn">Crear Pregunta</button>

    
    <input type="submit" value="Crear Sondeo">

</form>