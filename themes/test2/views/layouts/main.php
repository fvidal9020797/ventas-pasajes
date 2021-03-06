<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">
  </head>
  <body>

<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">Venta de pasajes</a>

  
<?php 
$this->widget('zii.widgets.CMenu',array(
			'htmlOptions'=>array("class"=>"nav"),
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Administrador', 'url'=>array('/administrador')),
				array('label'=>'Clientes', 'url'=>array('/cliente')),
				array('label'=>'Origen y Destino', 'url'=>array('/origenDestino')),
				array('label'=>'Boletos', 'url'=>array('/boleto')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				//using 
			),
		)); ?>		
      </div><!--/.nav-collapse -->

    </div>
  </div>
</div>
<div class="container">
	<div class="row-fluid">
		<div class="span12">
		<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
		<?php endif?>
		</div>
	</div>
</div>

<?php echo $content;?>
  
<footer class="footer bg-ft clearfix pd4">
    <div class="container">
        <!--footer container-->
        <div class="row-fluid">
            <div class="span3">
                <section>
                    <h4><span>Contact Us</span></h4>
                    <p>Name Contact<br>
                       Country
                        <br>
                        <strong>phone:</strong> <a href="tel:123456789" class="tele">123456789</a><br>
                        <strong>fax:</strong> 123456789<br>
                        <span class="overflow"><strong>email:</strong> <a href="mailto:email@domain.com">email@domain.com</a></span> </p>
                </section>
                <!--close section-->

                <section>
                    <h4><span>Follow Us</span></h4>
                    <div class="social">
                      <a href="#"><i class="icon-facebook facebook"></i></a>
                      <a href="#"><i class="icon-twitter twitter"></i></a>
                      <a href="#"><i class="icon-linkedin linkedin"></i></a>
                      <a href="#"><i class="icon-google-plus google-plus"></i></a>
                    </div>
                </section>
                <!--close section-->
            </div>
            <!-- close .span3 -->

            <!--section containing newsletter signup and recent images-->
            <div class="span5">
                <section>
                    <h4><span>Stay Updated</span></h4>
                    <p>Welcome to ArgoUML.</p>
                        <form action="#" method="post">
                    <div class="input-append append-fix custom-append row-fluid">
                      <input type="email" class="span8" placeholder="Email Address" name="email">
                            <button class="btn btn-primary">Sign Up</button>
                    </div></form>
                    <!--close input-append-->
                </section>
                <!--close section-->
            </div>
            <!-- close .span5 -->

            <!--section containing blog posts-->
            <div class="span4">
                <section>
                    <h4><span>About Us</span></h4>
                    <p>
                      Tigris.org is a mid-sized open source community focused on building better tools for collaborative software development.
						You will not find thousands of unrelated projects here: every project fits into the Tigris mission.
						You will not find dead projects here: every project is welcomed into the community with a commitment to see it through and active developers cycle among related projects.
						Tigris.org is hosted by CollabNet, but the Tigris mission is one for the entire open source movement and one that has attracted senior open source developers from many organizations.
                    </p>
                </section>
            </div>
            <!-- close .span4 -->
        </div>
        <!-- close .row-fluid-->
    </div>
    <!-- close footer .container-->
</footer>


 <section class="footer-credits">
    <div class="container">
        <ul class="clearfix">
            <li>© 2013 Your Company Name. All rights reserved.</li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
    </div>
    <!--close footer-credits container-->
</section>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
