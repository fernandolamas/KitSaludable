<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" media="all" rel="stylesheet"> 
        
        <title>Ejercicios</title>
    </head>
    
    <body>
        <header>
            <h1 onclick="location.href='menuprincipal.php'">KitSaludable</h1>
        </header>
        
        <div id="contenido1">
            <div id="row1">    
                <h3>Lista de Rutinas fisicas</h3><br></br>
                <select name="select Dietas" multiple>
                    <option value ="" disable selected>--Seleccione una Rutinas--</option>
                    <option value ="Sentadillas">Pectoral + abdominales</option>
                    <option value ="Skipping">Espaldas</option>
                    <option value ="Plancha lateral">Piernas</option>
                    <option value ="Flexiones de brazos">Hombros + Brazos</option>
                    <option value ="Abdominales">Aerobico + calentamiento</option>
                </select>
            </div>
            <div id="row2">  
                <h3>Lista de ejercicios con las calorias determinadas</h3> <br></br>
                <table bgcolor="2c3e50" class="table table-striped table-bordered table-hover">
                    <tr class="success">
                        <th><h2>N°</h2></th>
                        <th><h2>Ejercicios</h2></th>
                        <th><h2>Series</h2></th>
                        <th><h2>Repeticiones</h2></th>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </table>
            </div>
        </div>   
            
        <div id="contenido2">
            <div id="row1">
                <h3>Cantidad de calorias que quieres quemar</h3><br></br>
                <select name="select Calorias" multiple>
                    <option value ="" disable selected>--Seleccione una Calorias--</option>
                    <option value ="100">100</option>
                    <option value ="200">200</option>
                    <option value ="300">300</option>
                    <option value ="400">400</option>
                    <option value ="500">500</option>
                </select>
            </div>
            <div id="row2">
                <h3>Lista de ejercicios de la de la rutina seleccionada</h3><br></br>
                <table bgcolor="2c3e50" class="table table-striped table-bordered table-hover">
                    <tr class="success">
                        <th><h2>N°</h2></th>
                        <th><h2>Alimentos</h2></th>
                        <th><h2>Calorias</h2></th>
                        <th><h2>Descripcion</h2></th>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </table>
            </div>                
        </div>
      
    <style>
        body{
        background: url(img/ejercicios.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;}
        header{
            background:#2c3e50;
            text-align: center;}
        #row1,#row2{
        background: #EAE8E8;
        text-align: center;}
        
        #contenido1{
        margin: 10px auto;
        max-width: 1066px;
        padding: 20px;
        display: flex;
        }
        #contenido2{
        margin: 10px auto;
        max-width: 1066px;
        padding: 10px;
        display: flex;
        }
        #contenido1, #contenido2{
        width: 100%;}
        #row1, #row2{
        width: 100%;
        display: inline-block;
        }
        h1, h2, h3{
            margin: 0px;}
        h1{
         color:#fff;
         font-size: 40px;
         margin: 0px;
         padding: 10px 0;
         text-align: center;}
        h2{
            color:#fff;
            font-size: 20px;
            margin: 0px;}
        h3{
            color:#2c3e50;
            font-size: 20px;
            margin: 0px;}

        
    </style>
     <!--Bootstrap CSS -->
        <script src="js/jquery/jquery-3.4.1.min.js"></script>
        <script src="js/jquery/jquery-3.4.1.slim.min.js"></script>
        <script src="js/popper/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
     
    </body>
</html>
