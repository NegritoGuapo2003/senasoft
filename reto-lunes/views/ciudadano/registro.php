<form action="<?=url('ciudadano','guardar'); ?>" method="post">

    <label for="">Tipo de documento: </label>
    <select name="" id="">
        <option value="cedula_ciudadania">Cedula de Ciudadania</option>
        <option value="tarjeta_identidad">Tarjeta de Identidad</option>
        <option value="cedula_extranjeria">Cedula de Extranjería</option>
    </select>

    <label for="cedula">Numero de documento: </label>
    <input type="text" name="cedula" >

    <label for="nombres">Nombres: </label>
    <input type="text" name="nombres">

    <label for="apellidos">Apellidos: </label> 
    <input type="text" name="apellidos">

    <label for="telfijo">Telefono Fijo: </label> 
    <input type="number" name="telfijo">

    <label for="celular">Celular: </label> 
    <input type="number" name="celular">

    <label for="correo">Correo: </label> 
    <input type="text" name="correo">

    <label for="municipio">Municipio: </label> 
    <select name="" id="">
        <option value="mun1">Municipio 1</option>
        <option value="mun2">Municipio 2</option>
        <option value="mun3">Municipio 3</option>
    </select>

    <label for="vereda">Vereda: </label> 
    <select name="" id="">
        <option value="ver1">Vereda 1</option>
        <option value="ver2">Vereda 2</option>
        <option value="ver3">Vereda 3</option>
    </select>

    <label for="direccion">Direccion: </label> 
    <input type="text" name="direccion">

    <label for="nacimiento">Fecha de nacimiento: </label> 
    <input type="text" name="nacimiento">

    <label for="etnia">Etnia a la que pertenece: </label> 
    <select name="" id="">
        <option value="etnia1">Etnia 1</option>
        <option value="etnia2">Etnia 2</option>
        <option value="etnia3">Etnia 3</option>
    </select>

    <label for="discapacidad">Condicion de discapacidad: </label> 
    <select name="" id="">
        <option value="disc1">Discapacidad 1</option>
        <option value="disc2">Discapacidad 2</option>
        <option value="disc3">Discapacidad 3</option>
    </select>


    
    <input type="submit" value="Enviar">


</form>