<!DOCTYPE html>
<html lang="cs">
<head>
    @include('partials/head')
</head>
<body>
<header>
    @include('partials/menu')
</header>

<main>
    <div class="rad">
        <div class="row row-cols-md-3 row-cols-sm-2 rox-cols-xs-1 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="/images/duchovia.jpeg" class="card-img-top" alt="duchovia">
                    <div class="card-body">
                        <h5 class="card-title">Duchovia</h5>
                        <p class="card-text">Roztomilí duchové v příběhu hledají přátelství, dobrodružství a zapomenuté
                            vzpomínky.</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-secondary">Čítať</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/tekvicka.jpeg" class="card-img-top" alt="tekvicka">
                    <div class="card-body">
                        <h5 class="card-title">Kostka</h5>
                        <p class="card-text">Kostým s hlavou tekvice děsí na Halloweenu a rozjasňuje oslavy.</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-secondary">Čítať</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/episode.jpeg" class="card-img-top" alt="epizoda">
                    <div class="card-body">
                        <h5 class="card-title">Lenivá kočka</h5>
                        <p class="card-text">Lenivá kočka, televize, maraton, pohodlně zahrabaná v polštářích</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-secondary">Čítať</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/halloween_all_year_long.jpeg" class="card-img-top" alt="halloween_all_year_long">
                    <div class="card-body">
                        <h5 class="card-title">Halloween all year long</h5>
                        <p class="card-text">Halloween po celý rok: kostýmy, strach, oslavy, střípky hororu.</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-secondary">Čítať</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/skeleton.jpeg" class="card-img-top" alt="kostra">
                    <div class="card-body">
                        <h5 class="card-title">Príbehy odvážneho kostliváka</h5>
                        <p class="card-text">Kostliváka lekají listy, nepravdivé hrůzy, hledání odvahy, přátelství,
                            podzim.</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-secondary">Čítať</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/totem_cat.jpeg" class="card-img-top" alt="totem cat">
                    <div class="card-body">
                        <h5 class="card-title">Totem cat</h5>
                        <p class="card-text">Totem Cat, strážce ducha lesa, vede děti k moudrosti a tajemství starých
                            stromů. Společně objevují magii.</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-secondary">Čítať</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@include('partials/footer')


</body>
</html>
