@extends('dashboard.template.templateBack')

@section('back')

<section class="container d-flex flex-column align-items-center  py-5">
<h2 class="page-section-heading text-center text-uppercase text-secondary my-5">Message {{$contact->name}}</h2>

    <div class="card" style="width: 40rem">
        <h5 class="card-header">{{$contact->name}}</h5>
        <div class="card-body">
          <h5 class="card-title">Message</h5>
          <p class="card-text">{{$contact->msg}}</p>
          <p class="card-text">{{$contact->email}}</p>
          <p class="card-text">{{$contact->phone}}</p>
            <div class="d-flex justify-content-around">
                <a class="btn btn-primary text-black" href="{{route('contacts.index')}}">Retour</a>
                <form action="{{route('contacts.destroy', $contact->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger text-black" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
      </div>
</section>

@endsection