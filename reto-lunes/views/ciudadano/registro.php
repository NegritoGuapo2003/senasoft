<form action="<?=url('ciudadano','guardar'); ?>" method="post" class="form-registro">

    <label for="">Tipo de documento: </label>
    <select name="tipo_documento" id="">
        <option value="cedula_ciudadania">Cedula de Ciudadania</option>
        <option value="tarjeta_identidad">Tarjeta de Identidad</option>
        <option value="cedula_extranjeria">Cedula de Extranjería</option>
    </select>

    <label for="cedula">Numero de documento: </label>
    <input type="text" name="cedula" >

    <label for="nombre">Nombres: </label>
    <input type="text" name="nombre">

    <label for="apellidos">Apellidos: </label> 
    <input type="text" name="apellidos">

    <label for="">Sexo: </label>
    <select name="sexo" id="">
        <?php while($sexo = $sex->fetch_object()): ?>
            <option value="<?=$sexo->se_codigo ?>"><?=$sexo->se_nombre ?></option>
        <?php endwhile; ?>
    </select>

    <label for="telefono_fijo">Telefono Fijo: </label> 
    <input type="number" name="telefono_fijo">

    <label for="celular">Celular: </label> 
    <input type="number" name="celular">

    <label for="email">Correo: </label> 
    <input type="email" name="email">

    <label for="municipio">Municipio: </label> 
    <select name="municipio"    id="">
    <?php while($municipio = $mun->fetch_object()): ?>
            <option value="<?=$municipio->mun_codigo ?>"><?=$municipio->mun_nombre ?></option>
        <?php endwhile; ?>
    </select>

    <label for="barrio_vereda">Vereda: </label> 
    <select name="barrio_vereda" id="">
        <?php while($vereda = $bar->fetch_object()): ?>
            <option value="<?=$vereda->bv_codigo ?>"><?=$vereda->bv_nombre ?></option>
        <?php endwhile; ?>
    </select>

    <label for="direccion">Direccion: </label> 
    <input type="text" name="direccion">

    <label for="nacimiento">Fecha de nacimiento: </label> 
    <input type="date" name="nacimiento">

    <label for="etnia">Etnia a la que pertenece: </label> 
    <select name="etnia" id="">
        <?php while($etnia = $etn->fetch_object()): ?>
            <option value="<?=$etnia->et_codigo ?>"><?=$etnia->et_nombre ?></option>
        <?php endwhile; ?>
    </select>

    <label for="discapacidad">Condicion de discapacidad: </label> 
    <select name="discapacidad" id="">
        <?php while($condicion = $con->fetch_object()): ?>
            <option value="<?=$condicion->con_codigo ?>"><?=$condicion->con_nombre ?></option>
        <?php endwhile; ?>
    </select>

    <label for="Estrato">Estrato: </label> 
    <select name="estrato" id="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>

    <label for="nivel_educacion">Nivel Educativo:</label> 
    <select name="nivel_educacion" id="">
        <?php while($nivelE = $niv->fetch_object()): ?>
            <option value="<?=$nivelE->ne_codigo ?>"><?=$nivelE->ne_nombre ?></option>
        <?php endwhile; ?>
    </select>

    <label for="acceso_dispostivos">Tiene acceso a dispositivos tecnologicos?:</label> 
    <select name="acceso_dispositivos" id="">
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label for="internet">¿Cuenta con acceso a internet?:</label> 
    <select name="internet" id="">
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label for="regimen">Regimen de afiliacion</label> 
    <select name="regimen" id="">
        <?php while($regimen = $reg->fetch_object()): ?>
            <option value="<?=$regimen->re_codigo ?>"><?=$regimen->re_nombre ?></option>
        <?php endwhile; ?>
    </select>

    
    <input type="submit" value="Registrarme">


</form>