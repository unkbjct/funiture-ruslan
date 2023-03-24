@extends('layouts.main')

@section('main')
    <section class="products my-5">
        <h2 class="display-4 px-4">Лучшие товары</h2>
        <div class="products-list row">
            <div class="products-item col-md-4 p-2">
                <div class="products-item-container h-100 d-flex flex-column p-3">
                    <div class="products-item-img mb-3">
                        <img src="{{ asset('public/storage/img/products/1.jpg') }}" alt="">
                    </div>
                    <div class="coast">
                        <h3 class="">31 600 p.</h3>
                    </div>
                    <div class="name lead">
                        <p>Медея СБ-2310 Тумба прикроватная</p>
                    </div>
                    <div class="products-item-btns mt-auto d-flex justify-content-between">
                        <button class="btn btn-outline-success">Подробнее</button>
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
            <div class="products-item col-md-4 p-2">
                <div class="products-item-container h-100 d-flex flex-column p-3">
                    <div class="products-item-img mb-3">
                        <img src="{{ asset('public/storage/img/products/4.webp') }}" alt="">
                    </div>
                    <div class="coast">
                        <h2 class="">37 600 p.</h2>
                    </div>
                    <div class="name lead">
                        <p>Медея СБ-2310 Тумба прикроватная</p>
                    </div>
                    <div class="products-item-btns mt-auto d-flex justify-content-between">
                        <button class="btn btn-outline-success">Подробнее</button>
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
            <div class="products-item col-md-4 p-2">
                <div class="products-item-container h-100 d-flex flex-column p-3">
                    <div class="products-item-img mb-3">
                        <img src="{{ asset('public/storage/img/products/3.webp') }}" alt="">
                    </div>
                    <div class="coast">
                        <h2 class="">21 600 p.</h2>
                    </div>
                    <div class="name lead">
                        <p>Медея СБ-2310 Тумба прикроватная sadasd asd as das lorem</p>
                    </div>
                    <div class="products-item-btns mt-auto d-flex justify-content-between">
                        <button class="btn btn-outline-success">Подробнее</button>
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
            @forelse ($products as $product)
                <div class="products-item col-md-4 p-2">
                    <div class="products-item-container p-3 h-100 d-flex flex-column">
                        <a href="{{ route('product', ['product' => $product->id]) }}">
                            <div class="products-item-img mb-3">
                                <img src="{{ $product->image->url }}" alt="">
                            </div>
                        </a>

                        <div class="coast">
                            <h3 class="">{{ $product->price }} ₽.</h3>
                        </div>
                        <div class="name lead">
                            <p>{{ $product->title }}</p>
                        </div>
                        <div class="products-item-btns mt-auto">
                            <a href="{{ route('product', ['product' => $product->id]) }}"
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
            {{-- <div class="w-100"></div>
            <div class="products-item col-md-4 p-2">
                <div class="products-item-container p-3">
                    <div class="products-item-img mb-3">
                        <img src="{{ asset('public/storage/img/products/2.jpg') }}" alt="">
                    </div>
                    <div class="coast">
                        <h2 class="display-6">31 600 p.</h2>
                    </div>
                    <div class="name lead">
                        <p>Медея СБ-2310 Тумба прикроватная</p>
                    </div>
                    <div class="products-item-btns d-flex justify-content-between">
                        <button class="btn btn-outline-success w-75">Подробнее</button>
                        <button class="btn btn-outline-warning product-btn-chop-cart"><img src="{{asset('public/storage/img/icons/shop-cart.png')}}" alt=""></button>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <section class="news mb-5 py-5">
        <h2 class="display-4 px-4">Приложения</h2>
        <div class="row">
            <div class="news-item col-xl-6 p-4">
                <div class="news-item-container rounded p-4">
                    <p>Примерка мебели не выходя из дома</p>
                    <h3>Мобильное приложени <br> доступно для <br> скачивания</h3>
                    <div class="mobile-links row mt-4">
                        <div class="mobile-links-item p-1">
                            <img src="{{ asset('public/storage/img/welcome/appstore-rus.svg') }}" alt="">
                        </div>
                        <div class="mobile-links-item p-1">
                            <img src="{{ asset('public/storage/img/welcome/googleplay-rus.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="phone-img">
                        <img src="{{ asset('public/storage/img/welcome/phone.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="news-item col-xl-6 p-4">
                <div class="news-item-container justify-content-between row rounded ">
                    <div class="info col-sm-4 p-4">
                        <p>VR-технологии</p>
                        <h3>Твой дом твоя реальность</h3>
                        <button class="mt-3 btn btn-outline-success">Узнать больше</button>
                    </div>
                    <div class="vr-img col-sm-4">
                        <img class="rounded" src="{{ asset('public/storage/img/welcome/vr.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="delivery-products mb-5 py-5">
        <h2 class="display-4 px-4">Товары с быстрой доставкой</h2>
        <div class="products-list row">
            @forelse ($products as $product)
                <div class="products-item col-md-4 p-2">
                    <div class="products-item-container p-3 h-100 d-flex flex-column">
                        <a href="{{ route('product', ['product' => $product->id]) }}">
                            <div class="products-item-img mb-3">
                                <img src="{{ $product->image->url }}" alt="">
                            </div>
                        </a>

                        <div class="coast">
                            <h3 class="">{{ $product->price }} ₽.</h3>
                        </div>
                        <div class="name lead">
                            <p>{{ $product->title }}</p>
                        </div>
                        <div class="products-item-btns mt-auto">
                            <a href="{{ route('product', ['product' => $product->id]) }}"
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
    <section class="delivery mb-5">
        <div class="row">
            <div class="news-item col-sm-4 w-100 p-4">
                <div class="news-item-container row justify-content-between rounded ">
                    <div class="delivery-info col-md-5 p-5">
                        <p>Доставка в 1 день</p>
                        <h3>Доставим за <br> 1 день более 1 000 товаров</h3>
                        <button class="mt-3 btn btn-outline-success">Узнать больше</button>

                    </div>
                    <div class="delivery-img col-md-4">
                        <img class="rounded" src="{{ asset('public/storage/img/welcome/delivery.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
