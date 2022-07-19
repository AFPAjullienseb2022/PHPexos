<?php
$menuActiv = 'about';
include('inc/header.php');
?>
<?php

/*
echo '<p>Hello World!';
echo '<h1>Titre de niveau 2</h1>';
echo '<h3>Titre de niveau 3</h3>';
*/

echo '<h2>Syntaxe</h2>';
echo '<h3>Délimitation des instructions</h3>';
echo '<p>Un programme PHP se présente sous la forme d\'une suite d\'instructions séparées par un point-virgule</p>';
echo '<h3>Indentation</h3>';
echo '<p>Le code PHP est insensible aux tabulations et aux espèces multiples, cela vous permet d\'indenter votre code pour le rendre plus lisible</p>';
echo '<h3>Sensibilité à la casse</h3>';
echo '<p>PHP n\'est pas sensible à la casse : les instructions <code>echo</code>, <code>Echo</code>, <code>ECHO</code> sont interprétées de la même façon';
echo '<h3>Les commentaires</h3>';
echo '<p>Le texte écrit entre les caractères <code>/*</code> et <code>*/</code> est ignoré en PHP</p>';
echo '<p>Pareil pour les lignes débutant par <code>//</code>';
echo '<h3>Type de données</h3>';
echo '<ul>';
echo '
	<li>boolean : true / false</li>
	<li>string : chaîne de caractères</li>
	<li>integer : nombre entier</li>
	<li>float : decimal / nombre à virgules</li>
	<li>array : tableaux</li>
	<li>object : briques logiciels : date, Base de données, XML...</li>
	<li>NULL : représente une variable sans valeur</li>
';
echo '</ul>';
echo '<h2>Opérateurs</h2>';
echo '<h3>Opérateurs d\'assignation</h3>';
echo '<p><code>=</code> : assignation : l\'opérateur d\'assignation permet d\'affecter une valeur à une variable</p>';
echo '<p><code>$a = 5</code></p>';
echo '<p>Assigne la valeur 5 à la variable <code>$a</code></p>';
echo 'opérateurs arithmétiques';
echo '<ul>
	<li><code>+</code> : addition</li>
	<li><code>-</code> : soustraction</li>
	<li><code>*</code> : multiplication</li>
	<li><code>/</code> : division</li>
	<li><code>%</code> : modulo</li>
	<li><code>++</code> : incrément</li>
	<li><code>--</code> : décrément</li>
	</ul>
';
?>

<p>Ci-dessus : des rappels</p>
<hr>



<p>Exercice bonjour.php</p>

    <?php 
        echo "Bonjour le monde <br>"; 
        echo 'Bonjour le monde <br>'; 
        $bonjour = "Bonjour le monde"; /* insertion d'une variable à l'écran : possible mais toujours mettre des doubles quotes */
		echo "<b>$bonjour</b> <br>";
		echo "Affichage d'un guillemet double : \" <br>";  /* exemple de comment afficher des guillemets simples ou doubles si besoin est */
		echo "Bonjour le monde,\ncomment allez-vous ? <br>"; 
		echo "Bonjour le monde,\rcomment allez-vous ? <br>"; /* fin de ligne */
		echo "<pre>Bonjour le monde,\tcomment allez-vous ?</pre>"; /* tabulation. quant à la balise <pre>, elle définit un texte pre-formaté avec une police de caractères pré-formatée et une taille pré-définie qui conserve les espaces et les ruptures de lignes comme les tabulations */
    ?> 
<hr>



<p>Les boucles</p>

	<?php
		echo "1°) Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant <br>";
		for ($a = 1; $a < 151; $a++) {
			if ($a %2==0) { 
				echo " ";
			} else {
    	echo $a;
    		}
		} 
		echo "<br>"; 
		echo "<br>";
		echo "2°) Écrire un programme qui écrit 500 fois la phrase <i>Je dois faire des sauvegardes régulières de mes fichiers</i> <br>";
		for ($i=0; $i<500; $i++) {
    	echo '<i>Je dois faire des sauvegardes régulières de mes fichiers</i> ';
		}
		echo "<br>"; 
		echo "<br>";
		echo "3°) Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau <b>HTML</b> <br>";
	?>
	<style>
		table, tr, th, td {
			border:1px solid black;
		}
		font {
			font-size:+2 ;
		}
	</style> 
