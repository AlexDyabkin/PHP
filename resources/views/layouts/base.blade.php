<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Introduction to Responsive Web Design</title>
	
	<meta name="viewport" content="width=device-width">
	
	<!-- css -->
	<link rel="stylesheet" href="public\css\main.css">
	<link rel="stylesheet" href="public\css\responsive.css" media="screen and (max-width: 900px)">
	
</head>
<body>

	<!-- header -->
	<div class="header"><div class="section-inner">
		<h1>Example Header</h1>
	</div></div><!--/header-->
	<div>@if(!Auth::user())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
</div>
	<!-- nav -->
	<div class="nav"><div class="section-inner">
		<ul class="clearfix">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Sample Link 1</a></li>
			<li><a href="#">Sample Link 2</a></li>
			<li><a href="#">Sample Link 3</a></li>
			<li><a href="#">Sample Link 4</a></li>
			<li><a href="#">Portfolio</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div></div><!--/nav-->
	
	<!-- body-content -->
	<div class="body-content"><div class="section-inner">
		
		<!-- thirds -->
		<div class="thirds clearfix">
			
			<!-- one-third -->
			@yield('content')
		
			
			<!-- one-third -->
			<div class="one-third one-third-second mobile-collapse">
				<img src="images/2.jpg" alt="A bird eating" />
				<h2>Section Two</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div><!--/one-third-->
			
			<!-- one-third -->
			<div class="one-third one-third-last mobile-collapse">
				<img src="images/3.jpg" alt="A cat" />
				<h2>Section Three</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div><!--/one-third-->
			
		</div><!--/thirds-->
		
		<!-- two-columns -->
		<div class="two-columns clearfix">
			
			<!-- main -->
			<div class="main mobile-collapse">
				
				<h2>Primary Content Section</h2>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
			</div><!--/main-->
			
			<!-- side -->
			<div class="side mobile-collapse">
				
				<!-- info-box -->
				<div class="info-box-a">
					<h4>Important Content</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div><!--/info-box-->
				
				<!-- info-box -->
				<div class="info-box-b hide-mobile">
					<h4>Not Vital</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div><!--/info-box-->
				
				<!-- info-box -->
				<div class="info-box-b hide-mobile">
					<h4>Not Vital</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div><!--/info-box-->
				
			</div><!--/side-->
			
		</div><!--/two-columns-->
		
	</div></div><!--/body-content-->
	
	<!-- footer -->
	<div class="footer"><div class="section-inner">
		
		<p>Footer text placed here.</p>
		
	</div></div><!--/footer-->

	
	
	
	
</body>
</html>