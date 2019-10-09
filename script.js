$(".burger").click(function(event){
    $(this).toggleClass("burger-active");
    $("nav").toggleClass("active")
});

let sliderItems = $(".slider-box-item.normal");
let sliderBox = $('.slider-box');
let now = 0;

sliderBox.css('width', (sliderItems.length + 2) * 100  + '%');

let siID = setInterval(function(){
    $(".slider-right-arrow").click();    
}, 2000);


console.log(siID);

$(".slider-left-arrow").click(function(event){
    clearInterval(siID);

    siID = setInterval(function(){
        $(".slider-right-arrow-right-box").click();    
    }, 2000);

    if( now == 0 ){
        now--;
        sliderBox.animate({
            left: -100 * (now + 1) + "%" 
        }, 500, function(){
            now = sliderItems.length - 1;
            sliderBox.css('left', -100 * (now + 1) + '%');
        });
        
    }else{
        now--;
        sliderBox.animate({
            left: -100 * (now + 1) + "%" 
        });
    }
   
});

$(".slider-right-arrow").click(function(event){

    clearInterval(siID);
        
    siID = setInterval(function(){
        $(".slider-right-arrow-right-box").click();    
    }, 2000);

    if( now == sliderItems.length - 1 ){
        now++;
        sliderBox.animate({
            left: -100 * (now + 1) + "%" 
        }, 500, function(){
            now = 0;
            sliderBox.css('left', -100 * (now + 1) + '%');
        });
    }else{
        now++;
        sliderBox.animate({
            left: -100 * (now + 1) + "%" 
        });
    }
});
$(".news-btn").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.container').offset().top - $("header").outerHeight()
    });
});

// let form = $('.container form');
// let emailRegexp =  /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

// form.submit(function(event){
//     event.preventDefault();

//     let fioInput = $(this).find('input[name=fio]');
//     let emailInput = $(this).find('input[name=email]');
//     let telInput = $(this).find('input[name=phone]');

//     // console.log( fioInput.val().length );
//     if( fioInput.val().length == 0 
//         || emailRegexp.test( emailInput.val() ) == false
//         || telInput.val().length == 0 ){
        
//         fioInput.val().length == 0 ? fioInput.addClass('error') : fioInput.removeClass('error');
//         emailRegexp.test( emailInput.val() ) == false ? emailInput.addClass('error') : emailInput.removeClass('error');
//         telInput.val().length == 0 ? telInput.addClass('error') : telInput.removeClass('error');

//     }else{
//         // Вот тут мы будет отправлять форму, тут все хорошо!
//         alert('Все хорошо');
//         fioInput.removeClass('error');
//         emailInput.removeClass('error');
//         telInput.removeClass('error');
//     }
// });

// form.find('input').keyup(function(event){
//     if( $(this).attr('name') == 'email' ){
//         emailRegexp.test( $(this).val() ) == false ? $(this).addClass('error') : $(this).removeClass('error');
//     }else{
//         $(this).val().length == 0 ? $(this).addClass('error') : $(this).removeClass('error');
//     }

//     console.log( $(this).attr('name') );
// });