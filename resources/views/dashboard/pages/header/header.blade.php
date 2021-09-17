@extends('dashboard.template.templateBack')

@section('back')

<section class="d-flex flex-column align-items-center container py-5">
    <h2 class="page-section-heading text-center text-uppercase text-secondary my-5">Informations header</h2>

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    <header class="masthead bg-primary text-white text-center rounded container">
        <div class="container d-flex align-items-center flex-column" >
            <img class="masthead-avatar mb-5" src="{{asset('img/'. $header[0]->img)}}" alt="..." />
            <h1 class="masthead-heading text-uppercase my-4">{{$header[0]->title}}</h1>
            <p class="masthead-subheading font-weight-light mb-0">{{$header[0]->description}}</p>
        </div>
        <div class="text-center mt-4">
            <a class="btn btn-warning" href="{{route('hdrEdit', $header[0]->id)}}">Modifier</a>
        </div>
    </header>

</section>


@endsection