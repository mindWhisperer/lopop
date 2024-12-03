@extends('index')

@section('title', 'Pridať')

@section('content')
    <main>
        <div class="riadok formular  cal-12">
            <form class="row g-3">
                <div class="col-md-12">
                    <h4>Pridať novú knihu</h4>
                    @include('partials.forms.add_edit')
                </div>

                <div class="col-12">
                    <button class="btn btn-primary">Pridať položku</button>
                </div>
            </form>
        </div>
    </main>
@endsection
