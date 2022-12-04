<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Editar Dato del Estudiante</title>
</head>
<body>
    <h2><?=$encabezado?></h2>
    <form action="?accion=guardarEditar" method="post">
        id : <input type="text" name="id" readonly
            value="<?=$usuarioExterno['id']?>"><br>
        Nombre: <input type="text" name="nombre" 
            value="<?=$usuarioExterno['nombre']?>"><br>
        ApellidoPaterno: <input type="text" name=" ApellidoPaterno " 
            value="<?=$usuarioExterno['ApellidoPaterno']?>"><br>
        ApellidoMaterno: <input type="text" name="ApellidoMaterno" 
            value="<?=$usuarioExterno['ApellidoMaterno']?>"><br>
        Direccion: <input type="text" name="Direccion" 
            value="<?=$usuarioExterno['Direccion']?>"><br>
        Departamento: <input type="text" name="Departamento" 
            value="<?=$usuarioExterno['Departamento']?>"><br>
        Provincia: <input type="text" name="Provincia" 
            value="<?=$usuarioExterno['Provincia']?>"><br>
        Distrito: <input type="text" name="Distrito" 
            value="<?=$usuarioExterno['Distrito']?>"><br>
        Celular: <input type="text" name="Celular" 
            value="<?=$usuarioExterno['Celular']?>"><br>
        CorreoElectronico: <input type="text" name="CorreoElectronico" 
            value="<?=$usuarioExterno['CorreoElectronico']?>"><br>
        CarreraProfesional: <input type="text" name="CarreraProfesional" 
            value="<?=$usuarioExterno['CarreraProfesional']?>"><br>    
            
        <input type="submit" value="Guardar">

    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>