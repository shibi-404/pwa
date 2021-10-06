if("serviceWorker" in navigator){
    navigator.serviceWorker.register("sw.js").then(registration => {
        console.log("Service Worker Register");
        console.log(registration);
    }).catch(error => {
        console.log("Service Worker Registration Failed");
        console.log(error);
    });
}