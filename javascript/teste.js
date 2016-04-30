<!DOCTYPE html>

<head>
<meta href="utf-8">
<title>Untitled Document</title>

</head>

<body>
<form >
<input type="text" id="text1" />
<input type="text" id="text2" />
<input type="button" id="submit" onclick="click()" />
</form>
<script type="text/javascript">
function click(){
var x=document.getElementById("text1");
var y =document.getElementById("text2");
var z = x + y;
 
}
alert (click().z);

</script>
</body>
</html>