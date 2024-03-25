<?php

//-----Como ler um arquivo externo----- 

$texto = file_get_contents('texto.txt');

echo $texto;

//-----Como modificar um arquivo----- 

$texto = 'matheus'
file_put_contents('nome.txt', $texto);

echo 'arquivo criado com sucesso';

//------------------------------------

file_get_contents('texto.txt');

$texto .="/matheus"; Adicionando conteudo novo em $texto
file_get_contents('texto.txt', $texto);

//-----Excluindo aqruivos----

unlink('texto.php');
echo 'arquivo excluido';

//-----Modificar aqruivos-----
 
rename('texto', 'pasta/texto2.txt'); // o /pasta muda o documento de lugar. 
copy('pasta/texto2.tx.', 'texto.txt')

//-----uploud de arquivos-----

//---Na Index---

<form method="GET" action="recebedor.php" enctype="multipart/form-data">
    <imput type="file" name:"arquivo"/>
    <imput type="submit" name:"Enviar"/>
</form>

//----- no arquivo recebedor.php ----

//- É quem vai receber e organizar o arquivo
echo '<pre>';

$nome = $_FILES['arquivos']['nome'];
move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivo/'.$nome);

//-----Definição de nome aleatorio-----
echo '<pre>';

$nome = md5(time().rand(0, 1000).'.jpg');
move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivo/'.$nome);

//-----formulario que somente aceita imagens, ou somente de um tipo ------

echo '<pre>';

$permitidos = array('image/jpeg', 'image/jpg', 'image/png')
if (in_array($_FILES['arquivo']['type'], $permitidos)) {
    $nome = md5(time().rand(0, 1000).'.jpg');
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivo/'.$nome);
    echo 'arquivo salvo com sucesso';
} else {
    echo 'arquivo não permitido';
}





























?>