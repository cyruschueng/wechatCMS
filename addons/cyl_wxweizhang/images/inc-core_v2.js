(function(){var e=this;var r=function(){var e={};var t=[];var n={};var a={};var o={};var i={};var f={};var c={};var s=null;var u=0;var l=!!(navigator&&navigator.userAgent&&navigator.userAgent.match(/(iPhone\sOS)\s([\d_]+)/));var v={store:true,inc:true,debug:false};var g="./js/";var m=function(e){e&&(g=e)};var d=function(e){e.debug=!!r.config.testEnv;v=e;v.checkFile=!!r.config.checkFile;v.pid=r.config.pid||"0";storeIncLoad.init(v)};var p=function(e){o=e};var h=function(e,r){var t,n=(e||[]).length;for(t=0;t<n;t++){r(e[t])}};var w=function(r){var t=[];h(r,function(r){t.push(e[r])});return t};var _=function(r,t,n){if(r&&typeof r=="function"||t&&typeof t=="function"){return}var a={name:r,req:t,fn:n};if(e[r]){console.log("module "+r+" exists!")}j(a)};var I=function(r){var t=true;h(r,function(r){!e[r]&&(t=false)});return t};var S=function(e){setTimeout(function(){j(e)},0)};var j=function(r){if(e[r.name]){return}if(!f[r.name]){c[r.name]=r;return}if(I(r.req)){e[r.name]=r.fn.apply(null,w(r.req))||{};e[r.name].__name__=r.name;a[r.name]=false;h(n[r.name],function(t){t(e[r.name])});delete n[r.name];T()}else{t.push(r);a[r.name]=true;h(r.req,function(r){if(!e[r]){setTimeout(function(){b(r)},0)}})}};var T=function(){var e;var r=0,n=t.length;for(r=0;r<n;r++){e=t.shift();e&&S(e)}};var b=function(t,i,v){if(e[t]){i&&i(e[t]);return e[t]}f[t]=true;if(!n[t])n[t]=[];if(i&&typeof i=="function"){n[t].push(i)}if(c[t]){S(c[t]);return}if(a[t]||y(t,r.config.testEnv))return;a[t]=true;if(r.config.testEnv){var g=q(t,true);if(!r.config.noTS)g+="?v="+(new Date).getTime();setTimeout(function(){M(g,function(){})},Math.floor(u/4)*80);if(l)u++}else{var m;if(o[t]){m=o[t]}else if(t.indexOf("m_")===0){m="/base.js";if(x(t))m="common"}else if(t.indexOf("p_")===0){m="/pages/"+t.substring(2,t.length)+".js"}else{storeIncLoad.uploadErrorInfo("map_error",t,"","",0);if(v)v(t);return}var d=r.config.staticPath,p=r.config.ver,h=r.config.serverDomain||"http://infocdn.3g.qq.com/g/storeinc",w;d=d+"/"+p;if(m==="common"){p=s.v;w="http://infocdn.3g.qq.com/g/storeinc/infocdn/wap30/common/js/"+p+"/common.js"}else{w=h+d+m}storeIncLoad.loadScript(w,p,M)}};var y=function(e,r){var t=q(e,r);if(i[t])return true;i[t]=true;return false};var q=function(e,t){var n,a;if(o[e]){n=r.config.staticPath+o[e];if(!t)n=o[e]}else if(e.indexOf("m_")===0){a=e.substring(2,e.length);n="/frontend/mods/"+a+"/"+a+".js";if(r.config.fePath){n=r.config.fePath+"/"+a+"/"+a+".js"}if(!t){n="/base.js";if(x(e))n="/common.js"}}else if(e.indexOf("p_")===0){a=e.substring(2,e.length);n=r.config.staticPath+"/pages/"+a+".js";if(!t)n="/pages/"+a+".js"}else{return console.log("未知模块："+e)}return n};var x=function(e){if(!r.config.common_info)return false;if(!s){if(s==="error")return false;try{var t=r.config.common_info;var n=t.split("@");s={v:n[0],s:n[1]}}catch(a){s="error"}}if(s==="error")return false;if(s.s.indexOf(e)!==-1){return true}return false};var M=function(e,r){var t;t=document.createElement("script");t.async=true;t.onload=r;t.onerror=function(){storeIncLoad.uploadErrorInfo("script_load_error",e,"","",0)};t.src=e;document.head.appendChild(t)};var O=function(r,t){delete e[r]};var E=function(r){return e[r]};return{define:_,undefine:O,setPath:m,setMap:p,require:b,loadScript:M,setStoreInc:d,get:E,config:{}}}();define=r.define;require=r.require;e.MT=e.MT||{};e.MT.config=function(e){r.setPath(e.jspath);r.setMap(e.jsmap);r.config=e;r.setStoreInc(e.storeInc)}})();var storeIncLoad=function(){var e={store:true,inc:true,debug:false};var r="mqq_core_inc_fail_ts";var t=864e5*30;var n=31536e3;var a=function(r){e=r};var o=function(e,r){var t=new Array;var n=e.split("/");for(var a=0;a<n.length;a++){if(r!=n[a]){t.push(n[a])}}return t.join("/")};var i=function(){try{var e="localStorage"in window&&window["localStorage"];if(e){localStorage.setItem("storage","");localStorage.removeItem("storage")}return e}catch(r){return false}};var f=function(a,f,m,d){var p=function(r,t,a,o){var i=e.debug?r:s(r,t,0,false);if(i.indexOf("?")!==-1){i=i+"&max_age="+n}else{i=i+"?max_age="+n}a&&a(i,o)};var h=true;var w=i();var _=(new Date).getTime();if(w){try{var I=localStorage.getItem(r);if(I&&_-parseInt(I)<t)h=false}catch(S){h=true}}if(e.store&&w&&h&&!e.debug){var j=o(a,f);var T="999";var b=null;try{b=localStorage.getItem(j);T=localStorage.getItem(j+"?ver")||"999"}catch(y){p(a,f,m,d);return true}var q=T?parseInt(T):-10;var x=parseInt(f);var M=e.inc&&c(T,f)&&b?true:false;var O=s(a,f,q,M);if(b&&q==x&&!e.debug){v(b);d&&d()}else{l(O,function(t){if(t==="status0_error"){try{var n=(new Date).getTime();localStorage.setItem(r,n)}catch(o){}p(a,f,m,d);return true}else{if(M){try{var i=JSON.parse(t);var c=i.data;b=i.modify?u(b,i.chunkSize,c):b}catch(o){g("inc_error",O,t,200,0);p(a,f,m,d);return true}}else{b=t;if(e.checkFile){var s="/*MQQJSFILE*/";if(b.substring(0,13)!==s){g("mark_error",O,t,200,0);p(a,f,m,d);return true}}}try{v(b);d&&d();localStorage.setItem(j,b);localStorage.setItem(j+"?ver",f)}catch(o){g("eval_error",O,t,200,0,o.message);localStorage.removeItem(j);localStorage.removeItem(j+"?ver");p(a,f,m,d);return true}}})}}else{p(a,f,m,d);return true}return false};function c(e,r){var t=e.toString().length===13;var n=r.toString().length===13;if(!t||!n)return false;var a=parseInt(r.substr(r.length-3,3));var o=a>9;return o}function s(e,r,t,n){return n?e.replace(".js","-"+t+"_"+r+".js"):e.replace(".js","-"+r+".js")}function u(e,r,t){var n="";for(var a=0;a<t.length;a++){var o=t[a];if(typeof o=="string"){n+=o}else{var i=o[0]*r;var f=o[1]*r;var c=e.substr(i,f);n+=c}}return n}function l(e,r,t){var n=window.ActiveXObject?new window.ActiveXObject("Microsoft.XMLHTTP"):new window.XMLHttpRequest;var a=(new Date).getTime();n.open("GET",e,true);n.onreadystatechange=function(){if(n.readyState===4){if(n.status===200){r(n.responseText)}else{var o=(new Date).getTime()-a;if(!t&&n.status!==404){g("load_error",e,n.responseText,n.status,o)}if(n.status===0){r("status0_error")}else if(n.status===404){g("load_404_error",e,"",n.status,o)}else{setTimeout(function(){l(e,r,t)},1e3)}}}};return n.send(null)}function v(e){if(e&&/\S/.test(e)){(window.execScript||function(e){window["eval"].call(window,e)})(e)}}function g(r,t,n,a,o,i){var f="http://statistic.3g.qq.com/comlog/comtemplog?logType=load_error&params=";n=n||"";t=t||"";a=a||"";f+=encodeURIComponent(location.href)+",";f+=encodeURIComponent(t)+",";f+=r+",";f+=n.length+",";f+=o+",";f+=a+",";f+=e.pid;if(i)f+=","+i;var c=new Image,s="log"+Math.floor(Math.random()*2147483648).toString(36);window[s]=c;c.onload=c.onerror=c.onabort=function(){c.onload=c.onerror=c.onabort=null;window[s]=null;c=null};c.src=f}return{loadScript:f,xhr:l,init:a,uploadErrorInfo:g}}();