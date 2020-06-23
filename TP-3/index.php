<?php
    require_once 'function.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP-3</title>
</head>
<style> 
thead th {
    text-align: center;
}
</style>
<body>
    <p>Faire une fonction qui permet d'afficher les données des tableaux suivants :<br>

        $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');<br>
        $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');<br>
        $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');<br>
        $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');<br>

        Les afficher tous sur une même page.</p>
    
<table>
    <thead>
    <th>Portrait 1 </th>
    <th>Portrait 2</th>
    <th>Portrait 3</th>
    <th>Portrait 4</th>
    </thead>
    <tbody>
    <th><?= $Person[0] ?></th>
    <th><?= $Person[1] ?></th>
    <th><?= $Person[2] ?></th>
    <th><?= $Person[3] ?></th>
    </tbody>

</table>
        
     
</body>
</html>