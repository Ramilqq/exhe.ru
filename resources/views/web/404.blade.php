@section('title', $title ?? env('APP_NAME'))
@section('description', $description ?? 'Сервис проверки и анализа российских юридических лиц и предпринимателей')

@push('css')
    <link rel="stylesheet" href="/assets/css_web/page_index.css?v={{time()}}" />
    <link rel="stylesheet" href="/assets/css_web/main.css?v={{time()}}" />
@endpush

@section('advantages', 'index-page advantage-alt')

<x-layout>
    <div class="d-flex align-items-center justify-content-center vh-100 bg-primary">
        <h1 class="display-1 fw-bold text-white">404</h1>
    </div>
</x-layout>