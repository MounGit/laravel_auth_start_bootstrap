@extends('dashboard.template.templateBack')

@section('back')

    <section class="container  py-5">
        <h2 class="page-section-heading text-center text-uppercase text-secondary my-5">Modifier la section footer</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="d-flex flex-column w-75" action="{{ route('ftrUpdate', $footer->id) }}" method="post">
            @csrf
            @method('PUT')

            <label class="my-3" for="street">Rue et numéro : </label>
            <input value="{{$footer->street}}" type="text" name="street" id="street">

            <label class="my-3" for="city">Ville et code postal : </label>
            <input value="{{$footer->city}}" type="text" name="city" id="city">

            <label class="my-3" for="info">Description : </label>
            <input value="{{$footer->info}}" type="text" name="info" id="info">

            <label class="my-3" for="link">Nom site : </label>
            <input value="{{$footer->link}}" type="text" name="link" id="link">

            <label class="my-3" for="link_url">Lien : </label>
            <input value="{{$footer->link_url}}" type="text" name="link_url" id="link_url">

           

            <button class="btn btn-warning w-25 mt-4" type="submit">Modifier</button>
        </form>


    </section>


@endsection
