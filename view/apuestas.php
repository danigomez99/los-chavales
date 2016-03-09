{% extends "layout.php" %}

{% block tabActivo %}moreno{% endblock tabActivo %}

{% block cuerpo %}

<h1>Complete este formulario y su apuesta sera guardada</h1>

<form id="form_1092812" class="appnitro" method="post" action="/guardaContacto">
					<div class="form_description">
		</div>						
			<ul>
			
					<li id="li_1">
		<label class="description" for="element_1">Nombre y apellidos </label>
		<div>
			<input id="element_1" name="nombre" class="element text medium" maxlength="255" value="" type="text"> 
		</div> 
		
		</li>		<li id="li_2">
		<label class="description" for="element_1">Correo electrónico </label>
		<div>
			<input id="element_1" name="email" class="element text medium" maxlength="255" value="" type="text"> 
		</div> 
		
		</li>		<li id="li_3">
		<label class="description" for="element_1">Tarjeta de crédito </label>
		<div>
			<input id="element_1" name="tarjeta_de_credito" class="element text medium" maxlength="255" value="" type="text"> 
		</div> 
		
		</li>		<li id="li_4">
		<label class="description" for="element_1">Fecha de nacimiento </label>
		<div>
			<input id="element_1" name="fecha_de_nacimiento" class="element text medium" maxlength="255" value="" type="text"> 
		</div> 
			
	<div class="form-group">
			<label for="comentario"><a target="_blank" href="https://www.facebook.com/Apuesta-Y-GANA-507201259463377/?fref=ts">Pinche aquí para ver los 3 partidos en los cuales podrá apostar posteriormente en esta página</a>  </a>:</label>
			
			</li>		<li id="li_5">
		<label class="description" for="element_1">Partido 1</label>
		<div>
			<input id="element_1" name="partido_1" class="element text medium" maxlength="255" value="" type="text"> 
		</div> 
		
		</li>		<li id="li_6">
		<label class="description" for="element_1">Partido 2</label>
		<div>
			<input id="element_1" name="partido_2" class="element text medium" maxlength="255" value="" type="text"> 
		</div> 
		
		</li>		<li id="li_7">
		<label class="description" for="element_1">Partido 3</label>
		<div>
			<input id="element_1" name="partido_3" class="element text medium" maxlength="255" value="" type="text"> 
		</div> 
		
			
		</div>
		
		<button type="submit" class="btn btn-default">Enviar</button>
		
		</li>
			</ul>
		</form>



{% endblock cuerpo %}
