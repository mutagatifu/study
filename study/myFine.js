$(document).ready(function(){
$(".pan").hover(function(){
	$(this).css("background-color","#dddfef");
},
	function(){
		$(this).css("background-color","#efefef");
	}
);
$("#btnsub").click(function(){
	var first = $("#fname").val();
	var last = $("#lname").val();
	var user = $("#uname").val();
	var pass = $("#pword").val();
	if(first == 0 || last == 0 || user == 0 || pass == 0){
		// $(".myForm").css("border","red");
		alert("fill all fields");
	}
	else{
		// alert("am ok");
		console.log(first+" "+last+" "+user+" "+pass);
		$.ajax({
			url:'php/recordUser.php',
			method:'POST',
			data:{
				fname:first,
				lname:last,
				uname:user,
				pword:pass
			},
			dataType:'json',
		   success:function(data){
			    console.log(data);
			//alert(data);
		   }
		});
	}
	// 
});
$.ajax({
	url:'php/fetchUser.php',
	method:'GET',
	dataType:'json',
	cache:false,
	success:function(data){
		var num=1;
		var userdate = data.data;
		for(var i in userdate){
			$(".tableDate").append('<tr><td>'+num+'</td><td>'+userdate[i].first_name+'</td><td>'+userdate[i].last_name+'</td><td>'
			+userdate[i].user_name+'</td><td>'+userdate[i].password+'</td><td><button class="btn btn-primary edit" data-id="'+userdate[i].id+'" data-toggle="modal" data-target="#exampleModalCenter"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>'+
        '</button>'+'<a href="php/removeUser.php?id='+userdate[i].id+'" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete?\');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>'+
        '</a></td></tr>');
			num++;
		}
		$('.edit').click(function(){
			$(".myforma").empty();
			var id = $(this).data('id');
			// alert("hello mavin"+id);
			// function edite(){
			// 	console.log(id);
			// 	 alert(id);
				$.ajax({
					url:'php/getUserById.php',
					method:'post',
					data:'id='+id,
					dataType:'json',
					success:function(data){
						console.log(data[0].last_name);
						$(".myforma").append('<div class="form-group">'+
												'<label for="firstName">First Name</label>'+	
												'<input type="hidden" name="id" value="'+data[0].id+'" id="fname2"><input type="text" name="fname" value="'+data[0].first_name+'" id="fname2">'+					
											'</div>'+
											'<div class="form-group">'+
												'<label for="lastName">Last Name</label>'+
												'<input type="text" name="lname" value="'+data[0].last_name+'" id="lname2">'+
											'</div>'+
											'<div class="form-group">'+
												'<label for="username">User Name</label>'+
												'<input type="text" name="uname" value="'+data[0].user_name+'" id="uname2">'+
											'</div>'+
											'<div class="form-group">'+
												'<label for="password">Password</label>'+
												'<input type="password" name="pword" value="'+data[0].password+'" id="pword2">'+
											'</div>'
											);
				 }
				//,
				// 	function(){
				// 		$(".myforma").empty();
				// 	}

				});
			// }
			// edite();
		});}
});
var number1=[20,39,23,35,46];
var number2 =[];
//number1.map(myfunction);
for(var i in number1){
	if (i ==2) {
		number2.push(number1[i] * 2)  ;
	}
	else{
		number2.push(number1[i] + 2);
	}
	
	//push(number1[i] * 2);
	//alert(number2);
}
console.log(number2);

//document.getElementById('demo').innerHTML = number2;

// function myfunction(value , index,array){
// 	return value * 3;
// }


});