<section class="container">
    <div class="d-flex flex-wrap justify-content-evenly">
        @foreach ($cars as $car)
            <div class="card bg-danger" style="width: 18rem;">
                <div class="card-header text-light">
                    {{$car -> brand}}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$car -> years}}</li>
                    <li class="list-group-item">{{$car->color->color}}</li>
                </ul>
            </div>
        @endforeach
    </div>
</section>
