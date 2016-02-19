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
	<p class="lead">Pinche en contacto para rellenar su ficha</p>
	

	{%for d in datos %}
		{% for clave,valor in d %}
			{{ clave }}: {{ valor }} <br>
		{% endfor %}
		------------------------<br>
	{% endfor %}
	
</div>
{% endblock cuerpo %}

