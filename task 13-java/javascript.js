function sumNumbers()
{
    var val1=parseInt(document.getElementById("in1").value);
    var val2=parseInt(document.getElementById("in2").value);
    var res=document.getElementById("in3");
    res.value=val1+val2;

}
function photo()
{
    var number=document.getElementById("inp").value;

    if(number=='A')
    {
        document.getElementById("dd").innerHTML="<img src='images/7x5FT.jpg'/>";
    }
    
    else if(number=='B')
    {
        document.getElementById("dd").innerHTML="<img src='images/abstraction_sharp_figure_101902_800x1200_optimized.jpg'/>";
    }
    else if(number=='C')
    {
        document.getElementById("dd").innerHTML="<img src='images/beautiful iphone 6 wallpaper 4394 - other iphone 6 wallpapers-f90173.jpg'/>";
    }
    else if(number=='D')
    {
        document.getElementById("dd").innerHTML="<img src='images/light.jpg'/>";
    }
    else if(number=='E')
    {
        document.getElementById("dd").innerHTML="<img src='images/W2B7yiIE.jpg'/>";
    }
    else if(number=='F')
    {
        document.getElementById("dd").innerHTML="<img src='images/windows-7-wallpapers-hd-free-download1.jpg'/>";
    }
    else 
    {
        document.getElementById("dd").innerHTML="Not Found The Photo! Sorry";
    }
    


}