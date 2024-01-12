@section('title', $title ?? env('APP_NAME') . ' - новый тариф')

@push('scripts')
    <script src="/assets/libs/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@endpush

<x-layout_admin>
    <div class="card">
        <div>
            <a class="btn btn-primary m-1" href="{{ route('admin.tarif_index') }}">Все Тарифы</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Тариф {{$tarif->title}}</h5>
            <form method="POST" action="{{ route('admin.tarif_update', $tarif->id) }}">
                @method('PATCH')
                @csrf
                <input name="id" type="hidden" id="id" value="{{$tarif->id}}">
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Заголовок</label>
                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp" value="{{old('title') ?: $tarif->title}}">
                            <div id="titleHelp" class="form-text"></div>
                            @error('title')<div id="titleFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Заголовок</label>
                            <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price" aria-describedby="priceHelp" value="{{old('price') ?: $tarif->price}}">
                            <div id="priceHelp" class="form-text"></div>
                            @error('price')<div id="priceFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Содержание</label>
                            <textarea name="text" type="text" class="form-control @error('text') is-invalid @enderror" id="text" aria-describedby="textHelp">{{old('text') ?: $tarif->text}}</textarea>

                            <div id="textHelp" class="form-text"></div>
                            @error('text')<div id="textFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>
                <a href="{{route('admin.tarif_show', $tarif->id)}}" class="btn btn-primary">Назад</a>
                <button type="submit" class="btn btn-outline-warning">Обновить</button>
            </form>
        </div>
    </div>
</x-layout_admin>