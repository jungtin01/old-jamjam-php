// Created by : Jakcalie
$(document).ready(function(){
	$("tr.line").on('click','.check',function(e){
		e.preventDefault();
		token = $("input[name='_token']").val();
		user_id = $("input[name='user_id']").val();
		id = $(this).attr('data-id');
		level = $(this).val();
		// Ajax
		$.ajax({
			url: 'post/check/'+id,
			type:"PUT",
			data:{'_token':token,'level':level,'user_id':user_id},
			async:true,
			success:function(data){
				if(data.level == 0){
					$(".check[data-id='"+data.id+"']").replaceWith("<button type='button' class='btn btn-success check' value='1' data-id='"+data.id+"'>Check !</button>");
				}else{
					$(".check[data-id='"+data.id+"']").replaceWith("<button type='button' class='btn btn-warning check' value='0' data-id='"+data.id+"'>Uncheck !</button>");
				}
			}
		});
	});

	$(".postDel").click(function(e){
		e.preventDefault();
		token = $("input[name='_token']").val();
		id = $(this).attr('data-id');
		if(confirm("Bạn có chắc chắc muốn xóa ?")){
			// Ajax
			$.ajax({
				url: 'post/'+id,
				type:"DELETE",
				data:{'_token':token},
				async:true,
				success:function(data){
					$(".postDel[data-id='"+data.id+"']").parent().parent().remove();
				}
			});
		}
	});
});