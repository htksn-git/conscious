$('.tab__btn').click(function() {
	var index = $('.tab__btn').index(this);
	$('.tab__btn, .tab__content').removeClass('active');
	$(this).addClass('active');
	$('.tab__content').eq(index).addClass('active');
});
