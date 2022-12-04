<section class="content main-header">
    <div class="container-fluid">
    <form action="?ctrl=CtrlCliente&accion=guardarNuevo" method="post">
        <div class="row mb-3">
        <div class="col-md-6">
            <label for="inputID" class="form-label">Id:</label>
            <input type="text" class="form-control"
                name="Id" value="" id="inputID">
        </div>
        <div class="col-md-6">
            <label for="inputNombres" class="form-label">name :</label>
            <input type="text" class="form-control"
                name="name" value="" id="inputNombres">
        </div>
        <div class="col-md-6">
            <label for="inputApellidos" class="form-label">email:</label>
            <input type="text" class="form-control"
                name="email" value="" id="inputApellidos">
        </div>
        <div class="col-md-6">
            <label for="inputDireccion" class="form-label">password:</label>
            <input type="password" class="form-control"
                name="password" value="" id="inputDireccion">
        </div>
        <div class="col-md-6">
            <label for="inputTelefonos" class="form-label">Teléfono:</label>
            <input type="text" class="form-control"
                name="telefonos" value="" id="inputTelefonos">
        </div>
        <div class="col-md-6">
            <label for="inputDNI" class="form-label">DNI:</label>
            <input type="text" class="form-control"
                name="dni" value="" id="inputDNI">
        </div>
        <div class="col-md-6">
            <label for="inputRUC" class="form-label">RUC:</label>
            <input type="text" class="form-control"
                name="ruc" value="" id="inputRUC">
        </div>
        <div class="col-md-6">
            <label for="inputCorreoelectronico" class="form-label">Correo Electrónico:</label>
            <input type="text" class="form-control"
                name="correoelectronico" value="" id="inputCorreoelectronico">
        </div>
        <div class="col-md-6">
            <label for="inputcontraseñas" class="form-label">Contraseñas:</label>
            <input type="text" class="form-control"
                name="contraseñas" value="" id="inputcontraseñas">
        </div>
        <div class="col-md-6">
            <label for="inputTipocliente" class="form-label">Tipo de Cliente:</label>
            <select name="tipocliente" class="form-control" id="tipocliente">
                <?php
                    $tipocliente = $clientes->getTipoCliente()->leer()['data'];
                    foreach ($tipocliente as $tp) { ?>
                    <option value="<?=$tp["idtipos_clientes"]?>"><?=$tp["tipocliente"]?></option>
                    <?php } ?>
            </select>

        </div>
        </div>
        <div class="col-md-3">
        <button type="submit" class="form-control btn btn-primary">
            <i class="bi bi-save2"></i> Guardar</button>
        </div>
    </form>
    <br><a href="?ctrl=CtrlCliente" class="btn btn-primary">
        <i class="bi bi-arrow-90deg-left"></i>
        Retornar</a>
</div>
</section>
