<?php

// function repondre_oui_non ($phrase) {
//     while (true) {
//         $reponse = readline($phrase . " - tapez 'o' pour oui, et 'n' pour non : ");
//         if ($reponse === "o") {
//             return true;
//         } elseif ($reponse === "n") {
//             return false;
//         } 
//     } 
// }

// function demander_creneau ($phrase = "Veuillez entrer un creneau") {
//     echo $phrase . "\n";
//     while (true) {
//         $ouverture = (int)readline("Heure d'ouverture : ");
//         if ($ouverture >= 0 && $ouverture <= 23) {
//             break;
//         }        
//     }
//     while (true) {
//         $fermeture = (int)readline("Heure de fermeture : ");
//         if ($ouverture >= 0 && $ouverture <= 23 && $fermeture > $ouverture) {
//             break;
//         }
//     }
//    return [$ouverture, $fermeture];
// }

// function demander_creneaux ($phrase = "Veuillez entrer vos creneaux") {
//     $crenaux = [];
//     $continuer = true;
//     while ($continuer) {
//         $crenaux[] = demander_creneau();
//         $continuer = repondre_oui_non('Voulez vous continuer ? ');
//     }
//     return $crenaux;
// }

// $crenaux = demander_creneaux('Entrez vos créneaux : ');
// print_r($crenaux);

// $resultat = repondre_oui_non("Voulez vous continuer ?");
// $creneau = demander_creneau();
// $creneau2 = demander_creneau("Veuillez entrer votre creneau");
// var_dump($creneau, $creneau2);

 











// $insultes = ['merde', 'con'];

// $phraseUtilisateur = readline("Entrer une phrase (tout en miniscule svp) : ");

// foreach ($insultes as $insulte) {
//     $replace = str_repeat('*', strlen($insulte));
//     $phraseUtilisateur = str_replace($insulte, $replace , $phraseUtilisateur);
// }


// echo $phraseUtilisateur;






// $notes = [10, 20, 13];

// $somme = array_sum($notes);
// $nbrElementTab = count($notes);

// echo "La somme est de $somme et il y a $nbrElementTab element(s) dans le tableau \n";

// $moyenne = $somme / $nbrElementTab;

// echo "La moyenne est de " . round($moyenne) . "\n";



// $motDeBase = strtolower(readline("Entrer un mot : "));
// $motReverse = strtolower(strrev($motDeBase));
// echo "le mot de base est $motDeBase et le mot inversé est $motReverse \n";
// if ($motDeBase === $motReverse) {
//     echo "Votre mot $motDeBase est un palindrome \n";
// } else {
//     echo "Votre mot $motDeBase n'est pas un palindrome \n";
// }


// if () {
//     # code...
// } else {
//     # code...
// }












// $crenaux = [];

// while (true) {
//     $debut = (int)readline("Heure d'ouverture : ");
//     $fin = (int)readline('Heure de fin : ');
//     if ($debut >= $fin) {
//         echo "Le créneaux ne peut pas être enregistré car l'heure du début ($debut heure) est supérieur à l\heure de fermeture ($fin heure)\n";
//     } else {
//         $crenaux[] = [$debut, $fin];
//         $action = readline('Entrer un nouveau créneau (n) ?:');
//         if ($action === 'n') {
//             break;
//         }  
//     }
// }

// echo "Le magasin est ouvert de ";
// foreach ($crenaux as $k => $creneau) {
//     if ($k > 0) {
//         echo " et de ";
//     }
//     echo "{$creneau[0]}h à {$creneau[1]}h";
// }

// $heureUtilisateur = (int)readline("A quel heure voulez vous visitez le magasin ?");
// $creneauTrouve = false;

// foreach ($crenaux as $creneau) {
//     if ($heureUtilisateur >= $creneau[0] && $heureUtilisateur <= $creneau[1]) {
//         $creneauTrouve = true;
//         break;
//     }
// }

// if ($creneauTrouve) {
//     echo "Le magasin sera ouvert";
// } else {
//     echo "Le magasin est fermé";
// }