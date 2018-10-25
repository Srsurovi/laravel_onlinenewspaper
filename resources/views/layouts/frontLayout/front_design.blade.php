<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<title>Onlinenews </title>		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		
		<link type="text/css" rel="stylesheet" href="{{ asset('css/frondend_css/bootstrap.min.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{ asset('css/frondend_css/owl.carousel.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{ asset('css/frondend_css/owl.theme.default.css')}}" />	
		<link rel="stylesheet" href="{{ asset('css/frondend_css/font-awesome.min.css')}}">
		<link type="text/css" rel="stylesheet" href="{{ asset('css/frondend_css/style.css')}}"/>		
    </head>
    <body>
   
    @include('layouts.frontLayout.front_hearder')

   	@yield('content')

    @include('layouts.frontLayout.front_footer')
 	

    <script src="{{ asset('js/jquery.min.js')}}"></script>
		<script src="{{ asset('js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{ asset('js/main.js')}}"></script>
    </body>
    </html>