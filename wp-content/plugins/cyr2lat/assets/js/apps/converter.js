(()=>{"use strict";function t(n){return t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},t(n)}function n(t,n){for(var e=0;e<n.length;e++){var i=n[e];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,o(i.key),i)}}function o(n){var o=function(n,o){if("object"!=t(n)||!n)return n;var e=n[Symbol.toPrimitive];if(void 0!==e){var i=e.call(n,o||"default");if("object"!=t(i))return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===o?String:Number)(n)}(n,"string");return"symbol"==t(o)?o:String(o)}const e=function(){function t(){!function(t,n){if(!(t instanceof n))throw new TypeError("Cannot call a class as a function")}(this,t),this.CONVERT_FORM_SELECTOR="#ctl-convert-existing-slugs",this.CONVERT_BUTTON_SELECTOR="#ctl-convert-button",this.CONFIRM_POPUP_SELECTOR="#ctl-confirm-popup",this.CONFIRM_OK_SELECTOR="#ctl-confirm-ok",this.CONFIRM_CANCEL_SELECTOR="#ctl-confirm-cancel",this.confirmPopup=document.querySelector(this.CONFIRM_POPUP_SELECTOR),this.bindEvents()}var o,e,i;return o=t,(e=[{key:"bindEvents",value:function(){var t=this;document.querySelector(this.CONVERT_BUTTON_SELECTOR).onclick=function(n){return n.preventDefault(),t.confirmPopup.style.display="block",!1},this.confirmPopup.onclick=function(){t.hideConfirmPopup()},document.querySelector(this.CONFIRM_OK_SELECTOR).onclick=function(n){n.stopPropagation(),t.hideConfirmPopup(),document.querySelector(t.CONVERT_FORM_SELECTOR).submit()},document.querySelector(this.CONFIRM_CANCEL_SELECTOR).onclick=function(n){n.stopPropagation(),t.hideConfirmPopup()}}},{key:"hideConfirmPopup",value:function(){this.confirmPopup.style.display="none"}}])&&n(o.prototype,e),i&&n(o,i),Object.defineProperty(o,"prototype",{writable:!1}),t}();document.addEventListener("DOMContentLoaded",(function(){new e}))})();