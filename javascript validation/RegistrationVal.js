function RegisteratioVal(){
		NameVar=document.forms["MyForm"]["name"].value;
		FNameVar=document.forms["MyForm"]["fname"].value;
		RadioVar=document.forms["MyForm"]["A"].value;
		BloodGroupVar=document.forms["MyForm"]["BloodGroup"].value;
		AgeVar=document.forms["MyForm"]["age"].value;
		ContactVar=document.forms["MyForm"]["contact"].value;
		ContactVar=document.forms["MyForm"]["address"].value;


// (1) Name vallidation is start from here
		NameReg=/[A-za-z .]{3,20}/;
		if (NameVar=="") {
			alert("Name field Can not be left empty");
			return false;
		}
		if (!NameReg.test(NameVar)) {
			alert(" Length Must BE  InBetween 3 And 20......\n And Only Characters,Spaces And Dots (.) Are Allowwed");
			return false;
		}
// (2) Father Name vallidation is start from here
		 F_NameReg=/[A-za-z .]{3,20}/;
		if (FNameVar=="") {
			alert(" Father Name field Can not be left empty");
			return false;
		}
		if (!F_NameReg.test(FNameVar)) {
			alert(" Length Must BE  InBetween 3 And 20......\n And Only Characters,Spaces And Dots (.) Are Allowwed");
			return false;
		}
// (3) Radio BUTTON VALIDTAION IS  start from here
		if (RadioVar=="") {
			alert(" Select your Gender Please");
			return false;
		}
// (4) Donor Blood Group Validatio is start from here

		if (BloodGroupVar=="SlectFirst") {
			alert("Please Select Blood Group");
			return false;
		}


// (5) age variable is start from here

		if (AgeVar=="") {
			alert("Please Enter Your Age");
			return false;
		}
		if (isNaN(AgeVar)) {
			alert("Only Integer Are Allowed");
			return false;
		}
		if (AgeVar<18||AgeVar>50)
		{ 
		    alert("The age must be a number between 18 and 50");
		    return false;
		}

// (6) contat validation is start form hereCC
		 
		if (ContactVar=="") {
			alert("Please Enter Your Conatact Number ");
			return false;
		}
		if (ContactVar!=11) {
			alert("Please Check Your Number Again");
			return false;
		}
		
// (7) Address Validation is start from here
		if (AddressVar=="") {
			alert("Please Enter Your Valid Address ");
			return false;
		}
}
