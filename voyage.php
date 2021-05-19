<?php
    include_once './Dataaccess.php';
class trajet
{
     static function GeTvoyage($VDP,$VARR)
                    {

                  $req="SELECT * FROM voyage where  ville_d='$VDP' and ville_a='$VARR'";
                  $cur=Dataaccess::selection($req);
                  
                  return $cur;

                    }
                    
     public static function getprix($codeVoyage)
                    {
                        $req="SELECT prix_v FROM VOYAGE WHERE code_v='$codeVoyage'";
                        $cur=Dataaccess::selection($req);
                        $prix=0;
                        while ($row = $cur->fetch()) {
                            $prix=$row[0];
                        }
                        $cur->closeCursor();
                        return $prix;
                    }                              



}

       
//select tag cities update from database

class VILLE
{
    static function GetvilleDep()
    {
        $req="SELECT distinct ville_d from voyage ";
        return Dataaccess::selection($req);
    }
    static function GetvilleARR()
    {
        $req="SELECT distinct ville_a from voyage ";
        return Dataaccess::selection($req);
    }

   
}



?>