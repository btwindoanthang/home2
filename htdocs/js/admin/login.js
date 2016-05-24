$("#msg_error").css("display","none");
$(document).keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        var user = $("#log_on_nm").val();
		var pass = $("#psd").val();
		ajax_login(user,pass);		
    }
});
$( "#signin" ).bind( "click", function() {
	var user = $("#log_on_nm").val();
	var pass = $("#psd").val();

	ajax_login(user,pass);
});
function ajax_login(user,pass) {
	jQuery.ajax({  
		type: 'POST',
		url: '/admin/controllers/LoginController.php',
		dataType: "json",
		data: {  
			log_on_nm: user,
			psd: pass,
		},
		beforeSend:function (){
			isLoading = true;
		},
		success: function(result, textStatus, XMLHttpRequest){
			if(result && result.status != '0'){
				$("#msg_error").css("display","block");
				$("#msg_error").html(result.message);
				return false;
			}else{
				window.location = '/admin/views/admin.php';
			}
		},
		error: function(MLHttpRequest, textStatus, errorThrown){  
			$('.loadingAjax').hide();
			isLoading = false;
		}  
	});
	return false;
}
