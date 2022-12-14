
<!DOCTYPE html>

<!-- CSS only -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="html\index.css"> 
<link rel="stylesheet" type="text/css" href="html\index.js">



<!-- En-tete -->

<div class="container-fluid">
<div class="row">
    <div id="entete">
    <form id="langues" class="col-md-4">
        <select>
        <option>Français</option>
        </select>
    </div>
    </head>
<body>
    <form action="verification.php" method="POST">
        <h1>Connexion</h1>
        
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
    
        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>
    
        <input type="submit" id='submit' value='LOGIN' >
        <?php
        if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1 || $err==2)
        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
    ?>
    
    <div id="logo" class="col-md-4">
    <i class="fas fa-car"></i>
    </div>
</div>
</div>

<!-- Titre -->

<div class="container-fluid">
<div class="row">
    <div id="title" class="col-md-12">
    <h1>Paris Donkeycar</h1>
    </div>
</div>
</div>

<!-- Fin Titre -->

<!-- Menu -->
<div class="row" id="menu">
<div class="col-md-12">
    <nav>
    <ul>
        <li>
        <a href="#" class="no-underline">Garage</a>
        <ul>
            <li>
            <a href="Voiture/Ferrari.html" class="no-underline">Ferrari</a>
            </li>
            <li>
            <a href="Voiture/Lamborghini.html" class="no-underline">Lamborghini</a>
            </li>
            <li>
            <a href="Voiture/McLaren.html" class="no-underline">McLaren</a>
            </li>
            <li>
            <a href="#" class="no-underline">Mercedes</a>
            </li>
            <li>
            <a href="#" class="no-underline">Audi</a>
            </li>
            <li>
            <a href="#" class="no-underline">Porsche</a>
            </li>
            <li>
            <a href="#" class="no-underline">Bentley</a>
            </li>
            <li>
            <a href="#" class="no-underline">Aston Martin</a>
            </li>
        </ul>
        </li>
        <li>
        <a href="#" class="no-underline">Nos offres</a>
        <ul>
            <li>
            <a href="./views/cars.php" class="no-underline">Louer une supercar</a>
            </li>
        </ul>
        </li>
        <li>
        <a href="#" class="no-underline">L'équipe</a>
        <ul>

        </ul>
        </li>
        <li>
        <a href="Reserv.html" class="no-underline">Evennements</a>
        </li>
    </ul>
    </nav>
</div>
</div>

<!-- Fin Menu -->

<!-- Carousel -->
<div class="row" id="carousel">
<div class="col-md-12">
    <div class="owl-carousel owl-theme">
    <div class="item">
        <img id="audi" src="https://i.gaw.to/vehicles/photos/40/25/402579-2022-audi-r8.jpg" />
    </div>
    <div class="item">
        <img id="lambo" src="https://www.tuningblog.eu/wp-content/uploads/2020/12/Strasse-Wheels-Lamborghini-Huracan-Performante-BiTurbo-6.jpg" />
    </div>
    <div class="item">
        <img id="fefe" src="https://www.turbo.fr/sites/default/files/2019-09/ferrari-f8-tributo-essai-1.png"  /> 
        
    </div>
    <div class="item">
        <img id="porsche" src="https://www.supersprint.com/public/img/01_low-444377-444443-444451-444459.jpg" />
    </div>
    <div class="item">
        <img id="mclaren" src="https://www.westcoastexoticcars.com/imagetag/628/main/l/Used-2017-McLaren-570S-Track-Package-1626308116.jpg" />
    </div>
    <div class="item">
        <img id="bentley" src="https://www.largus.fr/images/images/bentley-continental-gt-2018.jpg" />
    </div>
    <div class="item">
        <img id="aston" src="https://www.moteurnature.com/zvisu/1817/87/aston-martin-vantage-amr.jpg" />
    </div>
    </div>
</div>
</div>
<!-- Fin Carousel -->

<div class="container-fluid">
<div class="row">
    <div id="corp">
    </div>
</div>
</div>

<!-- Contact -->

<div id="contact" class="row">
<div id="description" class="col-md-12">
    <p>Partagez nous votre projet<br>
    Remplissez ce formulaire de contact afin que notre équipe puisse vous contacter au plus vite !</p>
</div>
<div id="infos" class="col-md-6">
    <form>
    <input id="nom" required type="text" placeholder="Nom"> <br>
    <input id="prenom" required type="text" placeholder="Prénom"> <br>
    <input id="phone" required type="text" placeholder="Numéro de téléphone"> <br>
    <input id="email" required type="text" placeholder="Adresse email"> <br>
    <input id="bouton" type="submit" value="Envoyer">
    </form>
</div>
<div id="com" class="col-md-6">
    <input id="des" required type="text" placeholder="Description de votre projet">
</div>
</div>

<!-- Pied de page -->

<div id="fin" class="row">

<div id="col2" class="col-md-3">
    <p><b>A Propos</b><br>
    <a href="#">Newsletter</a><br>
    </p>
</div>

<div id="col3" class="col-md-3">
    <p><b>Nos agences</b><br>
    <a href="#">Gare du nord</a><br>
    <a href="#">Orly</a><br>
    <a href="#">Charle de gaule</a><br>
    </p>
</div>
<div id="col4" class="col-md-3">
    <p><b>Ressources utiles</b><br>
    <a href="#">Mentions légales</a><br>
    <a href="#">Nos partenaires</a><br>
    <a href="#">Espace pro</a>
    </p>
</div>
</div>