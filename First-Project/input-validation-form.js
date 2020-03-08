function validateForm() 
{
  var user = document.forms["login"]["username"].value;
var pass=document.forms["login"]["password"].value;
  if (user == "") 
  {
    alert("Name must be filled out");
    return false;
  }
    else if (pass=="")
{
    alert("Password must be filled out");
    return false;
}
}