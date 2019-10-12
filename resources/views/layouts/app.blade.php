<html>
	<head>
		<title> 我的应用</title>
	</head>
	<body>
	
		@section('sidebar')
			this is sidebar
		@show
		<div class='container'>
			@yield('content')
		</div>
	</body>

</html>
