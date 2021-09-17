@extends('dashboard.template.templateBack')

@section('back')

<section class="container  py-5">
    <h2 class="page-section-heading text-center text-uppercase text-secondary my-5">Détails <i>{{$portfolio->name}}</i></h2>

    {{-- <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div> --}}
                <div class="modal-body text-center pb-5 mb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                {{-- <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{$portfolio->name}}</h2> --}}
                                <!-- Icon Divider-->
                                {{-- <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div> --}}
                                <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="{{asset('img/' . $portfolio->url)}}" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4 fs-3">{{$portfolio->description}}</p>
                                <div class="d-flex justify-content-center mb-5">
                                    <a class="btn btn-warning mx-2" href="{{route('portfolios.edit', $portfolio->id)}}">Modifier</a>
                                    <form action="{{route('portfolios.destroy', $portfolio->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger text-black mx-2" type="submit">Supprimer</button>
                                    </form>
                                </div>
                                {{-- <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </div>
        </div>
    </div> --}}

</section>
@endsection