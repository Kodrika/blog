var searchMenuDiv = document.getElementById("search-content");
var searchMenu = document.getElementById("search-toggle");
var navMenuDiv = document.getElementById("nav-content");
var navMenu = document.getElementById("nav-toggle");
document.onclick = check;
function check(e) {
    var target = (e && e.target) || (event && event.srcElement);
    if (!checkParent(target, searchMenuDiv)) {
        if (checkParent(target, searchMenu)) {
            if (searchMenuDiv.classList.contains("hidden")) {
                searchMenuDiv.classList.remove("hidden");
                searchfield.focus();
            } else {
                searchMenuDiv.classList.add("hidden");
            }
        } else {
            searchMenuDiv.classList.add("hidden");
        }
    }
    if (!checkParent(target, navMenuDiv)) {
        if (checkParent(target, navMenu)) {
            if (navMenuDiv.classList.contains("hidden")) {
                navMenuDiv.classList.remove("hidden");
            } else {
                navMenuDiv.classList.add("hidden");
            }
        } else {
            navMenuDiv.classList.add("hidden");
        }
    }

}
function checkParent(t, elm) {
    while (t.parentNode) {
        if (t == elm) {
            return true;
        }
        t = t.parentNode;
    }
    return false;
}
/* Scroll To Top */
var your_header        = document.getElementById('logo'),
    scroll_to_top   = document.getElementById('scrollToTop');
window.onscroll = function(ev) {
    var  scrollTop = window.pageYOffset || document.body.scrollTop;
    if (scrollTop > your_header.offsetHeight + 100) {
        scroll_to_top.style.display = 'block';
    }else{
        scroll_to_top.style.display = 'none';
    }
};
scroll_to_top.onclick = function () {
    scrollTo(your_header);
};
function scrollTo(element) {
    window.scroll({
        behavior: 'smooth',
        left: 0,
        top: element.offsetTop
    });
}
/* Lazyload */
window.lazyLoadOptions = {
    elements_selector: ".lazy",
};