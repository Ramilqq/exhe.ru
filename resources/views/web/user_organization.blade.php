@section('title', $title ?? env('APP_NAME'))
@section('description', $description ?? 'Сервис проверки и анализа российских юридических лиц и предпринимателей')

@push('css')
    <link rel="stylesheet" href="/assets/css_web/page_index.css?v={{time()}}" />
    <link rel="stylesheet" href="/assets/css_web/main.css?v={{time()}}" />
@endpush

@section('advantages', 'index-page advantage-alt')

<x-user-account>
    <div class="container" style="margin: auto;max-width: 500px;">
        <div class="row">
            <div class="col-sm">
            <form action="{{route('web.user_organization_add')}}" method="POST">
                @method('PATCH')
                @csrf
                <div class="mb-3">
                    <label for="organization" class="form-label @error('organization') is-invalid @enderror">Организация</label>
                    <input name="organization" type="text" class="form-control" id="organization" aria-describedby="organizationHelp">
                    <div id="organizationHelp" class="form-text"></div>
                    @error('organization')<div id="organizationFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <button type="submit" class="btn btn-primary">Добавить организацию</button>
            </form>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                Список пуст ...
            </div>
        </div>
    </div>

</x-user-account>