myApp = {};

// myApp.counter = 0;

// myApp.displayHero = function(counter){
//    myApp.counter += 1;
//    $('.front-hero-left li:nth-of-type(' + counter + ')').addClass('hero-active');
//    if (myApp.counter == 3) {
//       myApp.counter = 0;
//    }
// 	console.log(myApp.counter);
// }

myApp.displayHeroBar = function (){
	var lis = $(".front-hero-left > li"),
        currentHighlight = 0;
        N = 3;
    setInterval(function() {
        currentHighlight = (currentHighlight + 1) % lis.length;
        lis.removeClass('hero-active').eq(currentHighlight).addClass('hero-active');
    }, N * 1000);
}

myApp.displayHeroContent = function (){
	var lis = $(".front-hero-right > div"),
        currentHighlight = 0;
        N = 3;
    setInterval(function() {
        currentHighlight = (currentHighlight + 1) % lis.length;
        lis.removeClass('hero-overlay-active').eq(currentHighlight).addClass('hero-overlay-active');
    }, N * 1000);
}
$(function(){
	myApp.displayHeroBar();
	myApp.displayHeroContent();
});
