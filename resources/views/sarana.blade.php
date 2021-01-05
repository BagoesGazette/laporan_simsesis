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

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="shadow p-3 mb-5 bg-white rounded">
          <h4 class="text-center">Data Sarana dan Prasana</h4>
          <div class="table-responsive">
            <table class="table table-bordered" id="datatable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama dan Prasana</th>
                  <th>Jumlah</th>
                  <th>Baik</th>
                  <th>Perawatan</th>
                  <th>Gambar</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no=1
                @endphp
                @foreach ($sarpras as $s)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $s->nama }}</td>
                  <td>{{ $s->jumlah }}</td>
                  <td>{{ $s->baik }}</td>
                  <td>{{ $s->perawatan }}</td>
                  <td><a data-fancybox="gallery" href="{{ asset("assets/sarpras/". $s->image) }}"><img src="{{ asset("assets/sarpras/". $s->image) }}" width="100" height="50"></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  @show
  @include('layouts.footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
  <script>
$(document).ready(function () {
$('#datatable').DataTable();
});
  </script>