<?php

    $bdd = new PDO('mysql:dbname=Biblio;host=127.0.0.1','root', 'root');
    $queryExec = $bdd->query("SELECT * FROM Livre");
    $lesLivres = $queryExec->fetchAll();
   

    include('livre.php');

    $tableauLivre= array();

    foreach ($lesLivres as $livre) {
        

        $livre1 = new livre ($livre['id'],$livre['titre'],$livre['auteur']);

       array_push($tableauLivre,$livre1);
    }


    


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main>
    <table class="border-collapse border border-slate-500 ...">
    <thead>
        <tr>
            <th class="border border-slate-600 ...">Id</th>
            <th class="border border-slate-600 ...">titre</th>
            <th class="border border-slate-600 ...">auteur</th>
        </tr>
    </thead>
   
    <tbody> 
        
        <tr><?php foreach ($tableauLivre as $livre) : ?>
            <td class="border border-slate-700 ..."><pre> <?php echo $livre->getId() ?>  </td>
            <td class="border border-slate-700 ..."><pre> <?php echo $livre->getTitre()?></td>
            <td class="border border-slate-700 ..."><pre> <?php echo $livre->getAuteur()?></td>
        </tr>
    </tbody>
    <?php endforeach; ?>
</table>


    </main>
    <footer>

    </footer>

</body>
</html>
