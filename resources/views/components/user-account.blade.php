<x-layout>
    <div class="container" style="max-width: 500px;min-height: 500px">
        <div class="row">
            <div class="col">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="padding: 5px" >
                    <div class="btn-group me-2" role="group" aria-label="First group">
                        <a class="btn btn-secondary" href="{{route('web.user_organization')}}">Отслеживание</a>
                    </div>
                    <div class="btn-group me-2" role="group" aria-label="First group">
                        <a class="btn btn-secondary" href="{{route('web.user_tarif')}}">Тариф</a>
                    </div>
                    <div class="btn-group me-2" role="group" aria-label="First group">
                        <a class="btn btn-secondary" href="{{route('web.user_profile')}}">Прфиль</a>
                    </div>

                    <div class="btn-group me-2" role="group" aria-label="First group">
                        <a class="btn btn-primary" href="{{route('logout')}}">Выйти</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
            {{ $slot }}
            </div>
        </div>
    </div>
</x-layout>