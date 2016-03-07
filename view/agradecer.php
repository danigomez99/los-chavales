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
	<h1>Apuesta enviada</h1>
	Gracias <strong>{{nombre}}</strong> ya te escribire a {{email}} para verificar su cuenta y su crédito
</div>
{% endblock cuerpo %}

