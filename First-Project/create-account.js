function createAccount()
{
    var fName = document.forms["create.Account"]["firstName"].value;
    var lName = document.forms["create.Account"]["lastName"].value;
    var user = document.forms["create.Account"]["username"].value;
    var password = document.forms["create.Account"]["password"].value;

    if (fName == "" || lName == "" || user == "" || password == "")
    {
        alert("Please fill the missing field.");
        return false;
    }
    if (user.length<=4)
    {
        alert ("Username must be greater than 4 characters");
        return false;
    }
    if (password.length<8)
    {
        alert("Password must be equal or greater than 8 character");
        return false;
    }
}