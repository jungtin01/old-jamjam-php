// User JS 
// Created by : Nguyen Trung Thinh
$(document).ready(function(){
	$("td.username a").click(function(e){
		e.preventDefault();
		user_id = $(this).attr('data-id');
		username = $(this).text();
		level = $(this).parent().parent().find('input[name="level"]').attr('data-level');
		$("input#username").val(username);
		$("input#username").attr('data-id',user_id);
		if(level == 0){
			clevel = $('select#level option[value="0"]').attr('selected','selected');
		}else{
			clevel = $('select#level option[value="1"]').attr('selected','selected');
		}
		$(".edit").show();
		$(".post").hide();
		$("#myModal").modal('show');
	});

	$(".postModal").click(function(e){
		e.preventDefault();
		showUrl = $(this).attr("data-route");
		// ajax
		$.ajax({
			url:showUrl,
			type:"GET",
			async:true,
			success:function(data){
				$(".post a").remove(); $(".post hr").remove();
				$.each(data, function (index, value) {
			        $(".post").append("<a href='javascript:void(0)'>"+value.title+"</a><hr>")
			    });
			    $(".edit").hide();
				$(".post").show();
				$("#myModal").modal('show');
			}
		});
	});

	$("#save").click(function(e){
		e.preventDefault();
		token = $("input[name='_token']").val();
		username = $("input#username").val();
		id = $("input#username").attr('data-id');
		level = $("select[name='level']").val();
		// Ajax
		$.ajax({
			url:"user/"+id,
			type:"PUT",
			data:{"_token":token,"username":username,'level':level},
			async:true,
			success:function(data){
				$("td.username a[data-id='"+data.id+"']").text(data.username);
				if(data.level == 0){
					$("td.username a[data-id='"+data.id+"']").parent().parent().find("td input[name='level']").val(" User ");
				}else{
					$("td.username a[data-id='"+data.id+"']").parent().parent().find("td input[name='level']").val(" Admin ");
				}
				$("td.username a[data-id='"+data.id+"']").parent().parent().find("td input[name='level']").attr('data-level',data.level);
				$("#myModal").modal('hide');
			}
		});
	});

	$(".userDel").click(function(e){
		e.preventDefault();
		id = $(this).attr('data-id');
		token = $("input[name='_token']").val();
		if(confirm("Bạn có chắc chắn muốn xóa User này ?")){
			$.ajax({
				url: 'user/'+id,
				type:"DELETE",
				data:{"_token":token},
				async:true,
				success:function(data){
					$(".userDel[data-id='"+data.id+"']").parent().parent().fadeOut(function(){
						$(".userDel[data-id='"+data.id+"']").parent().parent().remove();
					})
				}

			});
		}
	});
});