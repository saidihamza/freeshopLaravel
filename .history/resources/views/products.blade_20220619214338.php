<section class="section" id="men">

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Men's Latest</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="men-item-carousel">

                    <div class="owl-men-item owl-carousel">
                        <div class="item">
        

                            @foreach ($data as $data )
                            <div class="down-content">
                                <img src="/productimage/{{$data->image}}" alt="">
                                <h4>{{$data->title}}</h4>
                                <span>${{$data->price}}</span>


                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                        <div class="item">

                        </div>
                        <div class="item">


                        </div>
                        <div class="item">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
<!-- ***** Men Area Ends ***** -->

<!-- ***** Women Area Starts ***** -->

<!-- ***** Kids Area Ends ***** -->