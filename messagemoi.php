<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Moi</title>
    <link rel="stylesheet" href="./asset/style.css">
    <link rel="stylesheet" href="./asset/header.css">
    <link rel="stylesheet" href="./asset/footer.css">
    <link rel="stylesheet" href="./asset/messagemoi.css">

</head>
<header>
  <div id="mySidenav" class="sidenav">
    <a id="closeBtn" href="#" class="close">×</a>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="form.php">Expérience</a></li>
      <li><a href="loisirs.php">Loisir</a></li>
      

    </ul>
    <img src="asset/schtroumpfs-image-animee-0005.gif" alt="mushroom house">
  </div>

  <a href="#" id="openBtn">
    <span class="burger-icon">
      <span></span>
      <span></span>
      <span></span>
    </span>
  </a>
  <script src="asset/index.js"></script>
</header>

<body>

<section id="contact">
  <h1>
    <element id="bluetext">
    Contacter le Schtroumpf !
    </element>
  </h1>
    <form id="contactform" action="result.php" method="GET">
      <label for="firstname">Prénom</label>
      <input type="text" id="firstname" name="firstname">

      <label for="email">Email</label>
      <input type="email" id="email" name="email">

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
      <textarea name="message" id="" cols="30" rows="10"></textarea>
      <button>Envoyer</button>
</body>

</html>