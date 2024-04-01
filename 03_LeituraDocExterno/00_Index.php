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

//----- Modificar arquivos -----

// Esta linha renomeia o arquivo 'texto' para 'texto2.txt' dentro da pasta 'pasta'
rename('texto', 'pasta/texto2.txt'); // O '/pasta' move o documento para um local diferente.

// Esta linha faz uma cópia do arquivo 'pasta/texto2.txt' e o salva como 'texto.txt' no diretório atual
copy('pasta/texto2.txt', 'texto.txt');

//----- Upload de arquivos -----

//--- No arquivo index.php ---

// Este formulário HTML envia os dados do arquivo para o script "recebedor.php" usando o método GET
<form method="POST" action="recebedor.php" enctype="multipart/form-data">
    <input type="file" name="arquivo"/>
    <input type="submit" name="Enviar"/>
</form>

//----- No arquivo recebedor.php ----

// É responsável por receber e organizar o arquivo enviado pelo formulário
echo '<pre>';

// Obtém o nome do arquivo enviado
$nome = $_FILES['arquivo']['name'];

// Move o arquivo enviado para o diretório 'arquivo' com o nome original
move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivo/'.$nome);

//----- Definição de nome aleatório -----

// Este bloco de código gera um nome de arquivo aleatório usando o hash MD5 do timestamp atual e um número aleatório entre 0 e 1000, com a extensão '.jpg'
echo '<pre>';

$nome = md5(time().rand(0, 1000)).'.jpg'; // Cria um nome de arquivo aleatório
// Move o arquivo enviado para o diretório 'arquivo' com o nome aleatório
move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivo/'.$nome);

//----- Formulário que somente aceita imagens ou somente de um tipo ------

echo '<pre>';

// Lista de tipos de arquivos permitidos
$permitidos = array('image/jpeg', 'image/jpg', 'image/png');

// Verifica se o tipo de arquivo enviado está na lista de tipos permitidos
if (in_array($_FILES['arquivo']['type'], $permitidos)) {
    // Gera um nome de arquivo aleatório usando o hash MD5 do timestamp atual e um número aleatório entre 0 e 1000, com a extensão '.jpg'
    $nome = md5(time().rand(0, 1000)).'.jpg';
    // Move o arquivo enviado para o diretório 'arquivo' com o nome aleatório gerado
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivo/'.$nome);
    // Imprime uma mensagem indicando que o arquivo foi salvo com sucesso
    echo 'arquivo salvo com sucesso';
} else {
    // Se o tipo de arquivo enviado não estiver na lista de tipos permitidos, imprime uma mensagem indicando que o arquivo não é permitido
    echo 'arquivo não permitido';
}


//























?>