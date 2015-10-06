<html>
	<head>
		<meta charset="UTF-8">
		<title>BlueZebra</title>
		<link href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css">
		{{ HTML::style('assets/css/custom_css/chandra.css') }}
		{{ HTML::style('assets/css/custom_css/metisMenu.css') }}
		{{ HTML::style('assets/css/custom_css/panel.css') }}
	</head>

	<body>
		<div class="col-sm-2">
		</div>
		<div class="panel panel-primary col-sm-8">
			@yield('content', $content)
		</div>
		<div class="col-sm-2">
		</div>

		<!-- JQuery -->
		{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}

		<!-- Bootstrap JS -->
		{{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') }}

		<!-- JQuery UI -->
		{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js') }}

		<!-- Datatable -->
		{{ HTML::script('//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js') }}

		<!-- Custom css -->
		{{ HTML::script('assets/js/simple.js') }}
	</body>
</html>