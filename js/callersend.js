function sendcallerid()
{
	var xmlhttp;
	var name;
	var number;
	document.getElementById("callme").innerHTML = "Processing...";
	name = document.getElementById("callername").value;
	number = document.getElementById("callernumber").value;
	var url = "savecaller.php?name=" + name + "&number=" + number;
	if (window.XMLHttpRequest)
	{ // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else
	{ // code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("callme").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}

function clearbutton()
{
	var name = document.getElementById("callme").innerHTML = "Send Info"
}

function loadclass(what)
{
	if (what == "2")
	{
	   
		var thing1 = document.getElementById("takeattendance");
		var thing2 = document.getElementById("viewattendance");
        thing2.style.visibility = "visible";
		thing1.style.display = 'none';
		thing2.style.marginTop = '50px';
		thing2.style.marginLeft = '400px';
		window.scrollBy(0, 150);
        document.getElementById("afterva").style.height = '200px';
	}
	if (what == "1")
	{
		var thing2 = document.getElementById("viewattendance");
		var thing1 = document.getElementById("takeattendance");
        thing1.style.visibility = "visible";
		thing2.style.display = 'none';
		thing1.style.marginTop = '50px';
		thing1.style.marginLeft = '400px';
		window.scrollBy(0, 150);
        document.getElementById("afterta").style.height = '200px';
	}
}
function loadattendance(ident)
{
if(ident == "1"){
    document.getElementById("datesubmit").innerHTML = "Processing...";
    var date =  document.getElementById("todaydate").value;
    var datesplit = date.split("-");
    var day = datesplit[2].toString();
    var month = datesplit[1].toString();
    var username = document.getElementById("username").innerHTML;
    var classes = document.getElementById("classes").innerHTML;
	var url = "viewattendance.php?day=" + day +"&month=" + month + "&username=" + username + "&classes=" + classes;
    var xmlhttp;
	if (window.XMLHttpRequest)
	{ // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else
	{ // code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
		     document.getElementById("datesubmit").innerHTML = "Ok";
             document.getElementById("afterva").style.height = '400px';
             document.getElementById("afterva").style.overflow = "scroll";
             document.getElementById("printit").style.visibility = "visible";
             document.getElementById("printit").setAttribute("href",url+"&print=1");
			document.getElementById("showdata").innerHTML = xmlhttp.responseText;
}
}
	
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
else if(ident =="2"){
                 document.getElementById("tdatesubmit").innerHTML = "Processing...";
    var date =  document.getElementById("ttodaydate").value;
    var datesplit = date.split("-");
    var day = datesplit[2].toString();
    var month = datesplit[1].toString();
    var username = document.getElementById("username").innerHTML;
    var classes = document.getElementById("classes").innerHTML;
	var url = "appattendance.php?day=" + day +"&month=" + month + "&username=" + username + "&classes=" + classes+"&subject=50001";
    var xmlhttp;
	if (window.XMLHttpRequest)
	{ // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else
	{ // code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
		     document.getElementById("tdatesubmit").innerHTML = "Ok";
             document.getElementById("afterta").style.height = '400px';
             document.getElementById("afterta").style.overflow = "scroll";
			document.getElementById("tshowtdata").innerHTML = "xmlhttp.responseText";
		}
	}
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
}

