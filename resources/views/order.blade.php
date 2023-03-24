@extends('layouts.main')

@section('main')
    <section class="mt-4 mb-5">
        <h2 class="my-0 me-3 lh-1 mb-5">Оформление заказа</h2>
        <div class="row gy-4">
            <div class="col-lg-8">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-4 p-3 shadow-sm border rounded">
                        <h4 class="mb-4">Персональный данные</h4>
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Имя:</label>
                                    <input required type="text" value="{{ Auth::user()->name }}" class="form-control"
                                        name="name" id="name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="surname" class="form-label">Фамилия:</label>
                                    <input required type="text" value="{{ Auth::user()->surname }}" class="form-control"
                                        name="surname" id="surname">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Электронная почта:</label>
                                    <input required type="email" value="{{ Auth::user()->email }}" class="form-control"
                                        name="email" id="email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-5">
                                    <label for="phone" class="form-label">Телефон:</label>
                                    <input required type="text" class="form-control" name="phone" id="phone">
                                    {{-- <div class="form-text"></div> --}}
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-4">Адрес</h4>
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="city" class="form-label">Город:</label>
                                    <input required type="text" class="form-control" name="city" id="city">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="street" class="form-label">Улица:</label>
                                    <input required type="text" class="form-control" name="street" id="street">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="house" class="form-label">Дом:</label>
                                    <input required type="text" class="form-control" name="house" id="house">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="apart" class="form-label">Квартира:</label>
                                    <input required type="text" class="form-control" name="apart" id="apart">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="build" class="form-label">Корпус:</label>
                                    <input type="text" class="form-control" name="build" id="build">
                                    <div class="form-text">Если корпуса нет, ничего не пишите</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="comment" class="form-label">Комментарий к заказу:</label>
                                    <textarea name="comment" id="comment" class="form-control"></textarea>
                                    <div class="form-text">Можете оставить поле пустым</div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-12"> --}}
                            {{-- </div> --}}
                        </div>
                        <div class="d-flex">
                            <button type="submit" class="btn btn-success ms-auto">Оплатить</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="p-3 rounded mb-4"
                    style="max-height: 400px; overflow: auto; box-shadow: inset 0 0 10px rgba(30, 30, 30, .2)">
                    <div class="cart-item border position-relative p-3">
                        <div class="cart-img">
                            <img src="https://hoff.ru/upload/iblock/e0f/e0f59682bd46be48007651b565fb0625.jpg"
                                class="h-100">
                        </div>
                        <div class="cart-info">
                            <div class="cart-title">
                                <p class="fw-semibold">Угловой диван-кровать Торонто</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <span>{{ number_format(23000, 0, ',', ' ') }} ₽.</span>
                                </div>
                                <div class="ms-auto">
                                    <div class="input-group text-center">
                                        <form action="" method="post">
                                            <button class="btn btn-outline-secondary btn-sm rounded-end-0"
                                                style="width: 32px">-</button>
                                        </form>
                                        <input disabled value="{{ 1 }}" type="text"
                                            class="form-control form-control-sm text-center border" style="width: 30px">
                                        <form method="POST" action="">
                                            <button class="btn btn-outline-secondary btn-sm rounded-start-0"
                                                style="width: 32px">+</button>
                                        </form>
                                    </div>
                                    <div class="text-center text-secondary" style="font-size: 12px; margin-top: 10px">
                                        {{ number_format(23000, 0, ',', ' ') }}/шт.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list shadow-sm border rounded p-3">
                    <h3>Ваш заказ</h3>
                    <div class="d-flex justify-content-between mt-4">
                        <p class="text-secondary">Товары, 3 шт.</p>
                        <p class="fw-semibold">23 000 ₽.</p>
                    </div>
                    {{-- @if ($fullSale) --}}
                    <div class="d-flex justify-content-between">
                        <p class="text-secondary">Скидки и акции</p>
                        <p class="fw-semibold text-danger">-{{ number_format(0, 0, ',', ' ') }} ₽.</p>
                    </div>
                    {{-- @endif --}}
                    <div class="d-flex justify-content-between mt-3">
                        <p class="fw-semibold">Итого</p>
                        <p class="fw-semibold">23 000 ₽.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
