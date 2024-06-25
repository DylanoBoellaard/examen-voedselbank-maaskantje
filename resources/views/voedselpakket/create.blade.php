@include("./layouts/app")

<section class="title">
    <h1>Create voedsel pakketten</h1>
</section>

<section class="form">
    <form action="{{route('store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <input type="text" name="datum_uitgifte" class="uitgifte" placeholder="uitgifte">
        </div>
        @error('datum_uitgifte')
        <li>{{$message}}</li>
        @enderror
        <div>
            <input type="text" name="datum_samenstelling" class="samenstelling" placeholder="samenstelling">
        </div>
        @error('datum_samenstelling')
        <li>{{$message}}</li>
        @enderror
        <div>
            <input type="text" name="klant_id" class="klant_id" placeholder="klant nummer">
        </div>
        @error('klant_id')
        <li>{{$message}}</li>
        @enderror
        <input type="submit" class="submit" value="Aanmaken">
    </form>
</section>