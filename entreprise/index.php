<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/main.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/color.css" />
    <link rel="stylesheet" href="../css/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/rating.min.js"></script>
    <script src="../js/rating.min.js.map"></script>
    <script>$(document).ready(function() {
            $('#rateMe4').mdbRate();
        });</script>
</head>
<style>
    .checked {
        color: orange;
    }
    .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: center
    }

    .rating>input {
        display: none
    }

    .rating>label {
        position: relative;
        width: 1em;
        font-size: 6vw;
        color: #FFD600;
        cursor: pointer
    }

    .rating>label::before {
        content: "\2605";
        position: absolute;
        opacity: 0
    }

    .rating>label:hover:before,
    .rating>label:hover~label:before {
        opacity: 1 !important
    }

    .rating>input:checked~label:before {
        opacity: 1
    }

    .rating:hover>input:checked~label:before {
        opacity: 0.4
    }

</style>
<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">
        <div class="responsive-header">
            <div class="mh-head first Sticky">
                <span class="mh-btns-left">
                    <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                </span>
                <span class="mh-text">
                    <a href="newsfeed.html" title=""><img src="images/logo2.png" alt="" /></a>
                </span>
                <span class="mh-btns-right">
                    <a class="fa fa-sliders" href="#shoppingbag"></a>
                </span>
            </div>
            <div class="mh-head second">
                <form class="mh-form">
                    <input placeholder="search" />
                    <a href="#/" class="fa fa-search"></a>
                </form>
            </div>
        </div>


        <div class="topbar stick">
            <div class="logo">
                <h5>IRISI-STAGE</h5>
            </div>

            <div class="top-area">

                <ul class="setting-area">
                    <li>
                        <div class="searched">
                            <form method="post">
                                <!-- Search form -->
                                <input class="form-control form-control-sm mr-3 w-900" type="text" placeholder="Search"
                                    aria-label="Search" />
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="newsfeed.html" title="Home" data-ripple=""><i class="ti-home"></i></a>
                    </li>
                    <li>
                        <a href="#" title="Notification" data-ripple="">
                            <i class="ti-bell"></i><span>20</span>
                        </a>
                        <div class="dropdowns">
                            <span>4 New Notifications</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-1.jpg" alt="" />
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-2.jpg" alt="" />
                                        <div class="mesg-meta">
                                            <h6>Jhon doe</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag red">Reply</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-3.jpg" alt="" />
                                        <div class="mesg-meta">
                                            <h6>Andrew</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag blue">Unseen</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-4.jpg" alt="" />
                                        <div class="mesg-meta">
                                            <h6>Tom cruse</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-5.jpg" alt="" />
                                        <div class="mesg-meta">
                                            <h6>Amy</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                            </ul>
                            <a href="notifications.html" title="" class="more-mesg">view more</a>
                        </div>
                    </li>
                    <li>
                        <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                        <div class="dropdowns">
                            <span>5 New Messages</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-1.jpg" alt="" />
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-2.jpg" alt="" />
                                        <div class="mesg-meta">
                                            <h6>Jhon doe</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag red">Reply</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-3.jpg" alt="" />
                                        <div class="mesg-meta">
                                            <h6>Andrew</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag blue">Unseen</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-4.jpg" alt="" />
                                        <div class="mesg-meta">
                                            <h6>Tom cruse</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-5.jpg" alt="" />
                                        <div class="mesg-meta">
                                            <h6>Amy</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                            </ul>
                            <a href="messages.html" title="" class="more-mesg">view more</a>
                        </div>
                    </li>
                    <li>
                        <a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
                        <div class="dropdowns languages">
                            <a href="#" title=""><i class="ti-check"></i>English</a>
                            <a href="#" title="">Arabic</a>
                            <a href="#" title="">Dutch</a>
                            <a href="#" title="">French</a>
                        </div>
                    </li>
                </ul>
                <div class="user-img">
                    <img src="images/resources/admin.jpg" alt="" />
                    <span class="status f-online"></span>
                    <div class="user-setting">
                        <a href="#" title=""><span class="status f-online"></span>online</a>
                        <a href="#" title=""><span class="status f-away"></span>away</a>
                        <a href="#" title=""><span class="status f-off"></span>offline</a>
                        <a href="#" title=""><i class="ti-user"></i> view profile</a>
                        <a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>
                        <a href="#" title=""><i class="ti-target"></i>activity log</a>
                        <a href="#" title=""><i class="ti-settings"></i>account setting</a>
                        <a href="#" title=""><i class="ti-power-off"></i>log out</a>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="gap gray-bg">
                <?php
