<!DOCTYPE html>
<html>
<head>
	<title> post </title>
	<meta charset="utf-8">
</head>
<style>
form ,span, input{
	display: block;
	padding: 10px solid;

	margin-bottom: 20px;

}
fieldset{
	padding-right: 24px;
}
label input{
	display: inline-block;
}

</style>
<body>
	
<form  method="$_POST" action="process.php">
	<fieldset>
<legend>personal information</legend>
<span> Name: <input type="text" name="name" required></span>
<span> Date of birth: <input type="date" name="data of birth" required></span>
<span> City: 

	<select required name="city" >
         <option>Cairo</option>
         <option>Alex</option>
         <option>Suiz</option>
         <option>Suhag</option>
    </select>
</span>
</fieldset>
<fieldset>
	<legend>personal information</legend>
<span> Username: <input type="text" name="Username" required></span>
<span> Password: <input type="password" name="password" required></span>
<span> Confirm Password: <input type="password" name="confirmpassword"></span>
<span> E-mail: <input type="email" name="email"></span>
</fieldset>
<fieldset>
	<legend>Extra Details</legend>
	<span> would you like us to contact you?</span>
    <label>
        <input type="radio"  name="contact" value="Yes"> 
        yes
    </label>
    <label>
   <input type="radio" name="contact" value="No">
   No
  </label>
   <label>
   	<span> Select your proper communication tool?</span>
        <input type="checkbox"  name="communication[]" value="sms"> 
        sms
    </label>
    <label>
    <input type="checkbox" name="communication[]" value="phone">
    phone
    </label>
    <label>
     <input type="checkbox" name="communication[]" value="email">
       E-mail
    </label>  
    </fieldset>
     <input type="submit" value="register">
</form>


</body>
</html>