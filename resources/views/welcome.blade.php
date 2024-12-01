@extends('layout')

@section('content')
    <!-- Hero Section with Overlay -->
    <div class="jumbotron jumbotron-fluid bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="https://plus.unsplash.com/premium_photo-1673581152365-788c26c1dad1?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="img-fluid rounded" alt="Healthy Tasty Lunch">
                </div>
                <div class="col-md-6">
                    <h1 class="display-4 fw-semibold">Selamat Datang</h1>
                    <p class="lead">Di Restaurant</p>
                    <p class="lead">Fresh and tasty, seafood curry of shrimp, consecte tur adfh euid gnibh eug ercoree.
                    </p>
                    <a href="#menu" class="btn btn-primary btn-lg">View Menu</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Menu Section with Improved Layout -->
    <section id="menu" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Our Signature Dishes</h2>
                <p class="text-muted">Crafted with passion, served with love</p>
            </div>

            <div class="row g-4">
                <!-- Menu Item 1 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 hover-lift">
                        <div class="card-img-top overflow-hidden position-relative">
                            <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="img-fluid w-100 transform-scale" alt="Grilled Chicken">
                            <div
                                class="card-overlay position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                                <a href="#" class="btn btn-white rounded-circle"><i class="bi bi-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold mb-2">Salad</h5>
                            <p class="card-text text-muted mb-3">Salad dengan sayur yang fresh</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 text-primary mb-0">Rp. 50.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 2 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 hover-lift">
                        <div class="card-img-top overflow-hidden position-relative">
                            <img src="https://plus.unsplash.com/premium_photo-1663852297267-827c73e7529e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="img-fluid w-100 transform-scale" alt="Spaghetti Bolognese">
                            <div
                                class="card-overlay position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                                <a href="#" class="btn btn-white rounded-circle"><i class="bi bi-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold mb-2">Food Salada</h5>
                            <p class="card-text text-muted mb-3">Classic korean selada</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 text-primary mb-0">Rp. 100.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 3 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 hover-lift">
                        <div class="card-img-top overflow-hidden position-relative">
                            <img src="https://images.unsplash.com/photo-1494390248081-4e521a5940db?q=80&w=2006&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="img-fluid w-100 transform-scale" alt="Caesar Salad">
                            <div
                                class="card-overlay position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                                <a href="#" class="btn btn-white rounded-circle"><i class="bi bi-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold mb-2">Cereal</h5>
                            <p class="card-text text-muted mb-3">Oat cereal with fresh milk and fruits</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 text-primary mb-0">Rp. 55.000</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="position-relative">
                        <div class="about-image overflow-hidden rounded-4 shadow-lg position-relative">
                            <img src="https://images.unsplash.com/photo-1437750769465-301382cdf094?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Our Restaurant"
                                class="img-fluid w-100 transform-scale-hover">
                            <div
                                class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-4">
                            </div>
                        </div>
                        <div class="card position-absolute bottom-0 start-50 translate-middle-x mb-4 shadow-lg"
                            style="width: 80%;">
                            <div class="card-body bg-white rounded-3 text-center">
                                <h5 class="card-title fw-bold text-primary mb-2">Experience Excellence</h5>
                                <p class="card-text text-muted small">Where Passion Meets Culinary Art</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ps-md-5">
                    <div class="about-content">
                        <span class="text-primary fw-bold text-uppercase d-block mb-2">Our Story</span>
                        <h2 class="display-5 fw-bold mb-4 text-dark">Crafting Culinary Memories</h2>
                        <p class="lead text-muted mb-4">
                            Nestled in the vibrant heart of the city, our restaurant is more than just a dining destination.
                            It's a passionate journey of flavors, tradition, and innovation that transforms every meal into
                            an unforgettable experience.
                        </p>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary text-white rounded-circle p-3 me-3">
                                        <i class="bi bi-leaf fs-4"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold">Fresh Ingredients</h6>
                                        <small class="text-muted">Farm-to-Table</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary text-white rounded-circle p-3 me-3">
                                        <i class="bi bi-heart fs-4"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold">Passionate Chefs</h6>
                                        <small class="text-muted">Culinary Masters</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary text-white rounded-circle p-3 me-3">
                                        <i class="bi bi-stars fs-4"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold">Unique Experience</h6>
                                        <small class="text-muted">Memorable Dining</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Custom CSS for Additional Effects -->
    <style>
        .transform-scale-hover {
            transition: transform 0.3s ease;
        }

        .transform-scale-hover:hover {
            transform: scale(1.05);
        }

        .hero-image {
            position: relative;
            background-size: cover;
            background-position: center;
        }

        .hover-lift {
            transition: transform 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-10px);
        }

        .transform-scale {
            transition: transform 0.3s ease;
        }

        .hover-lift:hover .transform-scale {
            transform: scale(1.1);
        }

        .card-overlay {
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .hover-lift:hover .card-overlay {
            opacity: 1;
        }

        .card-overlay .btn-white {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@endsection
