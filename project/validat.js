
function idvalue(){
    
    	var id_value = document.getElementById("ids");
    	var pass = document.getElementById("password");

        var names = document.getElementById("nams");
        var paswod = document.getElementById("re_password");
        var mails = document.getElementById("mail");
        var addressIsLegal = true;
        var st_id = document.getElementById("s_id");

        var dates = document.getElementById("s_date");



        
        // if name is empty 
        if (names.value.length == 0) {
            alert("please enter name"); 
            names.foucus();
            return false;
        }
        //if id empty
    	if (id_value.value == "") {
    		alert("Please enter id.");
    		id_value.foucus();
    		      return false;
    	}
        //pass is empty
        if (paswod.value == "") {
            alert("Please enter confirm password.");
            paswod.foucus();
                  return false;
        }
        // if mail is empty
        if (mails.value == "") {
             alert("Please enter Email.");
            mails.foucus();
                  return false;
        }

        // check if sid is empty
        if (st_id.value == "") {
             alert("Please enter student_id.");
            st_id.foucus();
                  return false;
        }
    
        // check if sdate is empty
        if (dates.value == "") {
             alert("Please enter student_date.");
            dates.foucus();
                  return false;
        }
        //length of id is 5
    	if (id_value.value.length < 5) {
    		alert("id should be 5 char..");
    		id_value.foucus();
    		      return false;
    	}
        //pass ust only num
    	 for (var y = 0; y <= 4; y++) {  
    	           if (isNaN(id_value.value[y])) {
    	             alert("password must contain chars and number.");  
    	              id_value.foucus();
    	              return false;    
    	               }    
    	           } 
            // if pass is empty
    	        if (pass.value == "") {
    		alert("Please enter password.");
    		pass.foucus();
    		      return false;
    	}

        // check password min value 9
    	if (pass.value.length <= 9) {
    		alert("password should be minimum 9 char.");
    		pass.foucus();
    		      return false;
    	}
         // check identical of confirm pass
        if (pass.value != paswod.value ) {
            alert("confirm password must idectical password");
                  paswod.foucus();
                  return false;
        }

        //check mail
        if (mails.value.indexOf(" ") !== -1) {  
              addressIsLegal = false;     
          }   

       if (mails.value.indexOf("@") < 1 || 
        mails.value.indexOf("@") > mails.value.length - 5) 
       { 
                 addressIsLegal = false; 
                     } 
        if (mails.value.indexOf(".") - mails.value.indexOf("@") < 2 || mails.indexOf(".") > mails.length - 3) { 
             addressIsLegal = false; 
                } 
                 if (addressIsLegal === false) {
               alert("Please insert correct email address"); 
                       return false; 
}

// validate student_id
        if (st_id.value.length < 5) {
            alert("student_id should be 5 char.");
            st_id.foucus();
                  return false;
        }



    }

