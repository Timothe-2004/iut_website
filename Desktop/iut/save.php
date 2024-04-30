<?php
if(isset($_POST['prom']))
{
  if(isset($_POST['nom']))
  {
    if(isset($_POST['prenom']))
    {
      if(isset($_POST['fil']))
      {
        if(isset($_POST['sexe']))
        {
          if(isset($_POST['mail']))
          {
           if(isset($_POST['desc']))
           {
              $prom=$_POST['prom'];
              $nom=htmlspecialchars($_POST['nom']);
              $prenom=htmlspecialchars($_POST['prenom']);
              $fil=nl2br(htmlspecialchars($_POST['fil']));
              $sexe=htmlspecialchars($_POST['sexe']);
              $desc=nl2br(htmlspecialchars($_POST['desc']));
              $mail=htmlspecialchars($_POST['mail']);
              
              if(filter_var($mail, FILTER_VALIDATE_EMAIL))
              {
               
              
                
                if (isset($_FILES['img']) and ($_FILES['img']['error'])==0)
                {
                  
                 if ($_FILES['img']['size']<=10485760)
      {

      //taille photo max = 10Mo
       $infosfichier = pathinfo($_FILES['img']['name']);
       $extension_upload = $infosfichier['extension'];
       $extension_autorisees=array('jpg', 'jpeg', 'png');
       //voir si l'extension du fichier correspond à l'une des extensions autorisées 
         if (in_array($extension_upload, $extension_autorisees))
        {//enregistre la photo dans le dossier uploads avec le nom $filename
       $filename="alumni/".strtolower($mail).".".$extension_upload; //nommer le fichier
       move_uploaded_file($_FILES['img']['tmp_name'], $filename);
               try 
              {
                $bdd = new PDO('mysql: host= localhost; dbname=iut-up', 'root', '');
              }
              catch(Exception $e)
              {
                 die('Erreur'.$e->getMessage());
              }
              $req=$bdd->prepare('INSERT INTO alumni (PromAlu,NomAlu,PreAlu,FilAlu,SexAlu,MailAlu,DescAlu,ImgAlu) VALUES(?,?,?,?,?,?,?,?)');
              $feedback=$req->execute(array(
                $prom, $nom, $prenom, $fil, $sexe, $mail, $desc, $filename
              ));
              if($feedback==1)
              {
                echo 'Alumni enregistrer avec succès.';
              }else
              {
                echo 'Une erreur s\'est produite';
              }

            }
            }
            }
            else {
              echo 'Erreur';
            }
           }else
           {
            echo'Adresse mail non valide';
           }
          }

        }

      }

    }

  }
 }
}
 
   /*$idadm=1;
   $req1=$bdd->query('SELECT IdAdm FROM administration');
   $donnees=$req1->fetchAll();
   foreach ($donnees as $cle => $donnee) {
   $tab_donnes[]=$donnee['IdAdm'];
   }
   if(in_array($idadm,$tab_donnes))
   {
   
}*/
   
  
