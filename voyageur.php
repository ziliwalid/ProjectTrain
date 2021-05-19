<?php

include_once './Dataaccess.php';


class voyageur 
{
       static function checkuser($login,$pass)
       {
           $req="SELECT * FROM `voyageur` where email='$login' and password='$pass' ";
           $cur=Dataaccess :: selection($req);
           $nbr=$cur->rowCount();

           return $nbr;
       }


       static function addTraveler($email,$password,$nom,$prenom,$dateN,$telephone)
       {
           $req="INSERT INTO `voyageur`(`email`, `password`, `nom`, `prenom`, `date_n`, `telephone`) values ('$email','$password','$nom','$prenom','$dateN','$telephone')";
           $r=Dataaccess::majour($req);

           return $r;
       }

      
}





?>