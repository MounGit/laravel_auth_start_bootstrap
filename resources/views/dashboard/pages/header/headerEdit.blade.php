@extends('dashboard.template.templateBack')

@section('back')

    <section class="container py-5">
        <h2 class="page-section-heading text-center text-uppercase text-secondary my-5">Modifier la section header</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('hdrUpdate', $header->id) }}" method="post">
            @csrf
            @method('PUT')

            <label class="my-3" for="img">Photo : </label>
            <input value="{{$header->img}}" type="file" name="img" id="img">

            <label class="my-3" for="title">Titre : </label>
            <input value="{{$header->title}}" type="text" name="title" id="title">

            <label class="my-3" for="description">Description : </label>
            <input value="{{$header->description}}" type="text" name="description" id="description">

            <button class="btn btn-warning w-25 mt-4" type="submit">Modifier</button>
        </form>


    </section>


@endsection
