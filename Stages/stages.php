<?php
require_once '../vendor/autoload.php';

use GraphAware\Neo4j\Client\ClientBuilder;


$client = ClientBuilder::create()
    ->addConnection('http', 'http://neo4j:slice-suppression-illustrations@54.87.207.158:32835')
    ->build();


    $query = "Match (e:Entreprise)<-[:esteffectuedans]-(s:Stage)<-[c:commenter]-(u:Utilisateur)
    RETURN u.nom,s.sujet,c.commentaire,e.raisonSociale,e.tel,e.adresseEmail";
   

   

        $result = $client->run($query);
        $record=$result->getRecords();




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>IRISI-STAGE</title>
    <link rel="icon" href="../images/fav.png" type="image/png" sizes="16x16" />

    <link rel="stylesheet" href="../css/main.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/color.css" />
    <link rel="stylesheet" href="../css/responsive.css" />
</head>

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
        <!-- responsive header -->

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
        <!-- topbar -->

        <section>
            <div class="gap gray-bg">
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
                                                    <a href="index.php" title="">Home</a>
                                                </li>
                                                <li>
                                                    <i class="ti-user"></i>
                                                    <a href="profil.php" title="">Profil</a>
                                                </li>
                                                <li>
                                                    <i class="ti-archive"></i>
                                                    <a href="entreprise/index.php" title="">Entreprise</a>
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
                                <div class="col-lg-8" style="background-color:white;padding:0px;">
  <table class="table">
  <thead class="bg-primary" style="color:white;">
    <tr>
      <th scope="col">Lauréat</th>
      <th scope="col">Entreprise</th>
      <th scope="col">Sujet</th>
      <th scope="col">Commentaire</th>
    </tr>
  </thead>
  <tbody>
  <?php

foreach ($result->getRecords() as $record) {
    echo ' <tr>
    <td>'.$record->value("u.nom").'</td>
    <td>'.$record->value("e.raisonSociale").'</br>'.$record->value("e.tel").'</br>'.$record->value("e.adresseEmail").'</td>
    <td>'.$record->value("s.sujet").'</td>
    <td>'.$record->value("c.commentaire").'</td>

  </tr>';

}




  ?>
   
   
  </tbody>
</table>
                                                </div>
                                            </div>

                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <!-- centerl meta -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>


    </div>

    <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            document.getElementById('sp').style.display = 'block';

            var reader = new FileReader();
            var el = document.getElementById("myDIV");

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
            el.style.display = "none";

        }
    }
    </script>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/map-init.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
</body>

</html>