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

    <label for="telefono_fijo">Telefono Fijo: </label> 
    <input type="number" name="telefono_fijo">

    <label for="celular">Celular: </label> 
    <input type="number" name="celular">

    <label for="email">Correo: </label> 
    <input type="email" name="email">

    <label for="municipio">Municipio: </label> 
    <select name="municipio"    id="">
        <option value="1">Municipio 1</option>
        <option value="2">Municipio 2</option>
        <option value="3">Municipio 3</option>
    </select>

    <label for="barrio_vereda">Vereda: </label> 
    <select name="barrio_vereda" id="">
        <option value="1">Vereda 1</option>
        <option value="2">Vereda 2</option>
        <option value="3">Vereda 3</option>
    </select>

    <label for="direccion">Direccion: </label> 
    <input type="text" name="direccion">

    <label for="nacimiento">Fecha de nacimiento: </label> 
    <input type="date" name="nacimiento">

    <label for="etnia">Etnia a la que pertenece: </label> 
    <select name="etnia" id="">
        <option value="1">Etnia 1</option>
        <option value="2">Etnia 2</option>
        <option value="3">Etnia 3</option>
    </select>

    <label for="discapacidad">Condicion de discapacidad: </label> 
    <select name="discapacidad" id="">
        <option value="1">Discapacidad 1</option>
        <option value="2">Discapacidad 2</option>
        <option value="3">Discapacidad 3</option>
    </select>

    <label for="Estrato">Estrato: </label> 
    <select name="estrato" id="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>

    <label for="nivel_educacion">Nivel Educativo:</label> 
    <select name="nivel_educacion" id="">
        <option value="1">Bachiller</option>
        <option value="2">Tecnico</option>
        <option value="3">Tecnologo</option>
        <option value="3">Profesional</option>
    </select>

    <label for="acceso_dispostivos">Tiene acceso a dispositivos tecnologicos?:</label> 
    <select name="acceso_dispositivos" id="">
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <!-- asignamos atributo multiple a la etiqueta select por que es posible seleccionar varias opciones -->
    <label for="acceso_dispostivos">Si la respuesta fue si ¿A cual tienes acceso?</label> 
    <select name="dispositivos" id="">
        <option value="1">Movil</option>
        <option value="2">Celular</option>
        <option value="3">Otro</option>
    </select>

    <label for="internet">¿Cuenta con acceso a internet?:</label> 
    <select name="internet" id="">
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label for="regimen">Regimen de afiliacion</label> 
    <select name="regimen" id="">
        <option value="1">Subsidiado</option>
        <option value="2">Contributivo</option>
    </select>

    
    <input type="submit" value="Registrarme">


</form>