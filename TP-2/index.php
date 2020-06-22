<?php 

    require_once 'verif.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP-2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
<header></header>


    <div class="container">
        <form action="" method="post" novalidate>
            <div class="form-group row">

                <div class="col-sm-6 col-12">
                    <label for="FirstName">Nom * :</label>
                    <input type="text" name="FirstName" id="" placeholder="Nom" class="form-control" value="<?= isset($_POST['FirstName']) ? $_POST['FirstName'] : '' ?>"  required>
                    <span><?= (isset($error['FirstName'])) ? $error['FirstName'] : '' ?></span>
                </div>
                <div class="col-sm-6 col-12">
                    <label for="LastName">Prénom * :</label>
                    <input type="text" name="LastName" id="" placeholder="Prénom" class="form-control" value="<?= isset($_POST['LastName']) ? $_POST['LastName'] : '' ?>"  required>
                    <span><?= (isset($error['LastName'])) ? $error['LastName'] : '' ?></span>
                </div>
                <div class="col-sm-6 col-12">
                    <label for="Age">Age * :</label>
                    <input type="text" name="Age" id="" placeholder="Age" class="form-control" value="<?= isset($_POST['Age']) ? $_POST['Age'] : '' ?>" required>
                    <span><?= (isset($error['Age'])) ? $error['Age'] : '' ?></span>
                </div>
                <div class="col-sm-6 col-12">
                <label for="Gender">Civilité</label>
                    <select name="Gender" id="" value="<?= isset($_POST['Gender']) ? $_POST['Gender'] : '' ?>" required>
                        <option value="" disabled selected>Choix</option>
                        <option value="Mr">Homme / Mr</option>
                        <option value="Mme">Femme / Mme</option>
                        <option value="Autre">Autre </option>
                    </select>
                    <span><?= (isset($error['Gender'])) ? $error['Gender'] : '' ?></span>
                </div>
                <div class="col-sm-6 col-12">
                    <label for="Company">Société * :</label>
                    <input type="text" name="Company" id="" placeholder="societe" class="form-control" value="<?= isset($_POST['Company']) ? $_POST['Company'] : '' ?>"  required>
                    <span><?= (isset($error['Company'])) ? $error['Company'] : '' ?></span>
                </div>
            </div>
            
            
            <div class="form-group row">
                    <div class="col-12">
                        <input type="submit" name="Submit" class="form-control" id="btnsubmit">
                    </div>
                </div>
        </form>
        <h2><?= (isset($_POST) && !empty($_POST)) ? $messageValidate : '' ?></h2>
    </div>



  
   




<footer></footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>