@section('title', $title ?? env('APP_NAME') . ' - новая страцниа')

<x-layout_admin>
    <div class="card">
        <div>
            <a class="btn btn-primary m-1" href="{{ route('admin.page_index') }}">Все страницы</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Навое содержание страницы</h5>
            <form method="POST" action="{{ route('admin.page.content_store', $page->id) }}">
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
                            <label for="sort" class="form-label">Порядок сортировки</label>
                            <select class="form-select" name="sort" class="form-control @error('sort') is-invalid @enderror" id="sort">
                                @foreach ([0,1,2,3,4,5,6,7,8,9] as $sort)
                                    <option value="{{ $sort }}" @selected(old('sort') == $sort)>
                                        {{ $sort }}
                                    </option>
                                @endforeach
                            </select>
                            <div id="sortHelp" class="form-text"></div>
                            @error('sort')<div id="sortFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Изображение</label>
                            <input name="image" type="file" class="form-control @error('image') is-invalid @enderror" id="image" aria-describedby="imageHelp" value="{{old('image')}}">
                            <div id="imageHelp" class="form-text"></div>
                            @error('image')<div id="imageFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="action" class="form-label">Ссылка</label>
                            <input name="action" type="text" class="form-control @error('action') is-invalid @enderror" id="action" aria-describedby="actionHelp" value="{{old('action')}}">
                            <div id="actionHelp" class="form-text">Если кнопка не требуется, оставте поле пустым</div>
                            @error('action')<div id="actionFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Содержание</label>
                            <textarea name="text" type="text" class="form-control @error('text') is-invalid @enderror" id="text" aria-describedby="textHelp">{{old('text')}}</textarea>
                            <div id="editor"></div>
                            <div id="textHelp" class="form-text"></div>
                            @error('text')<div id="textFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <div class="form-check form-switch @error('html') is-invalid @enderror">
                                <input name="html" class="form-check-input @error('html') is-invalid @enderror" type="checkbox" id="html" @checked(old('checked', old('html')))>
                                <label class="form-label" for="html">Включить редактор</label>
                            </div>
                            <div id="htmlHelp" class="form-text">Включить HTML редактор</div>
                            @error('html')<div id="htmlFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>
                <a href="{{route('admin.page_show', $page->id)}}" class="btn btn-primary">Назад</a>
                <button type="submit" class="btn btn-outline-warning">Создать</button>
            </form>
        </div>
    </div>
</x-layout_admin>