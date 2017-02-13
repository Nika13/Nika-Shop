<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
	@section('styles')
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	
	<link rel="stylesheet" href="{{asset('media/css/main.css')}}"/>
	<link href="/js/jquery.js" type="text/javascript">
 
  
	@show
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
 
    </script>
	
	
	

</head>
<body>

    <script>
		function getCookie(name) {
		  var regexp = new RegExp("(?:^" + name + "|;\s*"+ name + ")=(.*?)(?:;|$)", "g");
		  var result = regexp.exec(document.cookie);
		  return (result === null) ? null : result[1];
		}

		  if(getCookie("cookie_bg") === "bg1" || getCookie("cookie_bg") === null) {  
		document.body.style.backgroundImage = "url('../../media/img/1.jpg')";
		  };  
		  if(getCookie("cookie_bg") === "bg2") {  
		document.body.style.backgroundImage = 'url(../../media/img/bg.jpg)';
		  };  
    </script>
	
	<div class="fix_bg_change" title="Выбор фона">  
  <img class="bg_set1" src="../../media/img/1.jpg" width="40px"> 
  <img class="bg_set2" src="../../media/img/bg.jpg" width="40px"> 
  </div> 
  


<!--  <body style="background:url({{$bg}})">  -->
	<a href="{{$ads_url}}" target="_blank" class="ads" style="background-image: url({{$bg}}) !important;"></a>  
    <div id="app">

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a href='/' class='navbar-brand' >
					   Главная
					</a>
					<a href={{asset('contact')}} class='navbar-brand' >
					   Контакт
					</a>
				@if (Auth::user())
					<a href={{asset('login')}} class='navbar-brand' >
					   Добавить
					</a>
					@endif
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
									
							
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
	
	
	<script>
		$('.bg_set1').click(function() {  
		 document.cookie = "cookie_bg=bg1";  
		  $('body').css('background-image', 'url("../../media/img/1.jpg")');  
		  $('.bg_set1').css('border', '2px solid #3cce3a');   
		  $('.bg_set2').css('border', '2px solid #fff');   
		  });  
		  $('.bg_set2').click(function() {  
			document.cookie = "cookie_bg=bg2";
		  $('body').css('background-image', 'url("../../media/img/bg.jpg")'); 
		  $('.bg_set2').css('border', '2px solid #3cce3a');   
		  $('.bg_set1').css('border', '2px solid #fff');    
		  }); 
		  
		  
			if(getCookie("cookie_bg") === "bg1" || getCookie("cookie_bg") === null) {  
			
		  $('.bg_set1').css('border', '2px solid #3cce3a');   
		  $('.bg_set2').css('border', '2px solid #fff');   
		  };  
		  if(getCookie("cookie_bg") === "bg2") {  
		  $('.bg_set2').css('border', '2px solid #3cce3a');   
		  $('.bg_set1').css('border', '2px solid #fff');  
		  }; 
		  
		  
		  $('.ads').click(function(){
			  $('.ads').css('display', 'none');  
		  });
		  
    </script>
	
	
</body>
</html>
