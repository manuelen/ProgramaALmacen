<?php
require('fpdf/fpdf.php'); 
require('conexion.php');

class PDF extends FPDF{ 
//Cargar los datos 
var $widths;  
var $aligns;  

function SetWidths($w)  
{  
    $this->widths=$w;  
}  
  
function SetAligns($a)  
{  
    $this->aligns=$a;  
}  
  
function Row($data)  
{  
    $nb=0;  
    for($i=0;$i<count($data);$i++)  
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));  
    $h=4*$nb;  
    $this->CheckPageBreak($h);  
    for($i=0;$i<count($data);$i++)  
    {  
        $w=$this->widths[$i];  
        $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';  
        $x=$this->GetX();  
        $y=$this->GetY();  
        $this->Rect($x,$y,$w,$h);  
        $this->MultiCell($w,4,$data[$i],0,$a);  
        $this->SetXY($x+$w,$y);  
    }  
    $this->Ln($h);  
}  
  
function CheckPageBreak($h)  
{  
    if($this->GetY()+$h>$this->PageBreakTrigger)  
        $this->AddPage($this->CurOrientation);  
}  
  
function NbLines($w,$txt)  
{  
    $cw=&$this->CurrentFont['cw'];  
    if($w==0)  
        $w=$this->w-$this->rMargin-$this->x;  
    $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;  
    $s=str_replace("\r",'',$txt);  
    $nb=strlen($s);  
    if($nb>0 and $s[$nb-1]=="\n")  
        $nb--;  
    $sep=-1;  
    $i=0;  
    $j=0;  
    $l=0;  
    $nl=1;  
    while($i<$nb)  
    {  
        $c=$s[$i];  
        if($c=="\n")  
        {  
            $i++;  
            $sep=-1;  
            $j=$i;  
            $l=0;  
            $nl++;  
            continue;  
        }  
        if($c==' ')  
            $sep=$i;  
        $l+=$cw[$c];  
        if($l>$wmax)  
        {  
            if($sep==-1)  
            {  
                if($i==$j)  
                    $i++;  
            }  
            else  
                $i=$sep+1;  
            $sep=-1;  
            $j=$i;  
            $l=0;  
            $nl++;  
        }  
        else  
            $i++;  
    }  
    return $nl;  
}  
  
function Header()  
{  	
	$this->Image('imagenes/logo.jpg',10,8,33);
    $this->SetFont('Arial','',10);
	$this->Cell(200,10,"Fecha:",0,0,'R');
	$this->Cell(20,10,''.date("y/m/d"),0,0,'R');
	$this->Ln(10);
	$this->Cell(220,10,'Page '.$this->PageNo().'/{nb}',0,0,'R');
	$this->Ln(10);
	$this->Cell(250,10,'TRASLADO DE EQUIPOS',0,0,'C');
	$this->Ln(10);
	$this->Cell(20);
}  
  
function Footer()  
{  
    $this->SetY(-15);  
    $this->SetFont('Arial','B',8);  
    $this->Cell(100,10,'',0,0,'L');
	  
}  
}  
// creamos el objeto FPDF  
$pdf=new PDF('L','mm','Letter'); // vertical, milimetros y tama�o  
$pdf->Open();  
$pdf->AliasNbPages();
$pdf->AddPage(); // agregamos la pagina  
$pdf->SetMargins(20,20,20); // definimos los margenes en este caso estan en milimetros  
$pdf->Ln(10); // dejamos un peque�o espacio de 10 milimetros  
// Realizamos la consulta  
$con = new DB; 
	$aspirante=$_POST['nombre'];
	$consulta=mysql_query("select nombre,cedula,apellido,telefono,curso from aspirantes where cedula= '$nombre'");
	$consulta1=mysql_fetch_array($consulta);
	
	;
	
	$pdf->Ln(10);
	$pdf->Cell(30);
// Para realizar esto utilizaremos la funcion Row()  
$pdf->SetFont('Arial','',10); // tipo y tama�o de letra  
$pdf->SetWidths(array(30, 40, 40, 30,30)); // Definimos el tama�o de las columnas, tomando en cuenta que las declaramos en milimetros, ya que nuestra hoja esta en milimetros.  
$pdf->Row(array('Nombre', 'C�dula', 'Apellido', 'Tel�fono','curso')); // creamos nuestra fila con las columnas fecha(fecha de la visita al medico), medico(nombre del medico que nos atendio), consultorio y el diagnostico en esa visita.  
$historial = $con->conectar(); // Creamos nuestra conexi�n a la base de datos  
 // Realizamos nuestra consulta  
 $aspirante=$_POST['nombre'];
$strConsulta = "SELECT * from traslados where ubicacion='$aspirante' order by codigoequipo";  
// ejecutamos la consulta  
$historial = mysql_query($strConsulta);  
// listamos la tabla de historial de visitas de cada paciente  
$numfilas = mysql_num_rows($historial);  
for ($i=0; $i<$numfilas; $i++)   {  
$pdf->Cell(30);
$fila = mysql_fetch_array($historial);                  // los mostramos con la funci�n Row  
$pdf->Row(array($fila['nombre'], $fila['cedula'], $fila['apellido'], $fila['telefono'],$fila['curso'])); 
}  
$pdf->Ln(5);
$pdf->Cell(250,5,'OBSERVACION: ESTE INVENTARIO FORMA PARTE DE LA DOTACION BASICA POR LO QUE EN CASO DE PERDIDA O DETERIORO INBEBIDO');
$pdf->Ln(5);
$pdf->Cell(250,5,',DEBERA SER RESPUESTO POR EL INSTRUCTOR DE IGUAL MANERA, PODRA SER SOLICITADO EN CUALQUIER MOMENTO CON FINES DE');
$pdf->Ln(5);
$pdf->Cell(250,5,'CONTROL DE INVENTARIO');
$pdf->Ln(5);
$pdf->Cell(50,5,'_________');
$pdf->Cell(50,5,'_________');
$pdf->Ln(5);
$pdf->Cell(50,5,'Elaborado por');
$pdf->Cell(50,5,'Verificado por');

//La ultima linea 
$pdf->Output();
// lo que hace es cerrar el archivo y enviarlo al navegador.  


?>