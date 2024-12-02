<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Uprava</title>
    @include('partials/head')
</head>
<body>
<header>
    @include('partials/menu')
</header>
<main>
    <div class="riadok formular">
        <form class="row g-3">
            <input type="hidden" name="id" value="{{$book->id}}">
            <div class="col-md-12">
                <h4>Informácie o knihe</h4>
                <div class="col-12">
                    <label class="form-label">Názov knihy <br>
                        <input type="text" value="{{$book->nazov}}" class="form-control" id="book-name">
                    </label>
                </div>
                <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="form-label">O knihe</label>
                    <textarea class="form-control" id="book-description" rows="3">{{$book->popis}}</textarea>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Link na pútavý obrázok</label>
                    <input type="url" value="{{$book->obrazok}}" class="form-control" id="book-image">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Žáner</label> <br>
                    <select class="form-select" id="book-genre">
                        <option value="-1" selected>...</option>
                        @foreach($genreList as $genre)
                            <option value="{{$genre->id}}">{{$genre->zaner}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-primary">Aktualizovať položku</button>
            </div>
        </form>
    </div>


</main>

@include('partials/footer')


</body>
</html>
