@include('partials.navbar')
    <style>
        .col-card {
            display: flex;
            justify-content: center;
        }
    </style>

    <main>
        <div class="container mt-5" >
            <div class="row">
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner rounded-5">
                            <div class="carousel-item active">
                                <img src="https://source.unsplash.com/random/1000x400?bedroom" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://source.unsplash.com/random/1000x400?room,bathroom" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://source.unsplash.com/random/1000x400?livingroom" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5 mb-5">
            <div class="row mb-3">
                @foreach ( $hotels as $hotel )
                <div class="col-lg-12 col-card mb-5">
                    <div class="mb-3" style="max-width: 840px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="https://source.unsplash.com/random/2400x1800?sig={{ $hotel }}&bedroom,home" class="img-fluid rounded-3" alt="..." style="background-size: cover;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title fw-bolder mx-3 mb-3 mt-3 text-danger">{{ $hotel->title }}</h5>
                              <p class="card-text mx-3 fw-medium">{{ $hotel->daerah }}</p>
                              <p class="card-text"><small class="text-body-secondary mx-3">{{ $hotel->fasilitas }}</small></p>
                              <p class="card-text fw-bold mx-3">Rp {{number_format ($hotel->harga,3)}} <br>
                                <small class="text-body-secondary fw-normal">Tax included</small>
                              </p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
