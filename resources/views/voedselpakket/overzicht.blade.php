@include("./layouts/app")

<section class="title">
    <h1>Overzicht voedsel pakketten</h1>
</section>

<section class="create">
    <a href="{{route('create')}}">Nieuw voedsel pakket</a>
</section>

<section class="table">
    <table>
        <thead>
            <tr>
                <th>Datum uitgifte</th>
                <th>Datum samenstelling</th>
                <th>Naam</th>
                <th>Huisnummer</th>
                <th>Postcode</th>
                <th>Plaats</th>
                <th>Straat</th>
                <th>Wijzigen</th>
            </tr>
        </thead>
        @if(session()->has('alert'))
        <h1>{{session()->get('alert')}}</h1>
        @else
        <tbody>
            @forelse ($data as $voedselpakket)
            <tr>
                <td>{{date('d-m-Y', strtotime($voedselpakket->datum_uitgifte))}}</td>
                <td>{{date('d-m-Y', strtotime($voedselpakket->datum_samenstelling))}}</td>
                <td>{{$voedselpakket->voornaam}}</td>
                <td>{{$voedselpakket->huisnummer}}</td>
                <td>{{$voedselpakket->postcode}}</td>
                <td>{{$voedselpakket->plaats}}</td>
                <td>{{$voedselpakket->straat}}</td>
                <td>
                    <a href="{{route('edit', ['pakketId' => $voedselpakket->id])}}">wijzigen</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7">er zijn geen voedsel pakketten op dit moment.</td>
            </tr>
            @endforelse
        </tbody>
        @endif
    </table>
</section>