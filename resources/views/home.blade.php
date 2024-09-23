@extends('frontnd.layouts.main')
@push('title')
    <title>home</title>
@endpush

@section('css')
    <link rel="stylesheet" href="{{ url('plugins/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/owl-carousel/assets/owl.theme.default.min.css') }}">
@endsection

@section('main.section')
    <main>
        {{-- main banner section --}}
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                style="padding-top: 1.5rem; padding-bottom: 1.5rem;">
                <ol class="carousel-indicators">
                    @foreach ($banners as $index => $banner)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}"
                            class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($banners as $banner)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img class="d-block w-100" style="height: 20rem; padding-right: 1rem; padding-left: 1rem;"
                                src="{{ asset($banner->image) }}" alt="{{ $banner->title }}">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $banner->title }}</h5>
                                <p>{{ $banner->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        {{-- end main banner section --}}

        {{-- Upcoming event section --}}
        <section>
            <div class="d-flex justify-content-between navbar navbar-expand-lg navbar-info bg-warning">
                <div>
                    <h4>Upcoming</h4>
                </div>
                <div>
                    <div class="btn btn-light"><a href="view-all">See All</a></div>
                </div>
            </div>
            {{-- <div id="carouselExampleControls" class="carousel carousel-dark slide" data-ride="carousel"
                style="padding-top: 1rem; padding-bottom: 1rem;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            @foreach ($categories as $category)
                                <div class="card">
                                    <div class="image-wrapper">
                                        <img src="{{ asset('category_image/' . $category->image) }}" alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $category->name }}</h5>
                                        <p class="card-text">{{ $category->short_desc }}</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Add more carousel items if needed -->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> --}}
            <div class="owl-carousel owl-theme">
                @foreach ($categories as $category)
                    <div class="item">
                        <div class="image-wrapper">
                            <img src="{{ asset('category_image/' . $category->image) }}" class="rounded" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <p class="card-text">{{ $category->short_desc }}</p>
                            <a href="{{ route('account.complet-view-all') }}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- end upcoming event section --}}

        {{-- Completed event section --}}
        <section>
            <div class="d-flex justify-content-between navbar navbar-expand-lg navbar-info bg-warning">
                <h4>Completed Event</h4>
                <a href="complet-view-all" class="btn btn-light">See All</a>
            </div>
            <div class="owl-carousel owl-theme">
                @foreach ($categories as $category)
                    <div class="item">
                        <div class="image-wrapper">
                            <img src="{{ asset('category_image/' . $category->image) }}" class="rounded" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <p class="card-text">{{ $category->short_desc }}</p>
                            <a href="{{ route('account.complet-view-all') }}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <script src="jquery.min.js"></script> --}}

        </section>

    </main>
@endsection

@section('js')
    <script src="{{ url('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>
@endsection
