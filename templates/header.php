<?php

function get_header()
{
  return "
    <header>
      <h1 class='logo'></h1>
      <ul>
        <li><a href='index.php'>Início</a></li>
        <li><a href='sobre.php'>Sobre</a></li>  
        <li><a href='contato.php'>Contato</a></li>
      </ul>
      <button class=\"toggleTheme\" id=\"toggleTheme\"></button>
    </header>
    <script src='js/dark.js'></script>
  ";
}

?>