{% extends "layout.php" %}

{% block tabActivo %}inicio{% endblock tabActivo %}

{% block cuerpo %}

{% if message %}
	<div class="alert alert-success" role="alert"> {{ message|raw}}</div>
{% endif %}

{% if error %}
	<div class="alert alert-error" role="alert"> {{ error|raw}}</div>
{% endif %}

<div class="jumbotron">
	<h1>Buenos dias</h1>

	<p class="lead">Aqui tiene las apuestas del día</p>
	

	{%for comentario in datos %}
		{% for clave,valor in comentario %}
			{{ clave }}: {{ valor }} <br>
			{% endfor %}
		<a href="/borrar?id={{comentario.ID}}"><img src="img/papelera.png" height="50" width="50"></a><br>
		------------------------<br>
	{% endfor %}
	
</div>
{% endblock cuerpo %}

