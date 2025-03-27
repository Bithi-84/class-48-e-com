


<!DOCTYPE html>
<html>
<head>
	@include('includes.style')

</head>
<body>
	@include('includes.header')

	<main>
        @yield('content')
    </main>

	
   @include('includes.footer')

	@include('includes.script')
	@stack('script')
</body>
</html>