$(document).ready(function() {
	// 初始化
	setTimeout(function() {
		$('#phone').addClass('phoneClosed');
	}, 1200);
	
	// 手机拉出收起事件
	$('#preview-phone').mouseenter(function() {
		if (!$('#phone').hasClass('phoneClosed')) return false;
		$('.previews').addClass('phone-hover');
		$('#phone').addClass('phone-hover').removeClass('phone-hoveroff');
	});
	$('#phone').mouseleave(function() {
		if (!$('#phone').hasClass('phoneClosed')) return false;
		$(this).addClass('phone-hoveroff').removeClass('phone-hover');
		$('.previews').removeClass('phone-hover');
	});
	$('#phone-home, #preview-phone').click(function() {
		if ($('#phone').hasClass('phoneClosed')) {
			$('#phone').removeClass('phone-hover phoneClosed');
			$('.container').removeClass('closephone').addClass('closemenu');
			$('.previews').removeClass('phone-hover');
		}else{
			$('.container').addClass('closephone').removeClass('closemenu');
			setTimeout(function() {
				$('#phone').addClass('phoneClosed');
			}, 1200);
		}
	});
});