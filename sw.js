self.addEventListener("install", e => {
    e.waitUntil(
        caches.open("static").then (cache => {
            return cache.addAll([
                    "./",
                    "/progressive_web_app/first/src/js/app.js",
                    "/progressive_web_app/first/src/js/feed.js",
                    "/progressive_web_app/first/src/js/material.min.js",
                    "/progressive_web_app/first/src/css/app.css",
                    "/progressive_web_app/first/src/css/feed.css",
                    "/progressive_web_app/first/src/images/main-image.jpg",
                    "https://fonts.googleapis.com/css?family=Roboto:400,700",
                    "https://fonts.googleapis.com/icon?family=Material+Icons",
                    "https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.indigo-pink.min.css",
                    "http://localhost/progressive_web_app/first/manifest.json",
                    "https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2",
                    "https://fonts.gstatic.com/s/materialicons/v109/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2",
                    "http://localhost/progressive_web_app/first/src/images/icons/app-icon-144x144.png",
                    "http://localhost/favicon.ico"
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