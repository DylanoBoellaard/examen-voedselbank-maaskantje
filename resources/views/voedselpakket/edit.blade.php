<!-- include the template -->
@include('./layouts/app')

<!-- section for the title -->
<section class="title">
    <h1>Wijzig voedsel pakketten</h1>
</section>

<!-- section for the form -->
<section class="form">
    <form action="{{route('update', ['pakketId' => $pakketId->id])}}" method="post">
        @csrf
        @method('put')
        <div>
            <input type="text" name="datum_uitgifte" class="uitgifte" placeholder="uitgifte" value="{{$pakketId->datum_uitgifte}}">
        </div>
        <!-- shows the error for the datum uitgifte -->
        @error('datum_uitgifte')
        <li>{{$message}}</li>
        @enderror
        <div>
            <input type="text" name="datum_samenstelling" class="samenstelling" placeholder="samenstelling" value="{{$pakketId->datum_samenstelling}}">
        </div>
        <!-- shows the error for the datum samenstelling -->
        @error('datum_samenstelling')
        <li>{{$message}}</li>
        @enderror
        <div>
            <input type="text" name="klant_id" class="klant_id" placeholder="klant nummer" value="{{$pakketId->klant_id}}">
        </div>
        <!-- shows the error for the klant_id -->
        @error('klant_id')
        <li>{{$message}}</li>
        @enderror
        <input type="submit" class="submit" value="Wijzigen">
    </form>
</section>