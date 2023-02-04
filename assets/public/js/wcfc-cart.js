(function (window) {
  "use strict";

  let hasClass, addClass, removeClass;

   let bodyEl = document.body,
  openbtn    = document.getElementById("open-button"),
  closebtn   = document.getElementById("wcfc-close-button"),
  isOpen     = false;

  if ("classList" in document.documentElement) {
    hasClass = function (elem, c) {
      return elem.classList.contains(c);
    };
    addClass = function (elem, c) {
      elem.classList.add(c);
    };
    removeClass = function (elem, c) {
      elem.classList.remove(c);
    };
  }

  let classie = {
    hasClass: hasClass,
    addClass: addClass,
    removeClass: removeClass,
    toggleClass: toggleClass,
    has: hasClass,
    add: addClass,
    remove: removeClass,
    toggle: toggleClass,
  };

  if (typeof define === "function" && define.amd) {
    define(classie);
  } else {
    window.classie = classie;
  }

 

  function initEvents() {
    openbtn.addEventListener("click", toggleMenu);
    closebtn.addEventListener("click", toggleMenu);
  }

  function toggleMenu() {
    if (isOpen) {
      classie.remove(bodyEl, "wcfc-show-container");
    } else {
      classie.add(bodyEl, "wcfc-show-container");
    }
    isOpen = !isOpen;
  }

  initEvents();
})(window);
