@extends('dashboard.template.templateBack')

@section('back')

<section class="d-flex flex-column align-items-center  py-5">
    <h2 class="page-section-heading text-center text-uppercase text-secondary my-5">Informations footer</h2>
    
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    <div class="my-5">
        <div class="d-flex justify-content-around bg-primary rounded p-5">
            <div >
                <h4 class="text-uppercase mb-4">Location</h4>
                <p class="lead mb-0">
                    {{ $footer[0]->street}}
                    <br />
                    {{ $footer[0]->city}}
                    
                </p>
            </div>

            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">About Freelancer</h4>
                <p class="lead mb-0">
                    {{ $footer[0]->info}}  
                    
                    <a class="text-white" href="{{ $footer[0]->link_url}}">{{ $footer[0]->link }}</a>
                    .
                </p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a class="btn btn-warning" href="{{route('ftrEdit', $footer[0]->id)}}">Modifier</a>
        </div>
    </div>

</section>
@endsection