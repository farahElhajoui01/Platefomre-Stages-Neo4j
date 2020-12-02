<?php

if (isset($_POST['submit'])) {

    $collection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $bulk = new MongoDB\Driver\BulkWrite;

    $_id1 = $bulk->update(['prenom' => 'Meriem'], ['$set' => ['titre' => $_POST['titre'],
        'sujet' => $_POST['sujet'],
        'dateDebut' => $_POST['dateDebut'],
        'dateFin' => $_POST['dateFin'],
        'description' => $_POST['description']]], ['multi' => false, 'upsert' => false]);

    $result = $collection->executeBulkWrite('Stages_db.utilisateurs', $bulk);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">
        <div class="container-fluid pdng0">
            <div class="row merged" style="background-color: #f4f7f6 ;">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="login-reg-bg" style="margin-left: 45%;">
                        <div class="log-reg-area sign">
                            <h2 class="log-title">Ajouter un nouveau stage </h2>

                            <form method="POST" action="ajout-stage.php">
                                <div class="form-group">
                                    <input type="text" name="titre" />
                                    <label class="control-label" for="input">Titre</label><i class="mtrl-select"></i>
                                </div>

                                <div class="form-group">
                                    <input type="date" name="dateDebut" />
                                    <label class="control-label" for="input">Date Debut</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="date" name="dateFin" />
                                    <label class="control-label" for="input">Date Fin</label><i class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="sujet" />
                                    <label class="control-label" for="input">Sujet </label><i class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="description" />
                                    <label class="control-label" for="input">Description de vos missions</label><i
                                        class="mtrl-select"></i>
                                </div>

                                <div class="form-group">

                                    <div class="submit-btns" style="margin-left: 70%;">
                                        <button class="mtr-btn signup" type="submit" name="submit"
                                            value="add"><span>Valider</span></button>
                                    </div>
                            </form>
                        </div>
                        <div class="log-reg-area reg">
                            <h2 class="log-title">Register</h2>
                            <p>
                                Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join
                                    now</a>
                            </p>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" required="required" />
                                    <label class="control-label" for="input">First & Last Name</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" required="required" />
                                    <label class="control-label" for="input">User Name</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" required="required" />
                                    <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                                </div>
                                <div class="form-radio">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio" checked="checked" /><i
                                                class="check-box"></i>Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio" /><i class="check-box"></i>Female
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" required="required" />
                                    <label class="control-label" for="input"><a
                                            href="https://wpkixx.com/cdn-cgi/l/email-protection" class="cf_email"
                                            data-cfemail="6c29010d05002c">[email&#160;protected]</a></label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked" /><i class="check-box"></i>Accept Terms
                                        & Conditions ?
                                    </label>
                                </div>
                                <a href="#" title="" class="already-have">Already have an account</a>
                                <div class="submit-btns">
                                    <button class="mtr-btn signup" type="button"><span>Register</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>