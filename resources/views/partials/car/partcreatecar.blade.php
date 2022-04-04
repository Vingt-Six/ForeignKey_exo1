<section class="container">
    <h1 class="mt-5 text-center">Create Car</h1>
    <form action="/cars" method="POST" class="mt-5">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="BMW" name="brand">
            <label for="floatingInput">Brand</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingPassword" placeholder="2009" name="years">
            <label for="floatingPassword">Years</label>
        </div>
        <select class="form-select mt-4" aria-label="Default select example" name="color_id">
            <option selected>Choose a color</option>
            @foreach ($colors as $color)
                <option value="{{$color->id}}">{{$color->color}}</option>
            @endforeach
        </select>
        <button type="submit" class="mt-4 btn btn-outline-primary">Add Car</button>
    </form>
</section>
