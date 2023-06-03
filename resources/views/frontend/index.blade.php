<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- get bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css" />
    <!-- get fontawsome -->
    <link rel="stylesheet" href="{{ asset('front/assets/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/owlcarousel/assets/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary overflow-hidden">
        <div class="container-md container-fluid ">
            <div class="row d-flex justify-content-between w-100 align-items-center">
                <div class="col-10 navbar-links">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">التصنيفات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">الكورسات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">المدربين</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">اتصل بنا</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-2 d-md-block d-none">
                    <div class="row navbar-icons d-flex justify-content-between align-items-center">
                        <div class="col-6 icons d-flex justify-content-between gap-1 align-items-center">
                            <a href="#">
                                <i class="fa-regular fa-bell"></i>
                            </a>
                            <a href="#">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a href="#">
                                <i class="fa-regular fa-bag-shopping"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </div>
                        <div class="col-6 profile d-flex gap-4 align-items-center">
                            <div class="person-image">
                                <img src="{{ asset('front/assets/img/square-small.svg') }}" alt="">
                            </div>
                            <div class="language">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                        role="button" aria-expanded="false"> EN </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"> AR </a></li>
                                    </ul>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- hero section -->
    <div class="hero overflow-hidden">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="slied">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('front/assets/img/image.svg') }}" alt="First slide">
                        <div class="carousel-caption text-end w-100">
                            <div class="container">
                                <h2 class="w-100 mb-4">دائما انظر الى الجانب المشرق للحياة</h2>
                                <h5 class="w-100 mb-4">دائما انظر الى الجانب المشرق للحياة</h5>
                                <button class="btn btn-primary">البدء بالتصفح</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="{{ asset('front/assets/img/image-photo.svg') }}"
                            alt="First slide">
                        <div class="carousel-caption text-end w-100">
                            <div class="container">
                                <h2 class="w-100 mb-4">دائما انظر الى الجانب المشرق للحياة</h2>
                                <h5 class="w-100 mb-4">دائما انظر الى الجانب المشرق للحياة</h5>

                                <button class="btn btn-primary">البدء بالتصفح</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="{{ asset('front/assets/img/image.svg') }}" alt="First slide">
                        <div class="carousel-caption text-end w-100">
                            <div class="container">
                                <h2 class="w-100 mb-4">دائما انظر الى الجانب المشرق للحياة</h2>
                                <h5 class="w-100 mb-4">دائما انظر الى الجانب المشرق للحياة</h5>

                                <button class="btn btn-primary">البدء بالتصفح</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tools">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero  -->

    <!-- section cards slider -->
    <section class="cards-slider pt-5 overflow-hidden">
        <div class="container">
            <div class="row py-4">
                <div class="tittle d-flex justify-content-between align-items-center">
                    <h4 class="m-0">جلسات تفاعلية قد تهمك</h4>
                    <button class="btn btn-outline-dark"> عرض الكل</button>
                </div>
            </div>
            <div class="custom-nav"></div>
            <div class="owl-carousel owl-one owl-theme">
                @foreach ($interactiveSessions as $interactiveSession)
                    <div class="item" data-owl="1">
                        <div class="post d-flex justify-content-between gap-4">
                            <div class="img">
                                <img src="{{ asset('storage/images/interactive_session/' . $interactiveSession->image) }}"
                                    alt="">
                            </div>
                            <div class="left px-3 pt-2">
                                <div class="text">
                                    <h3>
                                        <a href="">{{ $interactiveSession->tittle }}</a>
                                    </h3>
                                    <p>
                                        {{ $interactiveSession->description }}
                                    </p>
                                </div>
                                <div class="doctor d-flex justify-content-between align-items-center">
                                    <div class="profile d-flex justify-content-between align-items-center">
                                        <div class="img">
                                            <img src="{{ asset('storage/images/trainer/' . $interactiveSession->course->trainer->user->image) }}"
                                                alt="">
                                        </div>
                                        <div class="name d-flex justify-content-between align-items-center">
                                            {{ $interactiveSession->course->trainer->user->name }}
                                        </div>
                                    </div>
                                    <div class="time">
                                        <span class="badge badge-danger">02:15:02</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end section cards slider -->

    <!-- courses -->
    <section class="courses py-5 overflow-hidden">
        <div class="container">
            <div class="row py-4">
                <div class="tittle d-flex justify-content-between align-items-center">
                    <h4 class="m-0"> إبدأ بالتعلم معنا </h4>
                </div>
            </div>
            <div class="owl-carousel owl-two owl-theme">
                @foreach ($courses as $course)
                    <div class="item" data-owl="2">
                        <div class="card">
                            <img src="{{ asset('storage/images/category/' . $course->image) }}" alt="Post Image"
                                class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">{{ $course->title }}</a></h5>
                                <p class="card-text">{{ $course->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- end courses -->

    <!-- browsing -->
    <section class="browsing py-5 overflow-hidden">
        <div class="comtainer">
            <div class="text">
                <h1 class="py-5">
                    دائما انظر الى الجانب المشرق للحياة
                </h1>
                <div class="buttons d-flex justify-content-center align-items-center gap-4">
                    <button class="btn btn-outline-light">البدء بالتصفح</button>
                    <button class="btn btn-primary">البدء بالتصفح</button>
                </div>
            </div>
        </div>
    </section>
    <!-- end browsing -->

    <!-- new courses -->
    <section class="new-courses pt-5 overflow-hidden">
        <div class="container">
            <div class="row py-4">
                <div class="tittle d-flex justify-content-center align-items-center">
                    <h4 class="m-0">الدورات الجديدة</h4>
                </div>
            </div>
            <div class="custom-nav-three"></div>
            <div class="owl-carousel owl-three owl-theme">
                @foreach ($courses as $course)
                    <div class="item" data-owl="3">
                        <div
                            class="card py-4 text-center d-flex justify-content-center align-items-center flex-column">
                            <img src="{{ asset('storage/images/category/' . $course->image) }}" class="card-img-top"
                                alt="تصوير الخدمة">
                            <div class="card-body">
                                <h5 class="card-title">{{ $course->title }}</h5>
                                <p class="card-text">{{ $course->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- end new courses -->

    <!-- special offers -->
    <section class="special-offers pt-5 overflow-hidden">
        <div class="container">
            <div class="row py-4">
                <div class="tittle d-flex justify-content-center align-items-center">
                    <h4 class="m-0">العروض المميزة</h4>
                </div>
            </div>
            <div class="custom-nav-four"></div>
            <div class="owl-carousel owl-four owl-theme">
                @foreach ($offers as $offer)
                    <div class="item" data-owl="4">
                        <div
                            class="card py-4 text-center d-flex justify-content-center align-items-center flex-column">
                            <img src="{{ asset('storage/images/category/' . $offer->course->image) }}"
                                class="card-img-top" alt="تصوير الخدمة">
                            <div class="card-body">
                                <h5 class="card-title"> {{ $offer->course->title }} </h5>
                                <p class="card-text">{{ $offer->course->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end special offers -->

    @foreach ($categories as $category)
        <section class="optinal-course py-5 overflow-hidden">
            <div class="container">
                <div class="row py-4">
                    <div class="tittle d-flex justify-content-between align-items-center">
                        <h4 class="m-0">{{ $category->name }}</h4>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    @foreach ($category->courses as $course)
                        @if ($loop->iteration <= 3)
                            <div class="item" data-owl="5">
                                <div class="card">
                                    <img src="{{ asset('storage/images/category/' . $course->image) }}"
                                        alt="Post Image" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href=""> {{ $course->title }} </a>
                                        </h5>
                                        <p class="card-text">{{ $course->description }}</p>
                                        <div class="about d-flex justify-content-between align-items-center">
                                            <div class="comments">
                                                <img src="{{ asset('front/assets/img/comment/icons-dark-comment-square.svg') }}"
                                                    alt="">
                                                آراء المستخدمين
                                            </div>
                                            <div class="hours">
                                                عدد الساعات: {{ $course->hours }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endforeach


    <!-- browsing -->
    <section class="browsing py-5 overflow-hidden">
        <div class="comtainer">
            <div class="text">
                <h1 class="py-5">
                    دائما انظر الى الجانب المشرق للحياة
                </h1>
                <div class="buttons d-flex justify-content-center align-items-center gap-4">
                    <button class="btn btn-outline-light">البدء بالتصفح</button>
                    <button class="btn btn-primary">البدء بالتصفح</button>
                </div>
            </div>
        </div>
    </section>
    <!-- end browsing -->

    <!-- tabs  -->
    <section class="nav-tabs py-5 overflow-hidden">
        <div class="container">
            <ul class="nav nav-tabs py-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="recent-tab" data-bs-toggle="tab" data-bs-target="#recent"
                        type="button" role="tab" aria-controls="recent" aria-selected="true"> الاحدث </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="most-popular-tab" data-bs-toggle="tab"
                        data-bs-target="#most-popular" type="button" role="tab" aria-controls="profile"
                        aria-selected="false"> الاكثر شيوعا </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="lastest-offers-tab" data-bs-toggle="tab"
                        data-bs-target="#lastest-offers" type="button" role="tab"
                        aria-controls="lastest-offers" aria-selected="false"> اّخر العروض </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                    <section class="optinal-course">
                        <div class="owl-carousel owl-five owl-theme">
                            @foreach ($courses as $course)
                                <div class="item" data-owl="5">
                                    <div class="card">
                                        <img src="{{ asset('storage/images/category/' . $course->image) }}"
                                            alt="Post Image" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href=""> {{ $course->title }} </a>
                                            </h5>
                                            <p class="card-text">{{ $course->description }}</p>
                                            <div class="about d-flex justify-content-between align-items-center">
                                                <div class="comments ">
                                                    <img src="{{ asset('front/assets/img/comment/icons-dark-comment-square.svg') }}"
                                                        alt="">
                                                    آراء المستخدمين
                                                </div>
                                                <div class="hours">
                                                    عدد الساعات :{{ $course->hours }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="most-popular" role="tabpanel" aria-labelledby="most-popular-tab">
                    <section class="optinal-course">
                        <div class="owl-carousel owl-five owl-theme">
                            @foreach ($courses as $course)
                                <div class="item" data-owl="5">
                                    <div class="card">
                                        <img src="{{ asset('storage/images/category/' . $course->image) }}"
                                            alt="Post Image" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href=""> {{ $course->title }} </a>
                                            </h5>
                                            <p class="card-text">{{ $course->description }}</p>
                                            <div class="about d-flex justify-content-between align-items-center">
                                                <div class="comments ">
                                                    <img src="{{ asset('front/assets/img/comment/icons-dark-comment-square.svg') }}"
                                                        alt="">
                                                    آراء المستخدمين
                                                </div>
                                                <div class="hours">
                                                    عدد الساعات :{{ $course->hours }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="lastest-offers" role="tabpanel" aria-labelledby="lastest-offers-tab">
                    <section class="optinal-course">
                        <div class="owl-carousel owl-five owl-theme">
                            @foreach ($courses as $course)
                                <div class="item" data-owl="5">
                                    <div class="card">
                                        <img src="{{ asset('storage/images/category/' . $course->image) }}"
                                            alt="Post Image" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href=""> {{ $course->title }} </a>
                                            </h5>
                                            <p class="card-text">{{ $course->description }}</p>
                                            <div class="about d-flex justify-content-between align-items-center">
                                                <div class="comments ">
                                                    <img src="{{ asset('front/assets/img/comment/icons-dark-comment-square.svg') }}"
                                                        alt="">
                                                    آراء المستخدمين
                                                </div>
                                                <div class="hours">
                                                    عدد الساعات :{{ $course->hours }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- end tabs -->

    <!-- footer -->

    <section class="footer overflow-hidden">
        <div class="container-md container-fluid h-100">
            <div
                class="row d-flex justify-content-between align-items-sm-center flex-sm-column row-cols-1 row-cols-md-2 h-100 py-5">
                <div
                    class="col-md-8 col d-flex justify-content-md-between justify-content-center flex-wrap gap-3 gap-md-0 text-center text-md-end my-md-5">
                    <ul>
                        <li><a href="#">للعمل</a></li>
                        <li><a href="#">تعلم</a></li>
                        <li><a href="#"> احصل على التطبيقات </a></li>
                        <li><a href="#"> معلومات عنا </a></li>
                        <li><a href="#"> اتصل بنا </a></li>
                    </ul>
                    <ul>
                        <li><a href="#">وظائف</a></li>
                        <li><a href="#">مدونة </a></li>
                        <li><a href="#"> مساعدة والدعم </a></li>
                        <li><a href="#"> وظائف شاغرة </a></li>
                        <li><a href="#"> شركة تابعة </a></li>
                    </ul>
                    <ul>
                        <li><a href="#"> شروط </a></li>
                        <li><a href="#"> سياسة الخصوصية وسياسة ملفات </a></li>
                        <li><a href="#"> تعريف الارتباط </a></li>
                        <li><a href="#"> خريطة الموقع </a></li>
                        <li><a href="#"> الدورات المميزة </a></li>
                    </ul>
                </div>
                <div class="col-md-4 col d-flex align-items-center flex-column my-md-5">
                    <div class="text-area">
                        <textarea class="p-3" rows="4" cols="50" style="resize: none;" placeholder="ضغ النص هنا"></textarea>
                    </div>


                    <div class="sel sel--black-panther">
                        <select name="select-profession" id="select-profession">
                            <option value="" disabled>اللغة</option>
                            <option value="arabic">عربية</option>
                            <option value="english">انجليزية</option>
                        </select>
                    </div>
                    <hr class="rule">
                </div>
            </div>
        </div>
    </section>

    <section class="footer-nav overflow-hidden">
        <div class="container h-100">
            <div class="row h-100">
                <ul>
                    <li> <a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li> <a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li> <a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li> <a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end footer -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!-- Initialize Swiper -->
    <script src="{{ asset('front/assets/owlcarousel/owl.carousel.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            if (window.innerWidth < 600) {
                $('.owl-one').owlCarousel({
                    rtl: true,
                    loop: true,
                    margin: 22,
                    nav: false,
                    mouseDrag: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
                $('.owl-two').owlCarousel({
                    rtl: true,
                    loop: true,
                    margin: 25,
                    nav: false,
                    mouseDrag: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
                $('.owl-five').owlCarousel({
                    rtl: true,
                    loop: false,
                    margin: 30,
                    nav: false,
                    mouseDrag: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
                $('.owl-three').owlCarousel({
                    rtl: true,
                    loop: false,
                    margin: 22,
                    nav: false,
                    mouseDrag: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 4
                        }
                    }
                });
                $('.owl-four').owlCarousel({
                    rtl: true,
                    loop: false,
                    margin: 24,
                    nav: false,
                    mouseDrag: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 4
                        }
                    }
                });

            } else {
                $('.owl-one').owlCarousel({
                    rtl: true,
                    loop: true,
                    margin: 25,
                    nav: true,
                    navContainer: '.custom-nav',
                    navText: ['', ''], // تعطيل زر السابق وتحديد نص زر التالي
                    mouseDrag: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                })
            }
            $('.owl-two').owlCarousel({
                rtl: true,
                loop: true,
                margin: 25,
                nav: false,
                mouseDrag: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
            $('.owl-five').owlCarousel({
                rtl: true,
                loop: false,
                margin: 30,
                nav: false,
                mouseDrag: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
            $('.owl-three').owlCarousel({
                rtl: true,
                loop: false,
                margin: 30,
                nav: true,
                navContainer: '.custom-nav-three',
                navText: ['', ''], // تعطيل زر السابق وتحديد نص زر التالي
                mouseDrag: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
            $('.owl-four').owlCarousel({
                rtl: true,
                loop: false,
                margin: 34,
                nav: true,
                navContainer: '.custom-nav-four',
                navText: ['', ''],
                mouseDrag: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        });


        $('.sel').each(function() {
            $(this).children('select').css('display', 'none');

            var $current = $(this);

            $(this).find('option').each(function(i) {
                if (i == 0) {
                    $current.prepend($('<div>', {
                        class: $current.attr('class').replace(/sel/g, 'sel__box')
                    }));

                    var placeholder = $(this).text();
                    $current.prepend($('<span>', {
                        class: $current.attr('class').replace(/sel/g, 'sel__placeholder'),
                        text: 'العربية',
                        'data-placeholder': placeholder
                    }));
                    var placeholder = $(this).text();
                    $current.prepend($('<span>', {
                        class: $current.attr('class').replace(/sel/g, 'sel__span'),
                    }));

                    return;
                }

                $current.children('div').append($('<span>', {
                    class: $current.attr('class').replace(/sel/g, 'sel__box__options'),
                    text: $(this).text()
                }));
            });
        });

        // Toggling the `.active` state on the `.sel`.
        $('.sel').click(function() {
            $(this).toggleClass('active');
        });

        // Toggling the `.selected` state on the options.
        $('.sel__box__options').click(function() {
            var txt = $(this).text();
            var index = $(this).index();

            $(this).siblings('.sel__box__options').removeClass('selected');
            $(this).addClass('selected');

            var $currentSel = $(this).closest('.sel');
            $currentSel.children('.sel__placeholder').text(txt);
            $currentSel.children('select').prop('selectedIndex', index + 1);
        });
    </script>
</body>

</html>
