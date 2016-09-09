$(function () { // Same as document.addEventListener("DOMContentLoaded"...

  // Same as document.querySelector("#navbarToggle").addEventListener("blur",...
  $("#navbarToggle").blur(function (event) {
    var screenWidth = window.innerWidth;
    if (screenWidth < 768) {
      $("#collapsable-nav").collapse('hide');
    }
  });
});
//var malarkey = require('malarkey');
/*
var elem = document.querySelector('.malarkey');
var elem2 = document.querySelector('.undertext')
var opts = {
  typeSpeed: 50,
  deleteSpeed: 50,
  pauseDelay: 2000,
  loop: false,
  postfix: ''
};
malarkey(elem, opts).type('Amrit.').pause(700).delete(100)
  .type(' a Web Developer.').pause(700).delete(100)
  .type(' a Web Designer.').pause(700).delete(100)
  .type(' a Geek.').pause(700).delete(100)
  .type(' a Dreamer.').pause(700).delete(100)
  .type(' a Foody.').pause(700).delete(100)
  .type(' a Traveler').pause(700).delete(100)
  .type(' Single.').pause(700).delete(100)
  .type(' a Hacker.').pause(700).delete(100)
  .type(' that guy.').pause(700).delete(100)
  .type(' Amrit.').pause(700).delete(100)
  .type(' Amrit Raj. ');

malarkey(elem2, opts).pause(21000).type(' And I love building things with Code. ');
*/
