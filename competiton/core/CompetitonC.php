<?PHP
include "../config.php";
class competitonC {
	function ajouterCompetiton($competiton){
		
		$sql="insert into competitons (nom,nom_c_s,heure,date,cout,type) values (:nom, :nom_c_s,:heure,:date,:cout,:type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $nom=$competiton->getNom();
      	$nom_c_s=$competiton->getNom_c_s();
      	$heure=$competiton->getHeure();
      	$date=$competiton->getDate();
      	$cout=$competiton->getCout();
      	$type=$competiton->getType();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':nom_c_s',$nom_c_s);
		$req->bindValue(':heure',$heure);
		$req->bindValue(':date',$date);
		$req->bindValue(':cout',$cout);
    $req->bindValue(':type',$type);
          $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

function afficherCompetition(){

    $sql="SELECT * From competitons";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }  
