<?php
class Personne
{

    private $nom;
    private $prenom;

    function __construct($unnom, $unprenom)
    {
        $this->nom = $unnom;
        $this->prenom = $unprenom;
    }



    public function insert()
    {


        try {
            $db = new PDO('mysql:host=localhost;dbname=mabase;charset=utf8', 'farid', '');
            $req = 'INSERT INTO personne (nom, prenom) VALUES (:fname, :lname)';
            //prepare the sql statement for execution
            $stmt = $db->prepare($req);
            // bind all placeholders to the actual values
            $stmt->bindparam(':fname', $this->nom);
            $stmt->bindparam(':lname', $this->prenom);
            // execute statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
