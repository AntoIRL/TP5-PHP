<!DOCTYPE Html>
<html>
    
    <head>
        
        <title>AGENDA <?php echo date('j/n/Y') ?></title>
        <link href="Style.css" rel="stylesheet">
        
    </head>
    
    <body>

        <form action="Affichage.php" method="POST">

            <label for="ChoixNom">Choisissez un nom :</label>

            <select name="ChoixNom" id="ChoixNom">

                <option value="">--Choissisez un nom--</option> 
                
            <?php

                $fichier = fopen($_POST['Fichier'],"r");  

                while(!feof($fichier))
                {
                    $Ligne = fgets($fichier,255); 
                    $Ligne = explode("|", $Ligne);
                    $nom = $Ligne[1];
                    
            ?>
                <option><?php echo $nom?></option>

            <?php
            
                }   

                fclose($fichier);    

            ?>

            </select>

            <input id="Fichier" name="Fichier" type="hidden" value="<?php echo $_GET['Fichier']?>">
            
            <input id="Flag" name="Flag" type="hidden" value="True">

            <input type="submit" value="RECHERCHER !">
        
        </form>
        
        <br><br>

        <table>

            <tr>

                <th>Prénom</th>
                <th>Nom</th>
                <th>Âge</th>
                <th>Sexe (m ou f)</th>
                <th>Adresse</th>
                <th>Ville</th>

            </tr>
            
            <?php

                $fichier = fopen($_POST['Fichier'],"r");  
                
                if ($_POST['Flag'] == 'True')
                { 
                    while(!feof($fichier))
                    {
                        $Ligne = fgets($fichier,255); 
                        $Ligne = explode("|", $Ligne);
                        $prenom = $Ligne[0];
                        $nom = $Ligne[1];
                        if ($nom == $_POST['ChoixNom'])
                        {    
                            $age = $Ligne[2];
                            $sexe = $Ligne[3];
                            $adresse = $Ligne[4];
                            $ville = $Ligne[5]; 
                            
                        if ($sexe == 'm')
                        {
                            $IDSexe = 'Male';
                        }
                        elseif($sexe == 'f')
                        {
                            $IDSexe = 'Female';
                        }

                        if (intval($age) <= 17)
                        {
                            $IDAge = 'Gauche';
                        }
                        elseif (intval($age) > 17 and intval($age) <= 30)
                        {
                            $IDAge = 'Centre';
                        }
                        else
                        {
                            $IDAge = 'Droite';
                        }

            ?>
            <tr id="<?php echo $IDSexe?>">
                <td id="<?php echo $IDAge?>"><?php echo $prenom?></td>
                <td id="<?php echo $IDAge?>"><?php echo $nom?></td>
                <td id="<?php echo $IDAge?>"><?php echo $age?></td>
                <td id="<?php echo $IDAge?>"><?php echo $sexe?></td>
                <td id="<?php echo $IDAge?>"><?php echo $adresse?></td>
                <td id="<?php echo $IDAge?>"><?php echo $ville?></td>
            </th>

            <?php    
                        }
                    
                    } 
                }
                elseif($_POST['Flag'] == 'False')
                {
                    while(!feof($fichier))
                    {
                        $Ligne = fgets($fichier,255); 
                        $Ligne = explode("|", $Ligne);
                        $prenom = $Ligne[0];
                        $nom = $Ligne[1];
                        $age = $Ligne[2];
                        $sexe = $Ligne[3];
                        $adresse = $Ligne[4];
                        $ville = $Ligne[5]; 
                        
                        if ($sexe == 'm')
                        {
                            $IDSexe = 'Male';
                        }
                        elseif($sexe == 'f')
                        {
                            $IDSexe = 'Female';
                        }

                        if (intval($age) <= 17)
                        {
                            $IDAge = 'Gauche';
                        }
                        elseif (intval($age) > 17 and intval($age) <= 30)
                        {
                            $IDAge = 'Centre';
                        }
                        else
                        {
                            $IDAge = 'Droite';
                        }

            ?>
            <tr id="<?php echo $IDSexe?>">
                <td id="<?php echo $IDAge?>"><?php echo $prenom?></td>
                <td id="<?php echo $IDAge?>"><?php echo $nom?></td>
                <td id="<?php echo $IDAge?>"><?php echo $age?></td>
                <td id="<?php echo $IDAge?>"><?php echo $sexe?></td>
                <td id="<?php echo $IDAge?>"><?php echo $adresse?></td>
                <td id="<?php echo $IDAge?>"><?php echo $ville?></td>
            </th>

            <?php   
                    }  
                }
                fclose($fichier);    
            
            ?> 

        </table>
        
    </body>
</html>