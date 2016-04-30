
function validation_teacher(){
    



    	var id_value_t = document.forms["teacher"]["id"];
       var t_num = document.getElementById("num_t");
    	var pass_t1 = document.getElementById("pass_t");
      var paswod_t = document.getElementById("passwod_t");
      var mails_t = document.getElementById("mail_t");
      var addressIsLegal_t = true;

        //if id empty
    	if (id_value_t.value == "") {
    		alert("Please enter teacher id.");
    		id_value_t.foucus();
    		      return false;
    	}
      //t_num is empty
        if (t_num.value == "") {
            alert("Please enter teacher_num.");
            t_num.foucus();
                  return false;
        }
        //pass is empty
        if (pass_t1.value == "") {
            alert("Please enter password.");
            pass_t1.foucus();
                  return false;
        }
        // if confirm pass is empty
        if (passwod_t.value == "") {
             alert("Please enter confirm password.");
            passwod_t.foucus();
                  return false;
        }
         //check email empty
        if (mails_t.value == "") {
             alert("Please enter email.");
            mails_t.foucus();
                  return false;
        }

        //length of id is 5
    	if (id_value_t.value.length < 5) {
    		alert("id should be 5 char..");
    		id_value_t.foucus();
    		      return false;
    	}
        //id ust only num
    	 for (var y = 0; y <= 4; y++) {  
    	           if (isNaN(id_value_t.value[y])) {
    	             alert("password must contain chars and number.");  
    	              id_value_t.foucus();
    	              return false;    
    	               }    
    	           } 


        if (t_num.value.length <= 5) {
        alert("teacher_num should be minimum 5 number.");
        t_num.foucus();
              return false;
      }
        // check password min value 9
    	if (pass_t1.value.length <= 9) {
    		alert("password should be minimum 9 char.");
    		pass_t1.foucus();
    		      return false;
    	}
         // check identical of confirm pass
        if (pass_t1.value != passwod_t.value ) {
            alert("confirm password must idectical password");
                  passwod_t.foucus();
                  return false;
        }

        //check mail
        if (mails_t.value.indexOf(" ") !== -1) {  
              addressIsLegal_t = false;     
          }   

       if (mails_t.value.indexOf("@") < 1 || 
        mails_t.value.indexOf("@") > mails_t.value.length - 5) 
       { 
                 addressIsLegal_t = false; 
                     } 
        if (mails_t.value.indexOf(".") - mails_t.value.indexOf("@") < 2 || mails_t.indexOf(".") > mails_t.length - 3) { 
             addressIsLegal_t = false; 
                } 
                 if (addressIsLegal_t === false) {
               alert("Please insert correct email address"); 
                       return false; 
}



    }

