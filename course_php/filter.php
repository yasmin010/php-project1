<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
     border-collapse: collapse;
}
th, td {
     padding: 5px;
}

</style>
</head>
<body>
   <table>
         <tr>
         	<td> Filter Name</td>
         	<td> Filter ID</td>

         </tr>
          <?php
           foreach (filter_list() as $id =>$filter) {
          echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        }
           ?>


           <?php
           // using filter_var to remove all HTML tags from a string
           $str= "<h1> Hello world!</h1>";
           $newstr= filter_var($str, FILTER_SANITIZE_STRING);
           echo $newstr ."<br>";




           // using filter_var to check if data is integer or not 
           // filter_var has proble with 0 it take it as string
            $num =0;
            if(!filter_var($num , FILTER_VALIDATE_INT) == false || filter_var($num, FILTER_VALIDATE_INT) == 0 ){
              echo "Integer is valid " ."<br>";
            }
            else{
              echo "Integer is not valid ";
            }

            // filter_validate _id used to check valid ip address
            $ip = "127.0.0.1";
            if(!filter_var($ip, FILTER_VALIDATE_IP) == false){
              echo "$ip is avalid ip address<br>";
            }
            else{
              echo "$ip is not a valid ip address<br>";
            }

            // filter_validate and sanitize an email
            $email ="jasoosaid@gmail.com";
            // to remove all illegal charachter fro email
            $email =filter_var($email , FILTER_SANITIZE_EMAIL);
            // to validate email
            if(!filter_var($email,FILTER_VALIDATE_EMAIL) == false){
              echo "$email is a valid email address.<br>";
            }
            else{
              echo "$email is not a valid email address.<br>";
            }


            // to validate url
            $url ="http://www.w3school.com";
            // to remove all illegal characters fro url
            $url= filter_var($url, FILTER_SANITIZE_URL);

            // TO validate url
            if(!filter_var($url, FILTER_VALIDATE_URL) == false){
              echo "$url is a valid url<br>";
            }
            else{
              echo "$url is not  a valid url<br>";
            }
            // to validate integer with in a range 
            $int1 =132;
            $min = 1;
            $max = 200;

            if(filter_var($int1 ,FILTER_VALIDATE_INT , array("options" => array("min_range"=>$min,"max_range"=>$max))) == false){
               echo("Variable value is not within the legal range<br>");  
            } 
            else{
              echo("Variable value is within the legal range<br>");
            }

            // filter validate ipv6 
            $ipv6= "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
            if(!filter_var($ipv6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) == false){
               echo("$ipv6 is a valid IPv6 address<br>");
            }
            else {
             echo("$ipv6 is not a valid IPv6 address<br>");
             }

             // validate url must contain query
             $url1 = "http://www.w3schools.com";

            if (!filter_var($url1, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
               echo("$url1 is a valid URL<br>");
                 } 
                 else {
                  echo("$url1 is not a valid URL<br>");
                  }
                  // to remove charachter ascii  value >12
              $str1 = "<h1>Hello WorldÆØÅ!</h1>";

                $newstr1 = filter_var($str1, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
                 echo $newstr1;


           ?>




    </table>
</body>
</html>