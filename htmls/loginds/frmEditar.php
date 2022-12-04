<section class="content main-header">
    <div class="container-fluid">
    <form action="?ctrl=CtrlCliente&accion=guardarEditar" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">Id:</span>
            <input type="text" class="form-control"
                name="idclientes" value="<?=$Login->set_id()?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">name:</span>
            <input type="text" class="form-control"
                name="nombres" value="<?=$Login->set_name()?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">email:</span>
            <input type="text" class="form-control"
                name="email" value="<?=$Login->set_email()?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">password:</span>
            <input type="text" class="form-control"
                name="password" value="<?=$Login->set_password()?>">
        </div>
        
        <div class="col-md-6">
            <label for="inputtipocliente" class="form-label">Tipo de Cliente:</label>
            <select name="tipocliente" class="form-control" id="tipocliente">
                <?php
                    $tipoclientes = $clientes->getTipoCliente()->leer()['data'];
                    $tipocliente = $clientes->getTipoCliente()->getId();
                    foreach ($tipoclientes as $tp) { 
                        if ($tp["idtipos_clientes"]==$tipocliente)
                            $seleccionado="selected";
                        else
                            $seleccionado="";
                ?>
            <option <?=$seleccionado?>
            value="<?=$tp["idtipos_clientes"]?>"><?=$tp["tipocliente"]?></option>
            <?php } ?>
            </select>
            </div><br>
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
