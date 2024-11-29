<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Stalice</title>
    @include('partials/head')
</head>
<body>
<header>
    @include('partials/menu')
</header>

<main class="main-grid">
    @foreach($books as $book)
        <div class="card flex_card">
            <img src="{{$book->obrazok}}" class="card-img-top" alt="{{$book->nazov}}">
            <div class="card-body">
                <h5 class="card-title">{{$book->nazov}}</h5>
                <p class="card-text">{{\Illuminate\Support\Str::limit($book->popis, 190, '...')}}</p>
            </div>
            <div class="card-footer">
                <a href="/detail/{{$book->id}}" class="btn btn-outline-secondary">Čítať</a>
            </div>
        </div>
    @endforeach

</main>


@include('partials/footer')


</body>
</html>
