<!DOCTYPE html>
<html>
	<head>
		<title>PORRA VIRTUAL</title>
		<meta charset="utf-8" />
		{% block cabecera %}
			<script src="/js/jquery.min.js"></script>
			<link href="/css/bootstrap-combined.min.css" rel="stylesheet">
			<link href="/css/bootstrap-theme.min.css" rel="stylesheet">
			<link href="/css/jumbotron-narrow.css" rel="stylesheet">
		{% endblock %}
		
	</head>
	<body>
		<div class="container">
			<div class="header">
				<ul class="nav nav-pills pull-right">
				    <li id="inicio" class="active"><a href="/">Apuestas del dia</a></li>
				    <li id="moreno"><a href="/contacto">Apuestas</a></li>
				</ul>
				<img src="img/logoapuesta.jpg" height="300" width="300"
			
			</div>
			
			{% block cuerpo %} {% endblock %}
			
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
				$('ul.nav').find('li').removeAttr('class'); $('li#{% block tabActivo %} {% endblock %}').addClass('active')
			});
		</script>
		
	</body>
</html>
