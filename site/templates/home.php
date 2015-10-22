<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?=$pages->get("/settings/")->site_meta_description;?>">
    <meta name="keywords" content="<?=$pages->get("/settings/")->site_meta_keywords;?>">
    <meta name="author" content="<?=$pages->get("/settings/")->site_author;?>">
    <link rel="icon" href="../../favicon.ico">

    <title><?=$pages->get("/settings/")->site_title;?> | <?=$pages->get("/settings/")->site_intro;?></title>

     <link href="<?php echo $config->urls->templates?>styles/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $config->urls->templates?>styles/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 <!-- Add fancyBox -->
    <link rel="stylesheet" href="<?=$config->urls->templates?>fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    
<!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="<?=$config->urls->templates?>fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><?=$pages->get("/settings/")->site_title;?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Υπηρεσιες</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Προϊοντα</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Σχετικα</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Επικοινωνια</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><?=$pages->get("/settings/")->site_intro;?></div>
                <div class="intro-heading"><?=$pages->get("/settings/")->site_intro_heading;?></div>
                <!-- <a href="#services" class="page-scroll btn btn-xl"></a></div>-->
            
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Υπηρεσιες</h2>
                    <h3 class="section-subheading text-muted">Στη διαθεσή σας με ένα τηλεφώνημα.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Industrial Woods</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-server fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Παλέτες</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Καυσόξυλα - Πέλετ</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Προϊοντα</h2>
                    <h3 class="section-subheading text-muted">Όλα τα προϊόντα & οι υπηρεσίες μας.</h3>
                </div>
            </div>
            <div class="row">
                <?php
		$products = $pages->find("template=product, sort=sort");
		foreach($products as $product){
                echo "<div class='col-md-4 col-sm-6 portfolio-item'>";
                echo     "<a href='#portfolioModal$product->id' class='portfolio-link' data-toggle='modal'>";
                echo        "<div class='portfolio-hover'>";
                echo            "<div class='portfolio-hover-content'>";
                echo                 "<i class='fa fa-plus fa-3x'></i>";
                echo            "</div>";
                echo         "</div>";
		$image=$product->product_image;
                echo        "<img src='$image->url' class='img-responsive' alt=''>";
                echo    "</a>";
               echo     "<div class='portfolio-caption'>";
                echo        "<h4>$product->title</h4>";
               echo         "<p class='text-muted'>$product->subtitle</p>";
              echo      "</div>";
             echo   "</div>";
}
?>
            </div>
        </div>
    </section>
    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                 <h2 class="section-heading"><?=$pages->get('/schetika/')->title;?></h2>
                 <h3 class="section-subheading text-muted"><?=$pages->get('/schetika/')->subtitle;?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo $config->urls->templates?>img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Θανάσης Βαϊτσης</h4>
                        <p class="text-muted">The One</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="<?=$pages->get('/schetika/')->twitter;?>"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="<?=$pages->get('/schetika/')->facebook;?>"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="<?=$pages->get('/schetika/')->linkedin;?>"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo $config->urls->templates?>img/team/map.jpg" class="img-responsive img-circle" alt="">
                        <h4>Διεύθυνση</h4>
                        <p class="text-muted"><?=$pages->get('/schetika/')->address;?>
                    </div>
                </div>
             </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted"><?=$pages->get('/schetika/')->body;?></p>
                </div>
            </div>
        </div>
    </section>

    
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Επικοινωνηστε μαζι μας</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Το 'Όνομα σας *" id="name" required data-validation-required-message="Το όνομα σας.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Το Email σας*" id="email" required data-validation-required-message="Το email σας.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Το Τηλέφωνο σας  *" id="phone" required data-validation-required-message="Το τηλέφωνό σας">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Το μήνυμα σας *" id="message" required data-validation-required-message="Το μήνυμα σας."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Αποστολη</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; paleta-vaitsis.gr <?php echo date("Y"); ?></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="<?=$pages->get('/schetika/')->twitter;?>"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="<?=$pages->get('/schetika/')->facebook;?>"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="<?=$pages->get('/schetika/')->linkedin;?>"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

  <?php
		$products = $pages->find("template=product, sort=sort");
		foreach($products as $product){
    echo "<div class='portfolio-modal modal fade' id='portfolioModal$product->id' tabindex='-1' role='dialog' aria-hidden='true'>";
        echo "<div class='modal-content'>";
            echo "<div class='close-modal' data-dismiss='modal'>";
                echo "<div class='lr'>";
                    echo "<div class='rl'>";
                     echo "</div>";
                 echo "</div>";
            echo "</div>";
           echo "<div class='container'>";
                echo "<div class='row'>";
                    echo "<div class='col-lg-8 col-lg-offset-2'>";
                        echo "<div class='modal-body'>";
                            
                            echo "<h2>$product->title</h2>";
                           echo "<p class='item-intro text-muted'>$product->subtitle</p>";
			$image=$product->product_image;
                            echo "<img class='img-responsive img-centered' src='$image->url' alt=''>";
                            echo "<p>$product->body</p>";
				 echo "<p>";
      				 $images = $product->image;
        			foreach($images as $image){
        			$thumb = $image->size(150,150);
        			echo "<a class='fancybox' rel='gallery$page->id' href='{$image->url}' ><img src='{$thumb->url}' style='margin:5px;' alt= /></a>";
        }                
        			 echo "</p>";
                            echo "<p>";
                          echo  "<button type='button' class='btn btn-primary' data-dismiss='modal'><i class='fa fa-times'></i>Εξοδος</button>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
   echo "</div>";
}
?>



    <!-- jQuery -->
    <script src="<?php echo $config->urls->templates?>scripts/jquery.js"></script>
    <script src="<?php echo $config->urls->templates?>scripts/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo $config->urls->templates?>scripts/classie.js"></script>
    <script src="<?php echo $config->urls->templates?>scripts/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo $config->urls->templates?>scripts/jqBootstrapValidation.js"></script>
    <script src="<?php echo $config->urls->templates?>scripts/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $config->urls->templates?>scripts/agency.js"></script>

<script type="text/javascript" src="<?=$config->urls->templates?>fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="<?=$config->urls->templates?>fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="<?=$config->urls->templates?>fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="<?=$config->urls->templates?>fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
  $(".fancybox").fancybox({
    openEffect  : 'none',
    closeEffect : 'none'
  });
});
</script>
</body>

</html>