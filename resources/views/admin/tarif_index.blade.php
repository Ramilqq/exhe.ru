@section('title', $title ?? env('APP_NAME'))

<x-layout_admin>
    <div class="card">
        <div>
            <a class="btn btn-primary m-1" href="{{ route('admin.tarif_create') }}">Создать тариф</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Тарифы</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Тариф</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Управление</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tarifs as $tarif)
                        <tr>
                            <th scope="row">{{$tarif['id']}}</th>
                            <td>{{$tarif['title']}}</td>
                            <td>{{$tarif['price']}}</td>
                            <td style="display: inline-flex;">
                                <a href="{{route('admin.tarif_show', $tarif['id'])}}" class="btn btn-outline-info btn-sm"><i class="ti ti-eye"></i></a>
                                <a href="{{route('admin.tarif_edit', $tarif['id'])}}" class="btn btn-outline-warning btn-sm"><i class="ti ti-edit"></i></a>
                                <form class="form-del" method="POST" action="{{ route('admin.tarif_delete', $tarif['id']) }}">
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