<?php /* Brouillons
$ba = 0; 
while ($ba < 13) { 
    echo $ba; 
    $ba++; 
} ça, c'est une while qui marche (donne les nombres entiers de 0 à 12)
$Value1 = $ba;  ça, c'est une ligne qui n'a jamais marché
$Latable = 9;
$longueur = 12;
$i = 0;

echo "La table des 9: <br>";
for($i=0; $i<=$longueur; $i++)
 echo "$i * $Latable = ".$i * $Latable. "<br>";
?>Fonction qui marche et donne une table de multiplication (ici, celle des 9)
<?php echo $tableau ="<table>
	<tr>
		<td></td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
	</tr>
	<tr>
		<td>1</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
	</tr>
</table>" ?> Insertion d'un tableau HTML en PHP

<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    echo "{$key} => {$value} ";
   print_r($arr);
}
?>
<?php
$bikes = array (
 array("CRF300L",28,19.5),
 array("CBR600RR",70,33),
 array("KTM390 ",40,10)
 );
foreach ($bikes as $bike){
 echo $bike[0]."<br>";
 echo $bike[1]."<br>";
 echo $bike[2]."<br>";
 echo "<br>";
}
Les array : à revoir ; les foreach : à revoir.
*/ 
?>

<p align="center">
	<table>
	<?php  // IMPORTANT : c'est ainsi que l'on doit faire pour imbriquer une boucle for dans une autre et créer un tableau
		print("<tr>"); // Print sert à afficher une chaîne de caractères. S'écrit toujours print(expression);
		print("<th></th>");
		for($i=0;$i<=12;$i++) // Crée l'abscisse
			{
				print("<th>$i</th>");
			}
		print("</tr>");// ne pas oublier que - comme echo - print intègre le HTML, donc n'oublier aucune balise
		for($j=0;$j<=12;$j++) // Crée l'ordonnée
			{
				print("<tr><th>$j</th>");
				for($k=0;$k<=12;$k++) // Multiplier l'une par l'autre - la dernière fonction est à l'intérieure de celle créant l'ordonnée)
					{
						$result=$j * $k;
						print("<td>$result</td>");
					}
				print("</tr>\n");
			}
	?>
	</table>
</p>
<hr>



