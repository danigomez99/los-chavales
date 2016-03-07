{% extends "layout.php" %}

{% block tabActivo %}moreno{% endblock tabActivo %}

{% block cuerpo %}

<h1>Rellena esta ficha para poder conocerte mejor</h1>

<form id="form_1092812" class="appnitro" method="post" action="/guardaContacto">
					<div class="form_description">
		</div>						
			<ul>
			
					<li id="li_1">
		<label class="description" for="element_1">Nombre </label>
		<div>
			<input id="element_1" name="nombre" class="element text medium" maxlength="255" value="" type="text"> 
		</div> 
		</li>		<li id="li_2">
		<label class="description" for="element_1">Correo electrónico </label>
		<div>
			<input id="element_1" name="email" class="element text medium" maxlength="255" value="" type="text"> 
		</div> 
		
		</li>
			
					<li class="buttons">
			    <input name="form_id" value="1092812" type="hidden">
			    
				<input id="saveForm" class="button_text" name="submit" value="Submit" type="submit">
		</li>
			</ul>
		</form>



{% endblock cuerpo %}
