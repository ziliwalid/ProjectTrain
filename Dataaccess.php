<?php 


class Dataaccess {
    public static  function connextion()
           {
           try  {
              $bdd = new PDO('mysql:host=localhost;dbname=oncfprojet;charset=utf8', 'root', '');
   $bdd->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
              return $bdd;
              }
          catch (Exception $e)
              {
   echo('Erreur : ' . $e->getMessage());
              }
           }
//2-Methode de mise à jour
   public static function majour($req)
           {
  try  {
              $bdd= Dataaccess::connextion() ;
              $maj=$bdd->exec($req);
              return $maj;
               }
          catch (Exception $e)
              {
   echo('Erreur : ' . $e->getMessage());
              }  $bdd=null;
           }
           
           public static function selection($req)
           {
       try{
       $bdd=self::connextion() ;
       $rep=$bdd->query($req);
return $rep ;
            }
          catch (Exception $e)
              {
   echo('Erreur : ' . $e->getMessage());
              }  $bdd=null;

  }  
}


?>





