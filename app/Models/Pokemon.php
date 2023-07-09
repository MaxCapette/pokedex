<?php
namespace App\Models;

use App\Core\Database;
use PDO;
class Pokemon {

    private ?int $id;
    private ?string $name;
    private ?int $hp;
    private ?int $attack;
    private ?int $defense;
    private ?int $spe_attack;
    private ?int $spe_defense;
    private ?int $speed;
    private ?int $number;
    
   

    /**
     *                 Méthodes de la classe Pokemon
     */
    /**
     * Undocumented function random()
     *
     * @return $pokemon
     */
     public function random()
     {
        $sql = "SELECT `name`, `number` 
                FROM `pokemon` 
                ORDER BY RAND()
                LIMIT 1"; 

       $pdo = Database::getPDO();

       $pdoStatement = $pdo->query($sql);

       $pokemon = $pdoStatement->fetchObject(self::class);
     
       return $pokemon;
}
/** 
     * Méthode permettant de récupérer la liste des pokémon classés par numéros
     */
    public function findAll($params)
    {
        // if ($params != null) {
        //     $sql = "SELECT `number`, `name` 
        //         FROM `pokemon` 
        //         ORDER BY `number`";.
        // }
        $sql = "SELECT `number`, `name` 
                FROM `pokemon` 
                ORDER BY `number`";

        // On récupère la connexion à la BDD
        $pdo = Database::getPDO();

        // On exécute la requête
        $request = $pdo->query($sql);

        // On récupère tous les résultats avec "fetchAll" et on met transmet les données récupérées à une instance du model courant (Pokemon)
        $pokemons = $request->fetchAll(PDO::FETCH_CLASS, self::class);

        return $pokemons;
    }
    /**
    * Méthode permettant de récupérer un objet de type Pokemon d'après son ID
    *
    * @param int $id ID de la personne à trouver
    * @return Pokemon
    */
    public function find($number)
    {
        // Je fais ma requete SQL
        $sql = "SELECT `name`, `hp`, `attack`, `defense`, `spe_attack`, `spe_defense`, `speed`,	`number`
        FROM `pokemon`
        WHERE `number` = " . $number . " LIMIT 1";

        // On se connecte à la BDD à l'anumbere de notre outil Database. Celui-ci nous renvoie une instance de PDO connectée à la BDD.
        $pdo = Database::getPDO();

        // Je la transmets à la BDD via PDO
        $pdoStatement = $pdo->query($sql);

        // On veut récupérer le résultat sous la forme d'un objet de type Pokemon. Donc on utilise fetchObject (à la place de fetch) qui va automatiquement instancier la classe pokemon et remplir les propriétés avec les infos de la BDD.
        $pokemon = $pdoStatement->fetchObject(self::class);

        return $pokemon;
    }
     
/** 
     * Méthode permettant de récupérer une liste de pokémons par type
     */
    public function findByType($typeId)
    {
        // On joint la table de pivot "pokemon_type" afin de pouvoir filtrer sur les ID de type
        $sql = "SELECT *
                FROM `pokemon` 
                INNER JOIN `pokemon_type` ON `pokemon_type`.`pokemon_number` = `pokemon`.`number`
                WHERE `pokemon_type`.`type_id` = " . $typeId . 
                "ORDER BY `pokemon`.`number`";

        // On récupère la connexion à la BDD
        $pdo = Database::getPDO();

        // On exécute la requête avec query car on souhaite pouvoir accéder
        // aux données retournées par la requête
        $pdoStatement = $pdo->query($sql);

        // On récupère tous les résultats avec "fetchAll" et on met transmet les données récupérées à une instance du model courant (Pokemon)
        $pokemons = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $pokemons;
    }

    /**
     * Méthode permettant de récupérer les types du Pokémon courant
     */
    // public function getTypes()
    // {
    //     // On cherche dans la table de pivot "pokemon_type" les entrées qui correspondent au numéro fourni
    //     // puis on joint cette table à la table "type" dont on récupère les champs
    //     $sql = "SELECT `type`.*
    //             FROM `pokemon_type`
    //             INNER JOIN `type` ON `type`.`id` = `pokemon_type`.`type_id`
    //             WHERE `pokemon_type`.`pokemon_number` = " . $this->getNumber();

    //     // On récupère la connexion à la BDD
    //     $pdo = Database::getPDO();

    //     // On exécute la requête avec query car on souhaite pouvoir accéder
    //     // aux données retournées par la requête
    //     $pdoStatement = $pdo->query($sql);

    //     // On récupère le résultat  et on instancie la classe Type avec les infos récupérées
    //     $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Type::class);

    //     return $types;
    // }








    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getHp(): ?string
    {
        return $this->hp;
    }
    public function setHp(?int $hp): self
    {
        $this->hp = $hp;
        return $this;
    }

    public function getAttack(): ?int
    {
        return $this->attack;
    }
    public function setAttack(?int $attack): self
    {
        $this->attack = $attack;
        return $this;
    }


    public function getDefense(): ?int
    {
        return $this->defense;
    }
    public function setDefense(?int $defense): self
    {
        $this->defense = $defense;
        return $this;
    }

   
    public function getSpe_attack(): ?int
    {
        return $this->spe_attack;
    }
    public function setSpe_attack(?int $spe_attack): self
    {
        $this->spe_attack = $spe_attack;
        return $this;
    }

 
    public function getSpe_defense(): ?int
    {
        return $this->spe_defense;
    }
    public function setSpe_defense(?int $spe_defense): self
    {
        $this->spe_defense = $spe_defense;
        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->speed;
    }
    public function setSpeed(?int $speed): self
    {
        $this->speed = $speed;
        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }
    public function setNumber(?int $number): self
    {
        $this->number = $number;
        return $this;
    }
}