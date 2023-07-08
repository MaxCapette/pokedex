
<section class="flex flex-col items-center">
    <div class="flex justify-center m-5">
        <form class="home-search searchbar" action="">
        <label class="text-white text-2xl font-bold" for="search">Rechercher un Pokémon</label>
    </div>
        <div class="flex justify-center items-center">
           
            <input class="h-12" placeholder="Exemple : <?= $viewVars['randomPokemon'] ?>" type="text" name="search" id="search">
            <button type="submit"><i><img class="m-5 h-12" src="<?= $baseUri ?>/public/img/Pokeball.png" alt=""></i></button>
            
        </div>
      
    </form>
</section>

