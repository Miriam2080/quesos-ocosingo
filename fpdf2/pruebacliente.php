<?php

require('./fpdf.php');
session_start();
error_reporting(0);
$varsesion = $_SESSION['username'];
if ($varsesion == null || $varsesion = '') {
	header('Location: ../pagina/iniciar_sesion.php');
	die();
}
class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      //include '../../recursos/Recurso_conexion_bd.php';//llamamos a la conexion BD

      //$consulta_info = $conexion->query(" select *from hotel ");//traemos datos de la empresa desde BD
      //$dato_info = $consulta_info->fetch_object();
      $this->Image('DEVS7.jpg', 20, 10, 50); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(95); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      //$this->Cell(110, 15, utf8_decode('REPORTE DE EMPLEADOS'), 1, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(3); // Salto de línea
      //$this->SetTextColor(103); //color

      /* UBICACION */
      $this->Cell(180);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10, utf8_decode("Ubicación : OCOSINGO CHIAPAS "), 0, 0, '', 0);
      $this->Ln(5);

      /* TELEFONO */
      $this->Cell(180);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(59, 10, utf8_decode("Teléfono : 919-100-00-01 "), 0, 0, '', 0);
      $this->Ln(5);

      /* COREEO */
      $this->Cell(180);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("Correo : QUESOSDEV@HOTMAIL.COM"), 0, 0, '', 0);
      $this->Ln(5);

      /* TELEFONO */
      $this->Cell(180);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("Sucursal : 22 "), 0, 0, '', 0);
      $this->Ln(10);

      /* TITULO DE LA TABLA */
      //color
      //$this->SetTextColor(228, 100, 0);
      $this->SetTextColor(0, 0, 255);
      $this->Cell(100); // mover a la derecha
      $this->SetFont('Arial', 'B', 14);
      $this->Cell(80, 10, utf8_decode("REPORTE DE CLIENTES "), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(0,0, 255); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 14);
      $this->Cell(8, 10, utf8_decode('ID'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
      $this->Cell(50, 10, utf8_decode('APELLIDOS'), 1, 0, 'C', 1);
      $this->Cell(40, 10, utf8_decode('RFC'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('TELEFONO'), 1, 0, 'C', 1);
      $this->Cell(63, 10, utf8_decode('CORREO'), 1, 0, 'C', 1);
      $this->Cell(60, 10, utf8_decode('DIRECCION'), 1, 1, 'C', 1);
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(540, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}


$pdf = new PDF();
$pdf->AddPage("landscape"); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

//$i = 0;
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetDrawColor(163, 163, 163); //colorBorde

$con = mysqli_connect("localhost", "root", "", "quesos_ocosingo");
//$consulta = "select Nombre, Ap_paterno, Ap_materno, RFC, Telefono, Correo from clientes";
$consulta = "SELECT clientes.id_cliente,clientes.nombre, CONCAT(clientes.ap_paterno,' ',clientes.ap_materno) AS APELLIDOS,clientes.rfc,clientes.telefono,clientes.correo,
CONCAT(clientes.calle,' #',clientes.numero,', ',colonia.nombre_colonia) AS DIRECCION
FROM 
clientes
INNER JOIN 
colonia ON clientes.id_colonia = colonia.id_colonia ORDER BY clientes.id_cliente ASC";

$result = mysqli_query($con, $consulta);


while ($row = mysqli_fetch_array($result)) {

   $pdf->Cell(8, 10, utf8_decode($row[0]), 1, 0, 'C');
   $pdf->Cell(30, 10, utf8_decode($row[1]), 1, 0, 'C');
   $pdf->Cell(50, 10, utf8_decode($row[2]), 1, 0, 'C');
   $pdf->Cell(40, 10, utf8_decode($row[3]), 1, 0, 'C');
   $pdf->Cell(30, 10, utf8_decode($row[4]), 1, 0, 'C');
   $pdf->Cell(63, 10, utf8_decode($row[5]), 1, 0, 'C');
   $pdf->Cell(60, 10, utf8_decode($row[6]), 1, 1, 'C');
   //$pdf->Cell(70,10, utf8_decode ($row[5]),1,1,'C');




   $exec = mysqli_query($con, $consulta);
}




$pdf->Output('Clientes.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
