!function(){"use strict";var e={};function n(e,n,t,r,o,a,i){try{var c=e[a](i),u=c.value}catch(e){return void t(e)}c.done?n(u):Promise.resolve(u).then(r,o)}e.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return e.d(t,{a:t}),t},e.d=function(n,t){for(var r in t)e.o(t,r)&&!e.o(n,r)&&Object.defineProperty(n,r,{enumerable:!0,get:t[r]})},e.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)};var t=window.regeneratorRuntime,r=e.n(t),o=window.wp.domReady,a=e.n(o),i=job_manager_job_dashboard,c=i.i18nConfirmDelete,u=i.overlayEndpoint,l=i.statsEnabled;function s(e){e.querySelectorAll(".job-dashboard-action-delete").forEach((function(e){return e.addEventListener("click",d)}))}function d(e){window.confirm(c)||e.preventDefault()}function v(_x){return f.apply(this,arguments)}function f(){var e;return e=r().mark((function e(n){var t,o,a,i,c,l,d,v,f,h,p,b,m,w,j;return r().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(d=document.getElementById("jmDashboardOverlay")){e.next=3;break}return e.abrupt("return",!0);case 3:if(null===(t=n.preventDefault)||void 0===t||t.call(n),d.showModal(),v=null===(o=n.target)||void 0===o?void 0:o.dataset.jobId,f=null===(a=n.target)||void 0===a||null===(i=a.closest("tr"))||void 0===i||null===(c=i.id)||void 0===c?void 0:c.replace("post-",""),h=null!==(l=null!=v?v:f)&&void 0!==l?l:n){e.next=10;break}return e.abrupt("return");case 10:return location.hash=h,(p=d.querySelector(".jm-dialog-modal-content")).innerHTML='<a class="jm-ui-spinner"></a>',e.prev=13,e.next=16,fetch("".concat(u,"&job_id=").concat(h));case 16:if((b=e.sent).ok){e.next=19;break}throw new Error(b.statusText);case 19:return e.next=21,b.json();case 21:m=e.sent,w=m.data,p.innerHTML=w,e.next=29;break;case 26:e.prev=26,e.t0=e.catch(13),p.innerHTML='<div class="jm-notice color-error has-text-align-center" role="status">'.concat(e.t0.message,"</div>");case 29:j=function e(){history.replaceState(null,"",window.location.pathname+window.location.search),d.removeEventListener("close",e)},d.addEventListener("close",j),s(p);case 32:case"end":return e.stop()}}),e,null,[[13,26]])})),f=function(){var t=this,r=arguments;return new Promise((function(o,a){var i=e.apply(t,r);function c(e){n(i,o,a,c,u,"next",e)}function u(e){n(i,o,a,c,u,"throw",e)}c(void 0)}))},f.apply(this,arguments)}a()((function(){s(document),l&&function(){var e;document.querySelectorAll(".jm-dashboard-job .job-title, tr.job_listing td.column-stats").forEach((function(e){return e.addEventListener("click",v)}));var n=null===(e=window.location.hash)||void 0===e?void 0:e.substring(1);n>0&&v(+n)}()}))}();