<?php
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Verifica se o e-mail foi enviado no formulário
if (isset($_POST['email'])) {
    $email_destinatario = $_POST['email'];

    // Gera o PDF (use seu código de geração de PDF aqui)
    $pdf = new FPDF('L', 'mm', array(420, 230));
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, utf8_to_iso88591('Relatório de Produtos - Storage Control'), 0, 1, 'C');
    $pdf->SetLeftMargin(10);

    // Simples exemplo de tabela
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(15, 10, 'ID', 1, 0, 'C');
    $pdf->Cell(40, 10, utf8_to_iso88591('Nome Produto'), 1, 0, 'C');
    $pdf->Cell(25, 10, utf8_to_iso88591('Categoria'), 1, 0, 'C');
    $pdf->Cell(40, 10, utf8_to_iso88591('Preço Custo'), 1, 0, 'C');
    $pdf->Cell(20, 10, utf8_to_iso88591('Qtd.'), 1, 0, 'C');
    $pdf->Cell(30, 10, utf8_to_iso88591('Valor Total'), 1, 1, 'C');

    // Salva o PDF em um arquivo temporário
    $file = tempnam(sys_get_temp_dir(), 'pdf');
    $pdf->Output($file, 'F'); // 'F' salva no servidor temporário

    // Enviar o PDF por email usando PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor de e-mail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // SMTP do seu provedor de e-mail
        $mail->SMTPAuth = true;
        $mail->Username = 'luiz.feliphi@estudante.ifgoiano.edu.br';  // Seu e-mail
        $mail->Password = '080506AcB@';               // Sua senha de e-mail
        $mail->SMTPSecure = 'tls';                  // Enable TLS encryption
        $mail->Port = 587;                          // Porta de e-mail

        // Configurações de remetente e destinatário
        $mail->setFrom('luiz.feliphi@estudante.ifgoiano.edu.br', 'Storage Control');
        $mail->addAddress($email_destinatario);     // Adicionar destinatário

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Relatório de Produtos - Storage Control';
        $mail->Body    = 'Segue em anexo o relatório de produtos.';

        // Anexa o PDF gerado
        $mail->addAttachment($file, 'relatorio.pdf');

        // Enviar o e-mail
        $mail->send();
        echo 'E-mail enviado com sucesso!';
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    } finally {
        // Remove o arquivo temporário
        unlink($file);
    }
}
