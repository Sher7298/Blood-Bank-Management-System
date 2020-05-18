function StockVal(){
	 BloodGroupVar=document.forms["MyForm"]["SelectBlood"].value;
	 StockcostVar=document.forms["MyForm"]["stock"].value;
	 DateVar=document.forms["MyForm"]["date"].value;
     DescriptionVar=document.forms["MyForm"]["description"].value;


// (1) BLood Group Validation is start from Here
			if (BloodGroupVar=="optionStock") {
					alert("Please Select Blood Group");
					return false;
			}

// (2) Tottal Available Validation is Start Form Here
		if (StockcostVar=="") {
			alert("Please Enter CAvailabe Stock");
			return false;
		}

		if (isNaN(StockcostVar) ) {
			alert("Please Enter Cost In Integer Only");
			return false;
		}
//   Date  Validation is start from here      
		if (DateVar=="") {
			alert("Please Select Date");
			return false;
		}

// (3) Description Validation is start from here
		if (DescriptionVar=="") {
			alert("Please Enter Description");
			
		}


}