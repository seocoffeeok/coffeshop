!function(t){var e={};function n(a){if(e[a])return e[a].exports;var s=e[a]={i:a,l:!1,exports:{}};return t[a].call(s.exports,s,s.exports,n),s.l=!0,s.exports}n.m=t,n.c=e,n.d=function(t,e,a){n.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:a})},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=0)}([function(t,e,n){n(1),t.exports=n(11)},function(t,e,n){Nova.booting(function(t,e,a){e.addRoutes([{name:"ui-translations",path:"/ui-translations",component:n(2)}])})},function(t,e,n){var a=n(8)(n(9),n(10),!1,function(t){n(3)},null,null);t.exports=a.exports},function(t,e,n){var a=n(4);"string"==typeof a&&(a=[[t.i,a,""]]),a.locals&&(t.exports=a.locals);n(6)("149eae51",a,!0,{})},function(t,e,n){(t.exports=n(5)(!1)).push([t.i,"",""])},function(t,e){t.exports=function(t){var e=[];return e.toString=function(){return this.map(function(e){var n=function(t,e){var n=t[1]||"",a=t[3];if(!a)return n;if(e&&"function"==typeof btoa){var s=(i=a,"/*# sourceMappingURL=data:application/json;charset=utf-8;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(i))))+" */"),r=a.sources.map(function(t){return"/*# sourceURL="+a.sourceRoot+t+" */"});return[n].concat(r).concat([s]).join("\n")}var i;return[n].join("\n")}(e,t);return e[2]?"@media "+e[2]+"{"+n+"}":n}).join("")},e.i=function(t,n){"string"==typeof t&&(t=[[null,t,""]]);for(var a={},s=0;s<this.length;s++){var r=this[s][0];"number"==typeof r&&(a[r]=!0)}for(s=0;s<t.length;s++){var i=t[s];"number"==typeof i[0]&&a[i[0]]||(n&&!i[2]?i[2]=n:n&&(i[2]="("+i[2]+") and ("+n+")"),e.push(i))}},e}},function(t,e,n){var a="undefined"!=typeof document;if("undefined"!=typeof DEBUG&&DEBUG&&!a)throw new Error("vue-style-loader cannot be used in a non-browser environment. Use { target: 'node' } in your Webpack config to indicate a server-rendering environment.");var s=n(7),r={},i=a&&(document.head||document.getElementsByTagName("head")[0]),o=null,l=0,u=!1,c=function(){},d=null,f="data-vue-ssr-id",p="undefined"!=typeof navigator&&/msie [6-9]\b/.test(navigator.userAgent.toLowerCase());function v(t){for(var e=0;e<t.length;e++){var n=t[e],a=r[n.id];if(a){a.refs++;for(var s=0;s<a.parts.length;s++)a.parts[s](n.parts[s]);for(;s<n.parts.length;s++)a.parts.push(_(n.parts[s]));a.parts.length>n.parts.length&&(a.parts.length=n.parts.length)}else{var i=[];for(s=0;s<n.parts.length;s++)i.push(_(n.parts[s]));r[n.id]={id:n.id,refs:1,parts:i}}}}function h(){var t=document.createElement("style");return t.type="text/css",i.appendChild(t),t}function _(t){var e,n,a=document.querySelector("style["+f+'~="'+t.id+'"]');if(a){if(u)return c;a.parentNode.removeChild(a)}if(p){var s=l++;a=o||(o=h()),e=g.bind(null,a,s,!1),n=g.bind(null,a,s,!0)}else a=h(),e=function(t,e){var n=e.css,a=e.media,s=e.sourceMap;a&&t.setAttribute("media",a);d.ssrId&&t.setAttribute(f,e.id);s&&(n+="\n/*# sourceURL="+s.sources[0]+" */",n+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(s))))+" */");if(t.styleSheet)t.styleSheet.cssText=n;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(n))}}.bind(null,a),n=function(){a.parentNode.removeChild(a)};return e(t),function(a){if(a){if(a.css===t.css&&a.media===t.media&&a.sourceMap===t.sourceMap)return;e(t=a)}else n()}}t.exports=function(t,e,n,a){u=n,d=a||{};var i=s(t,e);return v(i),function(e){for(var n=[],a=0;a<i.length;a++){var o=i[a];(l=r[o.id]).refs--,n.push(l)}e?v(i=s(t,e)):i=[];for(a=0;a<n.length;a++){var l;if(0===(l=n[a]).refs){for(var u=0;u<l.parts.length;u++)l.parts[u]();delete r[l.id]}}}};var m,b=(m=[],function(t,e){return m[t]=e,m.filter(Boolean).join("\n")});function g(t,e,n,a){var s=n?"":a.css;if(t.styleSheet)t.styleSheet.cssText=b(e,s);else{var r=document.createTextNode(s),i=t.childNodes;i[e]&&t.removeChild(i[e]),i.length?t.insertBefore(r,i[e]):t.appendChild(r)}}},function(t,e){t.exports=function(t,e){for(var n=[],a={},s=0;s<e.length;s++){var r=e[s],i=r[0],o={id:t+":"+s,css:r[1],media:r[2],sourceMap:r[3]};a[i]?a[i].parts.push(o):n.push(a[i]={id:i,parts:[o]})}return n}},function(t,e){t.exports=function(t,e,n,a,s,r){var i,o=t=t||{},l=typeof t.default;"object"!==l&&"function"!==l||(i=t,o=t.default);var u,c="function"==typeof o?o.options:o;if(e&&(c.render=e.render,c.staticRenderFns=e.staticRenderFns,c._compiled=!0),n&&(c.functional=!0),s&&(c._scopeId=s),r?(u=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),a&&a.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(r)},c._ssrRegister=u):a&&(u=a),u){var d=c.functional,f=d?c.render:c.beforeCreate;d?(c._injectStyles=u,c.render=function(t,e){return u.call(e),f(t,e)}):c.beforeCreate=f?[].concat(f,u):[u]}return{esModule:i,exports:o,options:c}}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a=function(){return function(t,e){if(Array.isArray(t))return t;if(Symbol.iterator in Object(t))return function(t,e){var n=[],a=!0,s=!1,r=void 0;try{for(var i,o=t[Symbol.iterator]();!(a=(i=o.next()).done)&&(n.push(i.value),!e||n.length!==e);a=!0);}catch(t){s=!0,r=t}finally{try{!a&&o.return&&o.return()}finally{if(s)throw r}}return n}(t,e);throw new TypeError("Invalid attempt to destructure non-iterable instance")}}();e.default={metaInfo:function(){return{title:this.__("UiTranslations")}},data:function(){return{seeding:!1,listing:!1,saving:!1,translations:[],editableTranslation:null,search:null}},computed:{filteredTranslations:function(){var t=this;return this.translations.filter(function(e){if(!t.search)return!0;var n=t.search.toLowerCase();return JSON.stringify(e).toLowerCase().indexOf(n)>=0})}},mounted:function(){this.listTranslations()},methods:{handleModalClose:function(){this.editableTranslation=null},editTranslation:function(t){this.editableTranslation=Object.assign({},t)},createTranslation:function(){this.editableTranslation={key:null,translations:{en:null,uk:null}}},saveTranslation:function(){var t=this;this.saving=!0;var e=this.editableTranslation.id?"put":"post";Nova.request()[e]("/nova-vendor/ui-translations/translations",this.editableTranslation).then(function(e){t.saving=!1,t.editableTranslation=null,t.translations=e.data}).catch(function(e){t.saving=!1,t.$toasted.show(t.getErrorText(e),{type:"error"})})},listTranslations:function(){var t=this;this.listing=!0,Nova.request().get("/nova-vendor/ui-translations/translations").then(function(e){t.listing=!1,t.translations=e.data})},seedTranslations:function(){var t=this;this.seeding=!0,Nova.request().post("/nova-vendor/ui-translations/seed-translations").then(function(){t.$toasted.show("Translations have been seeded!",{type:"success"}),t.seeding=!1,t.listTranslations()})},getErrorText:function(t){var e="",n=!0,s=!1,r=void 0;try{for(var i,o=Object.entries(t.response.data.errors)[Symbol.iterator]();!(n=(i=o.next()).done);n=!0){var l=i.value,u=a(l,2);u[0];e+=u[1].join("<br/>")}}catch(t){s=!0,r=t}finally{try{!n&&o.return&&o.return()}finally{if(s)throw r}}return e}}}},function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("heading",{staticClass:"mb-6"},[t._v(t._s(t.__("UI Translations")))]),t._v(" "),n("div",{staticClass:"flex"},[n("div",{staticClass:"relative h-9 flex-no-shrink mb-6"},[n("svg",{staticClass:"fill-current absolute search-icon-center ml-3 text-70",attrs:{xmlns:"http://www.w3.org/2000/svg",width:"20",height:"20",viewBox:"0 0 20 20","aria-labelledby":"search",role:"presentation"}},[n("path",{attrs:{"fill-rule":"nonzero",d:"M14.32 12.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387a8 8 0 1 1 1.414-1.414zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"}})]),t._v(" "),n("input",{directives:[{name:"model",rawName:"v-model",value:t.search,expression:"search"}],staticClass:"appearance-none form-search w-search pl-search shadow",attrs:{placeholder:t.__("Search"),type:"search",spellcheck:"false"},domProps:{value:t.search},on:{input:function(e){e.target.composing||(t.search=e.target.value)}}})]),t._v(" "),n("div",{staticClass:"w-full flex items-center mb-6"},[n("div",{staticClass:"flex w-full justify-end items-center mx-3"}),t._v(" "),n("div",{staticClass:"flex-no-shrink ml-auto"},[n("progress-button",{nativeOn:{click:function(e){return t.createTranslation.apply(null,arguments)}}},[t._v("\n                    "+t._s(t.__("Add Translation"))+"\n                ")]),t._v(" "),n("progress-button",{attrs:{disabled:t.seeding,processing:t.seeding},nativeOn:{click:function(e){return t.seedTranslations.apply(null,arguments)}}},[t._v("\n                    "+t._s(t.__("Seed Translations"))+"\n                ")])],1)])]),t._v(" "),n("card",[n("table",{staticClass:"w-full table mb-6 py-3 px-6 table-fixed"},[n("thead",[n("tr",[n("th",{staticClass:"text-right",staticStyle:{width:"50px"}},[t._v(t._s(t.__("ID")))]),t._v(" "),n("th",{staticClass:"text-left",staticStyle:{width:"250px"}},[t._v(t._s(t.__("Key")))]),t._v(" "),n("th",{staticClass:"text-left"},[t._v(t._s(t.__("Translations")))]),t._v(" "),n("th",{staticClass:"text-center",staticStyle:{width:"100px"}},[t._v(t._s(t.__("Actions")))])])]),t._v(" "),n("tbody",t._l(t.filteredTranslations,function(e){return n("tr",[n("td",{staticClass:"text-right",staticStyle:{width:"50px"}},[t._v("\n                    "+t._s(e.id)+"\n                ")]),t._v(" "),n("td",{staticClass:"text-left",staticStyle:{width:"250px","overflow-x":"hidden"}},[t._v("\n                    "+t._s(e.key)+"\n                ")]),t._v(" "),n("td",{staticClass:"text-left"},t._l(e.translations,function(e,a){return e?n("p",[n("strong",[t._v(t._s(a))]),t._v(": "+t._s(e)+"\n                    ")]):t._e()}),0),t._v(" "),n("td",{staticClass:"text-center",staticStyle:{width:"100px"}},[n("a",{directives:[{name:"tooltip",rawName:"v-tooltip.click",value:t.__("Edit"),expression:"__('Edit')",modifiers:{click:!0}}],staticClass:"inline-flex cursor-pointer text-70 hover:text-primary",on:{click:function(n){return n.preventDefault(),t.editTranslation(e)}}},[n("icon",{attrs:{type:"edit"}})],1)])])}),0)])]),t._v(" "),t.editableTranslation?n("modal",{attrs:{tabindex:"-1",role:"dialog"},on:{"modal-close":t.handleModalClose}},[n("form",{staticClass:"bg-white rounded-lg shadow-lg overflow-hidden",staticStyle:{"min-width":"400px"},attrs:{autocomplete:"off"},on:{submit:function(e){return e.preventDefault(),e.stopPropagation(),t.saveTranslation.apply(null,arguments)}}},[n("div",{staticClass:"p-8"},[n("heading",{staticClass:"border-b border-40 pt-0 pb-4",attrs:{level:2}},[t.editableTranslation.id?n("span",[t._v(t._s(t.__("Edit Translation")))]):n("span",[t._v(t._s(t.__("Add Translation")))])]),t._v(" "),n("div",{staticClass:"mt-4"},[n("label",{staticClass:"inline-block text-80 leading-tight",attrs:{for:"translation-key"}},[t._v(t._s(t.__("Key"))+" "),n("span",{staticClass:"text-danger text-sm"},[t._v("*")])]),t._v(" "),n("input",{directives:[{name:"model",rawName:"v-model",value:t.editableTranslation.key,expression:"editableTranslation.key"}],staticClass:"mt-2 w-full form-control form-input form-input-bordered",attrs:{type:"text",id:"translation-key"},domProps:{value:t.editableTranslation.key},on:{input:function(e){e.target.composing||t.$set(t.editableTranslation,"key",e.target.value)}}})]),t._v(" "),n("div",{staticClass:"mt-4"},[n("label",{staticClass:"inline-block text-80 leading-tight",attrs:{for:"translation-value-en"}},[t._v("En")]),t._v(" "),n("textarea",{directives:[{name:"model",rawName:"v-model",value:t.editableTranslation.translations.en,expression:"editableTranslation.translations.en"}],staticClass:"mt-2 w-full form-input h-auto min-h-90px form-control form-input-bordered py-4",attrs:{type:"text",id:"translation-value-en"},domProps:{value:t.editableTranslation.translations.en},on:{input:function(e){e.target.composing||t.$set(t.editableTranslation.translations,"en",e.target.value)}}})]),t._v(" "),n("div",{staticClass:"mt-4"},[n("label",{staticClass:"inline-block text-80 leading-tight",attrs:{for:"translation-value-uk"}},[t._v("Uk")]),t._v(" "),n("textarea",{directives:[{name:"model",rawName:"v-model",value:t.editableTranslation.translations.uk,expression:"editableTranslation.translations.uk"}],staticClass:"mt-2 w-full form-input h-auto min-h-90px form-control form-input-bordered py-4",attrs:{type:"text",id:"translation-value-uk"},domProps:{value:t.editableTranslation.translations.uk},on:{input:function(e){e.target.composing||t.$set(t.editableTranslation.translations,"uk",e.target.value)}}})])],1),t._v(" "),n("div",{staticClass:"bg-30 px-6 py-3 flex"},[n("div",{staticClass:"flex items-center ml-auto"},[n("button",{staticClass:"btn btn-link dim cursor-pointer text-80 ml-auto mr-6",attrs:{type:"button"},on:{click:function(e){return e.preventDefault(),t.handleModalClose.apply(null,arguments)}}},[t._v("\n                        "+t._s(t.__("Cancel"))+"\n                    ")]),t._v(" "),n("button",{ref:"runButton",staticClass:"btn btn-default btn-primary",attrs:{disabled:t.saving,type:"submit"}},[t.saving?n("loader",{attrs:{width:"30"}}):n("span",[t._v(t._s(t.__("Save")))])],1)])])])]):t._e()],1)},staticRenderFns:[]}},function(t,e){}]);