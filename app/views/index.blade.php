<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ACTIPANION">
    <meta name="author" content="www.actpanion.com">

    <title>ACTPANION</title>

    <!-- Bootstrap -->
    <link href="{{ url('assets/coming/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ url('assets/coming/css/bootstrap-theme.css') }}" rel="stylesheet">

    <!-- siimple style -->
    <link href="{{ url('assets/coming/css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<h1>ACTPANION</h1>
					<h2 class="subtitle">We're working hard to improve our website and we'll ready to launch after</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
						<p class="copyright">Copyright &copy; 2016. Al rights reserved. <a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste</p>
                        <!--
                            All links in the footer should remain intact.
                            Licenseing information is available at: http://bootstraptaste.com/license/
                            You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=WeBuild
                        -->
				</div>
			</div>
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="{{ url('assets/coming/js/bootstrap.min.js') }} "></script>
	<script src="{{ url('assets/coming/js/jquery.countdown.min.js') }} "></script>
	<script type="text/javascript">
  $('#countdown').countdown('2015/01/01', function(event) {
    $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
  });
</script>
  </body>
</html>
