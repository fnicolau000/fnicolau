<?
if ($email != "" and $destinatario != "")
{
$cabecalho = "From: $email\nReply-To: $email";
$corpo .= "Nome = $nome .\n";
$corpo .= "Email = $email .\n";
$corpo .= "Cidade = $cidade .\n";
$corpo .= "Estado = $estado .\n";
$corpo .= "Assunto = $assunto .\n";
$corpo .= "Mensagem = $mensagem .\n\n";
$corpo .="\n\n=====================================\n";
$corpo .= "Esse formulário foi enviado atráves do site www.felipenicolau.com.br\n";
$corpo .= "========================================";
mail($destinatario, $assunto, $corpo, $cabecalho);
echo ("&enviado=ok&");
}
?>