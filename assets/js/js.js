function compose_result(){
	return false;
}	

function add_student(){
	$.ajax({
		url : "configuration/add_student.php",
		data : $("#add_student_form").serialize(),
		method : "GET",
		success: function(data){
			if(data == "Ok"){
				alert("Student successfully registered");
				window.location = "reg.php";
			}
			else{
				alert(data);
			}
		}
	});
	return false;
}

function fetch_student(value){
	$.ajax({
		url : "configuration/fetch_student.php?q="+value,
		success: function(data){
			console.log(data);
			if(data != 404){
				var arr = new Array();
				var x = "";
				for(var i=0, j=0; i<data.length; i++){
					if(data[i] == ";"){
						arr[j] = x;
						console.log(arr[j]);
						j++;
						x = "";
					}
					else{
						x = x+data[i]
					}
				}
				var email = arr[0];
				var name = arr[1];
				var dep = arr[2];
				var sem = arr[3];
				var reg_num = arr[4];
				var roll_num = arr[5];
				
				$("#s_name").val(name);
				$("#s_branch").val(dep);
				$("#s_semester").val(sem);
				$("#s_email").val(email);
				$("#s_reg").val(reg_num);
				$("#s_roll").val(roll_num);
				
			}
			else{
				console.log(data);
			}
		}
	});
}
function compose_result(){
	$.ajax({
		url : "configuration/add_mark.php",
		method : "GET",
		data : $("#compose_form").serialize(),
		success : function(data){
			if(data == "Ok"){
				alert("Marks successfully entered.");
				window.location = "compose.php";
			}
			else{
				alert(data);
			}
		}
	});
	return false;
}
function update_result(){
	$.ajax({
		url : "configuration/update_marks.php",
		method : "GET",
		data : $("#compose_form").serialize(),
		success : function(data){
			if(data == "Ok"){
				alert("Marks successfully updated.");
				window.location = "compose.php";
			}
			else{
				alert(data);
			}
		}
	});
	return false;
}

function recheck(email, id, semester){
	
	$.ajax({
		url : "configuration/recheck.php?email="+email+"&id="+id+"&sem="+semester ,
		method : "GET",
		success: function(data){
			alert(data);
		}
	});
}