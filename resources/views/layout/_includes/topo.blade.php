<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">

	<title> @yield('titulo') </title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Import materialize.css-->
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<style>
		body {
			font-size: 1.2em;
			background: #F5F5F5;

			}

			.nav-wrapper{
				background: #008CC7;
			}

			.footer {
				background: #283E4A;
			}

		.container{
			
			padding: 20px;
			margin-top:  20px;
		}

		h1,h2,h3,h4{
			
			font-weight: lighter;
			color: #666666;
			text-indent: 5px;
			border-bottom: 2px solid #000000;
			
		}
	</style>

</head>

<body>

	<header>
		<nav>
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo">LAVAUTOS</a>
				<a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					
					<li><a href="/">Início</a></li>
					
					
					@if(Auth::guest())

					<li><a href="{{route('site.login')}}" title="Login"> <i class="material-icons">lock</i></a></li> 

					@else

					<li><a href="{{route('admin.cursos')}}">Cursos</a></li> 

					<li><a href="#">Bem vindo , {{Auth::user()->name}} </a></li>

					<li><a href="{{route('site.login.sair')}}"><i class="material-icons">exit_to_app</i></a></li>

					@endif
					
				</ul>
			</div>
		</nav>


		<ul class="sidenav" id="mobile">

					<li><a href="/" class="waves-effect waves-purple"><i class="material-icons">home</i>Início</a></li>
					
					
					@if(Auth::guest())

					<li><a class="waves-effect waves-purple" href="{{route('site.login')}}" title="Login"> <i class="material-icons">lock</i>Login</a></li>

					@else

					<li><a href="{{route('admin.cursos')}}"><i class="material-icons">description</i>Cursos</a></li> 

					<li><a class="waves-effect waves-purple" href="#"><i class="material-icons">person</i> Bem vindo , {{Auth::user()->name}} </a></li>

					<li><a class="waves-effect waves-purple" href="{{route('site.login.sair')}}"><i class="material-icons">exit_to_app</i> Sair</a></li>

					@endif
			<!-- 
			<li><a href="/" class="waves-effect waves-purple"><i class="material-icons">home</i>Início</a></li>
						
			<li><hr></li>
			
			<li><a href="{{route('site.login')}}" class="waves-effect waves-purple"><i class="material-icons">lock</i>Login</a></li>
-->

		</ul>

		
	</header>

