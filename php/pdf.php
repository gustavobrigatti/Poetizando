<?php
session_start();
date_default_timezone_set('Brazil/East');
$date = date('d/m/Y   H:i:s', time());
    if($_SESSION['logado'] != 2){
        header("location: ../index.php");
    }else{
        define('FPDF_FONTPATH' , 'font/');
        require_once("../fpdf/fpdf.php");

        $_pdf = new FPDF('P' , 'cm' , 'A4');
        $_pdf->Open();
        $_pdf->AddPage();
        $_pdf->AddFont('times' , '' , 'times.php');
        $_pdf->setLeftMargin(2.5);
        $_pdf->setTopMargin(2.5);
        $_pdf->SetTitle(iconv('utf-8','iso-8859-1','Usuários'));
        $_pdf->SetFont('times' , 'BI', 10);
        $_pdf->SetFillColor(255, 255, 255);
        $_pdf->SetTextColor(85,85,85);
        $_pdf->SetDrawColor(255,255,255);
        $_pdf->Cell(16,0.3,'Emitido: '.$date,1,1,'L',TRUE);
        $_pdf->SetFont('times' , 'BI', 20);
        $_pdf->SetFillColor(85, 85, 85);
        $_pdf->SetTextColor(255,252,252);
        $_pdf->SetDrawColor(255,252,252);
        $_img = $_pdf->Image('../img/pena.png', 9.5, 1, 4, 3, 'PNG');
        $_pdf->Cell(4,2.7,'',1,1,'C');
        $_pdf->SetFillColor(255,252,252);
        $_pdf->SetTextColor(85, 85, 85);
        $_pdf->SetDrawColor(255,252,252);
        $_pdf->Cell(16,2,'POETIZANDO',1,1,'C',TRUE);
        $_pdf->SetFillColor(85, 85, 85);
        $_pdf->SetTextColor(255,252,252);
        $_pdf->SetDrawColor(255,252,252);
        $_pdf->Cell(16,3,iconv('utf-8','iso-8859-1','TABELA DE USUÁRIOS'),1,1,'C',TRUE);
        $_pdf->Ln(1);
        $_pdf->SetFont('times','B' , 14);
        $_pdf->SetTextColor(255,252,252);
        $_pdf->SetFillColor(85, 85, 85);
        $_pdf->SetDrawColor(255,252,252);
        $_pdf->Cell(1,2,'ID',1,0,'C',TRUE);
        $_pdf->Cell(4.5,2,'NOME',1,0,'C',TRUE);
        $_pdf->Cell(6.5,2,'EMAIL',1,0,'C',TRUE);
        $_pdf->MultiCell(4,1,'DATA DE NASCIMENTO',1,'C',TRUE);

        include_once("../bd/conexaopdf.php");
        $_sql = $_pdo->prepare("SELECT * FROM usuario");
        $_sql->execute();
        $_resultset = $_sql->fetchAll(PDO::FETCH_ASSOC);

        $_pdf->SetFont('times' , '' , 13);
        $_pdf->SetTextColor(255,252,252);
        $_pdf->SetFillColor(122, 122, 122);
        $_fundo=1;
        foreach($_resultset as $_line){
            $_pdf->Cell(1,1,$_line['CodUsuario'],1,0,'C',TRUE);
            $_pdf->Cell(4.5,1,$_line['nome'],1,0,'C',TRUE);
            $_pdf->Cell(6.5,1,$_line['email'],1,0,'C',TRUE);
            $_pdf->Cell(4,1,$_line['datadenascimento'],1,1,'C',TRUE);

            $_fundo++;

            if(($_fundo % 2) == 0){
                $_pdf->SetTextColor(0,0,0);
                $_pdf->SetFillColor(255,255,255);
            }else{
                $_pdf->SetTextColor(255,252,252);
                $_pdf->SetFillColor(122, 122, 122);
            }
        }
        $_pdf->Output();
        $_pdf->Close();
    }
?>