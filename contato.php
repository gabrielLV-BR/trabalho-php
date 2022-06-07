<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/contato.css">

    <title>Teck | Teclados por quem sabe o que faz</title>
</head>

<body>
    <?php 
    include_once("templates/header.php"); 
    include_once("templates/footer.php"); 
    ?>
    <?php echo get_header(); ?>

    <main>
        <h1>Formulário de Contato</h1>
        <form action="">
            <section>
                <label>
                    <span>Nome</span>
                    <input name="nome" type="text" placeholder="Digite seu nome" required>
                </label>
                <label>
                    <span>Nascimento</span>
                    <input name="nascimento" type="date" required>
                </label>
            </section>
            <section>

                <label>
                    <span>E-mail</span>
                    <input name="email" type="email" placeholder="nome@mail.com" required>
                </label>
                <label>
                    <span>Telefone</span>
                    <input name="numero" type="" placeholder="(99) 9 9999-9999" maxlength="11" required>
                </label>
            </section>
            <section>
                <label>
                    <span>Endereço</span>
                    <input name="endereco" type="text" placeholder="Endereço" required>
                </label>
            </section>
            <section>
                <label>
                    <span>Cidade</span>
                    <input name="cidade" type="text" placeholder="Cidade" required>
                </label>
                <label>
                    <span>Estado</span>
                    <input name="estado" type="text" placeholder="Estado" required>
                </label>
            </section>
            <hr>
            <label>
                <span>Assunto</span>
                <select name="assunto" id="" required>
                    <option value="" disabled selected>Selecione...</option>
                    <option value="Sugestão">Sugestão</option>
                    <option value="Reclamação">Reclamação ou Elogio</option>
                    <option value="Reembolso">Reembolso</option>
                    <option value="Privacidade">Políticas de privacidade</option>
                    <option value="Legal">Contato legal</option>
                    <option value="Outro">Outro...</option>
                </select>
            </label>
            <label>
                <span>Mensagem</span>
                <textarea name="mensagem" cols="30" rows="10"></textarea>
            </label>
            <input class="cool-hover" type="submit" value="Enviar">
        </form>
    </main>

    <?php echo get_footer() ?>
</body>

</html>