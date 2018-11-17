


$(window).ready(function(){
	ajustSize();
	$(window).resize(function(){
		ajustSize();
	});
})


var ajustSize = function(){
	if ($(window).width() < 991) {
		$('.navbar').find('.nav-item').addClass('btn').css('background-color','rgba(0, 0, 0, 0.7)').css('border-bottom', '0.5px solid #fff');
	}else{
		$('.navbar').find('.nav-item').removeClass('btn').css('background-color','').css('border-bottom', '');
	}
}

$('.bg-ajuste').each(function(){
	let url = "url('" + $(this).data('bg') + "')";
	$(this).css('background-image', url);
});

$('.dropdown').hover(function() {
  $(this).find('.dropdown-menu').slideToggle('3000');
});

