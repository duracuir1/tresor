<?php include '../FR/sendemail.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../FR/assets/ico/favicon.ico">

    <title>Contacts | Trésor Hotel</title>

    <!-- CSS Plugins -->
    <link href="../FR/assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">

    <!-- CSS Global -->
    <!--build:css assets/css/theme.min.css-->
    <link rel="stylesheet" href="../FR/assets/css/theme.css">
    <!--endbuild-->

</head>

<body>

    <!-- Info Section
    ================================================== -->
    <div class="section__info">
        <div class="container">
            <div class="section_info__body">
                <div class="info__column-left">
                    <div class="section_info__contact hidden-xs">
                        <p>
                            <i class="icon ion-android-pin"></i> PK8, Douala, Cameroun
                        </p>
                    </div>
                    <!-- .section_info__contact -->
                    <div class="section_info__contact hidden-xs">
                        <p>
                            <i class="icon ion-android-call"></i> (+237)233-371-825 | 233-371-826
                        </p>
                    </div>
                    <!-- .section_info__contact -->
                </div>
                <!-- .info__column-left -->
                <div class="info__column-right">
                    <ul class="social__icons">
                        <li class="social-icons__item"><a href="#"><i class="icon ion-social-twitter" aria-hidden="true"></i></a></li>
                        <li class="social-icons__item"><a href="#"><i class="icon ion-social-facebook" aria-hidden="true"></i></a></li>
                        <li class="social-icons__item"><a href="#"><i class="icon ion-social-googleplus" aria-hidden="true"></i></a></li>
                    </ul>
                    <!-- .social__icons -->
                    <div class="dropdown lang-menu">
                        <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                En
                <i class="icon ion-chevron-down"><a href="../EN/contact.html"></a></i>
              </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <!-- <li><a href="#">Fr</a></li> -->
                            <!-- <li><a href="#">Es</a></li> -->
                            <!-- <li><a href="#">Ru</a></li> -->
                        </ul>
                    </div>
                    <!-- .lang-menu -->
                    <form class="search-form hidden-xs" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default btn-search"><i class="icon ion-search"></i></button>
                    </form>
                    <!-- .search-form -->

                </div>
                <!-- .info__column-right -->
            </div>
            <!-- .section_info__body -->
        </div>
        <!-- .container -->
    </div>
    <!-- .section__info -->

    <!-- Navbar
    ================================================== -->
    <nav class="navbar navbar-default">
        <div class="container">

            <!-- Header -->
            <div class="navbar-header">

                <!-- Collapse toggle -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar__collapse" aria-expanded="false">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

                <!-- Logo -->
                <a class="navbar-brand" href="../index.html">
                    <h3 class="navbar-brand__logo">Trésor Hotel</h3>
                    <p class="navbar-brand__sublogo"></p>
                </a>

            </div>
            <!-- / .navbar-header -->

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbar__collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="../index.html">Accueil </a>
                    </li>
                    <li><a href="../FR/about.html">A propos de nous</a></li>
                    <li>
                        <a href="../FR/rooms-1.html">Nos chambres</a>
                        <!-- <ul class="dropdown-menu">
                            <li><a href="../FR/rooms-1.html">Chambres 1</a></li>
                            <li><a href="/FR/rooms-2.html">Chambres 2</a></li>
                            <li><a href="../FR/room-detail.html">Détail chambre</a></li>
                        </ul> -->
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../FR/reservation.html">Réservation</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="icon ion-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="../FR/gallery-fullwidth.html">Notre Galérie</a></li>
                            <!-- <li><a href="../FR/gallery-boxed.html">Galérie réduite</a></li>
                            <li><a href="../FR/blog.html">Blog</a></li>
                            <li><a href="../FR/blog-item.html">Eléments du Blog</a></li> -->
                            <li><a href="../FR/404page.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="../FR/contacts.php">Contacts</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container -->
    </nav>


    <!-- CONTENT
      ================================================== -->

    <!-- section header -->
    <section class="section__header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="welcome__content">
                        <h2 class="welcome_content__title">Contactez nous</h2>

                        <!-- Breadcrumbs -->
                        <ol class="breadcrumb">
                            <li><a href="../index.html">Accueil</a></li>
                            <li class="active">Contact</li>
                        </ol>

                        <p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <!-- .welcome__content -->
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
        <div class="home__bg contacts__bg"></div>
    </section>
    <!-- / .section header -->

    <!-- section Contacts alt -->
    <section class="section__contacts-alt">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="subheading">Si vous avez une question n'hésitez pas de nous contacter.</h1>
                </div>
            </div>
            <!-- / .row -->
            <div class="row">
                <div class="col-sm-7">
                    <!--alert messages start-->
            <?php echo $alert; ?>
    <!--alert messages end-->
                    <div class="section-contacts__form_body">
                        <p class="section-contacts__title">Prendre contact</p>

                        <!-- Please carefully read the README file in order to setup the PHP contact form properly -->

                        <!-- Alert message -->
                        <div class="alert" id="form_message" role="alert"></div>
                        
        <form class="contacts__form" action="" method="post">

            <!-- Name -->
            <div class="form-group">
                <label for="name" class="sr-only">Nom</label>
                <input type="text" name="name" class="form-control" placeholder="Entrez votre nom" required>
                <span class="help-block"></span>
            </div>

            <!-- Name -->
            <div class="form-group">
                <label for="email" class="sr-only">Addresse mail</label>
                <input type="email" name="email" class="form-control" placeholder="Entrez votre addresse mail" required>
                <span class="help-block"></span>
            </div>

            <!-- Message -->
            <div class="form-group">
                <label for="message" class="sr-only">Message</label>
                <textarea name="message" class="form-control" id="message" rows="6" placeholder="Entrez votre message" required></textarea>
                <span class="help-block"></span>
            </div>

            <!-- Note -->
            <div class="form-group">
                                <small class="text-muted">
                    * Tous les champs sont obligatoires.
                  </small>
                            </div>

          <input type="submit" name="submit" class="btn btn-default" value="Envoyer le  Message">
        </form>
                        <!-- Form -->
                        
                        <!-- .contacts__form -->

                    </div>
                    <!-- / .section-contacts__form_body -->
                </div>
                <div class="col-sm-5">
                    <div class="contacts__info">
                        <p class="contacts_info__title">Information</p>
                        <ul class="contacts_info__content">
                            <li>
                                <p class="contact-info-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit eveniet repellat possimus.</p>
                            </li>
                            <li>
                                <i class="icon ion-android-pin"></i>
                                <div class="contact-info-content">
                                    <div class="title">Addresse</div>
                                    <div class="description">PK8, Douala, Cameroun</div>
                                </div>
                            </li>
                            <li>
                                <i class="icon ion-android-call"></i>
                                <div class="contact-info-content">
                                    <div class="title">Téléphone</div>
                                    <div class="description">(+237)243-385-046 | 243-385-047 | 233-371-825 | 233-371-826</div>
                                </div>
                            </li>
                            <li>
                                <i class="icon ion-android-mail"></i>
                                <div class="contact-info-content">
                                    <div class="title">E-mail</div>
                                    <div class="description">contact@tresor-hotel.com | reservation@tresor-hotel.com
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- / .contacts__info -->
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
        <div class="section_row">
            <div id="map1"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3979.8575086756996!2d9.7520961!3d4.049476!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610d08d96ac0b5%3A0xaeb2cc3ffb7c49d!2sTr%C3%A9sor%20Hotel!5e0!3m2!1sfr!2scm!4v1614525060785!5m2!1sfr!2scm"
                    width="1500" height="370" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        </div>
        <!-- / .section_row -->
    </section>
    <!-- / .section__contacts-alt -->

    <!-- section footer -->
    <footer class="section__footer">
        <div class="container">
            <div class="footer__body">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-sm-push-4 col-md-6 col-md-push-3">
                        <div class="footer__item">
                            <h2 class="brand__logo">Trésor Hotel</h2>
                            <p class="brand__sublogo"></p>
                            <ul class="social__icons">
                                <li class="social-icons__item"><a href="#"><i class="icon ion-social-twitter" aria-hidden="true"></i></a></li>
                                <li class="social-icons__item"><a href="#"><i class="icon ion-social-facebook" aria-hidden="true"></i></a></li>
                                <li class="social-icons__item"><a href="#"><i class="icon ion-social-googleplus" aria-hidden="true"></i></a></li>
                            </ul>
                            <!-- .social__icons -->
                        </div>
                        <!-- .footer__item -->
                    </div>
                    <div class="col-xs-12 col-sm-4 col-sm-pull-4 col-md-3 col-md-pull-6">
                        <div class="footer__item">
                            <ul class="footer__links">
                                <li><a href="#">A propos</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Politique de confidentialité</a></li>
                                <li><a href="#">Termes & Conditions</a></li>
                            </ul>
                            <!-- .footer__links -->
                        </div>
                        <!-- .footer__item -->
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="footer__item">
                            <h3 class="newsletter__title">Bulletin d'information</h3>
                            <p class="newsletter__subtitle">Inscrivez-vous à notre bulletin d'information électronique pour recevoir des mises à jour et des nouvelles.</p>

                            <!-- Newsletter form -->
                            <div id="mc_embed_signup">
                                <form class="newsletter__form validate" action="//themeforest.us16.list-manage.com/subscribe/post-json?u=3c9679e26b601e1a87122b12f&id=e4b9351526&c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                                    <div id="mc_embed_signup_scroll">
                                        <div class="mc-field-group form-group">
                                            <label for="mce-EMAIL" class="sr-only">Addresse mail</label>
                                            <input type="email" value="" name="EMAIL" class="required email form-control newsletter_input" id="mce-EMAIL" placeholder="Email address">
                                        </div>
                                        <div id="mce-responses" class="clear">
                                            <div class="response"></div>
                                            <div class="response" id="mce-success-response"></div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div aria-hidden="true" id="mce-hidden-input">
                                            <input type="text" name="b_507744bbfd1cc2879036c7780_4523d25e1b" tabindex="-1" value="">
                                        </div>
                                        <div class="clear">
                                            <button type="submit" class="btn btn-default btn-newsletter" id="mc-embedded-subscribe">
                          <i class="icon ion-paper-airplane"></i>
                        </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- #mc_embed_signup -->

                        </div>
                        <!-- .footer__item -->
                    </div>
                </div>
                <!-- / .row -->
            </div>
            <!-- / .footer__body -->
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-xs-12">
                        <hr>
                        <p class="footer_copyright__text">&#169; 2021 Trésor Hotel. Tous droits réservés.</p>
                    </div>
                </div>
                <!-- / .row -->
            </div>
            <!-- / .footer__copyright -->

        </div>
        <!-- / .container -->
    </footer>
    <!-- .section__footer -->

    <!-- Scripts -->
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
    ================================================== 

    <!-- JS Global -->
    <script src="../FR/assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="../FR/assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Plugins -->
    <script src="../FR/assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="../FR/assets/plugins/contact/contact.js"></script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="../FR/assets/js/theme.js"></script>
    <!-- endbuild -->
    <script src="../FR/assets/js/google_maps.js"></script>

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTGnDWmYKPhKslCvPfkrcZDpgT_QMHT0s&callback=initMap" async defer></script>

</body>

</html>