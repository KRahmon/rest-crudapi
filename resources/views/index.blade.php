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
 #indexWelcome li {
    margin-top: 2em;
    font-size: 1.2em;
  }
  
   #indexWelcome h1 {
    margin-top: 1em;
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
