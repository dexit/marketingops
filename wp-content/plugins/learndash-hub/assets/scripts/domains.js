(()=>{"use strict";function e(t){return e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e(t)}function t(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function r(e,t){return r=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(e,t){return e.__proto__=t,e},r(e,t)}function n(t,r){if(r&&("object"===e(r)||"function"==typeof r))return r;if(void 0!==r)throw new TypeError("Derived constructors may only return object or undefined");return function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(t)}function o(e){return o=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(e){return e.__proto__||Object.getPrototypeOf(e)},o(e)}var c=wp.i18n,a=c.__;c.sprintf;const i=function(e){!function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,"prototype",{writable:!1}),t&&r(e,t)}(s,React.Component);var c,i,u,l,f=(u=s,l=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=o(u);if(l){var r=o(this).constructor;e=Reflect.construct(t,arguments,r)}else e=t.apply(this,arguments);return n(this,e)});function s(e){return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,s),f.call(this,e)}return c=s,(i=[{key:"render",value:function(){return React.createElement("div",{className:"mt-8 pr-8 text-mono-nightrider"},React.createElement("div",{className:"flex content-between justify-between"},React.createElement("h3",{className:"text-2xl tracking-tight font-bold uppercase text-mono-nightrider"},a("Domains","learndash-hub")),React.createElement("a",{target:"_blank",href:"https://www.learndash.com/support/",className:"hub-button"},React.createElement("i",{className:"fas fa-book-reader mr-2"}),a("Documentation","learndash-hub"))),React.createElement("div",{className:"flex mt-4 border-b-2 border-mono-overcast"},React.createElement("a",{href:"#",className:"top-nav border-mono-grey active"},a("Internal","learndash-hub")),React.createElement("a",{href:"#",className:"top-nav border-mono-grey"},a("Global","learndash-hub"))))}}])&&t(c.prototype,i),Object.defineProperty(c,"prototype",{writable:!1}),s}();ReactDOM.render(React.createElement(i,null),document.getElementById("app"))})();