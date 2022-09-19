@include('dashboard.partials.sesion-flash-status')
        <h4>Crear Categorias</h4>
        <input class="controls" type="text" name="title" value="{{old('title',$category->title)}}" id="title" placeholder="Title">
        @error("title")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror
        <input class="controls" type="text" name="slug" value="{{old('slug',$category->slug)}}" id="slug" placeholder="Slug">
        @error("slug")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror
        <button type="submit" class="botons">Submit</button>