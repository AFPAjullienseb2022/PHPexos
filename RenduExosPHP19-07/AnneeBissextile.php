<?php
$menuActiv = 'about';
include('inc/header.php');
?>
<?php

  echo "Vous voulez savoir si " . $_REQUEST['année'] . " est une année Bissextile<br>";
  $year = $_REQUEST['année'];

      if ($year % 400 == 0) {
      echo "L'année est bissextile";
      return TRUE; 
      } elseif ($year % 100 == 0) {
      echo "L'année n'est pas bissextile";
      return FALSE; 
      } elseif ($year % 4 == 0) {
      echo "L'année est bissextile";
      return TRUE; 
      } else {
      echo "L'année n'est pas bissextile";
      return FALSE; 
    }

?>

</body>
</html>