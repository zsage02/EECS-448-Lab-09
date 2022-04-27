function responseCheckr()
{
	let email = document.getElementbyId("email").value;
	let pswd = document.getElementbyId("password").value;
	let weapons = document.getElementbyId("weapons").value;
	let armor = document.getElementbyId("armor").value;
	let horses = document.getElementbyId("horses").value;
	let sd = document.getElementbyId("sd").checked;
	let on = document.getElementbyId("on").checked;
	let td = document.getElementbyId("td").checked;
	if(email == '' || !email.includes('@') || !email.includes('.'));
	{
		alert("Invalid email address!");
		return false;
	}
	if(password == '')
	{
		alert("Password must be entered!");
		return false;
	}
	if(weapons == '' || armor == '' || horses == '')
	{
		alert("No item selection can be left blank (0 if none)!");
		return false;
	}
	if(!sd || !on || !td)
	{
		alert("Shipping option must be picked!");
		return false;
	}
}