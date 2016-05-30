function validateForm()
{
    if(userid_validation(5,12))
    {
        if(passid_validation(7,12))
        {
            if(allLetter())
            {
                if(alphanumeric())
                {
                    if(countryselect())
                    {
                        if(allnumeric())
                        {
                            if(ValidateEmail())
                            {
                                if(valigender())
                                {
                                if(valiabout())
                                {
            return true;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
   }

    return false        ;

}
function userid_validation(mx,my)
{
    var uid_len = document.forms["myForm"]["userid"].value.length;
    if (uid_len == 0 || uid_len >= my || uid_len < mx)
    {
        alert("User Id should not be empty / length be between "+mx+" to "+my);
        return false;
    }
    return true;
}
function passid_validation(mx,my)
{
    var passid_len = document.forms["myForm"]["passid"].value.length;
    if (passid_len == 0 ||passid_len >= my || passid_len < mx)
    {
        alert("Password should not be empty / length be between "+mx+" to "+my);
        return false;
    }
    return true;
}
function allLetter()
{
    var letters = /^[A-Za-z]+$/;
    if(document.forms["myForm"]["username"].value.match(letters))
    {
        return true;
    }
    else
    {
        alert('Username must have alphabet characters only');
        return false;
    }
}
function alphanumeric()
{
    var letters = /^[0-9a-zA-Z]+$/;
    if(document.forms["myForm"]["address"].value.match(letters))
    {
        return true;
    }
    else
    {
        alert('User address must have alphanumeric characters only');
        return false;
    }
}
function countryselect()
{
    if(document.forms["myForm"]["country"].value == "Default")
    {
        alert('Select your country from the list');
        return false;
    }
    else
    {
        return true;
    }
}
function allnumeric()
{
    var numbers = /^[0-9]+$/;
    if(document.forms["myForm"]["zip"].value.match(numbers))
    {
        return true;
    }
    else
    {
        alert('ZIP code must have numeric characters only');
        return false;
    }
}
function ValidateEmail()
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(document.forms["myForm"]["email"].value.match(mailformat))
    {
        return true;
    }
    else
    {
        alert("You have entered an invalid email address!");
        return false;
    }
}
function valigender()
{
    var msex =  document.forms["myForm"]["sex"].value;
    var x=0;
    if(msex=="Male" || msex=="Female")
    {
        x++;
   }
    if(x==0)
    {
        alert('Select Male/Female');
        return false;
    }
    else
    {

        return true;
    }

}
function valiabout()
{
    if(document.forms["myForm"]["desc"].value=="")
    {
        alert("about cannot be empty");
        return false;
    }
    else
    {
        return true;
    }
}