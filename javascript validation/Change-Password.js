function ChangePassord(){
	PassVar=document.forms["MyForm"]["password"].value;
	CPassVar=document.forms["MyForm"]["cpassword"].value;

// Password Validation is start from here
		if (PassVar=="") {
			alert("Please Enter Your New Password");
			return false;
		}
		if (PassVar.length<6) {
			alert("Password length must be greate than 6");
			return false;
		}
		if (PassVar.search(/[0-9]/)==-1) {
			alert("1Password Must be combination of integer\n,Small And Capital Alphabets and special character");
			return false;
		}
		if (PassVar.search(/[a-z]/)==-1) {
			alert("2Password Must be combination of integer\n,Small And Capital Alphabets and special character");
			return false;
		}
		if (PassVar.search(/[A-Z]/)==-1) {
			alert("3Password Must be combination of integer\n,Small And Capital Alphabets and special character");
			return false;
		}
		if (PassVar.search(/[!\@\#\$\%\^\&\*\(\)\?\>\<\.|\,\:\-\_\+\=\~\`]/)==-1) {
			alert("4Password Must be combination of integer\n,Small And Capital Alphabets and special character");
			return false;
		}

// Confirm Passsword Validation is start from here
		if (CPassVar=="") {
				alert("Please Enter Your Confirmation Password");
				return false;
			}
// Password Match Validation is start from here
if (PassVar!=CPassVar) {
	alert("Password Does not Match");
	return false;
}
}