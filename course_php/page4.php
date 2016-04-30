<!DOCTYPE html>
<html lang="en">
<head>
<title> page3</title>
<meta charset="utf-8">
</head>
<style>
header, footer, section{
	padding: 24px 50px;
	color: #fff;

}
header , footer{
	text-align: center;
	background-color: #D2691E;
}
.navigation{
	
	display: left;

}
nav{
	float: left;
	width: 10%;
	text-align: center;
	background-color: lightgreen;
	min-height: 8em;
	margin: .2em;
	padding: .5em;

}
.column{
	margin: .2em;
	padding: 1em;
	background-color: #9df5d7;
	width: 65%;
	min-height: 8em;
	float: left;
	margin-left: 10px;


}
aside
{
	padding: 1em;
	width: 15%;
	background-color: lightBlue;
	margin: .2em;
	float: right;
	margin-bottom: 300px;
	margin-right: 4px;

}
a{
	text-decoration: none;
}
a:hover{
	color: red;
}
footer{
	padding-bottom: 20px;
	margin-top: 500px;
}


</style>
<body>
<header>
<h1> HTML5 Semantics and Flexbox </h1>
</header>
<div class="navigation">
	
	<nav>
		<h1> Navigation </h1>
		<strong> Home <br>
		<a href=""> Link1 </a><br>
		<a href=""> Link2 </a>
	</strong>
	</nav>
</div>
<main class="column">
<article>
        <h2>About This Page </h2>
        <p> On this page, I am experimenting with HTML5 semantics and CSS flexbox for a tidy layout. 
        </p>

         <p> On JS Bin, I purposedly includes the stylesheet on the HTML tab (instead of separate CSS tab) for easier code reading for those with small screen.
         </p>

         <p>The <code>main</code> element is placed within a <code>div</code> element along with <code>nav</code> and <code>aside</code>. I don't know if this is right or wrong (let me know?).</p>

           <p>Navigation links are placed within <code>nav</code>, laid on the left. The <code>main</code> is at the center column (this column). Within it is the main topic (this article).</p>

        <p>The <code>aside</code> element is at the rightmost of the column, I put supplemental information on it.</p>
    </article>
    <article>
        <h2> Test this page! </h2>
        <p>
        	Do test this page by:

        </p>
        <ul>
        	<li>Resizing the browser windows; see if flexbox lives up to its reputation.
        	</li>
        	<li> 
        		Run HTML Outliner or HeadingsMap (or similar tool) and see if the outline is good.
        	</li>
        	<li>
        		Check the markup in this page with W3C Markup validator; see if the markups are good. Paste the URL of this page to the address column.
        		<a href="https://validator.w3.org/" target="_blank">Click here to try!</a>.

        	</li>
        	<li>
        		Check the CSS part of this page too!
        		<a href="https://jigsaw.w3.org/css-validator/" target="_blank">Click here!</a>
        	</li>
      </ul>
       
</article>
</main>
<aside>
    <h2> HTML </h2>
    <p>
       Stands for HyperText Markup Language. The current standard is HTML5.
    </p>
    <h2> CSS </h2>
    <p>
       Stands for Cascaded Style Sheet. The current standard is CSS3.
    </p>
    <h2> URL </h2>
    <p>
    	Short for Uniform Resource Locator. It is a reference (an address) to a resource on the Internet.
    </p>
   </aside>
</div>

  <footer>
  	jan,2016,@yasmin
  </footer>

</body>
<html>