<?php

require_once 'Verif.php';

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP-1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header></header>

    <?php if (!empty($_POST) && count($error) < 1) { ?>

        <div id="validateform">
            <h2>Nom :</h2>
            <p> <?= htmlspecialchars($_POST['FirstName']) ?></p>
            <h2>Prénom : </h2>
            <p> <?= htmlspecialchars($_POST['LastName']) ?></p>
            <h2>Date de Naissance :</h2>
            <p> <?= htmlspecialchars($_POST['BirthDate']) ?></p>
            <h2>Pays de Naissance :</h2>
            <p> <?= htmlspecialchars($_POST['BirthCountry']) ?></p>
            <h2>Nationalité :</h2>
            <p> <?= htmlspecialchars($_POST['Nationality']) ?></p>
            <h2>Mail :</h2>
            <p> <?= htmlspecialchars($_POST['Mail']) ?></p>
            <h2>Telephone :</h2>
            <p> <?= htmlspecialchars($_POST['NumPhone']) ?></p>
            <h2>Adresse :</h2>
            <p> <?= htmlspecialchars($_POST['Adress']) ?></p>
            <h2>Numéro Pôle Emploi </h2>
            <p> <?= htmlspecialchars($_POST['NumPoleEmploi']) ?></p>
            <h2>Diplôme </h2>
            <p> <?= htmlspecialchars($_POST['Degree']) ?></p>
            <h2>Nombre de Badge :</h2>
            <p> <?= htmlspecialchars($_POST['NumBadge']) ?></p>
            <h2>Lien Code Academy :</h2>
            <p> <?= htmlspecialchars($_POST['LinkCodeAcademy']) ?></p>
            <h2>Hero :</h2>
            <p> <?= htmlspecialchars($_POST['Hero']) ?></p>
            <h2>Hacks :</h2>
            <p><?= htmlspecialchars($_POST['Hacks']) ?></p>
            <h2>Expériences :</h2>
            <p> <?= htmlspecialchars($_POST['inputAnswer']) ?></p>
        </div>

    <?php } else { ?>
        <div class="container">
            <form action="" method="post" novalidate>

                <div class="form-group row">
                    <div class="col-sm-6 col-12">
                        <label for="FirstName">Nom * :</label>
                        <input type="text" name="FirstName" id="" placeholder="Nom" class="form-control" value="<?= isset($_POST['FirstName']) ? $_POST['FirstName'] : '' ?>" required>
                        <span><?= (isset($error['FirstName'])) ? $error['FirstName'] : '' ?></span>

                    </div>
                    <div class="col-sm-6 col-12">
                        <label for="LastName">Prénom * :</label>
                        <input type="text" name="LastName" id="" placeholder="Prénom" class="form-control" value="<?= isset($_POST['LastName']) ? $_POST['LastName'] : '' ?>" required>
                        <span><?= (isset($error['LastName'])) ? $error['LastName'] : '' ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">

                        <label for="BirthDate">Date de Naissance * :</label>
                        <input type="date" name="BirthDate" id="" placeholder="Date de naissance" class="form-control" value="<?= isset($_POST['BirthDate']) ? $_POST['BirthDate'] : '' ?>" required>
                        <span><?= (isset($error['BirthDate'])) ? $error['BirthDate'] : '' ?></span>
                    </div>
                    <div class="col-12">
                        <label for="BirthCountry">Pays de Naissance :</label>
                        <input type="text" name="BirthCountry" id="" placeholder="Pays de naissance" class="form-control" value="<?= isset($_POST['BirthCountry']) ? $_POST['BirthCountry'] : '' ?>" required>
                        <span><?= (isset($error['BirthCountry'])) ? $error['BirthCountry'] : '' ?></span>
                    </div>
                    <div class="col-12">
                        <label for="Nationality">Nationalité * :</label>
                        <input type="text" name="Nationality" id="" placeholder="Nationalité" class="form-control" value="<?= isset($_POST['Nationality']) ? $_POST['Nationality'] : '' ?>" required>
                        <span><?= (isset($error['Nationality'])) ? $error['Nationality'] : '' ?></span>
                    </div>

                </div>


                <div class="form-group row">
                    <div class="col-12">
                        <label for="email">Mail * :</label>
                        <input type="email" name="Mail" id="" placeholder="Email" class="form-control" value="<?= isset($_POST['Mail']) ? $_POST['Mail'] : '' ?>" required>
                        <span><?= (isset($error['Mail'])) ? $error['Mail'] : '' ?></span>
                    </div>
                    <div class="col-12">
                        <label for="NumPhone">Numéro de téléphone * :</label>
                        <input type="tel" name="NumPhone" id="" placeholder="Numéro Télephone" class="form-control" value="<?= isset($_POST['NumPhone']) ? $_POST['NumPhone'] : '' ?>" required>
                        <span><?= (isset($error['NumPhone'])) ? $error['NumPhone'] : '' ?></span>
                    </div>
                    <div class="col-12">
                        <label for="Adress">Adresse * :</label>
                        <input type="text" name="Adress" id="" placeholder="Adresse" class="form-control" value="<?= isset($_POST['Adress']) ? $_POST['Adress'] : '' ?>" required>
                        <span><?= (isset($error['Adress'])) ? $error['Adress'] : '' ?></span>

                    </div>
                </div>

                <div class="form-group row ">
                    <div class="col-sm-6 col-12">
                        <label for="NumPoleEmploi">Numéro Pôle Emploi * :</label>
                        <input type="text" name="NumPoleEmploi" id="" placeholder="Numéro Pôle Emploi" class="form-control" value="<?= isset($_POST['NumPoleEmploi']) ? $_POST['NumPoleEmploi'] : '' ?>" required>
                        <span><?= (isset($error['NumPoleEmploi'])) ? $error['NumPoleEmploi'] : '' ?></span>
                    </div>
                    <div class="col-sm-6 col-12">
                        <label for="Degree">Diplôme * :</label>
                        <select name="Degree" id="" placeholder="Diplôme" class="form-control " value="<?= isset($_POST['Degree']) ? $_POST['Degree'] : '' ?>" required>

                            <option value="Choix" <?= isset($_POST['Degree']) && $_POST['Degree'] == 'Choix' ? 'selected' : '' ?> selected disabled>selectionner votre Diplôme</option>
                            <option value="sansBac" <?= isset($_POST['Degree']) && $_POST['Degree'] == 'sansBac' ? 'selected' : '' ?>>sans Bac</option>
                            <option value="Bac" <?= isset($_POST['Degree']) && $_POST['Degree'] == 'Bac' ? 'selected' : '' ?>>Bac</option>
                            <option value="Bac+2" <?= isset($_POST['Degree']) && $_POST['Degree'] == 'Bac+2' ? 'selected' : '' ?>>Bac +2</option>
                            <option value="Bac+3" <?= isset($_POST['Degree']) && $_POST['Degree'] == 'Bac+3' ? 'selected' : '' ?>>Bac+3 ou supérieur</option>

                        </select>
                        <span><?= (isset($error['Degree'])) ? $error['Degree'] : '' ?></span>
                    </div>
                </div>

                <div class="form-group row">


                    <div class="col-sm-6 col-12">
                        <label for="LinkCodeAcademy">Lien Code Academy :</label>
                        <input type="text" name="LinkCodeAcademy" id="" placeholder="Lien Code Academy" class="form-control" value="<?= isset($_POST['LinkCodeAcademy']) ? $_POST['LinkCodeAcademy'] : '' ?>" required>
                        <span><?= (isset($error['LinkCodeAcademy'])) ? $error['LinkCodeAcademy'] : '' ?></span>
                    </div>
                    <div class="col-sm-6 col-12">
                        <label for="NumBadge">Nombre de Badge :</label>
                        <input type="number" name="NumBadge" id="" placeholder="Nombre de Badge" class="form-control" value="<?= isset($_POST['NumBadge']) ? $_POST['NumBadge'] : '' ?>" required>
                        <span><?= (isset($error['NumBadge'])) ? $error['NumBadge'] : '' ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <label for="Hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? *</label>
                        <textarea name="Hero" id="" class="form-control" required rows="5"><?= isset($_POST['Hero']) ? $_POST['Hero'] : '' ?></textarea>
                        <span><?= (isset($error['Hero'])) ? $error['Hero'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="Hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) *</label>
                        <textarea name="Hacks" id="" class="form-control" required rows="5"><?= isset($_POST['Hacks']) ? $_POST['Hacks'] : '' ?></textarea>
                        <span><?= (isset($error['Hacks'])) ? $error['Hacks'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="inputAnswer">
                            Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? *
                        </label>
                        <div>
                            <label for="inputAnswer">Oui</label>
                            <input class="with-gap" name="inputAnswer" type="radio" value="Oui" <?= isset($_POST['inputAnswer']) && $_POST['inputAnswer'] == 'Oui' ? 'checked' : '' ?>> 
                            
                            <label for="inputAnswer">Non</label>
                            <input class="with-gap" name="inputAnswer" type="radio" value="Non"  <?= isset($_POST['inputAnswer']) && $_POST['inputAnswer'] == 'Non' ? 'checked' : '' ?>>
                        </div>
                        <span><?= (isset($error['inputAnswer'])) ? $error['inputAnswer'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <input type="submit" name="submit" value="Envoyer le Formulaire" class="form-control" id="btnsubmit">
                    </div>
                </div>


            </form>

        <?php } ?>
        </div>
        <footer></footer>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>