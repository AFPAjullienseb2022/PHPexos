<?php
$menuActiv = 'about';
include('inc/header.php');
?>
<?php

 echo "Tu surfes sur le web en semaine plutôt le : "; 

// Lecture du tableau 
foreach (($_POST["Fjour"]) as $jour)      // Toujours mettre POST ici qd la méthode du formulaire est "post"
{ 
    echo " $jour - "; 
} 

?>

</body>
</html>