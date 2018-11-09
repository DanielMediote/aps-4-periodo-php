<?php
require_once './lib/fpdf/fpdf.php';

$pdf = new FPDF('P', 'pt', 'A4');
$pdf->AddPage();
$pdf->SetTitle('Relatório_Presidencial', true);
$pdf->SetMargins(5, 2, 5);
$pdf->SetFont('Arial','B',18);
$pdf->Text(160,50,utf8_decode('Presidentes da República 2018'));
$pdf->SetFont('Arial','B',14);
$pdf->Text(210,80,utf8_decode('Resultados do 1º Turno'));


$pdf->SetFont('Times','B',12);
// $relatorio = array(
//   $bonoro = array(
//     'Nome : ' => 'Jair Messias Bolsonaro',
//     'Número : ' => '17',
//     'Partido : ' => 'PSL',
//     'Apuração : ' => '46%',
//   ),
//
//   $haddown = array(
//     'Nome : ' => 'Fernando Haddad',
//     'Número : ' => '13',
//     'Partido : ' => 'PT',
//     'Apuração : ' => '38%',
//
//   )
// );
//
// $pdf->Image(__DIR__.'/bonoro.jpeg',40,150,140);
// $height = 200;
// foreach ($relatorio[0] as $key => $value) {
//   $pdf->Text(200, $height , utf8_decode($key . $value));
//   $height += 15;
// }
//
// $pdf->Image(__DIR__.'/gay.jpeg',40,380,140);
// $height = 400;
// foreach ($relatorio[1] as $key => $value) {
//   $pdf->Text(200, $height , utf8_decode($key . $value));
//   $height += 15;
// }

$pdf->Cell(112, 20, utf8_decode('Corrida Presidêncial'), true, true, true);

$pdf->Output();
?>
