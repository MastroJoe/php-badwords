<!-- creo variabile con paragrafo di testo -->
<?php
  $paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolor eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolor eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolor eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
 ?>
<?php
  $badWord = 'dolor';
  $lunghezza = strlen($paragrafo);
  $paragrafoCensurato = str_replace($badWord, '***', $paragrafo);
 ?>
<!-- creo div per stampare il testo della variabile -->
<div class="paragraph" style="font-size: 25px;">
  Paragrafo
  <br>
  <!-- stampo il testo del paragrafo -->
  <?php
    echo $paragrafo;
   ?>
   <!-- <?php
     var_dump($paragrafo);
    ?> -->
</div>
<br>
<!-- creo div per stampare la lunghezza del testo -->
<div class="length" style="font-size: 25px;">
  Lunghezza
  <br>
  <?php
    echo $lunghezza;
   ?>
</div>
<br>
<!-- creo div per stampare il testo del paragrafo censurato, parola 'dolor'-->
<div class="paragraph censored" style="font-size: 25px;">
  Paragrafo Censurato
  <br>
  <?php
    echo $paragrafoCensurato;
   ?>
</div>
