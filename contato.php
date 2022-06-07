<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/contato.css">

    <title>Teck | Teclados por quem sabe o que faz</title>
</head>
<body>
    <?php include_once("templates/header.php"); ?>
    <?php echo get_header(); ?>

    <div id="formulario">
        <form action="">
           <div class="blocoForm">
               <p>Nome</p>
               <input type="text" placeholder="Digite seu nome" required>
           </div>
           <div class="blocoForm">
               <p>Nascimento</p>
               <input type="date" required>
           </div>
           <div class="blocoForm">
               <p>E-mail</p>
               <input type="email" placeholder="nome@mail.com" required>
           </div>
           <div class="blocoForm">
               <p>Telefone</p>
               <input type="num" placeholder="(99) 9 9999-9999" maxlength="11" required>
           </div>
        </form>
    </div>
</body>
</html>