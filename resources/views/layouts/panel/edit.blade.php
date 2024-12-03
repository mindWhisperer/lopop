@extends('index')

@section('title', $book->name . ' | Upraviť')

@section('content')
    <main>
        <div class="riadok formular">
            <form class="row g-3">
                <input type="hidden" name="id" value="{{$book->id ?? ''}}">
                <div class="col-md-12">
                    <h4>Upravuješ knihu - {{$book->name ?? ''}}</h4>

                    @include('partials.forms.add_edit')

                </div>
                <div class="col-12">
                    <button type="button" class="btn btn-primary">Aktualizovať položku</button>
                </div>
            </form>
        </div>
    </main>
@endsection

