@extends('layouts.main')

@section('main')
    <section id="hello" class="position-relative">
        <!-- {{ Request::input('type') }} -->
        <div class="row gy-4">
            <div class="col-lg-2">
                <div class="aside-content">
                    <h1>Поиск</h1>
                    <form action="?" method="GET">
                        <div class="rounded-1">
                            <div class="mb-3">
                                <label for="name" class="form-label">Название</label>
                                <input name="title" value="{{ old('title') }}" type="text" autocomplete="off"
                                    class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="type-user" class="form-label">Категория</label>
                                <div class="form-check form-switch">
                                    <input name="categories[]" @if (old('categories') && in_array('Диваны', old('categories')))  @endif
                                        class="form-check-input" type="checkbox" role="switch" id="expecting">
                                    <label class="form-check-label" for="expecting">Диваны</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input name="categories[]" @if (old('categories') && in_array('Шкафы', old('categories')))  @endif
                                        class="form-check-input" type="checkbox" role="switch" id="expecting">
                                    <label class="form-check-label" for="expecting">Шкафы</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input name="categories[]" @if (old('categories') && in_array('Кровати', old('categories')))  @endif
                                        class="form-check-input" type="checkbox" role="switch" id="expecting">
                                    <label class="form-check-label" for="expecting">Кровати</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input name="categories[]" @if (old('categories') && in_array('Столы', old('categories')))  @endif
                                        class="form-check-input" type="checkbox" role="switch" id="expecting">
                                    <label class="form-check-label" for="expecting">Столы</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="type-user" class="form-label">Категория</label>
                                <div class="input-group">
                                    <input type="text" name="price-from" class="form-control" placeholder="0">
                                    <span class="input-group-text" id="basic-addon1">-</span>
                                    <input type="text" name="price-to" class="form-control" placeholder="50 000">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="btn-group w-100">
                                    <button class="btn btn-sm btn-secondary">Отмена</button>
                                    <button class="btn btn-sm btn-success">Применить</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row m-0 g-4 w-100 px-4">
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
            </div>
        </div>
    </section>
@endsection
