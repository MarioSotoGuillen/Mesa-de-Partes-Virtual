<!DOCTYPE html>
<html lang="en">
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
        <div class="input-group mb-3">
            <span class="input-group-text">Dni: </span>
            <input type="text" class="form-control" placeholder="Dni"  name="Dni" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Telefono: </span>
            <input type="text" class="form-control" placeholder="Telefono"  name="Telefono" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Correo: </span>
            <input type="text" class="form-control" placeholder="Correo"  name="Correo" value="">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Semestre: </span>
            <input type="text" class="form-control" placeholder="Semestre"  name="Semestre" value="">
        </div>


      <br>
        <div class="input-group mb-3">
            <span class="input-group-text">NumFolios: </span>
            <input type="text" class="form-control" placeholder="NumFolios"  name="NumFolios" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Asunto: </span>
            <input type="text" class="form-control" placeholder="Asunto"  name="Asunto" value="">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Id:adjuntar Documento FUT </span>
            <input type="file" class="form-control" placeholder="Id:"  name="id" value="">
        </div>

}
<div class="input-group input-group-lg">
            <span class="input-group-text">destinatario: </span>
            <select name="destinatario" id="destinatario">
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
            <button class="btn btn-outline-secondary" type="submit">Guardar</button>
        </div>
    </form>
    <p><a href="?" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Retornar</a></p>
</body>
</html>