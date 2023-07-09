<?php
$pokemons = $viewVars['pokemons'];
?>
<div class="flex justify-end">
    <select id="countries" class=" bg-slate-50/80 rounded-2xl mx-4 my-3 px-3 py-2 text-red-700">
   <div class=" bg-slate-50/80 rounded-2xl mx-4 my-3 px-3 py-2 text-red-700">
        <option selected>Trier par</option>
        <option value="US">Numéros</option>
        <option value="CA">Noms</option>
        <option value="FR">Types</option>
        <option value="FR">Random</option>
     </div>
</select>

    </div>

    <?php
    if (!empty($pokemons)) {
        echo "<ul class='flex flex-wrap justify-center'>";
        foreach ($pokemons as $pokemon) : ?>
            <li>
                <a href=<?= $baseUri . '/pokemon/' . $pokemon->getNumber(); ?>>
                    <img class="illustration max-w-sm hover:max-w-lg" src="<?= $baseUri . '/public/img/' . $pokemon->getNumber() . '.png' ?>" alt="<?= $pokemon->getName() ?>">
                    <div class="text-white"><span>#<?= $pokemon->getNumber() ?></span> <?= $pokemon->getName() ?></div>
                </a>
            </li>
    <?php endforeach;
        echo "</ul>";
    } else {
        echo "Oups, je n'ai rien trouvé !";
    }
