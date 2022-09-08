<form action="<?=url('sondeo','guardar'); ?>" method="post" class="form-registro" enctype="multipart/form-data">


    <label for="sondeo">Titulo de Sondeo: </label>
    <input type="text" name="sondeo" >

    <label for="fechainicio">Fecha inicio: </label>
    <input type="date" name="fechainicio">

    <label for="fechacierre">Fecha cierre: </label> 
    <input type="date" name="fechacierre">

    <label for="fechacierre">Selecciona una imagen para el sondeo: </label> 
    <input type="file" name="imagen">

    <hr>

    <h3>Preguntas del sondeo</h3>

    <div class="contenedor-preguntas" id="contenedor">



    </div>

    <button id="pregunta-btn">Crear Pregunta</button>

    
    <input type="submit" value="Crear Sondeo">

</form>