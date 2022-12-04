<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Editar Estudiante</title>
</head>
<body>
    <h3><?=$encabezado?></h3>
    <form action="?accion=guardarEditar" method="post">
        id : <input type="text" name="id" readonly
            value="<?=$estudiante_1['id']?>"><br>
        nombre: <input type="text" name="nombre" 
            value="<?=$estudiante_1['nombre']?>"><br>
        Apellidos: <input type="text" name="Apellidos" 
            value="<?=$estudiante_1['Apellidos']?>"><br>
        
        Dni: <input type="text" name="Dni" 
            value="<?=$estudiante_1['Dni']?>"><br>
        
        Telefono: <input type="text" name="Telefono" 
            value="<?=$estudiante_1['Telefono']?>"><br>

        Correo: <input type="text" name="Correo" 
            value="<?=$estudiante_1['Correo']?>"><br>
        
        Semestre: <input type="text" name="Semestre" 
            value="<?=$estudiante_1['Semestre']?>"><br>
        
        NumFolios: <input type="text" name="NumFolios" 
            value="<?=$estudiante_1['NumFolios']?>"><br>
        
        Asunto: <input type="text" name="Asunto" 
            value="<?=$estudiante_1['Asunto']?>"><br>
        destinatario: <input type="text" name="destinatario" 
        value="<?=$estudiante_1['destinatario']?>"><br>
        
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>

    
</body>
</html>

