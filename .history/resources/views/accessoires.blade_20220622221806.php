  <!-- ***** Social Area Starts ***** -->

    <!-- ***** Social Area Ends ***** -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- Carousel wrapper -->
<h2>Accessoires</h2>
<div class="d-flex justify-content-center">

@foreach ($data1 as $data2 )

<div class="card " style="width: 20rem;">

  <img style="height: 450px" src="/accessoiresimage/{{$data->image}}" class="card-img-top" alt="Sunset Over the Sea"/>
 
  <div class="card-body ">
    <p class="card-text">{{$data->title}}</p>
    <p class="card-text">{{$data->price}}</p>

  </div>
 

</div>
@endforeach
</div>