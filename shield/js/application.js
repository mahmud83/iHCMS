$(function navmenu(){
	/*
	$('.nav-mainmenu li ul').parent().click(function(){
		$('.nav-mainmenu li ul').hide();
		$('.nav-mainmenu > li > a').removeClass('active');
		$(this).children('a').addClass('active').next('ul').show();
	});
	$('.nav-mainmenu li a.active').next('ul').show();
	*/
	$('.nav-mainmenu > li > a').click(function(){
		$('.nav-mainmenu li ul').hide();
		$('.nav-mainmenu > li > a').removeClass('active');
		if ($(this).next('ul').is(':hidden')){
			$(this).addClass('active').next('ul').show();
		} else {
			$(this).next('ul').hide();
		}
	});
	$('.nav-mainmenu > li > ul > li > a').click(function(){
		if ($(this).next('ul').is(':hidden')){
			$(this).find('.accordion-icon').removeClass('icon-plus').addClass('icon-minus');
			$(this).next('ul').show();
		} else {
			$(this).find('.accordion-icon').removeClass('icon-minus').addClass('icon-plus');
			$(this).next('ul').hide();
		}
	});
	$('.nav-mainmenu li a.active').next('ul').show();
	$('.nav-mainmenu li ul li ul').prev('a').append('<i class="accordion-icon icon-plus"></i>');
});

$(function widgetAjax(){
	$('.widget.ajax').each(function(){
		var el 		= $(this),
			url		= el.data('url');
		el.find('.widget-content').load(url);
		el.find('.refresh-btn').click(function(){
			$(this).parents('.widget').find('.widget-content').empty().load(url);
		});
	});
});

$(function checkableTable(){
	$('.table-checkable th input[type=checkbox]').click(function(){
		$(this).parents('.table-checkable').find(':checkbox').attr('checked', this.checked);
	});
});