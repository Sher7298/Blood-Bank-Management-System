function LoginVal()
{
	var NameVar=document.forms["MyForm"]["name"].value;
	var PassVar=document.forms["MyForm"]["Password"].value;
	
	//Name Validation Start From Here 
	var NameReg=/[A-Za-z]{3,20}/;
	var NameReg=/[A-Za-z]{3,20}/;
	if (NameVar=="") {
		alert("Enter Your Nome To Login");
		return false;
	}
	if (!NameReg.test(NameVar)) {
		alert("Integer And Other Special character Are not Allowed");
	}
	
// Password Validation Start From Here 
	if (PassVar=="") {
		alert(" Please Enter Your Password");
		return false;
	}
 
}