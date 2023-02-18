/** 
    route is a function that handles link default behaviour.

    It prevents the anchor tag (which we use for the router)
    from performing its default behaviour on click.

    It uses the history API from the user's browser.
**/

const route = (event) => {
    event = event || window.event;
    event.preventDefault();
    window.history.pushState({}, "", event.target.href);
    handleLocation();
};

const routes = {
    404: "/pages.404.html",
    "/": "/pages/index.html",
    "/about": "/pages/about.html",
    "/calendar": "/pages/calendar.html",
};

/** 
    handleLocation locates the path name from 
    our current location in the app.

    It returns a promise.
**/   

const handleLocation = async() => {
    const path = window.location.pathname;
    const route = routes[path] || routes[404];
    const html = await fetch(route).then((data) => data.text());
    document.getElementById("main-page").innerHTML = html;
};

window.onpopstate = handleLocation;
window.route = route;

handleLocation();

window.route = route;