
<?php
$con = mysqli_connect('localhost','root', 'root', 'test') or die ('no se conecta');
?>



<?php

require('fpdf/fpdf.php');


class MiPDF extends FPDF 
{
    
    public function Header()
    {
       
       
       
        $this ->SetFont('Arial' , 'B' , 20);
        $this->Cell($this->Image('assets/img/r.png', 80 ,22, 35 , 38)); 
        $this-> Ln(60);
        $this-> Cell (100 , 10 , "Hospital la nueva candelaria" ,0 ,0 , 'C');
        $this-> Ln(20);
        
    }
    
    
    
}


$cabeceraT = array(
"Fecha inicio cita" , "Fecha fin cita" , "Doctor" 
    
);  


$mipdf = new MiPDF();

$mipdf -> addPage();

for ($i = 0; $i < count( $cabeceraT) ; $i++)
{
    $mipdf-> SetFont('Courier' , 'B', 10 );
    $mipdf->SetFillColor(224,235,255);
    $mipdf-> SetTextColor(0,0,0);
    $mipdf->Cell(60,10, $cabeceraT[$i], 1 , 0 , 'C' , true);
    
}


$mipdf ->Ln(10);

$consulta = mysqli_query( $con, "SELECT * FROM ea_appointments INNER JOIN ea_users on ea_appointments.id_users_provider = ea_users.id ");

while ($datos = mysqli_fetch_array($consulta))
{
    
    $start_datetime = $datos['start_datetime']; 
    $end_datetime = $datos['end_datetime']; 
    $name = $datos['first_name'];
    
    
    
    $mipdf -> Cell(60,10, $start_datetime , 1, 0 , 'C', true);
    $mipdf -> Cell(60,10, $end_datetime , 1, 0 , 'C', true);
    $mipdf -> Cell(60,10, $name , 1, 0 , 'C', true);
   
    $mipdf-> Ln(10);
    
}
    

$mipdf->Output();




?>