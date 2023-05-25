<html>

<body>
  <h3>Praktyczna część prezentacji</h3>
  <?php
  $cookie_name = "user";
  if (!isset($_COOKIE[$cookie_name])) {
    echo "O NIE nie ma ciasteczka kliknij ten przycisk aby je stworzyć";
    echo "<form action='ciastko.php' method='get'><input type='text' name='wartosc' placeholder='imie...'><button type='submit' name='cozrobic' value='ustaw'>Ustaw ciasteczko</button></form>";
    
  } else {
    echo "<h1>Witaj: " . $_COOKIE[$cookie_name] . "!</h1>";
    echo "Aby usunąć ciasteczko kliknij ten przycisk";
    echo "<form action='ciastko.php' method='get'><button type='submit' name='cozrobic' value='usun'>Usuń ciasteczko</button></form>";
  }
  ?>
  
  <h4>Link do prezentacji: <a href="./prezentacja.pdf">Kliknij tutaj</a></h4>

</body>

</html>