<p>Les tableaux</p>
	
	<?php
	/* Exemples donnés par le cours
		// fonction foreach() => Extraire un couple (clé, valeur) à chaque tour de boucle
			$facture = array("Janvier"=>500, "Février"=>620, "Mars"=>300, "Avril"=>130, "Mai"=>560, "Juin"=>350);
		    $facture_sixmois=0; 
		
		    foreach ($facture as $mois => $valeur) 
		    { 
		       echo "Facture du mois de $mois : $valeur Euros<br />"; 
		       $facture_sixmois +=$valeur; 
		    } 
		
		    echo "Facture total de six mois : <b>$facture_sixmois Euros</b>"; 

		// fonction sort() => Sert à trier ds l'ordre alphabétique ou numérique les données d'un tableau
		    $nom = array("franck","laurent","caroline","magali","veronique");   
			sort($nom);
			
			for ($nb1=0;$nb1<=count($nom)-1; $nb1++) 
			{
			   echo "$nom[$nb1]<br>";
			}
		// fonction rsort(array) => Tri décroissant
			$nom = array("franck","laurent","caroline","magali","veronique");
			rsort($nom);
			
			for ($nb1=0;$nb1<=count($nom)-1; $nb1++) 
			{
			   echo "$nom[$nb1]<br>";
			}
			
		// fonction asort() => Sert à trier les valeurs dans l'ordre ascendant (to assort signifie assortir [regrouper ensemble les éléments semblables]). Le cours se trompe et donne 2 fois le même exemple qui en + ne comporte pas la bonne fct)

		$JoursSemaine = array("a" => "Lundi", "b" => "Mardi", "c" => "Mercredi", "d" => "Jeudi", "e" => "Vendredi");
		
		foreach ($JoursSemaine as $cle => $valeur) {
				asort($JoursSemaine);
    			echo $cle ." : "  .$valeur." <br>";
			}
		// fonction arsort() => Sert à trier les valeurs dans l'ordre descendant. Le cours se trompe et donne 2 fois le même exemple qui en + ne comporte pas la bonne fct)
		$JoursSemaine2 = array("a" => "Lundi", "b" => "Mardi", "c" => "Mercredi", "d" => "Jeudi");
		arsort($JoursSemaine2);
		echo "<p>Voici avec la fct arsort() <br>";
		foreach ($JoursSemaine2 as $cle => $valeur) {
    			echo $cle ." : "  .$valeur." <br>";
			}
		// fonction count() => Sert à compter le nbre d'éléments d'1 tableau
		$tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); 
		$nb = count($tableau); 
		echo"Le tableau contient ".$nb." éléments."; 
		// fonction array_push() => Ajoute 1 élément à la fin du tableau
		$tableau = array("Lundi","Mardi","Mercredi","Jeudi"); 
		array_push($tableau, "Vendredi"); 
		print_r($tableau); // ça ne marche pas quand on utilise echo
		//  fonction array_pop() => Retire le dernier élément à la fin du tableau
		$tableau = array("Lundi","Mardi","Mercredi","Jeudi"); 
		array_push($tableau, "Vendredi"); 
		print_r($tableau);
		// fonction array_unschift() => Ajoute un ou plusieurs éléments au début du tableau 
		$tableau = array("Jeudi", "Vendredi"); 
		array_unshift($tableau, "Lundi", "Mardi", "Mercredi"); 
		print_r($tableau);
		// fonction array_shift() => Retire 1 élément en début de tableau et le place ds une autre variable
		$tableau = array("Jeudi", "Vendredi"); 
		$jour = array_shift($tableau);
		print_r($tableau);
		echo "WAZA <br>";
		print_r($jour);
		*/
		echo "Lire les lignes de commentaire cachées par un /* */, elles reprennent le cours <br>";
		echo "<br> 1. Mois de l'année non bissextile <br>";
		$tableauAnnéeNonBissextile= array("Janvier" => '31', "Février" => '28', "Mars" => '31', "Avril" => '30', "Mai" => '31', "Juin" => '30', "Juillet"	=> '31', "Août"	=> '31', "Septembre" => '30', "Octobre"	=> '31', "Novembre"	=> '30', "Décembre"	=> '31');
		echo "<table>
				<tr>";
		foreach($tableauAnnéeNonBissextile as $key => $value)
			{
				print("<td>$key</td>");
			}
		echo "</tr>";
		echo "<tr>";
		foreach($tableauAnnéeNonBissextile as $key => $value)
			{
				print("<td>$value</td>");
			}
		echo "</tr>";
		echo "<tr>
				</table>";
			echo "<p>Tri croissant du nombre de jours par mois</p>";
			sort($tableauAnnéeNonBissextile);
			
			for ($nb1=0;$nb1<=count($tableauAnnéeNonBissextile)-1; $nb1++) 
			{
			   echo "$tableauAnnéeNonBissextile[$nb1] ";
			}
		echo "<p>Tri décroissant du nombre de jours par mois</p>";
			rsort($tableauAnnéeNonBissextile);
			
			for ($nb1=0;$nb1<=count($tableauAnnéeNonBissextile)-1; $nb1++) 
			{
			   echo "$tableauAnnéeNonBissextile[$nb1] ";
			}
		echo "<br>";
		echo "<br>";
		// On écrit $arrayVariable = array(key1  => value1, key2 => value2, key3 => value3, ... keyN => valueN);
		echo "<br> 2. Capitales <br>";
		$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);
	ksort($capitales);
	foreach ($capitales as $key => $val) {
	    echo "$key = $val\n";
	}
	echo "<br>Ci-dessus la fonction ksort() range les éléments du tableau dans l'ordre croissant des clés </br>";
	asort($capitales);
	foreach ($capitales as $key => $val) {
	    echo "$val = $key\n";
	}
	echo "<br>Ci-dessus la fonction asort() range les éléments du tableau dans l'ordre croissant des valeurs </br>";
	$NbPays = count($capitales);
	echo "Le tableau contient les noms de ".$NbPays." pays.";
	echo "<br>Ci-dessus la fonction count() dénombre le nombre d'éléments du tableau</br>";
	$tableauCapitales= array("Bucarest" => "Roumanie", "Bruxelles" => "Belgique", "Oslo" => "Norvège", "Ottawa" => "Canada", "Paris" => "France", "Port-au-Prince" => "Haïti", "Port-d'Espagne" => "Trinité-et-Tobago", "Prague" => "République tchèque", "Rabat" => "Maroc", "Riga" => "Lettonie", "Rome" => "Italie", "San José" => "Costa Rica", "Santiago" => "Chili", "Sofia" => "Bulgarie", "Alger" => "Algérie", "Amsterdam" => "Pays-Bas", "Andorre-la-Vieille" => "Andorre", "Asuncion" => "Paraguay", "Athènes" => "Grèce", "Bagdad" => "Irak", "Bamako" => "Mali", "Berlin" => "Allemagne", "Bogota" => "Colombie", "Brasilia" => "Brésil", "Bratislava" => "Slovaquie", "Varsovie" => "Pologne", "Budapest" => "Hongrie", "Le Caire" => "Egypte", "Canberra" => "Australie", "Caracas" => "Venezuela", "Jakarta" => "Indonésie", "Kiev" => "Ukraine", "Kigali" => "Rwanda", "Kingston" => "Jamaïque", "Lima" => "Pérou", "Londres" => "Royaume-Uni", "Madrid" => "Espagne", "Malé" => "Maldives", "Mexico" => "Mexique", "Minsk" => "Biélorussie", "Moscou" => "Russie", "Nairobi" => "Kenya", "New Delhi" => "Inde", "Stockholm" => "Suède", "Téhéran" => "Iran", "Tokyo" => "Japon", "Tunis" => "Tunisie", "Copenhague" => "Danemark", "Dakar" => "Sénégal", "Damas" => "Syrie", "Dublin" => "Irlande", "Erevan" => "Arménie", "La Havane" => "Cuba", "Helsinki" => "Finlande", "Islamabad" => "Pakistan", "Vienne" => "Autriche", "Vilnius" => "Lituanie", "Zagreb" => "Croatie");
		echo "<table>
				<tr>";
		ksort($tableauCapitales);
		foreach($tableauCapitales as $key => $value)
			{
				print("<td>$key</td>");
			}
		echo "</tr>";
		echo "<tr>";
		foreach($tableauCapitales as $key => $value)
			{
				print("<td>$value</td>");
			}
		echo "</tr>";
		echo "<tr>
				</table>";
		foreach($tableauCapitales as $key => $value)
			{
				echo $key . " : " . $value . "\n";
			}
		$TableauCapitalesOrdreAlphabétique= array("Alger" => "Algérie", "Amsterdam" => "Pays-Bas", "Andorre-la-Vieille" => "Andorre", "Asuncion" => "Paraguay", "Athènes" => "Grèce", "Bagdad" => "Irak", "Bamako" => "Mali", "Berlin" => "Allemagne", "Bogota" => "Colombie", "Brasilia" => "Brésil", "Bratislava" => "Slovaquie", "Bruxelles" => "Belgique", "Bucarest" => "Roumanie", "Budapest" => "Hongrie", "Canberra" => "Australie", "Caracas" => "Venezuela", "Copenhague" => "Danemark", "Dakar" => "Sénégal", "Damas" => "Syrie", "Dublin" => "Irlande", "Erevan" => "Arménie", "Helsinki" => "Finlande", "Islamabad" => "Pakistan", "Jakarta" => "Indonésie", "Kiev" => "Ukraine", "Kigali" => "Rwanda", "Kingston" => "Jamaïque", "La Havane" => "Cuba", "Le Caire" => "Egypte", "Lima" => "Pérou", "Londres" => "Royaume-Uni", "Madrid" => "Espagne", "Malé" => "Maldives", "Mexico" => "Mexique", "Minsk" => "Biélorussie", "Moscou" => "Russie", "Nairobi" => "Kenya", "New Delhi" => "Inde", "Oslo" => "Norvège", "Ottawa" => "Canada", "Paris" => "France", "Port-au-Prince" => "Haïti", "Port-d'Espagne" => "Trinité-et-Tobago", "Prague" => "République tchèque", "Rabat" => "Maroc", "Riga" => "Lettonie", "Rome" => "Italie", "San José" => "Costa Rica", "Santiago" => "Chili", "Sofia" => "Bulgarie", "Stockholm" => "Suède", "Tokyo" => "Japon", "Tunis" => "Tunisie", "Téhéran" => "Iran", "Varsovie" => "Pologne", "Vienne" => "Autriche", "Vilnius" => "Lituanie", "Zagreb" => "Croatie");
		echo "<table>
				<tr>";
		array_splice($TableauCapitalesOrdreAlphabétique, 5, 9);
		foreach($TableauCapitalesOrdreAlphabétique as $key => $value)
			{
				print("<td>$key</td>");
			}
		echo "</tr>";
		echo "<tr>";
		foreach($TableauCapitalesOrdreAlphabétique as $key => $value)
			{
				print("<td>$value</td>");
			}
		echo "</tr>";
		echo "<tr>
				</table>";
		echo "<br> J'ai d'abord utilisé une fonction ksort() pour ranger dans l'ordre alphabétique les clés, puis j'ai utilisé une fonction key() rédigée de façon à récupérer toutes les clés du tableau et combinée à une boucle foreach pour les faire apparaître à l'écran, puis j'ai fait un copier-coller pour créer un nouveau array() et enfin j'ai utilisé une fonction array_splice() pour retirer les clés dont je ne voulais plus.<br>";
		echo "<br>";
		echo "<br>";

		echo "<br> 3. Départements (Note : c'est l'exercice apprenant les tableaux multi-dimensionnels - ici, 2 dimensions)<br>";   //Tableaux à deux dimensions (c-à-d avec 1 array à l'intérieur d'1 array)
		echo "<br>3.1 Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements</br>";
		$departements = array(
    	"Hauts-de-France" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    	"Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
   		"Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    	"Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
		);
		ksort($departements);
		echo '<pre>'; print_r($departements); echo '</pre>';
		echo "<br>3.2 Affichez la liste des régions suivie du nombre de départements</br>";
		foreach($departements as $key => $value)
			{
				echo("$key ");
				$NbDépartements = count($value);
				print($NbDépartements);
				echo(" ; ");
			}

	?>
