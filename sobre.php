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
  <link rel="stylesheet" href="public/css/sobre.css">

  <script src="js/carrossel.js" defer></script>
</head>

<body>
  <!-- Import Components -->
  <?php include_once("templates/header.php"); ?>
  <!--  -->

  <?php echo get_header(); ?>

  <main>
    <div class="sobre">
      <h1>Sobre a Teck&trade;</h1>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati, delectus accusantium est facilis voluptate adipisci quasi perferendis vero fuga libero veritatis voluptatibus necessitatibus quo aliquam odio corrupti magnam quis ratione?</p>
    </div>
    <section>
      <span class="localizacao">
        <h1>Localização</h1>
        <!-- <div class="map-placeholder" style="width: 450px; height: 450px; background-color: green;"></div> -->
        <div class="mapouter">
          <div class="gmap_canvas"><iframe width="450" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br>
            <style>
              .mapouter {
                position: relative;
                text-align: right;
                height: 450px;
                width: 450px;
              }
            </style><a href="https://www.embedgooglemap.net">google maps for website</a>
            <style>
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 450px;
                width: 450px;
              }
            </style>
          </div>
        </div>
      </span>
      <span class="endereco">
        <h1>Endereço</h1>
        <p>Rua X, Número 69, Sala 420</p>
        <p>Bairro Barro - 00000-000</p>
        <p>Lisboa</p>
        <p>Novo México/Polônia</p>
      </span>
    </section>
  </main>
  <section class="contato">
    <section>
      <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
        <path d="M39.75 42.3Q33.6 42.3 27.525 39.275Q21.45 36.25 16.6 31.4Q11.75 26.55 8.725 20.45Q5.7 14.35 5.7 8.25Q5.7 7.15 6.425 6.425Q7.15 5.7 8.25 5.7H15.25Q16.15 5.7 16.775 6.25Q17.4 6.8 17.6 7.75L18.95 13.9Q19.1 14.75 18.925 15.425Q18.75 16.1 18.25 16.55L13.2 21.55Q15.95 26 19.275 29.325Q22.6 32.65 26.8 34.95L31.65 30Q32.25 29.35 32.975 29.1Q33.7 28.85 34.5 29.05L40.2 30.35Q41.15 30.55 41.725 31.25Q42.3 31.95 42.3 32.9V39.75Q42.3 40.8 41.575 41.55Q40.85 42.3 39.75 42.3Z" />
      </svg>
      <span>(xx) xxxx-xxxx</span>
    </section>
    <section>
      <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
        <path d="M7.1 40.3Q5.75 40.3 4.725 39.275Q3.7 38.25 3.7 36.9V11.1Q3.7 9.7 4.725 8.7Q5.75 7.7 7.1 7.7H40.9Q42.3 7.7 43.3 8.7Q44.3 9.7 44.3 11.1V36.9Q44.3 38.25 43.3 39.275Q42.3 40.3 40.9 40.3ZM24 25.3 40.9 14.15V11.1L24 22L7.1 11.1V14.15Z" />
      </svg>
      <span>mail@mail.com</span>
    </section>
  </section>
  <footer class="redes">
    <a href="">
              
    </a>
    <a href="">

    </a>
    <a href="">

    </a>
    <a href="">

    </a>
    <a href="">

    </a>
  </footer>
</body>

</html>