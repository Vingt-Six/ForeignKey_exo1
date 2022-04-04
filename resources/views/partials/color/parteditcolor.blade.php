<section class="container">
    <form action="/colors/{{$color->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Purple" name="color" value="{{$color->color}}">
            <label for="floatingInput">Color</label>
        </div>
        <button type="submit" class="btn btn-outline-primary w-100">Add Color</button>
    </form>
</section>