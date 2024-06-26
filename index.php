<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="ressources/img/favicon.ico" type="image/x-icon">
        <style>
            body{
                background-image: url('ressources/img/fond.png');
            }
            h1{
                text-align:center;
            }
            .info{
            float:right;
            width:210px;
        }

        .icone{
           height:200px;
            width:200px;
            position:relative;
            float:right;
        }
        
        #volet {
            width: 270px;
            padding: 10px;
            background: rgba(107, 154, 73,0.7);
            color: #fff;
            position: fixed;
            right: 0; /* Fixé à droite */
            top: 55px;
            border-radius:5px;
        }

        /* Styles pour le lien d'ouverture (facultatif) */
        #volet a.ouvrir {
            display: none; /* Masquer le lien d'ouverture */
        }
        
        h1{
            font-size:40px;
        }
        .nav{
            font-size:35px;
            background-color: #03fcb6;
        }
        .nav a{
            font-size:30px;
        }
        .nav a:hover{
            text-decoration: underline;
            background:none;
            color: green;
        }
        

        </style>
    </head>
<body>
    <div class="content">
        <p><h1>Birdipedia</h1></p>
        <nav><span class="nav"><a href="about/">À propos de nous</a></span></nav>
        <p class="space">I</p>
        <div id="volet">
            <img src="ressources/img/favicon.jpg" alt="Logo de birdipédia" class="icone"><span>
            <p class="texte">Birdipédia est un programme qui permer de rescencer un maximum de chants d'oiseaux. Il sera bientôt possible d'y contribuer.</p>
            </span>
            <p><img src="ressources/img/centre-dinformations.png" alt="Informations"><h2>Informations</h2></p>
            <p class="texte"><iframe src="info.html" frameborder="0">Il semblerai qu'il n'y ai pas actus ...</iframe>
            <!-- Lien d'ouverture (facultatif) -->
            <a href="#volet" class="ouvrir">Ouvrir !</a>
    
        </div>

    <?php
    $chemin_dossier = 'a/';
    $List="list";

    if ($dossier = opendir($chemin_dossier)) {
        while (false !== ($fichier = readdir($dossier))) {
            if ($fichier != "." && $fichier != "..") {
                // Récupère le nom du fichier sans l'extension
                $nom_sans_extension = pathinfo($fichier, PATHINFO_FILENAME);
                // Crée un lien hypertexte vers le fichier
                echo "<a href=\"$chemin_dossier/$fichier\" class='list'>$nom_sans_extension</a><br>";
            }
        }
        closedir($dossier);
    } else {
        echo "Impossible d'ouvrir le dossier.";
    }
    ?>
</div>






</body>
</html>