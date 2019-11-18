
try {

// prevent multiple load
if (typeof cbar_scraper_start =='undefined'){
	if (typeof window.cbar_loaded =='undefined') window.cbar_loaded =true; else throw {name : "dontsend", message : "cbar_already_loaded", stack:""};
}


/*! Sizzle v1.9.4-pre | (c) 2013 jQuery Foundation, Inc. | jquery.org/license
*/(function(e,t){function n(e,t,n,r){var o,i,u,l,a,c,f,s,h,g;if((t?t.ownerDocument||t:F)!==R&&I(t),t=t||R,n=n||[],!e||"string"!=typeof e)return n;if(1!==(l=t.nodeType)&&9!==l)return[];if($&&!r){if(o=vt.exec(e))if(u=o[1]){if(9===l){if(i=t.getElementById(u),!i||!i.parentNode)return n;if(i.id===u)return n.push(i),n}else if(t.ownerDocument&&(i=t.ownerDocument.getElementById(u))&&O(t,i)&&i.id===u)return n.push(i),n}else{if(o[2])return et.apply(n,t.getElementsByTagName(e)),n;if((u=o[3])&&E.getElementsByClassName&&t.getElementsByClassName)return et.apply(n,t.getElementsByClassName(u)),n}if(E.qsa&&(!q||!q.test(e))){if(s=f=k,h=t,g=9===l&&e,1===l&&"object"!==t.nodeName.toLowerCase()){for(c=p(e),(f=t.getAttribute("id"))?s=f.replace(xt,"\\$&"):t.setAttribute("id",s),s="[id='"+s+"'] ",a=c.length;a--;)c[a]=s+d(c[a]);h=pt.test(e)&&t.parentNode||t,g=c.join(",")}if(g)try{return et.apply(n,h.querySelectorAll(g)),n}catch(m){}finally{f||t.removeAttribute("id")}}}return x(e.replace(ct,"$1"),t,n,r)}function r(){function e(n,r){return t.push(n+=" ")>T.cacheLength&&delete e[t.shift()],e[n]=r}var t=[];return e}function o(e){return e[k]=!0,e}function i(e){var t=R.createElement("div");try{return!!e(t)}catch(n){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function u(e,t){for(var n=e.split("|"),r=e.length;r--;)T.attrHandle[n[r]]=t}function l(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&(~t.sourceIndex||Q)-(~e.sourceIndex||Q);if(r)return r;if(n)for(;n=n.nextSibling;)if(n===t)return-1;return e?1:-1}function a(e){return function(t){var n=t.nodeName.toLowerCase();return"input"===n&&t.type===e}}function c(e){return function(t){var n=t.nodeName.toLowerCase();return("input"===n||"button"===n)&&t.type===e}}function f(e){return o(function(t){return t=+t,o(function(n,r){for(var o,i=e([],n.length,t),u=i.length;u--;)n[o=i[u]]&&(n[o]=!(r[o]=n[o]))})})}function s(){}function p(e,t){var r,o,i,u,l,a,c,f=U[e+" "];if(f)return t?0:f.slice(0);for(l=e,a=[],c=T.preFilter;l;){(!r||(o=ft.exec(l)))&&(o&&(l=l.slice(o[0].length)||l),a.push(i=[])),r=!1,(o=st.exec(l))&&(r=o.shift(),i.push({value:r,type:o[0].replace(ct," ")}),l=l.slice(r.length));for(u in T.filter)!(o=mt[u].exec(l))||c[u]&&!(o=c[u](o))||(r=o.shift(),i.push({value:r,type:u,matches:o}),l=l.slice(r.length));if(!r)break}return t?l.length:l?n.error(e):U(e,a).slice(0)}function d(e){for(var t=0,n=e.length,r="";n>t;t++)r+=e[t].value;return r}function h(e,t,n){var r=t.dir,o=n&&"parentNode"===r,i=j++;return t.first?function(t,n,i){for(;t=t[r];)if(1===t.nodeType||o)return e(t,n,i)}:function(t,n,u){var l,a,c,f=z+" "+i;if(u){for(;t=t[r];)if((1===t.nodeType||o)&&e(t,n,u))return!0}else for(;t=t[r];)if(1===t.nodeType||o)if(c=t[k]||(t[k]={}),(a=c[r])&&a[0]===f){if((l=a[1])===!0||l===w)return l===!0}else if(a=c[r]=[f],a[1]=e(t,n,u)||w,a[1]===!0)return!0}}function g(e){return e.length>1?function(t,n,r){for(var o=e.length;o--;)if(!e[o](t,n,r))return!1;return!0}:e[0]}function m(e,t,n,r,o){for(var i,u=[],l=0,a=e.length,c=null!=t;a>l;l++)(i=e[l])&&(!n||n(i,r,o))&&(u.push(i),c&&t.push(l));return u}function y(e,t,n,r,i,u){return r&&!r[k]&&(r=y(r)),i&&!i[k]&&(i=y(i,u)),o(function(o,u,l,a){var c,f,s,p=[],d=[],h=u.length,g=o||b(t||"*",l.nodeType?[l]:l,[]),y=!e||!o&&t?g:m(g,p,e,l,a),v=n?i||(o?e:h||r)?[]:u:y;if(n&&n(y,v,l,a),r)for(c=m(v,d),r(c,[],l,a),f=c.length;f--;)(s=c[f])&&(v[d[f]]=!(y[d[f]]=s));if(o){if(i||e){if(i){for(c=[],f=v.length;f--;)(s=v[f])&&c.push(y[f]=s);i(null,v=[],c,a)}for(f=v.length;f--;)(s=v[f])&&(c=i?nt.call(o,s):p[f])>-1&&(o[c]=!(u[c]=s))}}else v=m(v===u?v.splice(h,v.length):v),i?i(null,u,v,a):et.apply(u,v)})}function v(e){for(var t,n,r,o=e.length,i=T.relative[e[0].type],u=i||T.relative[" "],l=i?1:0,a=h(function(e){return e===t},u,!0),c=h(function(e){return nt.call(t,e)>-1},u,!0),f=[function(e,n,r){return!i&&(r||n!==L)||((t=n).nodeType?a(e,n,r):c(e,n,r))}];o>l;l++)if(n=T.relative[e[l].type])f=[h(g(f),n)];else{if(n=T.filter[e[l].type].apply(null,e[l].matches),n[k]){for(r=++l;o>r&&!T.relative[e[r].type];r++);return y(l>1&&g(f),l>1&&d(e.slice(0,l-1).concat({value:" "===e[l-2].type?"*":""})).replace(ct,"$1"),n,r>l&&v(e.slice(l,r)),o>r&&v(e=e.slice(r)),o>r&&d(e))}f.push(n)}return g(f)}function N(e,t){var r=0,i=t.length>0,u=e.length>0,l=function(o,l,a,c,f){var s,p,d,h=[],g=0,y="0",v=o&&[],N=null!=f,b=L,x=o||u&&T.find.TAG("*",f&&l.parentNode||l),C=z+=null==b?1:Math.random()||.1;for(N&&(L=l!==R&&l,w=r);null!=(s=x[y]);y++){if(u&&s){for(p=0;d=e[p++];)if(d(s,l,a)){c.push(s);break}N&&(z=C,w=++r)}i&&((s=!d&&s)&&g--,o&&v.push(s))}if(g+=y,i&&y!==g){for(p=0;d=t[p++];)d(v,h,l,a);if(o){if(g>0)for(;y--;)v[y]||h[y]||(h[y]=Z.call(c));h=m(h)}et.apply(c,h),N&&!o&&h.length>0&&g+t.length>1&&n.uniqueSort(c)}return N&&(z=C,L=b),v};return i?o(l):l}function b(e,t,r){for(var o=0,i=t.length;i>o;o++)n(e,t[o],r);return r}function x(e,t,n,r){var o,i,u,l,a,c=p(e);if(!r&&1===c.length){if(i=c[0]=c[0].slice(0),i.length>2&&"ID"===(u=i[0]).type&&E.getById&&9===t.nodeType&&$&&T.relative[i[1].type]){if(t=(T.find.ID(u.matches[0].replace(Ct,Et),t)||[])[0],!t)return n;e=e.slice(i.shift().value.length)}for(o=mt.needsContext.test(e)?0:i.length;o--&&(u=i[o],!T.relative[l=u.type]);)if((a=T.find[l])&&(r=a(u.matches[0].replace(Ct,Et),pt.test(i[0].type)&&t.parentNode||t))){if(i.splice(o,1),e=r.length&&d(i),!e)return et.apply(n,r),n;break}}return D(e,c)(r,t,!$,n,pt.test(e)),n}var C,E,w,T,A,S,D,L,B,I,R,P,$,q,H,M,O,k="sizzle"+-new Date,F=e.document,z=0,j=0,G=r(),U=r(),V=r(),X=!1,J=function(e,t){return e===t?(X=!0,0):0},K=typeof t,Q=1<<31,W={}.hasOwnProperty,Y=[],Z=Y.pop,_=Y.push,et=Y.push,tt=Y.slice,nt=Y.indexOf||function(e){for(var t=0,n=this.length;n>t;t++)if(this[t]===e)return t;return-1},rt="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",ot="[\\x20\\t\\r\\n\\f]",it="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",ut=it.replace("w","w#"),lt="\\["+ot+"*("+it+")"+ot+"*(?:([*^$|!~]?=)"+ot+"*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|("+ut+")|)|)"+ot+"*\\]",at=":("+it+")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|"+lt.replace(3,8)+")*)|.*)\\)|)",ct=RegExp("^"+ot+"+|((?:^|[^\\\\])(?:\\\\.)*)"+ot+"+$","g"),ft=RegExp("^"+ot+"*,"+ot+"*"),st=RegExp("^"+ot+"*([>+~]|"+ot+")"+ot+"*"),pt=RegExp(ot+"*[+~]"),dt=RegExp("="+ot+"*([^\\]'\"]*)"+ot+"*\\]","g"),ht=RegExp(at),gt=RegExp("^"+ut+"$"),mt={ID:RegExp("^#("+it+")"),CLASS:RegExp("^\\.("+it+")"),TAG:RegExp("^("+it.replace("w","w*")+")"),ATTR:RegExp("^"+lt),PSEUDO:RegExp("^"+at),CHILD:RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+ot+"*(even|odd|(([+-]|)(\\d*)n|)"+ot+"*(?:([+-]|)"+ot+"*(\\d+)|))"+ot+"*\\)|)","i"),bool:RegExp("^(?:"+rt+")$","i"),needsContext:RegExp("^"+ot+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+ot+"*((?:-\\d)?\\d*)"+ot+"*\\)|)(?=[^-]|$)","i")},yt=/^[^{]+\{\s*\[native \w/,vt=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,Nt=/^(?:input|select|textarea|button)$/i,bt=/^h\d$/i,xt=/'|\\/g,Ct=RegExp("\\\\([\\da-f]{1,6}"+ot+"?|("+ot+")|.)","ig"),Et=function(e,t,n){var r="0x"+t-65536;return r!==r||n?t:0>r?String.fromCharCode(r+65536):String.fromCharCode(55296|r>>10,56320|1023&r)};try{et.apply(Y=tt.call(F.childNodes),F.childNodes),Y[F.childNodes.length].nodeType}catch(wt){et={apply:Y.length?function(e,t){_.apply(e,tt.call(t))}:function(e,t){for(var n=e.length,r=0;e[n++]=t[r++];);e.length=n-1}}}S=n.isXML=function(e){var t=e&&(e.ownerDocument||e).documentElement;return t?"HTML"!==t.nodeName:!1},E=n.support={},I=n.setDocument=function(e){var n=e?e.ownerDocument||e:F,r=n.defaultView;return n!==R&&9===n.nodeType&&n.documentElement?(R=n,P=n.documentElement,$=!S(n),r&&r.attachEvent&&r!==r.top&&r.attachEvent("onbeforeunload",function(){I()}),E.attributes=i(function(e){return e.className="i",!e.getAttribute("className")}),E.getElementsByTagName=i(function(e){return e.appendChild(n.createComment("")),!e.getElementsByTagName("*").length}),E.getElementsByClassName=i(function(e){return e.innerHTML="<div class='a'></div><div class='a i'></div>",e.firstChild.className="i",2===e.getElementsByClassName("i").length}),E.getById=i(function(e){return P.appendChild(e).id=k,!n.getElementsByName||!n.getElementsByName(k).length}),E.getById?(T.find.ID=function(e,t){if(typeof t.getElementById!==K&&$){var n=t.getElementById(e);return n&&n.parentNode?[n]:[]}},T.filter.ID=function(e){var t=e.replace(Ct,Et);return function(e){return e.getAttribute("id")===t}}):(delete T.find.ID,T.filter.ID=function(e){var t=e.replace(Ct,Et);return function(e){var n=typeof e.getAttributeNode!==K&&e.getAttributeNode("id");return n&&n.value===t}}),T.find.TAG=E.getElementsByTagName?function(e,n){return typeof n.getElementsByTagName!==K?n.getElementsByTagName(e):t}:function(e,t){var n,r=[],o=0,i=t.getElementsByTagName(e);if("*"===e){for(;n=i[o++];)1===n.nodeType&&r.push(n);return r}return i},T.find.CLASS=E.getElementsByClassName&&function(e,n){return typeof n.getElementsByClassName!==K&&$?n.getElementsByClassName(e):t},H=[],q=[],(E.qsa=yt.test(n.querySelectorAll))&&(i(function(e){e.innerHTML="<select><option selected=''></option></select>",e.querySelectorAll("[selected]").length||q.push("\\["+ot+"*(?:value|"+rt+")"),e.querySelectorAll(":checked").length||q.push(":checked")}),i(function(e){var t=n.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("t",""),e.querySelectorAll("[t^='']").length&&q.push("[*^$]="+ot+"*(?:''|\"\")"),e.querySelectorAll(":enabled").length||q.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),q.push(",.*:")})),(E.matchesSelector=yt.test(M=P.webkitMatchesSelector||P.mozMatchesSelector||P.oMatchesSelector||P.msMatchesSelector))&&i(function(e){E.disconnectedMatch=M.call(e,"div"),M.call(e,"[s!='']:x"),H.push("!=",at)}),q=q.length&&RegExp(q.join("|")),H=H.length&&RegExp(H.join("|")),O=yt.test(P.contains)||P.compareDocumentPosition?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)for(;t=t.parentNode;)if(t===e)return!0;return!1},J=P.compareDocumentPosition?function(e,t){if(e===t)return X=!0,0;var r=t.compareDocumentPosition&&e.compareDocumentPosition&&e.compareDocumentPosition(t);return r?1&r||!E.sortDetached&&t.compareDocumentPosition(e)===r?e===n||O(F,e)?-1:t===n||O(F,t)?1:B?nt.call(B,e)-nt.call(B,t):0:4&r?-1:1:e.compareDocumentPosition?-1:1}:function(e,t){var r,o=0,i=e.parentNode,u=t.parentNode,a=[e],c=[t];if(e===t)return X=!0,0;if(!i||!u)return e===n?-1:t===n?1:i?-1:u?1:B?nt.call(B,e)-nt.call(B,t):0;if(i===u)return l(e,t);for(r=e;r=r.parentNode;)a.unshift(r);for(r=t;r=r.parentNode;)c.unshift(r);for(;a[o]===c[o];)o++;return o?l(a[o],c[o]):a[o]===F?-1:c[o]===F?1:0},n):R},n.matches=function(e,t){return n(e,null,null,t)},n.matchesSelector=function(e,t){if((e.ownerDocument||e)!==R&&I(e),t=t.replace(dt,"='$1']"),!(!E.matchesSelector||!$||H&&H.test(t)||q&&q.test(t)))try{var r=M.call(e,t);if(r||E.disconnectedMatch||e.document&&11!==e.document.nodeType)return r}catch(o){}return n(t,R,null,[e]).length>0},n.contains=function(e,t){return(e.ownerDocument||e)!==R&&I(e),O(e,t)},n.attr=function(e,n){(e.ownerDocument||e)!==R&&I(e);var r=T.attrHandle[n.toLowerCase()],o=r&&W.call(T.attrHandle,n.toLowerCase())?r(e,n,!$):t;return o===t?E.attributes||!$?e.getAttribute(n):(o=e.getAttributeNode(n))&&o.specified?o.value:null:o},n.error=function(e){throw Error("Syntax error, unrecognized expression: "+e)},n.uniqueSort=function(e){var t,n=[],r=0,o=0;if(X=!E.detectDuplicates,B=!E.sortStable&&e.slice(0),e.sort(J),X){for(;t=e[o++];)t===e[o]&&(r=n.push(o));for(;r--;)e.splice(n[r],1)}return e},A=n.getText=function(e){var t,n="",r=0,o=e.nodeType;if(o){if(1===o||9===o||11===o){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=A(e)}else if(3===o||4===o)return e.nodeValue}else for(;t=e[r];r++)n+=A(t);return n},T=n.selectors={cacheLength:50,createPseudo:o,match:mt,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(Ct,Et),e[3]=(e[4]||e[5]||"").replace(Ct,Et),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||n.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&n.error(e[0]),e},PSEUDO:function(e){var n,r=!e[5]&&e[2];return mt.CHILD.test(e[0])?null:(e[3]&&e[4]!==t?e[2]=e[4]:r&&ht.test(r)&&(n=p(r,!0))&&(n=r.indexOf(")",r.length-n)-r.length)&&(e[0]=e[0].slice(0,n),e[2]=r.slice(0,n)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(Ct,Et).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=G[e+" "];return t||(t=RegExp("(^|"+ot+")"+e+"("+ot+"|$)"))&&G(e,function(e){return t.test("string"==typeof e.className&&e.className||typeof e.getAttribute!==K&&e.getAttribute("class")||"")})},ATTR:function(e,t,r){return function(o){var i=n.attr(o,e);return null==i?"!="===t:t?(i+="","="===t?i===r:"!="===t?i!==r:"^="===t?r&&0===i.indexOf(r):"*="===t?r&&i.indexOf(r)>-1:"$="===t?r&&i.slice(-r.length)===r:"~="===t?(" "+i+" ").indexOf(r)>-1:"|="===t?i===r||i.slice(0,r.length+1)===r+"-":!1):!0}},CHILD:function(e,t,n,r,o){var i="nth"!==e.slice(0,3),u="last"!==e.slice(-4),l="of-type"===t;return 1===r&&0===o?function(e){return!!e.parentNode}:function(t,n,a){var c,f,s,p,d,h,g=i!==u?"nextSibling":"previousSibling",m=t.parentNode,y=l&&t.nodeName.toLowerCase(),v=!a&&!l;if(m){if(i){for(;g;){for(s=t;s=s[g];)if(l?s.nodeName.toLowerCase()===y:1===s.nodeType)return!1;h=g="only"===e&&!h&&"nextSibling"}return!0}if(h=[u?m.firstChild:m.lastChild],u&&v){for(f=m[k]||(m[k]={}),c=f[e]||[],d=c[0]===z&&c[1],p=c[0]===z&&c[2],s=d&&m.childNodes[d];s=++d&&s&&s[g]||(p=d=0)||h.pop();)if(1===s.nodeType&&++p&&s===t){f[e]=[z,d,p];break}}else if(v&&(c=(t[k]||(t[k]={}))[e])&&c[0]===z)p=c[1];else for(;(s=++d&&s&&s[g]||(p=d=0)||h.pop())&&((l?s.nodeName.toLowerCase()!==y:1!==s.nodeType)||!++p||(v&&((s[k]||(s[k]={}))[e]=[z,p]),s!==t)););return p-=o,p===r||0===p%r&&p/r>=0}}},PSEUDO:function(e,t){var r,i=T.pseudos[e]||T.setFilters[e.toLowerCase()]||n.error("unsupported pseudo: "+e);return i[k]?i(t):i.length>1?(r=[e,e,"",t],T.setFilters.hasOwnProperty(e.toLowerCase())?o(function(e,n){for(var r,o=i(e,t),u=o.length;u--;)r=nt.call(e,o[u]),e[r]=!(n[r]=o[u])}):function(e){return i(e,0,r)}):i}},pseudos:{not:o(function(e){var t=[],n=[],r=D(e.replace(ct,"$1"));return r[k]?o(function(e,t,n,o){for(var i,u=r(e,null,o,[]),l=e.length;l--;)(i=u[l])&&(e[l]=!(t[l]=i))}):function(e,o,i){return t[0]=e,r(t,null,i,n),!n.pop()}}),has:o(function(e){return function(t){return n(e,t).length>0}}),contains:o(function(e){return function(t){return(t.textContent||t.innerText||A(t)).indexOf(e)>-1}}),lang:o(function(e){return gt.test(e||"")||n.error("unsupported lang: "+e),e=e.replace(Ct,Et).toLowerCase(),function(t){var n;do if(n=$?t.lang:t.getAttribute("xml:lang")||t.getAttribute("lang"))return n=n.toLowerCase(),n===e||0===n.indexOf(e+"-");while((t=t.parentNode)&&1===t.nodeType);return!1}}),target:function(t){var n=e.location&&e.location.hash;return n&&n.slice(1)===t.id},root:function(e){return e===P},focus:function(e){return e===R.activeElement&&(!R.hasFocus||R.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:function(e){return e.disabled===!1},disabled:function(e){return e.disabled===!0},checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,e.selected===!0},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeName>"@"||3===e.nodeType||4===e.nodeType)return!1;return!0},parent:function(e){return!T.pseudos.empty(e)},header:function(e){return bt.test(e.nodeName)},input:function(e){return Nt.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||t.toLowerCase()===e.type)},first:f(function(){return[0]}),last:f(function(e,t){return[t-1]}),eq:f(function(e,t,n){return[0>n?n+t:n]}),even:f(function(e,t){for(var n=0;t>n;n+=2)e.push(n);return e}),odd:f(function(e,t){for(var n=1;t>n;n+=2)e.push(n);return e}),lt:f(function(e,t,n){for(var r=0>n?n+t:n;--r>=0;)e.push(r);return e}),gt:f(function(e,t,n){for(var r=0>n?n+t:n;t>++r;)e.push(r);return e})}},T.pseudos.nth=T.pseudos.eq;for(C in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})T.pseudos[C]=a(C);for(C in{submit:!0,reset:!0})T.pseudos[C]=c(C);s.prototype=T.filters=T.pseudos,T.setFilters=new s,D=n.compile=function(e,t){var n,r=[],o=[],i=V[e+" "];if(!i){for(t||(t=p(e)),n=t.length;n--;)i=v(t[n]),i[k]?r.push(i):o.push(i);i=V(e,N(o,r))}return i},E.sortStable=k.split("").sort(J).join("")===k,E.detectDuplicates=X,I(),E.sortDetached=i(function(e){return 1&e.compareDocumentPosition(R.createElement("div"))}),i(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||u("type|href|height|width",function(e,n,r){return r?t:e.getAttribute(n,"type"===n.toLowerCase()?1:2)}),E.attributes&&i(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||u("value",function(e,n,r){return r||"input"!==e.nodeName.toLowerCase()?t:e.defaultValue}),i(function(e){return null==e.getAttribute("disabled")})||u(rt,function(e,n,r){var o;return r?t:(o=e.getAttributeNode(n))&&o.specified?o.value:e[n]===!0?n.toLowerCase():null}),"function"==typeof define&&define.noamd?define('cbar_Sizzle',function(){return n}):e.cbar_Sizzle=n})(window);

// #4322
//if (typeof window.cbar_Sizzle =='undefined') window.cbar_Sizzle=jQuery.find;

var cbar_url= window.location.href;

var cbar_url_en = encodeURIComponent(cbar_url);


				var cbar_dynamic_url = '//www.barilliance.net/';
				var cbar_static_url = '//s3.amazonaws.com/static.barilliance.com/';
				var cbar_userimages = '//s3.amazonaws.com/userimages.barilliance.com/';

				var cbar_wl = false;
			
var cbar_RECSV1 = true; // set to false if no recs
var cbar_RECSV2 = false;
var cbar_CP = false;
var cbar_cp_show= false;
var cbar_shortlist = false;
var cbar_shortlist_show= false;
var cbar_quiet=false;
var cbar_debug=1;
var cbar_debug_show=false;
var cbar_startearly=false;
var cbar_ui_t='';
var cbar_ui_n='';
var cbar_ui_s='';
var cbar_urls_update=false;
var cbar_md= false;
var cbar_ro= false;
var cbar_force_li= false;
var cbar_uro= false;
var cbar_add_data=false;
var cbar_cid='';
var cbar_ctitle='';
var cbar_pid2cid='';
var cbar_cname='';
var cbar_c_from_p=false;
var cbar_cattree=false;
var cbar_cat_cids=[];
var cbar_cat_level =0;
var cbar_cids_cur='';
var cbar_cids_p='';
var cbar_cats_l=[];
var cbar_cats_c=[];
var cbar_lnk=5;
var cbar_pid='';
var cbar_masterid='';
var cbar_pid_ismaster=0;
var cbar_platform_id='';
var cbar_qty=1;
//var cbar_hidden_mode=true;
var cbar_logo="star16.png";
var cbar_results = null;
var cbar_str1;
var cbar_str2;
var cbar_str1_w=90;
var cbar_str2_w=90;
var cbar_strs_fsize =15;
var cbar_strs= null;
var cbar_sid=0;
var cbar_uid;
var cbar_nuid=0;
var cbar_pic='';
var cbar_name='';
var cbar_purl='';
var cbar_auto_curl='';
var cbar_auto_cname='';
var cbar_auto_curl_p='';
var cbar_catmode=1;
var cbar_cm2_update=false;
var cbar_pri='';
var cbar_bgcolor='white';
var cbar_bordercolor='gray';
var cbar_icon_bordercolor='orange';
var cbar_color='darkgray';
var cbar_pop_bgcolor='#CAE1FF';
var cbar_pop_bordercolor='gray';
var cbar_pop_color='#050505';
var cbar_pop_pri_color='green';
var cbar_pop_width=250;
var cbar_pop_show_clk = false;
var cbar_details_template='';
var cbar_rss = false;
var cbar_is_add=false;// obsolete
var cbar_is_pur=false;
var cbar_is_checkout=false;
var cbar_pur_pids=[];
var cbar_pur_qtys=[];
var cbar_pur_imgs=[];
var cbar_pur_names=[];
var cbar_pur_urls=[];
var cbar_pur_prices=[];
var cbar_pur_subttls=[];
var cbar_pur_xtr1s=[];
var cbar_pur_xtr2s=[];
var cbar_pur_xtr3s=[];
var cbar_pur_xtr4s=[];
var cbar_pur_add=false;
var cbar_pur_pid_add='';
var cbar_pur_qty_add=0;
var cbar_crt='';
var cbar_crst='';
var cbar_crtn='';
var cbar_shp='';
var cbar_pur_com=false;
var cbar_pur_mode =0;
var cbar_home=false;
var cbar_4U=false;
var cbar_other=false;
var cbar_brand=false;
var cbar_switchto=null;
var cbar_encode = false; //false means utf-8
var cbar_lang= false;
var cbar_block_bt=false;
var cbar_cookiedomain = '';
var cbar_user_attributes= new Object();
var cbar_user_attribute= new Object();
var cbar_product_attributes= new Object();
var cbar_del_user_attributes= new Object();
var cbar_del_product_attributes= new Object();
var cbar_userinfo= new Object();
var cbar_rtl=false;
var cbar_height =60;
var cbar_width =0;
var cbar_round_corners=false;
var cbar_showprice=false;
var cbar_showiconprice=false;
var cbar_showicontext1 = false;
var cbar_showicontext2 = false;
var cbar_icontext_width1 = 0;
var cbar_icontext_width2 = 0;
var cbar_showiconprice1=false;
var cbar_showiconprice2=false;
var cbar_showicontext_price=true;
var cbar_showicontext_text = true;
var cbar_numicons1 = 6;
var cbar_numicons2 = 4;
var cbar_iconspace=5;
var cbar_dynamic = true;
var cbar_ratio = 0.2;
var cbar_currency = '$';
var cbar_pcm = 0;
var cbar_icontext_col = 'red';
var cbar_iconwidth_small= 55;
var cbar_iconheight_small= 49;
var cbar_iconwidth_large= 110;
var cbar_iconheight_large= 125;
var cbar_icontext_len = 35;
var cbar_icontext_fsize=13;
var cbar_icontext_template ;
var cbar_spacers_width = 110;
var cbar_flash_mode =0;
var cbar_PositionFixedSupported = true; // default
var cbar_abt=0;
var cbar_abt_key=1;
var cbar_pagetype="U";
var cbar_log='';
var cbar_elog='';
var cbar_logg='';
var cbar_log_hov=false;
var cbar_popup_link='more details';
var cbar_pop_add2cart ='';
var cbar_global_temp;
var cbar_oos = 2;
var cbar_norecs=null;
var cbar_oos_page = 0;
var cbar_auto_oos =false;
var cbar_ne = null;
var cbar_ne_html='';
var cbar_sa = null;
var cbar_sa_html='';
var cbar_bs = null;
var cbar_bs_html='';
var cbar_pd = null;
var cbar_pd_html='';
var cbar_fl1 = null;
var cbar_fl1_html='';
var cbar_fl2 = null;
var cbar_fl2_html='';
var cbar_questionmark = true;
var cbar_demo_mode = false;
var cbar_img_search ='';
var cbar_img_replace ='';
var ie7u =false;
var cbar_shf = false;
var cbar_ipuid_save=false;
var cbar_ipuid_get=false;
var cbar_live_stock='';
var cbar_span_template ='';
var cbar_span_width = 300;
var cbar_span_bg_t= "span/popup_top.png";
var cbar_span_bg= "span/popup_middle.png";
var cbar_span_bg_b= "span/popup_bottom.png";
var ie6_small_icons_shift = false;
var cbar_extra1='';
var cbar_extra2='';
var cbar_extra3='';
var cbar_xtxt='';
var cbar_filter_val='';
var cbar_flow ='';
var cbar_num_widgets =2;
var cbar_search='';
var cbar_e_clk=false;
var cbar_ctr1=0;
var cbar_ctr2=0;
var cbar_ctr3=0;
var cbar_liX=1;
var cbar_liP=1;
var cbar_liL=1;

//var cbar_new_mode_enabled = false;
var cbar_widget_show = false;
var cbar_widget_to_draw=0; //1,2,0=all
var cbar_widget=false;
var cbar_w_template_head= [];
var cbar_w_item_template=[];
var cbar_w_linebreak_template=[];
var cbar_w_iconsperline=[];
var cbar_w_template_bottom=[];
var cbar_w_anchor = [];
var cbar_w_insert_where=[]; // 0=after 1=before 2=child 3= overwrite
var cbar_w_title_len= 199;
var cbar_w_scrollbuttons = [];
var cbar_w_numshowicons = [];
var cbar_w_next_html= [];
var cbar_w_prev_html= [];
var cbar_dups_ok=false;

// facebook fan_page
var cbar_fb_fanpage=false;


var cbar_LP=false;

// internal
var cbar_preview_rules="";
var cbar_preview_live=false;
var cbar_datajs='data.js.php';
var cbar_override_titles=[];
var rule_title_index= [];
var cbar_recstep_titles =[];
//var cbar_new_mode = false;
var cbar_suppress_rules=[];
var cbar_data_params='';

var cbar_user_wantit = false;
var cbar_fb_total_wantit =0;
var cbar_fb_friends=[];
var cbar_fb_friends_str='';
var cbar_fb_wantit_friends=[];
var cbar_fb_wantit_nonfriends=[];
var cbar_fb_total_wantit_friends =0;
var cbar_fb_random_users =[];
var cbar_wl_items = [];
var cbar_lvt=0;
var cbar_sess=0;
var cbar_sess_pv=0;
var cbar_date = new Date();
var cbar_abt_str ='';
var cbar_scrolltimeout =0;
var cbar_resizetimeout =0;
var cbar_ban_resizetimeout =0;
var cbar_ban_scrolltimeout =0;
var cbar_ban_retrytimeout =0;
var cbar_banners=[];
var cbar_coups=[];
var cbar_e_input=[];
var cbar_e_last='';
var cbar_e_com=false;
var cbar_e_checkbox=[];
var cbar_cou_input='';
var cbar_cou_in_cart= false;
var cbar_rules_str='';
var cbar_popups=[];
var cbar_pop_scrolltimeout =0;
var cbar_img_overlay_show_params=[];
var cbar_ba=false;
var cbar_trust_outdiv_css='position:absolute';
var cbar_subproducts_attrib ='';
var cbar_cat_personalization = false;
var cbar_catper_show = false;
window.cbar_globals =[];

var cbar2url ={
cbar_cid: "cid",
cbar_ctitle: "ctitle",
cbar_pid2cid: "pid2cid",
cbar_pic: "pic",
cbar_name: "name",
cbar_purl: "purl",
cbar_auto_curl: "acurl",
cbar_auto_curl_p: "acurl_p",
cbar_auto_cname: "acname",
cbar_pri: "pri",
cbar_log: "lo",
cbar_elog: "elo",
cbar_logg: "logg",
cbar_crt: "crt",
cbar_crtn: "crtn",
cbar_crst: "crst",
cbar_shp: "shp",
cbar_extra1: "xtr1",
cbar_extra2: "xtr2",
cbar_extra3: "xtr3",
cbar_extra4: "xtr4",
cbar_xtxt: "xtxt",
cbar_filter_val: "fltr",
cbar_oos:"oos",
cbar_live_stock:"stk",
cbar_subproducts_attrib:'subattr',
cbar_pid_ismaster:'pidm',
cbar_masterid:'master_str',
cbar_platform_id:'platform_id'
}

//ret
//var cbar_pub_only=false; //true= only publisher
//var cbar_adv=false;

function cbar_findPos(obj) {

	var curleft = curtop =curright= 0;
	var objwidth= obj.scrollWidth;
	var objheight= obj.scrollHeight;

	if (obj.offsetParent) {

	do {
			curleft += obj.offsetLeft;

			curtop += obj.offsetTop;
		} while (obj = obj.offsetParent);
	return [curleft,curtop,window.document.body.scrollWidth- curleft- objwidth, curtop+objheight];
	}
}


		// widget file
		var cbar_curricon = [0,0,0,0];
		var action_text='';
		var action_city='';
		var action_country='';
		
		var cbar_w_shownext =[false,false,false,false];
		var cbar_w_showprev=[false,false,false,false];
		
		function cbar_w_init () {
		
		return;
		}
		
	function cbar_data_returned_widget(redraw){

		for (var i=0; i < cbar_results.length; i++ ){
			if  ((cbar_widget_to_draw >0) && (cbar_widget_to_draw-1) !=i) continue; 
			
			if  (( cbar_results[i].length ==0) || (cbar_w_anchor.length <i ) || (typeof cbar_w_anchor[i] == "undefined") || (cbar_w_anchor[i] == null)  ) continue;
			
			var cbar_recstep = eval("cbar_rectype"+i);

			if ((cbar_w_scrollbuttons == true) || ((typeof cbar_w_scrollbuttons[i] != 'undefined') && cbar_w_scrollbuttons[i])) {
				if ( (cbar_w_numshowicons[i]+cbar_curricon[i]) < cbar_results[i].length) cbar_w_shownext[i]=true; else cbar_w_shownext[i]=false;
				if (cbar_curricon[i] > 0) cbar_w_showprev[i]=true; else cbar_w_showprev[i]=false;
			}

			if (typeof cbar_w_numshowicons[i] !='number') cbar_w_numshowicons[i] = 99;
			
			if (typeof cbar_override_titles[i]  !='undefined') title_index= cbar_override_titles[i] ; else title_index=cbar_recstep;
			if (typeof rule_title_index[i] !='undefined') title_index = rule_title_index[i];
			cbar_widget_html= cbar_w_template_head[i].replace(/%group_title%/g, decodeURIComponent(cbar_recstep_titles[title_index].replace (/\+/g, ' ')));
			
			var cbar_numicons=eval ('cbar_numicons'+(i+1)); 

			for (var t=cbar_curricon[i]; (t < cbar_results[i].length) && ( t <  cbar_numicons)&& ((t-cbar_curricon[i]) <cbar_w_numshowicons[i]); t++){
				if  ( (typeof cbar_w_iconsperline[i] == "number") && (t>0) &&((t % cbar_w_iconsperline[i])==0 ) && (typeof cbar_w_linebreak_template[i] !='undefined')) cbar_widget_html+=cbar_w_linebreak_template[i];
				
				try {//#231
					var cbar_short_title = decodeURIComponent(cbar_results[i][t][2].replace (/\+/g, ' '));
				}catch (err){
					var cbar_short_title=unescape(cbar_results[i][t][2]).replace (/\+/g, ' ');
				}
		
				cbar_short_title=cbar_short_title.substring(0, cbar_w_title_len);
				if  (cbar_short_title.length == cbar_w_title_len) cbar_short_title+='...';
				
						// detect safari replace bug and fix price
				xyz='%str%';
				if (xyz.replace (/%str%/g, '$15') !='$15') {
					cbar_results[i][t][4] = cbar_results[i][t][4].replace ('$','&#36;').replace ('%24','&#36;');
					cbar_results[i][t][16] = cbar_results[i][t][16].replace ('$','&#36;').replace ('%24','&#36;');
					cbar_results[i][t][17] = cbar_results[i][t][17].replace ('$','&#36;').replace ('%24','&#36;');
					cbar_results[i][t][18] = cbar_results[i][t][18].replace ('$','&#36;').replace ('%24','&#36;');
					cbar_results[i][t][23] = cbar_results[i][t][23].replace ('$','&#36;').replace ('%24','&#36;');
					cbar_results[i][t][21] = cbar_results[i][t][21].replace ('$','&#36;').replace ('%24','&#36;');
				}
				
				try{ //#231
				var cbar_tmp_xtr1=decodeURIComponent(cbar_results[i][t][16].replace (/\+/g, ' '));
				}catch (err){
					var cbar_tmp_xtr1=unescape(cbar_results[i][t][16]);
				}
				try{
				var cbar_tmp_xtr2=decodeURIComponent(cbar_results[i][t][17].replace (/\+/g, ' '));
				}catch (err){
					var cbar_tmp_xtr2=unescape(cbar_results[i][t][17]);
				}
				try{
				var cbar_tmp_xtr3=decodeURIComponent(cbar_results[i][t][18].replace (/\+/g, ' '));
				}catch (err){
					var cbar_tmp_xtr3=unescape(cbar_results[i][t][18]); 
				}
				try{
				var cbar_tmp_xtr4=decodeURIComponent(cbar_results[i][t][23].replace (/\+/g, ' '));
				}catch (err){
					var cbar_tmp_xtr4=unescape(cbar_results[i][t][23]); 
				}
				try{
				var cbar_tmp_xtxt=decodeURIComponent(cbar_results[i][t][21].replace (/\+/g, ' '));
				}catch (err){
					var cbar_tmp_xtxt=unescape(cbar_results[i][t][21]); 
				}
						
				var cbar_clk_js = ' return cbar_click(document.getElementById(\'cbar_div_'+(i+1)+(t+1)+'\'))'; // taken from bar. needs check
												
				if  (cbar_recstep ==19)  {
					try{ action_text=eval('ra_action_texts.'+eval('cbar_ra_data_'+cbar_results[i][t][0]+'.activity'));} catch(error){action_text='';};
					try{ action_city = eval('cbar_ra_data_'+cbar_results[i][t][0]+'.city');} catch(error){action_city='';};
					try{ action_country = eval('cbar_ra_data_'+cbar_results[i][t][0]+'.country');} catch(error){action_country='';};
				}
				var cbar_recs_live='';
				var cbar_notifications = JSON.parse(cbar_results[i][t][22]);
				if (cbar_notifications.length >0) {
					cbar_recs_live="<div style='"+cbar_LIRE_css1+"'>"; 
					 for(var key=0; key< cbar_notifications.length ; key++) {
						 cbar_recs_live+="<div style='"+cbar_LIRE_css2+"'>"+cbar_notifications[key]+"</div>";
					 }
					 cbar_recs_live+="</div>";
					
				}
				
		
																	
				cbar_widget_html+= cbar_w_item_template[i].replace(/%picture%/g, decodeURIComponent(cbar_results[i][t][1].replace (/\+/g, ' ')))
				.replace(/%idx%/g, cbar_results[i][t][0])
				.replace(/%rectype%/g, cbar_recstep)
				.replace(/%title%/g, cbar_short_title)
				.replace(/%ra_action%/g, action_text)
				.replace(/%ra_city%/g, action_city)
				.replace(/%ra_country%/g, action_country)
				.replace(/%url%/g, decodeURIComponent(cbar_results[i][t][3].replace (/\+/g, ' ')))
				.replace(/%price%/g, decodeURIComponent(cbar_results[i][t][4].replace (/\+/g, ' ')))
				.replace(/%price_clean%/g, decodeURIComponent(cbar_results[i][t][5].replace (/\+/g, ' ')))
				.replace(/%pid%/g, decodeURIComponent(cbar_results[i][t][6].replace (/\+/g, ' ')))
				.replace(/%clicks%/g, decodeURIComponent(cbar_results[i][t][7].replace (/\+/g, ' ')))
				.replace(/%hoovers%/g, decodeURIComponent(cbar_results[i][t][8].replace (/\+/g, ' ')))
				.replace(/%onclick%/g, cbar_clk_js)
				.replace(/%new%/g, (cbar_results[i][t][10]=='1') ? cbar_ne_html:'')
				.replace(/%sale%/g, (cbar_results[i][t][11]=='1') ? cbar_sa_html:'')
				.replace(/%bestseller%/g, (cbar_results[i][t][12]=='1') ? cbar_bs_html:'')
				.replace(/%pricedrop%/g, (cbar_results[i][t][13]=='1') ? cbar_pd_html:'')
				.replace(/%flag1%/g, (cbar_results[i][t][14]=='1') ? cbar_fl1_html:'')
				.replace(/%flag2%/g, (cbar_results[i][t][15]=='1') ? cbar_fl2_html:'')
				.replace(/%xtr1%/g, cbar_tmp_xtr1)
				.replace(/%xtr2%/g, cbar_tmp_xtr2)
				.replace(/%xtr3%/g, cbar_tmp_xtr3)
				.replace(/%xtr4%/g, cbar_tmp_xtr4)
				.replace(/%xtxt%/g, cbar_tmp_xtxt)
				.replace(/%live_notifications%/g, cbar_recs_live)
				.replace(/%perc_purchased%/g, decodeURIComponent(cbar_results[i][t][19].replace (/\+/g, ' ')))
				.replace(/%subproducts%/g, decodeURIComponent(cbar_results[i][t][25].replace (/\+/g, ' ')))
				.replace(/%t%/g, t);
				
				
				
			}
			
			cbar_widget_html+= cbar_w_template_bottom[i];
			
			cbar_w_prev_html_tmp='';
			if (typeof cbar_w_prev_html =='object' && typeof cbar_w_prev_html[i]!='undefined') cbar_w_prev_html_tmp= cbar_w_prev_html[i];
			if (typeof cbar_w_prev_html =='string') cbar_w_prev_html_tmp = cbar_w_prev_html;
			cbar_widget_html=cbar_widget_html.replace(/%prevbutton%/g, (cbar_w_showprev[i])?cbar_w_prev_html_tmp:"");
			
			cbar_w_next_html_tmp='';
			if (typeof cbar_w_next_html =='object' && typeof cbar_w_next_html[i]!='undefined') cbar_w_next_html_tmp= cbar_w_next_html[i];
			if (typeof cbar_w_next_html =='string') cbar_w_next_html_tmp = cbar_w_next_html;
			cbar_widget_html=cbar_widget_html.replace(/%nextbutton%/g, (cbar_w_shownext[i])?cbar_w_next_html_tmp:"");
			
			var cbar_tmp = document.createElement('div'); 
			cbar_tmp.innerHTML = cbar_widget_html.replace(/%i%/g, i);
			var cbar_new_w = cbar_tmp.firstChild;
			var parent = cbar_w_anchor[i].parentNode;
			
			if (cbar_w_insert_where[i]==2) cbar_w_anchor[i].appendChild(cbar_new_w);
			else if (cbar_w_insert_where[i]==1) 	parent.insertBefore(cbar_new_w, cbar_w_anchor[i]);
			else if (cbar_w_insert_where[i]==3) 	parent.replaceChild(cbar_new_w, cbar_w_anchor[i]);
			else if (cbar_w_insert_where[i]==0) {
				if (parent.lastchild == cbar_w_anchor[i]) 
					parent.appendChild(cbar_new_w);
				else 
					parent.insertBefore(cbar_new_w, cbar_w_anchor[i].nextSibling);
			}
		}
		if (typeof (cbar_after_show) =='function') cbar_after_show('widget');
		
}

function cbar_del_widgets(){
	for (var i=0; i<cbar_num_widgets; i++){
		var cbar_widget=document.getElementById("cbar_widget"+i);
		if (cbar_widget !=null) cbar_widget.parentNode.removeChild (cbar_widget);
	}
}

function cbar_w_next (group){

	cbar_del_widgets();
	cbar_curricon[group]+=1;
	cbar_data_returned_widget(true);

	return false;
}

function cbar_w_prev (group){
	cbar_del_widgets();
	cbar_curricon[group]-=1;
	cbar_data_returned_widget(true);
	return false;
}


function switch_subproduct (widget, item, subproduct_index){
	// check if the data on the wifget item is of a subproduct
	dom_item = cbar_Sizzle('#cbar_w'+widget+'_'+item+'_item_s');
	if (dom_item.length){
		// check if the data on the widget item is of a subproduct
		prev_subproduct_index = dom_item[0].getAttribute('subproduct_index'); // find which subproduct data is in the widget now
		if (prev_subproduct_index)
			var current_data = cbar_subproducts[widget][item][prev_subproduct_index];
		else
			var current_data = cbar_results[widget][item];
		
		var new_data = cbar_subproducts[widget][item][subproduct_index];
		
		html= dom_item[0].innerHTML;
		
		// switch img, price, name
		html= cbar_replace_global (decodeURIComponent(current_data[1].replace (/\+/g, ' ')), decodeURIComponent(new_data[1].replace (/\+/g, ' ')), html);
		html= cbar_replace_global (decodeURIComponent(current_data[2].replace (/\+/g, ' ')), decodeURIComponent(new_data[2].replace (/\+/g, ' ')), html);
		html= cbar_replace_global (decodeURIComponent(current_data[3].replace (/\+/g, ' ')), decodeURIComponent(new_data[3].replace (/\+/g, ' ')), html);
		html= cbar_replace_global (decodeURIComponent(current_data[4].replace (/\+/g, ' ')), decodeURIComponent(new_data[4].replace (/\+/g, ' ')), html);
		html= cbar_replace_global (decodeURIComponent(current_data[6].replace (/\+/g, ' ')), decodeURIComponent(new_data[6].replace (/\+/g, ' ')), html);
		
		// write back
		dom_item[0].innerHTML = html;
		dom_item[0].setAttribute('subproduct_index',subproduct_index); // remember which subproduct data is in the widget
		
	}
	
	
}

//end widget file
function  cbar_click2 (a_element, url, rectype, to_pid) {
	// set temp cookie that will register the click after the page is switched to the selected product
	cbar_createCookie('cbar_rec_clk',  rectype+','+to_pid+','+encodeURIComponent(cbar_pid)+','+encodeURIComponent(cbar_cid)+','+cbar_pagetype ,0); // will be deleted in next page view
	cbar_report_click(true);// first click report (sometimes may not work)  = to support back button on IE we dont use redirection
	if(rectype!='banner')
		a_element.href= url;
	return true; // go to the product in the href (the click will be registered after the page chages- allows back button to work normally);
}

function  cbar_click3 (a_element, url, rectype, to_pid, to_pid_orig) {
	// get the widget num and item num from id cbar_w0_0_item_a_s...
	var widgetnum=0; var itemnum = 0; var promoted=0;
	for (ii=0; ii < cbar_results.length; ii++){
		for (jj=0; jj < cbar_results[ii].length; jj++){
			if (cbar_results[ii][jj][0] == to_pid){
				widgetnum = ii; itemnum =jj; promoted= cbar_results[ii][jj][26];
				ii= cbar_results.length;
				break;
			}
		}
	}

	var widtitle = cbar_recstep_titles[rectype];
	if (typeof rule_title_index[widgetnum] !='undefined') widtitle = decodeURIComponent(cbar_recstep_titles[rule_title_index[widgetnum]].replace (/\+/g, ' '));
	// set temp cookie that will register the click after the page is switched to the selected product
	cbar_createCookie('cbar_rec_clk',  rectype+','+to_pid+','+encodeURIComponent(cbar_pid)+','+encodeURIComponent(cbar_cid)+','+cbar_pagetype+','+encodeURIComponent(to_pid_orig)+','+widgetnum+','+itemnum+','+promoted +','+encodeURIComponent(widtitle),0); // will be deleted in next page view
	cbar_report_click(true); // first click report (sometimes may not work)  = to support back button on IE we dont use redirection
	a_element.href= url;

	return true; // go to the product in the href (the click will be registered after the page chages- allows back button to work normally);
}

// check if we arrived from click on widget, if so, report it
// The report happens twice, after the click and after the page change
function cbar_report_click (before_page_change){
	var data= cbar_readCookie('cbar_rec_clk');
	if  ( (data ==null) || (data==false) || (data=='false')) return;
	// click data exists
	if (!before_page_change) cbar_createCookie('cbar_rec_clk',  false ,0); // 'delete' cookie (set to false actually)
	var datas = data.split(',');
	cbar_switchto=''; // legacy// obsolete
	loadjscssfile (cbar_dynamic_url+cbar_datajs+'?sid='+cbar_sid+'&uid='+cbar_uid+'&pid='+datas[1]+'&rt='+datas[0]+'&clk=1'+cbar_abt_str+"&f_pt="+datas[4]+"&f_cid="+(datas[3]?datas[3]:0)+"&f_pid="+(datas[2]?datas[2]:0)+"&datacount="+(datas.length)+"&widnum="+(datas[6]?datas[6]:0)+"&itemnum="+(datas[7]?datas[7]:0)+"&promoted="+(datas[8]?datas[8]:0)+"&title="+(datas[9]?datas[9]:0)+"&ts="+Math.ceil(10000*Math.random()),'js');

}

function  cbar_click (obj) {
	var switch_to = obj.getAttribute ('xhref');
	cbar_switchto =switch_to;
	loadjscssfile (cbar_dynamic_url+cbar_datajs+'?sid='+cbar_sid+'&uid='+cbar_uid+'&pid='+obj.getAttribute ('idx')+'&rt='+obj.getAttribute ('rectype')+'&clk=1'+cbar_abt_str+"&f_pt="+cbar_pagetype+"&f_cid="+(cbar_cid?cbar_cid:0)+"&f_pid="+(cbar_pid?cbar_pid:0)+"&ts="+Math.ceil(10000*Math.random()),'js');
	return false;
}

function  cbar_add2cart_click (obj) {
	loadjscssfile (cbar_dynamic_url+cbar_datajs+'?sid='+cbar_sid+'&uid='+cbar_uid+'&pid='+obj.getAttribute ('idx')+'&rt='+obj.getAttribute ('rectype')+'&a2c_clk=1'+cbar_abt_str+"&pt="+cbar_pagetype+"&ts="+Math.ceil(10000*Math.random()),'js');
	return false;
}

function cbar_report_delayed_action (rule_id){

	var str="&rid="+rule_id;
	if (typeof window['cbar_rule_suppressed_'+rule_id] !='undefined') str+='&supp=true'; // rule was suppressed from data.js

	loadjscssfile (cbar_dynamic_url+cbar_datajs+'?a=delayed&sid='+cbar_sid+'&uid='+cbar_uid+str+cbar_abt_str+'&ts='+Math.ceil(10000*Math.random()),'js');
	cbar_log_console ('cbar rule '+rule_id+' triggered');
}

function cbar_refresh_recommendations(new_pid, del_curr_widgets) {
	// enhance user attributes (optional)

	if (typeof del_curr_widgets == 'undefined') del_curr_widgets=true;//default

	// delete current widgets
	if (del_curr_widgets) {
		for (var i=0; i<4 ; i++){
			var widget= cbar_Sizzle ('#cbar_widget'+i);
			if (widget.length) widget[0].parentNode.removeChild(widget[0]);
		}
	}

	cbar_results = new Array ();
	cbar_subproducts= new Array ();
	loadjscssfile (cbar_dynamic_url+cbar_datajs+'?a=refrecs&sid='+cbar_sid+cbar_data_params+'&uid='+cbar_uid+'&pid='+encodeURIComponent(new_pid)+'&url='+cbar_url_en+'&flow='+cbar_flow+'&pt='+cbar_pagetype+'&'+cbar_any2url('attu',cbar_user_attributes)+"&"+cbar_any2url('attu1',cbar_user_attribute)+"&subattr="+cbar_subproducts_attrib+"&ts="+Math.ceil(10000*Math.random()),'js');

}

// data from server
function cbar_data_returned () {
	if ( (cbar_widget || cbar_RECSV2) && cbar_widget_show &&  (typeof (cbar_after_load) =='function')) cbar_after_load('widget');
	if ( (cbar_widget|| cbar_RECSV2) && cbar_widget_show ) 	cbar_data_returned_widget(false);
	if ( (cbar_RECSV2) && cbar_widget_show && (typeof (cbar_after_show) =='function')) cbar_after_show('widget');
 return 1;
}


var cbar_BrowserDetect = {
	init: function () {
		this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
		this.version = this.searchVersion(navigator.userAgent)
			|| this.searchVersion(navigator.appVersion)
			|| "an unknown version";
		this.OS = this.searchString(this.dataOS) || "an unknown OS";
	},
	searchString: function (data) {
		for (var i=0;i<data.length;i++)	{
			var dataString = data[i].string;
			var dataProp = data[i].prop;
			this.versionSearchString = data[i].versionSearch || data[i].identity;
			if (dataString) {
				if (dataString.indexOf(data[i].subString) != -1)
					return data[i].identity;
			}
			else if (dataProp)
				return data[i].identity;
		}
	},
	searchVersion: function (dataString) {
		var index = dataString.indexOf(this.versionSearchString);
		if (index == -1) return;
		return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
	},
	dataBrowser: [
		{
			string: navigator.userAgent,
			subString: "Edge",
			identity: "Edge"
		},
		{
			string: navigator.userAgent,
			subString: "Chrome",
			identity: "Chrome"
		},
		{ 	string: navigator.userAgent,
			subString: "OmniWeb",
			versionSearch: "OmniWeb/",
			identity: "OmniWeb"
		},
		{
			string: navigator.vendor,
			subString: "Apple",
			identity: "Safari",
			versionSearch: "Version"
		},
		{
			prop: window.opera,
			identity: "Opera",
			versionSearch: "Version"
		},
		{
			string: navigator.vendor,
			subString: "iCab",
			identity: "iCab"
		},
		{
			string: navigator.vendor,
			subString: "KDE",
			identity: "Konqueror"
		},
		{
			string: navigator.userAgent,
			subString: "Firefox",
			identity: "Firefox"
		},
		{
			string: navigator.vendor,
			subString: "Camino",
			identity: "Camino"
		},
		{		// for newer Netscapes (6+)
			string: navigator.userAgent,
			subString: "Netscape",
			identity: "Netscape"
		},
		{
			string: navigator.userAgent,
			subString: "MSIE",
			identity: "Explorer",
			versionSearch: "MSIE"
		},
		{ //#131124
			string: navigator.userAgent,
			subString: "Trident",
			identity: "Explorer",
			versionSearch: "rv"
		},
		{
			string: navigator.userAgent,
			subString: "Gecko",
			identity: "Mozilla",
			versionSearch: "rv"
		},
		{ 		// for older Netscapes (4-)
			string: navigator.userAgent,
			subString: "Mozilla",
			identity: "Netscape",
			versionSearch: "Mozilla"
		}
	],
	dataOS : [
		{
			   string: navigator.userAgent,
			   subString: "Android",
			   identity: "Android"
		},
		{
				string: navigator.platform,
				subString: "Win",
				identity: "Windows"
		},
		{
				string: navigator.platform,
				subString: "Mac",
				identity: "Mac"
		},
		{
			   string: navigator.userAgent,
			   subString: "iPhone",
			   identity: "iPhone" // also ipod
		},
		{
			   string: navigator.userAgent,
			   subString: "iPad",
			   identity: "iPad"
		},
		{
				string: navigator.platform,
				subString: "Linux",
				identity: "Linux"
		}
	]

};

function loadjscssfile_callback(filename, filetype, callback){
	if (filetype=="js"){ //if filename is a external JavaScript file
		var fileref=document.createElement('script');
		fileref.setAttribute("type","text/javascript");
		fileref.setAttribute("src", filename);
		cbar_debug_log (filename);
	}else if (filetype=="css"){ //if filename is an external CSS file
		var fileref=document.createElement("link");
		fileref.setAttribute("rel", "stylesheet");
		fileref.setAttribute("type", "text/css");
		fileref.setAttribute("href", filename);
	}

	if (typeof fileref!="undefined"){
		if (callback) fileref.onload=callback;
			document.getElementsByTagName("head")[0].appendChild(fileref);
	}
}

function loadjscssfile(filename, filetype){
    //loadjscssfile_callback(filename, filetype, function(){});
	loadjscssfile_callback(filename, filetype, false);
}


function cbar_createCookie(name,value, days) {
	var expires = "";

	if (typeof days!= "undefined") {
		var date = new Date();
		date.setTime(date.getTime()+parseInt(days*24*60*60*1000));
		if (days !=0) 	expires="; expires="+date.toGMTString();
	}

	document.cookie = name+"="+value+expires+"; path=/; domain="+cbar_cookiedomain;

}



function cbar_readCookie(name) {
	var nameEQ = name + "=";

	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function cbar_writeStatic (name, value){
	var obj= {};
	var json= cbar_readCookie('cbar_static');
	if (json!=null) obj=JSON.parse(json);
	if (value !=null) obj[name]=value;
	else delete obj[name];
	var json= cbar_createCookie('cbar_static',JSON.stringify(obj),365);
}

function cbar_readStatic (name){
	var json= cbar_readCookie('cbar_static');
	if (json!=null) {
		obj=JSON.parse(json);
		if (typeof obj[name]!='undefined') return obj[name];
	}
	return null;
}


function cbar_replace_global (search, replace, source){
	var myRegExp = new RegExp(search,'ig');
	return source.replace(myRegExp,replace);
}

function cbar_in_array (item, array) {	var o = {};	for(var i=0;i<array.length;i++)  o[array[i]]='';	return ( item in o)	}

function  cbar_array_unique (array, num) { // num= how many items to output
    var a = []; store=false;
    for(var i=0; i<array.length; i++) {
		if (a.length == num) return a;
		if (! cbar_in_array (array[i],a)) a.push(array[i]);
	}
	return a;
}

function cbar_getnums (str, tofloat){
	var regex = /\d+(\.\d|\,\d)?\d*(\.\d|\,\d)?\d*/gim;
	var floats = str.match(regex);
	if (floats==null) return [];

	return floats.map(function(v) {
		if (tofloat==false) return v;

		var has_cents=false; var has_tencents=false;

		if (v.length<=2) return parseFloat(v);

		if (v[v.length-3]==',' ||v[v.length-3]=='.') has_cents=true;
		if (v[v.length-2]==',' ||v[v.length-2]=='.') has_tencents=true;
		v=v.replace(/[^0-9]+/img,'');
		if (has_cents) return parseFloat(v/100);
		if (has_tencents) return parseFloat(v/10);
		return parseFloat(v);
	});
}

function cbar_any2url(prefix, obj) {
	var args=new Array();
	if(typeof(obj) == 'object'){
		for(var i in obj)
			args[args.length]=cbar_any2url(prefix+'['+encodeURIComponent(i)+']', obj[i]);
	}
	else
		args[args.length]=prefix+'='+encodeURIComponent(obj);
	return args.join('&');
}

function cbar_gup( name ) {
  name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp( regexS );
  var results = regex.exec( window.location.href );
  if( results == null )
    return "";
  else
    return results[1];
}

function cbar_geturlp(url)
{
	if  ((typeof(url)=="undefined")||(url=='')) url = window.location.href;
	try {
		var urlstring = url.replace ('http://','').replace ('https://','').split('/');
	 } catch (e) {
		return false;
	 }
	 return urlstring;
}

function cbar_hashCode (s){
  return s.split("").reduce(function(a,b){a=((a<<5)-a)+b.charCodeAt(0);return a&a},0);
}

function cbar_create_stylesheet (id) {
	// remove stylesheet
	var sheet = document.getElementById(id);
	if (sheet !=null){
		sheet.disabled = true;
		sheet.parentNode.removeChild(sheet);
	}

	var style = document.createElement("style");
	style.setAttribute('id',id);
	style.appendChild(document.createTextNode(""));		// WebKit hack :(
	document.head.appendChild(style);
	return style.sheet;
}

function cbar_add_css (sheet, selector, rules, index) {

	if(typeof index=='undefined')index=0;
	try
	{
		if(sheet.insertRule) {
			sheet.insertRule(selector + "{" + rules + "}");
		}
		else {
			sheet.addRule(selector, rules);
		}
	}
	catch(e){if(window.console) console.log('Bari: Failed to add CSS');}
}

function cbar_insert_html (ele_or_selector, position, html) {
	if (typeof ele_or_selector =='string'){
		var ele = cbar_Sizzle(ele_or_selector);
	} else ele = ele_or_selector;

	if (ele.length > 0) ele=ele[0];
	if (typeof ele =='object')	ele.insertAdjacentHTML(position, html);
}



function cbar_em_com(com){
		var str='';
		if (cbar_ipuid_get) str+="&ipuidget=true";
		if (cbar_ipuid_save) str+="&ipuidsave=true";
		loadjscssfile (cbar_dynamic_url+cbar_datajs+'?sid='+cbar_sid+'&uid='+cbar_uid+str+'&ec='+( com?'1':'0' )+cbar_abt_str+'&ts='+Math.ceil(10000*Math.random()),'js');
}

function cbar_em_optout(opt, optionalemail){
		var str='';
		if (cbar_ipuid_get) str+="&ipuidget=true";
		if (cbar_ipuid_save) str+="&ipuidsave=true";
		loadjscssfile (cbar_dynamic_url+cbar_datajs+'?a=opt&sid='+cbar_sid+'&uid='+cbar_uid+str+'&opt='+( opt?'1':'0' )+cbar_abt_str+'&optionalemail='+encodeURIComponent(optionalemail)+'&ts='+Math.ceil(10000*Math.random()),'js');
}

// called from input box change event or directly
function cbar_em_change (e) {
	var value='';

	if (typeof window.cbar_globals['block_email_capture'] != 'undefined') return;

	if (typeof  e =='string') value=e;
	else {
		// from event
		var targ;
		if (!e) var e = window.event;
		if (e.target) targ = e.target;
		else if (e.srcElement) targ = e.srcElement;
		if (targ.nodeType == 3) targ = targ.parentNode; //safari

		if (typeof targ.value =='string') value=targ.value;
		else if (typeof  this.value == 'string') value= this.value;
		else return;
	}

	if (cbar_e_com) e_com_str='&e_com=true'; else e_com_str='';

	if (value !== cbar_e_last) {
		if  (value.match (/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/gi) !==null) {
			loadjscssfile (cbar_dynamic_url+cbar_datajs+'?sid='+cbar_sid+'&uid='+cbar_uid+e_com_str+'&e='+encodeURIComponent(value)+cbar_abt_str+"&ts="+Math.ceil(10000*Math.random()),'js');
		}
	}

	cbar_e_last= value;

}

function cbar_em_listen (input_element){
	cbar_listen('blur', input_element , cbar_em_change );
	cbar_listen('keyup', input_element , cbar_em_change );
	setTimeout(function (){if(input_element.value!='')cbar_em_change(input_element.value);},1000);
}


function cbar_optin_send(data_type, value, comment){
	if (typeof window.cbar_globals['block_email_capture'] != 'undefined') return;
	if (typeof window.cbar_globals['optin_wait']=='undefined') window.cbar_globals['optin_wait']=0;

	if (window.cbar_globals['optin_wait']>0) {
		setTimeout(function() { cbar_optin_send(data_type, value, comment)}, 300);
		return;
	}

	window.cbar_globals['optin_wait']++; // will be -- from the script output
	loadjscssfile (cbar_dynamic_url+cbar_datajs+'?a=optinout&sid='+cbar_sid+'&uid='+cbar_uid+'&dt='+data_type+'&v='+ Boolean(value)+'&co='+encodeURIComponent(comment)+'&ts='+Math.ceil(10000*Math.random()),'js')
	setTimeout(function() { cbar_em_check_sending(false)}, 800);
}

// data_type - general_optin, gdpr_optin, triggered_optin, marketing_optin, cookie_optin
function cbar_optin_listen_checkbox (data_type, element, comment){
	cbar_listen('click', element , function (e){ cbar_optin_send (data_type, e.target.checked, comment)} );
}

function cbar_optin_listen_radio (data_type, yes_element, no_element, comment){
	cbar_listen('change', yes_element , function (e){ cbar_optin_send (data_type, true, comment)} );
	cbar_listen('change', no_element , function (e){ cbar_optin_send (data_type, false, '')} );
}

function cbar_optin_listen_cookie (data_type, cookie_name, cookie_values){
	setInterval(function() {
		var val=cbar_readCookie(cookie_name);
		var prevval= cbar_readStatic(cookie_name);
		if (val==null) return;
		if (val != prevval){
			cbar_writeStatic(cookie_name,val);
			if (cbar_in_array(val, cookie_values))
				cbar_optin_send (data_type, true, 'cookie '+cookie_name+' value:'+ val);
			else
				cbar_optin_send (data_type, false, 'cookie '+cookie_name+' exists but optin values not found');
		}
	}, 1000);
}

function cbar_optin_listen_input (type , input_element, required_and, required_or, comment){
	window.cbar_globals[type+'_required_and'] = required_and; window.cbar_globals[type+'_required_or'] = required_or; window.cbar_globals[type+'_comment'] =comment;
	cbar_listen('blur', input_element , function (e) {window.cbar_globals[type]= input_element.value; if (typeof cbar_optin_carry_email !='undefined' && cbar_optin_carry_email) cbar_createCookie('cbar_'+type ,input_element.value, 10/(24*60)); cbar_em_check_sending(false);} );
	cbar_listen('keyup', input_element ,function (e) {window.cbar_globals[type]= input_element.value; try {clearTimeout(window.cbar_globals['timer'])} catch(e){return null;}; window.cbar_globals['timer'] = setTimeout(function(){ cbar_em_check_sending(false);},500);} );
}


function cbar_optin_listen_submit (submit_button){
	window.cbar_globals['submit_required']= true;
	cbar_listen('mousedown', submit_button ,function (e) {  cbar_em_check_sending(true);} );
}

function cbar_em_check_sending (submit_click){

	if ((typeof window.cbar_globals['submit_required'] != 'undefined') && (!submit_click)) return;
	if (typeof window.cbar_globals['block_email_capture'] != 'undefined') return;

	if (window.cbar_globals['optin_wait']>0) {
		setTimeout(function() { cbar_em_check_sending(submit_click)}, 300);
		return;
	}
	['em','ph'].map(function (dtype){
		if (typeof window.cbar_globals[dtype+'_required_and'] !='undefined') {
			for (var i=0; i< window.cbar_globals[dtype+'_required_and'].length; i++) if (typeof window.cbar_globals[window.cbar_globals[dtype+'_required_and'][i]] == 'undefined'  || window.cbar_globals[window.cbar_globals[dtype+'_required_and'][i]]!=true) return;

			var passed=(window.cbar_globals[dtype+'_required_or'].length==0);
			for (var i=0; i< window.cbar_globals[dtype+'_required_or'].length; i++)
				if (typeof window.cbar_globals[window.cbar_globals[dtype+'_required_or'][i]] != 'undefined'  && window.cbar_globals[window.cbar_globals[dtype+'_required_or'][i]]==true) passed=true;
			if (!passed) return;

			if (typeof cbar_optin_carry_email !='undefined' && cbar_optin_carry_email && typeof window.cbar_globals[dtype] =='undefined') window.cbar_globals[dtype]=cbar_readCookie('cbar_'+dtype);

			if  (dtype=='em' && typeof window.cbar_globals['em'] !='undefined' && window.cbar_globals['em']!=null && window.cbar_globals['em'].match (/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/gi) !==null)
				loadjscssfile (cbar_dynamic_url+cbar_datajs+'?sid='+cbar_sid+'&uid='+cbar_uid+'&e='+encodeURIComponent(window.cbar_globals['em'])+"&co="+encodeURIComponent(window.cbar_globals['em_comment'])+"&ts="+Math.ceil(10000*Math.random()),'js');

			if  (dtype=='ph' && typeof window.cbar_globals['ph'] !='undefined' && window.cbar_globals['ph']!=null)
				loadjscssfile (cbar_dynamic_url+cbar_datajs+'?sid='+cbar_sid+'&uid='+cbar_uid+'&ph='+encodeURIComponent(window.cbar_globals['ph'])+"&co="+encodeURIComponent(window.cbar_globals['ph_comment'])+"&ts="+Math.ceil(10000*Math.random()),'js');
		}

	});
}

window.cbar_em_change_g=cbar_em_change;

function cbar_e_checkbox_change(){
	if ((typeof event !='undefined') &&(typeof event.srcElement !='undefined')) {
		cbar_em_com (event.srcElement.checked);
	} else {
		if (this.checked) cbar_em_com( true); else cbar_em_com(false);
	}
}

function cbar_waitforelement (css3_selector, function_to_run){

	var timer=window.setInterval(function(){
		var elements=cbar_Sizzle (css3_selector);
		if (elements.length) {
			window.clearInterval(timer);
			if (typeof function_to_run == "function")
				function_to_run (elements);
		}
	},500);
}

function cbar_monitorelement (element_name, function_get_value, function_to_run){

	var timer=window.setInterval(function(){

		var val = function_get_value();
		if (typeof val=='undefined' || val==null || val==false) return;
		var lastval= cbar_readCookie (element_name);
		if (lastval==val) return; // no change

		cbar_createCookie(element_name, val,0);
		if (typeof window.countupdates == 'undefined') window.countupdates=0;
		if (window.countupdates++ > 5) return; // limit potential pounding

		function_to_run (val);

	},500);
}

function cbar_monitorelement_inpage (element_name, function_get_value, function_to_run){

	var timer=window.setInterval(function(){
		if (typeof window.countupdates == 'undefined') window.countupdates=0;


		var val = function_get_value();
		if (typeof val=='undefined' || val==null || val==false) return;

		if (typeof window["cbar_monitor_"+element_name] != 'undefined') {
			if (window["cbar_monitor_"+element_name] ==val) return; // no change

			if (window.countupdates++ > 10) return; // limit potential pounding

			function_to_run (val); // change
		}

		window['cbar_monitor_'+element_name] = val;

	},500);
}


function cbar_log_event(msg){
	cbar_uid=cbar_readCookie('cbar_uid');
	loadjscssfile (cbar_dynamic_url+'logger.js.php?a=lg&sid='+cbar_sid+'&uid='+cbar_uid+'&lo='+encodeURIComponent(msg)+cbar_abt_str+'&ts='+Math.ceil(10000*Math.random()),'js');
}

function cbar_log_error(msg){
	cbar_uid=cbar_readCookie('cbar_uid');
	loadjscssfile (cbar_dynamic_url+'logger.js.php?sid='+cbar_sid+'&uid='+cbar_uid+'&elo='+encodeURIComponent(msg)+cbar_abt_str+'&url='+encodeURIComponent( window.location.href),'js');
}

function cbar_log_console(msg){
	if (cbar_debug==0) return;
	window.console && console.log(msg);
}

function cbar_debug_log (url){
	if (cbar_debug <2) return;

	varsstr =url.split("?");
	vars = varsstr[1].split("&");

	for (var i=0; i< vars.length; i++) cbar_log_console(vars[i]);
}

function cbar_analysis_track(msg){
	if (typeof msg=='undefined' || (msg==null) || (msg=="")) return;
	var tmp_str='';
	cbar_uid=cbar_readCookie('cbar_uid');
	//if (cbar_ba)  tmp_str +="&ba=1";
	loadjscssfile (cbar_dynamic_url+cbar_datajs+'?a=trke&sid='+cbar_sid+'&uid='+cbar_uid+tmp_str+'&e='+encodeURIComponent(msg)+cbar_abt_str+'&ts='+Math.ceil(10000*Math.random()),'js');
}

function cbar_leave_site_callback(evt){

	if ( window.cbar_mouseout==false || ((window.cbar_back_button==true)  &&  (cbar_sess_pv !=1)) )  return;

	for (ind=0; ind< window.cbar_delayed_action.length; ind++){

		if (window.cbar_delayed_action[ind].type!='tab_close') continue;

		if ((window.cbar_delayed_action[ind].rule_id >0) && (cbar_readCookie('cbar_pc_'+ window.cbar_delayed_action[ind].rule_id ) == '1')) continue;

		if (typeof window['cbar_rule_suppressed_'+window.cbar_delayed_action[ind].rule_id] !='undefined') return; // dont execute if suppressed from data.js

		//if ((typeof window.cbar_user_activity_time =='undefined' ) ||  (Math.round(cbar_date.getTime()/1000) - window.cbar_user_activity_time) >3) {
			// #8763
			if ((cbar_BrowserDetect.browser=='Chrome') || (cbar_BrowserDetect.browser=="Safari"))
				setTimeout (function () {  eval (decodeURIComponent(window.cbar_delayed_action[ind].func_eval_enc.replace (/\+/g, ' ')));},100);
			else
				eval (decodeURIComponent(window.cbar_delayed_action[ind].func_eval_enc.replace (/\+/g, ' ')));

				cbar_run_after_rules_js (window.cbar_delayed_action[ind].rule_id);
				cbar_report_delayed_action (window.cbar_delayed_action[ind].rule_id);

			return " "+decodeURIComponent(window.cbar_delayed_action[ind].data.replace (/\+/g, ' '));
		//}
	}
	return ;
}


// cbar_delayed_action_set
// type='tab_close' - when visitor closes page (data is message to show)
// 'delayed' - after delay - data is delay timing
// 'mouse_exit' - mouse exit from page
// 'by_code' - action will be run by javascript code (cbar_run_delayed_action(rule_id)) - to launch popup from banner by code for example
function cbar_delayed_action_set (rule_id, type, data, func_eval_enc ){

	if (cbar_in_array(rule_id, cbar_suppress_rules)) return; // allow suppressing by js action

	if (typeof  window.cbar_delayed_action=='undefined') window.cbar_delayed_action=[];
	for (var i=0; i< window.cbar_delayed_action.length; i++) if (window.cbar_delayed_action[i].rule_id==rule_id) return;

	window.cbar_delayed_action[window.cbar_delayed_action.length]={rule_id:rule_id, type:type, data:data, func_eval_enc:func_eval_enc }; //function to run when visitor leaves site (encoded)

	if (type=='tab_close'){
		cbar_init_mouse_exit_detect(); // track mouse status and back button (window.cbar_mouseout window.cbar_back_button)
		window.onbeforeunload = cbar_leave_site_callback;
	}
	if (type=='mouse_exit'){

		cbar_init_mouse_exit_detect();
		cbar_listen ('cbar_mouse_exit', document,
			function (e){
				if ((e.data.back_button==false) || (cbar_sess_pv ==1)  ){
					if (typeof window.cbar_block_mouse_exit =='undefined') // allows blocking
						cbar_run_delayed_action(rule_id);
				}
			}
		);

	}
	if (type=='delayed'){
		setTimeout (function () { cbar_run_delayed_action(rule_id)}, 1000* parseInt(data));
	}
}

function cbar_createfunc (funcname,param){
    return function() { funcname(param) };
}

// run_delayed_action
function cbar_run_delayed_action (rule_id){

	for (ind=0; ind< window.cbar_delayed_action.length; ind++){
		if (window.cbar_delayed_action[ind].rule_id == rule_id) {
			if (typeof window.cbar_delayed_action[ind].runned =='undefined' || window.cbar_delayed_action[ind].type=='by_code'){
				window.cbar_delayed_action[ind].runned=true;
				if (cbar_readCookie('cbar_pc_'+rule_id ) == '1') continue;

				if (typeof window['cbar_rule_suppressed_'+rule_id] =='undefined')  {  // execute if not suppressed by data.js
					eval (decodeURIComponent(window.cbar_delayed_action[ind].func_eval_enc.replace (/\+/g, ' ')));
					cbar_run_after_rules_js (rule_id);
					}

				cbar_report_delayed_action (rule_id);

			}
		}
	}
}

function cbar_launch_popup (rule_id){
	eval(eval ('window.launch_popup_data_'+rule_id));
}



function cbar_div_popup_show (rule_id, popup_width, popup_height, popup_top, img_url, html, img_is_background, img_width, img_height , token, replace_encoded, embed_data, popup_close, border, bordercol, backg, darken, corner, close_butt_pos, close_butt_id, close_butt_size, close_butt_offset){//(called from data.js)


	if (typeof img_is_background != 'boolean') return; // remove this. only used temporarily to suppress old cached cbar.js until changes are cached.

	if (cbar_in_array(rule_id, cbar_suppress_rules)) return; // allow suppressing by js action

	// dont show popup if user closed it (and not preview from control panel) (rule_id=0)
	if ((cbar_preview_rules=='') && (cbar_readCookie('cbar_pc_'+ rule_id ) == '1')) return;


	if (img_is_background) {
		popup_width=img_width+'px';
		popup_height=img_height+'px';
	}

	cbar_popup = window.document.createElement('div');

	cbar_popup.id= 'cbar_popup_'+rule_id;
	cbar_popup.className="cbar_popup";
	cbar_popup.setAttribute("rule_id", rule_id);
	var clientheight =  document.compatMode=='CSS1Compat' ? document.documentElement.clientHeight: document.body.clientHeight;

	if (popup_width =='')	popup_width='auto';
	if (popup_width==parseInt(popup_width))  popup_width=popup_width+'px'
	cbar_popup.style.width= popup_width;

	cbar_popup.popup_close=popup_close;

	if (popup_height =='')	popup_height='auto';
	if (popup_height==parseInt(popup_height))  popup_height=popup_height+'px'
	cbar_popup.style.height= popup_height;

	if (popup_top =='')	popup_top='100px';
	if (popup_top==parseInt(popup_top))  popup_top=popup_top+'px'
	cbar_popup.style.top= popup_top;

	//cbar_popup.style.top= "100px";


	if (img_is_background)
		cbar_popup.style.background="transparent url('"+cbar_userimages+img_url+"') no-repeat left top";
	else
		cbar_popup.style.background= backg;

	cbar_popup.style.boxSizing = "content-box";
	cbar_popup.style.border= border+"px solid "+bordercol;
	cbar_popup.style.zIndex="500000" ;

	if (corner >0) {
		cbar_popup.style.borderRadius = corner+'px';
		cbar_popup.style.MozBorderRadius = corner+'px';
		cbar_popup.style.WebkitBorderRadius = corner+'px';
	}
        cbar_popup_html="";
				var css_position='';
	if (close_butt_pos !='') {

		if (close_butt_pos.search('t')>-1) {css_position+="top:1px;"; css_position+="bottom:auto;"; }
		if (close_butt_pos.search('b')>-1) {css_position+="top:auto;"; css_position+="bottom:1px;"; }
		if (close_butt_pos.search('l')>-1) {css_position+="left:1px;"; css_position+="right:auto;";}
		if (close_butt_pos.search('r')>-1) {css_position+="left:auto;"; css_position+="right:1px;";}
        }else{
            css_position+='top:-15px;';
            css_position+='right:-15px;';

        }
  if((close_butt_id>-1)&&(close_butt_size>-1))
		var close_icon=cbar_static_url+"img/close_buttons/close"+close_butt_id+"_"+close_butt_size+".png";
	else
		var close_icon=cbar_static_url+"img/common/dialog_close.png";

	cbar_popup_html+="<img src='"+close_icon+"' class='cbar_close_button' style='position:absolute;cursor:pointer;cursor:hand; border:none;"+css_position+"margin:"+close_butt_offset+"px;' onclick=\" cbar_close_popup ("+rule_id+"); \" />";

	if (img_url !='') img_html= "<img src='"+cbar_userimages+img_url+"' style='border:none' />";
	else img_html='';

	if (img_is_background) img_html='';

	cbar_popup_html+="<div style='width:auto; margin:0 0 0 0; height:auto;  background:transparent; display:block; ' >"+img_html+decodeURIComponent(html.replace (/\+/g, ' '));


	if (token!=''){
		// dynamic token. used in 'Get Coupon button' switch button token with html
		cbar_popup_html=cbar_popup_html.replace(token,decodeURIComponent(replace_encoded.replace (/\+/g, ' ')));
	}

	// embed external forms in the popup
	if  (embed_data !== false){
		if (embed_data.scrollbars=='on') noscroll=''; else noscroll="scrolling='no'";
		embed_html="<iframe src='"+embed_data.url+"' width='"+embed_data.width+"' height='"+embed_data.height+"'   frameborder='0' "+noscroll+"   allowTransparency='true'>your browser does not support iframes</iframe>";
		cbar_popup_html=cbar_popup_html.replace('%embed_form%',embed_html);
	}

	cbar_popup_html+=" </div>";

			cbar_popup_html+=" <div class='poweredbybarilliance' style='display:block; position:absolute;  bottom:5px; top:auto; right:5px;  font-size:8px;  cursor:pointer;cursor:hand;' ><a style='color:gray; margin-right:10px;text-align:right;' href='http://www.barilliance.com'>powered by Barilliance</a></div>";
	
	cbar_popup.innerHTML=cbar_popup_html;
	cbar_popup.style.display= "block";
	cbar_popup.style.visibility='visible';

	// reset inherited CSS
	loadjscssfile (cbar_static_url+'popup.css','css');
	window.document.body.appendChild(cbar_popup);

	// darken under popup
	if (darken >0){
		cbar_underlay = window.document.createElement('div');
		cbar_underlay.id= 'cbar_underlay_'+rule_id;
		cbar_underlay.className += " cbar_underlay";
		cbar_underlay.style.display= "block";
		cbar_underlay.style.position= "fixed";
		cbar_underlay.style.background= "none repeat scroll 0% 0% rgb(17, 17, 17)";
		cbar_underlay.style.top='0px';
		cbar_underlay.style.left='0px';
		cbar_underlay.style.opacity=darken;
		cbar_underlay.style.filter = "alpha(opacity="+ parseInt( darken*100) +")"; // IE7,8
		cbar_underlay.style.zIndex="490000";
		cbar_underlay.style.height=clientheight+"px";
		cbar_underlay.onclick =function(){eval ("cbar_close_popup ("+rule_id+");"); return false;};
		var clientwidth =  document.compatMode=='CSS1Compat' ? document.documentElement.clientWidth: document.body.clientWidth;
		cbar_underlay.style.width=clientwidth+"px";
		window.document.body.appendChild(cbar_underlay);

	}

	cbar_popups.push (cbar_popup); // add this popup to array
	cbar_popups_position();

	cbar_listen ("scroll", window, cbar_popup_scroll_event);
	cbar_listen ("resize", window, cbar_popups_position);

}

function draw_close_button(rule_id, rule_type, closebtn){
	var css_position='';
		if (closebtn.pos !='') {

			if (closebtn.pos.search('t')>-1) {css_position+="top:1px;"; css_position+="bottom:auto;"; }
			if (closebtn.pos.search('b')>-1) {css_position+="top:auto;"; css_position+="bottom:1px;"; }
			if (closebtn.pos.search('l')>-1) {css_position+="left:1px;"; css_position+="right:auto;";}
			if (closebtn.pos.search('r')>-1) {css_position+="left:auto;"; css_position+="right:1px;";}
		}else{
				css_position+='top:-15px;';
				css_position+='right:-15px;';
		}
		if((closebtn.icon>-1)&&(closebtn.size>-1))
			var close_icon=cbar_static_url+"img/close_buttons/close"+closebtn.icon+"_"+closebtn.size+".png";
		else
			var close_icon=cbar_static_url+"img/common/dialog_close.png";

		return "<img src='"+close_icon+"' class='cbar_close_button' style='z-index:1;position:absolute;cursor:pointer;cursor:hand; border:none;"+css_position+"margin:"+closebtn.offset+"px;' onclick=\" cbar_close_popup2 ("+rule_id+",'"+rule_type+"'); \" />";
}

function cbar_POP2_show (rule_id, args){
	if (cbar_in_array(rule_id, cbar_suppress_rules)) return; // allow suppressing by js action
		
	
	if ((cbar_preview_rules=='') && (cbar_readCookie('cbar_pc_'+ rule_id ) == '1')) return;
	var cbar_popup = window.document.createElement('div');	
		cbar_popup.id= 'cbar_'+args.type+'_'+rule_id;
		cbar_popup.className='cbar_popup';
		cbar_popup.setAttribute("rule_id", rule_id);
	
	var iframe= window.document.createElement('iframe');
		iframe.style.width='100%';
		iframe.style.height='100%';
		iframe.style.border=0;
		iframe.id='cbar_iframe_'+args.type+'_'+rule_id;
		iframe.scrolling="no";
	var inner_div=window.document.createElement('div');
		inner_div.appendChild(iframe);
	
	cbar_popup.style.display= "block";
	cbar_popup.style.position= "fixed";
	cbar_popup.style.zIndex=2147483640;
	if(args.type=='OVERLAY'){
		cbar_popup.style.display="table";
		inner_div.style.display="table-cell";
		inner_div.style.verticalAlign='middle';
	}
	if(typeof args.closebtn != 'undefined')
		cbar_popup.innerHTML+=draw_close_button(rule_id, args.type, args.closebtn);
	cbar_popup.appendChild(inner_div);

	cbar_popup.popup_close=args.popup_close;
	window.document.body.appendChild(cbar_popup);
	var html=decodeURIComponent(args.template.replace (/\+/g, ' '));	
	html=html.replace(new RegExp('%close_button_url%', 'g'),"javascript:(function(event){window.parent.cbar_close_popup2 ('"+rule_id+"','"+args.type+"'); })(); \" target=\"_self");
	
	iframeDoc=iframe.contentWindow.document;
	iframeDoc.open();
	iframeDoc.write(html);
	iframeDoc.close();
	iframe.args=args;
	if((window.location.href.indexOf('cbar_iframe_preview')==-1)||(window.innerWidth>500)){
		var styles=cbar_Sizzle('style',iframeDoc.head);
		for(var s in styles){
			if(styles[s].innerText.indexOf('@media')>-1)
				styles[s].innerText=styles[s].innerText.replace('@media (max-width:','@media only screen and (max-device-width:');
		}
	}
	iframeDoc.onload_function=function (){
		arg=iframe.args;
		var frame_doc=cbar_Sizzle('#cbar_iframe_'+arg.type+'_'+rule_id)[0].contentWindow.document;
		
		var tlinks=cbar_Sizzle('a:not([target="_blank"])', frame_doc);
		for(var i in tlinks)
			if(tlinks[i].href.substr(0,11)!='javascript:')
				tlinks[i].target='_parent';
		
		var iframe_body_style=window.getComputedStyle(frame_doc.body);
		if(arg.type=='OVERLAY'){
			iframe.style.width=iframe_body_style.width;
			iframe.style.height=iframe_body_style.height;
		}else if(arg.type=='MSG2'){
			cbar_popup.style.height=iframe.style.height=cbar_Sizzle('.nl-container',frame_doc.body)[0].getClientRects()[0].height+'px';
		}else{
			cbar_popup.style.width=iframe.style.width=window.getComputedStyle(cbar_Sizzle('.block-grid',frame_doc.body)[0]).width;
			cbar_popup.style.height=iframe.style.height=window.getComputedStyle(frame_doc.body).height;
		}
				
		frame_doc.css_from='';
		frame_doc.css_to='';
		frame_doc.transe_from=[0,0];
		frame_doc.transe_to=[0,0];
		var css_rules={'vpos':{'t':["top:0;"],
							   'b':["top:100%;",'-100%'],
							   'c':["top:50%;",'-50%']},
						'hpos':{
								'l':["left:0;"],
								'c':["left:50%;",'-50%'],
								'r':["left:100%;",'-100%'],
							  },
						 'effect':{'sl':['left: 0;','-100%'],
								   'sr':['left: 100%;'],
								   'st':['top: 0;', '-100%'],
								   'sb':['top: 100%;'],
								   'fi':['opacity: 0;'],
								   },	  
						};
	
			frame_doc.css_from+=css_rules.hpos[arg.hpos][0];
			frame_doc.css_to+=css_rules.hpos[arg.hpos][0];
			if(typeof css_rules.vpos[arg.vpos][1]!='undefined')
					frame_doc.transe_from[1]=frame_doc.transe_to[1]=css_rules.vpos[arg.vpos][1];
			
			frame_doc.css_from+=css_rules.vpos[arg.vpos][0];
			frame_doc.css_to+=css_rules.vpos[arg.vpos][0];
			if(typeof css_rules.hpos[arg.hpos][1]!='undefined')
				frame_doc.transe_from[0]=frame_doc.transe_to[0]=css_rules.hpos[arg.hpos][1];
		
		if(typeof css_rules.effect[arg.effect]!='undefined')
		{
			frame_doc.css_from+=css_rules.effect[arg.effect][0];
			if(['sl','sr'].indexOf(arg.effect)>-1){
				frame_doc.css_from+=css_rules.vpos[arg.vpos][0];
				frame_doc.transe_from[0]=css_rules.effect[arg.effect][1];
			}else if(['st','sb'].indexOf(arg.effect)>-1)
			{
				frame_doc.transe_from[1]=css_rules.effect[arg.effect][1];
				
				if(arg.effect=='st')
					frame_doc.css_from+=css_rules.hpos[arg.hpos][0];
			}
		}
		
			frame_doc.css_from+='-webkit-transform:translate('+frame_doc.transe_from[0]+','+frame_doc.transe_from[1]+');transform:translate('+frame_doc.transe_from[0]+','+frame_doc.transe_from[1]+');';
		
			frame_doc.css_to+='-webkit-transform:translate('+frame_doc.transe_to[0]+','+frame_doc.transe_to[1]+');transform:translate('+frame_doc.transe_to[0]+','+frame_doc.transe_to[1]+');';
			if(arg.effect=='fi'){frame_doc.css_to+='opacity:1';}
			
			if(typeof cbar_Sizzle('#cbar_style_'+rule_id)[0]=='undefined')cbar_create_stylesheet('cbar_style_'+rule_id);
			cbar_Sizzle('#cbar_style_'+rule_id)[0].innerHTML+=' #cbar_'+arg.type+'_'+rule_id+'{-webkit-animation: cbar_anim'+arg.type+rule_id+' linear 1s;'+frame_doc.css_to+'} @-webkit-keyframes cbar_anim'+arg.type+rule_id+'{from{'+frame_doc.css_from+'}}';
			
			if((arg.type=='MSG2')&&(arg.location=='toppush')){
			if(typeof window.execute_on_close=='undefined')window.execute_on_close={};
				window.execute_on_close[rule_id+arg.type]=function (){ window.document.body.setAttribute('style', window.document.body.getAttribute('oldStyle'));};
				window.document.body.oldStyle=window.document.body.style.cssText;
				window.document.body.style.transitionProperty='margin-top';
				window.document.body.style.transitionDuration='1s';
				window.document.body.style.transitionDelay='0.3s';
				window.document.body.style.marginTop=window.getComputedStyle(cbar_popup).height;
				
				setTimeout(function (){ window.document.body.style.transition=''; },1000);
				
			}	
	};
	
	var timgs=cbar_Sizzle('img', iframeDoc);
	var imgsLoading=timgs.length;
	if(cbar_BrowserDetect.browser=='Explorer')imgsLoading=0;
	if(imgsLoading>0){
		
		for(var i in timgs){
			
			cbar_listen('load', timgs[i], function (){
				imgsLoading--;
				if(imgsLoading==0){
					if(['Explorer','Edge','Safari'].indexOf(cbar_BrowserDetect.browser)>-1)setTimeout(iframeDoc.onload_function, 100);
					else iframeDoc.body.onload=iframeDoc.onload_function;
				}
			});
		}
	}else{
		if(['Explorer','Edge','Safari'].indexOf(cbar_BrowserDetect.browser)>-1) setTimeout(iframeDoc.onload_function, 100);
		else iframeDoc.body.onload=iframeDoc.onload_function;
	}	

	if(args.type=='MSG2')
	{
		cbar_popup.style.width='100%';
	}else if(args.type=='OVERLAY'){
		cbar_popup.style.width='100%';
		cbar_popup.style.height='100%';
		cbar_popup.style.backgroundColor=window.getComputedStyle(cbar_Sizzle('.nl-container',iframeDoc.body)[0]).backgroundColor;
	}else{
		cbar_popup.style.width='100%';
		cbar_popup.style.height='100%';	
	}
		
	
	
	if(typeof args.countdown_timer != 'undefined')
		cbar_countdown_timer_inline(rule_id, args.type, args.countdown_timer);
	
	if(args.autohide_secs>0)
	{
		setTimeout(function (){
			window.document.body.removeChild(cbar_popup);
			if((args.type=='MSG2')&&(args.location=='toppush'))
				 window.document.body.setAttribute('style', window.document.body.getAttribute('oldStyle'));
		},(1000*args.autohide_secs));
	}


}


function cbar_close_popup( rule_id){

	if (typeof rule_id=='undefined') { // close currently open if no rule_id
		var popups =  document.getElementsByClassName("cbar_popup");
		if (popups.length==0) return;
		var rule_id = popups[0].id.replace ('cbar_popup_','');
	}


	var popup = document.getElementById('cbar_popup_'+rule_id);
	if (popup == null) return;

	var old = (popup.parentNode).removeChild(popup);

	var elem = document.getElementById('cbar_underlay_'+rule_id);
	if (elem!=null) var old = (elem.parentNode).removeChild(elem);

	// close popup cookie
	if ((typeof popup.popup_close =='undefined') || isNaN(parseInt(popup.popup_close)) ) popup.popup_close =365;
	if ((popup.popup_close != -1) && (cbar_preview_rules =='')) cbar_createCookie('cbar_pc_'+rule_id ,1, parseInt(popup.popup_close));

}

function cbar_close_popup2( rule_id, rule_type){
	/*if (typeof rule_id=='undefined') { // close currently open if no rule_id
		var popups =  document.getElementsByClassName("cbar_popup");
		if (popups.length==0) return;
		var rule_id = popups[0].id.replace ('cbar_popup_','');
	}*/

	var popup = cbar_Sizzle('#cbar_'+rule_type+'_'+rule_id)[0];
	if (popup == null) return;

	var old = (popup.parentNode).removeChild(popup);
/*
	var elem = cbar_Sizzle('#cbar_underlay_'+rule_id+'[rule_type='+type+']')[0];
	if (elem!=null) var old = (elem.parentNode).removeChild(elem);
*/
	// close popup cookie
	if ((typeof popup.popup_close =='undefined') || isNaN(parseInt(popup.popup_close)) ) popup.popup_close =365;
	if ((popup.popup_close != -1) && (cbar_preview_rules =='')) cbar_createCookie('cbar_pc_'+rule_id ,1, parseInt(popup.popup_close));

	//execute after close
	if((typeof window.execute_on_close!='undefined')&&(typeof window.execute_on_close[rule_id+rule_type]!='undefined'))
		window.execute_on_close[rule_id+rule_type]();
}

function cbar_close_offerzone( rule_id, days){
	var oz = cbar_Sizzle("div[rule_id='"+rule_id+"']");
	if (oz.length) var old = (oz[0].parentNode).removeChild(oz[0]);
	if (cbar_preview_rules=='') cbar_createCookie('cbar_oz_'+rule_id ,1, parseInt(days));
}


function cbar_iframe_popup_show (rule_id, popup_url, popup_width , popup_height ,popup_top, img_w, img_h, img_url, popup_close, close_butt_pos, close_butt_id, close_butt_size, close_butt_offset){//(called from data.js)

	if (cbar_in_array(rule_id, cbar_suppress_rules)) return; // allow suppressing by js action

	// dont show popup if user closed it (and not preview from control panel) (rule_id=0)
	if ((cbar_preview_rules=='') && (cbar_readCookie('cbar_pc_'+ rule_id ) == '1')) return;

	cbar_popup = window.document.createElement('div');
	cbar_popup.id= 'cbar_popup_'+rule_id;
	cbar_popup.className="cbar_popup";

	var clientheight =  document.compatMode=='CSS1Compat' ? document.documentElement.clientHeight: document.body.clientHeight;

	if (popup_width =='')	popup_width=iframe_width='auto';
	if (popup_width !='auto') {iframe_width=(popup_width-8)+"px"; popup_width+="px";}
	cbar_popup.style.width= popup_width;

	cbar_popup.popup_close=popup_close;

	if (popup_height =='')	popup_height=iframe_height='auto';
	if (img_h=='') img_h=0;
	if (popup_height !='auto') {iframe_height=(popup_height-parseInt(img_h)-8)+"px"; popup_height+="px";}
	cbar_popup.style.height= popup_height;

	if (popup_top =='')	popup_top='100px';
	if (popup_top==parseInt(popup_top))  popup_top=popup_top+'px'
	cbar_popup.style.top= popup_top;

	//cbar_popup.style.top= "100px";



	cbar_popup.style.background="white";
	cbar_popup.style.border="4px solid silver";
	cbar_popup.style.zIndex="600000" ;
	cbar_popup.setAttribute("rule_id", rule_id);
	cbar_popup.style.boxSizing = "content-box";

	if (img_url !='') img_html="<img src='"+ cbar_userimages+img_url+"' style='border:none' />";
	else img_html='';
        cbar_popup_html="";
		var css_position='';
	if (close_butt_pos !='') {

		if (close_butt_pos.search('t')>-1) {css_position+="top:1px;"; css_position+="bottom:auto;"; }
		if (close_butt_pos.search('b')>-1) {css_position+="top:auto;"; css_position+="bottom:1px;"; }
		if (close_butt_pos.search('l')>-1) {css_position+="left:1px;"; css_position+="right:auto;";}
		if (close_butt_pos.search('r')>-1) {css_position+="left:auto;"; css_position+="right:1px;";}
        }else{
             css_position+='top:-15px;';
             css_position+='right:-15px;';

        }
	if((close_butt_id>-1)&&(close_butt_size>-1))
		var close_butt=cbar_static_url+"img/close_buttons/close"+close_butt_id+"_"+close_butt_size+".png";
	else
		var close_butt=cbar_static_url+"img/common/dialog_close.png";

	cbar_popup_html+="<img src='"+close_butt+"' class='cbar_close_button'  style='position:absolute;cursor:pointer;cursor:hand; border:none; "+css_position+"margin:"+close_butt_offset+"px;' onclick=\" cbar_close_popup ("+rule_id+"); \" />";


	cbar_popup_html+=img_html+
	"<iframe style=' margin:5px; ' src='"+popup_url+"'  width='"+iframe_width+"' height='"+iframe_height+"' frameborder='0'>your browser does not support frames</iframe> ";

			cbar_popup_html+="<a class='poweredbybarilliance' style='color:gray; position:absolute; font-size:9px; right:10px; bottom:10px;' href='http://www.barilliance.com'>powered by Barilliance</a>"
	
	cbar_popup.innerHTML=cbar_popup_html;
	cbar_popup.style.display= "block";
	cbar_popup.style.visibility='visible';
	window.document.body.appendChild(cbar_popup);

	cbar_popups.push (cbar_popup); // add this popup to array
	cbar_popups_position();

	cbar_listen ("scroll", window, cbar_popup_scroll_event);
	cbar_listen ("resize", window, cbar_popups_position);

}

function cbar_popup_scroll_event  () {// must be here for ie6
	if (cbar_pop_scrolltimeout >0) window.clearTimeout (cbar_pop_scrolltimeout);
	cbar_pop_scrolltimeout= window.setTimeout("cbar_popups_position()",300);
}

//  position all available popups
function cbar_popups_position () {
	var scrolltop = document.compatMode=="CSS1Compat" ? document.documentElement.scrollTop : document.body.scrollTop;
	var clientheight =  document.compatMode=='CSS1Compat' ? document.documentElement.clientHeight: document.body.clientHeight;
	var clientwidth =  document.compatMode=='CSS1Compat' ? document.documentElement.clientWidth: document.body.clientWidth;

	for (i=0; i < cbar_popups.length; i++){

		if (cbar_popups[i].getAttribute('dont_reposition')!==null) continue; // tender #2425

		if (cbar_PositionFixedSupported){
			cbar_popups[i].style.position= "fixed";
			width= cbar_popups[i].scrollWidth;
			cbar_popups[i].style.left= parseInt((clientwidth/2)-(width/2))+"px";

		} else { // no fixed position
			cbar_popups[i].style.position= "absolute";
			cbar_popups[i].style.top=parseInt(100+scrolltop)+"px";
			width= cbar_popups[i].scrollWidth;
			cbar_popups[i].style.left= parseInt((clientwidth/2)-(width/2))+"px";
		}
	}
	// underlay resize
	var underlays=cbar_Sizzle ('div.cbar_underlay');
	if (underlays.length)
		for(i=0; i<underlays.length; i++) {
			underlays[i].style.width=clientwidth+"px";
			underlays[i].style.height=clientheight+"px";
		}
}

// cbar_after_rules_js
// run non delayed rules if rule_id==0 or a delayed rule if rule_id >0
function cbar_run_after_rules_js ( rule_id ){
	if ( rule_id >0) { // delayed rule
		if ((typeof window.cbar_after_rules_js_delayed =='undefined') || (typeof window.cbar_after_rules_js_delayed[rule_id] =='undefined')) return;
		eval ( decodeURIComponent(window.cbar_after_rules_js_delayed[rule_id].replace (/\+/g, ' ')));
		return;
	}

	//run the 'run javascript' after rules action for all rules. it is executed last after all rules and recommendations finished.
	if (typeof window.cbar_after_rules_js =='undefined') return;
	for ( rule_id in window.cbar_after_rules_js) eval ( decodeURIComponent(window.cbar_after_rules_js[rule_id].replace (/\+/g, ' ')));

}


// Trust!
function cbar_trust_message (payload){

	var msg_data=JSON.parse(payload);

	var questionmark="<a class='cbar_trust_qm' style='float:right; font-size:80%; opacity:0.6;  cursor:pointer; cursor:hand;' onclick='cbar_trust_popup(); return false;'><img src='"+cbar_static_url+"img/common/information-outline.png'/></a>";
	if (cbar_wl) questionmark="";

	// embedded messages
	if (typeof msg_data.embed_pt != 'undefined') {

		for (var index in msg_data.message) {
			if (msg_data.message.hasOwnProperty(index)) {

				var ref_elements = cbar_Sizzle("[cbar_live_insert]");
				if (typeof ref_elements[index] == 'undefined') continue;

				op = ref_elements[index].getAttribute('cbar_live_insert');

				var msg = "<div class='cbar_trust' style='"+cbar_trust_outdiv_css+"'><span style='"+msg_data.embedcss+"'>"+msg_data.message[index]+questionmark+"</span></div>";

				if (op == 'append') ref_elements[index].insertAdjacentHTML('beforeend', msg);
				if (op == 'prepend') ref_elements[index].insertAdjacentHTML('afterbegin', msg);
				if (op == 'before') ref_elements[index].insertAdjacentHTML('beforebegin', msg);
				if (op == 'after') ref_elements[index].insertAdjacentHTML('afterend', msg);
			}
		}

		return;
	}


	// non embedded messages

	if  (typeof cbar_trust_message_show == 'function') {msg_data=cbar_trust_message_show (msg_data);}

	var v_margin= parseInt(msg_data.margin)*msg_data.count;
	for (var i=1; i< msg_data.count; i++) {
		bubble=cbar_Sizzle ("div#cbar_trust_"+msg_data.rule_id+"_"+i);
		if (bubble.length) v_margin+= bubble[0].scrollHeight;
	}

	var top='auto', bottom= 'auto', left='auto', right='auto', height='auto';
	var dynamic_css=' border: none; ';

	if (msg_data.type=='bar' ||  msg_data.type=='pbar') {

		if (msg_data.type=='pbar') 	msg_data.barpos='t';

		if (msg_data.barpos=='b') bottom = '0px';  else  top ='0px';

		if (msg_data.borderw > 0){
			dynamic_css+=' border-top: '+msg_data.borderw+'px solid '+msg_data.border+ '; ';
			if (msg_data.barpos=='t') dynamic_css=dynamic_css.replace('border-top','border-bottom');
		}

		if (msg_data.shadow > 0) {
			dynamic_css+=" box-shadow:"+msg_data.shadow+"px 0px "+msg_data.shadow+"px #888888; ";
			if (msg_data.barpos=='b') dynamic_css=dynamic_css.replace('box-shadow:','box-shadow:-');

		}

	} else if (msg_data.type=='side') {

		bottom= '200px';
		right= '-500px';
		//bubble.cbar_rightpos = msg_data.margin+msg_data.width;
		//right =bubble.cbar_rightpos+'px';


	} else {
		if (msg_data.pos[0] == 't') top = v_margin+'px';
		if (msg_data.pos[0] == 'b') bottom = v_margin+'px';
		if (msg_data.pos[1] == 'r') right = msg_data.margin+'px';
		if (msg_data.pos[1] == 'l') left = msg_data.margin+'px';
	}


	var div = document.createElement('div');

	if (msg_data.type=='bubble' || msg_data.type=='side') {
		if (msg_data.image =='')
			var content=msg_data.message[0]+questionmark;
		else
			var content="<span style='display:table-row'><span style='display:table-cell; padding:5px;'><img class='cbar_bubble_img' onclick='window.location.href = \""+decodeURIComponent(msg_data.url.replace (/\+/g, ' '))+"\"; return false;' style='max-width:"+parseInt(msg_data.width/4)+"px; max-height:"+parseInt(msg_data.width/4)+"px; width:auto; height:auto;' src='"+decodeURIComponent(msg_data.image.replace (/\+/g, ' '))+"'/></span><span style='display:table-cell; padding:5px; vertical-align:middle;'>"+msg_data.message[0]+questionmark+"</span></span>";

		div.innerHTML = "<div class='cbar_bubble cbar_trust' id='cbar_trust_"+msg_data.rule_id+"_"+msg_data.count+"' style='position:fixed; width:"+msg_data.width+"px; height:"+height+"; right:"+right+"; left:"+left+"; top:"+top+"; bottom:"+bottom+"; opacity:0.1; background:"+msg_data.bg+";   color:"+msg_data.txtcolor+"; border: "+msg_data.borderw+"px solid "+msg_data.border+"; border-radius:"+msg_data.round+"px; padding:5px; box-shadow: "+msg_data.shadow+"px "+msg_data.shadow+"px 10px #888888; text-align:"+msg_data.align+";  font:"+msg_data.font+"; z-index:2000000; "+msg_data.extracss+"'>"+content+"</div>";
	}
	else  // top bar
		div.innerHTML = "<div class='cbar_bubble cbar_trust' id='cbar_trust_"+msg_data.rule_id+"_"+msg_data.count+"' style=' position:fixed; width:100%; height:"+height+"; right:"+right+"; left:"+left+"; top:"+top+"; bottom:"+bottom+"; opacity:0.1; background:"+msg_data.bg+"; "+dynamic_css+"   color:"+msg_data.txtcolor+";  border-radius:0px; padding:10px;  text-align:center;  font:"+msg_data.font+"; z-index:2000000; "+msg_data.extracss+"'><div style='margin:"+msg_data.barmargin+"px;'>"+msg_data.message[0]+ questionmark+" </div></div>";

	var bubble = div.firstChild;
	window.document.body.appendChild(bubble);

	if (msg_data.type=='pbar') document.body.style.marginTop = bubble.scrollHeight+'px';

	if (msg_data.type=='side'){
		// slide in/out
		bubble.style.opacity=1;

		msg_data.margin= parseInt(msg_data.margin);
		msg_data.width= parseInt(msg_data.width);
		bubble.cbar_rightpos= -(msg_data.width + msg_data.margin);
		var myVar = setInterval(function(){

			bubble.cbar_rightpos= (msg_data.margin - (msg_data.margin- bubble.cbar_rightpos)*0.7 );
			bubble.style.right = bubble.cbar_rightpos+'px';
			if (Math.abs(bubble.cbar_rightpos - msg_data.margin) > 5 )return;
			clearInterval (myVar );

			// slide out
			setTimeout(function(){

				var myVar = setInterval(function(){

					bubble.cbar_rightpos-= 20;
					bubble.style.right = bubble.cbar_rightpos+'px';
					if (bubble.cbar_rightpos > -300) return;
					bubble.style.display='none';
					clearInterval (myVar );
				},40);
		   	},  msg_data.time*1000);
		},40);


	} else {


		// fade in
		var myVar = setInterval(function(){

			bubble.style.opacity =  parseFloat(bubble.style.opacity) +0.05;

			if (bubble.style.opacity < 1 )return;
			clearInterval (myVar );

			// fade out
			setTimeout(function(){

				var myVar = setInterval(function(){
					bubble.style.opacity =  parseFloat(bubble.style.opacity) -0.05;

					if (bubble.style.opacity > 0.05 )return;
					clearInterval (myVar );
					bubble.style.display='none';
				},40);


				if (msg_data.type=='pbar') {
					var myVar2 = setInterval(function(){
						var newmargin= parseInt(document.body.style.marginTop)* 0.7;
						document.body.style.marginTop = newmargin +'px';
						if (newmargin > 5 )return;
						clearInterval (myVar2 );
						document.body.style.marginTop='0px';
					},150);
				}

			},  msg_data.time*1000);
		},40);
	}
}


function cbar_trust_popup (){
	loadjscssfile (cbar_dynamic_url+'cbar_trust_popup.js.php?action=wrapper&sid='+cbar_sid,'js');
}


function cbar_trust_store_cart_message (pid_orig, message){
	cbar_createCookie ('cbar_trust_cartmsg_'+pid_orig, message, 0);
}

function cbar_img_overlay_show (   image, type, align, lrmargin, tbmargin, eletype ,attrib, attrib_search, rule_id, zindex, is_redraw) {

	if (cbar_in_array(rule_id, cbar_suppress_rules)) return; // allow suppressing by js action

	tbmargin=parseInt (tbmargin);
	lrmargin=parseInt (lrmargin);

	elements=cbar_Sizzle (eletype+"["+attrib+"*='"+attrib_search+"']");

	if (elements.length){

			for (i=0; i<elements.length; i++){
				cbar_overlay_img = window.document.createElement('span');
				cbar_overlay_img.className = 'cbar_ovl_img';
				cbar_overlay_img.style.height= "0px";
				cbar_overlay_img.style.width= "0px";
				cbar_overlay_img.style.margin= "0px 0px 0px 0px";
				cbar_overlay_img.style.padding= "0px 0px 0px 0px";

				if (zindex!="") cbar_overlay_img.style.zIndex=zindex; else cbar_overlay_img.style.zIndex="2147483646" ;
				cbar_overlay_img.innerHTML="<img style='position:relative; top:"+tbmargin+"px; left:"+lrmargin+"px; border:none; margin: 0 0 0 0; padding :0 0 0 0 ;' src='"+cbar_userimages+image+"'/>";
				cbar_overlay_img.style.display= "inline";
				cbar_overlay_img.style.border= "none";
				cbar_overlay_img.style.position= "absolute";
				cbar_overlay_img.style.visibility='visible';
				cbar_overlay_img.style.overflow='visible';


				elements[i].parentNode.insertBefore(cbar_overlay_img, elements[i]);



			}
		}

return;
}


function cbar_offerzone_show (x, align, width, frm_col, html, h_html, h_col, offerzone_id, rule_id, preview){

	if (cbar_in_array(rule_id, cbar_suppress_rules)) return; // allow suppressing by js action

	if ((!preview) && (cbar_readCookie('cbar_oz_'+ rule_id ) =='1')) return;

	var rand="";
	if (preview) rand="?rnd="+Math.ceil(1000*Math.random());
	var reset_style=' margin:0 0 0 0; padding:0 0 0 0; border:0px solid white;  line-height:1em; font-size:1em; text-align:left;';
	template="<div onmouseover=\"var tmp=document.getElementById('tooltip_"+offerzone_id+"'); if (tmp) tmp.style.display='block';\" onmouseout=\"var tmp=document.getElementById('tooltip_"+offerzone_id+"'); if (tmp) tmp.style.display='none';\" style='"+reset_style+" width:"+width+"px; height:auto; background:#"+h_col+";'>";
	if (h_html.length >0) template+="<div id='tooltip_"+offerzone_id+"' style='"+reset_style+" height:auto; width:"+width+"px;  display:none;'><div style='"+reset_style+" padding:4px; display:block;'>"+decodeURIComponent(h_html.replace (/\+/g, ' '))+"</div></div>";
	template+="<div style='"+reset_style+" height:13px; width:"+width+"px; background:url(https://d2lafqfdp6zd0i.cloudfront.net/"+rule_id+"_top.png"+rand+") no-repeat bottom'></div>";
	template+="<div style='"+reset_style+" height:auto; width:"+width+"px; padding-bottom:2px;background:url(https://d2lafqfdp6zd0i.cloudfront.net/"+rule_id+"_middle.png"+rand+") repeat-y'><div style='"+reset_style+" margin-left:12px; margin-right:12px; padding 0 0 0 0;'>"+decodeURIComponent(html.replace (/\+/g, ' '))+"</div><div style='clear:both; height:2px;'>&nbsp;</div></div>";
	//template+="<div style='"+reset_style+" height:13px; width:"+width+"px; background:url(https://d2lafqfdp6zd0i.cloudfront.net/"+rule_id+"_bottom.png"+rand+") no-repeat'></div>";
	template+="</div>";

	cbar_offerzone = window.document.createElement('div');
	cbar_offerzone.className = 'cbar_offerzone';
	cbar_offerzone.id= 'cbar_offerzone_'+offerzone_id;
	cbar_offerzone.setAttribute("rule_id", rule_id);
	cbar_offerzone.style.zIndex="80000";

	cbar_offerzone.innerHTML=template;
	// get the html of cbar_banner
	tmp_div= window.document.createElement('div');
	tmp_div.appendChild(cbar_offerzone);
	offerzone_outerHTML=tmp_div.innerHTML;

		// store all offerzone data as banner for repositioning.
	var cbar_Banner= {id:'cbar_offerzone_'+offerzone_id,  position:'f'  ,overlay:'' , align:align, lrmargin:x, tbmargin: 0, html_item: '' , width:width, height:'auto', banner_html:offerzone_outerHTML}
	cbar_banners[cbar_banners.length]=cbar_Banner;

		// css position

	if (!cbar_PositionFixedSupported ) {
		cbar_offerzone.style.position='absolute';
		cbar_listen ("scroll", window, cbar_banner_scroll_event);
		cbar_listen ("resize", window, cbar_banner_resize_event);
	} else{
		 cbar_offerzone.style.position='fixed';

	}

	window.document.body.appendChild(cbar_offerzone);
	cbar_banner_position( cbar_banners.length-1);
}



function cbar_MSG_show (rule_id, position, backgroundcolor, bordercolor, borderwidth, shadowsize, extracss, html,	animation,	close_butt, close_butt_pos,	close_butt_size,	close_butt_offset,	close_butt_id, divid, popup_close, autohide_secs,countdown_timer){
	
	if (cbar_in_array(rule_id, cbar_suppress_rules)) return; // allow suppressing by js action
	
	if(typeof peekABar=='undefined')peekABar={};
	if ((cbar_preview_rules=='') && (cbar_readCookie('cbar_mc_'+ rule_id ) == '1')) return; 

	if(extracss!='')
		{
		 var style = document.createElement('style');
		 style.type = 'text/css';
		 style.innerHTML = decodeURIComponent(extracss.replace (/\+/g, ' '));
		 document.getElementsByTagName('head')[0].appendChild(style);
		}

		var cbar_banner_html='<div id="cbar_msgzone_content">'+decodeURIComponent(html.replace (/\+/g, ' '))+'</div><div id="email_capture_ajax_msg" style="display:none"></div>';
	if (close_butt !='') {
		var close_css='';	
		if (close_butt_pos.search('t')>-1)close_css+="top:1px;bottom:auto;";
		else close_css+="top:auto;bottom:1px;"; 
		if(close_butt_pos.search('l')>-1)close_css+="left:1px;right:auto;";       
		else close_css+="right:1px;left:auto;";
		cbar_banner_html+="<img src='"+cbar_static_url+"img/close_buttons/close"+close_butt_id+"_"+close_butt_size+".png"+"' style='position:absolute;cursor:pointer;cursor:hand; border:none;"+close_css+"margin:"+close_butt_offset+"px;' onclick='peekABar."+divid+".hide(); popup_close=this.getAttribute(\"popup_close\"); if ((typeof popup_close ==\"undefined\") || isNaN(parseInt(popup_close)) ) popup_close=365; if ((popup_close != -1) && (cbar_preview_rules ==\"\")) cbar_createCookie(\"cbar_mc_\"+this.getAttribute(\"rule_id\") ,1, parseInt(popup_close)); return false;' popup_close='"+popup_close+"' rule_id='"+rule_id+"'/>";
	}

	var border=(position=='bottom')?'border-top':'border-bottom';
	var shadow=(position=='bottom')?'0 -'+shadowsize+'px '+shadowsize+'px 0':'0 '+shadowsize+'px '+shadowsize+'px 0';

	var CallPeekABar=function (){
		peekABar[divid] = new cbar_peekABar({	
			position: (position=='toppush')?'top':position,  
			backgroundColor: '#'+backgroundcolor,
			padding: '5px '+(parseInt(close_butt_size)+(parseInt(close_butt_offset)*2))+'px',
			html:cbar_banner_html,
			cssClass:divid,
			autohide:(autohide_secs>0)?true:false,
			delay:(autohide_secs*1000),
			onShow: function() {
				var el=cbar_Sizzle('.'+divid)[0];
					el.style.border='solid '+borderwidth+'px #'+bordercolor;
					el.style.boxShadow=shadow;
					el.setAttribute('popup_close',popup_close);
					el.setAttribute('id',divid);
				
				if(position=='toppush')
				{
				window['body_margin_top']=cbar_Sizzle('body')[0].style.marginTop;
				setTimeout(function (){
					window['cbar_msg_bar_resize_handler']=function (){
							if(typeof jQuery!='undefined')
								jQuery('body').animate({ 'marginTop': jQuery('.'+divid).outerHeight()+'px'}, 150);
							else 
								cbar_Sizzle('body')[0].style.marginTop=window.getComputedStyle(cbar_Sizzle('.'+divid)[0]).height;
						};
					cbar_listen('resize', window , window['cbar_msg_bar_resize_handler'] );
					window['cbar_msg_bar_resize_handler']();
				},500);
				}
				if(countdown_timer=='on')
					cbar_countdown_timer(rule_id);
				cbar_firecustomevent ('cbar_show' , document, rule_id);
			},
			onHide: function (){
				cbar_Sizzle('body')[0].style.marginTop=window['body_margin_top'];
				if (window.removeEventListener) window.removeEventListener("resize",window['cbar_msg_bar_resize_handler']);// W3C DOM
				else if (window.detachEvent )  document.detachEvent ("onresize",window['cbar_msg_bar_resize_handler']);// IE DOM
				window['cbar_b_no_click_'+rule_id]=true; 
				cbar_firecustomevent ('cbar_close' , document, rule_id);
			},
			animation: {
				type: animation,
				duration: 300
			}
		});
		peekABar[divid].show();
	};
		if(typeof cbar_peekABar=='undefined')
		{
			loadjscssfile(cbar_static_url + 'peekABar/jquery.peekabar.css','css');
			loadjscssfile_callback(cbar_static_url + 'peekABar/cbar_peekabar.js','js',CallPeekABar);
		}else
			CallPeekABar();
}

function cbar_FBMSG_show(rule_id, site_id, app_id, page_id, size, skin, e_loc, e_id, e_class, center_align,inline_css, css, rule_preview){
	cbar_fbmsg_optin=function (){if(typeof cbar_send_messenger!='undefined')FB.AppEvents.logEvent('MessengerCheckboxUserConfirmation', null, cbar_send_messenger);};
	cbar_draw_fb_checkbox=function (){
	var fchkb=document.createElement('template');
	fchkb.innerHTML='<div class="fb-messenger-checkbox" origin='+window.location.href+' page_id='+page_id+' messenger_app_id='+app_id+' user_ref='+site_id+'.'+rule_id+'.'+cbar_uid+'.'+rule_preview+'.'+(new Date()).getTime()+' prechecked=true allow_login=true size='+size+' skin='+skin+' center_align='+center_align+' '+((inline_css=='true'&&css.length)?'style="'+decodeURIComponent(css)+'"':'')+'></div>';
	if(e_loc=='b') cbar_target_e.parentNode.insertBefore(fchkb.content.firstChild, cbar_target_e);
	else cbar_target_e.parentNode.insertBefore(fchkb.content.firstChild,cbar_target_e.nextSibling);
	FB.init({appId:app_id,xfbml:!1,version:'v2.10'});
	FB.Event.subscribe('messenger_checkbox', function(e) {if ((e.event == 'checkbox') && (e.state=='checked'))cbar_send_messenger={'app_id':app_id,'page_id':page_id,'user_ref':e.user_ref}; else delete cbar_send_messenger; });
	cbar_listen ("click", cbar_target_e, cbar_fbmsg_optin);
	FB.XFBML.parse();
	};
	if(window.FB)
	{
	if(typeof cbar_Sizzle('#facebook-jssdk')[0]!='undefined')cbar_Sizzle('#facebook-jssdk')[0].remove();
	if(typeof cbar_Sizzle('#fb-root')[0]!='undefined')cbar_Sizzle('#fb-root')[0].remove();
	fb_root=document.createElement('div');
	fb_root.setAttribute('id','fb-root');
	cbar_Sizzle('body')[0].appendChild(fb_root);
	delete FB;
	}
	cbar_target_e = cbar_Sizzle((e_id.length>0)?'#'+e_id:'.'+e_class)[0];
	if(typeof cbar_target_e!='undefined')loadjscssfile_callback('//connect.facebook.net/en_US/sdk.js','js',function (){ setTimeout(function (){ cbar_draw_fb_checkbox(); }, 2000); });
}

function cbar_msgzone_email_capture(script,uid,sid,rid){

	var script_url=script+'?s='+sid+'&r='+rid+'&u='+uid+'&user_email='+cbar_Sizzle('#cbar_getemail_input')[0].value;

	loadjscssfile_callback(script_url,'js',function (){
		cbar_Sizzle('#cbar_msgzone_content')[0].style.display='none';
		var ecam_div=cbar_Sizzle('#email_capture_ajax_msg')[0];


		ecam_div.style.display='block';
		ecam_div.innerHTML=result_eca.message;
		if(result_eca.error)
		{

		ecam_div.innerHTML+=' <a href="javascript://" onclick="cbar_Sizzle(\'#email_capture_ajax_msg\')[0].style.display=\'none\';cbar_Sizzle(\'#cbar_msgzone_content\')[0].style.display=\'block\';">'+result_eca.backlnk+'</a>';
		}
	});

}

function cbar_banner_show (img_url, width, height, clk_url, align, position, lrmargin, tbmargin, html_item , zindex, overlay, newwin, banner_id, close_butt_pos, onclick, mouseover,mouseout, rule_id, extra_html, close_butt_id, close_butt_size, close_butt_offset, popup_close){//(called from data.js)
	if (cbar_in_array(rule_id, cbar_suppress_rules)) return; // allow suppressing by js action
	if ((cbar_preview_rules=='') && (cbar_readCookie('cbar_bc_'+ rule_id ) == '1')) return; // stops both banner and thumbnail

	
	if ( (position=='html') && ((overlay =='r') || (overlay =='rp') || (overlay =='in')  ) ) {
		if ( document.getElementById(html_item) == null ){
			const args=arguments;
			window.setTimeout(function (){cbar_banner_show  (args[0],args[1],args[2],args[3],args[4],args[5],args[6],args[7],args[8],args[9],args[10],args[11],args[12],args[13],args[14],args[15],args[16],args[17],args[18],args[19],args[20],args[21],args[22]) ;}  ,600);
			return;
		}
	}

	// delete banner if it already exists
	var existing = document.getElementById('cbar_banner_'+banner_id);
	if (existing){	var old = (existing.parentNode).removeChild(existing);	}

	cbar_banner = window.document.createElement('div');
	cbar_banner.className = 'cbar_banner';
	cbar_banner.id= 'cbar_banner_'+banner_id;
	cbar_banner.setAttribute("rule_id", rule_id);
	cbar_banner.popup_close=popup_close;
	cbar_banner.rule_id=rule_id;
	if (newwin) target_str=' _blank'; else target_str="";
	if (zindex!="") cbar_banner.style.zIndex=zindex; else cbar_banner.style.zIndex="600000" ;
	var tmp='';
	if (onclick || (clk_url!='')) tmp='cursor:pointer; cursor:hand; ';

	// img_url can be an image in cbar_userimages or full image url
	if ((img_url.search('http')!==0) &&  (img_url.search('//')!==0)) img_url = cbar_userimages + img_url;

	cbar_banner_html="<img src='"+img_url+"' style='border:none; "+tmp+"' /> ";

	if (close_butt_pos !='') {
		var css_position='';
		if (close_butt_pos.search('t')>-1) {css_position+="top:1px;"; css_position+="bottom:auto;"; }
		if (close_butt_pos.search('b')>-1) {css_position+="top:auto;"; css_position+="bottom:1px;"; }
		if (close_butt_pos.search('l')>-1) {css_position+="left:1px;"; css_position+="right:auto;";}
		if (close_butt_pos.search('r')>-1) {css_position+="left:auto;"; css_position+="right:1px;";}

		if((close_butt_id>-1)&&(close_butt_size>-1))
			var close_icon=cbar_static_url+"img/close_buttons/close"+close_butt_id+"_"+close_butt_size+".png";
		else
			var close_icon=cbar_static_url+"img/common/dialog_close.png";

		cbar_banner_html+="<img src='"+close_icon+"' class='cbar_close_button' style='position:absolute;cursor:pointer;cursor:hand; border:none;"+css_position+"margin:"+close_butt_offset+"px;' onclick=' cbar_b_no_click_"+rule_id+" = true; this.parentNode.style.display=\"none\"; this.parentNode.setAttribute(\"hidden_banner\", \"1\"); if ((typeof this.parentNode.popup_close ==\"undefined\") || isNaN(parseInt(this.parentNode.popup_close)) ) this.parentNode.popup_close =365; if ((this.parentNode.popup_close != -1) && (cbar_preview_rules ==\"\")) cbar_createCookie(\"cbar_bc_\"+this.parentNode.rule_id ,1, parseInt(this.parentNode.popup_close)); e = window.event || e; e.stopPropagation(); return false;' />";
	}

	if  (extra_html.length>0)  cbar_banner_html+=decodeURIComponent(extra_html.replace (/\+/g, ' '));

	if  (clk_url.length>0)  cbar_banner_html="<a href='"+clk_url+"'  target='"+target_str+"' style='border:none;'>"+cbar_banner_html+"</a>";
	cbar_banner.style.width= "auto";
	cbar_banner.style.height= "auto";
	cbar_banner.style.top= "0px";
	cbar_banner.style.left= "0px";
	cbar_banner.style.display= "block";
	cbar_banner.style.margin='0 0 0 0';
	cbar_banner.style.position='relative'; //position cant be static, so close button will appear inside

	cbar_banner.style.visibility='visible';
	cbar_banner.innerHTML=cbar_banner_html;
	// get the html of cbar_banner
	tmp_div= window.document.createElement('div');
	tmp_div.appendChild(cbar_banner);
	banner_outerHTML=tmp_div.innerHTML;

	// store all banner data for repositioning.
	var cbar_Banner= {id:'cbar_banner_'+banner_id,  position:position  ,overlay:overlay , align:align, lrmargin:lrmargin, tbmargin: tbmargin, html_item: html_item , width:width, height:height, banner_html:banner_outerHTML}
	cbar_banners[cbar_banners.length]=cbar_Banner;

		if ( (position=='html') && ((overlay =='r') || (overlay =='rp')) ) // overwrite existing HTML element content
		cbar_banner = cbar_replace_element (cbar_banners.length-1);
	if ( (position=='html') && (overlay =='in') ) { // insert into
		var ele= document.getElementById (html_item);
		if (ele){
			var firstchild = ele.firstChild;
			if (firstchild)
				ele.insertBefore(cbar_banner,firstchild);
			else
				ele.appendChild(cbar_banner);
		}
	}



	if (cbar_banner!=null){
		cbar_listen('click', cbar_banner, function (evt){cbar_click2 (null, null, 'banner', rule_id);}) ;
		if (onclick) cbar_listen('click', cbar_banner, eval ("cbar_banner_onclick_"+banner_id)) ;
		if (mouseover) cbar_listen('mouseover', cbar_banner, eval ("cbar_banner_mouseover_"+banner_id)) ;
		if (mouseout) cbar_listen('mouseout', cbar_banner, eval ("cbar_banner_mouseout_"+banner_id)) ;

	}

	if ( (position=='html') && ((overlay =='r') || (overlay =='rp') || (overlay =='in')  ) ) return; // overwrite existing HTML element content

	// css position

	if (!cbar_PositionFixedSupported || (position=='html')) {
		cbar_banner.style.position='absolute';
		cbar_listen ("scroll", window, cbar_banner_scroll_event);
		cbar_listen ("resize", window, cbar_banner_resize_event);
	} else{
		if (position=='f') cbar_banner.style.position='fixed';
		else cbar_banner.style.position='absolute';
	}


	window.document.body.appendChild(cbar_banner);
	cbar_banner_position( cbar_banners.length-1);
}

function cbar_replace_element (banners_index) {
	banner_data=cbar_banners[banners_index];
	var ele= document.getElementById (banner_data.html_item);
	if (banner_data.overlay=='rp') ele=ele.parentNode;
	if (ele !=null) ele.innerHTML=banner_data.banner_html;
	return document.getElementById(banner_data.id);
}

function cbar_banner_resize_event  () {// # 227
	if (cbar_ban_resizetimeout >0) window.clearTimeout (cbar_ban_resizetimeout);
	cbar_ban_resizetimeout= window.setTimeout("cbar_banners_position()",100);
}

function cbar_banner_scroll_event  () {// must be here for ie6
	if (cbar_ban_scrolltimeout >0) window.clearTimeout (cbar_ban_scrolltimeout);
	cbar_ban_scrolltimeout= window.setTimeout("cbar_banners_position()",300);
}

// all banners position
function cbar_banners_position (){
	for (i=0; i<cbar_banners.length; i++) {
		cbar_banner_position(i);
	}
}

// single banner position
function cbar_banner_position( banners_index){

	banner_data=cbar_banners[banners_index];
	cbar_banner=document.getElementById (banner_data.id);
	if (cbar_banner == null) return;
	if (cbar_banner.getAttribute('hidden_banner')!==null) return; // banner is hidden

	if ((banner_data.position=='html') && (banner_data.overlay=='f')) { // float over html element
		var ele= document.getElementById (banner_data.html_item);
		if (ele !=null){

			var pos= cbar_findPos(ele);
				if (pos != null){
					if (banner_data.align.search('t')>-1) {cbar_banner.style.top=banner_data.tbmargin+pos[1]+"px";  }
					if (banner_data.align.search('b')>-1) {cbar_banner.style.top=pos[3]-banner_data.tbmargin+"px"; }
					if (banner_data.align.search('l')>-1) {cbar_banner.style.left=pos[0]+banner_data.lrmargin+"px";}
					if (banner_data.align.search('r')>-1) {cbar_banner.style.right=pos[2] +banner_data.lrmargin+"px"; cbar_banner.style.left="auto";}
					if (banner_data.align.search('c')>-1) {var clientwidth =  document.compatMode=='CSS1Compat' ? document.documentElement.clientWidth: document.body.clientWidth;cbar_banner.style.left=Math.floor((clientwidth/2)+banner_data.lrmargin-(banner_data.width/2))+"px";}
					cbar_banner.style.display= "block";
				}
			else{
				cbar_log_console('cbar error: dont use hidden div '+banner_data.html_item+' for floating banner position');
				cbar_banner.style.display= "none";
				}
		}else{
			cbar_banner.style.display= "none";
			cbar_ban_retrytimeout= window.setTimeout("cbar_banner_position("+banners_index+")",600);
		}
		return;
	}


	var clientheight =  document.compatMode=='CSS1Compat' ? document.documentElement.clientHeight: document.body.clientHeight;
	var clientwidth =  document.compatMode=='CSS1Compat' ? document.documentElement.clientWidth: document.body.clientWidth;


	if ( ! ((banner_data.position=='html') && (banner_data.overlay=='r'))) { // dont reposition banner if its replacing content

		if  (!cbar_PositionFixedSupported && (banner_data.position=='f') ){
			var  scrolltop = document.compatMode=="CSS1Compat" ? document.documentElement.scrollTop : document.body.scrollTop;
			if (banner_data.align.search('t')>-1) {cbar_banner.style.top=banner_data.tbmargin+scrolltop+"px";  }
			if (banner_data.align.search('b')>-1) {cbar_banner.style.top="auto"; cbar_banner.style.bottom=banner_data.tbmargin-scrolltop+"px"; }
			if (banner_data.align.search('l')>-1) {cbar_banner.style.left=banner_data.lrmargin+"px";}
			if (banner_data.align.search('r')>-1) {cbar_banner.style.right=banner_data.lrmargin+"px"; cbar_banner.style.left="auto";}
			if (banner_data.align=='c') {cbar_banner.style.left=Math.floor((clientwidth/2)+banner_data.lrmargin-(banner_data.width/2))+"px";  cbar_banner.style.top=Math.floor(scrolltop+(clientheight/2)+banner_data.tbmargin-(banner_data.height/2))+"px"; }
		} else {
			if (banner_data.align.search('t')>-1) {cbar_banner.style.top=banner_data.tbmargin+"px"; }
			if (banner_data.align.search('b')>-1) {cbar_banner.style.bottom=banner_data.tbmargin+"px"; cbar_banner.style.top="auto";}
			if (banner_data.align.search('l')>-1) {cbar_banner.style.left=banner_data.lrmargin+"px"; }
			if (banner_data.align.search('r')>-1) {cbar_banner.style.right=banner_data.lrmargin+"px"; cbar_banner.style.left="auto";}
			if (banner_data.align=='c') {cbar_banner.style.left=Math.floor((clientwidth/2)+banner_data.lrmargin-(banner_data.width/2))+"px";  cbar_banner.style.top=Math.floor((clientheight/2)+banner_data.tbmargin-(banner_data.height/2))+"px"; }
			else if (banner_data.align.search('c')>-1) {cbar_banner.style.left=Math.floor((clientwidth/2)+banner_data.lrmargin-(banner_data.width/2))+"px";}
		}
	}
}


// COUPONS

function cbar_coupon_get (type, rule_id) {

	var banpop='';
	if (type==1) {
		var banner=cbar_Sizzle('div[rule_id='+rule_id+']');
		if  (banner.length) banpop=banner[0].id;
	}
	else if (type==2){
			banpop= 'cbar_popup_'+rule_id;
	}
	else if (type==3){
		var oz=cbar_Sizzle('div[rule_id='+rule_id+']');
		if  (oz.length) banpop=oz[0].id;
	}
	var usertime=Math.round(new Date().getTime() /1000);
	// update coupons list
	cur_coupons=cbar_readCookie('cbar_co');
	// remove old appearance
	if (cur_coupons==null) cur_coupons='';

	var regExp = new RegExp(rule_id+"~[0-9]+_?|_?"+rule_id+"~[0-9]+",  "gi");
	cur_coupons=cur_coupons.replace (regExp,'');

	if (cur_coupons.length>3 ) cur_coupons+='_';
	// add coupon
	cur_coupons+=rule_id+'~'+usertime;
	cbar_createCookie ('cbar_co',cur_coupons,365);

	// hide all active tooltips
	if (typeof cbar_coups[0] !='undefined'){
		var tt=cbar_Sizzle('div[rule_id="'+cbar_coups[0].rule+'"]');
		if  (tt.length) tt[0].parentNode.removeChild(tt[0]);
	}

	var cbar_str='';
	if (cbar_preview_rules > 0 ) cbar_str += '&prev_ru='+cbar_preview_rules;

	if (cbar_md)  cbar_str +="&md=1";

	cbar_str+="&br="+cbar_BrowserDetect.browser+"&v="+cbar_BrowserDetect.version+"&os="+cbar_BrowserDetect.OS;
	if  (typeof  screen.width !='undefined')
		cbar_str+="&scw="+screen.width+"&sch="+screen.height;

	if ( cbar_cou_in_cart && (cbar_cou_input !='')) cbar_str+='&cou_inj=true'; // experimnetal
	loadjscssfile (cbar_dynamic_url+cbar_datajs+'?sid='+cbar_sid+'&uid='+cbar_uid+'&a=ca&r='+rule_id+'&cou='+cur_coupons+'&bp='+banpop+cbar_abt_str+cbar_str+"&ut="+usertime+"&ts="+Math.ceil(10000*Math.random()),'js');

	// hide coupon offer banner or popup (if any)
	if (banpop !="") {
		tmp=cbar_Sizzle('#'+banpop);
		if (tmp.length) {
			tmp[0].style.display='none';
			tmp[0].setAttribute("hidden_banner", '1');
		}
	}
	// hide coupon popup (if any)
	cbar_close_popup (rule_id);


	if ( typeof (cbar_coupon_given) =='function') cbar_coupon_given(rule_id);

}

function cbar_cou_th_anim (rule_id, pop_ban_id, animstep, image_name, image_w, image_h, align, sx, sy, tx, ty){
	totalsteps=30;

	if (animstep==0) {
		tmp=cbar_Sizzle('#'+pop_ban_id);

		var scrolltop = document.body.scrollTop || document.documentElement.scrollTop;
		var clientheight =  document.compatMode=='CSS1Compat' ? document.documentElement.clientHeight: document.body.clientHeight;
		var clientwidth =  document.compatMode=='CSS1Compat' ? document.documentElement.clientWidth: document.body.clientWidth;

		sx=tmp[0].offsetLeft;
		sy=tmp[0].offsetTop+scrolltop;

		if (align.search('t')>-1) ty=scrolltop; else ty=clientheight+scrolltop-image_h;
		if (align.search('l')>-1) tx=0; else tx=clientwidth-image_w;

		var element = window.document.createElement('img');
				element.id='randomid';
				element.style.position='absolute';
				element.style.display='block';
				element.style.zIndex='30000';
				element.src= cbar_userimages+image_name;
				window.document.body.appendChild(element);
	}
	tmp=cbar_Sizzle('#randomid');
	if (tmp.length) {
		element=tmp[0];
		element.style.left= Math.round(sx+(tx-sx)*(animstep/totalsteps))+"px";
		element.style.top= Math.round(sy+(ty-sy)*(animstep/totalsteps))+"px";
	}
	if (animstep<totalsteps)
		setTimeout ( " cbar_cou_th_anim ("+rule_id+",'"+pop_ban_id+"',"+ (animstep+1)+",'"+ image_name+"','"+ image_w+"','"+ image_h+"', '"+align+"', "+sx+","+sy+","+tx+", "+ty+"); " , 50 );
	else {

		element.style.display='none';

		// hide coupon banner (if any)
		tmp=cbar_Sizzle('#'+pop_ban_id);
		if (tmp.length) {
			tmp[0].style.display='none';
			tmp[0].setAttribute("hidden_banner", '1');
		}
		// hide coupon popup (if any)
		cbar_close_popup (rule_id);
	}
}

function cbar_cou_tooltip ( rule_id, banner_id , show, prompt) {

	if (show && (prompt == '')) return;

	tooltip_tmp=cbar_Sizzle ('div#cbar_tooltip_'+rule_id);

	if (tooltip_tmp.length==0){
		var thumbnail=cbar_Sizzle ('div#cbar_banner_'+banner_id); // find the thumbnail
		tmp= window.document.createElement('div');
		var xoffset= 0;
		var yoffset=0;
		if (thumbnail[0].offsetLeft >100) xoffset=- 220; else xoffset= thumbnail[0].clientWidth+20;
		if (thumbnail[0].offsetTop >100) yoffset=- 100; else yoffset= thumbnail[0].clientHeight+20;

		tmp.innerHTML ='<div id= "cbar_tooltip_'+rule_id+'" style="position:absolute; top:'+yoffset+'px; left:'+xoffset+'px; bottom:auto; right:auto; z-index:30010; display:block; position:absolute; font-size:12px; width:213px; height:94px; border:none; background:url('+cbar_static_url+'img/coupons/tooltip_1.png) no-repeat left top; font-weight:normal ; color:#333333; text-align:center"><div style="margin:10px;">'+decodeURIComponent(prompt.replace (/\+/g, ' '))+'</div></div>';
		tooltip=tmp.childNodes[0];
		thumbnail[0].appendChild(tooltip);
	} else tooltip= tooltip_tmp[0];

	if (show){
			tooltip.style.display='block';
	} else {
		tooltip.style.display='none';
	}


}

function cbar_hide_coupon_box (){

	var cont = true;
	if  (typeof cbar_before_hide_coupon_box == 'function') {cont = cbar_before_hide_coupon_box ();}

	if (cont && (typeof window.hide_message !='undefined')) {
			var myElement = window.document.createElement('span');
			 myElement.innerHTML='<span style="background:white">'+decodeURIComponent(window.hide_message.replace (/\+/g, ' '))+'</span>';
			cbar_cou_input.parentNode.insertBefore(myElement,cbar_cou_input);
			cbar_cou_input.style.width='0px';
			cbar_cou_input.style.padding='0pt';
			cbar_cou_input.style.margin='0pt';
			cbar_cou_input.style.border='none';
			cbar_cou_input.style.backgroundColor="transparent";
	}
}

function cbar_cou_inj (cou_code,hide_message){
	window.cbar_coupon_code= cou_code;
	window.hide_message=hide_message;

	if  (typeof cbar_before_cou_inj == 'function') {dont_inj_coupon=cbar_before_cou_inj (cbar_cou_input);}

	if ((typeof window.hide_message !='undefined') && (window.hide_message !='')) cbar_hide_coupon_box ();

	if ((typeof dont_inj_coupon !='undefined') && (dont_inj_coupon==false)) {
		cbar_log_console('cbar:coupon not injected');
		return;
	}


	cbar_cou_input.value=cou_code;

	if  (typeof cbar_after_cou_inj == 'function') cbar_after_cou_inj (cbar_cou_input);
}

function cbar_cou_tick (){

	for (i=0; i < cbar_coups.length; i++){
		// format time string

		if (cbar_coups[i].div==null) {tmp=cbar_Sizzle('div#'+cbar_coups[i].id); if (tmp.length) cbar_coups[i].div=tmp[0] }; // find the countdown div

		if ((cbar_coups[i].secs_left <1)) {
			  if (cbar_coups[i].div!==null) 	cbar_coups[i].div.innerHTML=decodeURIComponent(cbar_coups[i].coupon_expired.replace (/\+/g, ' '));
			return;
		}

		var hours=  Math.floor(cbar_coups[i].secs_left /3600);
		var minutes= Math.floor((cbar_coups[i].secs_left % 3600)/60);
		var seconds=  Math.floor(cbar_coups[i].secs_left % 60);
		var days= 0;
		var dayshtml='';
		if (cbar_coups[i].showdays ==true) {
			days= parseInt(hours/24);
			hours-=days*24;
			if (days>0) dayshtml= days+cbar_coups[i].daysword+" ";
		}

		if (cbar_coups[i].div!==null) cbar_coups[i].div.innerHTML=  dayshtml + (hours<10?' 0':' ')+hours+ (minutes<10?':0':':')+minutes+ (seconds<10?':0':':')+seconds;
		cbar_coups[i].secs_left--;


	}
}

function cbar_cou_reset (rule_id){
	// remove from to coupons list
	cur_coupons=cbar_readCookie('cbar_co');
	if (cur_coupons==null) return;

	var regExp = new RegExp(rule_id+"~[0-9]+_?|_?"+rule_id+"~[0-9]+",  "gi");
	cur_coupons=cur_coupons.replace (regExp,'');

	cbar_createCookie ('cbar_co',cur_coupons,365);
}

function cbar_cou_expire (rule_id){
	cur_coupons=cbar_readCookie('cbar_co');
	// remove old appearance
	if (cur_coupons==null) cur_coupons='';

	var regExp = new RegExp(rule_id+"~[0-9]+_?|_?"+rule_id+"~[0-9]+",  "gi");
	cur_coupons=cur_coupons.replace (regExp,'');

	if (cur_coupons.length>3 ) cur_coupons+='_';
	// add coupon
	cur_coupons+=rule_id+'~12345678'; // past (hard coded value)
	cbar_createCookie ('cbar_co',cur_coupons,365);
}

var cbar_alreadyrunflag=false; //flag to indicate whether target function has already been run

function cbar_listen(evnt, elem, func) {
	if (elem.addEventListener)  // W3C DOM
		elem.addEventListener(evnt,func,false);
	else if (elem.attachEvent) { // IE DOM
		 var r = elem.attachEvent("on"+evnt, func);
	return r;
	}
	return false;
}

// custom events support
function cbar_firecustomevent(eventName, element, data) {
	var event;
	if (document.createEvent) {
		event = document.createEvent("CustomEvent");
		event.initCustomEvent(eventName, true, true,data);
	} else {
		event = document.createEventObject();
		event.eventType = eventName;
	}

	event.eventName = eventName;
	event.data = data || { };

	if (document.createEvent) {
		element.dispatchEvent(event);
	} else {
		element.fireEvent("on" + event.eventType, event);
	}
}

function cbar_debounce(func){ var timer; return function(event){  if(timer) clearTimeout(timer); timer = setTimeout(func,200,event); };}
window.addEventListener("resize",cbar_debounce(function(e){  cbar_firecustomevent ('cbar_resize' , document, {}); }));


//cbar_position_fixed supported
function cbar_pos_fixed_supported() {
  var androidversion = parseFloat(navigator.userAgent.slice(navigator.userAgent.indexOf("Android")+8));
  if (androidversion <3) return false;
  return true;
}

// LP integration
function cbar_LP_set(){
	if(typeof lpMTagConfig !='undefined'){
		if (typeof lpMTagConfig.sessionVar == "undefined"){
				lpMTagConfig.sessionVar = new Array();
		}
			//sid
		lpMTagConfig.sessionVar[lpMTagConfig.sessionVar.length] = 'SID='+ cbar_sid;
			//uid
		lpMTagConfig.sessionVar[lpMTagConfig.sessionVar.length] = 'UID='+ cbar_readCookie('cbar_uid');
	} else
		setTimeout ('cbar_LP_set();', 1000); // call again until LP code initializes
}


cbar_init_ajax_cart =function (){
	// ajax cart
	if (typeof cbar_check_cart =='function') {

		var tmp=cbar_readCookie('cbar_cart_checksum'); //#130721
		if (tmp!=null) window['cbar_cart_checksum']= unescape(tmp);

		window.cbar_samplingcart = setInterval(function(){

			var retval = cbar_check_cart();
			if (retval === false) return;

			if ((typeof window['cbar_cart_checksum'] == 'undefined') || (retval != window['cbar_cart_checksum'])) {
				// something changed in ajax cart

				window['cbar_cart_checksum'] = retval;
				cbar_createCookie('cbar_cart_checksum', escape(retval), 0);

				// scrape cart
				if (typeof cbar_scrape_ajax_cart =='function') {

					var cbar_str='';
					cbar_pur_pids=[];
					cbar_pur_qtys=[];
					cbar_pur_imgs=[];
					cbar_pur_names=[];
					cbar_pur_urls=[];
					cbar_pur_prices=[];
					cbar_pur_subttls=[];
					cbar_pur_xtr1s=[];
					cbar_pur_xtr2s=[];
					cbar_pur_xtr3s=[];
					cbar_pur_xtr4s=[];

					cbar_userinfo= new Object();
					cbar_user_attribute = new Object();
					cbar_user_attributes = new Object();

					cbar_crt=''; cbar_crtn='';

					var proceed=cbar_scrape_ajax_cart();

					if (proceed ===false) return;

					if  (cbar_pur_pids.length >0 && cbar_pur_pids.length <25) {
						for (var i=0; i < cbar_pur_pids.length; i++){
							cbar_str +='&pid'+i+'='+encodeURIComponent(cbar_pur_pids[i]);
							cbar_str +="&qty"+i+"="+((typeof cbar_pur_qtys[i] == "undefined")?1:cbar_pur_qtys[i]);

							if (cbar_pur_mode == 3) {

								if (typeof cbar_pur_imgs[i] !=='undefined') cbar_str +='&img'+i+'='+encodeURIComponent(cbar_pur_imgs[i]);
								if (typeof cbar_pur_names[i] !=='undefined') cbar_str +='&name'+i+'='+encodeURIComponent(cbar_pur_names[i]);
								if (typeof cbar_pur_urls[i] !=='undefined') cbar_str +='&url'+i+'='+encodeURIComponent(cbar_pur_urls[i]);
								if (typeof cbar_pur_prices[i] !=='undefined') cbar_str +='&price'+i+'='+encodeURIComponent(cbar_pur_prices[i]);
								if (typeof cbar_pur_subttls[i] !=='undefined') cbar_str +='&subttl'+i+'='+encodeURIComponent(cbar_pur_subttls[i]);
								if (typeof cbar_pur_xtr1s[i] !=='undefined') cbar_str +='&xtr1'+i+'='+encodeURIComponent(cbar_pur_xtr1s[i]);
								if (typeof cbar_pur_xtr2s[i] !=='undefined') cbar_str +='&xtr2'+i+'='+encodeURIComponent(cbar_pur_xtr2s[i]);
								if (typeof cbar_pur_xtr3s[i] !=='undefined') cbar_str +='&xtr3'+i+'='+encodeURIComponent(cbar_pur_xtr3s[i]);
								if (typeof cbar_pur_xtr4s[i] !=='undefined') cbar_str +='&xtr4'+i+'='+encodeURIComponent(cbar_pur_xtr4s[i]);
							}


						}
					}
					cbar_str += '&pur=1'+'&pur_mode='+cbar_pur_mode+'&pur_add='+cbar_pur_add+'&'+cbar2url['cbar_crt']+'='+cbar_crt+'&'+cbar2url['cbar_crtn']+'='+cbar_crtn+'&'+cbar2url['cbar_log']+'='+encodeURIComponent(cbar_log);
					loadjscssfile (cbar_dynamic_url+cbar_datajs+'?a=cartu&sid='+cbar_sid+'&uid='+cbar_uid+cbar_str+"&"+cbar_any2url('attu',cbar_user_attributes)+"&"+cbar_any2url('attu1',cbar_user_attribute)+"&"+cbar_any2url('uinf',cbar_userinfo)+cbar_abt_str+"&ts="+Math.ceil(10000*Math.random()),'js');


				}
			}

		},600);
	}
}

// add to cart asyncronuosly
function cbar_add_to_cart (pid, qty , pur_mode){

	cbar_abt_str="&abt="+cbar_abt;
	cbar_str = '&pur=1'+'&pid0='+encodeURIComponent(pid)+'&qty0='+qty+'&pur_mode='+pur_mode+'&pur_add=true'+'&'+cbar2url['cbar_log']+'='+encodeURIComponent(cbar_log);
	loadjscssfile (cbar_dynamic_url+cbar_datajs+'?a=cartu&sid='+cbar_sid+'&uid='+cbar_uid+cbar_str+cbar_abt_str+"&ts="+Math.ceil(10000*Math.random()),'js');
}

// empty cart asyncronuosly
function cbar_empty_cart (){
	cbar_add_to_cart('deletecart',0,0);
}

function cbar_late_update (fieldname, get_value_function, once){

	if (cbar_ro)  return;

	var fieldname_nospace = fieldname.replace(' ', '');

	var tmp=cbar_readCookie('cbar_data_'+fieldname_nospace);
	if (tmp!=null) window['cbar_data_'+fieldname_nospace]=tmp;

	window['cbar_sampling_cnt'+fieldname_nospace]=0;
	window['cbar_timer_'+fieldname_nospace] = setInterval(
		function (){

			var retval=get_value_function();
			if (retval===false || (typeof retval=='undefined')) return;

			var retval_hashed = cbar_hashCode(retval);

			if ((typeof window['cbar_data_'+fieldname_nospace] == 'undefined') || (retval_hashed != window['cbar_data_'+fieldname_nospace])) {
				window['cbar_data_'+fieldname_nospace]=retval_hashed;
				cbar_createCookie('cbar_data_'+fieldname_nospace, retval_hashed, 0);
				if (typeof cbar2url[fieldname_nospace] != 'undefined')
					cbar_str="&"+cbar2url[fieldname_nospace]+"="+encodeURIComponent(retval);
				else
					cbar_str="&"+fieldname+"="+encodeURIComponent(retval); // e.g. uinf[preffered color]

				loadjscssfile (cbar_dynamic_url+cbar_datajs+'?a=datau&sid='+cbar_sid+'&uid='+cbar_uid+'&pid='+cbar_pid+cbar_str+cbar_abt_str+"&ts="+Math.ceil(10000*Math.random()),'js');

				if (window['cbar_sampling_cnt'+fieldname_nospace]++ >20 || once) clearInterval (window['cbar_timer_'+fieldname_nospace]);
			}
		}
	,550)
}


function cbar_visible (name, element){

	if (element == null) return;
	if (typeof element=='array') element=element[0];

	var vis_cookie=cbar_readCookie('cbar_vis_'+name);
	if (vis_cookie!=null) return;

	var scrolltop = document.body.scrollTop || document.documentElement.scrollTop;
	var clientheight = document.body.clientHeight || document.documentElement.clientHeight;

	var pos= cbar_findPos(element);
	if ((pos[1] > scrolltop) && (pos[1] < (scrolltop+clientheight))) {
		cbar_uid=cbar_readCookie('cbar_uid');
		cbar_createCookie('cbar_vis_'+name, true, 0);
		cbar_str="&f="+name;
		//if (cbar_ba)  cbar_str +="&ba=1";
		loadjscssfile (cbar_dynamic_url+cbar_datajs+'?a=vis&sid='+cbar_sid+'&uid='+cbar_uid+cbar_str+cbar_abt_str+"&ts="+Math.ceil(10000*Math.random()),'js');
	}
	else
	window.setTimeout(function(){cbar_visible(name, element);},400);
}

function cbar_mouse_move(e) {

	if (!e) var e = window.event;

	if (e.clientX || e.clientY) 	{
		window.posx = e.clientX;
		window.posy = e.clientY ;
	}
}

function cbar_init_mouse_exit_detect(){
	// will fire custom event cbar_mouse_exit
	if (typeof window.cbar_mousexitdetect !='undefined') return;
	window.cbar_mouseleave=false;
	window.cbar_mousexitdetect=setInterval (
		function(){
			if (typeof window.cbar_mouseout=='undefined') window.cbar_mouseout=false;
			if (typeof window.last2posy !='undefined') {
				if (  (window.lastposy==window.posy ) && ((window.lastposy-window.last2posy) < -10 ) && (window.posy <50 )&&(window.cbar_mouseleave)) {

					var deltax=window.posx-window.lastposx;
					if (window.lastposx+2*deltax < 150)
						window.cbar_back_button=true;
					else
						window.cbar_back_button=false;

					window.cbar_mouseout=true;
					cbar_firecustomevent('cbar_mouse_exit', document, {back_button:window.cbar_back_button, mouseout:window.cbar_mouseout});
				 }
			}

			window.last2posx=window.lastposx;
			window.lastposx=window.posx;
			window.last2posy=window.lastposy;
			window.lastposy=window.posy;

		},100);

	if('onmouseleave' in document.getElementsByTagName('html')[0])
	{
		cbar_listen('mouseleave',document.getElementsByTagName('html')[0],function(e) {window.cbar_mouseleave=true;});
		cbar_listen('mouseenter',document.getElementsByTagName('html')[0],function(e) {window.cbar_mouseleave=false;});
	}else{
	//safari
		cbar_listen('mouseout',document.getElementsByTagName('html')[0],function(e) {window.cbar_mouseleave=true;});
		cbar_listen('mouseover',document.getElementsByTagName('html')[0],function(e) {window.cbar_mouseleave=false;});
	}

	cbar_listen( "mousemove", window, cbar_mouse_move );

}

// Ret

function cbar_pub_ping(){
	if (typeof window.exitpop =='undefined'){
		window.exitpop=true;
		if (cbar_preview_rules > 0 ) prev_str = '&prev_ru='+cbar_preview_rules; else prev_str='';
		loadjscssfile (cbar_dynamic_url+'ret/ping.js.php?a=ping&sid='+cbar_sid+prev_str+"&ts="+Math.ceil(10000*Math.random()),'js');
	}
}


// cat personalization tag
cbar_cat_personalize = function (){

	//if (typeof window.cbar_catper_personalized !='undefined') return; // run only once
	//window.cbar_catper_personalized= true;

	var b_sid=cbar_sid;
	function cbar_cookieval_2(name) { var  match = document.cookie.match('(?:^|;)\\s?' + name + '=(.*?)(?:;|$)');    return match && unescape(match[1]);}
	var fileref=document.createElement('script');
	fileref.setAttribute('type','text/javascript');
	fileref.setAttribute('src', '//www.barilliance.net/cat_personalization.php?s='+b_sid+'&u='+cbar_cookieval_2('cbar_uid')+'&url='+encodeURIComponent(window.location.href)+'&rn='+Math.ceil(10000*Math.random()));
	document.getElementsByTagName('head')[0].appendChild(fileref);
}


var cbar_readyBound = false;
var cbar_isReady= false;
function cbar_bindReady(){
	if ( cbar_readyBound ) return;
	cbar_readyBound = true;

	// Mozilla, Opera and webkit nightlies currently support this event
	if ( document.addEventListener ) {
		// Use the handy event callback
		document.addEventListener( "DOMContentLoaded", function(){
			document.removeEventListener( "DOMContentLoaded", arguments.callee, false );
			cbar_dom_ready();
		}, false );

	// If IE event model is used
	} else if ( document.attachEvent ) {
		// ensure firing before onload,
		// maybe late but safe also for iframes
		document.attachEvent("onreadystatechange", function(){
			if ( document.readyState === "complete" ) {
				document.detachEvent( "onreadystatechange", arguments.callee );
				cbar_dom_ready();
			}
		});

		// If IE and not an iframe
		// continually check to see if the document is ready
		if ( document.documentElement.doScroll && window == window.top ) (function(){
			if ( cbar_isReady ) return;

			try {
				// If IE is used, use the trick by Diego Perini
				// http://javascript.nwbox.com/IEContentLoaded/
				document.documentElement.doScroll("left");
			} catch( error ) {
				setTimeout( arguments.callee, 0 );
				return;
			}

			// and execute any waiting functions
			cbar_dom_ready();
		})();
	}

	// A fallback to window.onload, that will always work
	cbar_listen( "load", window, cbar_dom_ready );

}



function cbar_start () {

	try {

	var wait=false;
	if (typeof cbar_hold_execution =='function') wait=cbar_hold_execution();
	if (wait) {
		cbar_log_console('cbar wait');
		window.setTimeout(function(){cbar_start();},500);
		return;
	}

	if (cbar_alreadyrunflag) return;
	cbar_alreadyrunflag=true;

	// cookie domain (starts with dot)
	if ( !cbar_cookiedomain ) {
		if (document.location.host.substring (0,4) == 'www.' )
			cbar_cookiedomain = '.'+document.location.host.substring(4);
		else
			cbar_cookiedomain = '.'+document.location.host;
	}

	cbar_BrowserDetect.init();

	if ((cbar_BrowserDetect.browser=='Explorer') && (cbar_BrowserDetect.version >6)) ie7u=true;
	if ( (cbar_BrowserDetect.browser=='Explorer') &&	((document.compatMode =='BackCompat') || ((document.compatMode =='CSS1Compat') && (cbar_BrowserDetect.version < 7))))
	cbar_PositionFixedSupported=false;

	// on android try
	if (cbar_BrowserDetect.OS=='Android') cbar_PositionFixedSupported=cbar_pos_fixed_supported();


	// bots
	if (typeof navigator.userAgent !='undefined') {
		if (navigator.userAgent.search('Googlebot')>-1) return;
		if (navigator.userAgent.search('BrowserMob')>-1) return;
	}

	cbar_country = '';
cbar_temp = cbar_Sizzle('.saje-country-selector .current-country span.selected-states');
if(cbar_temp.length>0){
	cbar_country = cbar_temp[0].innerHTML.replace(/^\s+|\s+$/g,"").toLowerCase();
}

if(cbar_country == "canada"){

	cbar_sid = 21730;
	
}else if(cbar_country == "united states"){

	cbar_sid = 217301;
	
}else if(cbar_country == "international"){

	cbar_sid = 217302;
	
}else{
	return;
}



cbar_widget_show	= false;	//turn this on (set to true) only when ready for production, otherwise use widget_show=true as URL parameter to view the widgets in test mode
cbar_widget 		= false;		//required for widgets
cbar_num_widgets	= 1			//Set number of widgets in a page

//cbar_catmode 		= 2;		//not required in new scraping mode.
cbar_encode 		= '';		//set according to the encoding of the website. eg utf-8

// General associating variables
var cbar_temp		= '';
var cbar_temp2 		= '';
var cbar_match		= '';
var cbar_pattern 	= '';
var cbar_arr 		= '';
cbar_c_from_p		= true;


cbar_auto_oos= true; 

//cbar_md=true;


cbar_cookiedomain	= '.saje.com';	//replace  domain.com with actual site domain	

//handle any test environmnets. we don't want to save any test env urls.
if (window.location.href.match(/(:\/\/[0-9.]+)\//) !=null) cbar_ro=1;
if (window.location.href.search('localhost') >-1 ) cbar_ro=1;

//handle urls with google translation as read only

if(cbar_url.toLowerCase().search('translate.googleusercontent.com')>-1) cbar_ro=true;

//##replace it with actual domain name.

if(document.location.hostname.toLowerCase().search('dev.saje') > -1) cbar_ro = true;

if (cbar_url.search ('utm') >-1) cbar_ro=true;
if (cbar_url.search ('gclid') >-1) cbar_ro=true;


// Widget titles
cbar_recstep_titles = []; // required temporarily
cbar_recstep_titles[1]		= "Customers Who Viewed This Product Also Viewed";
cbar_recstep_titles[2]		= "Top Sellers";
cbar_recstep_titles[3]		= "Recently Viewed"
cbar_recstep_titles[4]		= "Customers Who Bought This Product Also Bought";
cbar_recstep_titles[5]		= "You Might Also Like";
cbar_recstep_titles[6]		= "You Might Also Like";
cbar_recstep_titles[7]		= "Customers Who Bought This Product Also Bought";
cbar_recstep_titles[8]		= "Top Sellers";
cbar_recstep_titles[9]		= "Customers With Similar Searches Also Viewed";
cbar_recstep_titles[10]		= "Customers Who Bought Products You Own Also Bought";
cbar_recstep_titles[11]		= "Recommended For You";
cbar_recstep_titles[12]		= "Top Sellers From Recent Categories You Visited";
cbar_recstep_titles[13]		= "Recommendations Based On Your Google Search";
cbar_recstep_titles[19]		= "What Other Customers Are Buying Right Now";
cbar_recstep_titles[18]		= "What do customers ultimately buy after viewing this item?";
cbar_recstep_titles[100]	= "You Might Also Like";


// determines the widget that are shown on the pages. Required for display of widgets. 
//Can be different from site to site. Below cbar_flow displays "Recently Viewed" items in the widget.
cbar_flow="H0:1,4,3,13,10.0.0.0.0.1,5.9,12,8;H1:1,0,0,0,0;P0:1,2,3,13,1,5,2;P1:1,2,4.4,4.2,2;C0:1,2,3,13,5.0,2.0;C1:1,0,0,0,0;Sc0:1,2,3,7.4,7.2.0.0.7,11.4,11.2.0.0.7;Sc1:1,0,0,0,0";

//standard flow
//cbar_flow="H0:1,4,13,10.0.0.0.0.1,5.9,12,8,3;H1:1,0,0,0,0;P0:1,8-12,13,1,22.0.0.1.9,5,2;P1:1,2,4.4,4.2,2;C0:1,2,13,5.0,2.0;C1:1,0,0,0,0;Sc0:1,2,7.4,7.2.0.0.7,11.4,11.2.0.0.7,3;Sc1:1,0,0,0,0";


//New Mode: reset extra variables with a space to support new mode (in new mode , empty fields do not get updated)
cbar_extra1=" "; //deal with old price that has been removed
cbar_extra2 = " "; 	
//cbar_extra3 = " "; 	


cbar_after_load= function  (cbar_mode){

	if ( cbar_mode == 'widget') {
			for (var group_ctr=0; group_ctr <cbar_results.length; group_ctr++){
	            for (var t=0; t < cbar_results[group_ctr].length ; t++){
					
					//decode extra vars
					cbar_results[group_ctr][t][16] = decodeURIComponent(cbar_results[group_ctr][t][16]);
					cbar_results[group_ctr][t][17] = decodeURIComponent(cbar_results[group_ctr][t][17]);
					cbar_results[group_ctr][t][18] = decodeURIComponent(cbar_results[group_ctr][t][18]);
					
					//trim spaces in extra variables.
					cbar_results[group_ctr][t][16] = cbar_results[group_ctr][t][16].replace(/^\s+|\s+$/g,'');
					cbar_results[group_ctr][t][17] = cbar_results[group_ctr][t][17].replace(/^\s+|\s+$/g,'');
					cbar_results[group_ctr][t][18] = cbar_results[group_ctr][t][18].replace(/^\s+|\s+$/g,'');
					
					
				}
	        }
		}
	
} // end

cbar_after_show= function  ( mode){
	if (mode == 'widget') { 
		for (var group_ctr=0; group_ctr <cbar_results.length; group_ctr++){
			for (var t=0; t < cbar_results[group_ctr].length ; t++){
				
				tmp = cbar_Sizzle("");	//hide default widget if any
				if(tmp.length>0 && group_ctr==0){
					tmp[0].style.display="none";
				}
				
				//display old price if any in extra1 var
				if (cbar_results[group_ctr][t][16] != "") { //if extra1 is not empty
					tmp = cbar_Sizzle('div#cbar_w'+ group_ctr +'_'+t+'_item_xtr1_s');					
					if(tmp.length){
						tmp[0].style.display="";
					}
				}
								
			}
		}
	}
} //end


cbar_ga_eventtrack = function(link,category,action,opt_label){

  if (typeof(ga) != 'undefined') {
	  ga('send','event', category, action, opt_label);
	  return;
  }
  
   else if (typeof(_gaq) != 'undefined') {
	  _gaq.push(['_trackEvent', category, action, opt_label]);
	  return;
  }    	
  
}



//Covert pid_orig to crc
function convertToCRC(str)
{
	crc = Math.abs(cbar_crc32.genBytes(str))
	 if( crc & 0x80000000){
		 crc ^= 0xffffffff;
		  crc += 1;
	  }

	 return crc;
}


//crc32

cbar_crc32 = {
	
    table:"00000000 77073096 EE0E612C 990951BA 076DC419 706AF48F E963A535 9E6495A3 0EDB8832 79DCB8A4 E0D5E91E 97D2D988 09B64C2B 7EB17CBD E7B82D07 90BF1D91 1DB71064 6AB020F2 F3B97148 84BE41DE 1ADAD47D 6DDDE4EB F4D4B551 83D385C7 136C9856 646BA8C0 FD62F97A 8A65C9EC 14015C4F 63066CD9 FA0F3D63 8D080DF5 3B6E20C8 4C69105E D56041E4 A2677172 3C03E4D1 4B04D447 D20D85FD A50AB56B 35B5A8FA 42B2986C DBBBC9D6 ACBCF940 32D86CE3 45DF5C75 DCD60DCF ABD13D59 26D930AC 51DE003A C8D75180 BFD06116 21B4F4B5 56B3C423 CFBA9599 B8BDA50F 2802B89E 5F058808 C60CD9B2 B10BE924 2F6F7C87 58684C11 C1611DAB B6662D3D 76DC4190 01DB7106 98D220BC EFD5102A 71B18589 06B6B51F 9FBFE4A5 E8B8D433 7807C9A2 0F00F934 9609A88E E10E9818 7F6A0DBB 086D3D2D 91646C97 E6635C01 6B6B51F4 1C6C6162 856530D8 F262004E 6C0695ED 1B01A57B 8208F4C1 F50FC457 65B0D9C6 12B7E950 8BBEB8EA FCB9887C 62DD1DDF 15DA2D49 8CD37CF3 FBD44C65 4DB26158 3AB551CE A3BC0074 D4BB30E2 4ADFA541 3DD895D7 A4D1C46D D3D6F4FB 4369E96A 346ED9FC AD678846 DA60B8D0 44042D73 33031DE5 AA0A4C5F DD0D7CC9 5005713C 270241AA BE0B1010 C90C2086 5768B525 206F85B3 B966D409 CE61E49F 5EDEF90E 29D9C998 B0D09822 C7D7A8B4 59B33D17 2EB40D81 B7BD5C3B C0BA6CAD EDB88320 9ABFB3B6 03B6E20C 74B1D29A EAD54739 9DD277AF 04DB2615 73DC1683 E3630B12 94643B84 0D6D6A3E 7A6A5AA8 E40ECF0B 9309FF9D 0A00AE27 7D079EB1 F00F9344 8708A3D2 1E01F268 6906C2FE F762575D 806567CB 196C3671 6E6B06E7 FED41B76 89D32BE0 10DA7A5A 67DD4ACC F9B9DF6F 8EBEEFF9 17B7BE43 60B08ED5 D6D6A3E8 A1D1937E 38D8C2C4 4FDFF252 D1BB67F1 A6BC5767 3FB506DD 48B2364B D80D2BDA AF0A1B4C 36034AF6 41047A60 DF60EFC3 A867DF55 316E8EEF 4669BE79 CB61B38C BC66831A 256FD2A0 5268E236 CC0C7795 BB0B4703 220216B9 5505262F C5BA3BBE B2BD0B28 2BB45A92 5CB36A04 C2D7FFA7 B5D0CF31 2CD99E8B 5BDEAE1D 9B64C2B0 EC63F226 756AA39C 026D930A 9C0906A9 EB0E363F 72076785 05005713 95BF4A82 E2B87A14 7BB12BAE 0CB61B38 92D28E9B E5D5BE0D 7CDCEFB7 0BDBDF21 86D3D2D4 F1D4E242 68DDB3F8 1FDA836E 81BE16CD F6B9265B 6FB077E1 18B74777 88085AE6 FF0F6A70 66063BCA 11010B5C 8F659EFF F862AE69 616BFFD3 166CCF45 A00AE278 D70DD2EE 4E048354 3903B3C2 A7672661 D06016F7 4969474D 3E6E77DB AED16A4A D9D65ADC 40DF0B66 37D83BF0 A9BCAE53 DEBB9EC5 47B2CF7F 30B5FFE9 BDBDF21C CABAC28A 53B39330 24B4A3A6 BAD03605 CDD70693 54DE5729 23D967BF B3667A2E C4614AB8 5D681B02 2A6F2B94 B40BBE37 C30C8EA1 5A05DF1B 2D02EF8D",
    
	stringToBytes: function( str ) { 
		var ch, st, re = [], j=0;
		for (var i = 0; i < str.length; i++ ) { 
			ch = str.charCodeAt(i);
			if(ch < 127)
			{
				re[j++] = ch & 0xFF;
			}
			else
			{
				st = [];    // clear stack
				do {
					st.push( ch & 0xFF );  // push byte to stack
					ch = ch >> 8;          // shift value down by 1 byte
				}
				while ( ch );
				// add stack contents to result
				// done because chars have "wrong" endianness
				st = st.reverse();
				for(var k=0;k<st.length; ++k)
					re[j++] = st[k];
			}
		}   
		// return an array of bytes
		return re; 
	},
		
	
	//This will probably match php's crc32
    genBytes:function(str, crc ) { 
        var bytes = this.stringToBytes(str)
        if( crc == window.undefined ) crc = 0; 
        var n = 0; //a number between 0 and 255 
        var x = 0; //a hex number 

        crc = crc ^ (-1); 
        for( var i = 0, iTop = bytes.length; i < iTop; i++ ) { 
            n = ( crc ^ bytes[i] ) & 0xFF; 
            x = "0x" + this.table.substr( n * 9, 8 ); 
            crc = ( crc >>> 8 ) ^ x; 
        } 
        crc = crc ^ (-1)
        //convert to unsigned 32-bit int if needed
        if (crc < 0) {crc += 4294967296}
        return crc; 
    }
};






// Home page scraping
if(typeof(globalData) != "undefined" && typeof(globalData.pageCategory) != "undefined" && globalData.pageCategory != "" && globalData.pageCategory == "home") {
	cbar_home = true;
}
	
// Category page scraping . Scrape for cid and cname(optional)
if( (typeof(globalData) != "undefined" && typeof(globalData.pageType) != "undefined" && globalData.pageCategory != "undefined" && globalData.pageType == "category") && cbar_url.toLowerCase().search('kates-faves')==-1) {    

	cbar_temp = document.location.pathname.split('/').reverse();
	
	if(cbar_temp.length>1){
		
		cid_tmp = cbar_temp[1].toLowerCase();
		cid_tmp_cat = (globalData.pageCategory).toLowerCase();
		
		if(cid_tmp == cid_tmp_cat){			
			cbar_cid = cid_tmp_cat;
			cbar_createCookie('cbar_last_cid',encodeURIComponent(cbar_cid));
			
		}
	}

 }


// Product page scraping
cbar_temp = cbar_Sizzle ('#pdpMain');
if (cbar_temp.length>0){
	
	// Cbar Pid. 
	
	
	cbar_temp = cbar_url.match(/\/([^\/]*).html/);
	if(cbar_temp != null && cbar_temp.length>1 && cbar_temp[1].length>0){
		cbar_pid = cbar_temp[1].replace(/^\s+|\s+$/g,"").toLowerCase();
	}
	
	if (cbar_pid.search('tel:') >-1) { // on Ipad/iphone a number is turned into <a href="tel:1102373">1102373</a>
		cbar_pattern = /([0-9]+)/gim; 
		cbar_match= cbar_pattern.exec(cbar_pid); 
		if (cbar_match!=null && cbar_match[1].length>0) cbar_pid= cbar_match[1]; 
	}
	
	//name	
	cbar_temp = cbar_Sizzle('h1.product-name');
	if (cbar_temp.length>0) 
		cbar_name = cbar_temp[0].innerHTML;
	
	var tmp = cbar_Sizzle('h1.product-name-extension') //product description
	if (tmp.length) cbar_extra2 = tmp[0].innerHTML.replace(/^\s+|\s+$/g,"").replace('&amp;','&');
	
	
	//purl. (query parameters required for loading correct product page must be tested and included in the url, by default no parameters are included) 
	var tmp = window.location.href.split("?");
	temp = tmp[0].split('#');
	if(temp.length){
		cbar_purl = temp[0];
	}
	
	// Cbar cid and parent category
	cbar_cid_tmp = document.referrer.replace(/^\/|\/?$/g,'').split("/").reverse(); 
	
	if(cbar_cid_tmp.length){
		tmp = cbar_cid_tmp[0];
	}
	
	if(tmp && decodeURIComponent(cbar_readCookie('cbar_last_cid')) != "false" && decodeURIComponent(cbar_readCookie('cbar_last_cid')) != "null" && ( tmp == decodeURIComponent(cbar_readCookie('cbar_last_cid')) )){
		
		cbar_cid = decodeURIComponent(cbar_readCookie('cbar_last_cid'));
		cbar_createCookie('cbar_last_cid',false);
		
	}
	
	
	//out of stock. 
	cbar_temp = cbar_Sizzle ('#add-to-cart.buttonctaone');
	if (cbar_temp.length>0){
		cbar_oos = 1;
	} else {
		cbar_oos = 0;
	}
		
	//Product image
	// Important: Always scrape medium or large size images for product image. If you need to scrape thumbnail images (for example to display in the widget) scrape it in extra variables explained below
	var cbar_temp = cbar_Sizzle('.product-primary-image img.primary-image'); //generally from main image tag
	if (cbar_temp.length>0) {
		
		cbar_pic = cbar_temp[0].src;	 //Getting images of 340 height and width
		if(cbar_pic.search('localhost')>-1) cbar_pic = '';
		if(cbar_pic.search(/[0-9]\/bmi\//)>-1) cbar_pic = '';	//ignore dev server image urls.	
		cbar_extra3 = cbar_pic;
		
	}
	
		 
	//Product Price
	cbar_temp = cbar_Sizzle('div.product-price span.price-sales');
	if (cbar_temp.length>0){ 
		cbar_pri = cbar_temp[0].innerHTML.replace(/^\s+|\s+$/g,""); // trim white spaces
	}

	//Old Price
	cbar_temp = cbar_Sizzle('div.product-price span.price-standard');
	if (cbar_temp.length>0){ 
		cbar_extra1 = cbar_temp[0].innerHTML.replace(/^\s+|\s+$/g,""); // trim white spaces
	}

	
	//single add to cart
	jQuery(".product-add-to-cart .js-product-qty-dd button#add-to-cart").unbind('click.bari').bind('click.bari', function(){ 
				
		cbar_temp = cbar_Sizzle('.product-add-to-cart .js-product-qty-dd select#productquantityupdate');
		if(cbar_temp.length>0){
			qty = cbar_temp[0].value;
		}
		if(cbar_oos != 1){		//Checking if the product is not oos then only do single add to cart 
			cbar_add_to_cart(cbar_pid,qty,0);			
		}
	});
	
}	//end product page	


	
//Search page scraping
if ((cbar_url.toLowerCase().search('/search-show')>-1) && (cbar_url.toLowerCase().search('q=')> -1)){

	cbar_search = cbar_gup('q');	//scrape the search keyword. generally from url parameter
}


// Shopping Cart scraping.
if (cbar_url.toLowerCase().search('/cart/')>-1) {

	//cbar_pur_mode	= 1;	//Turn this on when sending items list by product names, instead of product ids (recommended)

	cbar_is_pur		= 1;
	
	//cbar_crtn 		= 0;	//the number of different items in the cart and not their quantities.
	
	cbar_pur_pids	= [];	//stores either product ids (recommended) or product names or products in cart
	cbar_pur_qtys	= [];	//quantity of each product in cart
	
	

	var cbar_temp = cbar_Sizzle('#cart-items-form #cart-table tr.cart-row td.item-details .product-list-item .name a');
	for (var nodei=0; nodei < cbar_temp.length; nodei++){
		pid_tmp = cbar_temp[nodei].href.match(/\/([^\/]*).html/);		
		if(pid_tmp == null){
			pid_tmp = cbar_temp[nodei].href.match("/\s/(.*)/");
		}
		
		if(pid_tmp != null && pid_tmp.length>1 && pid_tmp[1].length){

			cbar_pur_pids.push(decodeURIComponent(pid_tmp[1].toLowerCase()));	//push product id/name. Make sure PIDs are lowerCased if they are alpha-numeric
			

			//Crc logging
			var crc = convertToCRC(pid_tmp[1].toLowerCase());
			var url = '';
			url = decodeURIComponent(cbar_temp[nodei].href);
			cbar_log += crc + "|" + decodeURIComponent(pid_tmp[1].toLowerCase()) + "|" + url + ", ";
			//Crc logging

			
		}		
	}
	cbar_log = "Full Cart for "+cbar_country+" and sid is "+cbar_sid+" :- "+cbar_log;
	
	var cbar_temp = cbar_Sizzle('.cart-row .item-quantity select.js-cart-quantity-dropdown');
	for (var nodei=0; nodei < cbar_temp.length; nodei++){
		qty_tmp = cbar_temp[nodei].value;
		
		cbar_pur_qtys.push(qty_tmp);	//push product qty
			
	}
		
	//coupon code handling...
	cbar_temp =cbar_Sizzle ('input#dwfrm_cart_couponCode');
	if (cbar_temp.length>0){
		cbar_cou_input= cbar_temp[0];
	}
	
}	//end shopping cart	

if(cbar_url.toLowerCase().search('coshipping-singleshipping') > -1) { 

	//coupon code handling...
	cbar_temp =cbar_Sizzle ('input#dwfrm_billing_couponCode');
	if (cbar_temp.length>0){
		cbar_cou_input= cbar_temp[0];
	}

}



//coupon code callbacks

// ONLY USE WHEN THERE IS PAGE REFRESH IN COUPON SUBMISSION
cbar_before_cou_inj = function (input){
    // avoid infinite loop when injecting coupon causes page refresh
    var coupon_injected = cbar_readCookie('cbar_cou_inj' );
    if ( (coupon_injected==null) || (coupon_injected=="false") ) {
        cbar_createCookie('cbar_cou_inj',true );
        return true;
    }
    else {
        cbar_createCookie('cbar_cou_inj',false );
        return false; // don't inject
    }

}

cbar_after_cou_inj = function (input){	
	
	
	if(cbar_url.toLowerCase().search('coshipping-singleshipping') > -1) { 
	
		jQuery('.billing-coupon-code .coupon-apply #add-coupon').trigger('click');	
	
	}else{
	
		window.onbeforeunload=null;  // prevent leaving page events by the coupon apply page refresh (use only when coupon refreshes page)
		jQuery(".cart-coupon-code #add-coupon").trigger('click');	
	}
	
}	
//end coupon code callbacks


// Scrape email inputs.

// Login
if(cbar_url.toLowerCase().search('/cocustomer-start') > -1) { 
	
	cbar_e_input= cbar_Sizzle ("input[id^='dwfrm_login_username_']");
	cbar_e_com=true;	
	
}

// Register /Sign Up
if(cbar_url.toLowerCase().search('/account-register/') > -1) { 
	
	cbar_e_input= cbar_Sizzle ("input#dwfrm_profile_customer_email");
	cbar_e_com=true;	
	
}

if(cbar_url.toLowerCase().search('coshipping-singleshipping') > -1) { 
	
	cbar_e_input= cbar_Sizzle ("input#dwfrm_billing_billingAddress_email_emailAddress");
	cbar_e_com=true;	
	
} 

//email from popup 
	cbar_waitforelement('.header-login-account .login-box-content form#dwfrm_login input[id^="dwfrm_login_username_"]',function( element ){
			cbar_em_listen(element[0]);
			cbar_e_com=true;
	});
//end email


// Thank You Page scraping. (possible only after purchase is made)
if  (cbar_url.toLowerCase().search('cosummary-submit')>-1) {  
	
	cbar_is_pur		= 1;			
	cbar_pur_com	= true;	//actual buy took place
	
} // end thank you


// Widgets Begin

//common widget variables
cbar_w_title_len	= 50;	//max length of product titles displayed on widget.


//for multiline widgets use:
//cbar_w_linebreak_template[0]='<br style="clear:both"/>';
//cbar_w_iconsperline[0]=4;

//example  Home Page Widget (simple widget)

/*
* NOTE:
* There can be more than 1 widget on one page (max 2). For second widget simply replace the  '0' with '1' in 
* all the widget variables and array.
*
 */

if (cbar_home){	
	
	//Scrape anchor element, around which the widget displays itself on the page
	cbar_temp = cbar_Sizzle('');
	if (cbar_temp.length>0){
		cbar_w_anchor[0]=cbar_temp[0];
	}
	
	

	cbar_w_numshowicons[0] = 3; //number items shown in the widget
	cbar_w_insert_where[0] = 0;	//determines the position of widget with reference to anchor element possible values 0 = after the anchor, 1= before the anchor, 2= inside the anchor	
	
	// styles
	cbar_w0_wrap_s				= '';
	cbar_w0_header_s			= '';
	cbar_w0_items_s				= '';
	cbar_w0_item_s				= '';
	cbar_w0_item_a_s			= '';
	cbar_w0_item_img_s			= '';
	cbar_w0_item_perc_pur_s		= '';
	cbar_w0_item_perc_pur2_s	= '';
	cbar_w0_item_title_s		= '';
	cbar_w0_item_xtr1_s			= '';
	cbar_w0_item_xtr1_in_s		= '';
	cbar_w0_item_price_s		= '';
	cbar_w0_item_price_in_s		= '';
	cbar_w0_item_xtr2_s			= '';
	cbar_w0_item_xtr2_in_s		= '';
	cbar_w0_item_xtr3_s			= '';
	cbar_w0_item_xtr3_in_s		= '';

	// html   	
	//widget head
	cbar_w_template_head[0]='<div  id="cbar_widget0" style="'+cbar_w0_wrap_s+'"><div id="cbar_w0_header_s" style="'+cbar_w0_header_s+'">%group_title%</div>'+
	'<div id="cbar_w0_items_s" style="'+cbar_w0_items_s+'">';
    
	//widget items
	cbar_w_item_template[0]='<div id="cbar_w0_%t%_item_s" style="'+cbar_w0_item_s+'">'+
	        '<a id="cbar_w0_%t%_item_a_s" style="'+cbar_w0_item_a_s+'"  onclick="cbar_ga_eventtrack(this, \'Barilliance\', \'Home\', \'%title%\'); return cbar_click3(this, \'%url%\', %rectype%, %idx%,\'%pid%\');" href="%url%">'+
	        '<img id="cbar_w0_%t%_item_img_s" style="'+cbar_w0_item_img_s+'"  src="%picture%">'+
	        '<div  id="cbar_w0_%t%_item_perc_pur_s"  style="display:none; '+cbar_w0_item_perc_pur_s+'">%perc_purchased%% buy:</div>'+ // % purchased this item
	        '<div  id="cbar_w0_%t%_item_perc_pur2_s"  style="display:none; '+cbar_w0_item_perc_pur2_s+'">%perc_purchased%% buy the item featured on this page:</div>'+ // % purchased item on this page
	        '<div  id="cbar_w0_%t%_item_title_s"  style="'+cbar_w0_item_title_s+'">%title%</div></a>'+
	        '<div  id="cbar_w0_%t%_item_xtr1_s"  style="display:none; '+cbar_w0_item_xtr1_s+'">Regular price: <span id="cbar_w0_%t%_item_xtr1_in_s" style="'+cbar_w0_item_xtr1_in_s+'">%xtr1%</span></div>'+
	        '<div  id="cbar_w0_%t%_item_price_s"  class= "relatedprice" style="'+cbar_w0_item_price_s+'"><span id="cbar_w0_%t%_item_price_in_s" style="'+cbar_w0_item_price_in_s+'">%price%</span></div>'+
	        '<div  id="cbar_w0_%t%_item_xtr2_s"  style=" display:none;'+cbar_w0_item_xtr2_s+'">:<span id="cbar_w0_%t%_item_xtr2_in_s" style="'+cbar_w0_item_xtr2_in_s+'">%xtr2%</span></div>'+
	        '<div  id="cbar_w0_%t%_item_xtr3_s"  style="display:none; '+cbar_w0_item_xtr3_s+'">:<span id="cbar_w0_%t%_item_xtr3_in_s"  style="'+cbar_w0_item_xtr3_in_s+'">%xtr3%</span></div>'+'</div>';

	//widget footer
	cbar_w_template_bottom[0]='</div></div>';
}



// Product Page Widget  (exmaple of scrolling widget)

if (cbar_pid && !cbar_oos_page)
{
	//Scrape anchor element, around which the widget displays itself on the page
	cbar_temp = cbar_Sizzle('');
	if (cbar_temp.length>0){
		cbar_w_anchor[0]=cbar_temp[0];
	}
	
	cbar_w_insert_where[0] 	= 0; 	//determines the position of widget with reference to anchor element possible values 0 = after the anchor, 1= before the anchor, 2= inside the anchor
	
	cbar_w_numshowicons[0] 	= 3; 	//number of items displayed in the scroll at a time
	cbar_numicons1		 	= 8; 	//tells how many items are actually in the widget	(for first scrolling widget you suffix the the variable with 1, for second widget, suffix with 2)	
	cbar_w_scrollbuttons	= true;	//scrolling widget.
	
	
	// styles
	cbar_w0_wrap_s				= '';
	cbar_w0_header_s			= '';
	cbar_w0_items_s				= '';
	cbar_w0_item_s				= '';
	cbar_w0_item_a_s			= '';
	cbar_w0_item_img_s			= '';
	cbar_w0_item_perc_pur_s		= '';
	cbar_w0_item_perc_pur2_s	= '';
	cbar_w0_item_title_s		= '';
	cbar_w0_item_xtr1_s			= '';
	cbar_w0_item_xtr1_in_s		= '';
	cbar_w0_item_price_s		= '';
	cbar_w0_item_price_in_s		= '';
	cbar_w0_item_xtr2_s			= '';
	cbar_w0_item_xtr2_in_s		= '';
	cbar_w0_item_xtr3_s			= '';
	cbar_w0_item_xtr3_in_s		= '';
	
	
	//html	
	//change the paths of arrows in below code
	cbar_w_next_html='<a href="javascript:void(0)"><img style="float:left;width:42px; height:28px; margin-top:0px"  onclick="return cbar_w_next(%i%);" src="/docroot/css/immagini/carosello_freccia_dx.gif"></img></a>';
	cbar_w_prev_html='<a href="javascript:void(0)"><img style="float:left;margin-top:0px"; onclick="return cbar_w_prev(%i%);" src="/docroot/css/immagini/carosello_freccia_sx.gif"></img></a>';

	
	//widget head
	cbar_w_template_head[0]='<div  id="cbar_widget0" style="'+cbar_w0_wrap_s+'"><div id="cbar_w0_header_s" style="'+cbar_w0_header_s+'">%group_title%</div>'+
	'<div style="float:left;">%prevbutton%</div><div id="cbar_w0_items_s" style="'+cbar_w0_items_s+'">';

	//widget items
	cbar_w_item_template[0]='<div id="cbar_w0_%t%_item_s" style="'+cbar_w0_item_s+'">'+
	        '<a id="cbar_w0_%t%_item_a_s" style="'+cbar_w0_item_a_s+'"  onclick="cbar_ga_eventtrack(this, \'Barilliance\', \'Product\', \'%title%\'); return cbar_click3(this, \'%url%\', %rectype%, %idx%,\'%pid%\');" href="%url%">'+
	        '<img id="cbar_w0_%t%_item_img_s" style="'+cbar_w0_item_img_s+'"  src="%picture%">'+
			'%live_notifications%'+
	        '<div  id="cbar_w0_%t%_item_perc_pur_s"  style="display:none; '+cbar_w0_item_perc_pur_s+'">%perc_purchased%% buy:</div>'+ // % purchased this item
	        '<div  id="cbar_w0_%t%_item_perc_pur2_s"  style="display:none; '+cbar_w0_item_perc_pur2_s+'">%perc_purchased%% buy the item featured on this page:</div>'+ // % purchased item on this page
	        '<div  id="cbar_w0_%t%_item_title_s"  style="'+cbar_w0_item_title_s+'">%title%</div></a>'+
	        '<div  id="cbar_w0_%t%_item_xtr1_s"  style="display:none; '+cbar_w0_item_xtr1_s+'">Regular price: <span id="cbar_w0_%t%_item_xtr1_in_s" style="'+cbar_w0_item_xtr1_in_s+'">%xtr1%</span></div>'+
	        '<div  id="cbar_w0_%t%_item_price_s"  class= "relatedprice" style="'+cbar_w0_item_price_s+'"><span id="cbar_w0_%t%_item_price_in_s" style="'+cbar_w0_item_price_in_s+'">%price%</span></div>'+
	        '<div  id="cbar_w0_%t%_item_xtr2_s"  style=" display:none;'+cbar_w0_item_xtr2_s+'">:<span id="cbar_w0_%t%_item_xtr2_in_s" style="'+cbar_w0_item_xtr2_in_s+'">%xtr2%</span></div>'+
	        '<div  id="cbar_w0_%t%_item_xtr3_s"  style="display:none; '+cbar_w0_item_xtr3_s+'">:<span id="cbar_w0_%t%_item_xtr3_in_s"  style="'+cbar_w0_item_xtr3_in_s+'">%xtr3%</span></div>'+'</div>';
	
	//widget footer
	cbar_w_template_bottom[0]='</div><div style="float:left;">%nextbutton%</div></div>';
	
	

}//product page widget end


// Shopping Cart Widget
if (cbar_url.toLowerCase().search('checkout/cart')>-1){

	//add widget code here.

}//shopping cart widget end



function cbar_check_ref(domain) { // example : xxxxxxxx.com    
	var cbar_temp_ref = '';
	var regex = /([^\?]*)/;
	var result = regex.exec(document.referrer); // Remove parameters
	if ( result!=null && result[1]!=null ) 
		cbar_temp_ref = result[1];
	else
		cbar_temp_ref = document.referrer;
	if (cbar_temp_ref.search(domain) == -1) {
		cbar_ro=true;
		return 1; // Didn't come from the domain
	}
	else return 0; // Came from the domain
}
	// check cookiedomain
	// dont check for site 76697 because of accented chars in domain
	if ((typeof cbar_cookiedomain!='undefined') && (document.location.host.search (cbar_cookiedomain.substring(1))==-1) && (cbar_sid != 76697)   ) {
		cbar_log_console('cbar_cookiedomain not set properly');
		return;
	}



	// trim pid to 64 bytes
	if (typeof cbar_pid=='string') cbar_pid=cbar_pid.substring(0, 63);

	// if unsupported browser
	if  (!cbar_in_array(cbar_BrowserDetect.browser, ['Explorer','Safari','Firefox','Chrome','Mozilla','Opera','Edge'])) return; // end script execution
	// Mozilla is for fnac ebook. allow only it
	//if ((cbar_BrowserDetect.browser=='Mozilla') && (cbar_BrowserDetect.version !== 5) && cbar_BrowserDetect.OS!=='Android') return;
	// Mozilla allowed only on android
	//if ((cbar_BrowserDetect.browser=='Mozilla') && cbar_BrowserDetect.OS!=='Android') return;
	// Opera allowed only on android
	if ((cbar_BrowserDetect.browser=='Opera') && cbar_BrowserDetect.OS!=='Android') return;

	// Error detection:
	// cookiedomain setting - does cbar_uid appear more than once in cookie
	 var tmp = document.cookie.split(' cbar_uid'); //space required. other cookies may inc cbar_uid
	 if (tmp.length>2) cbar_elog='cookiedomain_problem';


	// check for user cookie
	cbar_uid=cbar_readCookie ('cbar_uid');
	if (typeof cbar_uid_override =='function') cbar_uid_override();

	if (cbar_uid== null) {
		cbar_uid= Math.ceil(10000000000000*Math.random());
		cbar_createCookie('cbar_uid',cbar_uid,365);

		// check cookies support
		cbar_uid=cbar_readCookie ('cbar_uid');

		if ((typeof cbar_uid=='undefined') || cbar_uid==null ||  isNaN (cbar_uid)) {
			cbar_log_console('cbar cookies disabled or cookiedomain problem');
			return;
		}
	} else {
		cbar_createCookie('cbar_uid',cbar_uid,365); // refresh
	}


	if (!isNaN(cbar_abt) && cbar_abt > 0){
		if (cbar_readCookie ('cbar_abt_'+cbar_abt_key) == null ){
			if  (Math.ceil(100*Math.random()) < cbar_abt) 	cbar_abt = 'b'; else cbar_abt='a';
			if (typeof cbar_override_ab =='function') cbar_abt=cbar_override_ab();
			cbar_createCookie('cbar_abt_'+cbar_abt_key,cbar_abt, 365);
		} else {
			cbar_abt =cbar_readCookie ('cbar_abt_'+cbar_abt_key);
		}
	}
	else cbar_abt='a';// default

	cbar_abt_str="&abt="+cbar_abt;

	if  (typeof cbar_abt_func == 'function') cbar_abt_func (cbar_abt);

	var test_modes= ['cbar_debug_show','cbar_widget_show','cbar_facebook_show','cbar_shortlist_show','cbar_catper_show','cbar_preview_live', 'cbar_cp_show'];
	for (var ii=0; ii< test_modes.length; ii++){
		if (cbar_gup (test_modes[ii]) !="" ){
			if (cbar_gup (test_modes[ii]) =='true')
				cbar_writeStatic(test_modes[ii],'true');
			else
				cbar_writeStatic(test_modes[ii], null);

		}
		// set the variable
		if (cbar_readStatic(test_modes[ii]) !=null) eval ( test_modes[ii]+" = "+ cbar_readStatic(test_modes[ii])+";");

	}

	// for backward compatibility. its replaced by cbar_widget_show. remove in the future
	if (cbar_gup ('widget_show')=="true")   cbar_createCookie('cbar_widget_show','true',365);
	if (cbar_gup ('widget_show')=="false")   cbar_createCookie('cbar_widget_show','false',365);
	if (cbar_readCookie ('cbar_widget_show') =='true') cbar_widget_show = true;

	var temp = cbar_gup ('cbar_preview_rules');

	if (temp !== "") {
		// if prev rules changed
		if (temp ==='false') temp='';
		if (temp ==='true') temp='1';
		cbar_createCookie('cbar_preview_rules',temp,0);
	}

	cbar_preview_rules = cbar_readCookie ('cbar_preview_rules');
	if (cbar_preview_rules == null) cbar_preview_rules= "";

	if (cbar_readCookie ('cbar_ro') =='true') cbar_ro = true;

	//if (cbar_readCookie ('cbar_debug') !==null) cbar_debug = cbar_readCookie ('cbar_debug');

	//if  ((cbar_hidden_mode == true ) && (cbar_show == 'true'))  cbar_hidden_mode = false;

	if (cbar_gup ('cbar_iconprice'))  cbar_showiconprice=true;
	if (cbar_gup ('cbar_rounded'))  cbar_round_corners=true;

	// cat personalization
	if( cbar_cat_personalization == true || cbar_catper_show == true ) cbar_cat_personalize ();

	// content personalization start

	if (cbar_CP) cbar_CP_start();


	// Automatic OOS - if there was a click and its not a product page report OOS page
	if (cbar_auto_oos){
		if ((typeof cbar_pid=='undefined') || (cbar_pid.length==0)) { // not a product page
			var data= cbar_readCookie('cbar_rec_clk');
			if  ( (data !=null)  &&  (data.length >10)){ // click data exists
				var datas = data.split(',');
				if (datas.length>5) { // cbar_click3 implemented so we have original pid
					cbar_pid=decodeURIComponent(datas[5].replace (/\+/g, ' '));
					cbar_oos_page=true;
					cbar_oos=1;
					cbar_createCookie('cbar_rec_clk',  false ,0); // 'delete' cookie (set to false actually)
				}
			}
		}
	}



	if (cbar_nuid >0) cbar_createCookie('cbar_uid',cbar_nuid,365); // #669

	if  (cbar_home) cbar_pagetype ="H";
	if  (cbar_4U) cbar_pagetype ="4U";
	if  (cbar_other) cbar_pagetype ="O";
	if  (cbar_pid) cbar_pagetype ="P";
	if  ((cbar_cid || cbar_pid2cid)  && !cbar_pid) { cbar_pagetype ="C"; cbar_ctitle=document.title ; }
	if  (cbar_brand) cbar_pagetype ="B";
	if  (cbar_is_pur) cbar_pagetype ="Sc";
	if  (cbar_is_checkout) cbar_pagetype ="Co";
	if  (cbar_pur_com) cbar_pagetype ="Pu";
	if  (cbar_search!='') cbar_pagetype="S";
	if  (cbar_oos_page) cbar_pagetype="OOS";

	// update the server on product, home, cat or cart page
	if  (cbar_cid || cbar_pid2cid || cbar_pid || cbar_home || cbar_brand || cbar_4U || cbar_is_pur || cbar_is_checkout || cbar_search || cbar_pagetype=='U' || cbar_pagetype=='O' || cbar_pagetype=='OOS')   {

		  if (cbar_widget_show == true ) cbar_w_init(); 
		 var cbar_str='';


		if (cbar_encode) cbar_str += '&enc='+cbar_encode;
		if (cbar_lang) cbar_str += '&lng='+cbar_lang;
		if (cbar_shf) cbar_str += '&shf=true';

		if (cbar_c_from_p) cbar_str+='&cfp=1';

		if (cbar_dups_ok) cbar_str+='&dups=1';

		if (cbar_block_bt) cbar_str+='&blockbt=1';

		if  (cbar_is_pur) {
			if (cbar_pur_pid_add) cbar_str += '&pid_add='+encodeURIComponent(cbar_pur_pid_add);
			if (cbar_pur_qty_add) cbar_str += '&qty_add='+encodeURIComponent(cbar_pur_qty_add);

			if  ((cbar_pid != undefined) &&(cbar_pid.length >0)){
				cbar_pur_pids.push (cbar_pid);
				cbar_pur_qtys.push (cbar_qty);
			}

			if (cbar_pur_com==true) cbar_str +='&pur_com=true';
			if  (cbar_pur_pids.length >0)
				for (var i=0; i < cbar_pur_pids.length; i++){
					cbar_str +='&pid'+i+'='+encodeURIComponent(cbar_pur_pids[i]);
					cbar_str +="&qty"+i+"="+((typeof cbar_pur_qtys[i] == "undefined")?1:cbar_pur_qtys[i]);

					if (cbar_pur_mode==3){

						if (typeof cbar_pur_imgs[i] !=='undefined') cbar_str +='&img'+i+'='+encodeURIComponent(cbar_pur_imgs[i]);
						if (typeof cbar_pur_names[i] !=='undefined') cbar_str +='&name'+i+'='+encodeURIComponent(cbar_pur_names[i]);
						if (typeof cbar_pur_urls[i] !=='undefined') cbar_str +='&url'+i+'='+encodeURIComponent(cbar_pur_urls[i]);
						if (typeof cbar_pur_prices[i] !=='undefined') cbar_str +='&price'+i+'='+encodeURIComponent(cbar_pur_prices[i]);
						if (typeof cbar_pur_subttls[i] !=='undefined') cbar_str +='&subttl'+i+'='+encodeURIComponent(cbar_pur_subttls[i]);
						if (typeof cbar_pur_xtr1s[i] !=='undefined') cbar_str +='&xtr1'+i+'='+encodeURIComponent(cbar_pur_xtr1s[i]);
						if (typeof cbar_pur_xtr2s[i] !=='undefined') cbar_str +='&xtr2'+i+'='+encodeURIComponent(cbar_pur_xtr2s[i]);
						if (typeof cbar_pur_xtr3s[i] !=='undefined') cbar_str +='&xtr3'+i+'='+encodeURIComponent(cbar_pur_xtr3s[i]);
						if (typeof cbar_pur_xtr4s[i] !=='undefined') cbar_str +='&xtr4'+i+'='+encodeURIComponent(cbar_pur_xtr4s[i]);
					}

				}

			cbar_str += '&pur=1'+'&pur_mode='+cbar_pur_mode+'&pur_add='+cbar_pur_add;
		}

		var cbar_lvt=cbar_readCookie ('cbar_lvt');
		cbar_str +='&lvt='+cbar_lvt;
		var usertime=Math.round(cbar_date.getTime()/1000)
		cbar_createCookie('cbar_lvt', usertime,365);


		cbar_str+='&ut='+usertime;

		// #20131107
		var session_reset=false;
		if (cbar_lvt !=null && (usertime - parseInt(cbar_lvt)) > 3600) session_reset=true;


		cbar_sess=cbar_readCookie ('cbar_sess');
		if ( (cbar_sess==null ) ||  (null==cbar_readCookie ('cbar_sess_pv')) ||  session_reset ){
			if (cbar_sess==null) cbar_sess=0;
			cbar_sess=parseInt(cbar_sess)+1;
			cbar_createCookie('cbar_sess', cbar_sess,365);
		}

		cbar_str +='&ses='+cbar_sess;

		cbar_sess_pv = parseInt(cbar_readCookie ('cbar_sess_pv'));
		if (isNaN(cbar_sess_pv) || session_reset) cbar_sess_pv=1;
		cbar_createCookie('cbar_sess_pv', cbar_sess_pv+1,0);
		cbar_str +='&spv='+cbar_sess_pv;

		if (cbar_cattree)
			for ( var c=0; c< cbar_cat_cids.length; c++ ) cbar_str +='&cid'+c+'='+encodeURIComponent(cbar_cat_cids[c]);
		if (cbar_cat_level !==0) cbar_str += '&cl='+cbar_cat_level;

		if (cbar_cids_cur!='') cbar_str +="&cids_cur="+encodeURIComponent(cbar_cids_cur);
		if (cbar_cids_p!='') cbar_str +="&cids_p="+encodeURIComponent(cbar_cids_p);
		for ( var c=0; c< cbar_cats_l.length; c++ ) cbar_str +='&cids_l'+c+'='+encodeURIComponent(cbar_cats_l[c]);
		for ( var c=0; c< cbar_cats_c.length; c++ ) cbar_str +='&cids_c'+c+'='+encodeURIComponent(cbar_cats_c[c]);

		cbar_str +="&oos="+cbar_oos;
		if (cbar_norecs!=null) cbar_str +="&norecs="+cbar_norecs;

		if (cbar_ne!=null) cbar_str +="&ne="+cbar_ne;
		if (cbar_sa!=null) cbar_str +="&sa="+cbar_sa;
		if (cbar_bs!=null) cbar_str +="&bs="+cbar_bs;
		if (cbar_pd!=null) cbar_str +="&pd="+cbar_pd;
		if (cbar_fl1!=null) cbar_str +="&fl1="+cbar_fl1;
		if (cbar_fl2!=null) cbar_str +="&fl2="+cbar_fl2;

		if (cbar_nuid && (cbar_nuid>0))  cbar_str +="&nuid="+cbar_nuid;

		if (cbar_e_clk==true)  cbar_str +="&eclk=y";
		// if (cbar_fb_clk==true)  cbar_str +="&fbclk=y";

		if (cbar_ba)  cbar_str +="&ba=1";
		if (cbar_md)  cbar_str +="&md=1";
		if (cbar_ro)  cbar_str +="&ro=1";
		if (cbar_wl)  cbar_str +="&wl=1";
		if (cbar_urls_update)  cbar_str +="&urlu=1";
		if (cbar_force_li)  cbar_str +="&fli=1";
		if (cbar_uro)  cbar_str +="&uro=1";
		if (cbar_add_data)  cbar_str +="&add=1";
		if (cbar_cm2_update) cbar_str+="&cm2_u=1";

		if (cbar_ctr1>0)  cbar_str +="&ctr1="+cbar_ctr1;
		if (cbar_ctr2>0)  cbar_str +="&ctr2="+cbar_ctr2;
		if (cbar_ctr3>0)  cbar_str +="&ctr3="+cbar_ctr3;
		if (cbar_liX!=1)  cbar_str +="&liX="+cbar_liX;
		if (cbar_liP!=1)  cbar_str +="&liP="+cbar_liP;
		if (cbar_liL!=1)  cbar_str +="&liL="+cbar_liL;

		if (cbar_flow!='') cbar_str +="&flow="+cbar_flow;

		if (cbar_search!='') cbar_str += '&se='+encodeURIComponent(cbar_search);
		if (cbar_cname!='') cbar_str += '&cname='+encodeURIComponent(cbar_cname);



		//var cbar_preview_live = cbar_readCookie ('cbar_preview_live');

		if (cbar_preview_rules >0 || cbar_preview_live == 'true') {
				var prev_msg_div = window.document.createElement('div');
				prev_msg_div.id= 'prev_msg_div';
				prev_msg_div.style.position='fixed';

				prev_msg_div.style.bottom= "20px";
				prev_msg_div.style.width= "300px";
				prev_msg_div.style.left= Math.floor((Math.random() * 60))+"%";
				//prev_msg_div.style.opacity='0.9';
				prev_msg_div.style.display='block';
				prev_msg_div.style.zIndex='2147483647';
				var msg = '';

								msg+= "<img src='//s3.amazonaws.com/static.barilliance.com/img/barilliance_logo_150x30_w.png'><br style='display:block'/>"
				
				if (cbar_preview_rules == 1) msg+="RULES PREVIEW MODE";
				if (cbar_preview_rules > 1) {
					msg+="PREVIEWING RULE "+cbar_preview_rules+"";
					msg+="<div style='font-size:11px; color:gray; width:100%; line-height:9px;'>Single rule preview runs the rule action.<br/> It does not require the segment to match</div> ";
				}

				if (cbar_preview_live == true) msg+="LIVE PREVIEW MODE";

				msg += '<br/><span style="font-size:15px; background:#1F86C8; color:#DDDDDD; padding:3px;" onclick= "location.href=\'' +cbar_url.replace(/cbar_preview.*/g, "")+(location.search?'&':'?')+'cbar_preview_rules=false\'">Click here to exit</span></div>';

				prev_msg_div.innerHTML =' <div style="font-size:16px; padding:10px; border:1px solid gray; font-weight:bold; color:red;background:rgba(255, 255, 255, 0.9);} ; text-align:center;">'+msg;

				window.document.body.appendChild(prev_msg_div);
		}

		if (cbar_preview_live == true ) cbar_str += '&prev_li=1';
		if (cbar_preview_rules > 0 ) cbar_str += '&prev_ru='+cbar_preview_rules;

		// control group data
		var cg = cbar_readStatic('cg');
		if (cg !=null) cbar_data_params+= cg;

		//if (cbar_readCookie ('cbar_data2') == '1' ) cbar_datajs = 'data2.js.php';

		cbar_rules_str= cbar_readCookie('cbar_rules');
		if (cbar_rules_str != null) cbar_str+="&rul="+cbar_rules_str;
		else cbar_rules_str='';

		cbar_cou_str= cbar_readCookie('cbar_co');
		if (cbar_cou_str != null) cbar_str+="&cou="+cbar_cou_str;

		if (cbar_cou_input !='') cbar_str+='&cou_inj=true';

		cbar_str+='&ref='+encodeURIComponent(document.referrer);

		cbar_str+="&br="+cbar_BrowserDetect.browser+"&v="+cbar_BrowserDetect.version+"&os="+cbar_BrowserDetect.OS;
		if  (typeof  screen.width !='undefined')
			cbar_str+="&scw="+screen.width+"&sch="+screen.height;

		if (cbar_ipuid_get) cbar_str+="&ipuidget=true";
		if (cbar_ipuid_save) cbar_str+="&ipuidsave=true";

		cbar_str+="&th="+cbar_date.getHours();
		cbar_str+="&tdw="+cbar_date.getDay();
		cbar_str+="&tdm="+cbar_date.getDate();

		if (cbar_ui_t!=''){
			cbar_str+="&uit="+encodeURIComponent(cbar_ui_t);
			cbar_str+="&uin="+encodeURIComponent(cbar_ui_n);
			cbar_str+="&uis="+encodeURIComponent(cbar_ui_s);
		}

		for (var cbar_param in cbar2url){
			if (window[cbar_param]!='') cbar_str+="&"+cbar2url[cbar_param]+"="+encodeURIComponent(window[cbar_param]); // dont send empty or 0 values
		}

		if (cbar_lnk!=5)	cbar_str+="&lnk="+cbar_lnk;
		if (cbar_num_widgets!=2)	cbar_str+="&nw="+cbar_num_widgets;

		var cbar_ui_n='';

		if (cbar_fb_fanpage)	cbar_str+="&fbf=1";


		if (typeof  cbar_js_loaded  =='function') cbar_js_loaded();

		// check for custom trust message in cart page
		if (cbar_pagetype=="Sc"){
			// is there a custom message for any of the cart products

			if  (cbar_pur_pids.length >0) {
				for (var i=0; i < cbar_pur_pids.length; i++){
					var msg=cbar_readCookie ('cbar_trust_cartmsg_'+cbar_pur_pids[i])
					if (msg !=null) {
						cbar_str+="&trustcmsg="+encodeURIComponent(msg);
						break;
					}
				}
			}
		}

		if (typeof cbar_viewed_cnt !== 'undefined') cbar_str+="&vcnt="+cbar_viewed_cnt;
		if (cbar_debug_show) cbar_str+="&dbg";

		if (!cbar_demo_mode)
			loadjscssfile (cbar_dynamic_url+cbar_datajs+'?a=pv&sid='+cbar_sid+'&uid='+cbar_uid+'&pid='+encodeURIComponent(cbar_pid)+cbar_str+cbar_data_params+'&url='+cbar_url_en+"&cm="+cbar_catmode+"&pcm="+cbar_pcm+cbar_abt_str+"&pt="+cbar_pagetype+"&"+cbar_any2url('attu',cbar_user_attributes)+"&"+cbar_any2url('attu1',cbar_user_attribute)+"&"+cbar_any2url('attp',cbar_product_attributes)+"&"+cbar_any2url('attud',cbar_del_user_attributes)+"&"+cbar_any2url('attpd',cbar_del_product_attributes)+"&"+cbar_any2url('uinf',cbar_userinfo)+"&ts="+Math.ceil(10000*Math.random()),'js');
		else  cbar_data_returned();

		// 2nd click report - after the page change
		cbar_report_click(false);

		if (typeof cbar_e_input[0] !=='undefined'){
			for (ww=0; ww< cbar_e_input.length; ww++){
				cbar_em_listen (cbar_e_input[ww]);
			}
		}


		if (typeof cbar_e_checkbox[0] !=='undefined') {
			if (cbar_e_checkbox[0].checked) cbar_em_com( true); else cbar_em_com(false); // default value
			cbar_listen('click', cbar_e_checkbox[0] , cbar_e_checkbox_change ) ; // track changes
		}



		// LP integration
		if(cbar_LP) cbar_LP_set();
		cbar_init_ajax_cart();

	}


	 } catch (err){
		cbar_log_console('cbar error: '+err.message + err.stack);
		setTimeout(function(){ cbar_log_error ('cbar error: '+err) }, 8000); // allow page to finish loading before reporting
	 };


		if (!cbar_quiet) try{ window.console && console.info("%cPersonalization by https://www.BARILLIANCE.com  | For support email support@barilliance.com. Your site id is "+cbar_sid +""     , 'color:green ; font-weight:bold'); }catch (err){};
	

} // end cbar_start
function cbar_countdown_timer(rule_id){
	if(typeof window['cbar_countdown_interval'+rule_id]!='undefined')
		clearInterval(window['cbar_countdown_interval'+rule_id]);
	window['cbar_countdown_interval'+rule_id]=setInterval(function(){
		var div_id='.cbar_countdown'+rule_id;
		if(typeof cbar_Sizzle(div_id)[0]=='undefined'){clearInterval(window['cbar_countdown_interval'+rule_id]);return false;}
		var secs_left=cbar_Sizzle(div_id)[0].getAttribute('secs_left');
		secs_left--;

		cbar_Sizzle(div_id)[0].setAttribute('secs_left',secs_left);
		if(secs_left<1){clearInterval(window['cbar_countdown_interval'+rule_id]);return false;}

		//change units
		for(u in cbar_Sizzle(div_id+' .time')){
			unit_secs=cbar_Sizzle(div_id+' .time')[u].getAttribute('unit_secs');
			val_left=Math.floor(secs_left/unit_secs);
			secs_left-=val_left*unit_secs;
			if(val_left.toString().length==1)val_left='0'+val_left;
			cbar_Sizzle(div_id+' .time')[u].innerHTML=val_left;
		}
	}, 1000);
}
function cbar_countdown_timer_inline(rule_id, rule_type, opts){
	var iframeDoc=cbar_Sizzle('#cbar_iframe_'+rule_type+'_'+rule_id)[0].contentWindow.document;
	if(typeof iframeDoc.countdown_interval=='undefined')
	{
		var d = new Date();
		var secs_left= opts.time-(Math.ceil(d.getTime()/1000)+ opts.timediff);
		var html=iframeDoc.body.innerHTML;
		var units={'DD':86400,'HH':3600,'MM':60,'SS':1};

		  for(var u in units){
			  if(html.indexOf(u)>-1){
				html=html.replace(u,'<span class="cbar_countdown'+rule_id+'" rel="'+u+'" secs_left='+secs_left+' unit_secs='+units[u]+'>00</span>');
			  }
		  }
		  iframeDoc.body.innerHTML=html;
		  iframeDoc.countdown_interval_cancel=function (){clearInterval(iframeDoc.countdown_interval);return false;};
		  iframeDoc.countdown_interval=setInterval(function(){
			  if(typeof cbar_Sizzle('#cbar_iframe_'+rule_type+'_'+rule_id)[0]!='object')return iframeDoc.countdown_interval_cancel();
			  var f_units=cbar_Sizzle('.cbar_countdown'+rule_id,cbar_Sizzle('#cbar_iframe_'+rule_type+'_'+rule_id)[0].contentWindow.document.body);
			  if(f_units.length==0)return iframeDoc.countdown_interval_cancel();
			   secs_left=f_units[0].getAttribute('secs_left');
			   secs_left--;
			   if(secs_left<1)return iframeDoc.countdown_interval_cancel();
			  for(var u in f_units)
			  {
				  unit_secs=parseInt(f_units[u].getAttribute('unit_secs'));
				  f_units[u].setAttribute('secs_left',secs_left);
				  val_left=Math.floor(secs_left/unit_secs);
				  secs_left-=val_left*unit_secs;
				  if(val_left.toString().length==1)val_left='0'+val_left;
				  f_units[u].innerHTML=val_left;
			  }
		  }, 1000);
	}
}
// call cbar_start - this must be after cbar_start definition due to FF issue
function cbar_dom_ready () {
	if ( !cbar_isReady ) {
		cbar_isReady = true;
		cbar_start();
		}
	}

	// echo startearly code if any

	
	// end startearly code

	if (cbar_startearly)
		cbar_start();
	else
		cbar_bindReady ();


if (typeof cbar_scraper_start =='function') cbar_scraper_start();




} catch (err){
	cbar_log_console('cbar error: '+err.message + err.stack);
	if (err.name!='dontsend') setTimeout(function(){ cbar_log_error ('cbar error: '+err.message) }, 8000); // allow page to finish loading before reporting.
};
