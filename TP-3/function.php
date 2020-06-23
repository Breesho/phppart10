<?php


$portrait1  = array(
    'name' => 'Victor',
    'firstname' => 'Hugo',
    'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg'
);

$portrait2  = array(
    'name' => 'Jean',
    'firstname' => 'de La Fontaine',
    'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg'
);

$portrait3  = array(
    'name' => 'Pierre',
    'firstname' => 'Corneille',
    'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg'
);

$portrait4  = array(
    'name' => 'Jean',
    'firstname' => 'Racine',
    'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg'
);



function ShowImg($NamePortrait)
{

    foreach ($NamePortrait as $key => $value) {
        if ($key == 'portrait') {
            $ShowImg = '<img src="' . $value . '" width="250px">';
        } elseif ($key == 'name') {
            $ShowName = "$value <br>";
        } elseif ($key == 'firstname') {
            $Showfirstname =   "$value <br>";
        }
    }
    return " $ShowName  $Showfirstname  $ShowImg" ;
}



$Person[0] = ShowImg($portrait1);
$Person[1] = ShowImg($portrait2);
$Person[2] = ShowImg($portrait3);
$Person[3] = ShowImg($portrait4);
