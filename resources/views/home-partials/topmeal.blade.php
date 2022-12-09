<section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Klassy Week</h6>
                    <h2>This Week’s Special Meal Offers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="tabs">
                    <div class="col-lg-12">
                        <div class="heading-tabs">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <ul>
                                        @foreach ($categories as $category)
                                            <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    @foreach ($foods as $food )
                                        
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="{{ asset($food->image) }}" alt="">
                                                        <h4>{{ $food->name }}</h4>
                                                        <p>{{$food->description}}</p>
                                                        <div class="price">
                                                            <h6>{{ $food->price }}$</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                   
                                </div>
                            </article>
                           
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
