<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


<div class="multi-carousel">
  <div class="multi-carousel-inner">
    <div class="multi-carousel-item">
    @foreach ($data as $data )
      <img src="/productimage/{{$data->image}}" alt="Gallery image 1" class="w-100">
      <h3 class="card-text">{{$data->title}}</h3>
      <h4 class="card-text">{{$data->price}}</h4>
    </div>
  </div>
  <a class="carousel-control-prev" tabindex="0" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" tabindex="0" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>
@endforeach