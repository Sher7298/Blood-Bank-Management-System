function SearchVal()
{
	var CityVar=document.forms["MyForm"]["City"].value;
	var BloodGroupVar=document.forms["MyForm"]["SelectBlood"].value;
	
	//Name Validation Start From Here 
	var CityReg=/[A-za-z]{5,10}/;
	if (CityVar=="") {
		alert("City Field cannot be left Empty");
		return false;
	}
	if (!CityReg.test(CityVar)) {
		alert("Integer And Other Special character Are not Allowed");
	}
	
// Blood Group Validation Start From Here 
	if (BloodGroupVar=="Blood") {
		alert(" Blood Group Field cannot be left Empty");
		return false;
	}
 
}