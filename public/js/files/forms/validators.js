/**
 * @param {{email: string, password: string}} data
 * @returns {[string, string][]}
 */
export const loginValidator = (data) => {
    /** @type {[string, string][]} */
    const errors = [];

    if (!data?.email || !/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]{2,}$/g.test(data.email)) {
        errors.push(["email", "Nesprávny tvar prihlasovacieho emailu."]);
    }

    if (!data?.password?.trim?.()) {
        errors.push(["password", "Musíš zadať heslo."]);
    } else if (data.password.trim().length < 3) {
        errors.push(["password", "Heslo musí mať aspoň 3 znaky."]);
    }

    return errors;
};

