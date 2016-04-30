
function validation(){
    
    	var id_value_st = document.getElementById("id_st");
    	var pass_st = document.getElementById("password_st");
      var paswod_st = document.getElementById("re_password_st");
      var mails_st = document.getElementById("mail_st");
      var addressIsLegal_st = true;
      var st_id1 = document.getElementById("ids_st");

      var dates_st = document.getElementById("date_st");


        //if id empty
    	if (id_value_st.value == "") {
    		alert("Please enter id.");
    		id_value_st.foucus();
    		      return false;
    	}
      //pass_st is empty
        if (pass_st.value == "") {
            alert("Please enter password.");
            pass_st.foucus();
                  return false;
        }
        //pass is empty
        if (paswod_st.value == "") {
            alert("Please enter confirm password.");
            paswod_st.foucus();
                  return false;
        }
        // if mail is empty
        if (mails_st.value == "") {
             alert("Please enter Email.");
            mails_st.foucus();
                  return false;
        }

        // check if sid is empty
        if (st_id1.value == "") {
             alert("Please enter student_id.");
            st_id1.foucus();
                  return false;
        }
    
        // check if sdate is empty
        if (dates_st.value == "") {
             alert("Please enter student_date.");
            dates_st.foucus();
                  return false;
        }
        //length of id is 5
    	if (id_value_st.value.length < 5) {
    		alert("id should be 5 char..");
    		id_value_st.foucus();
    		      return false;
    	}
        //pass ust only num
    	 for (var y = 0; y <= 4; y++) {  
    	           if (isNaN(id_value_st.value[y])) {
    	             alert("password must contain chars and number.");  
    	              id_value_st.foucus();
    	              return false;    
    	               }    
    	           } 

        // check password min value 9
    	if (pass_st.value.length <= 9) {
    		alert("password should be minimum 9 char.");
    		pass_st.foucus();
    		      return false;
    	}
         // check identical of confirm pass
        if (pass_st.value != paswod_st.value ) {
            alert("confirm password must idectical password");
                  paswod_st.foucus();
                  return false;
        }

        //check mail
        if (mails_st.value.indexOf(" ") !== -1) {  
              addressIsLegal_st = false;     
          }   

       if (mails_st.value.indexOf("@") < 1 || 
        mails_st.value.indexOf("@") > mails_st.value.length - 5) 
       { 
                 addressIsLegal_st = false; 
                     } 
        if (mails_st.value.indexOf(".") - mails_st.value.indexOf("@") < 2 || mails_st.indexOf(".") > mails_st.length - 3) { 
             addressIsLegal_st = false; 
                } 
                 if (addressIsLegal_st === false) {
               alert("Please insert correct email address"); 
                       return false; 
}

// validate student_id
        if (st_id1.value.length < 5) {
            alert("student_id should be 5 char.");
            st_id1.foucus();
                  return false;
        }



    }

