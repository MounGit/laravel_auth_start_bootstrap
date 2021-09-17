@extends('dashboard.template.templateBack')

@section('back')

    <section class="container py-5">
        <h2 class="page-section-heading text-center text-uppercase text-secondary my-5">Modifier la section about</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="d-flex flex-column w-75" action="{{ route('abouts.update', $about->id) }}" method="post">
            @csrf
            @method('PUT')

            <label class="my-3" for="part1">Description première partie : </label>
            <textarea name="text_part_one" id="part1" cols="20" rows="6">{{ $about->text_part_one }}</textarea>

            <label class="my-3" for="part2">Description deuxième partie : </label>
            <textarea name="text_part_two" id="part2" cols="30" rows="6">{{ $about->text_part_two }}</textarea>

            <button class="btn btn-warning w-25 mt-4" type="submit">Modifier</button>
        </form>


    </section>


@endsection
