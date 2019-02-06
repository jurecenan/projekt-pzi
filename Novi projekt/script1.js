$(document).ready(() => {
    $("#index").load("/test1.html")
    $("#vizija").load("/vizija.html");
    $("#koncerti").load("/koncerti.html");
    $("#registracija").load("/registracija.html");
    $("#o-nama").load("o-nama.html");
    
});


scrollToElement = (el, ms) => {
    let speed = (ms) ? ms : 600;
    $('html,body').animate({
        scrollTop: ($(el).offset().top - 50)
    }, speed);
}