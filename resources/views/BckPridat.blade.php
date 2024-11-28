<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Pridat</title>
    @include('partials/head')
</head>
<body>
<header>
    @include('partials/menu')
</header>

<main>
    <div class="riadok formular  cal-12">
        <form class="row g-3">
            <div class="col-md-12">
                <h4>Informácie o registrovanom užívateľovi</h4>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
            </div>
            <div class="col-md-12">
                <h4>Informácie o knihe</h4>
                <div class="col-12">
                    <label class="form-label">Názov knihy <br>
                        <input type="text" class="form-control">
                    </label>
                </div>
                <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="form-label">O knihe</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Link na pútavý obrázok</label>
                    <input type="url" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Žáner</label> <br>
                    <label>
                        <select class="form-select">
                            <option selected>...</option>
                            <option>Young Adult</option>
                            <option>Romantika</option>
                            <option>Krimi</option>
                            <option>Detektívka</option>
                            <option>Triler</option>
                            <option>Dobrodružný</option>
                            <option>Fantasy</option>
                            <option>Sci-fi</option>
                            <option>Poézia</option>
                            <option>Deti a mládež</option>
                            <option>Manga</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Súhlasím s pravidlami
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Pridať položku</button>
            </div>
        </form>
    </div>


</main>


@include('partials/footer')
</body>
</html>
