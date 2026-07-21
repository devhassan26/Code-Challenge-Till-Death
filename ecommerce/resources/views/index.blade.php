@extends('app.layout')

@section('content')
    <section class="mt-1 mb-5">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://placehold.co/800x300?text=Banner_01" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.co/800x300?text=Banner_02" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.co/800x300?text=Banner_03" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://placehold.co/800x300?text=Collection_01" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Collection 01</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://placehold.co/800x300?text=Collection_02" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Collection 02</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://placehold.co/800x300?text=Collection_03" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Collection 03</h5>
                </div>
            </div>

        </div>

    </section>
    <section class="mb-5">
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://placehold.co/200x300?text=Product_01" class="card-img-top" alt="...">
                    <div class="addtocart position-absolute mt-3 me-3 end-0 fs-3"><i class="bi bi-cart3"></i></div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Product 01</h5>
                    <p class="card-text"><span class="text-decoration-line-through me-2">Rs.4,999.00</span>
                        <spa class="text-danger">Rs.1,999.00</span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://placehold.co/200x300?text=Product_02" class="card-img-top" alt="...">
                    <div class="addtocart position-absolute mt-3 me-3 end-0 fs-3"><i class="bi bi-cart3"></i></div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Product 02</h5>
                    <p class="card-text"><span class="text-decoration-line-through me-2">Rs.4,999.00</span><span
                            class="text-danger">Rs.1,999.00</span></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://placehold.co/200x300?text=Product_03" class="card-img-top" alt="...">
                    <div class="addtocart position-absolute mt-3 me-3 end-0 fs-3"><i class="bi bi-cart3"></i></div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Product 03</h5>
                    <p class="card-text"><span class="text-decoration-line-through me-2">Rs.4,999.00</span><span
                            class="text-danger">Rs.1,999.00</span></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://placehold.co/200x300?text=Product_04" class="card-img-top" alt="...">
                    <div class="addtocart position-absolute mt-3 me-3 end-0 fs-3"><i class="bi bi-cart3"></i></div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Product 04</h5>
                    <p class="card-text"><span class="text-decoration-line-through me-2">Rs.4,999.00</span><span
                            class="text-danger">Rs.1,999.00</span></p>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://placehold.co/200x300?text=Product_01" class="card-img-top" alt="...">
                    <div class="addtocart position-absolute mt-3 me-3 end-0 fs-3"><i class="bi bi-cart3"></i></div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Product 01</h5>
                    <p class="card-text"><span class="text-decoration-line-through me-2">Rs.4,999.00</span>
                        <spa class="text-danger">Rs.1,999.00</span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://placehold.co/200x300?text=Product_02" class="card-img-top" alt="...">
                    <div class="addtocart position-absolute mt-3 me-3 end-0 fs-3"><i class="bi bi-cart3"></i></div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Product 02</h5>
                    <p class="card-text"><span class="text-decoration-line-through me-2">Rs.4,999.00</span><span
                            class="text-danger">Rs.1,999.00</span></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://placehold.co/200x300?text=Product_03" class="card-img-top" alt="...">
                    <div class="addtocart position-absolute mt-3 me-3 end-0 fs-3"><i class="bi bi-cart3"></i></div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Product 03</h5>
                    <p class="card-text"><span class="text-decoration-line-through me-2">Rs.4,999.00</span><span
                            class="text-danger">Rs.1,999.00</span></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://placehold.co/200x300?text=Product_04" class="card-img-top" alt="...">
                    <div class="addtocart position-absolute mt-3 me-3 end-0 fs-3"><i class="bi bi-cart3"></i></div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Product 04</h5>
                    <p class="card-text"><span class="text-decoration-line-through me-2">Rs.4,999.00</span><span
                            class="text-danger">Rs.1,999.00</span></p>
                </div>
            </div>

        </div>

    </section>
    <section class="bg-dark text-white p-3">
        <div class="row text-center">
            <div class="col-md-4">
                <h6>FREE SHIPPING & RETURN</h6>
                <p>Free shipping above RS 5000</p>
            </div>
            <div class="col-md-4">
                <h6>MONEY GAURNTEE</h6>
                <p>7 days money back guarantee</p>
            </div>
            <div class="col-md-4">
                <h6>ONLINE SUPPORT</h6>
                <p>We support online 24/7 on day</p>
            </div>
        </div>
    </section>
    <section>
        <footer class="py-3 my-4">
            <p class="text-center text-body-secondary">© 2026 Company, Inc</p>
        </footer>
    </section>
@endsection
