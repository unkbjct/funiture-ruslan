@extends('layouts.main')


@section('main')
    <h2 class="mb-3">Профиль</h2>
    <hr class="mb-3">
    <form action="{{ route('user.edit', ['user' => Auth::user()->id]) }}" method="POST" class=""
        style="max-width: 500px">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible mt-3 mx-auto" role="alert">
                <h4 class="alert-heading d-flex align-items-center">
                    <div>Ошибка!</div>
                </h4>
                <hr>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('success') )
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        @csrf
        <div class="mb-3">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Почта</span>
                <input name="email" required type="text" class="form-control" value="{{ Auth::user()->email }}"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Имя</span>
                <input name="name" required type="text" class="form-control" value="{{ Auth::user()->name }}"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Фамилия</span>
                <input name="surname" required type="text" class="form-control" value="{{ Auth::user()->surname }}"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <div class="mb-3">
                <button type="reset" class="btn btn-secondary">Отмена</button>
                <button class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </form>

    {{-- <div class="mb-5"></div>
<h2 class="mb-3">Приватность</h2>
<hr class="mb-3">
<div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">Закрытый профиль</label>
</div>
<div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">История турниров в которых я участвовал видны всем</label>
</div>
<div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">История турниров которые я создал видна всем</label>
</div>
<div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">Мои подписки видны всем</label>
</div>
<div class="mb-3">
    <button class="btn btn-secondary">Отмена</button>
    <button class="btn btn-primary">Сохранить</button>
</div> --}}
    <div class="mb-5"></div>
@endsection
