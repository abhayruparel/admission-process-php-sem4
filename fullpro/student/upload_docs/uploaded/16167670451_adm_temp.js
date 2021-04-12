function formValidation()
{
    var ufname = document.registration.fname;
    var ulname = document.registration.lname;
    var umobile = document.registration.mobile;
    var uemail = document.registration.email;
    var umgender = document.registration.mgender;
    var ufgender = document.registration.fgender;
    var udob = document.registration.dob;
    var ugname = document.registration.gname;
    var ugmobile = document.registration.gmobile;
    var uadd = document.registration.address;
    var ucountry = document.registration.country;
    var ustate = document.registration.state;
    var ucity = document.registration.city;
    var upin = document.registration.pin;
    var udegree = document.registration.degree;
    var ucourse = document.registration.course;



        if(allalphabet(ufname))
        {
            if(allLetter(ulname))
            {
                if(isMobile(umobile))
                {
                    if(ValidateEmail(uemail))
                    {
                        if(validgender(umgender,ufgender))
                        {
                            if(allAlphabet(ugname))
                            {
                                if(phoneValid(ugmobile))
                                {
                                    if(alphanumeric(uadd))
                                    {
                                        if(allCountry(ucountry))
                                        {
                                            if(allState(ustate))
                                            {
                                                if(allCity(ucity))
                                                {
                                                    if(allnumeric(allnumeric(upin)))
                                                    {
                                                        if(degreeselect(udegree))
                                                        {
                                                            if(courseselect(ucourse))
                                                            {

                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }


    return false;

}



function allCountry(ucountry)
{
    var letters = /^[A-Za-z]+$/;
    if(ucountry.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('Username must have alphabet characters only');
        ucountry.focus();
        return false;
    }
}
function allState(ustate)
{
    var letters = /^[A-Za-z]+$/;
    if(ustate.value.match(letters))
    {
        return true;
    }
    else {
        alert('Username must have alphabet characters only');
        ustate.focus();
        return false;
    }
}


function allCity(ucity)
{
    var letters = /^[A-Za-z]+$/;
    if(ucity.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('Username must have alphabet characters only');
        ucity.focus();
        return false;
    }
}
function allalphabet(ufname)
{
    var letters = /^[A-Za-z]+$/;
    if(ufname.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('Username must have alphabet characters only');
        ufname.focus();
        return false;
    }
}
function allAlphabet(ugname)
{
    var letters = /^[A-Za-z]+$/;
    if(ugname.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('Username must have alphabet characters only');
        ugname.focus();
        return false;
    }
}

function allLetter(ulname)
{
    var letters = /^[A-Za-z]+$/;
    if(ulname.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('Username must have alphabet characters only');
        ulname.focus();
        return false;
    }
}

function alphanumeric(uadd)
{
    var letters = /^[0-9a-zA-Z]+$/;
    if(uadd.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('User address must have alphanumeric characters only');
        uadd.focus();
        return false;
    }
}
function degreeselect(udegree)
{
    if(udegree.value == "Default")
    {
        alert('Select your degree from the list');
        udegree.focus();
        return false;
    }
    else
    {
        return true;
    }
}
function courseselect(ucourse)
{
    if(ucourse.value == "Default")
    {
        alert('Select your course from the list');
        ucourse.focus();
        return false;
    }
    else
    {
        return true;
    }
}
function allnumeric(upin)
{
    var numbers = /^[0-9]+$/;
    if(upin.value.match(numbers))
    {
        return true;
    }
    else
    {
        alert('ZIP code must have numeric characters only');
        uzip.focus();
        return false;
    }
}
function ValidateEmail(uemail)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(uemail.value.match(mailformat))
    {
        return true;
    }
    else
    {
        alert("You have entered an invalid email address!");
        uemail.focus();
        return false;
    }
} function validgender(umgender,ufgender)
{
    x=0;

    if(umgender.checked)
    {
        x++;
    } if(ufgender.checked)
{
    x++;
}
    if(x==0)
    {
        alert('Select Male/Female');
        umgender.focus();
        return false;
    }

}

function isMobile(umobile){
    var phoneno = /^\d{10}$/;
    if((umobile.value.match(phoneno))) {
        return true;
    }
    else
    {
        alert("Invalid number");
        umobile.focus();
        return false;
    }
}

function phoneValid(ugmobile){
    var mobno = /^\d{10}$/;
    if((ugmobile.value.match(mobno))) {
        return true;
    }
    else
    {
        alert("Invalid number");
        ugmobile.focus();
        return false;
    }
}
/*else
{
    alert('Form Succesfully Submitted');
    window.location.reload()
    return true;
}*/