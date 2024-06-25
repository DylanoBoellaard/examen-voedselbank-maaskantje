@include("./layouts/app")

<section class="title">
    <h1>Overzicht voedsel pakketten</h1>
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
            </tr>
        </thead>
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
            </tr>
            @empty
            <tr>
                <td colspan="7">er zijn geen voedsel pakketten op dit moment.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</section>