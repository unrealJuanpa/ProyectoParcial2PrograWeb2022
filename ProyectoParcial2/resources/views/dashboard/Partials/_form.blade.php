@include('dashboard.partials.sesion-flash-status')
        <h4>Crear de Medicamentos</h4>
        
        <label for="">Nombre</label>
        <input class="controls" type="text" name="nombre" value="{{old('nombre',$medicamento->nombre)}}" id="nombre" placeholder="Nombre">
        @error("nombre")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror
        
        <label for="">Descripción</label>
        <textarea class="controls" type="text" name="descripcion" id="descripcion" placeholder="Descripción">{{old('descripcion',$medicamento->descripcion)}}</textarea>
        @error("descripcion")
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror

        <label for="">Cantidad</label>
        <input class="controls" type="text" name="cantidad" value="{{old('cantidad',$medicamento->cantidad)}}" id="cantidad" placeholder="Cantidad">
        @error("cantidad")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">Fecha de Expiración</label>
        <input class="controls" type="date" name="fecha_expiracion" value="{{old('fecha_expiracion',$medicamento->fecha_expiracion)}}" id="fecha_expiracion">
        @error("fecha_expiracion")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">Precio Unitario</label>
        <input class="controls" type="text" name="precio_unidad" value="{{old('precio_unidad',$medicamento->precio_unidad)}}" id="precio_unidad" placeholder="Precio Unidad">
        @error("precio_unidad")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <button type='submit' class="botons">Enviar</button>