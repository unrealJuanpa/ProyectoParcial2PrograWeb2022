@include('dashboard.partials.sesion-flash-status')
        <h4>Crear de Medicamentos Controlados</h4>
        
        <label for="">Nombre</label>
        <input class="controls" type="text" name="nombre" value="{{old('nombre',$especial->nombre)}}" id="nombre" placeholder="Nombre">
        @error("nombre")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror
        
        <label for="">Descripción</label>
        <textarea class="controls" type="text" name="descripcion" id="descripcion" placeholder="Descripción">{{old('descripcion',$especial->descripcion)}}</textarea>
        @error("descripcion")
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror

        <label for="">URL</label>
        <input class="controls" type="text" name="slug" value="{{old('slug',$especial->nombre)}}" id="slug" placeholder="URL">
        @error("slug")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">Prescrito Para</label>
        <input class="controls" type="text" name="prescrito_para" value="{{old('prescrito_para',$especial->nombre)}}" id="prescrito_para" placeholder="Prescrito Para">
        @error("prescrito_para")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">Componentes</label>
        <textarea class="controls" type="text" name="componentes" id="componentes" placeholder="Componentes">{{old('componentes',$especial->componentes)}}</textarea>
        @error("componentes")
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror

        <label for="">Cantidad</label>
        <input class="controls" type="text" name="cantidad" value="{{old('cantidad',$especial->cantidad)}}" id="cantidad" placeholder="Cantidad">
        @error("cantidad")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">Fecha de Expiración</label>
        <input class="controls" type="date" name="fecha_expiracion" value="{{old('fecha_expiracion',$especial->fecha_expiracion)}}" id="fecha_expiracion">
        @error("fecha_expiracion")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">Precio Unitario</label>
        <input class="controls" type="text" name="precio_unidad" value="{{old('precio_unidad',$especial->precio_unidad)}}" id="precio_unidad" placeholder="Precio Unidad">
        @error("precio_unidad")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <button type='submit' class="botons">Crear</button>