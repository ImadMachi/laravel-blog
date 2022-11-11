@extends('layouts.app')

@section('content')
<section class="mt-4">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide box-shadow rounded" data-bs-ride="true">
            <div class="carousel-indicators mb-0">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="carousel-indicator active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="carousel-indicator" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="carousel-indicator" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner px-2 pt-2 pb-4">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <img src="assets/images/Frameworks-for-React-JS.jpg" class="d-block w-100 rounded object">
                        </div>
                        <div class="col-12 col-lg-6 pt-3">
                            <x-category color="#789632">CATEGORY</x-category>
                            <h1 class="display-3 fw-semibold">A Blog About React Library</h1>
                            <div class="d-flex justify-content-between text-muted mt-4">
                                <div>March 22, 2021</div>
                                <div>2 min</div>
                            </div>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat... <span class="text-muted">Read More</span></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <img src="assets/images/freelance-websites.jpg" class="d-block w-100 rounded object">
                        </div>
                        <div class="col-12 col-lg-6 pt-3">
                            <x-category color="#789632">CATEGORY</x-category>
                            <h1 class="display-3 fw-semibold">A Blog About Freelancing</h1>
                            <div class="d-flex justify-content-between text-muted mt-4">
                                <div>May 20, 2022</div>
                                <div>2 min</div>
                            </div>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat... <span class="text-muted">Read More</span></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <img src="assets/images/5_14_SEO_HightLevelPerspective_1000px.jpg" class="d-block w-100 rounded object">
                        </div>
                        <div class="col-12 col-lg-6 pt-3">
                            <x-category color="#789632">CATEGORY</x-category>
                            <h1 class="display-3 fw-semibold">A Blog About SEO</h1>
                            <div class="d-flex justify-content-between text-muted mt-4">
                                <div>Juin 15, 2022</div>
                                <div>3 min</div>
                            </div>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat... <span class="text-muted">Read More</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control carousel-control-prev fs-3" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="carousel-control carousel-control-next fs-3" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>
@endsection