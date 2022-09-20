@include('dashboard.partials.sesion-flash-status')
        <h4>Crear Articulo Miscelaneo</h4>
        
        <label for="">Nombre</label>
        <input class="controls" type="text" name="name" value="{{old('name',$misc->name)}}" id="name" placeholder="Nombre">
        @error("name")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">Fabricante</label>
        <input class="controls" type="text" name="manufacturer" value="{{old('manufacturer',$misc->manufacturer)}}" id="manufacturer" placeholder="Fabricante">
        @error("manufacturer")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror
        
        <label for="">Descripción</label>
        <textarea class="controls" type="text" name="description" id="description" placeholder="Descripcion">{{old('description',$misc->description)}}</textarea>
        @error("description")
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror

        <label for="">Precio unitario</label>
        <input class="controls" type="text" name="price" value="{{old('price',$misc->price)}}" id="price" placeholder="Precio unitario">
        @error("price")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">Unidades disponibles</label>
        <input class="controls" type="text" name="units" value="{{old('units',$misc->units)}}" id="units" placeholder="Unidades disponibles">
        @error("units")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <button type='submit' class="botons">Enviar</button>