<!DOCTYPE Html>
<html>
    
    <head>
        
        <title>CHOIX DU FICHIER</title>
        <link href="Style.css" rel="stylesheet">
        
    </head>
    
    <body>
       
        <form action="Affichage.php" method="POST" enctype="multipart/form-data">

            <label for="file">Choisissez un fichier (doit être dans le même répertoire):</label>
            <input type="file" id="Fichier" name="Fichier" accept=".txt">
            
            <input id="Flag" name="Flag" type="hidden" value="False">
            
            <input type="submit" value="OK !">
            
        </form>
        
    </body>
</html>