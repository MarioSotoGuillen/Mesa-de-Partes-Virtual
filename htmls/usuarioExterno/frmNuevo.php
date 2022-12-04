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
        <div class="input-group input-group-lg">
            <span class="input-group-text">Id: </span>
            <input type="text" class="form-control" placeholder="Id:"  name="id" value="">
        </div>
        <div class="input-group input-group-lg">
            <span class="input-group-text">Nombre: </span>
            <input type="text" class="form-control" placeholder="Nombre"  name="nombre" value="">
        </div>
        <div class="input-group input-group-lg">
            <span class="input-group-text">ApellidoPaterno: </span>
            <input type="text" class="form-control" placeholder="ApellidoPaterno"  name="ApellidoPaterno" value="">
        </div>
        <div class="input-group input-group-lg">
            <span class="input-group-text">ApellidoMaterno: </span>
            <input type="text" class="form-control" placeholder="ApellidoMaterno"  name="ApellidoMaterno" value="">
        </div>
        <div class="input-group input-group-lg">
            <span class="input-group-text">Direccion: </span>
            <input type="text" class="form-control" placeholder="Direccion"  name="Direccion" value="">
        </div>
        <div class="input-group input-group-lg">
            <span class="input-group-text">Departamento: </span>
            <input type="text" class="form-control" placeholder="Departamento"  name="Departamento" value="">
        </div>
        <div class="input-group-text">
            <span class="input-group-text">Provincia: </span>
            <select name="Provincia" id="Provincia">
                <option value="MariscalNieto">Mariscal Nieto</option>
                <option value="Libertad">Libertad</option>
                <option value="Ilo">Ilo</option>
                <option value="SanchezCerro">Sanchez Cerro</option>
            </select>
                
        
        </div>
                
        </div>
        <div class="input-group-text">
            <span class="input-group-text">Distrito: </span>
            <input type="text" class="form-control" placeholder="Distrito"  name="Distrito" value="">
        </div>
        <div class="input-group input-group-lg">
            <span class="input-group-text">Celular: </span>
            <input type="text" class="form-control" placeholder="Celular"  name="Celular" value="">
        </div>
        <div class="input-group input-group-lg">
            <span class="input-group-text">CorreoElectronico: </span>
            <input type="text" class="form-control" placeholder="CorreoElectronico"  name="CorreoElectronico" value="">
        </div>

    
        <div class="input-group input-group-lg">
            <span class="input-group-text">CarreraProfesional: </span>
            <select name="CarreraProfesional" id="CarreraProfesional">
                <option value="ociedad en nombre colectiva">Enfermeria Tecnica</option>
                <option value="MecatronicaAutomotriz">Mecatronica Automotriz</option>
                <option value="ProduccionAgropecuaria">Produccion Agropecuaria</option>
                <option value="AsistenciadeDireccionyGerencia">Asistencia de Direccion y Gerencia</option>
                <option value="ARQUITECTURADEPLATAFORMASYSERVICIOSDETECNOLOGÍASDELAINFORMACIÓN">ARQUITECTURA DE PLATAFORMAS Y SERVICIOS DE TECNOLOGÍAS DE LA INFORMACIÓN</option>
                <option value="Contabilidad">Contabilidad</option>
                <option value="ConstruccionCivi">Construccion Civil</option>
                <option value="ElectronicaIndustrial">Electronica Industrial</option>
                <option value="MecanicadeProduccionIndustrial">Mecanica de Produccion Industrial</option>
            </select>

    



            
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