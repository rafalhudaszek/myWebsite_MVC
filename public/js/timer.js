var xmlhttp = new XMLHttpRequest();
onmousedown = function()
{
    xmlhttp.open("GET", "dashboard/initTimer", false);
    xmlhttp.send(null);
    xmlhttp.responseText;
}

onkeydown = function()
{
    xmlhttp.open("GET", "dashboard/initTimer", false);
    xmlhttp.send(null);
    xmlhttp.responseText;
}

$(document).ready(function()
{
    $("#hej").get(0).scrollIntoView();
});

setInterval(function()
{
    xmlhttp.open("GET", "dashboard/updateTimer", false);
    xmlhttp.send(null);
    if(xmlhttp.responseText == "logout")
    {
        window.location.href = 'dashboard/logout';
    }
    document.getElementById("timer").innerHTML = xmlhttp.responseText;
}, 1000);