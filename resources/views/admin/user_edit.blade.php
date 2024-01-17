@section('name', $name ?? env('APP_NAME') . ' - новый тариф')

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
            <h5 class="card-name fw-semibold mb-4">Пользователь {{$user->name}}</h5>
            <form method="POST" action="{{ route('admin.user_update', $user->id) }}">
                @method('PATCH')
                @csrf
                <input name="id" type="hidden" id="id" value="{{$user->id}}">
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="name" class="form-label">Имя</label>
                            <input name="name" type="role" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" value="{{old('name') ?: $user->name}}">
                            <div id="nameHelp" class="form-role"></div>
                            @error('name')<div id="nameFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="role" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" value="{{old('email') ?: $user->email}}">
                            <div id="emailHelp" class="form-role"></div>
                            @error('email')<div id="emailFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Роль</label>
                            <select class="form-select" name="role">
                                <option value="0" @selected(old('role') == 0 ?: $user->role == 0)>User</option>
                                <option value="1" @selected(old('role') == 1 ?: $user->role == 1)>Admin</option>
                            </select>
                            <div id="roleHelp" class="form-role"></div>
                            @error('role')<div id="roleFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>
                <a href="{{route('admin.user_show', $user->id)}}" class="btn btn-primary">Назад</a>
                <button type="submit" class="btn btn-outline-warning">Обновить</button>
            </form>
        </div>
    </div>
</x-layout_admin>