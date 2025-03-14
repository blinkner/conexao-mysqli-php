<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Conexão MYSQLI</title>
    </head>
    <body>
        <main>
            <header>
                <h1>Conexão MYSQLI</h1>
            </header>
            <section>
                <p>A conexão é realizada por meio do arquivo <code>'models/conexao.php'</code>.</p>
                <p>A interação com o banco de dados é realizada pelo <code>'models/Pessoa.php'</code>.</p>
                <p>A realização de solicitações e intermeio entre o banco de dados e os dados é realizado pelo <code>'controllers/pessoaController.php'</code>.</p>
            </section>
            <section>
                <p>Abaixo indicará um erro por não conseguir realizar nenhuma conexão com o banco de dados (uma vez que esse é um código apenas para exemplificação).</p>
                <?php require_once 'controllers/pessoaController.php'; ?>
            </section>
    </main>
</body>
</html>