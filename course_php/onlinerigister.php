<!DOCTYPE html>
<html>
<head>
	<title> online rigister</title>
	<meta charset="utf-8">
</head>
<style>
.selects, .info{
	display: inline-block;
	margin-left: 20px;
	margin-right: 30px;
	margin-top: 10px;
	margin-bottom: 20px;
 
}
input{
   margin-bottom: 10px;
}

.info{
	width: 300px;
	margin-right: 40px;
	margin-bottom: 10px;

}

fieldset{
	width: 600px;
	background-color: #eee;
}
main{
	
	padding-top: 10px;
}
h1{
	color: yellow;
}
aside{
	float: right;
	

}


</style>
<body>
   <main>
   	<div>
   		<h1> ONLINE RESERVATION </h1>
   	</div>
   	<fieldset>
   	<div class="selects">
   	Date: <input type="date" name="date">
   	Time: <input type="time" name="time"> 
   	Table: <select>
        	<option>1</option>
        	<option>2</option>
        	<option>3</option>
        	<option>4</option>
        	<option>5</option>
        	<option>6</option>
        	<option>7</option>
        	<option>8</option>
        	<option>9</option>
        	<option>10</option>
        	<option>11</option>
        	<option>12</option>
        	<option>13</option>
        	<option>14</option>
        	<option>15</option>
        	<option>16</option>
        	<option>17</option>
        	<option>18</option>
        	<option>19</option>
        	<option>20</option>
        </select>

        	People:
        	 <select>
        	<option>1</option>
        	<option>2</option>
        	<option>3</option>
        	<option>4</option>
        	<option>5</option>
        	<option>6</option>
        	<option>7</option>
        	<option>8</option>
        	<option>9</option>
        	<option>10</option>
        	<option>11</option>
        	<option>12</option>
        	<option>13</option>
        	<option>14</option>
        	<option>15</option>
        	<option>16</option>
        	<option>17</option>
        	<option>18</option>
        	<option>19</option>
        	<option>20</option>
        </select>
    </div>
        
        <div class="info">
        <span>First name: </span>
		<input type="text" name="fname" >
		 

		
        Last name: 
		<input type="text" name="lname" >
	 
        Email:
		<input type="email" name="mail" >
		
        Phone: 
		<input type="text" name="phone" >
		</label>
   </div>
		
	     Note:
		<textarea name ="comment" rows ="10" cols ="40"></textarea>
           
           <div>
		 	<input type="submit" value="Book Now" name="book" >
		 	</div>
		 
    </fieldset>
    
    <aside>
    <fieldset class="info">
    	<legend>Restaurant</legend>
    	<p>we are happy to book in our restaurant 
    		, we provide rest for you ,food at any time you want ,parties ,offers and finaly we hope to be glade in our restaurant.  </p>
    		</fieldset>
    </aside>


   </main>
</body>
</html>