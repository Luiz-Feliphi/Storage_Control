<?php
require('fpdf/fpdf.php');
include_once 'config.php';

// Função para converter texto de UTF-8 para ISO-8859-1
function utf8_to_iso88591($string) {
    return iconv('UTF-8', 'ISO-8859-1', $string);
}

// Consulta para listar os produtos com base no filtro
$sql = "SELECT cafeteria.ID_Produtos, cafeteria.Nome_Produto, cafeteria.Descrição, categorias.Alimentos, cafeteria.Preço_custo, cafeteria.Quantidade, 
        (cafeteria.Preço_custo * cafeteria.Quantidade) AS Valor_total, cafeteria.Data_cadastro, cafeteria.Fornecedor, cafeteria.Código_barras, cafeteria.Status 
        FROM cafeteria
        JOIN categorias ON cafeteria.ID_Categorias = categorias.ID_Categorias";

$result = $conn->query($sql);

// Criando um novo documento PDF
$pdf = new FPDF('L', 'mm', array(420, 230)); // 'L' para orientação Landscape, tamanho personalizado
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

// Definindo o cabeçalho do relatório
$pdf->Cell(0, 10, utf8_to_iso88591('Relatório de Produtos - Storage Control'), 0, 1, 'C');

// Definindo a largura total da tabela
$tableWidth = 15 + 40 + 25 + 40 + 20 + 30 + 40 + 30 + 40 + 20;
$pageWidth = $pdf->GetPageWidth();
$leftMargin = ($pageWidth - $tableWidth) / 2;

// Setando a margem esquerda para centralizar a tabela
$pdf->SetLeftMargin($leftMargin);

// Cabeçalho da tabela
$pdf->Cell(15, 10, 'ID', 1, 0, 'C');
$pdf->Cell(40, 10, utf8_to_iso88591('Nome Produto'), 1, 0, 'C');
//$pdf->Cell(50, 10, 'Descrição', 1, 0, 'C');
$pdf->Cell(25, 10, utf8_to_iso88591('Categoria'), 1, 0, 'C');
$pdf->Cell(40, 10, utf8_to_iso88591('Preço Custo'), 1, 0, 'C');
$pdf->Cell(20, 10, utf8_to_iso88591('Qtd.'), 1, 0, 'C');
$pdf->Cell(30, 10, utf8_to_iso88591('Valor Total'), 1, 0, 'C');
$pdf->Cell(40, 10, utf8_to_iso88591('Data Cadastro'), 1, 0, 'C');
$pdf->Cell(30, 10, utf8_to_iso88591('Fornecedor'), 1, 0, 'C');
$pdf->Cell(40, 10, utf8_to_iso88591('Código Barras'), 1, 0, 'C');
$pdf->Cell(20, 10, 'Status', 1, 1, 'C');

// Corpo da tabela
$pdf->SetFont('Arial', '', 10);

while ($row = $result->fetch_assoc()) {
    $pdf->Cell(15, 10, $row['ID_Produtos'], 1, 0, 'C');
    $pdf->Cell(40, 10, utf8_to_iso88591($row['Nome_Produto']), 1, 0, 'C');
    //$pdf->Cell(50, 10, utf8_to_iso88591($row['Descrição']), 1, 0, 'C');
    $pdf->Cell(25, 10, utf8_to_iso88591($row['Alimentos']), 1, 0, 'C'); // Categoria
    $pdf->Cell(40, 10, 'R$' . number_format($row['Preço_custo'], 2, ',', '.'), 1, 0, 'C');
    $pdf->Cell(20, 10, $row['Quantidade'], 1, 0, 'C');
    $pdf->Cell(30, 10, 'R$' . number_format($row['Valor_total'], 2, ',', '.'), 1, 0, 'C');
    $pdf->Cell(40, 10, date('d/m/Y', strtotime($row['Data_cadastro'])), 1, 0, 'C');
    $pdf->Cell(30, 10, utf8_to_iso88591($row['Fornecedor']), 1, 0, 'C');
    $pdf->Cell(40, 10, $row['Código_barras'], 1, 0, 'C');
    $pdf->Cell(20, 10, utf8_to_iso88591($row['Status']), 1, 1, 'C');
}

// Saída do PDF
$pdf->Output('I', 'relatorio.pdf');
