<?php
    session_start();
    $_idPoema = $_GET['CodPoema'];
    define('FPDF_FONTPATH' , 'font/');
    require_once("../fpdf/fpdf.php");

    $_pdf = new FPDF('P' , 'cm' , 'A4');
    $_pdf->Open();
    $_pdf->AddPage();
    $_pdf->AddFont('times' , '' , 'times.php');
    $_pdf->setLeftMargin(2.5);
    $_pdf->setTopMargin(2.5);
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
    $_pdf->SetFont('times' , 'BI', 12);
    $_pdf->SetFillColor(255, 255, 255);
    $_pdf->SetTextColor(85,85,85);
    $_pdf->SetDrawColor(255,255,255);
    include_once("../bd/conexaopdf.php");
    $_sql = $_pdo->prepare("SELECT u.nome, t.TipoPoema, p.NomeDoPoema, p.NomeDoAutor, p.Texto, p.CodPoema FROM usuario u, tipo t, poemas p
            WHERE p.CodUsuario=u.CodUsuario AND p.CodTipos=t.CodTipo AND p.CodPoema=$_idPoema");
    $_sql->execute();
    $_resultset = $_sql->fetchAll(PDO::FETCH_ASSOC);
    foreach($_resultset as $_line){
        if($_idPoema == $_line['CodPoema']){
            $_pdf->Cell(8,0.3,iconv('utf-8','iso-8859-1','Usuário que publicou: ').$_line['nome'],1,0,'L',TRUE);
            $_pdf->Cell(8,0.3,iconv('utf-8','iso-8859-1','Gênero: ').$_line['TipoPoema'],1,1,'R',TRUE);
            $_pdf->Ln(1);
            $_pdf->SetFont('times' , 'BI', 20);
            $_pdf->Cell(16,2,iconv('utf-8','iso-8859-1','').$_line['NomeDoPoema'],1,1,'C',TRUE);
            $_pdf->SetTitle($_line['NomeDoPoema']);
            $_pdf->SetFont('times' , 'BI', 14);
            //$_pdf->Cell(5.5,1,iconv('utf-8','iso-8859-1','')."",1,0,'L',TRUE);
            
            $_pdf->MultiCell(16,1,$_line['Texto'],1,'C',TRUE);
            $_pdf->Ln(1);
            $_pdf->SetFont('times' , 'BI', 12);
            $_pdf->Cell(16,0.3,iconv('utf-8','iso-8859-1','Autor: ').$_line['NomeDoAutor'],1,0,'R',TRUE);
        }
    }
    $_pdf->Output();
    $_pdf->Close();
?>