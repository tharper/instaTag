<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		ul.grid {list-style: none; margin-left: -2.5%;}
		ul.grid li {
		    display: inline-block;
		    padding: 10px;
		    background: #fff;
		    border: 1px solid #ddd;
		    margin: 0 0 2.5% 2.5%;
		    font-size: 14px;
		    font-size: 1rem;
		    vertical-align: top;
		    box-shadow: 0 0 5px #ddd;
		    box-sizing: border-box;
		    -moz-box-sizing: border-box;
		    -webkit-box-sizing: border-box;
		    position: relative;
		    z-index: 90;
		}
		ul.grid li img {
		    max-width: 100%;
		    height: auto;
		    margin: 0 0 10px;
		}
		ul.grid li h3 {
		    text-align: center;
		    font-size: 12px;
		}
		ul.grid li h3 a {
		    text-decoration: none;
		    color: #666;
		}
	</style>
</head>
<body>
	<div class="container">
	@yield('content')
	</div>
	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>
