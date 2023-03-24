@extends('layouts.main')


@section('main')
    <main class="form-signin">
        <form class="mx-auto py-5" style="max-width: 500px">
            <h1 class="h3 mb-3 fw-normal">Пожалуйста, войдите</h1>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Адрес эл. почты</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Пароль</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Запомнить меня
                </label>
            </div>
            <button class="w-100 btn btn-primary mb-4" type="submit">Войти</button>
            <p>Если нет аккаунта, <a href="{{ route('signup') }}">создайте его.</a></p>
        </form>
    </main>
@endsection
