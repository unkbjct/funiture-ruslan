@extends('layouts.main')

@section('js')
    <script src="{{ asset('public/js/product.js') }}"></script>
@endsection

@section('main')
    <section class="">
        <div><span class="h4 me-3">{{ $product->title }}</span> #{{ $product->id }}</div>
        <div class="row gy-4">
            <div class="col-lg-7">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ $product->image->url }}" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{ $product->image->url }}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ $product->image->url }}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="">
                    <div class="shadow-sm p-3 rounded mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="price d-flex">
                                @if ($product->sale)
                                    <div class="fresh-price">
                                        <span
                                            class="fresh-current-price">{{ number_format($product->price - $product->price * ($product->sale / 100), 0, ',', ' ') }}</span>
                                        ₽.
                                    </div>
                                    <div class="old-price"><span
                                            class="old-current-price">{{ number_format($product->price, 0, ',', ' ') }}</span>
                                        ₽.
                                    </div>
                                    <span class="badge text-bg-danger">-{{ $product->sale }}%</span>
                                @else
                                    <div class="fresh-price h2">
                                        <span
                                            class="fresh-current-price">{{ number_format($product->price, 0, ',', ' ') }}</span>
                                        ₽.
                                    </div>
                                @endif
                            </div>
                            <div class="add-to-favorites @if (isset($_COOKIE['favorites']) && in_array($product->id, explode(',', $_COOKIE['favorites']))) activeFavorite @endif"
                                data-product="{{ $product }}">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M462.1 62.86C438.8 41.92 408.9 31.1 378.7 32c-37.49 0-75.33 15.4-103 43.98l-19.7 20.27l-19.7-20.27C208.6 47.4 170.8 32 133.3 32C103.1 32 73.23 41.93 49.04 62.86c-62.14 53.79-65.25 149.7-9.23 207.6l193.2 199.7C239.4 476.7 247.6 480 255.9 480c8.332 0 16.69-3.267 23.01-9.804l193.1-199.7C528.2 212.5 525.1 116.6 462.1 62.86zM437.6 237.1l-181.6 187.8L74.34 237.1C42.1 203.8 34.46 138.1 80.46 99.15c39.9-34.54 94.59-17.5 121.4 10.17l54.17 55.92l54.16-55.92c26.42-27.27 81.26-44.89 121.4-10.17C477.1 138.6 470.5 203.1 437.6 237.1z" />
                                    <path fill="#fff" class="filledFavorite"
                                        d="M429.9,95.6c-40.4-42.1-106-42.1-146.4,0L256,124.1l-27.5-28.6c-40.5-42.1-106-42.1-146.4,0c-45.5,47.3-45.5,124.1,0,171.4   L256,448l173.9-181C475.4,219.7,475.4,142.9,429.9,95.6z" />
                                </svg>
                            </div>
                        </div>
                        <form action="{{ route('product.cart.add', ['product' => $product->id]) }}" method="POST">
                            @csrf
                            <button href="" class="btn btn-success w-100 mt-2">Добавить в корзину</button>
                        </form>
                    </div>
                    <div class="shadow-sm p-3 rounded mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <p><b>Получение в г. Великий Новгород</b></p>
                            <p><span class="badge text-bg-primary">В наличии</span></p>
                        </div>
                        <div>
                            <p>Доставка: от 590 ₽</p>
                        </div>
                    </div>
                    <div>
                        <p><b>О товаре</b></p>
                        <div class="d-flex">
                            <div class="about-title me-3 border-start border-2 border-success ps-2">Производитель</div>
                            <div class="about-value">Россия</div>
                        </div>
                        <div class="d-flex">
                            <div class="about-title me-3 border-start border-2 border-success ps-2">Гарантия</div>
                            <div class="about-value">24 мес.</div>
                        </div>
                        <div class="d-flex">
                            <div class="about-title me-3 border-start border-2 border-success ps-2">Коллекция</div>
                            <div class="about-value">Уно-5</div>
                        </div>
                        <a href="#aboutProduct" class="text-decoration-none">Описание товара</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 pt-5">
        <div class="h3">Похожие товары</div>
        <div class="row m-0 g-4 w-100 px-4">
            @forelse ($products as $sugg)
                <div class="products-item col-md-3 p-2">
                    <div class="products-item-container p-3 h-100 d-flex flex-column">
                        <a href="{{ route('product', ['product' => $sugg->id]) }}">
                            <div class="products-item-img mb-3">
                                <img src="{{ $sugg->image->url }}" alt="">
                            </div>
                        </a>

                        <div class="coast">
                            <h3 class="">{{ $sugg->price }} ₽.</h3>
                        </div>
                        <div class="name lead">
                            <p>{{ $sugg->title }}</p>
                        </div>
                        <div class="products-item-btns mt-auto">
                            <a href="{{ route('product', ['product' => $sugg->id]) }}"
                                class="btn btn-outline-success w-75">Подробнее</a>
                            <button class="btn btn-outline-warning product-btn-chop-cart">
                                <svg height="24px" viewBox="0 0 24 24" width="24px">
                                    <g id="Layer_1">
                                        <g>
                                            <path
                                                d="M20.756,5.345C20.565,5.126,20.29,5,20,5H6.181L5.986,3.836C5.906,3.354,5.489,3,5,3H2.75c-0.553,0-1,0.447-1,1    s0.447,1,1,1h1.403l1.86,11.164c0.008,0.045,0.031,0.082,0.045,0.124c0.016,0.053,0.029,0.103,0.054,0.151    c0.032,0.066,0.075,0.122,0.12,0.179c0.031,0.039,0.059,0.078,0.095,0.112c0.058,0.054,0.125,0.092,0.193,0.13    c0.038,0.021,0.071,0.049,0.112,0.065C6.748,16.972,6.87,17,6.999,17C7,17,18,17,18,17c0.553,0,1-0.447,1-1s-0.447-1-1-1H7.847    l-0.166-1H19c0.498,0,0.92-0.366,0.99-0.858l1-7C21.031,5.854,20.945,5.563,20.756,5.345z M18.847,7l-0.285,2H15V7H18.847z M14,7    v2h-3V7H14z M14,10v2h-3v-2H14z M10,7v2H7C6.947,9,6.899,9.015,6.852,9.03L6.514,7H10z M7.014,10H10v2H7.347L7.014,10z M15,12v-2    h3.418l-0.285,2H15z" />
                                            <circle cx="8.5" cy="19.5" r="1.5" />
                                            <circle cx="17.5" cy="19.5" r="1.5" />
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center text-muted">
                    По заданным фильтрам ничего не найдено
                </div>
            @endforelse
            @forelse ($products as $sugg)
                <div class="products-item col-md-3 p-2">
                    <div class="products-item-container p-3 h-100 d-flex flex-column">
                        <a href="{{ route('product', ['product' => $sugg->id]) }}">
                            <div class="products-item-img mb-3">
                                <img src="{{ $sugg->image->url }}" alt="">
                            </div>
                        </a>

                        <div class="coast">
                            <h3 class="">{{ $sugg->price }} ₽.</h3>
                        </div>
                        <div class="name lead">
                            <p>{{ $sugg->title }}</p>
                        </div>
                        <div class="products-item-btns mt-auto">
                            <a href="{{ route('product', ['product' => $sugg->id]) }}"
                                class="btn btn-outline-success w-75">Подробнее</a>
                            <button class="btn btn-outline-warning product-btn-chop-cart">
                                <svg height="24px" viewBox="0 0 24 24" width="24px">
                                    <g id="Layer_1">
                                        <g>
                                            <path
                                                d="M20.756,5.345C20.565,5.126,20.29,5,20,5H6.181L5.986,3.836C5.906,3.354,5.489,3,5,3H2.75c-0.553,0-1,0.447-1,1    s0.447,1,1,1h1.403l1.86,11.164c0.008,0.045,0.031,0.082,0.045,0.124c0.016,0.053,0.029,0.103,0.054,0.151    c0.032,0.066,0.075,0.122,0.12,0.179c0.031,0.039,0.059,0.078,0.095,0.112c0.058,0.054,0.125,0.092,0.193,0.13    c0.038,0.021,0.071,0.049,0.112,0.065C6.748,16.972,6.87,17,6.999,17C7,17,18,17,18,17c0.553,0,1-0.447,1-1s-0.447-1-1-1H7.847    l-0.166-1H19c0.498,0,0.92-0.366,0.99-0.858l1-7C21.031,5.854,20.945,5.563,20.756,5.345z M18.847,7l-0.285,2H15V7H18.847z M14,7    v2h-3V7H14z M14,10v2h-3v-2H14z M10,7v2H7C6.947,9,6.899,9.015,6.852,9.03L6.514,7H10z M7.014,10H10v2H7.347L7.014,10z M15,12v-2    h3.418l-0.285,2H15z" />
                                            <circle cx="8.5" cy="19.5" r="1.5" />
                                            <circle cx="17.5" cy="19.5" r="1.5" />
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center text-muted">
                    По заданным фильтрам ничего не найдено
                </div>
            @endforelse
        </div>
    </section>
@endsection
