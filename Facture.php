<?php
   include_once './billet.php';

   if(!empty($_POST['connection']))
   {
    $NumCarte= $_POST['CardNum']  ;
    $detenteur= $_POST['detenteur'];
    $ANNexp= $_POST['ANNexp'] ;
    $MOIexp= $_POST['MOIexp'] ;
    $crypto= $_POST['crypto'] ;
    
    $codeVoyage=$_POST['codeVoyage'];
    $datevoyage=$_POST['dateVoyage'];
    $nombrePlace=$_POST['nombrePlace'];
    $email=$_POST['email'];
      
    $r=Billet::CheckCreditCard($NumCarte, $detenteur, $ANNexp, $MOIexp, $crypto);
            if($r!=0)
              {
                for ($i = 0; $i< $nombrePlace ; $i++) {
                 billet::EnregistreBillet($email,$codeVoyage,$datevoyage) ;   
                }
             
                    
              header("location:PDF.php?codeVoyage=$codeVoyage&NombrePlace=$nombrePlace&DateVoyage=$datevoyage&email=$email");
              }
              else
                {
                  echo"veuillez réessayer";
                }


   }

?>