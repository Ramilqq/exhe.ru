@section('title', $title ?? env('APP_NAME'))

<x-layout_admin>
    <div class="card">
        <div>
            <a class="btn btn-primary m-1" href="{{ route('admin.page_create') }}">Создать страницу</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Страницы</h5>
            
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Заголовок</th>
                        <th scope="col">Ссылка</th>
                        <th scope="col">Управление</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <th scope="row">{{$page['id']}}</th>
                            <td>{{$page['title']}}</td>
                            <td>{{$page['url']}}</td>
                            <td style="display: inline-flex;">
                                <a href="{{route('admin.page_show', $page['id'])}}" class="btn btn-outline-info btn-sm"><i class="ti ti-eye"></i></a>
                                <a href="{{route('admin.page_edit', $page['id'])}}" class="btn btn-outline-warning btn-sm"><i class="ti ti-edit"></i></a>
                                <form class="form-del" method="POST" action="{{ route('admin.page_delete', $page['id']) }}">
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