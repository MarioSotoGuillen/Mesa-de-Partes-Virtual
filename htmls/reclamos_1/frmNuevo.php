<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h3><?=$encabezado?></h3>
    <form action="?accion=guardarNuevo" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">Id: </span>
            <input type="text" class="form-control" placeholder="Id:"  name="id" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Nombre: </span>
            <input type="text" class="form-control" placeholder="Nombre"  name="nombre" value="">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Apellidos: </span>
            <input type="text" class="form-control" placeholder="Apellidos"  name="Apellidos" value="">
        </div>
       
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">CorreoElectronico: </span>
            <input type="text" class="form-control" placeholder="CorreoElectronico"  name="CorreoElectronico" value="">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">destinatario: </span>
            <input type="text" class="form-control" placeholder="destinatario"  name="Asunto" value="">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Comentario: </span>
            <input type="text" class="form-control" placeholder="Comentario"  name="Comentario" value="">
        </div>


        <div class="input-group mb-3">
            <span class="input-group-text">Id:adjuntar archivos </span>
            <input type="file" class="form-control" placeholder="Id:"  name="id" value="">
        </div>


        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit">Guardar</button>
        </div>

 
    </form>
    <p><a href="?" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Retornar</a></p>

    
</body>
</html>