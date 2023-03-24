@extends('layouts.main')


@section('main')
    <main class="form-signin">
        <form method="POST" class="mx-auto py-5" style="max-width: 500px">
            <h1 class="h3 mb-3 fw-normal">Пожалуйста, войдите</h1>
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-floating mb-3">
                <input value="{{ old('email') }}" type="email" name="email" class="form-control" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Адрес эл. почты</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{ old('name') }}" type="text" name="name" class="form-control" id="name"
                    placeholder="Имя">
                <label for="name">Имя</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{ old('surname') }}" type="text" name="surname" class="form-control" id="surname"
                    placeholder="Фамилия">
                <label for="surname">Фамилия</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{ old('passwd') }}" type="password" name="passwd" class="form-control" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">Пароль</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{ old('confirmPasswd') }}" type="password" name="confirmPasswd" class="form-control"
                    id="confirmPasswd" placeholder="Password">
                <label for="confirmPasswd">Подтверждение пароля</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Запомнить меня
                </label>
            </div>
            <button class="w-100 btn btn-primary  mb-3" type="submit">Войти</button>
            <p>Если есть аккаунт, <a href="{{ route('login') }}">войдите в него.</a></p>
        </form>
    </main>
@endsection
