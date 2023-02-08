@extends("master")

@section('title', 'Barbershop')

@section('content')
        <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/1.jpg" class="d-block w-100" alt="carousel">
              </div>
              <div class="carousel-item">
                <img src="images/2.jpg" class="d-block w-100" alt="carousel">
              </div>
              <div class="carousel-item">
                <img src="images/3.jpg" class="d-block w-100" alt="carousel">
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
          <div class="card_flow">
            <div class="card_slide slide_1">
                <p class="first_caption caption">Beard</p>
            </div>
            <div class="card_slide slide_2">
                <p class="second_caption caption">Haircuts</p>
            </div>
            <div class="card_slide slide_3">
                <p class="third_caption caption">Cosmetics</p>
            </div>
          </div>
    </main>
 @endsection