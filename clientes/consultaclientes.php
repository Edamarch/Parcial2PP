<?php include('../encabezado2.php') ?>

<?php include('../cnn.php') ?>

<style type="text/css">
	
 
.body4{
	margin: 0 auto;
	margin-top: 22px;
	margin-left: 15%;
    margin-bottom: 70px;
	width: 980px;
	height: 400px;
	background-color: #fff; ;
	display: inline-block;
    }

    .bodybajo{
	margin: 0 auto;
	margin-left: 30%;
	width: 500px;
	height: 50px;
	background-color: #fff ;
	display: inline-block;
    }

.btnAzul{
	background:#7f8c8d;
	color:#fff;
	display: inline-block;
	font-size: 1.05em;
	margin: 1px;
	padding: 3px;
	text-align: center;
	width: 200px;
	text-decoration: none;
	box-shadow: 0px 3px 0px #373c3c;
}
/*COLORES*/

.btnAzul.blue{

	background: /*#3498db;*/#05629b;
	box-shadow: 0px 3px 0px #266792;
}

/*TAMAÑOS*/
.btnAzul.medium{

}

/*EFECTOS*/
.btnAzul.radius{
	border-radius: 50px;

}

.btnAzul:hover{
	box-shadow: 0px 0px 0px;
	padding-top: -5px;
}
    .table-container {
  overflow-x: auto;
  overflow-y: auto; }

  .table-rwd {
  min-width: 900px; }
  
  .table-rwd tr:hover {

    background-color: #1A8CFF;  
}
.botonE{
    border: 1px solid #05629b;/*#2e518b; /*anchura, estilo y color borde*/
padding: 1px; /*espacio alrededor texto*/
background-color: #05629b;/*#2e518b; /*color botón*/
color: #ffffff; /*color texto*/
text-decoration: none; /*decoración texto*/
text-transform: uppercase; /*capitalización texto*/
font-family: 'Helvetica', sans-serif; /*tipografía texto*/
font-weight: bolder;
font-size: 12px;
border-radius: 50px; /*bordes redondos*/
width: 100px;

}
.botonE:hover{
    background-color: #434343; /*color botón*/
}
.botonRed{
    border: 1px solid #05629b;/*#2e518b; /*anchura, estilo y color borde*/
padding: 1px; /*espacio alrededor texto*/
background-color: #FF4500;/*#2e518b; /*color botón*/
color: #ffffff; /*color texto*/
text-decoration: none; /*decoración texto*/
text-transform: uppercase; /*capitalización texto*/
font-family: 'Helvetica', sans-serif; /*tipografía texto*/
font-weight: bolder;
font-size: 12px;
border-radius: 50px; /*bordes redondos*/
width: 100px;

}
.botonRed:hover{
    background-color: #434343; /*color botón*/
}

    .bodybajo{
    margin: 0 auto;
    margin-left: 30%;
    width: 500px;
    height: 50px;
    background-color: #fff ;
    display: inline-block;
    }

</style>

<script type="text/javascript" src="../js/gridviewscroll.js"></script>
    <script type="text/javascript">
        var gridViewScroll = null;
        window.onload = function () {
            var options = new GridViewScrollOptions();
            options.elementID = "gvMain";
            options.width = 1100;
            options.height = 300;
            options.freezeColumn = true;
            options.freezeFooter = false;
            options.freezeColumnCssClass = "GridViewScrollItemFreeze";
            options.freezeFooterCssClass = "GridViewScrollFooterFreeze";
            options.freezeColumnCount = 0;

            gridViewScroll = new GridViewScroll(options);
            gridViewScroll.enhance();

            options.elementID = "gvMain2";
            var gridViewScroll2 = new GridViewScroll(options);
            gridViewScroll2.enhance();

            options.elementID = "gvMain3";
            options.width = 1400;
            var gridViewScroll3 = new GridViewScroll(options);
            gridViewScroll3.enhance();

            options.elementID = "gvMain4";
            var gridViewScroll4 = new GridViewScroll(options);
            gridViewScroll4.enhance();
        }
        function enhance() {
            gridViewScroll.enhance();
        }
        function undo() {
            gridViewScroll.undo();
        }

    </script>
    <div class="body4">
<?php 
include('../cnn.php');
$consulta="SELECT * FROM clientes WHERE clientes.cestado<>'INACTIVO'";
$resultado=mysqli_query($conn,$consulta);
echo "<table border='2' cellspacing='0'  style='width:100%; border-collapse:collapse;' class='table-container table-rwd'  >";
echo "<tr class='GridViewScrollHeader TH' align='center'>";
echo "<th >NIT</th>";
echo "<th >NOMBRE</th>";
echo "<th >APELLIDO</th>";
echo "<th colspan='2' >EDITAR</th>";
echo "</tr>";
while($columna=mysqli_fetch_array($resultado)){
echo "<tr class='GridViewScrollItem'>";
echo"<td>".$columna['nit']."</td><td>".$columna['nombre']."</td><td>".$columna['apellido']."</td>
<td style='height: 25px;' align='center'><a href='actcliente.php?codigo=".$columna['id_cliente']."'>
<input type='submit' name='btnupdate' value='EDITAR' class='botonE'></a></td>
<td style='height: 25px;' align='center'><a href='eliminarclientes.php?codigo=".$columna['id_cliente']."'>
<input type='submit' name='btnupdate' value='ELIMINAR' class='botonRed'></a></td>";
echo "</tr>";
}
echo "</table>";
mysqli_close( $conn );
 ?>
 <table width="90%" border="0">
	<tr align="center">
		<form>
			<td>
				<a href="ingresoclientes.php"><input type="button" name="btnClientes" value="AGREGAR" class="botonA"></a>
			</td>
            <td>
                <a href="bclientes.php"><input type="button" name="btnbuscar" value="BUSCAR" class="botonA"></a>
            </td>
		<td>
			<a href="../config.php"><input type="button" name="btnRetornar" value="CANCELAR" class="botonA"></a>
		</td>
		</form>
	</tr>
</table>
</div>

<?php include('../pie_pagina.php') ?>