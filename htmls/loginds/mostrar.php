<!-- Main content -->
<section class="content main-header">
    <div class="container-fluid">

    <a href="?ctrl=CtrlCliente&accion=nuevo" class="btn btn-info">
        <i class="bi bi-plus-circle"></i> 
        Insertar Nuevo Cliente</a>
    <a href="?" class="btn btn-info">
        <i class="bi bi-arrow-90deg-left"></i>
        Retornar</a>
    <br><br>
    <table class="table table-striped text-wrap align-middle" style="zoom: 70%;">
        <thead class="bg-info text-center">
            <tr>
            <th class="align-middle">id</th>
            <th class="align-middle">name</th>
            <th class="align-middle">email</th>
            <th class="align-middle">password</th>
        </tr>
        </thead>
        <tbody>
            <?php 
    if (is_array($data))
    foreach ($data as $c) { ?>
        <tr>
            <td><?=$c["id"]?></td>
            <td><?=$c["name"]?></td>
            <td><?=$c["email"]?></td>
            <td><?=$c["password"]?></td>
            <td class="text-center">
                <a class="btn btn-primary" href="?ctrl=CtrlCliente&accion=editar&idclientes=<?=$c["idclientes"]?>">
                    <i class="bi bi-pencil-square"></i> Editar </a>
                <a class="btn btn-danger" href="?ctrl=CtrlCliente&accion=eliminar&idclientes=<?=$c["idclientes"]?>">
                    <i class="bi bi-trash"></i> Eliminar </a>
            </td>
        </tr>
    <?php }    ?>
        </tbody>
    </table>
    <br>
    </div>
    
    <nav aria-label="..." class="d-flex justify-content-center">
      <ul class="pagination">
        <li class="page-item disabled">
          <a class="page-link">Anterior</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Siguiente</a>
        </li>
      </ul>
    </nav>
</section>