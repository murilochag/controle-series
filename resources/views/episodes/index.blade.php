<x-layout title="Episódios">
    @if (session('mensagemSucesso'))
        <div class="alert alert-success">
            {{ session('mensagemSucesso') }}
        </div>
    @endif
    <form method="post">
        @csrf
        <ul class="list-group">
            @foreach ($episodes as $episode)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Episódio {{$episode->number}}
                    <input 
                        type="checkbox" 
                        name="episodes[]" 
                        value="{{$episode->id}}"
                        @if ($episode->watched) checked @endif >
                </li>
            @endforeach
        </ul>
        <button class="btn btn-primary mt-3 mb-3">Salvar</button>
    </form>
</x-layout>
