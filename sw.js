self.addEventListener("install", e => {
    e.waitUntil(
        caches.open("static").then (cache => {
            return cache.addAll([
                    "./",
                    "/src/js/app.js",
                    "/src/js/feed.js",
                    "/src/js/material.min.js",
                    "/src/css/app.css",
                    "/src/css/feed.css",
                    "/src/images/main-image.jpg",
                    "https://fonts.googleapis.com/css?family=Roboto:400,700",
                    "https://fonts.googleapis.com/icon?family=Material+Icons",
                    "https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.indigo-pink.min.css",
                    "/manifest.json",
                    "https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2",
                    "https://fonts.gstatic.com/s/materialicons/v109/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2",
                    "/src/images/icons/app-icon-144x144.png",
                    "/favicon.ico"
                ]);
        })
    );
});
self.addEventListener("fetch", e => {
    e.respondWith(
        caches.match(e.request).then(response => {
            return response || fetch(e.request);
        })
    );
});