<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=1920px, initial-scale=1.0">
  <title>Teck | Teclados por quem sabe o que faz</title>

  <link rel="stylesheet" href="public/css/global.css">
  <link rel="stylesheet" href="public/css/footer.css">
  <link rel="stylesheet" href="public/css/header.css">
  <link rel="stylesheet" href="public/css/keyboard.css">

  <script src="js/teclado.js" defer></script>

  <style>
    main {
      width: 100vw;
      height: fit-content;
    }
  </style>

</head>

<body>
  <!-- Import Components -->
  <?php 
  include_once("templates/header.php"); 
  include_once("templates/footer.php"); 
  ?>
  <!--  -->

  <?php echo get_header(); ?>

  <audio id="normal_click"   src="public/assets/audio/normal_click.ogg"></audio>
  <audio id="normal_release" src="public/assets/audio/normal_release.ogg"></audio>
  
  <audio id="space_click"    src="public/assets/audio/space_click.ogg"></audio>
  <audio id="space_release"  src="public/assets/audio/space_release.ogg"></audio>
  
  <audio id="alt_click"      src="public/assets/audio/alt_click.ogg"></audio>
  <audio id="alt_release"    src="public/assets/audio/alt_release.ogg"></audio>
  
  <main>
    <div class="keyboard">
      <!-- Primeira Linha -->
      <div class="key"><span>Ecs</span></div>
      <div class="key"><span>F1</span></div>
      <div class="key"><span>F2</span></div>
      <div class="key"><span>F3</span></div>
      <div class="key"><span>F4</span></div>
      <div class="key"><span>F5</span></div>
      <div class="key"><span>F6</span></div>
      <div class="key"><span>F7</span></div>
      <div class="key"><span>F8</span></div>
      <div class="key"><span>F9</span></div>
      <div class="key"><span>F10</span></div>
      <div class="key"><span>F11</span></div>
      <div class="key"><span>F12</span></div>
      <div class="key empty"><span></span></div>
      <div class="key"><span>PrtSc</span></div>
      <div class="key"><span>ScrLk</span></div>
      <div class="key"><span>Pause</span></div>
      <div class="key empty"><span></span></div>
      <div class="led"></div>
      <div class="led"></div>
      <div class="led"></div>
      <!-- Segunda Linha -->
      <div class="key"><span>"</span></div>
      <div class="key"><span>1</span></div>
      <div class="key"><span>2</span></div>
      <div class="key"><span>3</span></div>
      <div class="key"><span>4</span></div>
      <div class="key"><span>5</span></div>
      <div class="key"><span>6</span></div>
      <div class="key"><span>7</span></div>
      <div class="key"><span>8</span></div>
      <div class="key"><span>9</span></div>
      <div class="key"><span>0</span></div>
      <div class="key"><span>-</span></div>
      <div class="key horizontal"><span>Return</span></div>
      <div class="key"><span>Ins</span></div>
      <div class="key"><span>Home</span></div>
      <div class="key"><span>PgUp</span></div>
      <div class="key"><span>Num</span></div>
      <div class="key"><span>/</span></div>
      <div class="key"><span>*</span></div>
      <div class="key"><span>-</span></div>
      <!-- Terceira linha -->
      <div class="key wider"><span>Tab</span></div>
      <div class="key"><span>Q</span></div>
      <div class="key"><span>W</span></div>
      <div class="key"><span>E</span></div>
      <div class="key"><span>R</span></div>
      <div class="key"><span>T</span></div>
      <div class="key"><span>Y</span></div>
      <div class="key"><span>U</span></div>
      <div class="key"><span>I</span></div>
      <div class="key"><span>O</span></div>
      <div class="key"><span>P</span></div>
      <div class="key"><span>`</span></div>
      <div class="key"><span>[</span></div>
      <div class="key vertical"><span>Enter</span></div>
      <div class="key"><span>Del</span></div>
      <div class="key"><span>End</span></div>
      <div class="key"><span>PgDn</span></div>
      <div class="key"><span>7</span></div>
      <div class="key"><span>8</span></div>
      <div class="key"><span>9</span></div>
      <div class="key vertical"><span>+</span></div>
      <!-- Quarta linha -->
      <div class="key"><span>Caps</span></div>
      <div class="key"><span>A</span></div>
      <div class="key"><span>S</span></div>
      <div class="key"><span>D</span></div>
      <div class="key"><span>F</span></div>
      <div class="key"><span>G</span></div>
      <div class="key"><span>H</span></div>
      <div class="key"><span>J</span></div>
      <div class="key"><span>K</span></div>
      <div class="key"><span>L</span></div>
      <div class="key"><span>Ç</span></div>
      <div class="key"><span>~</span></div>
      <div class="key"><span>]</span></div>
      <div class="key empty"><span></span></div>
      <div class="key empty"><span></span></div>
      <div class="key empty"><span></span></div>
      <div class="key"><span>4</span></div>
      <div class="key"><span>5</span></div>
      <div class="key"><span>6</span></div>
      <!-- Quinta linha -->
      <div class="key"><span>Shift</span></div>
      <div class="key"><span>\</span></div>
      <div class="key"><span>Z</span></div>
      <div class="key"><span>X</span></div>
      <div class="key"><span>C</span></div>
      <div class="key"><span>V</span></div>
      <div class="key"><span>B</span></div>
      <div class="key"><span>N</span></div>
      <div class="key"><span>M</span></div>
      <div class="key"><span>,</span></div>
      <div class="key"><span>.</span></div>
      <div class="key"><span>;</span></div>
      <div class="key"><span>/</span></div>
      <div class="key"><span>Shift</span></div>
      <div class="key empty"><span></span></div>
      <div class="key"><span>Up</span></div>
      <div class="key empty"><span></span></div>
      <div class="key"><span>1</span></div>
      <div class="key"><span>2</span></div>
      <div class="key"><span>3</span></div>
      <div class="key vertical"><span>Enter</span></div>
      <!-- Sexta linha -->
      <div class="key"><span>Ctrl</span></div>
      <div class="key"><span>Win</span></div>
      <div class="key"><span>Alt</span></div>
      <div class="key space-key center"><span> </span></div>
      <div class="key"><span>Alt</span></div>
      <div class="key"><span>Fn</span></div>
      <div class="key horizontal"><span>Ctrl</span></div>
      <div class="key"><span>Left</span></div>
      <div class="key"><span>Down</span></div>
      <div class="key"><span>Right</span></div>
      <div class="key horizontal"><span>Ins</span></div>
      <div class="key"><span>.</span></div>
  </main>

  <?php echo get_footer() ?>
</body>

</html>