@extends("master")

@section('title', 'Catalog')

@section('content')
    <main>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="images/7.jpeg" class="card-img-top" alt="haircut">
                    <div class="card-body">
                        <h5 class="card-title"> <a href="App.html" class="link_to_Order" target="_blank">Haircut</a>
                            <span class="price">$55&nbsp;&mdash; $100</span>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/8.jpeg" class="card-img-top"
                        alt="combo_beard_haircut">
                    <div class="card-body">
                        <h5 class="card-title"><a href="App.html" class="link_to_Order" target="_blank">Combo (Beard & Haircut)</a>
                            <span class="price">$110&nbsp;&mdash; $200</span>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/9.jpeg" class="card-img-top"
                        alt="cosmetics">
                    <div class="card-body">
                        <h5 class="card-title"><a href="App.html" class="link_to_Order" target="_blank">Different cosmetics</a>
                            <span class="price">$10&nbsp;&mdash; $500</span>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/10.png" class="card-img-top"
                        alt="shaving_with_a_razor">
                    <div class="card-body">
                        <h5 class="card-title"><a href="App.html" class="link_to_Order" target="_blank">Shaving with a razor</a>
                            <span class="price">$15&nbsp;&mdash; $40</span>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/11.jpeg" class="card-img-top" alt="course">
                    <div class="card-body">
                        <h5 class="card-title"> <a href="App.html" class="link_to_Order" target="_blank">Barber course</a>
                            <span class="price">$900&nbsp;&mdash; $1000</span>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/12.jpeg" class="card-img-top" alt="brow">
                    <div class="card-body">
                        <h5 class="card-title"> <a href="App.html" class="link_to_Order" target="_blank">Brow correction</a>
                            <span class="price">$20</span>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/13.png" class="card-img-top" alt="cosmetology_service">
                    <div class="card-body">
                        <h5 class="card-title"> <a href="App.html" class="link_to_Order" target="_blank">Cosmetology service</a>
                            <span class="price">$50&nbsp;&mdash; $150</span>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/14.jpeg" class="card-img-top" alt="coloring">
                    <div class="card-body">
                        <h5 class="card-title"> <a href="App.html" class="link_to_Order" target="_blank">Hair coloring</a>
                            <span class="price">$40&nbsp;&mdash; $60</span>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/15.jpeg" class="card-img-top"
                        alt="daily">
                    <div class="card-body">
                        <h5 class="card-title"> <a href="App.html" class="link_to_Order" target="_blank">Daily hairstyle</a>
                            <span class="price">$40&nbsp;&mdash; $45</span>
                        </h5>
                    </div>
                </div>
             </div>
        </div>
    </main>
@endsection