// Cate.js for handle [check|delete] conf
// Updated : 4/7/2017 | Created by : Jakcalie

$(document).ready(function(){
	$("tr.line").on('click','.confCheck',function(e){
		e.preventDefault();
		token = $("input[name='_token']").val();
		user_id = $("input[name='admin_id']").val();
		id = $(this).attr('data-id');
		level = $(this).val();
		// Ajax
		$.ajax({
			url: 'conf/'+id,
			type:"PUT",
			data:{'_token':token,'level':level,'user_id':user_id},
			async:true,
			success:function(data){
				if(data.level == 0){
					$(".confCheck[data-id='"+data.id+"']").replaceWith("<button type='button' class='btn btn-success confCheck' value='1' data-id='"+data.id+"'>Check !</button>");
				}else{
					$(".confCheck[data-id='"+data.id+"']").replaceWith("<button type='button' class='btn btn-warning confCheck' value='0' data-id='"+data.id+"'>Uncheck !</button>");
				}
			}
		});
	});

	$(".confDel").click(function(e){
		e.preventDefault();
		token = $("input[name='_token']").val();
		id = $(this).attr('data-id');
		if(confirm("Bạn có chắc chắc muốn xóa ?")){
			// Ajax
			$.ajax({
				url: 'conf/'+id,
				type:"DELETE",
				data:{'_token':token},
				async:true,
				success:function(data){
					$(".confDel[data-id='"+data.id+"']").parent().parent().remove();
				}
			});
		}
	});

});