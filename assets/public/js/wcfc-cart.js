(function (window) {
  "use strict";

  function classReg(className) {
    return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
  }

  var hasClass, addClass, removeClass;

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
  } else {
    hasClass = function (elem, c) {
      return classReg(c).test(elem.className);
    };
    addClass = function (elem, c) {
      if (!hasClass(elem, c)) {
        elem.className = elem.className + " " + c;
      }
    };
    removeClass = function (elem, c) {
      elem.className = elem.className.replace(classReg(c), " ");
    };
  }

  function toggleClass(elem, c) {
    var fn = hasClass(elem, c) ? removeClass : addClass;
    fn(elem, c);
  }

  var classie = {
    // full names
    hasClass: hasClass,
    addClass: addClass,
    removeClass: removeClass,
    toggleClass: toggleClass,
    // short names
    has: hasClass,
    add: addClass,
    remove: removeClass,
    toggle: toggleClass,
  };

  // transport
  if (typeof define === "function" && define.amd) {
    // AMD
    define(classie);
  } else {
    // browser global
    window.classie = classie;
  }

  var bodyEl = document.body,
    // content = document.querySelector( '.content-wrap' ),
    openbtn = document.getElementById("open-button"),
    closebtn = document.getElementById("wcfc-close-button"),
    isOpen = false;

  function init() {
    initEvents();
  }

  function initEvents() {
    openbtn.addEventListener("click", toggleMenu);
    if (closebtn) {
      closebtn.addEventListener("click", toggleMenu);
    }

    // close the menu element if the target it´s not the menu element or one of its descendants..
    // content.addEventListener( 'click', function(ev) {
    // 	var target = ev.target;
    // 	if( isOpen && target !== openbtn ) {
    // 		toggleMenu();
    // 	}
    // } );
  }

  function toggleMenu() {
    if (isOpen) {
      classie.remove(bodyEl, "wcfc-show-container");
    } else {
      classie.add(bodyEl, "wcfc-show-container");
    }
    isOpen = !isOpen;
  }

  init();
})(window);
