  <!-- ***** Social Area Starts ***** -->
  <section class="section" id="social">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Accessoires</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row images">
                @foreach ($data as $data)
 
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h5>{{$data->title}}</h5>
                                <h6>{{$data->price}}</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="/accessoiresimage/{{$data->image}}" alt="">
                    </div>
                </div>
                                
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- Carousel wrapper -->
<h2> Products</h2>
<div class="d-flex justify-content-center">

@foreach ($data as $data )

<div class="card " style="width: 20rem;">

  <img style="height: 450px" src="/productimage/{{$data->image}}" class="card-img-top" alt="Sunset Over the Sea"/>
 
  <div class="card-body ">
    <p class="card-text">{{$data->title}}</p>
    <p class="card-text">{{$data->price}}</p>

  </div>
 

</div>
@endforeach
</div>