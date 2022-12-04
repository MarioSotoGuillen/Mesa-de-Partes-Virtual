<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar reclamos</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h2><?=$encabezado?></h2>

    <form action="?accion=guardarEditar" method="post">
        
        id : <input type="text" name="id" readonly
            value="<?=$reclamos_1['id']?>"><br>
        Nombre: <input type="text" name="nombre" 
            value="<?=$reclamos_1['nombre']?>"><br>
        Apellidos: <input type="text" name="Apellidos" 
            value="<?=$reclamos_1['Apellidos']?>"><br>
        CorreoElectronico: <input type="text" name="CorreoElectronico" 
            value="<?=$reclamos_1['CorreoElectronico']?>"><br>
        Asunto: <input type="text" name="Asunto" 
            value="<?=$reclamos_1['Asunto']?>"><br>
        Comentario: <input type="text" name="Comentario" 
            value="<?=$reclamos_1['Comentario']?>"><br>    
        
        <input type="submit" value="Guardar">

    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>