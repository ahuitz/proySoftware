
 <form method="POST" action= "{{App/Http/Controllers/ProductoControlador@create}}"> 
					<!--input name="_token" type="hidden" value="dhejkerwerawef"-->
					<!--input type="hidden" name="_token" value="{{ csrf_token() }}"-->
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">		
					<div class="mation">
					<div>
						<span>Nombre</span>
						<input type="text" name="nombre" class="input"> 
					</div>
					<div>
						<span>Precio</span>
						<input type="text" name="precio" class="input"> 
					 </div>
					 <div>
						 <span>Descripción</span>
						 <input type="text" name="descripcion" class="input">
						 </div>
						 <div>
							<span>Categoría</span>
								<input type="text" name="idcategoria" class="input">						 
					</div>
					<div>
						<span>Presentación</span>
						<input type ="text" name="idpresentacion" class="input">
					</div>
					<div>
						<span>Imagen</span>
						<input type ="image" name "image" src=""> 
					 </div>
				     <input type="submit" value="Guardar">
				     <input type="submit" value="Modificar">
				     <input type="submit" value="Eliminar">
				</form>
	