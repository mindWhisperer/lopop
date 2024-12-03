export const getCookies = () => Object.fromEntries(
    document.cookie
        .split('; ')
        .map(v => v
            .split(/=(.*)/s)
            .map(decodeURIComponent),
        ),
);

