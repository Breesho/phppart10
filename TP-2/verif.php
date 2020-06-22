<?php
$NameRegex = "/[a-zA-Zéèêëiîïôöüäç]{2,12}[-]?[a-zA-Zéèêëiîïôöüäç]{2,12}/";
$Ageregex= "/^\S[0-9]{0,3}$/";

if (isset($_POST['FirstName'])) {
    if (!preg_match($NameRegex, $_POST['FirstName'])) {
        $error['FirstName'] = 'Mauvais Format';
    };
    if (empty($_POST['FirstName'])) {
        $error['FirstName'] = 'Veuillez Renseigner le champ';
    };
}
if (isset($_POST['LastName'])) {
    if (!preg_match($NameRegex, $_POST['LastName'])) {
        $error['LastName'] = 'Mauvais Format';
    };
    if (empty($_POST['LastName'])) {
        $error['LastName'] = 'Veuillez Renseigner le champ';
    };
}
if (isset($_POST['Age'])) {
    if (!preg_match($Ageregex, $_POST['Age'])) {
        $error['Age'] = 'Mauvais Format';
    };
    if (empty($_POST['Age'])) {
        $error['Age'] = 'Veuillez Renseigner le champ';
    };
}
if (isset($_POST['Company'])) {
    if (!preg_match($NameRegex, $_POST['Company'])) {
        $error['Company'] = 'Mauvais Format';
    };
    if (empty($_POST['Company'])) {
        $error['Company'] = 'Veuillez Renseigner le champ';
    };
}

if (isset($_POST['Submit'])) {
    if (!array_key_exists('Gender', $_POST)) {
        $error['Gender'] = 'Merci de sélectionner un choix';
    } else {
        $messageGender = htmlspecialchars($_POST['Gender']);
    }
} 

if (isset($_POST['Company']) && isset($_POST['Age']) && isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['Gender']) ) {
     $Gender = $_POST['Gender'];
     $LastName = $_POST['LastName'];
     $FirstName = $_POST['FirstName'];
     $Company = $_POST['Company'];
     $Age = $_POST['Age'];

    $messageValidate =  "Bonjour $Gender $LastName $FirstName  de la societe $Company vous avez $Age ans";

}else {
    $messageValidate = 'Veuillez Valider votre formulaire avec les bonnes informations  ';
}
?>

  
        
 