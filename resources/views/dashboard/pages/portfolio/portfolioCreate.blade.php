@extends('dashboard.template.templateBack')

@section('back')

    <section class="container py-5">
        <h2 class="page-section-heading text-center text-uppercase text-secondary my-5">Ajouter un élément</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="d-flex flex-column w-75" action="{{ route('portfolios.store') }}" enctype="multipart/form-data" method="post">
            @csrf

            <label class="my-3" for="name">Nom : </label>
            <input value="{{ old('name') }}" type="text" name="name" id="name">

            <label class="my-3" for="url">Image : </label>
            <input type="file" name="url" id="url" value="{{ old('url') }}">

            <label class="my-3" for="description">Description :</label>
            <textarea name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>

            <button class="btn btn-success w-25 mt-4" type="submit">Ajouter</button>
        </form>


    </section>


@endsection
