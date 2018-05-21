!function(n){var e={};function s(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return n[r].call(o.exports,o,o.exports,s),o.l=!0,o.exports}s.m=n,s.c=e,s.d=function(n,e,r){s.o(n,e)||Object.defineProperty(n,e,{configurable:!1,enumerable:!0,get:r})},s.r=function(n){Object.defineProperty(n,"__esModule",{value:!0})},s.n=function(n){var e=n&&n.__esModule?function(){return n.default}:function(){return n};return s.d(e,"a",e),e},s.o=function(n,e){return Object.prototype.hasOwnProperty.call(n,e)},s.p="/dist",s(s.s="./src/app.js")}({"./src/app.js":
/*!********************!*\
  !*** ./src/app.js ***!
  \********************/
/*! no static exports found */function(module,exports,__webpack_require__){"use strict";eval('\n\n__webpack_require__(/*! ./sass/main.scss */ "./src/sass/main.scss");\n\n__webpack_require__(/*! ./js/main.js */ "./src/js/main.js");\n\n__webpack_require__(/*! ./js/sw.js */ "./src/js/sw.js");\n\n__webpack_require__(/*! ./js/checkConnection.js */ "./src/js/checkConnection.js");\n\n//# sourceURL=webpack:///./src/app.js?')},"./src/js/checkConnection.js":
/*!***********************************!*\
  !*** ./src/js/checkConnection.js ***!
  \***********************************/
/*! no static exports found */function(module,exports,__webpack_require__){"use strict";eval("\n\n// https://developer.mozilla.org/en-US/docs/Web/API/NavigatorOnLine/onLine\n\n// check if the browser is online\nfunction goOnline() {\n  document.body.classList.remove('offline');\n  document.body.classList.add('online');\n}\n\nfunction goOffline() {\n  document.body.classList.add('offline');\n  document.body.classList.remove('online');\n}\n\n// listen to check when the status change\nwindow.addEventListener('offline', function (_) {\n  return goOffline();\n});\nwindow.addEventListener('online', function (_) {\n  return goOnline();\n});\n\n//# sourceURL=webpack:///./src/js/checkConnection.js?")},"./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/*! no static exports found */function(module,exports,__webpack_require__){"use strict";eval("\n\n//# sourceURL=webpack:///./src/js/main.js?")},"./src/js/sw.js":
/*!**********************!*\
  !*** ./src/js/sw.js ***!
  \**********************/
/*! no static exports found */function(module,exports,__webpack_require__){"use strict";eval("\n\nif ('serviceWorker' in navigator) {\n  window.addEventListener('load', function () {\n    navigator.serviceWorker.register('/sw.js').then(function (registration) {\n      console.log('SW registered: ', registration);\n    }).catch(function (registrationError) {\n      console.log('SW registration failed: ', registrationError);\n    });\n  });\n}\n\n//# sourceURL=webpack:///./src/js/sw.js?")},"./src/sass/main.scss":
/*!****************************!*\
  !*** ./src/sass/main.scss ***!
  \****************************/
/*! no static exports found */function(module,exports){eval("// removed by extract-text-webpack-plugin\n\n//# sourceURL=webpack:///./src/sass/main.scss?")}});