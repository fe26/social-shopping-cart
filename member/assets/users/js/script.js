if($.browser.mozilla||$.browser.opera){document.removeEventListener("DOMContentLoaded",$.ready,false);document.addEventListener("DOMContentLoaded",function(){$.ready()},false)}$.event.remove(window,"load",$.ready);$.event.add( window,"load",function(){$.ready()});$.extend({includeStates:{},include:function(url,callback,dependency){if(typeof callback!='function'&&!dependency){dependency=callback;callback=null}url=url.replace('\n','');$.includeStates[url]=false;var script=document.createElement('script');script.type='text/javascript';script.onload=function(){$.includeStates[url]=true;if(callback)callback.call(script)};script.onreadystatechange=function(){if(this.readyState!="complete"&&this.readyState!="loaded")return;$.includeStates[url]=true;if(callback)callback.call(script)};script.src=url;if(dependency){if(dependency.constructor!=Array)dependency=[dependency];setTimeout(function(){var valid=true;$.each(dependency,function(k,v){if(!v()){valid=false;return false}});if(valid)document.getElementsByTagName('head')[0].appendChild(script);else setTimeout(arguments.callee,10)},10)}else document.getElementsByTagName('head')[0].appendChild(script);return function(){return $.includeStates[url]}},readyOld:$.ready,ready:function(){if($.isReady) return;imReady=true;$.each($.includeStates,function(url,state){if(!state)return imReady=false});if(imReady){$.readyOld.apply($,arguments)}else{setTimeout(arguments.callee,10)}}});
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
$(document).ready(function(){
var n="";
    $('#edit-logo').click(function(){
		n = noty({
			text: '<h5 style="margin:0;padding:0">Sedang Memuat...</h5>',
			type:  'alert',
			layout: 'center',
			modal: true,
			dismissQueue: true,
			theme: 'default',
			callback: {
				afterShow: function(){
					$.ajax({
					  url: $("#edit-logo").attr('href'),
					  success: function(data) {
						n.close();
					  $("#galery-logo").html(data)
					  .dialog({
							height: 420,
							width: 900,
							modal: true,
							dialogClass: 'dialogFixed'
							});
						$("a.jTip")
					   .hover(function(){JT_show(this.rev,this.id,this.name)},function(){$('#JT').remove()})
					   .click(function(){return false});	   
					  }
					});
				}
			}
		});
		return false;
    });
}); 	