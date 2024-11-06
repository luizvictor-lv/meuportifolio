
<?
$nome = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$mensagem = $_POST['mensagem'];
$assunto = 'Email do Site';
$rementente = 'luizvictormelo.lv@hotmail.com';

$conteudo = 'Nome: ' . $nome . "\r\n ," .
            'Email: ' . $email . "\r\n ," .
            'Telefone: ' . $phone . "\r\n ," .
            'Mensagem: ' . $mensagem . "\r\n ";

// Converter para UTF-8
// $conteudo = mb_convert_encoding($conteudo, 'UTF-8', 'auto');

// $cabecalhos = 'From: ' . $email . "\r\n" .
//               'Reply-To: ' . $email . "\r\n" .
//               'X-Mailer: PHP/' . phpversion();

// mail($rementente, $assunto, $conteudo, $cabecalhos);


echo $conteudo;

// echo 'Nome: ' . $nome . '<br>';
// echo 'Email: ' . $email . '<br>';
// echo 'Telefone: ' . $phone . '<br>';
// echo 'Mensagem: ' . $mensagem . '<br>';
?>
<script src="/cursos/product_imobi/_cdn/js/jquery-3.7.1.min.js"></script>
<script src="/cursos/product_imobi/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    if (true) {
    alert('Mensagem enviada com sucesso!');
}
    else if (false) {
    alert('Erro ao enviar mensagem!');
}
</script>
<meta http-equiv="refresh" content="0; URL=welcome.php">