function loadPage(file) {
    //code
    var xmlHttp;
    if (window.XMLHttpRequest) {
        //code
        xmlHttp=new XMLHttpRequest();
    }
    else{
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlHttp.onreadystatechange = function()
    {
        if (xmlHttp.readyState==4 && xmlHttp.status==200) {
            //code
            document.getElementById("page").innerHTML = xmlHttp.responseText;
        }
    }
    xmlHttp.open("GET",file,true);
    xmlHttp.send("");
}