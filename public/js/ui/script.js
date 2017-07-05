// Javascript Custom
// Created By Nguyen Trung Thinh 
$(document).ready(function(){
	$("#btn-conf").click(function(){
		$("#left-content").hide();
		$('#right-content').fadeIn();
		$('li:has(#btn-conf)').addClass('active');
		$("li:has(#btn-home)").removeClass('active');
		$('#right-content').css('width','100%');
	})
	$("#btn-home").click(function(){
		$('#right-content').hide();
		$("#left-content").fadeIn();
		$('li:has(#btn-conf)').removeClass('active');
		$("li:has(#btn-home)").addClass('active');
		$('#left-content').css('width','100%');
	})

	$('.add').click(function(e) {
	    e.preventDefault();
	    if (confirm('Bạn có chắc muốn quẩy')) {
	        if (confirm('Ok để Post bài | Cancel để Confess')) {
	            window.location.href = urlAdd;
	        } else {
	            window.location.href = urlConf;
	        }
	    }
	});
	// bắt sự kiện scroll
	
	
	var lastScrollTop = 0;
	$(window).scroll(function(event){
		var width = $(window).width();
		var st = $(this).scrollTop();
		if (st > lastScrollTop){
			if( width <= 1000 ){
				$('.navbar').fadeOut('slow');
			}
		} else {
			if( width <= 1000 ){
				$('.navbar').fadeIn('slow');
			}
		}
		lastScrollTop = st;
	});
});
