
<x-mail::message>
# A série {{ $nomeSerie }} de {{ $qtdTemporadas }} temporadas e {{ $episodiosPorTemporadas }} episódios por temporada foi criada!

Acesse aqui:

<x-mail::button :url="route('seasons.index', $idSerie)">
Ver série
</x-mail::button>
 

</x-mail::message>