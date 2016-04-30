<!DOCTYPE html>
<html>
<head> 
	<title> {!! $title !!}</title>
	<meta charset="utf-8">
 </head>
 <body>
 	@include('layout.header')
 	@yield('content')
 	@include('layout.footer')

 </body>
</html>