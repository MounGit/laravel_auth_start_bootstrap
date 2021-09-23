@extends('dashboard.template.templateBack')

@section('back')

    <section class="page-section portfolio  py-5" id="portfolio">
        <div class="">
            <h2 class="page-section-heading text-center text-uppercase text-secondary my-5">Portfolio</h2>
 
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif

            <div class="container d-flex justify-content-center">
                <a class="btn btn-success mt-3 mb-5 fs-4" href="{{route('portfolios.create')}}">Ajouter un élément au portfolio</a>
            </div>
            <div class="row justify-content-center">

                @foreach ($portfolio as $item)

                    <div class="col-md-6 col-lg-4 mb-5 p-4 pb-0 m-1 bg-dark rounded">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i
                                        class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('img/' . $item->url)}}" alt="..." />
                            
                        </div>
                        <div class="d-flex justify-content-around my-3">
                                <a class="btn btn-primary text-black" href="{{route('portfolios.show', $item->id)}}">Détails</a>
                                <a class="btn btn-warning" href="{{route('portfolios.edit', $item->id)}}">Modifier</a>
                                <form action="{{route('portfolios.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-black" type="submit">Supprimer</button>
                                </form>
                            </div>
                    </div>

                @endforeach

            </div>
            <div class="d-flex justify-content-center">
            {{$portfolio->links()}}
            </div>
            <style> 
                .w-5{
                    display: none
                }
            </style>
        </div>
    </section>

@endsection