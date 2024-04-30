<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_alu.css">
</head>
<body id="inner_page">
     
                <form action="save.php" method="POST" enctype="multipart/form-data">
                                 
                     <div class="field">
                     <input type="number" name="prom" placeholder="Promotion" required autofocus>
                     </div>
                     <div class="field">
                     <input type="text" name="nom" placeholder="Nom"required >
                     </div>
                     <div class="field">
                     <input type="text" name="prenom" placeholder="Prenom"required >
                     </div>
                     <div class="field">
                     <input type="text" name="fil" placeholder="Filière" required >
                     </div>
                     <div class="contenaire">
                     <div class="sexe1">
                     <label for="F"> Femme<input type="radio" name="sexe" id="F" value="F" required></label>
                     </div>
                     <div class="sexe2">
                    <label for="H"> Homme<input type="radio" name="sexe" id="H" value="H" required></label>
                    </div>
                    </div>
                    <div class="field">
                    <input type="text" name="mail" placeholder="Email" required>
                    </div>
                    <div class="field">
                    <textarea name="desc" placeholder="Description" required ></textarea>
                    </div>
                    <div class="field">
                    <input type="file" name="img" title="Photo alumni" required >
                    </div> 
                    <div class="field center">
                    <button ><input type="submit" value="Inserer" required/></button>
                    </div></fieldset>
                 </form>           
    </body>
</html>
