<?php 
             include_once './Dataaccess.php';
         class Billet 
         {
 static function CheckCreditCard($NumCarte,$detenteur,$ANNexp,$MOIexp,$crypto)
       {
           $req="SELECT * FROM cartebancair where num_carte='$NumCarte'and detenteur='$detenteur' and anneexp='$ANNexp' and moiexp='$MOIexp'and crypto ='$crypto' ";
           $cur2=Dataaccess::selection($req);
           $nbr= $cur2->rowCount();
           return $nbr;

        }
         
        static function EnregistreBillet($email,$codeVoyage,$datevoyage)
        {
           $req="INSERT INTO billet (email , code_v , date_b) values ('$email','$codeVoyage','$datevoyage')";
           return Dataaccess::majour($req); 
        }
    
    
    
    
    
    
    
    
    
    
    }
        
        













?>