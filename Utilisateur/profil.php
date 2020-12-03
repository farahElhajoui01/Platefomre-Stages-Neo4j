<?php
	require __DIR__.'../../vendor/autoload.php';

	use GraphAware\Neo4j\Client\ClientBuilder;

	$neo4j_url = "http://neo4j:slice-suppression-illustrations@54.87.207.158:32835";

    //session_start();
	//if(isset($_SESSION['username'] )){  
		$client = ClientBuilder::create()
			->addConnection('http', $neo4j_url)
			->build();

      //  $cond = "WHERE u.prénom = '" . $_SESSION['username'] ."'";
        $cypher_query = 'MATCH (u:Utilisateur {prénom:"Meriem"})
                        RETURN u.titre as titre, u.tel as tel, u.adresseEmail as mail, 
                        u.type as type,  u.nom as nom,u.adresse as adresse';
                        
        $result = $client->run($cypher_query);
        $record=$result->getRecord();
     

        $queryST = 'Match (e:Entreprise)<-[:esteffectuedans]-(s:Stage)<-[c:commenter]-(u:Utilisateur {prénom:"Meriem"})
        RETURN s.sujet as sujet, s.titre as titre, s.dateDebut as dateDebut, s.dateFin as dateFin, e.raisonSociale as raisonSociale';
        $resultST = $client->run($queryST);
        $values = $resultST->getRecords();

        $queryEMP = 'Match (e:Entreprise)<-[:esteffectuedans]-(p:Profession)<-[:effectue]-(u:Utilisateur {prénom:"Meriem"})
        RETURN p.titre as titre,  p.dateDebut as dd, p.dateFin as df, e.raisonSociale as rs';
        $resultEMP = $client->run($queryEMP);

   
   // }

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

    <link rel="stylesheet" href="../css/main.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/color.css">
    <link rel="stylesheet" href="../css/responsive.css">

</head>

