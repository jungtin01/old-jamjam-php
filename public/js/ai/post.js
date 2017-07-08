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

	$(".postEdit").click(function(e){
		e.preventDefault();
		urlEdit = $(this).attr('data-route');
		imgAsset = $('input[name="img-asset"]').val();
		$.ajax({
			url:urlEdit,
			type:"GET",
			async:true,
			success:function(data){
				console.log(data);
				$("input[name='txtTitle']").val(data.title);
				$("option[value='"+data.cate_id +"']").attr("selected",'selected');
				$("select[name='cate_id']").attr('oldCateId',data.cate_id);
				$("img#tbn").attr('src',imgAsset+"/"+data.tbn);
				$("textarea[name='txtDesc']").val(data.description);
				CKEDITOR.instances['txtContent'].setData(data.content);
				$("#save").attr('data-id',data.id);
				$(".cate").hide();
				$(".edit").show();
				$('.modal-footer').show();
				$("#myModal").modal("show");
			}
		});
	});

	$("#save").click(function(e){
		e.preventDefault();
		id = $(this).attr('data-id');
		token = $("input[name='_token']").val();
		txtTitle = $("input[name='txtTitle']").val();
		cate_id = $("select[name='cate_id']").val();
		txtDesc = $("textarea[name='txtDesc']").val();
		txtContent = CKEDITOR.instances['txtContent'].getData();
		oldCateId = $("select[name='cate_id']").attr("oldCateId");
		$.ajax({
			url:'post/'+id,
			type:"PUT",
			async:true,
			data: {'_token':token,'title':txtTitle,'cate_id':cate_id,'description':txtDesc,'content':txtContent},
			success:function(data){
				$(".postEdit[data-id='"+data.id+"']").text(data.title);
				if(oldCateId != data.cate_id){
					$(".postEdit[data-id='"+data.id+"']").parent().parent().find('td#cateshow').text('Đã đổi');
				}
				$(".postEdit[data-id='"+data.id+"']").parent().parent().find('td#updated').text(data.updated_at);
				$('#myModal').modal('hide');
			}
		});
	});

	$("#postCate").click(function(e){
		e.preventDefault();
		$(".cate").show();
		$(".edit").hide();
		$('.modal-footer').hide();
		$("#myModal").modal("show");

	});
});