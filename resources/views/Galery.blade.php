@extends("master")

@section('title', 'Galery')

@section('content')
    <main>
      <div class="galery">
        <!--tworzenie galerii za pomocą bootstrap-->
        <figure class="gallery__item gallery__item--1">
          <div class="row">
            <!--W odpowiedniej szyrokości ekranu obrazki będą przyjmowali odpowiedną ilość kolumn(z 12)-->
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
              <a href="images/16.jpeg" data-lightbox="galeria"><img src="images/16.jpeg" alt = "16"
                  class="w-100 shadow-1-strong rounded mb-4" /></a>
                <!--"data-lightbox" umożliwia powieńkszenia obrazków i robienia prostej galerii-->
              <a href="images/17.jpeg" data-lightbox="galeria"><img src="images/17.jpeg"
                alt = "17" class="w-100 shadow-1-strong rounded mb-4"/></a>
                  <a href="images/18.jpeg" data-lightbox="galeria">
                    <img src="images/18.jpeg" alt = "18" class="w-100 shadow-1-strong rounded mb-4"/>
                  </a>
				  <a href="images/19.jpg" data-lightbox="galeria">
                    <img src="images/19.jpeg" alt = "19" class="w-100 shadow-1-strong rounded mb-4"/>
                  </a>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <a href="images/20.jpeg" data-lightbox="galeria">
                <img src="images/20.jpeg" alt = "20" class="w-100 shadow-1-strong rounded mb-4"/>
              </a>
              <a href="images/21.jpeg" data-lightbox="galeria">
                <img src="images/21.jpeg" alt = "21" class="w-100 shadow-1-strong rounded mb-4"/>
              </a>
              <a href="images/22.jpeg" data-lightbox="galeria">
                <img src="images/22.jpeg" alt = "22" class="w-100 shadow-1-strong rounded mb-4"/>
              </a>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <a href="images/23.jpeg" data-lightbox="galeria">
                <img src="images/23.jpeg" alt = "23" class="w-100 shadow-1-strong rounded mb-4"/>
              </a>
              <a href="images/24.jpeg" data-lightbox="galeria">
                <img src="images/24.jpeg" alt = "24" class="w-100 shadow-1-strong rounded mb-4"/>
              </a>
              <a href="images/25.jpeg" data-lightbox="galeria">
                <img src="images/25.jpeg" alt = "25" class="w-100 shadow-1-strong rounded mb-4"/>
              </a>  
            </div>
          </div>
        </figure>
      </div>
    </main>

    @endsection