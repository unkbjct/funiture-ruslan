<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
    @yield('css')

    <script src="{{ asset('public/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>

    @yield('js')
</head>

<body>

    <div class="wrapper">
        <header class="shadow-sm">
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
                <div class="container ">
                    <div class="collapse navbar-collapse" id="navbarsExample09">
                        <ul class="navbar-nav mr-auto">

                            <ul class="navbar-nav" style="margin-left: 4rem">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Доставка</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Напишите нам</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">3D программа</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">О компании</a>
                                </li>
                            </ul>
                        </ul>
                    </div>
                    <span class="navbar-text" style="font-size: .9rem">
                        +7 800 555 35 35
                        <br>
                        <small class="text-muted">Интернет-магазин (с 10 до 19)</small>
                    </span>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
                <div class="container  justify-content-between">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <div style="width: 100px">
                            <img style="width: 100%;height: 100%"
                                src="{{ asset('public/storage/img/logo.png') }}"alt="">

                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <form class="d-flex w-100 me-5">
                        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Найти</button>
                    </form>
                    <div class="nav-buttons d-flex">
                        @if (Auth::check())
                            <a class="navbar-brand nav-buttons-item me-4" href="{{ route('account') }}">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('public/storage/img/icons/user.png') }}" width="20"
                                        height="20">
                                </div>
                                <div>
                                    <small>{{ Auth::user()->name }}</small>
                                </div>
                            </a>
                        @else
                            <a class="navbar-brand nav-buttons-item me-4" href="{{ route('login') }}">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('public/storage/img/icons/user.png') }}" width="20"
                                        height="20">
                                </div>
                                <div>
                                    <small>Войти</small>
                                </div>
                            </a>
                        @endif
                        <a class="navbar-brand nav-buttons-item me-4" href="#">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('public/storage/img/icons/shop.png') }}" width="20"
                                    height="20">
                            </div>
                            <div>
                                <small>Магазины</small>
                            </div>
                        </a>
                        <a class="navbar-brand nav-buttons-item me-4" href="#">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('public/storage/img/icons/favourite.png') }}" width="20"
                                    height="20">
                            </div>
                            <div>
                                <small>Избранное</small>
                            </div>
                        </a>
                        <a class="navbar-brand nav-buttons-item me-4" href="{{ route('order') }}">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('public/storage/img/icons/shop-cart.png') }}" width="20"
                                    height="20">
                            </div>
                            <div>
                                <small>Корзина</small>
                            </div>
                        </a>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
                <div class="container  justify-content-center">
                    <ul class="navbar-nav d-flex justify-content-between w-75">
                        <li class="nav-item ">
                            <a class="nav-link btn-lg" href="{{ route('catalog') }}" role="button"
                                data-bs-toggle="" aria-expanded="false">
                                Кухня
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link btn-lg" href="#" role="button" data-bs-toggle=""
                                aria-expanded="false">
                                Гостиная
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link btn-lg" href="#" role="button" data-bs-toggle=""
                                aria-expanded="false">
                                Спальня
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link btn-lg" href="#" role="button" data-bs-toggle=""
                                aria-expanded="false">
                                Прихожая
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link btn-lg" href="#" role="button" data-bs-toggle=""
                                aria-expanded="false">
                                Детская
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link btn-lg" href="#" role="button" data-bs-toggle=""
                                aria-expanded="false">
                                Кабинет
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link btn-lg" href="#" role="button" data-bs-toggle=""
                                aria-expanded="false">
                                Акции
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="container pt-5">
            @yield('main')
        </main>

        <footer class="">
            <div class="container pt-5 ">
                <div class="row">
                    <div class="col-2">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4 offset-1">
                        <form>
                            <h5>Subscribe to our newsletter</h5>
                            <p>Monthly digest of whats new and exciting from us.</p>
                            <div class="d-flex w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control"
                                    placeholder="Email address">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p>© 2021 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                                    height="24">
                                    <use xlink:href="#twitter"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                                    height="24">
                                    <use xlink:href="#instagram"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                                    height="24">
                                    <use xlink:href="#facebook"></use>
                                </svg></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>
