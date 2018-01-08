<!DOCTYPE HTML>
<html>
<head>
	@include('layouts/header')
</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
		@include('layouts/left_menu')
		<!-- left side end-->
    
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
    		@include('layouts/menu_top')
    		<!-- //header-ends -->
			<div id="page-wrapper">
				@yield('content')
			<!--body wrapper start-->
			</div>
			 <!--body wrapper end-->
		</div>
        <!--footer section start-->
			<footer>
			   <p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
    <script src="{{ asset('public/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('public/js/scripts.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
   <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
</body>
</html>