<?php
function nav_item (string $lien, string $titre, string $linkClass = ''): string  {
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= ' active';
    }
    return <<<HTML
    <li class="$classe">
        <a class="$linkClass" href="$lien">$titre</a>
    </li>
HTML;
}

function nav_menu (string $linkClass = ''): string  {
    return 
        nav_item('/index.php', 'Accueil', $linkClass) .
        nav_item('/contact.php', 'Contact', $linkClass);
}

function dump ($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

function creneaux_html (array $creneaux) {
  $phrases = [];
  foreach ($creneaux as $creneau) {
    $phrases[] = "de <strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong> ";
  }
  return 'Ouvert de ' . implode(' et ', $phrases);
}

  // [
    //     ["De {$heureOuverture}h à {$heureFermeture}h "],
    // ]