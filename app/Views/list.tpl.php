<?php 
$pokemons = $viewVars['pokemons'];

if(!empty($pokemons)) {
    echo "<ul class='flex flex-wrap'>";
    foreach($pokemons as $pokemon): ?>
        <li>
            <a href="<?= $baseUri. '/pokemon/'. $pokemon->getNumber(); ?>">
                <img class="illustration" src="<?= $baseUri . '/public/img/' . $pokemon->getNumber() . '.png' ?>" alt="<?= $pokemon->getName() ?>">
                <div  class="text-white"><span>#<?= $pokemon->getNumber() ?></span> <?= $pokemon->getName() ?></div>
            </a>
        </li>
    <?php endforeach;
    echo "</ul>";
} else {
    echo "Oups, je n'ai rien trouvé !";
}