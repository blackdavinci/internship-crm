
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon/favicon.ico">

    <title>CRM FTZ</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Bootstrap Vertical Tabs CSS -->
	<link rel="stylesheet" href="css/bootstrap.vertical-tabs.css">
	
	<!-- Google font link -->
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
	<link href="cs/sticky-footer-navbar.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid" id="navigation-one">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <a class="navbar-brand" href="#">
			<img alt="Brand" src="img/logo.png" id="logo">
		  </a>
          <a class="navbar-brand" href="#" id="project-name">CRM FTZ</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
		  <ul class="nav navbar-nav navbar-left visible-xs">
			<li class="dropdown-header">Menu</li>
			<li><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Accueil</a></li>
			<li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Contact</a> </li>
			<li><a href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Notes</a></li>
			<li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Agenda</a></li>
			<li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Gestion commerciale</a></li>
			<li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Rapports</a> </li>
		  </ul>
		
          <ul class="nav navbar-nav navbar-right">
			<li class="nav-divider "></li>
			<li class="dropdown-header visible-xs">Paramètre & Autres</li>
            <li><a href="../navbar/"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></a></li>
            <li><a href="../navbar-static-top/"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></a></li>
			<li class="dropdown">	
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="avatar">
					<!-- <span class="glyphicon glyphicon-user" aria-hidden="true"></span> -->
					<img class="img-circle "alt="profile" src="img/bibi.jpg" >
					<span class="caret"></span>
				</a> 
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li><a href="#">Separated link</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>  Déconnexion</a></li>
				</ul>
            </li>
			
          </ul>
		  <form class="navbar-form navbar-right">
				<input type="text" class="form-control" placeholder="Recherche...">
		  </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<br/>
	
    <div class="container-fluid" id="main-frame">
		<br/>
      <!-- tabs left -->
	  
		<div class="row">
			<div  class="col-xs-12" >
				<div class="col-sm-3 col-md-2 sidebar hidden-xs" id="contour_tabs"> <!-- required for floating -->
				  <!-- Nav tabs -->
				  
				  <ul class="nav nav-tabs tabs-left">
					<li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Accueil</a></li>
					<li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Contact</a></li>
					<li><a href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>Notes</a></li>
					<li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>Agenda</a></li>
					<li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Gestion commerciale</a></li>
					<li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>Rapport</a></li>
				  </ul>
				</div>

				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="container_tab_pane" >
				  <!-- Tab panes -->
				  <div class="tab-content" >
					<div class="tab-pane active" id="home">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="titre_cadre">Accueil</h3> 
								 <div class="starter-template">
									<h1>Bootstrap starter template</h1>
									<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
								  </div>
                                <p>
                                    is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                    the industry's standard dummy text ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book.
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
                                </p>
                            </div>
                        </div>
                    </div>
					<div class="tab-pane" id="profile">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="titre_cadre">Contact</h3> 
                                <p>
                                    is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                    the industry's standard dummy text ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div>
                    </div>
					<div class="tab-pane" id="profile">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>
                                    Tab Two</h3>
                                <p>
                                    is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                    the industry's standard dummy text ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div>
                    </div>
					<div class="tab-pane" id="profile">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>
                                    Tab Two</h3>
                                <p>
                                    is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                    the industry's standard dummy text ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div>
                    </div>
					<div class="tab-pane" id="profile">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>
                                    Tab Two</h3>
                                <p>
                                    is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                    the industry's standard dummy text ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div>
                    </div>
					
				  </div>
				</div>

				<div class="clearfix"></div>

			</div>

			<div class="clearfix"></div>
		</div>
		
      <!-- /tabs -->     
    
     </div><!-- /.container -->
	<div class="clearfix"></div>
	<footer class="footer">
      <div class="container">
        <ul>
			<li><a href="#">Conditions générales</a></li>
			<li><a href="#">Conditions générales</a></li>
			<li><a href="#">Conditions générales</a></li>
		</ul>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/customjs.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
