<?php
$NameRegex = "/[a-zA-Zéèêëiîïôöüäç]{2,12}[-]?[a-zA-Zéèêëiîïôöüäç]{2,12}/";
$dateRegex = "/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/";
$mailRegex = "/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
$phoneRegex = "/(0)+[0-9]{1}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}/";
$NumPoleEmploi = "/[0-9]{7}[a-zA-Z]{1}/";
$LinkCodeAcademy = "/https?:\/\/(www\.)?(codecademy)\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)/";
$textarea = "/^[a-zA-ZéèêëiîïôöüàäçÉÀÂÛÔÎÙÈÊ\" -,!.;:?()]{20,500}$/";
// var_dump($_POST);
$error = [];


if (isset($_POST['LastName'])) {
    if (!preg_match($NameRegex, $_POST['LastName'])) {
        $error['LastName'] = 'Mauvais Format';
    };
    if (empty($_POST['LastName'])) {
        $error['LastName'] = 'Veuillez Renseigner le champ';
    };
}

if (isset($_POST['FirstName'])) {
    if (!preg_match($NameRegex, $_POST['FirstName'])) {
        $error['FirstName'] = 'Mauvais Format';
    };
    if (empty($_POST['FirstName'])) {
        $error['FirstName'] = 'Veuillez Renseigner le champ';
    };
}

if (isset($_POST['BirthDate'])) {
    if (!preg_match($dateRegex, $_POST['BirthDate'])) {
        $error['BirthDate'] = 'Mauvais Format';
    };
    if (empty($_POST['BirthDate'])) {
        $error['BirthDate'] = 'Veuillez Renseigner le champ';
    };
}


if (isset($_POST['BirthCountry'])) {
    if (!preg_match($NameRegex, $_POST['BirthCountry'])) {
        $error['BirthCountry'] = 'Mauvais Format';
    };
    if (empty($_POST['BirthCountry'])) {
        $error['BirthCountry'] = 'Veuillez Renseigner le champ';
    };
}

if (isset($_POST['Nationality'])) {
    if (!preg_match($NameRegex, $_POST['Nationality'])) {
        $error['Nationality'] = 'Mauvais Format';
    };
    if (empty($_POST['Nationality'])) {
        $error['Nationality'] = 'Veuillez Renseigner le champ';
    };
}

if (isset($_POST['Mail'])) {
    if (!filter_var($_POST['Mail'], FILTER_VALIDATE_EMAIL)) {
        $error['Mail'] = 'Mauvais Format';
    };
    if (empty($_POST['Mail'])) {
        $error['Mail'] = 'Veuillez Renseigner le champ';
    };
}

if (isset($_POST['NumPhone'])) {
    if (!preg_match($phoneRegex, $_POST['NumPhone'])) {
        $error['NumPhone'] = 'Mauvais Format';
    };
    if (empty($_POST['NumPhone'])) {
        $error['NumPhone'] = 'Veuillez Renseigner le champ';
    };
}

if (isset($_POST['Adress'])) {
    if (!preg_match($NameRegex, $_POST['Adress'])) {
        $error['Adress'] = 'Mauvais Format';
    };
    if (empty($_POST['Adress'])) {
        $error['Adress'] = 'Veuillez Renseigner le champ';
    };
}

if (isset($_POST['NumPoleEmploi'])) {
    if (!preg_match($NumPoleEmploi, $_POST['NumPoleEmploi'])) {
        $error['NumPoleEmploi'] = 'Mauvais Format';
    };
    if (empty($_POST['NumPoleEmploi'])) {
        $error['NumPoleEmploi'] = 'Veuillez Renseigner le champ';
    };
}
/* Select Option*/
if (isset($_POST['submit'])) {
    if (!array_key_exists('Degree', $_POST)) {
        $error['Degree'] = 'Merci de sélectionner un niveau de diplôme';
    } else {
        $messageDegree = htmlspecialchars($_POST['Degree']);
    }
    if(isset($_POST['Degree'])){

        if (!($_POST['Degree'] == 'Bac' || $_POST['Degree'] == 'sansBac' || $_POST['Degree'] == 'Bac' || $_POST['Degree'] == 'Bac+2' || $_POST['Degree'] == 'Bac+3')) {
            $error['Degree'] = 'Merci de sélectionner un niveau de diplôme';
        }
    }
} 

if (isset($_POST['LinkCodeAcademy'])) {
    if (!filter_var($_POST['LinkCodeAcademy'], FILTER_VALIDATE_URL)) {
        $error['LinkCodeAcademy'] = 'Mauvais Format';
    };
    if (empty($_POST['LinkCodeAcademy'])) {
        $error['LinkCodeAcademy'] = 'Veuillez Renseigner le champ';
    };
}

if (isset($_POST['NumBadge'])) {
    if (!preg_match($LinkCodeAcademy, $_POST['LinkCodeAcademy'])) {
        $error['LinkCodeAcademy'] = 'Mauvais Format';
    };
    if (empty($_POST['NumBadge'])) {
        $error['NumBadge'] = 'Veuillez Renseigner le champ';
    };
}


if (isset($_POST['Hero'])) {
    if (!preg_match($textarea, $_POST['Hero'])) {
        $error['Hero'] = 'Mauvais Format';
    };
    if (empty($_POST['Hero'])) {
        $error['Hero'] = 'Veuillez Renseigner le champ';
    };
}

if (isset($_POST['Hacks'])) {
    if (!preg_match($textarea, $_POST['Hacks'])) {
        $error['Hacks'] = 'Mauvais Format';
    };
    if (empty($_POST['Hacks'])) {
        $error['Hacks'] = 'Veuillez Renseigner le champ';
    };
}

if (isset($_POST['Experiences'])) {
    if (!preg_match($textarea, $_POST['Experiences'])) {
        $error['Experiences'] = 'Mauvais Format';
    };
    if (empty($_POST['Experiences'])) {
        $error['Experiences'] = 'Veuillez Renseigner le champ';
    };
}

