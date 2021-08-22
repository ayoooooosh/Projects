function sumNumbers()
{
    var firstNumber=parseInt(document.getElementById("in1").value);
    var secondNumber=parseInt(document.getElementById("in2").value);
    var summ=document.getElementById("p1");
    if(firstNumber == 0|| secondNumber == 0)
    {
        summ.innerHTML="Again Numbers";
    }
    else if(isNaN(firstNumber)|| isNaN(secondNumber))
    {
        summ.innerHTML="Enter The valus Numbers pleas!";
        alert('Enter The values Numbers pleas!');
    }
    else{
        summ.innerHTML='The Plus Of Them Is : '+(firstNumber+secondNumber);
    }
}
function textString()
{
    texx =prompt("Say Some Thing");
    document.getElementById("id2").innerText=texx;

}
function dateTime()
{
    var d = new Date();
    document.getElementById("id3").innerHTML=d;
}
function count()
{
    var c = id4.value.length;
    document.getElementById("id5").innerHTML=c;
}
function arr()
{
    var number= parseInt(document.getElementById("id7").value);
    if(isNaN(number) || number<=0 || number>20)
    {
        alert('The Number Is Invalid Pleas Enter Number Between 1 and 20');
        alert('Good');
    }
    else{
        var a = ["First", "Second", "Third", "Fourth", "Fifth", "Sixth", "Seventh", "Eighth", "Ninth",
        "Tenth", "Eleventh", "Twelfth", "Thirteenth", "Fourteenth", "Fifteenth", "Sixteenth",
        "Seventeenth", "Eighteenth", "Nineteenth"];
        
        var i;
        for(i=0; i<number ; i++)
        {
              arr[i]=prompt('Enter element' +(i+1) +':');
        }
        for(i=0; i<number ; i++)
        {
            document.getElementById("id8").innerHTML +=a[i] +" Name: " + arr[i] +"<br>";
        }
    }
}
