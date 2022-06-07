<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=1920px, initial-scale=1.0">
  <title>Teck | Teclados por quem sabe o que faz</title>

  <link rel="stylesheet" href="public/css/global.css">
  <link rel="stylesheet" href="public/css/header.css">
  <link rel="stylesheet" href="public/css/footer.css">
  <link rel="stylesheet" href="public/css/info.css">

</head>

<body>
  <!-- Import Components -->
  <?php include_once("templates/header.php"); ?>
  <?php include_once("templates/footer.php"); ?>
  <!--  -->

  <?php
  $interessado = ["nome", "nascimento", "estado", "cidade", "numero", "email", "numero", "endereco", "assunto", "mensagem"];

  foreach ($interessado as $value) {
    if (isset($_POST[$value])) {
      $$value = $_POST[$value];
    } else {
      die("Erro! Propriedade não informada: $value");
    }
  }

  $numero = str_replace(" ", "", $numero);

  if(strpos($numero, "-") == false) {
    $numero = str_replace("-", "", $numero);
    $numero = substr($numero, 0, 9) . "-" . substr($numero, 9);
  }
  if(strpos($numero, "(") == false && strpos($numero, ")") == false) {
    $numero = str_replace("(", "", $numero);
    $numero = str_replace(")", "", $numero);
    $numero = "(" . substr($numero, 0, 2) . ")". substr($numero, 2);
  }


  ?>

  <?php echo get_header(); ?>

  <main>
    <div class="card">
      <h1>Sobre</h1>
      <p>Nome: <?php echo $nome ?></p>
      <p>Nascimento: <?php echo $nascimento ?></p>

      <h1>Endereço</h1>
      <p><?php echo $cidade ?> - <?php echo $estado ?></p>

      <h1>Contato</h1>
      <p><?php echo $numero ?></p>
      <p><?php echo $email ?></p>

      <hr>
      <div class="assunto">
        <h1>Tipo de mensagem: <span class="tipo"><?php echo $assunto ?></span></h1>
  
        <p class="mensagem">
          <?php echo $mensagem ?>
        </p>
      </div>
    </div>
  </main>

  <?php echo get_footer() ?>
</body>

</html>