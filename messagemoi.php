<?php

$subjects = [
  'offredemploi'=>'Proposez-moi une offre d\'emploi',
  'gateu'=>'Fais moi un gâteau',
  'rendezvous'=>'Emmène-moi à un rendez-vous',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

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

  if (empty($contact['email'])) {
    $errors[] = 'L\'email est obligatoire';
  }

  if (!filter_var($contact['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Le format d\'email est incorrect';
  }
  $maxEmailLenght = 50;
  if (strlen($contact['email']) > $maxEmailLenght) {
    $errors[] = 'L\'email doit faire moins de' . $maxEmailLenght . 'caractères';
  }
  if (empty($contact['message'])) {
    $errors[] = 'Le message est obligatoire';
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
<?php include "header.php" ?>

<body>

  <section id="contactform1">
  
    <element id="bluetext">
    <div class="envelope">
       <img src="./asset/img/envelope.gif" alt="Schtroumpf">
      </div>
      <h1>
        Contacter le Schtroumpf !
      </h1>
      <img src="./asset/img/schtroumpf23.gif" alt="Schtroumpf">
    </element>
  
      <form id="contactform" action="" method="POST">
        <?php if (!empty($errors)) : ?>
         <ul class="error">
          <?php foreach ($errors as $error) : ?>
         <li><?= $error; ?></li>
         <?php endforeach; ?>
          </ul>
         <?php endif; ?>
      <label for="firstname">Prénom</label>
      <input type="text" id="firstname" name="firstname" required value="<?= $contact['firstname'] ?? '' ?>">

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required value="<?= $contact['email'] ?? '' ?>">

      <div class="etTu">
        Et-tu Schtroumpf ?
        <label for="oui"> Oui !</label>
        <input type="radio" name="Schtroumpf" id="oui" ; <?php if (isset($Schtroumpf) && $Schtroumpf == "Oui") echo "checked"; ?> value="Oui">
        <label for="non">Non !</label>
        <input type="radio" name="Schtroumpf" id="non" <?php if (isset($Schtroumpf) && $Schtroumpf == "Non") echo "checked"; ?> value="Non">
      </div>

      <label for="subject">Sujet</label>
      <select name="subject" id="subject">
        <?php foreach ($subjects as $subject => $subjectMessage) : ?>
          <option value="<?= $subject ?>"><?= $subjectMessage ?></option>
          <?php endforeach; ?>
      </select>

      <label for="message">Message</label>
      <textarea name="message" id="" cols="30" rows="10" required><?= $contact['message'] ?? '' ?></textarea>
      <input type="submit" value="Envoyer" id="button"/>
    </form>
    <script src="./asset/js/index.js"></script>
</body>

<?php include "footer.php"?>

</html>