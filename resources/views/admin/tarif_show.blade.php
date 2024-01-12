@section('title', $title ?? env('APP_NAME') . ' - тариф')

<x-layout_admin>
    <div class="card">
        <div>
            <a class="btn btn-primary m-1" href="{{ route('admin.tarif_index') }}">Все тарифы</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Тариф {{$tarif->title}}</h5>
            <div class="row">
                <div class="col-8">
                    <div class="mb-3">
                        <label for="title" class="form-label">Заголовок</label>
                        <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp" value="{{$tarif->title}}">
                        <div id="titleHelp" class="form-text"></div>
                        @error('title')<div id="titleFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Цена</label>
                        <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price" aria-describedby="pricelHelp" value="{{$tarif->price}}">
                        <div id="priceHelp" class="form-text"></div>
                        @error('price')<div id="priceFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Содержание</label>
                        <div name="text" type="text" class="form-control" id="text" aria-describedby="textHelp" style="background-color: var(--bs-secondary-bg);">{!!$tarif->text!!}</div>
                        
                        <div id="textHelp" class="form-text"></div>
                        @error('text')<div id="textFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8" style="display: inline-flex;">
                <a href="{{route('admin.tarif_edit', $tarif->id)}}" class="btn btn-outline-warning btn-sm"><i class="ti ti-edit"></i> Изменить</a>
                <form class="form-del" method="POST" action="{{ route('admin.tarif_delete', $tarif->id) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="ti ti-trash"></i> Удалить</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Пользователи {{$tarif->title}}</h5>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Email</th>
                            <th scope="col">Имя</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user['id']}}</th>
                                <td>{{$user['email']}}</td>
                                <td>{{$user['name']}}</td>
                            </tr>
                        @endforeach
                        @if($users == [])
                        <tr>Пользователей нет</tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <x-script-confirm-delete />
</x-layout_admin>