window.MyUtil=function(){var a=this;return this.is_touch_device=function(){return"ontouchstart"in window||"onmsgesturechange"in window},this.fbShare=function(a,b,c,d,e,f){var g=screen.height/2-f/2,h=screen.width/2-e/2;window.open("http://www.facebook.com/sharer.php?s=100&p[title]="+b+"&p[summary]="+c+"&p[url]="+a+"&p[images][0]="+d,"sharer","top="+g+",left="+h+",toolbar=0,status=0,width="+e+",height="+f)},this.getQueryStringValue=function(a){return decodeURIComponent(window.location.search.replace(new RegExp("^(?:.*[&\\?]"+encodeURIComponent(a).replace(/[\.\+\*]/g,"\\$&")+"(?:\\=([^&]*))?)?.*$","i"),"$1"))},a}();