<hr>



<p>Les fonctions</p>
	<?php
	echo "<br>Ecrivez une fonction qui permette de générer un lien.<br>"; 
	echo "<a href="."https://www.reddit.com/".">Reddit Hug</a><br>";
	echo "<br>Ecrivez une fonction qui calcule la somme des valeurs d'un tableau <br>"; 
	$tab = array(4, 3, 8, 2);
	$resultat = array_sum($tab);
	echo "<br>La somme des éléments du tableau invisible est " . $resultat ."<br>";
	echo "<br>Créer une fonction qui vérifie le niveau de complexité d'un mot de passe <br>"; 
	function complex_password($mdp)
	{
		$majuscule = preg_match('@[A-Z]@', $mdp); // preg_match est une fonction native de PHP qui effectue une recherche de correspondance
		$minuscule = preg_match('@[a-z]@', $mdp);
		$chiffre = preg_match('@[0-9]@', $mdp);
		
		if(!$majuscule || !$minuscule || !$chiffre || strlen($mdp) < 8) // strlen est une fonction native de PHP qui calcule la taille d'une chaîne de caractères
		{
			return false;
		}
		else 
			return true;
	}


	complex_password("TopSecret42");
	$resultat = complex_password("TopSecret42");
	if(complex_password("TopSecret42")){
		echo 'true ';
	}else{
		echo 'false';
	}
	
