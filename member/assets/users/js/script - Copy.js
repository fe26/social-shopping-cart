if($.browser.mozilla||$.browser.opera){document.removeEventListener("DOMContentLoaded",$.ready,false);document.addEventListener("DOMContentLoaded",function(){$.ready()},false)}$.event.remove(window,"load",$.ready);$.event.add( window,"load",function(){$.ready()});$.extend({includeStates:{},include:function(url,callback,dependency){if(typeof callback!='function'&&!dependency){dependency=callback;callback=null}url=url.replace('\n','');$.includeStates[url]=false;var script=document.createElement('script');script.type='text/javascript';script.onload=function(){$.includeStates[url]=true;if(callback)callback.call(script)};script.onreadystatechange=function(){if(this.readyState!="complete"&&this.readyState!="loaded")return;$.includeStates[url]=true;if(callback)callback.call(script)};script.src=url;if(dependency){if(dependency.constructor!=Array)dependency=[dependency];setTimeout(function(){var valid=true;$.each(dependency,function(k,v){if(!v()){valid=false;return false}});if(valid)document.getElementsByTagName('head')[0].appendChild(script);else setTimeout(arguments.callee,10)},10)}else document.getElementsByTagName('head')[0].appendChild(script);return function(){return $.includeStates[url]}},readyOld:$.ready,ready:function(){if($.isReady) return;imReady=true;$.each($.includeStates,function(url,state){if(!state)return imReady=false});if(imReady){$.readyOld.apply($,arguments)}else{setTimeout(arguments.callee,10)}}});
$(function(){
	$('.soc-list li').hover(
		function(){
			$(this).find("img").stop().animate({opacity:'0.5'},200)
		},
		function(){
			$(this).find("img").stop().animate({opacity:'1'},200)
		}
	)
	$('.soc-list li').hover(
		function(){
			$(this).find("img").stop().animate({opacity:'0.5'},200)
		},
		function(){
			$(this).find("img").stop().animate({opacity:'1'},200)
		}
	)
	$('.block-1').hover(
		function(){
			$(this).find("img.absolute").stop().animate({opacity:'1'},200)
		},
		function(){
			$(this).find("img.absolute").stop().animate({opacity:'0'},200)
		}
	)
	$('.col-4').hover(
		function(){
			$(this).find("img").stop().animate({opacity:'0.5'},200)
		},
		function(){
			$(this).find("img").stop().animate({opacity:'1'},200)
		}
	)
	$('.block-1').hover(
		function(){
			$(this).find(".b-color-1").css({backgroundColor:'#f3c84b'})
		},
		function(){
			$(this).find(".b-color-1").css({backgroundColor:'#f1f1f1'})
		}
	)
	$('.block-1').hover(
		function(){
			$(this).find(".b-color-2").css({backgroundColor:'#5d8ee0'})
		},
		function(){
			$(this).find(".b-color-2").css({backgroundColor:'#f1f1f1'})
		}
	)
	$('.block-1').hover(
		function(){
			$(this).find(".b-color-3").css({backgroundColor:'#adde6a'})
		},
		function(){
			$(this).find(".b-color-3").css({backgroundColor:'#f1f1f1'})
		}
	)
	$('.block-1').hover(
		function(){
			$(this).find(".b-color-4").css({backgroundColor:'#9f9f9f'})
		},
		function(){
			$(this).find(".b-color-4").css({backgroundColor:'#f1f1f1'})
		}
	)

		$('.button').hover(
		function(){
			$(this).stop().animate({opacity:'0.5'},200)
		},
		function(){
			$(this).stop().animate({opacity:'1'},200)
		}
	)
	
})
 function getNotif(text,type,modal,layout,timeout) {
 //alert,information,error,warning,notification,success
  layout = layout || 'bottomRight';
  timeout = timeout || false;
 modal = modal || false;
  	var n = noty({
  		text: text,
  		type:  type,
		layout: layout,
		timeout:timeout,
		modal: modal,
		dismissQueue: true,
  		theme: 'default'
  	});
  }
  
function confirm(obj){
    var n = noty({
      text: "Anda akan melanjutkan??",
      type: 'alert',
      dismissQueue: true,
      layout: 'center',
	  modal:true,
      theme: 'default',
      buttons: [
        {addClass: 'btn btn-primary', text: 'Ok', onClick: function($noty) {
            $noty.close();
			window.location = $(obj).attr('href');
          }
        },
        {addClass: 'btn btn-danger', text: 'Cancel', onClick: function($noty) {
            $noty.close();
          }
        }
      ]
    });	
	return false;
}