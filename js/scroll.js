$(document).ready(function(){
    $('a[href^="#"]:not(.dialog)').click(function(){ //берем все ссылки атрибут href которых начинается с #
        if(document.getElementById($(this).attr('href').substr(1)) != null) { //на странице есть элемент с нужным нам id
            $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top }, 1100); // анимируем скролл к элементу
        }
        return false;
    });
});