function bloodVal(){
	 BloodGroupVar=document.forms["MyForm"]["SelectBlood"].value;
	 CostVar=document.forms["MyForm"]["cost"].value;
     DescriptionVar=document.forms["MyForm"]["description"].value;


// (1) BLood Group Validation is start from Here
			if (BloodGroupVar=="OptionBlood") {
					alert("Please Select Blood Group");
					return false;
			}

// (2) Cost Validation is Start Form Here
		if (CostVar=="") {
			alert("Please Enter Cost OF blood Per Unit");
			return false;
		}

		if (isNaN(CostVar) ) {
			alert("Please Enter Cost In Integer Only");
			return false;
		}
		if (CostVar>3000) {
			alert("please Enter Cost Below 3000");
			return false;
		}

// (3) Description Validation is start from here
		if (DescriptionVar=="") {
			alert("Please Enter Description");
			
		}


}