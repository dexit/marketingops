(()=>{var e,t={956:(e,t,r)=>{"use strict";r.r(t);var l=r(9196),a=r(2911),n=r(3743);const c=window.wp.blocks,o=window.wc.wcSettings;r(2569);const i=JSON.parse('{"name":"woocommerce/products-by-attribute","title":"Products by Attribute","category":"woocommerce","keywords":["WooCommerce"],"description":"Display a grid of products with selected attributes.","supports":{"align":["wide","full"],"html":false},"attributes":{"attributes":{"type":"array","default":[]},"attrOperator":{"type":"string","enum":["all","any"],"default":"any"},"columns":{"type":"number","default":3},"contentVisibility":{"type":"object","default":{"image":true,"title":true,"price":true,"rating":true,"button":true},"properties":{"image":{"type":"boolean","default":true},"title":{"type":"boolean","default":true},"price":{"type":"boolean","default":true},"rating":{"type":"boolean","default":true},"button":{"type":"boolean","default":true}}},"orderby":{"type":"string","enum":["date","popularity","price_asc","price_desc","rating","title","menu_order"],"default":"date"},"rows":{"type":"number","default":3},"alignButtons":{"type":"boolean","default":false},"isPreview":{"type":"boolean","default":false},"stockStatus":{"type":"array"}},"textdomain":"woocommerce","apiVersion":2,"$schema":"https://schemas.wp.org/trunk/block.json"}'),s=window.wp.blockEditor,m=window.wp.components;var d=r(9307),u=r(5736);const h=(e,t,r)=>r?Math.min(e,t)===e?t:Math.max(e,r)===e?r:e:Math.max(e,t)===t?e:t,E=({columns:e,rows:t,setAttributes:r,alignButtons:a,minColumns:n=1,maxColumns:c=6,minRows:o=1,maxRows:i=6})=>(0,l.createElement)(l.Fragment,null,(0,l.createElement)(m.RangeControl,{label:(0,u.__)("Columns","woocommerce"),value:e,onChange:e=>{const t=h(e,n,c);r({columns:Number.isNaN(t)?"":t})},min:n,max:c}),(0,l.createElement)(m.RangeControl,{label:(0,u.__)("Rows","woocommerce"),value:t,onChange:e=>{const t=h(e,o,i);r({rows:Number.isNaN(t)?"":t})},min:o,max:i}),(0,l.createElement)(m.ToggleControl,{label:(0,u.__)("Align the last block to the bottom","woocommerce"),help:a?(0,u.__)("Align the last block to the bottom.","woocommerce"):(0,u.__)("The last inner block will follow other content.","woocommerce"),checked:a,onChange:()=>r({alignButtons:!a})})),p=({onChange:e,settings:t})=>{const{image:r,button:a,price:n,rating:c,title:o}=t,i=!1!==r;return(0,l.createElement)(l.Fragment,null,(0,l.createElement)(m.ToggleControl,{label:(0,u.__)("Product image","woocommerce"),checked:i,onChange:()=>e({...t,image:!i})}),(0,l.createElement)(m.ToggleControl,{label:(0,u.__)("Product title","woocommerce"),checked:o,onChange:()=>e({...t,title:!o})}),(0,l.createElement)(m.ToggleControl,{label:(0,u.__)("Product price","woocommerce"),checked:n,onChange:()=>e({...t,price:!n})}),(0,l.createElement)(m.ToggleControl,{label:(0,u.__)("Product rating","woocommerce"),checked:c,onChange:()=>e({...t,rating:!c})}),(0,l.createElement)(m.ToggleControl,{label:(0,u.__)("Add to Cart button","woocommerce"),checked:a,onChange:()=>e({...t,button:!a})}))};var g=r(7608),w=r.n(g);function b(e,t,r){const l=new Set(t.map((e=>e[r])));return e.filter((e=>!l.has(e[r])))}const _=window.wp.htmlEntities,f={clear:(0,u.__)("Clear all selected items","woocommerce"),noItems:(0,u.__)("No items found.","woocommerce"),
/* Translators: %s search term */
noResults:(0,u.__)("No results for %s","woocommerce"),search:(0,u.__)("Search for items","woocommerce"),selected:e=>(0,u.sprintf)(/* translators: Number of items selected from list. */ /* translators: Number of items selected from list. */
(0,u._n)("%d item selected","%d items selected",e,"woocommerce"),e),updated:(0,u.__)("Search results updated.","woocommerce")},y=(e,t=e)=>{const r=e.reduce(((e,t)=>{const r=t.parent||0;return e[r]||(e[r]=[]),e[r].push(t),e}),{}),l=("id",t.reduce(((e,t)=>(e[String(t.id)]=t,e)),{}));const a=["0"],n=(e={})=>e.parent?[...n(l[e.parent]),e.name]:e.name?[e.name]:[],c=e=>e.map((e=>{const t=r[e.id];return a.push(""+e.id),{...e,breadcrumbs:n(l[e.parent]),children:t&&t.length?c(t):[]}})),o=c(r[0]||[]);return Object.entries(r).forEach((([e,t])=>{a.includes(e)||o.push(...c(t||[]))})),o},x=(e,t)=>{if(!t)return e;const r=new RegExp(`(${t.replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&")})`,"ig");return e.split(r).map(((e,t)=>r.test(e)?(0,l.createElement)("strong",{key:t},e):(0,l.createElement)(d.Fragment,{key:t},e)))},v=({label:e})=>(0,l.createElement)("span",{className:"woocommerce-search-list__item-count"},e),k=e=>{const{item:t,search:r}=e,a=t.breadcrumbs&&t.breadcrumbs.length;return(0,l.createElement)("span",{className:"woocommerce-search-list__item-label"},a?(0,l.createElement)("span",{className:"woocommerce-search-list__item-prefix"},1===(n=t.breadcrumbs).length?n.slice(0,1).toString():2===n.length?n.slice(0,1).toString()+" › "+n.slice(-1).toString():n.slice(0,1).toString()+" … "+n.slice(-1).toString()):null,(0,l.createElement)("span",{className:"woocommerce-search-list__item-name"},x((0,_.decodeEntities)(t.name),r)));var n},C=({countLabel:e,className:t,depth:r=0,controlId:a="",item:n,isSelected:c,isSingle:o,onSelect:i,search:s="",selected:u,useExpandedPanelId:h,...E})=>{var p,g;const[f,y]=h,C=null!=e&&void 0!==n.count&&null!==n.count,S=!(null===(p=n.breadcrumbs)||void 0===p||!p.length),N=!(null===(g=n.children)||void 0===g||!g.length),O=f===n.id,I=w()(["woocommerce-search-list__item",`depth-${r}`,t],{"has-breadcrumbs":S,"has-children":N,"has-count":C,"is-expanded":O,"is-radio-button":o}),P=E.name||`search-list-item-${a}`,A=`${P}-${n.id}`,B=(0,d.useCallback)((()=>{y(O?-1:Number(n.id))}),[O,n.id,y]);return N?(0,l.createElement)("div",{className:I,onClick:B,onKeyDown:e=>"Enter"===e.key||" "===e.key?B():null,role:"treeitem",tabIndex:0},o?(0,l.createElement)(l.Fragment,null,(0,l.createElement)("input",{type:"radio",id:A,name:P,value:n.value,onChange:i(n),onClick:e=>e.stopPropagation(),checked:c,className:"woocommerce-search-list__item-input",...E}),(0,l.createElement)(k,{item:n,search:s}),C?(0,l.createElement)(v,{label:e||n.count}):null):(0,l.createElement)(l.Fragment,null,(0,l.createElement)(m.CheckboxControl,{className:"woocommerce-search-list__item-input",checked:c,...!c&&n.children.some((e=>u.find((t=>t.id===e.id))))?{indeterminate:!0}:{},label:x((0,_.decodeEntities)(n.name),s),onChange:()=>{c?i(b(u,n.children,"id"))():i(function(e,t,r){const l=b(t,e,"id");return[...e,...l]}(u,n.children))()},onClick:e=>e.stopPropagation()}),C?(0,l.createElement)(v,{label:e||n.count}):null)):(0,l.createElement)("label",{htmlFor:A,className:I},o?(0,l.createElement)(l.Fragment,null,(0,l.createElement)("input",{...E,type:"radio",id:A,name:P,value:n.value,onChange:i(n),checked:c,className:"woocommerce-search-list__item-input"}),(0,l.createElement)(k,{item:n,search:s})):(0,l.createElement)(m.CheckboxControl,{...E,id:A,name:P,className:"woocommerce-search-list__item-input",value:(0,_.decodeEntities)(n.value),label:x((0,_.decodeEntities)(n.name),s),onChange:i(n),checked:c}),C?(0,l.createElement)(v,{label:e||n.count}):null)},S=C;var N=r(2720),O=r(4333),I=r(837);r(1058);const P=({id:e,label:t,popoverContents:r,remove:n,screenReaderLabel:c,className:o=""})=>{const[i,s]=(0,d.useState)(!1),h=(0,O.useInstanceId)(P);if(c=c||t,!t)return null;t=(0,_.decodeEntities)(t);const E=w()("woocommerce-tag",o,{"has-remove":!!n}),p=`woocommerce-tag__label-${h}`,g=(0,l.createElement)(l.Fragment,null,(0,l.createElement)("span",{className:"screen-reader-text"},c),(0,l.createElement)("span",{"aria-hidden":"true"},t));return(0,l.createElement)("span",{className:E},r?(0,l.createElement)(m.Button,{className:"woocommerce-tag__text",id:p,onClick:()=>s(!0)},g):(0,l.createElement)("span",{className:"woocommerce-tag__text",id:p},g),r&&i&&(0,l.createElement)(m.Popover,{onClose:()=>s(!1)},r),n&&(0,l.createElement)(m.Button,{className:"woocommerce-tag__remove",onClick:n(e),label:(0,u.sprintf)(
// Translators: %s label.
// Translators: %s label.
(0,u.__)("Remove %s","woocommerce"),t),"aria-describedby":p},(0,l.createElement)(a.Z,{icon:I.Z,size:20,className:"clear-icon",role:"img"})))},A=P;r(9658);const B=e=>(0,l.createElement)(S,{...e}),$=e=>{const{list:t,selected:r,renderItem:a,depth:n=0,onSelect:c,instanceId:o,isSingle:i,search:s,useExpandedPanelId:m}=e,[u]=m;return t?(0,l.createElement)(d.Fragment,null,t.map((t=>{var h,E;const p=null!==(h=t.children)&&void 0!==h&&h.length&&!i?t.children.every((({id:e})=>r.find((t=>t.id===e)))):!!r.find((({id:e})=>e===t.id)),g=(null===(E=t.children)||void 0===E?void 0:E.length)&&u===t.id;return(0,l.createElement)(d.Fragment,{key:t.id},(0,l.createElement)("li",null,a({item:t,isSelected:p,onSelect:c,isSingle:i,selected:r,search:s,depth:n,useExpandedPanelId:m,controlId:o})),g?(0,l.createElement)($,{...e,list:t.children,depth:n+1}):null)}))):null},R=({isLoading:e,isSingle:t,selected:r,messages:a,onChange:n,onRemove:c})=>{if(e||t||!r)return null;const o=r.length;return(0,l.createElement)("div",{className:"woocommerce-search-list__selected"},(0,l.createElement)("div",{className:"woocommerce-search-list__selected-header"},(0,l.createElement)("strong",null,a.selected(o)),o>0?(0,l.createElement)(m.Button,{variant:"link",isDestructive:!0,onClick:()=>n([]),"aria-label":a.clear},(0,u.__)("Clear all","woocommerce")):null),o>0?(0,l.createElement)("ul",null,r.map(((e,t)=>(0,l.createElement)("li",{key:t},(0,l.createElement)(A,{label:e.name,id:e.id,remove:c}))))):null)},T=({filteredList:e,search:t,onSelect:r,instanceId:n,useExpandedPanelId:c,...o})=>{const{messages:i,renderItem:s,selected:m,isSingle:d}=o,h=s||B;return 0===e.length?(0,l.createElement)("div",{className:"woocommerce-search-list__list is-not-found"},(0,l.createElement)("span",{className:"woocommerce-search-list__not-found-icon"},(0,l.createElement)(a.Z,{icon:N.Z,role:"img"})),(0,l.createElement)("span",{className:"woocommerce-search-list__not-found-text"},t?(0,u.sprintf)(i.noResults,t):i.noItems)):(0,l.createElement)("ul",{className:"woocommerce-search-list__list"},(0,l.createElement)($,{useExpandedPanelId:c,list:e,selected:m,renderItem:h,onSelect:r,instanceId:n,isSingle:d,search:t}))},L=e=>{const{className:t="",isCompact:r,isHierarchical:a,isLoading:n,isSingle:c,list:o,messages:i=f,onChange:s,onSearch:h,selected:E,type:p="text",debouncedSpeak:g}=e,[b,_]=(0,d.useState)(""),x=(0,d.useState)(-1),v=(0,O.useInstanceId)(L),k=(0,d.useMemo)((()=>({...f,...i})),[i]),C=(0,d.useMemo)((()=>((e,t,r)=>{if(!t)return r?y(e):e;const l=new RegExp(t.replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&"),"i"),a=e.map((e=>!!l.test(e.name)&&e)).filter(Boolean);return r?y(a,e):a})(o,b,a)),[o,b,a]);(0,d.useEffect)((()=>{g&&g(k.updated)}),[g,k]),(0,d.useEffect)((()=>{"function"==typeof h&&h(b)}),[b,h]);const S=(0,d.useCallback)((e=>()=>{c&&s([]);const t=E.findIndex((({id:t})=>t===e));s([...E.slice(0,t),...E.slice(t+1)])}),[c,E,s]),N=(0,d.useCallback)((e=>()=>{Array.isArray(e)?s(e):-1===E.findIndex((({id:t})=>t===e.id))?s(c?[e]:[...E,e]):S(e.id)()}),[c,S,s,E]),I=(0,d.useCallback)((e=>{const[t]=E.filter((t=>!e.find((e=>t.id===e.id))));S(t.id)()}),[S,E]);return(0,l.createElement)("div",{className:w()("woocommerce-search-list",t,{"is-compact":r,"is-loading":n,"is-token":"token"===p})},"text"===p&&(0,l.createElement)(R,{...e,onRemove:S,messages:k}),(0,l.createElement)("div",{className:"woocommerce-search-list__search"},"text"===p?(0,l.createElement)(m.TextControl,{label:k.search,type:"search",value:b,onChange:e=>_(e)}):(0,l.createElement)(m.FormTokenField,{disabled:n,label:k.search,onChange:I,onInputChange:e=>_(e),suggestions:[],__experimentalValidateInput:()=>!1,value:n?[(0,u.__)("Loading…","woocommerce")]:E.map((e=>({...e,value:e.name}))),__experimentalShowHowTo:!1})),n?(0,l.createElement)("div",{className:"woocommerce-search-list__list"},(0,l.createElement)(m.Spinner,null)):(0,l.createElement)(T,{...e,search:b,filteredList:C,messages:k,onSelect:N,instanceId:v,useExpandedPanelId:x}))},F=((0,m.withSpokenMessages)(L),window.wp.url,window.wp.apiFetch);var j=r.n(F);const M=e=>j()({path:`wc/store/v1/products/attributes/${e}/terms`});const Z=window.wp.escapeHtml,D=({error:e})=>(0,l.createElement)("div",{className:"wc-block-error-message"},(({message:e,type:t})=>e?"general"===t?(0,l.createElement)("span",null,(0,u.__)("The following error was returned","woocommerce"),(0,l.createElement)("br",null),(0,l.createElement)("code",null,(0,Z.escapeHTML)(e))):"api"===t?(0,l.createElement)("span",null,(0,u.__)("The following error was returned from the API","woocommerce"),(0,l.createElement)("br",null),(0,l.createElement)("code",null,(0,Z.escapeHTML)(e))):e:(0,u.__)("An error has prevented the block from being updated.","woocommerce"))(e)),H=({className:e,item:t,isSelected:r,isLoading:a,onSelect:n,disabled:c,...o})=>(0,l.createElement)(l.Fragment,null,(0,l.createElement)(C,{...o,key:t.id,className:e,isSelected:r,item:t,onSelect:n,disabled:c}),r&&a&&(0,l.createElement)("div",{key:"loading",className:w()("woocommerce-search-list__item","woocommerce-product-attributes__item","depth-1","is-loading","is-not-active")},(0,l.createElement)(m.Spinner,null))),V=window.wc.wcTypes,J=((window.wp.data,(0,o.getSetting)("attributes",[])).reduce(((e,t)=>{const r=(l=t)&&l.attribute_name?{id:parseInt(l.attribute_id,10),name:l.attribute_name,taxonomy:"pa_"+l.attribute_name,label:l.attribute_label}:null;var l;return r&&r.id&&e.push(r),e}),[]),e=>{const{count:t,id:r,name:l,parent:a}=e;return{count:t,id:r,name:l,parent:a,breadcrumbs:[],children:[],value:(0,V.isAttributeTerm)(e)?e.attr_slug:""}});r(5555);const W=(0,O.withInstanceId)((({onChange:e,onOperatorChange:t,instanceId:r,isCompact:a=!1,messages:n={},operator:c="any",selected:o,type:i="text"})=>{const{errorLoadingAttributes:s,isLoadingAttributes:h,productsAttributes:E}=function(e){const[t,r]=(0,d.useState)(null),[l,a]=(0,d.useState)(!1),[n,c]=(0,d.useState)([]),o=(0,d.useRef)(!1);return(0,d.useEffect)((()=>{if(e&&!l&&!o.current)return async function(){a(!0);try{const e=await j()({path:"wc/store/v1/products/attributes"}),t=[];for(const r of e){const e=await M(r.id);t.push({...r,parent:0,terms:e.map((e=>({...e,attr_slug:r.taxonomy,parent:r.id})))})}c(t),o.current=!0}catch(e){e instanceof Error&&r(await(async e=>{if(!("json"in e))return{message:e.message,type:e.type||"general"};try{const t=await e.json();return{message:t.message,type:t.type||"api"}}catch(e){return{message:e.message,type:"general"}}})(e))}finally{a(!1)}}(),()=>{o.current=!0}}),[l,e]),{errorLoadingAttributes:t,isLoadingAttributes:l,productsAttributes:n}}(!0),p=E.reduce(((e,t)=>{const{terms:r,...l}=t;return[...e,J(l),...r.map(J)]}),[]);return n={clear:(0,u.__)("Clear all product attributes","woocommerce"),noItems:(0,u.__)("Your store doesn't have any product attributes.","woocommerce"),search:(0,u.__)("Search for product attributes","woocommerce"),selected:e=>(0,u.sprintf)(/* translators: %d is the count of attributes selected. */ /* translators: %d is the count of attributes selected. */
(0,u._n)("%d attribute selected","%d attributes selected",e,"woocommerce"),e),updated:(0,u.__)("Product attribute search results updated.","woocommerce"),...n},s?(0,l.createElement)(D,{error:s}):(0,l.createElement)(l.Fragment,null,(0,l.createElement)(L,{className:"woocommerce-product-attributes",isCompact:a,isHierarchical:!0,isLoading:h,isSingle:!1,list:p,messages:n,onChange:e,renderItem:e=>{const{item:t,search:a,depth:n=0}=e,c=t.count||0,o=["woocommerce-product-attributes__item","woocommerce-search-list__item",{"is-searching":a.length>0,"is-skip-level":0===n&&0!==t.parent}];if(!t.breadcrumbs.length)return(0,l.createElement)(H,{...e,className:w()(o),item:t,isLoading:h,disabled:0===t.count,name:`attributes-${r}`,countLabel:(0,u.sprintf)(/* translators: %d is the count of terms. */ /* translators: %d is the count of terms. */
(0,u._n)("%d term","%d terms",c,"woocommerce"),c),"aria-label":(0,u.sprintf)(/* translators: %1$s is the item name, %2$d is the count of terms for the item. */ /* translators: %1$s is the item name, %2$d is the count of terms for the item. */
(0,u._n)("%1$s, has %2$d term","%1$s, has %2$d terms",c,"woocommerce"),t.name,c)});const i=`${t.breadcrumbs[0]}: ${t.name}`;return(0,l.createElement)(C,{...e,name:`terms-${r}`,className:w()(...o,"has-count"),countLabel:(0,u.sprintf)(/* translators: %d is the count of products. */ /* translators: %d is the count of products. */
(0,u._n)("%d product","%d products",c,"woocommerce"),c),"aria-label":(0,u.sprintf)(/* translators: %1$s is the attribute name, %2$d is the count of products for that attribute. */ /* translators: %1$s is the attribute name, %2$d is the count of products for that attribute. */
(0,u._n)("%1$s, has %2$d product","%1$s, has %2$d products",c,"woocommerce"),i,c)})},selected:o.map((({id:e})=>p.find((t=>t.id===e)))).filter(Boolean),type:i}),!!t&&(0,l.createElement)("div",{hidden:o.length<2},(0,l.createElement)(m.SelectControl,{className:"woocommerce-product-attributes__operator",label:(0,u.__)("Display products matching","woocommerce"),help:(0,u.__)("Pick at least two attributes to use this setting.","woocommerce"),value:c,onChange:t,options:[{label:(0,u.__)("Any selected attributes","woocommerce"),value:"any"},{label:(0,u.__)("All selected attributes","woocommerce"),value:"all"}]})))})),G=({value:e,setAttributes:t})=>(0,l.createElement)(m.SelectControl,{label:(0,u.__)("Order products by","woocommerce"),value:e,options:[{label:(0,u.__)("Newness - newest first","woocommerce"),value:"date"},{label:(0,u.__)("Price - low to high","woocommerce"),value:"price_asc"},{label:(0,u.__)("Price - high to low","woocommerce"),value:"price_desc"},{label:(0,u.__)("Rating - highest first","woocommerce"),value:"rating"},{label:(0,u.__)("Sales - most first","woocommerce"),value:"popularity"},{label:(0,u.__)("Title - alphabetical","woocommerce"),value:"title"},{label:(0,u.__)("Menu Order","woocommerce"),value:"menu_order"}],onChange:e=>t({orderby:e})}),z=(0,o.getSetting)("hideOutOfStockItems",!1),K=(0,o.getSetting)("stockStatusOptions",{}),Y=({value:e,setAttributes:t})=>{const{outofstock:r,...a}=K,n=z?a:K,c=Object.entries(n).map((([e,t])=>({value:e,label:t}))).filter((e=>!!e.label)),o=Object.keys(n).filter((e=>!!e)),[i,s]=(0,d.useState)(e||o);(0,d.useEffect)((()=>{t({stockStatus:["",...i]})}),[i,t]);const h=(0,d.useCallback)((e=>{const t=i.includes(e),r=i.filter((t=>t!==e));t||(r.push(e),r.sort()),s(r)}),[i]);return(0,l.createElement)(l.Fragment,null,c.map((e=>{const t=i.includes(e.value)?/* translators: %s stock status. */ /* translators: %s stock status. */(0,u.__)('Stock status "%s" visible.',"woocommerce"):/* translators: %s stock status. */ /* translators: %s stock status. */(0,u.__)('Stock status "%s" hidden.',"woocommerce");return(0,l.createElement)(m.ToggleControl,{label:e.label,key:e.value,help:(0,u.sprintf)(t,e.label),checked:i.includes(e.value),onChange:()=>h(e.value)})})))},q=e=>{const{setAttributes:t}=e,{attributes:r,attrOperator:a,columns:n,contentVisibility:c,orderby:i,rows:d,alignButtons:h,stockStatus:g}=e.attributes;return(0,l.createElement)(s.InspectorControls,{key:"inspector"},(0,l.createElement)(m.PanelBody,{title:(0,u.__)("Layout","woocommerce"),initialOpen:!0},(0,l.createElement)(E,{columns:n,rows:d,alignButtons:h,setAttributes:t,minColumns:(0,o.getSetting)("minColumns",1),maxColumns:(0,o.getSetting)("maxColumns",6),minRows:(0,o.getSetting)("minRows",1),maxRows:(0,o.getSetting)("maxRows",6)})),(0,l.createElement)(m.PanelBody,{title:(0,u.__)("Content","woocommerce"),initialOpen:!0},(0,l.createElement)(p,{settings:c,onChange:e=>t({contentVisibility:e})})),(0,l.createElement)(m.PanelBody,{title:(0,u.__)("Filter by Product Attribute","woocommerce"),initialOpen:!1},(0,l.createElement)(W,{selected:r,onChange:(e=[])=>{const r=e.map((({id:e,attr_slug:t})=>({id:e,attr_slug:t})));t({attributes:r})},operator:a,onOperatorChange:(e="any")=>t({attrOperator:e}),isCompact:!0})),(0,l.createElement)(m.PanelBody,{title:(0,u.__)("Order By","woocommerce"),initialOpen:!1},(0,l.createElement)(G,{setAttributes:t,value:i})),(0,l.createElement)(m.PanelBody,{title:(0,u.__)("Filter by stock status","woocommerce"),initialOpen:!1},(0,l.createElement)(Y,{setAttributes:t,value:g})))},Q=e=>{const{attributes:t,setAttributes:r,setIsEditing:c,isEditing:o,debouncedSpeak:i}=e;return(0,l.createElement)(m.Placeholder,{icon:(0,l.createElement)(a.Z,{icon:n.Z}),label:(0,u.__)("Products by Attribute","woocommerce"),className:"wc-block-products-grid wc-block-products-by-attribute"},(0,u.__)("Display a grid of products from your selected attributes.","woocommerce"),(0,l.createElement)("div",{className:"wc-block-products-by-attribute__selection"},(0,l.createElement)(W,{selected:t.attributes,onChange:(e=[])=>{const t=e.map((({id:e,value:t})=>({id:e,attr_slug:t})));r({attributes:t})},operator:t.attrOperator,onOperatorChange:(e="any")=>r({attrOperator:e})}),(0,l.createElement)(m.Button,{variant:"primary",onClick:()=>{c(!o),i((0,u.__)("Showing Products by Attribute block preview.","woocommerce"))}},(0,u.__)("Done","woocommerce"))))},U=window.wp.serverSideRender;var X=r.n(U);const ee=(0,l.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 230 250",style:{width:"100%"}},(0,l.createElement)("title",null,"Grid Block Preview"),(0,l.createElement)("rect",{width:"65.374",height:"65.374",x:".162",y:".779",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"47.266",height:"5.148",x:"9.216",y:"76.153",fill:"#E1E3E6",rx:"2.574"}),(0,l.createElement)("rect",{width:"62.8",height:"15",x:"1.565",y:"101.448",fill:"#E1E3E6",rx:"5"}),(0,l.createElement)("rect",{width:"65.374",height:"65.374",x:".162",y:"136.277",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"47.266",height:"5.148",x:"9.216",y:"211.651",fill:"#E1E3E6",rx:"2.574"}),(0,l.createElement)("rect",{width:"62.8",height:"15",x:"1.565",y:"236.946",fill:"#E1E3E6",rx:"5"}),(0,l.createElement)("rect",{width:"65.374",height:"65.374",x:"82.478",y:".779",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"47.266",height:"5.148",x:"91.532",y:"76.153",fill:"#E1E3E6",rx:"2.574"}),(0,l.createElement)("rect",{width:"62.8",height:"15",x:"83.882",y:"101.448",fill:"#E1E3E6",rx:"5"}),(0,l.createElement)("rect",{width:"65.374",height:"65.374",x:"82.478",y:"136.277",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"47.266",height:"5.148",x:"91.532",y:"211.651",fill:"#E1E3E6",rx:"2.574"}),(0,l.createElement)("rect",{width:"62.8",height:"15",x:"83.882",y:"236.946",fill:"#E1E3E6",rx:"5"}),(0,l.createElement)("rect",{width:"65.374",height:"65.374",x:"164.788",y:".779",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"47.266",height:"5.148",x:"173.843",y:"76.153",fill:"#E1E3E6",rx:"2.574"}),(0,l.createElement)("rect",{width:"62.8",height:"15",x:"166.192",y:"101.448",fill:"#E1E3E6",rx:"5"}),(0,l.createElement)("rect",{width:"65.374",height:"65.374",x:"164.788",y:"136.277",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"47.266",height:"5.148",x:"173.843",y:"211.651",fill:"#E1E3E6",rx:"2.574"}),(0,l.createElement)("rect",{width:"62.8",height:"15",x:"166.192",y:"236.946",fill:"#E1E3E6",rx:"5"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"13.283",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"21.498",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"29.713",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"37.927",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"46.238",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"95.599",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"103.814",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"112.029",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"120.243",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"128.554",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"177.909",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"186.124",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"194.339",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"202.553",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"210.864",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"13.283",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"21.498",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"29.713",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"37.927",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"46.238",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"95.599",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"103.814",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"112.029",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"120.243",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"128.554",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"177.909",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"186.124",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"194.339",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"202.553",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"210.864",y:"221.798",fill:"#E1E3E6",rx:"3"})),te=e=>{const{attributes:t,name:r}=e;return t.isPreview?ee:(0,l.createElement)(X(),{block:r,attributes:t})},re=(0,m.withSpokenMessages)((e=>{const t=(0,s.useBlockProps)(),{attributes:{attributes:r}}=e,[a,n]=(0,d.useState)(!r.length);return(0,l.createElement)("div",{...t},(0,l.createElement)(s.BlockControls,null,(0,l.createElement)(m.ToolbarGroup,{controls:[{icon:"edit",title:(0,u.__)("Edit selected attribute","woocommerce"),onClick:()=>n(!a),isActive:a}]})),(0,l.createElement)(q,{...e}),a?(0,l.createElement)(Q,{isEditing:a,setIsEditing:n,...e}):(0,l.createElement)(m.Disabled,null,(0,l.createElement)(te,{...e})))}));(0,c.registerBlockType)(i,{icon:{src:(0,l.createElement)(a.Z,{icon:n.Z,className:"wc-block-editor-components-block-icon"})},attributes:{...i.attributes,columns:{type:"number",default:(0,o.getSetting)("defaultColumns",3)},rows:{type:"number",default:(0,o.getSetting)("defaultRows",3)},stockStatus:{type:"array",default:Object.keys((0,o.getSetting)("stockStatusOptions",[]))}},edit:re,save:()=>null})},2569:()=>{},5555:()=>{},9658:()=>{},1058:()=>{},9196:e=>{"use strict";e.exports=window.React},4333:e=>{"use strict";e.exports=window.wp.compose},9307:e=>{"use strict";e.exports=window.wp.element},5736:e=>{"use strict";e.exports=window.wp.i18n},444:e=>{"use strict";e.exports=window.wp.primitives}},r={};function l(e){var a=r[e];if(void 0!==a)return a.exports;var n=r[e]={exports:{}};return t[e].call(n.exports,n,n.exports,l),n.exports}l.m=t,e=[],l.O=(t,r,a,n)=>{if(!r){var c=1/0;for(m=0;m<e.length;m++){for(var[r,a,n]=e[m],o=!0,i=0;i<r.length;i++)(!1&n||c>=n)&&Object.keys(l.O).every((e=>l.O[e](r[i])))?r.splice(i--,1):(o=!1,n<c&&(c=n));if(o){e.splice(m--,1);var s=a();void 0!==s&&(t=s)}}return t}n=n||0;for(var m=e.length;m>0&&e[m-1][2]>n;m--)e[m]=e[m-1];e[m]=[r,a,n]},l.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return l.d(t,{a:t}),t},l.d=(e,t)=>{for(var r in t)l.o(t,r)&&!l.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},l.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),l.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},l.j=4341,(()=>{var e={4341:0};l.O.j=t=>0===e[t];var t=(t,r)=>{var a,n,[c,o,i]=r,s=0;if(c.some((t=>0!==e[t]))){for(a in o)l.o(o,a)&&(l.m[a]=o[a]);if(i)var m=i(l)}for(t&&t(r);s<c.length;s++)n=c[s],l.o(e,n)&&e[n]&&e[n][0](),e[n]=0;return l.O(m)},r=self.webpackChunkwebpackWcBlocksMainJsonp=self.webpackChunkwebpackWcBlocksMainJsonp||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})();var a=l.O(void 0,[2869],(()=>l(956)));a=l.O(a),((this.wc=this.wc||{}).blocks=this.wc.blocks||{})["products-by-attribute"]=a})();