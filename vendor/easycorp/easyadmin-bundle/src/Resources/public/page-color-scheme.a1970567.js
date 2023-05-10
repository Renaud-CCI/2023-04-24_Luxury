(()=>{function e(t){return e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e(t)}function t(t,o){for(var r=0;r<o.length;r++){var a=o[r];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(t,(n=a.key,c=void 0,c=function(t,o){if("object"!==e(t)||null===t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var a=r.call(t,o||"default");if("object"!==e(a))return a;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===o?String:Number)(t)}(n,"string"),"symbol"===e(c)?c:String(c)),a)}var n,c}function o(e,t){if(t.has(e))throw new TypeError("Cannot initialize the same private elements twice on an object")}function r(e,t,o){if(!t.has(e))throw new TypeError("attempted to get private field on non-instance");return o}function a(e,t){return function(e,t){if(t.get)return t.get.call(e);return t.value}(e,c(e,t,"get"))}function n(e,t,o){return function(e,t,o){if(t.set)t.set.call(e,o);else{if(!t.writable)throw new TypeError("attempted to set read only private field");t.value=o}}(e,c(e,t,"set"),o),o}function c(e,t,o){if(!t.has(e))throw new TypeError("attempted to "+o+" private field on non-instance");return t.get(e)}var i=new WeakMap,l=new WeakSet;function u(e){if("false"!==document.body.getAttribute("data-ea-dark-scheme-is-enabled")){var t="auto"===e?matchMedia("(prefers-color-scheme: dark)").matches?"dark":"light":e;document.body.classList.remove("ea-light-scheme","ea-dark-scheme"),document.body.classList.add("light"===t?"ea-light-scheme":"ea-dark-scheme"),localStorage.setItem(a(this,i),e),document.body.style.colorScheme=t}}var s=new(function(){"use strict";function e(){var t,r;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),o(t=this,r=l),r.add(t),function(e,t,r){o(e,t),t.set(e,r)}(this,i,{writable:!0,value:void 0}),n(this,i,"ea/colorScheme")}var c,s,d;return c=e,(s=[{key:"updateColorScheme",value:function(){var e=localStorage.getItem(a(this,i))||"auto";r(this,l,u).call(this,e)}},{key:"createColorSchemeSelector",value:function(){var e=this;if(null!==document.querySelector(".dropdown-settings")){var t=document.querySelectorAll(".dropdown-settings"),o=localStorage.getItem(a(this,i))||"auto";t.forEach((function(t){var a=t.querySelectorAll("a.dropdown-appearance-item[data-ea-color-scheme]"),n=t.querySelector('a.dropdown-appearance-item[data-ea-color-scheme="'.concat(o,'"]'));a.forEach((function(e){e.classList.remove("active")})),n.classList.add("active"),a.forEach((function(t){t.addEventListener("click",(function(){var o=t.getAttribute("data-ea-color-scheme");r(e,l,u).call(e,o);var a=document.querySelectorAll("a.dropdown-appearance-item[data-ea-color-scheme]"),n=document.querySelectorAll('a.dropdown-appearance-item[data-ea-color-scheme="'.concat(o,'"]'));a.forEach((function(e){e.classList.remove("active")})),n.forEach((function(e){e.classList.add("active")}))}))}))}))}}}])&&t(c.prototype,s),d&&t(c,d),Object.defineProperty(c,"prototype",{writable:!1}),e}());s.updateColorScheme(),window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change",(function(e){s.updateColorScheme()})),document.addEventListener("DOMContentLoaded",(function(){s.createColorSchemeSelector()}))})();