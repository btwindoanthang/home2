$(function(){

	/*hien thi menu tren giao dien mobile*/
	$('#menu-for-rent').click(function(){
		if(!$('#menu-list-for-rent').is(':visible')){
			$('#menu-list-for-rent').css('display','block');
			$('#menu-list-for-sale').css('display','none');
		}else{
			$('#menu-list-for-rent').css('display','none');
		}
	});

	$('#menu-for-sale').click(function(){
		if(!$('#menu-list-for-sale').is(':visible')){
			$('#menu-list-for-sale').css('display','block');
			$('#menu-list-for-rent').css('display','none');
		}else{
			$('#menu-list-for-sale').css('display','none');
		}
	});

	/*END-hien thi menu tren giao dien mobile*/

	// over ride scroll bar
    $('#id-list-new-product').slimScroll({
    	railVisible: true,
    	alwaysVisible: true
    });
});