if (isset($_SESSION['success-insert'])) {
    echo "<div class='alert alert-success'>" . $_SESSION['success-insert'] . "</div>";
    unset($_SESSION["success-insert"]);
} elseif (isset($_SESSION['success-update'])) {
    echo "<div class='alert alert-warning'>" . $_SESSION['success-update'] . "</div>";
    unset($_SESSION["success-update"]);
} elseif (isset($_SESSION['success-delete'])) {
    echo "<div class='alert alert-danger'>" . $_SESSION['success-delete'] . "</div>";
    unset($_SESSION["success-delete"]);
}
?>




                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row" id="page-contents">
                                <div class="col-lg-3">
                                    <aside class="sidebar static">
                                        <div class="widget stick-widget">
                                            <h4 class="widget-title">Menu</h4>
                                            <ul class="naves">
                                                <li>
                                                    <i class="ti-home"></i>
                                                    <a href="../index.php" title="">Home</a>
                                                </li>
                                                <li>
                                                    <i class="ti-user"></i>
                                                    <a href="../profil.php" title="">Profil</a>
                                                </li>
                                                <li>
                                                    <i class="ti-archive"></i>
                                                    <a href="index.php" title="">Entreprise</a>
                                                </li>

                                                <li>
                                                    <i class="ti-comments-smiley"></i>
                                                    <a href="messages.html" title="">Forum</a>
                                                </li>
                                                <li>
                                                    <i class="ti-bell"></i>
                                                    <a href="notifications.html" title="">Notifications</a>
                                                </li>

                                                <li>
                                                    <i class="fa fa-bar-chart-o"></i>
                                                    <a href="insights.html" title="">Statistique</a>
                                                </li>
                                                <li>
                                                    <i class="ti-power-off"></i>
                                                    <a href="landing.html" title="">Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Shortcuts -->
                                    </aside>
                                </div>
                                <!-- sidebar -->
                                <div class="col-lg-9">
                                    <section>
                                        <div class="gap gray-bg">
                                            <div class="container-fluid">
                                                <div class="row" id="page-contents">
                                                    <div class="offset-lg-1 col-lg-10">
                                                        <div class="career-page">
                                                            <div class="post-filter-sec">
                                                                <form method="post" class="filter-form">
                                                                    <input type="post" placeholder="Search post" />
                                                                    <button><i class="ti-search"></i></button>
                                                                </form>
                                                                <div class="purify">
                                                                    <span>filter by city</span>

                                                                    <select>
                                                                        <option>City</option>
                                                                        <option>Marrakech</option>
                                                                        <option>Casablanca</option>
                                                                        <option>Safi</option>
                                                                    </select>
                                                                    <a href="#" title="">Filter</a>
                                                                    <a href="#" title="" data-toggle="modal"
                                                                        data-target="#exampleModal">ADD
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <?php

require '../connection.php';
$entreprisess = $db->entreprises->find([]);

