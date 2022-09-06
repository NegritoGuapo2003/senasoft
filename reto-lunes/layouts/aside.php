<div class="aside">
    <div class="details-aside">
        <form action="<?=url('ciudadano','login'); ?>" method="post">
            <label for="">Tipo de documento: </label>
            <select name="tipo_documento" id="">
                <option value="cedula_ciudadania">Cedula de Ciudadania</option>
                <option value="tarjeta_identidad">Tarjeta de Identidad</option>
                <option value="cedula_extranjeria">Cedula de Extranjería</option>
            </select>
            <label for="">Numero de documento: </label>
            <input type="text" name="cedula" id="">
            <label for="">Codigo: </label>
            <input type="text" name="codigo">
            
            <input type="submit" value="Enviar">
        </form>
    </div>
</div>
<div class="container">