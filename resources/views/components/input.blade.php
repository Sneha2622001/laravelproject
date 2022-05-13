<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">{{$label}}</label>
        <input type="{{$type}}" class="form-control" id="name" name="{{$name}}"  aria-describedby="emailHelp">
        <span class="text-danger">
            <!-- @error('name')
                    {{$message}}
            @enderror -->
        </span>
</div>