foreach ($entreprisess as $entreprise) {
    $raisonSociale = $entreprise->raisonSociale;
    $adresseEmail = $entreprise->adresseEmail;
    $id=$entreprise->ID;
    $likes=$entreprise->like;
    $dislikes=$entreprise->dislike;


    if (isset($entreprise->tel)) {
        $tel = $entreprise->tel;
    } else {
        $tel = 'Non precise';
    }
    if (isset($entreprise->adresse)) {
        $adresse = $entreprise->adresse;
    } else {
        $tel = 'Non precise';
    }

    ?>

                                                                <div class="col-md-5">
                                                                    <div class="open-position">
                                                                        <div class="row">
                                                                        <div class="col-md-7">

                                                                        <h5>
                                                                            <a href="#" title=""><?php echo $raisonSociale; ?></a>
                                                                        </h5>
                                                                        </div>
                                                                        <div class="col-md-5" style="color:#C8C8C8">
                                                                        <i
                                                                          class="fa fa-thumbs-up ib"><?php echo $likes; ?></i>
                                                                                <i
                                                                                class="fa fa-thumbs-down ib"><?php echo $dislikes; ?></i>
                                                                         </div>

                                                                         </div>
                                                                        <a href="#" title=""><i
                                                                                class="fa fa-phone"></i><?php echo $tel; ?></a>
                                                                        <br>
                                                                        <a href="#" title=""><i
                                                                                class="fa fa-envelope"></i><?php echo $adresseEmail; ?></a>
                                                                        <br>
                                                                        <a href="#" title=""><i
                                                                                class="fa fa-map-marker"></i><?php echo $adresse; ?></a>


                                                                        <div class="text-center card-buttons">
                                                                            <a href="#"
                                                                                class="btn btn-warning a-btn-slide-text ti-pencil-alt"
                                                                                style="color:white;" data-toggle="modal"
                                                                                data-target="#<?php echo $raisonSociale; ?>">


                                                                            </a>

                                                                            <a href="#"
                                                                                class="btn btn-danger a-btn-slide-text ti-trash"
                                                                                data-toggle="modal"
                                                                                data-target="#<?php echo $adresseEmail; ?>">


                                                                            </a>
                                                                            <a href="#"
                                                                               class="btn btn-success a-btn-slide-text "
                                                                               data-toggle="modal"
                                                                               data-target="#<?php echo $adresseEmail; ?>">
                                                                               Noter

                                                                            </a>

                                                                        </div>
                                                                        <div class="modal-footer" style="padding:10px 25px;margin-top:10px;">
                                                                               
                                                                                <form  action="like.php" method="POST">
                                                                                    <input name="id"
                                                                                        type="hidden"
                                                                                        value="<?php echo $id; ?>">
                                                                                        <input name="like"
                                                                                        type="hidden"
                                                                                        value="<?php echo $likes; ?>">


                                                                                        <button  type="submit" name="liker" 
                                                                                    class="btn btn-light"
                                                                                    data-dismiss="modal" style="width:90px;border:1px solid #4169E1;padding:3px;color:#4169E1;font-size:14px">
                                                                                    <i
                                                                                class="fa fa-thumbs-up"></i> J'aime</button>
                                                                                </form>
                                                                                <form  action="dislike.php" method="post">
                                                                                  
                                                                                  <input name="id"
                                                                                        type="hidden"
                                                                                        value="<?php echo $id; ?>"/>
                                                                                       
                                                                                        <input name="dislike"
                                                                                        type="hidden"
                                                                                        value="<?php echo $dislikes; ?>" />
                                                                                <button type="submit"
                                                                                        class="btn  " style="width:100px;background-color: #4169E1;padding:3px;margin-left:8%;font-size:14px;color:white"
                                                                                        name="disliker"><i
                                                                                class="fa fa-thumbs-down"></i>J'aime pas</button>
                                                                                </form>

                                                                              
                                                                              
                                                                            </div>


                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="<?php echo $adresseEmail; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">Merci de Noter Cette Entreprise !</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="rating"> <input type="radio" name="rating" value="5" id="5">
                                                                                            <label for="5">☆</label>
                                                                                            <input type="radio" name="rating" value="4" id="4">
                                                                                            <label for="4">☆</label>
                                                                                            <input type="radio" name="rating" value="3" id="3">
                                                                                            <label for="3">☆</label>
                                                                                            <input type="radio" name="rating" value="2" id="2">
                                                                                            <label for="2">☆</label>
                                                                                            <input type="radio" name="rating" value="1" id="1">
                                                                                            <label for="1">☆</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">

                                                                                        <button type="button" class="btn btn-primary">Envoyer</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="modal fade"
                                                                    id="<?php echo $raisonSociale; ?>" tabindex="-1"
                                                                    role="dialog" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">
                                                                                    <?php echo $raisonSociale; ?></h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <form method="post" action="update.php">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="exampleInputEmail1">Raison
                                                                                            sociale</label>
                                                                                        <input type="text"
                                                                                            class="form-control" style="border: 1px solid black;  box-shadow: 0 0 0 1px #4dd0e1;
" name="raisonSociale" required value="<?php echo $raisonSociale; ?>">

                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="exampleInputPassword1">Email</label>
                                                                                        <input type="text"
                                                                                            class="form-control" style="border: 1px solid #4dd0e1;  box-shadow: 0 0 0 1px #4dd0e1;
" name="adresseEmail" required value="<?php echo $adresseEmail; ?>">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="exampleInputPassword1">Numero
                                                                                            de telephone :</label>
                                                                                        <input type="text"
                                                                                            class="form-control" style="border: 1px solid #4dd0e1;  box-shadow: 0 0 0 1px #4dd0e1;
" name="tel" value="<?php echo $tel; ?>">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="exampleInputPassword1">adresse</label>
                                                                                        <input type="text"
                                                                                            class="form-control" style="border: 1px solid #4dd0e1;  box-shadow: 0 0 0 1px #4dd0e1;
" name="adresse" value="<?php echo $adresse; ?>">
                                                                                    </div>
                                                                                    <input name="rs-hidden"
                                                                                        type="hidden"
                                                                                        value="<?php echo $raisonSociale; ?>">
                                                                                    <div class="text-center">
                                                                                        <button type="submit"
                                                                                            class="btn btn-warning"
                                                                                            name="update"
                                                                                            style="color:white;">Update</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal fade"
                                                                    id="<?php echo $adresseEmail; ?>" tabindex="-1"
                                                                    role="dialog" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Suppression
                                                                                    de <?php echo $raisonSociale; ?>
                                                                                </h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Etes-vous sûr que vous voulez
                                                                                    supprimer
                                                                                    "<?php echo $raisonSociale; ?>" </p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal">Fermer</button>
                                                                                <form action="delete.php" method="post">
                                                                                    <input name="rs-hidden"
                                                                                        type="hidden"
                                                                                        value="<?php echo $raisonSociale; ?>">
                                                                                    <button type="submit"
                                                                                        class="btn btn-danger "
                                                                                        name="delete">Supprimer</button>
                                                                                </form>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <?php

}

?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </section>

                                </div>
                            </div>

                            <!-- centerl meta -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>


    <!-- footer -->

    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajout d'une entreprise</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="create.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Raison sociale</label>
                            <input type="text" class="form-control" style="border: 1px solid black;  box-shadow: 0 0 0 1px #4dd0e1;
" name="raisonSociale" required>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" class="form-control" style="border: 1px solid #4dd0e1;  box-shadow: 0 0 0 1px #4dd0e1;
" name="adresseEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Numero de telephone :</label>
                            <input type="text" class="form-control" style="border: 1px solid #4dd0e1;  box-shadow: 0 0 0 1px #4dd0e1;
" name="tel">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">adresse</label>
                            <input type="text" class="form-control" style="border: 1px solid #4dd0e1;  box-shadow: 0 0 0 1px #4dd0e1;
" name="adresse">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="save">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../js/main.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/map-init.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>

</html>
