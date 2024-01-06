@section('title', $title ?? env('APP_NAME') . ' - новая страцниа')

<x-layout_admin>
    <div class="card">
        <div>
            <a class="btn btn-primary m-1" href="{{ route('admin.page_index') }}">Вернуться назад</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Старица {{$page->title}}</h5>
            <div class="row">
                <div class="col-8">
                    <div class="mb-3">
                        <label for="title" class="form-label">Заголовок</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{$page->title}}" disabled>
                        <div id="titleHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="longtitle" class="form-label">Длинный заголовк</label>
                        <input name="longtitle" type="text" class="form-control" id="longtitle" value="{{$page->longtitle}}" disabled>
                        <div id="longtitleHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Описние</label>
                        <input name="description" type="text" class="form-control" id="description" value="{{$page->description}}" disabled>
                        <div id="descriptionHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="keyword" class="form-label">Ключевые слова</label>
                        <input name="keyword" type="text" class="form-control" id="keyword" value="{{$page->keyword}}" disabled>
                        <div id="keywordHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Ссылка</label>
                        <input name="url" type="text" class="form-control" id="url" value="{{$page->url}}" disabled>
                        <div id="urlHelp" class="form-text"></div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            <input name="top_menu" class="form-check-input" type="checkbox" id="top_menu" @if($page->top_menu) checked @endif disabled>
                            <label class="form-label" for="top_menu">Показать в меню</label>
                        </div>
                        <div id="top_menuHelp" class="form-text">Показать в верхнем меню</div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            <input name="bottom_menu" class="form-check-input" type="checkbox" id="bottom_menu" @if($page->bottom_menu) checked @endif disabled>
                            <label class="form-label" for="bottom_menu">Показать в меню футер</label>
                        </div>
                        <div id="bottom_menuHelp" class="form-text">Показать в нижнем меню, футер</div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            <input name="publich" class="form-check-input" type="checkbox" id="publich" @if($page->publich) checked @endif disabled>
                            <label class="form-label" for="publich">Опубликован</label>
                        </div>
                        <div id="publichHelp" class="form-text">Виден для посика</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8" style="display: inline-flex;">
                <a href="{{route('admin.page_edit', $page->id)}}" class="btn btn-outline-warning btn-sm"><i class="ti ti-edit"></i> Изменить</a>
                <form method="POST" action="{{ route('admin.page_delete', $page->id) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="ti ti-trash"></i> Удалить</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-layout_admin>