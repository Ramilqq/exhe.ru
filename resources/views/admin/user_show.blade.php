@section('name', $name ?? env('APP_NAME') . ' - тариф')

<x-layout_admin>
    <div class="card">
        <div>
            <a class="btn btn-primary m-1" href="{{ route('admin.user_index') }}">Все пользователи</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-name fw-semibold mb-4">Пользователь {{$user->name}}</h5>
            <div class="row">
                <div class="col-8">
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input name="name" type="role" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" value="{{$user->name}}" disabled>
                        <div id="nameHelp" class="form-role"></div>
                        @error('name')<div id="nameFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="role" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emaillHelp" value="{{$user->email}}" disabled>
                        <div id="emailHelp" class="form-role"></div>
                        @error('email')<div id="emailFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Роль</label>
                        <select class="form-select" name="role" disabled>
                            <option value="0" @selected($user->role == 0)>User</option>
                            <option value="1" @selected($user->role == 1)>Admin</option>
                        </select>
                        <div id="roleHelp" class="form-role"></div>
                        @error('role')<div id="roleFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8" style="display: inline-flex;">
                <a href="{{route('admin.user_edit', $user->id)}}" class="btn btn-outline-warning btn-sm"><i class="ti ti-edit"></i> Изменить</a>
                <form class="form-del" method="POST" action="{{ route('admin.user_delete', $user->id) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="ti ti-trash"></i> Удалить</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <x-script-confirm-delete />
</x-layout_admin>