function afterclick()
{
    var a = document.getElementById("myinput").value;
    var b = document.getElementById("myprint");
        b.innerHTML="The "+a+" was this"+" output";

}
function chckfname()
{
    var namevalue = document.getElementById("name").value;
    if(!isNaN(namevalue))
    {
        document.getElementById("nameerror").innerHTML="Invalid First Name";
        return false;
    }
    else
    {
        document.getElementById("nameerror").innerHTML="Valid First Name";
        return true;
    }
}
function chcklname()
{
    var namevalue = document.getElementById("lname").value;
    if(!isNaN(namevalue))
    {
        document.getElementById("lnameerror").innerHTML="Invalid Last Name";
        return false;
    }
    else
    {
        document.getElementById("lnameerror").innerHTML="Valid Last Name";
        return true;
    }
}

function agecheck()
{
    var agevalue = document.getElementById("age").value;
    if(isNaN(agevalue))
    {
        document.getElementById("ageerror").innerHTML="Invalid Age";
        return false;
    }
    else
    {
        document.getElementById("ageerror").innerHTML="Age is Valid";
        return true;
    }
}

function getradiovalue()
{
    if(document.getElementById("juniorprogrammer").checked==true)
    {
        document.getElementById("radiovalue").innerHTML="         Junior Programmer Has been Selected";
        return true;
    }
    else if(document.getElementById("seniorprogrammer").checked==true)
    {
        document.getElementById("radiovalue").innerHTML="         Senior Programmer Has been Selected";
        return true;
    }
    else if(document.getElementById("projectlead").checked==true)
    {
        document.getElementById("radiovalue").innerHTML="             Porject Lead Has been Selected";
        return true;
    }
    else
    {
        document.getElementById("radiovalue").innerHTML="      Please select a radio button";
       
        return false;

    }
}

function checkboxvalue()
{
    if(document.getElementById("Java").checked==true)
    {  var designation = document.getElementById("Java").value;
        document.getElementById("checkvalue").innerHTML=designation+" Selected";
        return true;
    }
    else if(document.getElementById("PHP").checked==true)
    {  var designation = document.getElementById("PHP").value;
        document.getElementById("checkvalue").innerHTML=designation+" Selected";
        return true;
    }
    else if(document.getElementById("C++").checked==true)
    {  var designation = document.getElementById("C++").value;
        document.getElementById("checkvalue").innerHTML=designation+" Selected";
        return true;
    }
    else
    {
        document.getElementById("checkvalue").innerHTML="Please Select a Checkbox";
       
        return false;
    }
}


function chckemail()
{
    var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email =document.getElementById("email").value;
    if(email.match(emailpattern))
    {
        document.getElementById("emailvalue").innerHTML="Email is Valid";
        return true;
    }
    else
    {
        document.getElementById("emailvalue").innerHTML="Invalid Email";
        return false;
    }
}


function passcheck()
{
    var pvalue =document.getElementById("pass").value;
    if( pvalue.lengh<8)
    {
        document.getElementById('passvalue').innerHTML="Valid Password";
        return true;
    }
    if(pvalue.search(/[a-z]/i) < 0)
    {
        document.getElementById('passvalue').innerHTML="Invalid Password";
        return false;
    }
    if(pvalue.search(/[0-9]/) < 0 )
    {
        document.getElementById('passvalue').innerHTML="Invalid Password";
        return false;
    }
    else
    {
        document.getElementById('passvalue').innerHTML="Valid Password";
        return true;
    }
}

function formcheck()
{
    if(chcklname()==true && chcklname()==true &&chckage()==true &&getradiovalue()==true &&checkboxvalue()==true&&chckemail()==true && passcheck()==true)
    {
        return true;
    }
    else
    {
        return false;
    }

}