<body>

    <div class="theme-layout">

        <div class="responsive-header">
            <div class="mh-head first Sticky">
                <span class="mh-btns-left">
                    <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                </span>
                <span class="mh-text">
                    <a href="newsfeed.html" title="">IRISI-STAGES</a>
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
            <nav id="menu" class="res-menu">
                <ul>
                    <li><span><a href="index.php" title="">Acceuil</a> </span></li>
                    <li><span><a href="entreprise/index.php" title="">Entreprises</a> </span></li>
                    <li><span><a href="index.php" title="">Stages</a> </span></li>
                    </li>





                    <li><span>Portfolio</span>
                        <ul>
                            <li><a href="portfolio-2colm.html" title="">Portfolio 2col</a></li>
                            <li><a href="portfolio-3colm.html" title="">Portfolio 3col</a></li>
                            <li><a href="portfolio-4colm.html" title="">Portfolio 4col</a></li>
                        </ul>
                    </li>
                    <li><span>Support & Help</span>
                        <ul>
                            <li><a href="support-and-help.html" title="">Support & Help</a></li>
                            <li><a href="support-and-help-detail.html" title="">Support & Help Detail</a></li>
                            <li><a href="support-and-help-search-result.html" title="">Support & Help Search Result</a>
                            </li>
                        </ul>
                    </li>
                    <li><span>More pages</span>
                        <ul>
                            <li><a href="careers.html" title="">Careers</a></li>
                            <li><a href="career-detail.html" title="">Career Detail</a></li>
                            <li><a href="404.html" title="">404 error page</a></li>
                            <li><a href="404-2.html" title="">404 Style2</a></li>
                            <li><a href="faq.html" title="">faq's page</a></li>
                            <li><a href="insights.html" title="">insights</a></li>
                            <li><a href="knowledge-base.html" title="">knowledge base</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html" title="">about</a></li>
                    <li><a href="about-company.html" title="">About Us2</a></li>
                    <li><a href="contact.html" title="">contact</a></li>
                    <li><a href="contact-branches.html" title="">Contact Us2</a></li>
                    <li><a href="widgets.html" title="">Widgts</a></li>
                </ul>
            </nav>
            <nav id="shoppingbag">
                <div>
                    <div class="">
                        <form method="post">
                            <div class="setting-row">
                                <span>use night mode</span>
                                <input type="checkbox" id="nightmode" />
                                <label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notifications</span>
                                <input type="checkbox" id="switch2" />
                                <label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notification sound</span>
                                <input type="checkbox" id="switch3" />
                                <label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>My profile</span>
                                <input type="checkbox" id="switch4" />
                                <label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show profile</span>
                                <input type="checkbox" id="switch5" />
                                <label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                        <h4 class="panel-title">Account Setting</h4>
                        <form method="post">
                            <div class="setting-row">
                                <span>Sub users</span>
                                <input type="checkbox" id="switch6" />
                                <label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>personal account</span>
                                <input type="checkbox" id="switch7" />
                                <label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Business account</span>
                                <input type="checkbox" id="switch8" />
                                <label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show me online</span>
                                <input type="checkbox" id="switch9" />
                                <label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Delete history</span>
                                <input type="checkbox" id="switch10" />
                                <label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Expose author name</span>
                                <input type="checkbox" id="switch11" />
                                <label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div><!-- responsive header -->

        <div class="topbar stick" style="paddin-left:0%;">
            <div class="logo">
                <H5 style="font-weight:600px"><a title="" href="newsfeed.html">IRISI-STAGE</a>
                    <H5>
            </div>

            <div class="top-area">
                <ul class="main-menu">
                    <li>
                        <a href="index.php" title="">Acceuil</a>
                    </li>
                    <li>
                        <a href="entreprise/index.php" title="">Entreprises</a>
                    </li>
                    <li>
                        <a href="#" title="">Profil</a>
                    </li>
                </ul>
                <span class="ti-menu main-menu" data-ripple=""></span>
            </div>
        </div><!-- topbar -->

        <section>
            <div class="feature-photo">
                <figure><img src="../images/resources/couverture.jpg" style="height: 350px;" alt=""></figure>
                <div class="add-btn" style="margin-right: 17%;">

                    <a href="ajout-profession.html" title="" data-ripple=""
                        style="background-color: white;color: #088dcd;">Ajouter une nouvelle profession </a>
                </div>
                <div class="add-btn">

                    <a href="ajout-stage.php" title="" data-ripple="">Ajouter un nouveau stage </a>
                </div>


                <div class="container-fluid">
                    <div class="row merged">
                        <div class="col-lg-2 col-sm-3">
                            <div class="user-avatar">
                                <figure>
                                    <img src="../images/users/users_photo11.jpg" alt="">
                                    <form class="edit-phto" action="" method="post" enctype="multipart/form-data">
                                        <i class="fa fa-camera-retro"></i>
                                        <label class="fileContainer">
                                            Choisissez une autre
                                            <input type="file" name='imageprofil' />
                                        </label>
                                        <input type="submit" value="Valider" />

                                    </form>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-9" style="padding-top:1%">
                            <div class="timeline-info" style="padding-left:0%">
                                <div class="admin-name" style="margin-left:30%;">
                                    <?php 
                                    
                                    foreach ($result->getRecords() as $record) {
                                    echo "<h5>".$record->value("nom") ." ". 
                                                 
                                                $record->value("titre")."</h5>";
                                    }
                                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- top area -->

        <section>
            <div class="gap gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row" id="page-contents">
                                <div class="col-lg-3">
                                    <aside class="sidebar static">
                                        <!-- recent photos-->
                                        <div class="widget stick-widget">
                                            <h4 class="widget-title">Informations</h4>
                                            <ul class="naves" style="padding:3%">
                                                <li>
                                                    <i class="ti-email"></i>
                                                    <a title="" href="#"><?php echo $record->value("mail") ?></a>
                                                </li>
                                                <li>
                                                    <i class="ti-mobile"></i>
                                                    <a title="" href="#"><?php echo $record->value("tel") ?></a>
                                                </li>
                                                <li>
                                                    <i class="ti-map-alt"></i>
                                                    <a title="" href="#"><?php echo $record->value("adresse") ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div><!-- sidebar -->
                                <div class="col-lg-8">
                                    <div class="central-meta">
                                        <div class="editing-interest">
                                            <h5 class="f-title"><i class="ti-files"></i>Experiences Professionnelles
                                            </h5>
                                            <div class="notification-box">
                                                <ul>
                                                <?php
                                                    foreach ($resultST->getRecords() as $records) {
                                                        echo '<li>
                                                                <figure>
                                                                    <img src="../images/resources/internship.png" style="width:40px" alt="">
                                                                </figure>
                                                                <div class="notifi-meta">
                                                                    <b>
                                                                        <p>'.
                                                                            $records->value("titre")
                                                                        .'</p>
                                                                    </b>
                                                                    <span>De'.
                                                                        $records->value("dateDebut")
                                                                        ." Jusqu'à ".
                                                                        $records->value("dateFin")
                                                                    .'</span>
                                                                    <p>'.
                                                                        $records->value("sujet")
                                                                    .'</p>
                                                                    <p>'.
                                                                        $records->value("raisonSociale")
                                                                    .'</p>
                                                                </div>
                                                                <a href="" onclick="" class="deletebtn">
                                                                    <i class="del fa fa-close" id="deleteitems"></i>
                                                                </a>
                                                            </li>';
                                                    }
                                                    foreach ($resultEMP->getRecords() as $records) {
                                                        echo '<li>
                                                                <figure>
                                                                    <img src="../images/resources/job.png" style="width:40px" alt="">
                                                                </figure>
                                                                <div class="notifi-meta">
                                                                    <b>
                                                                        <p>'.
                                                                            $records->value("titre")
                                                                        .'</p>
                                                                    </b>
                                                                    <span>De'.
                                                                        $records->value("dd")
                                                                        ." Jusqu'à ".
                                                                        $records->value("df")
                                                                    .'</span>
                                                                    <p>'.
                                                                        $records->value("rs")
                                                                    .'</p>
                                                                </div>
                                                                <a href="" onclick="" class="deletebtn">
                                                                    <i class="del fa fa-close" id="deleteitems"></i>
                                                                </a>
                                                            </li>';
                                                    }
                                                ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- centerl meta -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer style="padding: 3%;">
            <div class="container" style="margin-left: -5%;">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <ul class="list-style">
                                <li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/"
                                        title="">facebook</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <ul class="list-style">
                                <li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en"
                                        title="">twitter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <ul class="list-style">
                                <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en"
                                        title="">instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer -->

    </div>
    <div class="side-panel">
        <h4 class="panel-title">General Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>use night mode</span>
                <input type="checkbox" id="nightmode1" />
                <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notifications</span>
                <input type="checkbox" id="switch22" />
                <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notification sound</span>
                <input type="checkbox" id="switch33" />
                <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>My profile</span>
                <input type="checkbox" id="switch44" />
                <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show profile</span>
                <input type="checkbox" id="switch55" />
                <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
        <h4 class="panel-title">Account Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>Sub users</span>
                <input type="checkbox" id="switch66" />
                <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>personal account</span>
                <input type="checkbox" id="switch77" />
                <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Business account</span>
                <input type="checkbox" id="switch88" />
                <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show me online</span>
                <input type="checkbox" id="switch99" />
                <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Delete history</span>
                <input type="checkbox" id="switch101" />
                <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Expose author name</span>
                <input type="checkbox" id="switch111" />
                <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
    </div><!-- side panel -->

    <script src="js/main.min.js"></script>
    <script src="js/script.js"></script>


</body>

</html>
