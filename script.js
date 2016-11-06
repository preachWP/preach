myApp = {};

myApp.counter = 0;

myApp.displayHero = function(){
   myApp.counter += 1;
   $(`.front-her-right div:nth-of-type(${counter})`).addClass('hero-active');
   if (myApp.counter == 3) {
      myApp.counter = 0;
   }
}

$(function(){
   console.log('hello this is working');
})
