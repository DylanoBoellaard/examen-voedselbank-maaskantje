<!-- includes the template -->
@include("./layouts/app")

<!-- section for the title -->
<section class="title">
    <h1>Overzicht voedsel pakketten</h1>
</section>

<!-- section for the create button -->
<section class="create">
    <a href="{{route('create')}}">Nieuw voedsel pakket</a>
</section>

<!-- section for the table -->
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
                <th>Verwijderen</th>
            </tr>
        </thead>
        <!-- checks if there is a alert -->
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
                <td>
                    <a href="{{route('delete', ['pakketId' => $voedselpakket->id])}}">Verwijderen</a>
                </td>
            </tr>
            <!-- if empty then show this td -->
            @empty
            <tr>
                <td colspan="9">er zijn geen voedsel pakketten op dit moment.</td>
            </tr>
            @endforelse
        </tbody>
        @endif
    </table>
</section>