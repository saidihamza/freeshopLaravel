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

<div class="multi-carousel">
  <div class="multi-carousel-inner">
    <div class="multi-carousel-item">
      <img src="/productimage/{{$data->image}}" alt="Gallery image 1" class="w-100">
      
    </div>
  </div>
  <a class="carousel-control-prev" tabindex="0" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" tabindex="0" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>