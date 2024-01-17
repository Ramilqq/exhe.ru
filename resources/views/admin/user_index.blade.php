@section('title', $title ?? env('APP_NAME'))

<x-layout_admin>
    <div class="card">
        <div>
            <a class="btn btn-primary m-1" href="{{ route('admin.user_create') }}">Создать пользователя</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Пользователи</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Роль</th>
                        <th scope="col">Управление</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user['id']}}</th>
                            <td>{{$user['email']}}</td>
                            <td>{{$user['name']}}</td>
                            <td>@if($user['role'] == 0) User @else Admin @endif</td>
                            <td style="display: inline-flex;">
                                <a href="{{route('admin.user_show', $user['id'])}}" class="btn btn-outline-info btn-sm"><i class="ti ti-eye"></i></a>
                                <a href="{{route('admin.user_edit', $user['id'])}}" class="btn btn-outline-warning btn-sm"><i class="ti ti-edit"></i></a>
                                <form class="form-del" method="POST" action="{{ route('admin.user_delete', $user['id']) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="ti ti-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <x-script-confirm-delete />
</x-layout_admin>