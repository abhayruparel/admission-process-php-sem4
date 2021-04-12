function formValidation()
{
    var fnam = document.registration.fname;
    var umobile = document.registration.mobile;
    var ucourses = document.registration.courses;
    var mail = document.registration.email;


        if(allLetter(fnam))
        {
            if(countryselect(ucourses))
                {
                    if(ValidateEmail(mail))
                        {
                            if(isPhone(umobile)) {

                            }
                        }
                }
        }

    return false;

}
function allLetter(fnam)
{
    var letters = /^[A-Za-z]+$/;
    if(fnam.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('Username must have alphabet characters only');
        fnam.focus();
        return false;
    }
}

function countryselect(ucourses)
{
    if(ucourses.value == "Default")
    {
        alert('Select your course from the list');
        ucourses.focus();
        return false;
    }
    else
    {
        return true;
    }
}

function ValidateEmail(mail)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(mail.value.match(mailformat))
    {
        return true;
    }
    else
    {
        alert("You have entered an invalid email address!");
        mail.focus();
        return false;
    }
}
function isPhone(umobile){
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