// echo (complex_password("TopSecret42")?'cbon':'pasbon'); Ceci est une condition ternaire (exercice ci-dessous), ça permet d'écrire la fonction en une seule ligne


	?>
<hr>



<p>Les dates et les heures</p>
	<?php
	echo '<br>Trouvez le numéro de semaine de la date suivante : 14/07/2019.<br>';
	$date1="14-07-2019";
	$date1bis = strtotime ($date1);
	echo '<br>Le ' . $date1 . ' était un jour de la ' . date('W', $date1bis) . "ème semaine en l'an 2019<br>";

	echo '<br>Combien reste-t-il de jours avant la fin de votre formation ?<br>';
	$CeJour   = new DateTime('2022-07-11');
	$date2 = new DateTime('2022-09-02');
 	$intervalle = $CeJour->diff($date2);
 	echo $intervalle->format('%R%a days');
 	
 	echo '<br><br>Comment déterminer si une année est bissextile ?<br>';
 	?>
 	<form action="AnneeBissextile.php" method="post">
 		Entrez une année (nombre entier) : <input type="number" name="année"  maxlength='4'>
 		<input type='submit' value='ENVOYER' /> 
 	</form>



 	<?
 	function bissextile($annee) { // cette fonction est reprise ds le fichier qui analyse la requête dans l'input
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
}
	?>
