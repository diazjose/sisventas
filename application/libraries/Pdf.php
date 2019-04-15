<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    // Incluimos el archivo fpdf
    require_once APPPATH."/third_party/fpdf/fpdf.php";
 
    //Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
    class Pdf extends FPDF {
        public function __construct() {
            parent::__construct();
        }
        // El encabezado del PDF
        
        public function Header(){
          
          $this->Image('http://localhost/sisventas/public/img/google_logo.png' , 10 ,10, 45 , 18); 
          
          $this->SetFont('Arial','B',15);
            // mover a la derecha
          $this->Cell(80);          
            // Agregamos el titulo
          $this->Cell(30,10,'Sistema de Ventas',0,0,'C');

          $this->SetFont('Arial','',12);
          $this->Cell(50);          
          $this->Cell(20,10,utf8_decode('FACTURA N° 3701'),0,0,'C');
           
           // salto de linea
          $this->Ln(4);
          
          $this->SetFont('Arial','',8);
          $this->Cell(80);          
          $this->Cell(30,10,'Colonias Los Andes #250, La Rioja Argentina',0,0,'C');
          $this->Ln(3);
          $this->SetFont('Arial','',8);
          $this->Cell(80);          
          $this->Cell(30,10,utf8_decode('Teléfono: +(3804) 934867'),0,0,'C');
          $this->Ln(3);
          $this->SetFont('Arial','',8);
          $this->Cell(80);          
          $this->Cell(30,10,'Email: pipadiaz@gmail.com',0,0,'C');
          $this->Ln(20);
       }
       
       // El pie del pdf
       public function Footer(){
           $this->SetY(-15);
           $this->SetFont('Arial','I',8);
           $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
      }
    }
?>