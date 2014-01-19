function chk_user()
{

//	alert("here");
	form = document.forms[0];
	worker = form.worker;
	loc = form.mark;
	language = form.language;
	loc2 = form.series;

	if(loc.value == '' || worker.value == '' )
	{
		alert("You must provide all the requested field.");
		return false;
	}
	
	//return true;
	data(form);
// to be removed
	return false;
}


function data(form)
{
	
	worker = form.worker.value;
	loc = form.mark.value;
	loc2 = form.series.value;
	language = $('#language').val(); 
	
	//var params = "name="+name+"&mobileno="+mobileno+"&mark="+loc+"&series="+loc2+"&language="+language+"&id_proof_type="+id_type;
	//params += "&id_proof_no="+id_no+"&occupation="+occupation;


		var params = "{worker:'"+worker+"', mark:'"+loc+"', series:'"+loc2+"', language:'"+language+"' }";

//	alert(params);
	
//	return false;
	
//	var json = JSON.stringify(eval("(" + params + ")"));
//	var json = JSON.parse(params);

	var json = JSON.stringify(eval('('+params+')'));

//	alert(json);
	
	if (typeof String.prototype.startsWith != 'function') {
		// see below for better implementation!
		String.prototype.startsWith = function (str){
			return this.indexOf(str) == 0;
		};
	}


	$.post('http://10.2.8.180/andsmart/result_user.php',{ json_obj:json }, 
		function(data){
			
			if(data.startsWith("Results"))
			{
				alert("Data Successfully retrived");
				document.getElementById("responce_table").innerHTML=data;
				//alert(data);
	//			window.location.replace("http://10.2.8.180/andsmart/index.html?responce=Thanks%20for%20registration.");
			}
			else	
				alert("There is no such entry. Recheck your inputs fields");
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
