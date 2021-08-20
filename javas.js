function check()
{
    if(parseInt(document.forms["alert"]["ac"].value)>parseInt(document.getElementById("balance").value))
    {
        alert('Insufficient Amount');
        return false;
    }
    else
    {
        return confirm('Are u sure you want to transfer');
    }
}