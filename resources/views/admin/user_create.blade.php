@section('name', $name ?? env('APP_NAME') . ' - новая тариф')

@push('scripts')
    <script src="/assets/libs/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'rolearea'});</script>
@endpush

<x-layout_admin>
    <div class="card">
        <div>
            <a class="btn btn-primary m-1" href="{{ route('admin.user_index') }}">Все пользователи</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-name fw-semibold mb-4">Новый пользователь</h5>
            <form method="POST" action="{{ route('admin.user_store') }}">
                @method('POST')
                @csrf
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="name" class="form-label">Имя</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" value="{{old('name')}}">
                            <div id="nameHelp" class="form-role"></div>
                            @error('name')<div id="nameFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emaillHelp" value="{{old('email')}}">
                            <div id="emailHelp" class="form-role"></div>
                            @error('email')<div id="emailFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Роль</label>
                            <select class="form-select" name="role">
                                <option value="0" @selected(old('role') == 0)>User</option>
                                <option value="1" @selected(old('role') == 1)>Admin</option>
                            </select>
                            <div id="roleHelp" class="form-role"></div>
                            @error('role')<div id="roleFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label @error('password') is-invalid @enderror">Пароль</label>
                            <input name="password" type="password" class="form-control" id="password">
                            @error('password')<div id="emailFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label @error('password_confirmation') is-invalid @enderror">Повторите пароль</label>
                            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                            @error('password_confirmation')<div id="password_confirmationFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-warning">Создать</button>
            </form>
        </div>
    </div>
</x-layout_admin>