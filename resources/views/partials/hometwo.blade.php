<section class="container">
    <div>
        @foreach ($colors as $color)
            <h1>{{$color -> color}}</h1>
            @foreach ($color->car as $car)
            <div class="card mt-3" style="width: 18rem;">
                <div class="card-header">
                    {{$car -> brand}}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$car -> years}}</li>
                </ul>
            </div>
            @endforeach
        @endforeach
    </div>
</section>