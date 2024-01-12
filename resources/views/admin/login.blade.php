@section('title', $title ?? env('APP_NAME') . ' - новая тариф')

<x-layout_admin_login>

    <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
            <div class="card-body">
                <p class="text-center">{{env('APP_NAME')}}</p>
                <form method="POST" action="{{route('admin.login_request')}}">
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label @error('email') is-invalid @enderror">Email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        @error('email')<div id="emailFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label @error('email') is-invalid @enderror">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                        @error('password')<div id="emailFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                    <div class="d-flex align-items-center justify-content-center">
                        <a class="text-primary fw-bold ms-2" href="{{route('admin.registration')}}">Создать аккаунт</a>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
        
</x-layout_admin_login>