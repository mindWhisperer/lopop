import {AUTH_NAME} from "./constants.js";
import {getCookies} from "./helpers.js";


export class Fetch {

    static #apiUrl = '';

    static setApiUrl(url) {
        if (!url?.trim?.())
            throw new Error('url must be provided');
        this.#apiUrl = url;
    }

    static get(endpoint) {
        return this.#fetch(endpoint);
    }

    static post(endpoint, data) {
        return this.#fetch(endpoint, data, "POST");
    }

    static options(endpoint, data) {
        return this.#fetch(endpoint, data, "OPTIONS");
    }

    static put(endpoint, data) {
        return this.#fetch(endpoint, data, "PUT");
    }

    static delete(endpoint, data) {
        return this.#fetch(endpoint, data, "DELETE");
    }

    static async #fetch(url, data = null, method = "GET") {

        if (!url?.trim?.())
            throw new Error('url must be provided');

        const headers = {
            "Content-Type": "application/json",
        };

        const token = getCookies()?.[AUTH_NAME];
        if (token)
            headers[AUTH_NAME] = "Bearer " + token;

        return await fetch(this.#apiUrl + url, {
            method,
            body: JSON.stringify({data: data || {}}),
            headers,
        }).then(response => response.json());
    }
}

