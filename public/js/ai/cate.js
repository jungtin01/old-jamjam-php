// Cate.js for handle [add|edit|delete] cate
// Updated : 27/6/2017 | Created by : Jakcalie
$(document).ready(function(){
	$('#cate_add').click(function(e){
		e.preventDefault();
		token = $("input[name='_token']").val();
		txtCatename = $('#txtCatename').val();
		data = {
			'_token':token,
			'name':txtCatename,
		};
		// Ajax
		$.ajax({
			url : cateAddUrl,
			type: "POST",
			data: data,
			async: true,
			success:function(data){
				$(".alertContainer").append("<div class='alert alert-success alert-add' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Bạn đã thêm thành công [Cate: "+data.name+" ]</div>");
        		$('.alert-add').delay(3000).slideUp(500);
        		$('#txtCatename').val('');
        		$('ul.cate-nav').append("<li><a href='#' data-id='"+data.id+"' class='cate_a'>"+data.name+"</a></li>");
        		
			},
			error:function(data){
				var errors = data.responseJSON;
        		$(".alertContainer").append("<div class='alert alert-danger alert-add' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>"+errors.name+"</div>");
        		$('.alert-add').delay(3000).slideUp(500);
			}
		});
	});

	$('ul.cate-nav').on('click','a.cate_a',function(e){
		e.preventDefault();
		var id = $(this).attr('data-id');
		$('#txtCateId').val(id);
	});

	$('#cate_delete').click(function(e){
		e.preventDefault();
		token = $("input[name='_token']").val();
		id = $("#txtCateId").val();
		if( id != ''){
			if(confirm('Bạn có chắc muốn xóa ?')){
				$.ajax({
					url: 'cate/'+id,
					type:'DELETE',
					data:{'_token':token},
					async:true,
					success:function(data){
						$(".alertContainer").append("<div class='alert alert-success alert-del' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Bạn đã xóa thành công [Cate: "+data.name+" ]</div>");
						$('.alert-del').delay(3000).slideUp(500);
						$('.cate_a[data-id="'+data.id+'"').remove();
						$("#txtCateId").val('');
					}
				});
			}
		}
		else{
			$(".alertContainer").append("<div class='alert alert-danger alert-del' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Cần phải chọn cate cần xóa !</div>");
			$('.alert-del').delay(3000).slideUp(500);
		}
	});

	$("#cate_edit").click(function(e){
		e.preventDefault();
		token = $("input[name='_token']").val();
		id = $("#txtCateId").val();
		txtCatenameEdit = $("#txtCatenameEdit").val();
		if( id != '' ){
			$.ajax({
				url: 'cate/'+id,
				type:'PUT',
				data:{'_token':token,'name':txtCatenameEdit},
				async:true,
				success:function(data){
					$(".alertContainer").append("<div class='alert alert-success alert-edit' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Bạn đã edit thành công [Cate: "+data.name+" ]</div>");
					$('.alert-edit').delay(3000).slideUp(500);
					$('.cate_a[data-id="'+data.id+'"').text(data.name);
					$("#txtCateId").val('');
					$("#txtCatenameEdit").val('');
				}
			});
		}
	});
});