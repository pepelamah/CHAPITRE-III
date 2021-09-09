<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
          $prix_table=150;
          $prix_armoire=350;
          $nombre=10;
          $prix_ht=(($prix_armoire/1.2)*10);
          echo"le prix HORS TAXE pour les 10 armoires est de: $prix_ht ." ;
          echo "<br>";
          if($prix_armoire > $prix_table){
              echo" l'armoire a un prix plus eleve que celui de la table.";
          }
          else{
              echo"la table a un prix plus eleve que celui de l'armoire";
          }
         
          
        ?>
    </body>
</html>