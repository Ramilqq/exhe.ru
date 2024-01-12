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
            @isset($tarif_sub)
            <div class="col-sm-6">
                <div class="card" style="margin-bottom: 15px;">
                <div class="card-body" style="background-color: #e4f3e2;">
                    <h5 class="card-title">{{$tarif_sub->title}}</h5>
                    <p class="card-text">{!!$tarif_sub->text!!}</p>
                    <form action="{{route('web.user_tarif_unsub')}}" method="POST">
                        @method('POST')
                        @csrf
                        <input name="tarif_id" type="hidden" id="tarif_id" value="{{$tarif_sub->id}}">
                        <button type="submit" class="btn btn-primary">Отключить</button>
                    </form>
                </div>
                </div>
            </div>
            @endisset
        </div>

        <hr>

        <div class="row">
            @foreach($tarifs as $tarif)
            <div class="col-sm-6">
                <div class="card" style="margin-bottom: 15px;">
                <div class="card-body">
                    <h5 class="card-title">{{$tarif->title}}</h5>
                    <p class="card-text">{!!$tarif->text!!}</p>
                    <form action="{{route('web.user_tarif_sub')}}" method="POST">
                        @method('POST')
                        @csrf
                        <input name="tarif_id" type="hidden" id="tarif_id" value="{{$tarif->id}}">
                        <button type="submit" class="btn btn-primary">Подключить</button>
                    </form>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-user-account>