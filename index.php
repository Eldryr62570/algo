<?php

 echo ("====== EXO n°1 ======<br><br>");
 echo ("Prendre une variables en php (la déclaration d'une variable se fait avec un $ en php), affecter une valeur à cette variable et l'afficher <br>");
 $variable = 5;
 echo $variable;
 echo ("<br><br><br>====== EXO n°2 ======<br><br>");
 echo ("Prendre deux variables en php, affecter une valeur à chaque variable, afficher le résultat de l'addition, de la soustraction, et de la multiplication de ces deux variables <br>");
 /* Code à ajouter ci-dessous */
 $var1 = 8;
 $var2 = 7;
 echo("Le résulat de l'addition est : ".($var1 + $var2)." soutraction : ".($var1 - $var2)." multiplication : ".($var1 * $var2));
 //////
 echo ("<br><br><br>====== EXO n°3 ======<br><br>");
 echo ("Prendre une variable en php et affecter une chaine de caracètere à cette variable et l'afficher <br>");
 $string = "Lorem ipsum";
 echo($string);
 /* Code à ajouter ci-dessous */
 echo ("<br><br><br>====== EXO n°4 ======<br><br>");
 echo ("Afficher à l'aide des deux variables déjà défini le texte contenu dans les variables à l'aide d'une concaténation (un espace est souhaitée entre les deux variables) <br>");
 $a = "coucou";
 $b = "petite perruche";
 /* Code à ajouter ci-dessous */
 echo($a." ".$b);
 echo ("<br><br><br>====== EXO n°5 ======<br><br>");
 echo ("Permutter le contenu de la variable a et de la variable b <br>");
 $a = 20 ;
 $b = 30 ;
 /* Code à ajouter ci-dessous */
 $temp = 0;
 $temp = $a;
 $a = $b;
 $b = $temp;
 echo('a : '.$a.' b : '.$b);
 echo ("<br><br><br>====== EXO n°6 ======<br><br>");
 echo ("A partir d'un algorithme, définir dans tout les cas possibles quels chiffre est le plus grand (vous pouvez changer les valeurs des variables a et b pour tester toutes les possiblités) <br>");
 $a = 20 ;
 $b = 30 ;
 /* Code à ajouter ci-dessous */
 if($a>$b){
     echo"a est plus grand";
 }
 else if($a<$b){
     echo"b est plus grand";
 }
 else{
     echo"a est b sont égaux";
 }
 echo ("<br><br><br>====== EXO n°7 ======<br><br>");
 echo ("faire une fonction qui prend en parametres deux variables ( a et b par exemple ) et qui définis quel chiffre est le plus grand <br>");
 $a = 40 ;
 $b = 30 ;
 function sortNumber($a,$b){
     if($a>$b){
         echo"a est plus grand";
         return;
     }
     if($a<$b){
         echo"b est plus grand";
         return;
     }
     echo"a est b sont égaux";
 }
 sortNumber($a,$b);

     echo ("<br><br><br>====== EXO n°8 ======<br><br>");
     echo ("afficher un nombre aléatoire à partir de la fonction rand() <br>");
     /* Code à ajouter ci-dessous */
     echo(rand(1,10));
     echo ("<br><br><br>====== EXO n°9 ======<br><br>");
     echo ("afficher 10 nombre aléatoire à partir de la fonction rand() en utilisant une boucle <br>");
     /* Code à ajouter ci-dessous */
     for($i = 0; $i<10;$i++){
         echo(rand(1,10)."<br>");
     }
     echo ("<br><br><br>====== EXO n°10 ======<br><br>");
     echo ("afficher des nombres aléatoires compris entre 1 et 100 et s'arreter quand le dernier chiffre est >90 <br>");
     $nombre = 0;
     while($nombre <= 90){
         echo($nombre."<br>");
         $nombre = rand(1,100);
    }
     echo("Le nombre nous faisant sortir de la boucle est :" .$nombre);
     echo ("<br><br><br>====== EXO n°11 ======<br><br>");
     echo ("Afficher une variable entrée manuellement par l'utilisateur<br>");
     /*Code à ajouter ci-dessous */
     $a = readline('Entrez votre nombre : ');
     echo $a. PHP_EOL;
      echo ("<br><br><br>====== EXO n°12 ======<br><br>");
      echo ("Demander à l'utilisateur d'entrer un nombre entier et afficher si ce chiffre est pair ou impair<br>");
    
     $pair = readline('Entrez votre nombre pour avoir si il est pair: ');
     function isPair($pair){
     if($pair % 2 == 0 ){
         echo("votre nombre est pair !". PHP_EOL);
         return;
     }
     echo("votre nombre est impair !". PHP_EOL);
 }
  isPair($pair);
  echo ("<br><br><br>====== EXO n°13 ======<br><br>");
  echo ("Même exercice que n°12, mais rajouter un message d'erreur si l'utilisateur n'entre pas un nombre entier<br>");
  /*Code à ajouter ci-dessous */
  $pair = readline('Entrez votre nombre pour avoir si il est pair(vérif): ');
 function isPairVerified($pair){
     if(!is_numeric($pair)){
        echo("ce n'est pas un nombre !");
         return;
     }
     if(!is_int($pair)){
        echo("Ce n'est pas un nombre entier !");
        return;
     }
     if($pair % 2 == 0 ){
       echo("votre nombre est pair !". PHP_EOL);
       return;
     }
     echo("votre nombre est impair !". PHP_EOL);
}
isPairVerified($pair);
 echo ("<br><br><br>====== EXO n°14 ======<br><br>");
 echo ("Demander à l'utilisateur d'entrer une année, et afficher si cette année est sextile ou bissextile<br>");
/* Code à ajouter ci-dessous */
 function bissextile($annee) {
	 if( (is_int($annee/4) && !is_int($annee/100)) || is_int($annee/400)) {
		 return TRUE;
	 } else {
		 return FALSE;
	 }
 }
 if(bissextile($annee)){
     echo"votre annee est bissextile". PHP_EOL;
 }else{
     echo"votre annee est sextile". PHP_EOL;
 }
 echo ("<br><br><br>====== EXO n°15 ======<br><br>");
 echo ("Demander à l'utilisateur d'entrer une date, et afficher si cette date est valide ou non<br>");
/* Code à ajouter ci-dessous */
function isValid($date, $format = 'm/d/Y'){
    $dt = DateTime::createFromFormat($format, $date);
    return $dt && $dt->format($format) === $date;
  }
$date = readline("Entrez votre année");
  if(isValid($date)){
    echo"Format bon". PHP_EOL;
  }else{
      echo"Format invalide";
  }