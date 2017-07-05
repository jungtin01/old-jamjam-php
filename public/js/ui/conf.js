// conf JS UI
// Create by : Jakcalie 
$(document).ready(function(){
	$(".conf-add").click(function(e){
		e.preventDefault();
		txtContent = CKEDITOR.instances['txtContent'].getData();
		token = $("input[name='_token']").val();
		// Ajax
		$.ajax({
			url: urlConfAdd,
			type: 'POST',
			data: {'_token':token,'content':txtContent,'user_id':user_id},
			async:true,
			success:function(data){
				$(".alertContainer").append("<div class='alert alert-success alert-add' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Bạn đã đăng Confession Thành công</div>");
				$(".alert-add").delay(3000).slideUp(500);
				txtContent = CKEDITOR.instances['txtContent'].setData('');
			}

		});
	});
});