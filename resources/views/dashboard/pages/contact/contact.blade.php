@extends('dashboard.template.templateBack')

@section('back')

    <section class="container py-5">
    <h2 class="page-section-heading text-center text-uppercase text-secondary my-5">Messages</h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->name }}</td>
                        <td class="d-flex justify-content-around">
                            <a class="btn btn-primary text-black" href="{{route('contacts.show', $data->id)}}">Détails</a>
                            <form action="{{route('contacts.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger text-black" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </section>

@endsection
