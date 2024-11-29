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
                        <select class="form-select" id="book-genre">
                            <option value="-1" selected>...</option>
                            @foreach($genreList as $genre)
                                <option value="{{$genre->id}}">{{$genre->zaner}}</option>
                            @endforeach
                        </select>
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

<script>
    (() => {
        /** @type {HTMLFormElement} */
        const form = document.querySelector('form');

        /** @type {HTMLInputElement} */
        const userEmail = form.querySelector('#user-email');
        /** @type {HTMLInputElement} */
        const userPassword = form.querySelector('#user-password');

        /** @type {HTMLInputElement} */
        const bookName = form.querySelector('#book-name');
        /** @type {HTMLTextAreaElement} */
        const bookDescription = form.querySelector('#book-description');
        /** @type {HTMLInputElement} */
        const bookImage = form.querySelector('#book-image');
        /** @type {HTMLSelectElement} */
        const bookGenre = form.querySelector('#book-genre');
        /** @type {HTMLInputElement} */
        const consent = form.querySelector('#rules-consent');


        /**
         * @param {string} [message]
         */
        const error = (message) => {
            alert(message || 'Neznáma chyba.');
        };

        /**
         * @param {string} userEmail
         * @param {string} passwrod
         * @returns {boolean}
         */
        const passwordChecker = (userEmail, passwrod) => {
            // @todo Dorobiť Ajax volanie pre overenie hesla
            const request = fetch('').then(result => result.json());
            return true;
        };

        /**
         * @param {SubmitEvent} evt
         */
        const checkForm = (evt) => {

            if (!userEmail.value.trim?.() || /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/g.test(userEmail.value))
                return error('Používateľský email má nesprávny formát.');

            if (!userPassword.value.trim?.() || passwordChecker(userEmail.value, userPassword.value))
                return error('Zadané heslo nie je správne.');

            if (!bookName.value.trim?.())
                return error('Názov knihy nesmie byť prázdny.');

            if (!bookDescription.value.trim?.())
                return error('Popis knihy nesmie byť prázdny.');

            if (!bookImage.value.trim?.())
                return error('Obrázok knihy nesmie byť prázdny.');

            if (+bookGenre.value < 0)
                return error('Kategória knihy nesmie byť prázdna.');

            if (!consent.checked)
                return error('Musíte súhlasiť s pravidlami.');

            alert('OK');
        };

        form.addEventListener('submit', evt => {
            evt.preventDefault();
            checkForm(evt);
        });

    })();
</script>

@include('partials/footer')
</body>
</html>