<hr>



<p>Les formulaires et les variables serveur</p>
 <form action='script.php' method='post'> 
      Nom : <input type='text' name='nom' size='20' maxlength='40' /> <br /> 
      Prenom : <input type='text' name='prenom' size='20' maxlength=40 /> 
      <input type='submit' value='ENVOYER' /> 
    </form> 

    
    <form action ='check.php' method='post'> 
    Tu utilises internet plutôt le :<br /> 
    <input type='checkbox' name='Fjour[]' value='Lundi'/>Lundi<br />
    <input type='checkbox' name='Fjour[]' value='Mardi' />Mardi<br />
    <input type='checkbox' name='Fjour[]' value='Mercredi' />Mercredi<br />
    <input type='checkbox' name='Fjour[]' value='Jeudi' />Jeudi<br />
    <input type='checkbox' name='Fjour[]' value='Vendredi' />Vendredi<br />
    <input type='submit' name='Envoyer' value='ENVOYER' /> 
	</form> 
<hr>



<p>La manipulation de fichiers</p>
<?php 
	// Exemple cours - Le Fichier essai.txt est ds PHP-leTravail 
	$fp = fopen("essai.txt", "r"); 
	while (!feof($fp))
	{ 
    	$ligne = fgets($fp, 4096); // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
        echo $ligne."<br>"; 
	}

	$lines = file("FichiersTXT/liens.txt");
	foreach ($lines as $line_num => $line) 
		{ 
			echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<a href=\"$line\" >Lien</a><br />\n"; // htmlspecialchars : convertit les caractères spéciaux en entités HTML
			//echo [b]'[/b]<a href=[b]\'[/b]....[b]\'[/b]>...</a>[b]'[/b];
		} 
	echo "Note : le site http://theforensics.net/ a disparu ; la Wayback Machine montre qu'il existait encore à la date du 13 juin 2022. Dommage."
?>
<hr>



<p>Les bibliothèques de fonctions</p>
<?php
	include('inc/hello.php');

?>




</body>
</html>