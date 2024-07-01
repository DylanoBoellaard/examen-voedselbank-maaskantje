<!-- includes the template -->
@include("./layouts/app")

<!-- section for the title -->
<section class="title">
    <h1>Create voedsel pakketten</h1>
</section>

<!-- section for the form -->
<section class="form">
    <form action="{{route('store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <input type="text" name="datum_uitgifte" class="uitgifte" placeholder="uitgifte">
        </div>
        <!-- shows the error for the input above -->
        @error('datum_uitgifte')
        <li>{{$message}}</li>
        @enderror
        <div>
            <input type="text" name="datum_samenstelling" class="samenstelling" placeholder="samenstelling">
        </div>
        <!-- shows the error for the input above -->
        @error('datum_samenstelling')
        <li>{{$message}}</li>
        @enderror
        <div>
            <input type="text" name="klant_id" class="klant_id" placeholder="klant nummer">
        </div>
        <!-- shows the error for the input above -->
        @error('klant_id')
        <li>{{$message}}</li>
        @enderror
        <input type="submit" class="submit" value="Aanmaken">
    </form>
</section>