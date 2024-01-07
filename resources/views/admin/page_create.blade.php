@section('title', $title ?? env('APP_NAME') . ' - новая страцниа')

<x-layout_admin>
    <div class="card">
        <div>
            <a class="btn btn-primary m-1" href="{{ route('admin.page_index') }}">Все страницы</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Навая страница</h5>
            <form method="POST" action="{{ route('admin.page_store') }}">
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
                            <label for="longtitle" class="form-label">Длинный заголовк</label>
                            <input name="longtitle" type="text" class="form-control @error('longtitle') is-invalid @enderror" id="longtitle" aria-describedby="longtitlelHelp" value="{{old('longtitle')}}">
                            <div id="longtitleHelp" class="form-text"></div>
                            @error('longtitle')<div id="longtitleFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Описние</label>
                            <input name="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" aria-describedby="descriptionHelp" value="{{old('description')}}">
                            <div id="descriptionHelp" class="form-text"></div>
                            @error('description')<div id="descriptionFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="keyword" class="form-label">Ключевые слова</label>
                            <input name="keyword" type="text" class="form-control @error('keyword') is-invalid @enderror" id="keyword" aria-describedby="keywordHelp" value="{{old('keyword')}}">
                            <div id="keywordHelp" class="form-text"></div>
                            @error('keyword')<div id="keywordFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="url" class="form-label">Ссылка</label>
                            <input name="url" type="text" class="form-control @error('url') is-invalid @enderror" id="url" aria-describedby="urlHelp" value="{{old('url')}}">
                            <div id="urlHelp" class="form-text"></div>
                            @error('url')<div id="urlFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <div class="form-check form-switch @error('publich') is-invalid @enderror">
                                <input name="top_menu" class="form-check-input @error('top_menu') is-invalid @enderror" type="checkbox" id="top_menu" @checked(old('checked', old('top_menu')))>
                                <label class="form-label" for="top_menu">Показать в меню</label>
                            </div>
                            <div id="top_menuHelp" class="form-text">Показать в верхнем меню</div>
                            @error('top_menu')<div id="top_menuFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-switch @error('publich') is-invalid @enderror">
                                <input name="bottom_menu" class="form-check-input @error('bottom_menu') is-invalid @enderror" type="checkbox" id="bottom_menu" @checked(old('checked', old('bottom_menu')))>
                                <label class="form-label" for="bottom_menu">Показать в меню футер</label>
                            </div>
                            <div id="bottom_menuHelp" class="form-text">Показать в нижнем меню, футер</div>
                            @error('bottom_menu')<div id="bottom_menuFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-switch @error('publich') is-invalid @enderror">
                                <input name="publich" class="form-check-input @error('publich') is-invalid @enderror" type="checkbox" id="publich" @checked(old('checked', old('publich')))>
                                <label class="form-label" for="publich">Опубликован</label>
                            </div>
                            <div id="publichHelp" class="form-text">Виден для посика</div>
                            @error('publich')<div id="publichFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-warning">Создать</button>
            </form>
        </div>
    </div>
</x-layout_admin>