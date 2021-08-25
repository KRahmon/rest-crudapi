<!DOCTYPE html>
<html>
<head>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Madoms Global Trade Nigeria Limited, info@mgtnigeria.com" />
<meta name="keywords" content="mgt, madoms, madoms global,madoms global trade, global trade, trade" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <link href="css/myglyphicons2.css" rel="stylesheet" />
<link href="css/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css"/>
<link href=" {{ URL::asset('css/main.css') }}" rel="stylesheet" media="screen, projection">

<title>Restful CrudAPi </title>

<style>

body {
  background-color: rgba(180,180,180,1);
}

body, header, section, article, aside, div, img, h1, h2, h3, h4, h5, h6, p, a, hr, ul, ol, li, table, tr, th, td, form, fieldset, legend, input
{
	color: black;
    margin: 0;
    padding: 0; 
}

#padder
{
	background-color: rgba(1, 19, 143, 1);
	color: rgba(250,250,250,1);
	clear: both;
	height: auto;
	min-height: 20px;
    padding: 0.2em 0em 0.2em 1em;
	width: 100%;
}

#padder p {
    color: rgba(250,250,250,1);
    margin-right: 1em;
}

#padder .right {
    clear:both;
    float: right;
}

#padder .container-fluid div[class*=col-] p a
{
	
	background-position: center center;
	background-repeat: no-repeat;
    background-size: 20px 20px;
    color: rgba(250,250,250,1);
	margin: 0em 0.1em;
	padding: 0.9em ;
	width: auto;
}

#padder .container-fluid div[class*=col-] p a#fb
{
	background-image: url('../images/fb_black.png');
}

#padder .container-fluid div[class*=col-] p a#fb:hover
{
	background-image: url('../images/fb_gray.png');
}

#padder .container-fluid div[class*=col-] p a#tw
{
	background-image: url('../images/twt_black.png');
}

#padder .container-fluid div[class*=col-] p a#tw:hover
{
	background-image: url('../images/twt_gray.png');
}

#padder .container-fluid div[class*=col-] p a#lin
{
	background-image: url('../images/ldin_black.png');
}

#padder .container-fluid div[class*=col-] p a#lin:hover
{
	background-image: url('../images/ldin_gray.png');
}

#nav
{
	background-color: rgba(255,255,255,1);
	border-bottom: 2px solid rgba(1,19,143,1);
	color: rgba(0, 0, 40, 1);
	height: auto;
	min-height: 80px;
	padding: 0em;
	position: sticky;
	top: 0em;
	margin: 0em;
	width: 100%;
	z-index: 10;
}

#navbarSupportedContent {
	margin-left: 0em;
	margin-top: 1.2em;
	width: 100%;
}

.navbar-brand {
	width: 100%;
}
.navbar-brand img {
	border-radius: 0.2em;
	float: left;
	margin: 0em 0.5em 0em 1.5em;
}

.navbar-brand h1 {
	color: rgba(1, 19, 143, 1);
	font-size: 2em;
	font-weight: bold;
}

.navbar-brand span {
	color: rgba(99, 140, 255, 1);
}

#navbarSupportedContent ul a {
	padding-left: 1em;
	margin-left: 2.5em;
}

 #indexWelcome li {
    margin-top: 2em;
    font-size: 1.2em;
  }
  
   #indexWelcome h1 {
    margin-top: 1em;
  }
  
footer {
	background-color: rgba(1, 19, 143, 1);
}

footer p {
	color: rgba(255, 255, 255, 0.7);
	margin-left: 1em; 
}

footer a {
	color: rgba(99, 140, 255, 1);
	font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
	font-weight: bold;
	margin-right: 1.5em; 
}
  
</style>
</head>

<body>

<div id="padder">
	<div class="container-fluid">
		<div class="row">
            <div class="col-9">
			<p>  <span class="glyphicon glyphicon-phone-alt"> Call Us: </span> +2347033716203 &nbsp; &nbsp;
			 <span class="glyphicon glyphicon-envelope"> Mail Us: </span> khaleelrahmon@gmail.com </p> 
		    </div>
		
		<div class="col-3">
			<p class="text-right">Connect with us: 
				<a href="#" id="fb" target="_blank" title="Like Our Page on facebook"></a>
				<a href="#" id="tw" target="_blank" title="Follow us on twitter"></a>
				<a href="#" id="lin" target="_blank" title="Follow us on linkedin"></a>
            </p>
        </div>
        </div>

	</div>
</div>

<nav id="nav" class="navbar navbar-expand-lg">
<div class="row" style="width:100%;"> 
  <div class="col-md-6" style="width:100%;">
<a class="navbar-brand" href="{{ URL::to('index') }}" >
  <img alt="CRUDApi" class="img-responsive" src="images/index.png" title="Rest CRUD-API" /> 
   <h1> Restful <span> CRUD </span> Api </h1> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>

 <div class="col-md-6">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ URL::to('index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="images/khaleelcv.pdf" target="_blank">About Khaleel Adedeji</a>
      </li>
     
    </ul>
    </div>
</div>
</nav>



<div id="indexWelcome">
	<div class="container-fluid">
		<div class="text-center col-md">
			<h1> Restful <span>CRUD API</span></h1>
          <ul> 
            <li> <a href="https://rest-crudapi.herokuapp.com/api/user" target="_blank">View Users </a> </li>
          <li> <a href="https://documenter.getpostman.com/view/17183561/TzzGGYfR#5d9ab385-ae55-4323-b063-3be04681066c" target="_blank"> API Documentation </a></li>
      </ul>
    </div>
    
   	</div>
</div>

<footer>
<div class="container-fluid">
  <div class="row">
	<div class="col-md-8">
		<p>&copy; 2021. All rights reserved Khaleel Adedeji</p>
	</div>

  <div class="col-md-4">
		<p class="text-right">Developed by: <a href="#g" target="_blank" title="Khaleel Rahmon Adedeji">Khaleel Adedeji</a></p>
    </div>
</div>

</div>

</footer>

</body>
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</html>
