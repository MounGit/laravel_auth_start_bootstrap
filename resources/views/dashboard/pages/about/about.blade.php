@extends('dashboard.template.templateBack')

@section('back')

    <section class="container py-5 rounded">
        <h2 class="page-section-heading text-center text-uppercase text-secondary my-5">About</h2>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="page-section bg-dark text-white mb-0 rounded" id="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 ms-auto">
                        <p class="lead">{{ $about[0]->text_part_one }}</p>
                    </div>
                    <div class="col-lg-4 me-auto">
                        <p class="lead">{{ $about[0]->text_part_two }}</p>
                    </div>
                </div>

                <div class="text-center mt-4">
                    @can('update', $about)
                        <a class="btn btn-warning" href="{{ route('abouts.edit', $about[0]->id) }}">Modifier</a>
                    @endcan
                </div>
            </div>
        </div>

    </section>

@endsection
