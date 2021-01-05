@include('layouts.master')
@section('content')
<!--Carousel Wrapper-->
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    @php
        $i=0
    @endphp
    @foreach ($slide as $s)
    @if ($i===0)
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    @else
    <li data-target="#carousel-example-1z" data-slide-to="{{ $s->id }}"></li>  
    @endif
    @endforeach
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    @php
        $i=0
    @endphp
    @foreach ($slide as $s)
    @if ($i===0)
      <div class="carousel-item active">
    @else
      <div class="carousel-item">
    @endif
      <div class="view">
        <img class="d-block w-100" src="{{ asset("assets/slide/". $s->image) }}"
          alt="First slide">
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
    @php
        $i++
    @endphp
    @endforeach
    <!--/First slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

  <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 mb-2">
            <div class="card">
                <div class="card-body text-center">
                    <h1 class="card-title"><a><i class="fas fa-mobile-alt"></i></a></h1>
                    <p class="card-text">Fitur Mobile Responsive. Anda bisa mengakses di smartphone maupun laptop atau computer</p>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 mb-2">
          <div class="card">
              <div class="card-body text-center">
                  <h1 class="card-title"><a><i class="fab fa-adn"></i></a></h1>
                  <p class="card-text">SMK NEGERI 2 TRENGGALEK adalah sekolah yang memiliki akreditasi A</p>
              </div>
          </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 mb-2">
          <div class="card">
              <div class="card-body text-center">
                  <h1 class="card-title"><a><i class="fas fa-cannabis"></i></h1>
                  <p class="card-text">SMK NEGERI 2 TRENGGALEK adalah sekolah adiwiyata yang ada di kota Trenggalek</p>
              </div>
          </div>
        </div>
    </div>
  </div>
  
  @show
  @include('layouts.footer')