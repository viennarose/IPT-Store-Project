@extends('base')
@section('content')

<div class="text-center">
    <h1 class="text-white mt-5">Stores Database | Semi-finals Project</h1>
</div>

<div class="container">
    <div class="row">
            <div class="card col" style="width: 18rem;">
            <img src="mercedes.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mercedes Benz</h5>
                <p class="card-text">When Mercedes-Benz sets out to make a new S-Class, the brief is to make the best car in the world; simple as that. It has done on every single occasion that this defining ‘big Benz’ has been redesigned over the decades, and the last time that happened in 2020, in a more challenging and fast-changing luxury car market than the car has ever faced, Stuttgart very likely did just the same.</p>
                <a href="<?= url('/stores/create')?>" class="btn btn-primary">Add Store</a>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="card col" style="width: 18rem;">
            <img src="audi.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Audi E-tron</h5>
                <p class="card-text">Audi E-tron Quattro
We’re now entering reasonably well-established times for the premium electric car. There have been fast ones, very fast ones, big ones, small ones, expensive ones and cheap, and some that even attempt a bit of four-wheel driven versatility. </p>
                <a href="<?= url('/stores/create')?>" class="btn btn-primary">Add Store</a>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="card col" style="width: 18rem;">
            <img src="bmw.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">BMW</h5>
                <p class="card-text">Since launch in 1977, the 7 Series has been in the shadow of the Mercedes S-Class, but this latest version is BMW’s most committed attempt yet to fully crack the luxury saloon market. The car combines optional adaptive air suspension with pioneering infotainment and convenience features, and offers a choice of two wheelbase lengths and rear- or four-wheel-drive. </p>
                <a href="<?= url('/stores/create')?>" class="btn btn-primary">Add Store</a>
            </div>
        </div>
    </div>
</div>

@stop