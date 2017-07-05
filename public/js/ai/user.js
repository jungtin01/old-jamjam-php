// User JS 
// Created by : Nguyen Trung Thinh
$(document).ready(function(){
	$("td.username a").click(function(e){
		e.preventDefault();
		user_id = $(this).attr('data-id');
		username = $(this).text();
		level = $(this).parent().parent().find('input[name="level"]').attr('data-level');
		$("input#username").val(username);
		if(level == 0){
			clevel = $('select#level option[value="0"]').attr('selected','selected');
		}else{
			clevel = $('select#level option[value="1"]').attr('selected','selected');
		}
		$("#myModal").modal('show');
	});
});