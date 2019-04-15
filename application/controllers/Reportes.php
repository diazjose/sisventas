<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->library('Pdf');
	}
	public function factura()
	{
		if ($this->session->userdata('is_logged')) {
			

			$pdf = new PDF();
			$pdf->AliasNbPages();
			$pdf->AddPage();
			$pdf->SetFont('Times','',12);
			//$pdf->Ln(1);
			//$pdf->Cell(145, 20, 'LETRERO', 1, 0, 'C', True);
			$pdf->SetFont('Arial','B',10);
			$pdf->SetXY(10,35);
			$pdf->SetFillColor(13, 71, 108 );
			$pdf->SetTextColor(240, 255, 240);
			$pdf->Cell(100,8,'       FACTURA A',0, 0,'', True);
			$pdf->Ln(20);
			$pdf->SetFillColor(13, 71, 108 );
			$pdf->SetTextColor(240, 255, 240);
			$pdf->Cell(190,8,'',0, 0,'', True);
			$pdf->Output();


		}else{
			show_404();
		}
		
	}
}
