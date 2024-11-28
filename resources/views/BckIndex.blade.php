<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Novinky</title>
    @include('partials/head')
</head>
<body>
<header>
    @include('partials/menu')
</header>
<main>
    <div class="riadok">
        <div class="col-lg-6 textos">
            <button type="button" class="btn btn-outline-danger">Novinka</button>
            <button type="button" class="btn btn-outline-secondary">Čítať</button>
            <h2>Unsupervised</h2>
            <p>
                Mimi je mačka, která byla zvyklá na pozornost a péči svých majitelů.
                Jednoho dne ji však majitelé nechali samotnou doma, když odjeli na dovolenou.
                Na začátku se Mimi chovala klidně, ale postupně se začala nudil a chtěla pozornost.
                Začala hrát s různými věcmi po domě, včetně květin, toaletního papíru a provázků.
                Nakonec zkusila chytit rybu v akváriu. Když se majitelé vrátili, zjistili, že Mimi způsobila nepořádek,
                ale pochopili, že to dělala z osamělosti. Dali jí náležitou pozornost a Mimi byla znovu šťastná.
                Příběh nám připomíná důležitost péče a společnosti pro domácí zvířata, a jak mohou reagovat, když
                zůstanou samy.
            </p>
        </div>

        <div class="col-lg-6 obrazok">
            <img src="images/unsupervised.jpeg" alt="unsupervised">
        </div>
    </div>

    <div class="riadok">
        <div class="col-lg-6 textos">
            <button type="button" class="btn btn-outline-danger">Novinka</button>
            <button type="button" class="btn btn-outline-secondary">Čítať</button>
            <h2>Pumpkin spice never dies</h2>
            <p>
                V příběhu "Pumpkin Spice nikdy neumírá" se odehrává v městě Autumnville,
                kde je nápoj Pumpkin Spice symbolem podzimní radosti a pohody. Hlavní postavou je Lily,
                která má zvláštní vztah k tomuto nápoji. Každý rok, kdy se Pumpkin Spice objeví, pro ni
                znamená zvláštní okamžik štěstí. <br>

                Však jednoho roku nastane problém, když začne Pumpkin Spice nevysvětlitelně mizet ze
                všech kaváren v městě. Lily se rozhodne vyšetřit tuto záhadu a zjistit, co se děje.
                Společně s přáteli odhalí, že šéfkuchař v místní kavárně se pokouší ovládnout recept na
                Pumpkin Spice a změnit ho na něco nebezpečného. <br>

                S odhodláním a odvahou Lily Pumpkin Spice zachrání, zachovávajíc tradici a podzimní kouzlo
                pro celé město Autumnville. Příběh zdůrazňuje důležitost tradic, odvahy a sílu, kterou může
                mít jediný nápoj na lidské srdce, když je spojen s láskou a společenstvím.
            </p>
        </div>
        <div class="col-lg-6 obrazok">
            <img src="images/pumpkin_spice_never_dies.jpeg" alt="pumpkin spice never dies">
        </div>
    </div>

    <div class="riadok">
        <div class="col-lg-6 textos">
            <button type="button" class="btn btn-outline-danger">Novinka</button>
            <button type="button" class="btn btn-outline-secondary">Čítať</button>
            <h2>The return of Vampurr</h2>
            <p>
                "The return of Vampurr" je příběh z tajemného města Furrendale, ve kterém kolovala legenda o záhadném
                Vampurrovi,
                upírovi v kočičím těle. Po dlouhých letech neexistence se Vampurr náhle objevuje znovu, přinášejíce
                tajemství
                a vzrušení do města. Tentokrát se však nevrací jen pro zábavu. Má nový úkol - chránit město před
                rostoucím nebezpečím.
                Vampurr se stává městským hrdinou, který se vydává na dobrodružnou misi, aby ochránil své kočičí
                spoluobyvatele.
                Během noci plné tajemství a napětí se Vampurr stává symbolem ochrany a nekonečného charmu.
            </p>
        </div>
        <div class="col-lg-6 obrazok">
            <img src="images/vampurr.jpeg" alt="the return of vampurr">
        </div>
    </div>


</main>

@include('partials/footer')


</body>
</html>
