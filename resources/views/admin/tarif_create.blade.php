@section('title', $title ?? env('APP_NAME') . ' - новая тариф')

@push('scripts')
    <script src="/assets/libs/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@endpush

<x-layout_admin>
    <div class="card">
        <div>
            <a class="btn btn-primary m-1" href="{{ route('admin.tarif_index') }}">Все тарифы</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Навый тариф</h5>
            <form method="POST" action="{{ route('admin.tarif_store') }}">
                @csrf
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Заголовок</label>
                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp" value="{{old('title')}}">
                            <div id="titleHelp" class="form-text"></div>
                            @error('title')<div id="titleFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Цена</label>
                            <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price" aria-describedby="pricelHelp" value="{{old('price')}}">
                            <div id="priceHelp" class="form-text"></div>
                            @error('price')<div id="priceFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Содержание</label>
                            <textarea name="text" type="text" class="form-control @error('text') is-invalid @enderror" id="text" aria-describedby="textHelp">{{old('text')}}</textarea>

                            <div id="textHelp" class="form-text"></div>
                            @error('text')<div id="textFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-warning">Создать</button>
            </form>
        </div>
    </div>
</x-layout_admin>