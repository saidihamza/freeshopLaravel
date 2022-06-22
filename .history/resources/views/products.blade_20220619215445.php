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
       
                                @foreach ($data as $data )


                                <img src="/productimage/{{$data->image}}" alt="">

                                
                                    <h4>{{$data->title}}</h4>
                                    <span>{{$data->price}}</span>
                                    @endforeach
</div>
                                    
</section>
<!-- ***** Men Area Ends ***** -->