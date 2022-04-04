<section class="container">
    <form action="/colors" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Purple" name="color">
            <label for="floatingInput">Color</label>
        </div>
        <button type="submit" class="btn btn-outline-primary w-100">Add Color</button>
    </form>

    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Color</th>
                    <th scope="col"></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($colors as $color)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$color->color}}</td>
                        <td>
                            <a href="/colors/{{$color->id}}/edit" class="btn btn-outline-warning">Edit</a>
                        </td>
                        <td>
                            <form action="/colors/{{$color->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
