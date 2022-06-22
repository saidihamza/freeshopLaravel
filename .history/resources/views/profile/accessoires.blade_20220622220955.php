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
                @foreach ( as )
                    
                @endforeach
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
             
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->
