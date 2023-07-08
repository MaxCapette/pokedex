<?php
$pokemon = $viewVars['pokemon']; 
 ?>

<section class="text-white flex flex-col place-items-center">
    <div class="flex  m-5">
        <h2 class=" text-2xl font-bold" for="search">Détails du pokemon</h2>
    </div>
    <div class="flex flex-wrap place-items-center">
        <div class="px-5 ">
            <img class="illustration" src="<?= $baseUri . '/public/img/' . $pokemon->getNumber() . '.png' ?>" alt="<?= $pokemon->getName() ?>">   
        </div>
        <div class="bg-red-800 px-5 py-10 rounded-md w-100">
            <h3 class=" text-xl font-bold">#<?= $pokemon->getNumber(); ?>   <?= $pokemon->getName(); ?></h3>
            <div class="flex">
                <p class=" m-1 p-1 bg-green-500 rounded-md">Plante</p>
                <p class=" m-1 p-1 bg-purple-500 rounded-md">Poison</p>
            </div>
            <h4 class="  text-l font-bold">Statistiques</h4>  
            <ul class="">
                <li class="flex p-2 gap-1 justify-between">
                   <p> PV</p>
                   <p><?= $pokemon->getHp(); ?></p>
                   <p> PV</p>
                </li>
                <li class="flex p-2 gap-1 justify-between">
                   <p> Attaque</p>
                   <p><?= $pokemon->getAttack(); ?></p>
                   <p> Attaque</p>
                </li>
                <li class="flex p-2 gap-1 justify-between">
                   <p> Défense</p>
                   <p><?= $pokemon->getDefense(); ?></p>
                   <p> Défense</p>
                </li>
                <li class="flex p-2 gap-1 justify-between">
                   <p> Attaque Spé.</p>
                   <p><?= $pokemon->getSpe_attack(); ?></p>
                   <p> Attaque Spé.</p>
                </li>
                <li class="flex p-2 gap-1 justify-between">
                   <p> Défense Spé.</p>
                   <p><?= $pokemon->getSpe_defense(); ?></p>
                   <p> Défense Spé.</p>
                </li>
                <li class="flex p-2 gap-1 justify-between">
                   <p> Vitesse</p>
                   <p><?= $pokemon->getSpeed(); ?></p>
                   <p> Vitesse</p>
                </li>
            </ul>

        </div>
    </div>
    
</section>
