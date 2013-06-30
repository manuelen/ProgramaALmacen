<?php 
error_reporting(E_ALL & ~E_NOTICE);
require('fpdf/fpdf.php');
require('conexion.php');

$cedula=$_POST['cedula'];


$aspirantes="SELECT aspirantes.cedula, aspirantes.nombre, aspirantes.apellido, aspirantes.telefono, aspirantes.curso FROM aspirantes WHERE aspirantes.cedula='$cedula'";

$aspirantes1=mysql_query($aspirantes);
		$opcion= mysql_fetch_array($aspirantes1);
		
class PDF extends FPDF
{
// Cabecera de página
function Header()
{

	//Logo
	$this->Image('imagenes/cabecera.jpg',10,5,190);
    // Arial bold 15
    $this->SetFont('Arial','',12);
    // Movernos a la derecha
    
    
    // Salto de línea
    $this->Ln(45);
	
	 global $title;

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Calculamos ancho y posición del título.
    $w = $this->GetStringWidth($title)+6;
    $this->SetX((210-$w)/2);
    
	$this->SetDrawColor(255,255,255);
    $this->SetFillColor(255,255,255);
    $this->SetTextColor(0,80,180);
    // Título
    $this->Cell($w,9,$title,1,1,'C',true);
    // Salto de línea
    $this->Ln(10);
}




function WriteHTML($html)
{
    // Intérprete de HTML
    $html = str_replace("\n",' ',$html);
    $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
    foreach($a as $i=>$e)
    {
        if($i%2==0)
        {
            // Text
            if($this->HREF)
                $this->PutLink($this->HREF,$e);
            else
                $this->Write(5,$e);
        }
        else
        {
            // Etiqueta
            if($e[0]=='/')
                $this->CloseTag(strtoupper(substr($e,1)));
            else
            {
                // Extraer atributos
                $a2 = explode(' ',$e);
                $tag = strtoupper(array_shift($a2));
                $attr = array();
                foreach($a2 as $v)
                {
                    if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                        $attr[strtoupper($a3[1])] = $a3[2];
                }
              			   $this->OpenTag($tag,$attr);
            }
        }
    }
}
function OpenTag($tag, $attr)
{
    // Etiqueta de apertura
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,true);
    if($tag=='A')
        $this->HREF = $attr['HREF'];
    if($tag=='BR')
        $this->Ln(5);
}

function CloseTag($tag)
{
    // Etiqueta de cierre
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,false);
    if($tag=='A')
        $this->HREF = '';
}

function SetStyle($tag, $enable)
{
    // Modificar estilo y escoger la fuente correspondiente
    $this->$tag += ($enable ? 1 : -1);
    $style = '';
    foreach(array('B', 'I', 'U') as $s)
    {
        if($this->$s>0)
            $style .= $s;
    }
    $this->SetFont('',$style);
}

function PutLink($URL, $txt)
{
    // Escribir un hiper-enlace
	
    $this->SetTextColor(0,0,255);
    $this->SetStyle('U',true);
    $this->Write(5,$txt,$URL);
    $this->SetStyle('U',false);
    $this->SetTextColor(0);
}
}
$f=date("d/m/Y");
$fecha=explode("/",$f);
if($fecha[1]==1){
 $m="Enero";
}elseif($fecha[1]==2){
$m="Febrero";
}elseif($fecha[1]==3){
$m="Marzo";
}elseif($fecha[1]==4){
$m="Abril";
}elseif($fecha[1]==5){
$m="Mayo";
}elseif($fecha[1]==6){
$m="Junio";
}elseif($fecha[1]==7){
$m="Julio";
}elseif($fecha[1]==8){
$m="Agosto";
}elseif($fecha[1]==9){
$m="Septiembre";
}elseif($fecha[1]==10){
$m="Octubre";
}elseif($fecha[1]==11){
$m="Noviembre";
}elseif($fecha[1]==12){
$m="Diciembre";
}

$html = 
	'<b>    <br>
			<br>
			 Fecha de Emision:  '.$fecha[0].'  días del mes de '.$m.' del año '.$fecha[2].'. 
	<br>
	<br>		
				El Aspirante: <b><u>'.$opcion['nombre'].'</u></b> <b><u>'.$opcion['apellido'].'</u></b> de C.I.: <b><u>'.$opcion['cedula'].'</u></b> desea optar por un cupo para cursar la carrera: <b><u>'.$opcion['curso'].' </u></b> en el Centro de Formacion Socialista Metalminero de La Victoria, Estado Aragua, periodo 2013/2014. <br><br>
		Informacion de contacto del aspirante:  <b><u>'.$opcion['telefono'].'</u></b>.
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	                                                        
	<br>
	
									                                            
	<br>
	<br>
	                                          			           SELLO Y FIRMA   </b> 
											  
	
 ';

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->Open(); 
$title = 'PREINSCRIPCION';
$pdf->SetTitle($title);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->SetLeftMargin(20);
$pdf->WriteHTML($html);
$pdf->Output();
?>