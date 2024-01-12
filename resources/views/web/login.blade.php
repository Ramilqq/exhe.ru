@section('title', $title ?? env('APP_NAME'))
@section('description', $description ?? 'Сервис проверки и анализа российских юридических лиц и предпринимателей')

@push('css')
    <link rel="stylesheet" href="/assets/css_web/page_index.css?v={{time()}}" />
    <link rel="stylesheet" href="/assets/css_web/main.css?v={{time()}}" />
@endpush

@section('advantages', 'index-page advantage-alt')

<x-layout>
    <div class="container" style="margin: auto;max-width: 500px;">
        <div class="row">
            <div class="col-sm">
            <form action="{{route('login_request')}}" method="POST">
                @method('POST')
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label @error('email') is-invalid @enderror">Email</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                    @error('email')<div id="emailFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label @error('password') is-invalid @enderror">Пароль</label>
                    <input name="password" type="password" class="form-control" id="password">
                    <div id="emailHelp" class="form-text"></div>
                    @error('password')<div id="emailFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <button type="submit" class="btn btn-primary">Ввойти</button>
                <a href="{{route('registration')}}" class="btn btn-primary">Зарегистрация</a>
            </form>
            </div>
        </div>
    </div>
</x-layout>