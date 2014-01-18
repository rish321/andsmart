function chk_worker()
{
//	alert("here");
//	return false;
	form = document.forms[0];
	mobileno = form.mobileno;
	name = form.name;
	loc = form.mark;
	loc2 = form.series;
	language = form.language;
	id_proof = form.id_proof;
	id_type = form.id_proof_type;
	id_no = form.id_proof_no;
/*	if(mobileno.value == '' || name.value == ''  || loc.value == '' || language.value == '' )
	{
		alert("You must provide all the requested field.");
		return false;
	}
	var checked = false;
	var radios = form.question1;
	for (var i = 0, radio; radio = radios[i]; i++) {
		if (radio.checked) {
			checked = true;
		//	alert(radio.value);
			break;
		}
	}
	if (!checked) {
		alert("Please select Occupation");
		return false;
	}
	var matches = mobileno.value.match(/\d+/g);
	if (matches == null) {
		    alert('Enter vaild mobile no');
		    return false;
	}
	var len_mobile = mobileno.value.length;
	if(len_mobile!=10)
	{	
		alert("Error: Invalid mobile no.\n Please enter 10 digit mobile no OR land line without '0'. ");
		return false;
	} */

	//return true;
	data(form);
// to be removed
	return false;
}


function data(form)
{
	var url = "http://10.2.8.180/andsmart/root/includes/worker_register_exce.php";
//	var params = "name=Awesome";
	
	mobileno = form.mobileno.value;
	name = form.name.value;
	loc = form.mark.value;
	loc2 = form.series.value;
	//language = form.language.value;
	language = $('#language').val();
//	photo = form.photo.value;
//	id_proof = form.id_proof.value;
	id_type = form.id_proof_type.value;
	id_no = form.id_proof_no.value; 
	var radios = form.question1;
	var occupation ;
	for (var i = 0, radio; radio = radios[i]; i++) {
		if (radio.checked) {
			checked = true;
			var occupation = radio.value;
		//	alert(radio.value);
			break;
		}
	}
	
	//var params = "name="+name+"&mobileno="+mobileno+"&mark="+loc+"&series="+loc2+"&language="+language+"&id_proof_type="+id_type;
	//params += "&id_proof_no="+id_no+"&occupation="+occupation;
	
	var params = "{name:'"+name+"', mobileno:'"+mobileno+"', mark:'"+loc+"', series:'"+loc2+"', language:'"+language+"', id_proof_type:'"+id_type;
	params += "', id_proof_no:'"+id_no+"', occupation:'"+occupation+"'} ";

//	alert(params);
	
//	var json = JSON.stringify(eval("(" + params + ")"));
//	var json = JSON.parse(params);

	var json = JSON.stringify(eval('('+params+')'));

//	alert(json);

	$.post('http://10.2.8.180/andsmart/root/includes/worker_register_exce.php',{ json_obj:json }, 
		function(data){
			if(data=="Success")
			{
				alert("data successfully enterd.");
				window.location.replace("/andsmart/index.html?responce=Thanks%20for%20registration.");
			}
			else	
				alert("Data entry fail. Recheck your entry");
		}
	  ); 

	
	/*
//	alert(params);return false;

	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	//alert("here2");
	
	xmlhttp.open("POST", url, true);
//	xmlhttp.open("GET",url,true);

	//Send the proper header information along with the request
	xmlhttp.setRequestHeader("Content-type", 'text/html; charset=utf-8');
	xmlhttp.setRequestHeader("Content-length", params.length);
	xmlhttp.setRequestHeader("Connection", "close");
	
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			//document.getElementById("responce").innerHTML=xmlhttp.responseText;
			var df = xmlhttp.responseText;
			if(df == "Success")
				window.location.replace("/andsmart/index.html?responce=Thanks%20for%20registration.");
				//alert('success');
			else
				alert('fail');
		}
	}
	
	//http.onreadystatechange = function() {//Call a function when the state changes.
	//	if(http.readyState == 4 && http.status == 200) {
	//		alert(http.responseText);
	//	}
	//} 

	xmlhttp.send(params); */
 
//	var xmlhttp;
//	xmlhttp.open("GET","http://10.2.8.180/PHP/getAllCustomers.php",true);
//	xmlhttp.send(); 
}
