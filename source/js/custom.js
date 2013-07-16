$(function(){
	$('#menu_bar ul li').hover(function(){
		$(this).find('.drop_down').show();
	},function(){
		$(this).find('.drop_down').hide();
	});
	
	$('#app_meta li a').click(function(){
		var item_id = $(this).parent('li').attr('id');
		$(this).closest('.single_right').find('.appWrapper').addClass('hidden');
		$('#app_' + item_id).removeClass('hidden');
		return false;
	})
	
	$('#webnovae_slider li:first-child').addClass('current');
	$('#webnovae_slider .prev').click(function(){
		if($(this).closest('#webnovae_slider').find('li.current').prev().is('li'))
		{
			$(this).closest('#webnovae_slider').find('li.current').removeClass('current').prev('li').addClass('current', 1000);
		}
	});

	$('#webnovae_slider .next').click(function(){
		if($(this).closest('#webnovae_slider').find('li.current').next().is('li')){
			$(this).closest('#webnovae_slider').find('li.current').removeClass('current').next().addClass('current', 1000);
		}
	});


})