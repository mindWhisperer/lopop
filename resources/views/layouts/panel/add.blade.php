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
             * @param {string} password
             * @returns {boolean}
             */
            const passwordChecker = (userEmail, password) => {
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
@endsection
