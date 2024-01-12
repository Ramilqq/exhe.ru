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
            <form action="{{route('registration_request')}}" method="POST">
                @method('POST')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label @error('name') is-invalid @enderror">Имя</label>
                    <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp">
                    <div id="namelHelp" class="form-text"></div>
                    @error('name')<div id="nameFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label @error('email') is-invalid @enderror">Email</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                    @error('email')<div id="emailFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label @error('password') is-invalid @enderror">Пароль</label>
                    <input name="password" type="password" class="form-control" id="password">
                    <div id="passwordHelp" class="form-text"></div>
                    @error('password')<div id="passwordFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label @error('password_confirmation') is-invalid @enderror">Повторите пароль</label>
                    <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    <div id="password_confirmationHelp" class="form-text"></div>
                    @error('password_confirmation')<div id="password_confirmationFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <button type="submit" class="btn btn-primary">Регистрация</button>
            </form>
            </div>
        </div>
    </div>
</x-layout>