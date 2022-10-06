<?php

if($_SERVER['REQUEST_METHOD']==='POST') {
  
  //Nettoyage
  //foreach($_POST as $key => $value) {
    //$contact[$key] = trim($value);
 // }

  $contact = array_map('trim', $_POST);
  $errors = [];

      if(empty($contact['firstname'])) {
        $errors[] ='Le prénom est obligatoire';
      }
      $maxFisrtnameLength = 14;
      if(strlen($contact['firstname']) > $maxFisrtnameLength) {
        $errors[] ='Le prénom doit faire moins de' . $maxFisrtnameLength . 'caractères';
      }

      if(empty($contact['email'])) {
        $errors[] ='L\'email est obligatoire';
      }

      if(!filter_var($contact['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Leformat d\'email est incorrect';
      }
      $maxEmailLenght = 50;
      if(strlen($contact['email']) > $maxEmailLenght) {
        $errors[] ='L\'email doit faire moins de' . $maxEmailLenght . 'caractères';
      }
      if(empty($contact['message'])) {
        $errors[] ='Le message est obligatoire';
      }

      if(empty($errors)) {
        // traitement de mon form
        echo 'OK';
        header('Location: messagemoi.php');
      }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacter Moi</title>
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/header.css">
    <link rel="stylesheet" href="./asset/css/footer.css">
    <link rel="stylesheet" href="./asset/css/messagemoi.css">

</head>
<?php include "header.php"?>

<body>

<section id="contact">
  <h1>
    <element id="bluetext">
    Contacter le Schtroumpf !
    </element>
  </h1>
    <form id="contactform" action="" method="POST">
      <?php if(!empty($errors)) { ?>
      <ul class="error">
        <?php foreach ($errors as $error) {?>
        <li><?php echo $error; ?></li>
      <?php } ?>
        </ul>
      <?php } ?>
      <label for="firstname">Prénom</label>
      <input type="text" id="firstname" name="firstname" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <div class="etTu">
        Et-tu Schtroumpf ?
      <input type="radio" name="Schtroumpf";
      <?php if (isset($Schtroumpf) && $Schtroumpf=="Oui") echo "checked";?>
      value="Oui">Oui!
      <input type="radio" name="Schtroumpf"
      <?php if (isset($Schtroumpf) && $Schtroumpf=="Non") echo "checked";?>
      value="Non">Non!
      </div>

      <label for="message">Message</label>
      <textarea name="message" id="" cols="30" rows="10" required></textarea>
      <button>Envoyer</button>
</body>

<?php include "footer.php"?>

</html>