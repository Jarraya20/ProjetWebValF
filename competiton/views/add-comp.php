<?PHP
include "../entities/competitions.php";
include "../core/competitonC.php";

$competiton1=new competiton($_POST['nom'],$_POST['nom_c_s'],$_POST['heure'],$_POST['date'],$_POST['cout'],$_POST['type']);

$competiton1C=new competitonC();
$competiton1C->ajouterCompetiton($competiton1);
//header('Location: comp.html');


?>