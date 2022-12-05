<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach ($foods as $food )                   
                 
                    <div class="card" style="width: 18rem; color:darkgoldenrod">
                        <img src="{{ $food->image }}" height="250" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $food->name }}</h5>
                          <p class="card-text" style="color: darkgoldenrod">{{ $food->description }}</p>
                          <h3>{{ $food->price }}$</h3>
                        </div>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>