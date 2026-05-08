No arquivo que possui a mensagem de sucesso após exportar o arquivo, leia o arquivo exportado e exiba todas as informações do filme.

<?php
$filmeJson = file_get_contents('filme.json');
$filme = json_decode($filmeJson, true);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Filme inserido</title>
    </head>
    <body>
        <h1>Filme inserido com sucesso!</h1>
        <p><strong>Nome:</strong> <?php echo $filme['nome']; ?></p>
        <p><strong>Ano de lançamento:</strong> <?php echo $filme['ano']; ?></p>
        <p><strong>Nota:</strong> <?php echo $filme['nota']; ?></p>
        <p><strong>Gênero:</strong> <?php echo $filme['genero']; ?></p>
        <h1> ----------------------------------- </h1>
        <h1><?=  $filme['nome'] ?></h1>
        <dl></dl>
            <dt>Ano de lançamento:</dt>
            <dd><?= $filme['ano'] ?></dd>
            <dt>Nota:</dt>
            <dd><?= $filme['nota'] ?></dd>
            <dt>Gênero:</dt>
            <dd><?= $filme['genero'] ?></dd>
        </dl>
    </body>
</html>