import {Fetch} from "./files/connector.js";
import {loginValidator} from "./files/forms/validators.js";
import {formDataCollector} from "./files/forms/form-data-colletor.js";

Fetch.setApiUrl("/api/v1/");

// login
formDataCollector(
    document.querySelector('form#login'),
    'login', loginValidator,
    (form, result) => {
        if (result.success)
            window.location.href = '/';
    });
