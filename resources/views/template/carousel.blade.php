<div id="carouselExampleControls" class="carousel slide counts section-bg" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($news as $new)
            @if ($new->id == 1)
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row counters kebawah">
                            <div class="col-md-4">
                                <h2 style="color: white">{{ $new->title }}</h2>
                            </div>
                            <div class="col-md-4">
                                <p style="font-weight: 100" class="mt-2">{{ $new->content }}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="#" style="background-color: #e39b0d; border-radius: 50px"
                                    class="btn text-center fw-bold text-white pe-5 ps-5 mt-4">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="carousel-item">
                    <div class="container">
                        <div class="row counters kebawah">
                            <div class="col-md-4">
                                <h2 style="color: white">{{ $new->title }}</h2>
                            </div>
                            <div class="col-md-4">
                                <p style="font-weight: 100" class="mt-2">{{ $new->content }}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="#" style="background-color: #e39b0d; border-radius: 50px"
                                    class="btn text-center fw-bold text-white pe-5 ps-5 mt-4">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
