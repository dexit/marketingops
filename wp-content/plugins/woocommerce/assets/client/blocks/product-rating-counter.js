"use strict";(self.webpackChunkwebpackWcBlocksMainJsonp=self.webpackChunkwebpackWcBlocksMainJsonp||[]).push([[2918],{2992:(e,t,o)=>{o.r(t),o.d(t,{Block:()=>m,default:()=>f});var n=o(9196),r=o(5736),l=o(7608),s=o.n(l),c=o(2864),a=o(947),i=o(721),u=o(6946),d=o(5609);const v=e=>{const{reviews:t}=e,o=t?(0,r.sprintf)(/* translators: %s is referring to the total of reviews for a product */ /* translators: %s is referring to the total of reviews for a product */
(0,r._n)("(%s customer review)","(%s customer reviews)",t,"woocommerce"),t):(0,r.__)("(X customer reviews)","woocommerce");return(0,n.createElement)("span",{className:"wc-block-components-product-rating-counter__reviews_count"},(0,n.createElement)(d.Disabled,null,(0,n.createElement)("a",{href:"/"},o)))},m=e=>{const{textAlign:t,shouldDisplayMockedReviewsWhenProductHasNoReviews:o}=e,r=(0,a.F)(e),{parentClassName:l}=(0,c.useInnerBlockLayoutContext)(),{product:i}=(0,c.useProductDataContext)(),d=(e=>{const t=(0,u.isNumber)(e.review_count)?e.review_count:parseInt(e.review_count,10);return Number.isFinite(t)&&t>0?t:0})(i),m=s()(r.className,"wc-block-components-product-rating-counter",{[`${l}__product-rating`]:l,[`has-text-align-${t}`]:t});if(d||o)return(0,n.createElement)("div",{className:m,style:r.style},(0,n.createElement)("div",{className:"wc-block-components-product-rating-counter__container"},(0,n.createElement)(v,{reviews:d})))},f=(0,i.withProductDataContext)(m)},947:(e,t,o)=>{o.d(t,{F:()=>a});var n=o(7608),r=o.n(n),l=o(6946),s=o(3392),c=o(172);const a=e=>{const t=(e=>{const t=(0,l.isObject)(e)?e:{style:{}};let o=t.style;return(0,l.isString)(o)&&(o=JSON.parse(o)||{}),(0,l.isObject)(o)||(o={}),{...t,style:o}})(e),o=(0,c.vc)(t),n=(0,c.l8)(t),a=(0,c.su)(t),i=(0,s.f)(t);return{className:r()(i.className,o.className,n.className,a.className),style:{...i.style,...o.style,...n.style,...a.style}}}},3392:(e,t,o)=>{o.d(t,{f:()=>r});var n=o(6946);const r=e=>{const t=(0,n.isObject)(e.style.typography)?e.style.typography:{},o=(0,n.isString)(t.fontFamily)?t.fontFamily:"";return{className:e.fontFamily?`has-${e.fontFamily}-font-family`:o,style:{fontSize:e.fontSize?`var(--wp--preset--font-size--${e.fontSize})`:t.fontSize,fontStyle:t.fontStyle,fontWeight:t.fontWeight,letterSpacing:t.letterSpacing,lineHeight:t.lineHeight,textDecoration:t.textDecoration,textTransform:t.textTransform}}}},172:(e,t,o)=>{o.d(t,{l8:()=>d,su:()=>v,vc:()=>u});var n=o(7608),r=o.n(n),l=o(7427),s=o(2289),c=o(6946);function a(e={}){const t={};return(0,s.getCSSRules)(e,{selector:""}).forEach((e=>{t[e.key]=e.value})),t}function i(e,t){return e&&t?`has-${(0,l.o)(t)}-${e}`:""}function u(e){var t,o,n,l,s,u,d;const{backgroundColor:v,textColor:m,gradient:f,style:y}=e,p=i("background-color",v),g=i("color",m),b=function(e){if(e)return`has-${e}-gradient-background`}(f),k=b||(null==y||null===(t=y.color)||void 0===t?void 0:t.gradient);return{className:r()(g,b,{[p]:!k&&!!p,"has-text-color":m||(null==y||null===(o=y.color)||void 0===o?void 0:o.text),"has-background":v||(null==y||null===(n=y.color)||void 0===n?void 0:n.background)||f||(null==y||null===(l=y.color)||void 0===l?void 0:l.gradient),"has-link-color":(0,c.isObject)(null==y||null===(s=y.elements)||void 0===s?void 0:s.link)?null==y||null===(u=y.elements)||void 0===u||null===(d=u.link)||void 0===d?void 0:d.color:void 0}),style:a({color:(null==y?void 0:y.color)||{}})}}function d(e){var t;const o=(null===(t=e.style)||void 0===t?void 0:t.border)||{};return{className:function(e){var t;const{borderColor:o,style:n}=e,l=o?i("border-color",o):"";return r()({"has-border-color":!!o||!(null==n||null===(t=n.border)||void 0===t||!t.color),[l]:!!l})}(e),style:a({border:o})}}function v(e){var t;return{className:void 0,style:a({spacing:(null===(t=e.style)||void 0===t?void 0:t.spacing)||{}})}}}}]);