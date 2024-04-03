<!-- <?php
// Checkbox parfums glace
$parfums = [
    'Fraise' => 4,
    'Chocoloat' => 5,
    'Vanille' => 3
];
// Radio cornet/pot
$cornets = [
    'Pot' => 2,
    'Cornet' => 3
];
// Checkbox supplements glace
$supplements = [
    'Pépites de chocolat' => 1,
    'Chantilly' => 0.5
];

$title = "Composer votre glace !";
require 'header.php';
?>

<h1> Composer votre glace :</h1>

<form action="/jeu.php" method="GET">
    <? foreach ($parfums as $parfum => $prix): ?>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="parfum[]" value="<? $parfum ?>">
                <?= $parfum ?>
            </label>
        </div>
    <? endforeach ?>
</form> -->