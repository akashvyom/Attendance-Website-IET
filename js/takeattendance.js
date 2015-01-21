function changeattendance(rec)
{
    var idofatt = "att"+rec;
    if(document.getElementById(idofatt).innerHTML=="P"){document.getElementById(idofatt).innerHTML="A";document.getElementById(idofatt).style.backgroundColor="red";}
    else if(document.getElementById(idofatt).innerHTML="A"){document.getElementById(idofatt).innerHTML="P";document.getElementById(idofatt).style.backgroundColor="white";
    }
    
}

function buildlink()
{
    var i,att="";

	var sid=500000;
	document.getElementById("attsubmit").innerHTML = "Processing...";
    for(i = 1;i<=64;i++){
        var idno = sid+i;
        var realid = "att"+idno;
        var oneatt = document.getElementById(realid).innerHTML;
        if(oneatt=="P"){att=att+"1";}else if(oneatt=="A"){att=att+"0";}
        }
    var url = document.getElementById("linksubmit").getAttribute("href");
	document.getElementById("linksubmit").setAttribute("href",url+att);
    document.getElementById("attsubmit").innerHTML = "Click on link generated";
    document.getElementById("linksubmit").style.visibility = "visible";
    
	}
 function takeattendancestart(){
    
 }