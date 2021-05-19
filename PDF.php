<?php
ob_start();// 1------debut du flux à convertir
include_once('html2pdf/html2pdf.class.php');
$codeVoyage=$_GET['codeVoyage'];
$dateVoyage=$_GET['DateVoyage'];
$nombrePlace=$_GET['NombrePlace'];
$email=$_GET['email'];
 // impression des billets :
      for ($i = 1; $i<= $nombrePlace; $i++) 
      {
          echo "  <h1>Billet :  $i </h1>";
          echo "  <h2>Voyage  :  $codeVoyage </h2>";
          echo "  <h3>Date voyage   :  $dateVoyage </h3>";
          echo "  <hr>";  
     }
 $content=ob_get_clean();                 // 2--------fin du flux HTML
 $html2pdf = new HTML2PDF('P','A4','fr');   // 3---instancier un objet HTML2PDF
 $html2pdf->WriteHTML($content);         // 4---ecriture du contenu 
 $html2pdf->Output('tbillet.pdf');       // 5-generer le fichier PDF

        
?>
