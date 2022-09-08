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

    <label for="tema">Tema del sondeo</label>
    <select name="tema" id="">
        <?php while($tema = $temas->fetch_object()): ?>
            <option value="<?=$tema->te_codigo?>"><?=$tema->te_nombre?></option>
        <?php endwhile; ?>
    </select><br>
    <h2>Restricciones</h2><br><hr><br>
    <label for="edad">Edad: </label>
    <input type="number" name="edad" >

    <label for="sexo">Sexo: </label>
    <select name="sexo" id="">
        <?php while($sexo = $sex->fetch_object()): ?>
            <option value="<?=$sexo->se_codigo?>"><?=$sexo->se_nombre?></option>
        <?php endwhile; ?>
    </select>

    <label for="etnia">Etnia: </label>
    <select name="etnia" id="">
        <?php while($etnia = $etn->fetch_object()): ?>
            <option value="<?=$etnia->et_codigo?>"><?=$etnia->et_nombre?></option>
        <?php endwhile; ?>
    </select>

    <label for="estrato">Estrato: </label>
    <input type="number" name="estrato" >

    <label for="nivel_academico">Nivel Academico: </label>
    <select name="nivel_academico" id="">
        <?php while($nivel_a = $niv->fetch_object()): ?>
            <option value="<?=$nivel_a->ne_codigo?>"><?=$nivel_a->ne_nombre?></option>
        <?php endwhile; ?>
    </select>

    <label for="imagen">Selecciona una imagen para el sondeo: </label> 
    <input type="file" name="imagen">

    <label for="admin">Codigo admin: </label>
    <input type="number" name="admin" >

    <br><hr><br>

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