<?php
require('db_info.php') ;
// PDO => PHP Data Object comme Mysqli

// Pour la base de données

// $mysqliObj = new mysqli('mysql8', 'myuser', 'monpassword', 'tutoseu');
try {
$dbco = new PDO("mysql:host=$host;dbname=$db", $user, $pw) ;
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "connection établie <br>" ;

// class Clients {
//     private $numkey ;
//     private $name ;
//     private $tel ;
//     public $city ;

//     public function getName(){
//         echo $this->name ;
//     }
//     function build_table(){
//         $tpl = <<<TPL
//             <span>$this->name</span>
//             <span>$this->tel</span>
//             <span>$this->city</span>
//         TPL ;
//         return $tpl;
//     }
// }

// echo "<pre>";
// $stmt = $dbco->query('SELECT * FROM Clients')->fetchAll(PDO::FETCH_CLASS, 'Clients') ;

// echo $stmt[0]->build_table(); 


// Ajout dans la table Clients
// $nom = "Flo";
// $prenom = "Dechand";
// $adresse = "Rue des Moulins";
// $ville = "Marseille";
// $cp = 13001;
// $pays = "France";
// $mail = "flodc@gmail.com";
// //$sth appartient à la classe PDOStatement
// $sth = $dbco->prepare("
//                 INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Pays,Mail)
//                 VALUES (:nom, :prenom, :adresse, :ville, :cp, :pays, :mail)
//             ");
// $sth->execute(array(
//     ':nom' => $nom,
//     ':prenom' => $prenom,
//     ':adresse' => $adresse,
//     ':ville' => $ville,
//     ':cp' => $cp,
//     ':pays' => $pays,
//     ':mail' => $mail
// ));
// echo "Entrée ajoutée dans la table";
}
catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    