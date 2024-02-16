<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Nari GoRent Bali - Motorbike Rental (Sewa Sepeda Motor di Bali)
    </title>
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }} " />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- header -->

    <header class="w-100">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-md-12">
                <nav class="navbar navbar-expand-lg bg-body-white w-100">
                    <div class="container-fluid d-flex">
                        <img src="/assets//img/logo.png" alt="logo" width="75" height="75" />
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                                <a class="nav-link" href="#">Cara Sewa</a>
                                <a class="nav-link" href="#">Hubungi Kami</a>
                                <a class="nav-link" href="#">Tentang Kami</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="jumbotron-container">
            <div class="background-jumbotron"></div>
            <div class="title-jumbotron">
                <h2 data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">Nari
                    GoRent Bali</h2>
                <h1 data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                    Rekomendasi terbaik untuk sewa motor di Bali</h1>

                <div class="btn-about">
                    <a data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0"
                        href="/tentang_kami.html">Tentang Kami</a>
                </div>
            </div>
        </div>
    </div>

    <!-- testimoni -->
    <div class="w-100 mt-lg-5 mt-md-3 mt-sm-1">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        @foreach ($testimonis as $data)
                            <div class="swiper-slide">
                                <div class="img-container">
                                    <img src="{{ asset('storage/' . $data->image) }}"
                                        class="img-fluid img-thumbnail rounded" alt="{{ $data->image }}" />
                                </div>

                            </div>
                        @endforeach
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                </div>
            </div>
        </div>
    </div>

    <!-- testimoni -->

    <!-- pilihan motor -->

    <div class="w-100 mt-lg-5 mt-md-5 mt-sm-5 mt-5">
        <h2 class="text-center mb-5" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300"
            data-aos-offset="0">Pilihan Motor</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="row d-flex justify-content-center" id="product">

                    @foreach ($units as $data)
                        <div class="col-lg-3 col-sm-6 col-6 pb-4" data-aos="zoom-in-up">
                            <div class="card" style="max-width: 20rem">
                                <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top"
                                    alt="{{ $data->image }}" />
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $data->nama_unit }}</h5>
                                    <p class="card-text text-center" style="font-size: 14px">
                                        Rp. {{ $data->harga_hari }}<br />Rp. {{ $data->harga_minggu }}<br />Rp.
                                        {{ $data->harga_bulan }}
                                    </p>
                                    <a href="#" class="btn btn-dark w-100">Hubungi Kami</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</body>

<!-- pilihan motor -->

<!-- footer -->

<div class="w-100 bg-dark d-flex flex-lg-row justify-content-md-center flex-md-column flex-column justify-content-lg-between justify-content-md-center align-content-lg-center gap-5"
    style="padding: 50px 100px">
    <img src="/assets/img/logo.png" alt="logo" width="200" class="align-self-center" />
    <div class="d-flex flex-lg-row flex-column flex-wrap justify-content-around align-items-center align-self-center">
        <span class="px-2 py-2">
            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </span>
        <span class="px-2 py-2">
            <a class="nav-link text-white" href="#">Cara Sewa</a>
        </span>
        <span class="px-2 py-2">
            <a class="nav-link text-white" href="#">Hubungi Kami</a>
        </span>
        <span class="px-2 py-2">
            <a class="nav-link text-white" href="#">Tentang Kami</a></span>
    </div>
    <a href="" class="btn btn-alert bg-warning align-self-center p-3 ">
        <h3>Book Now!</h3>
    </a>
</div>

<!-- footer -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
<script>
    AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('/assets/js/script.js') }}"></script>


</html>
