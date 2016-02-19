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
	<h1>Gracias</h1>
	Hola <strong>{{nombre}}</strong> ya te escribiré a {{email}} para verificar tu cuenta
</div>
{% endblock cuerpo %}

