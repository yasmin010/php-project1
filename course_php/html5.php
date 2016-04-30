<!DOCTYPE html>
<html>
<head>
	<title> Simple HTML5 blog</title>
	<meta charset="utf-8">

</head>
<style>

   h1{
   	 padding: 20px 50px;
   	 color: #007e99;
   }
    h1 span{
    	color: red;


      }

      nav {
    font-size: 1.5em;
    margin: 5px 0;
    padding: 20px 50px
}

      nav li{
      	display: inline;
      	margin: 0 15px;

      }

      nav span ,nav a{
      	padding: 3px 15px 4px;
      }

      nav span{
      	color: #fff;
      	background: #722;
      }


      figcaption {
    font-style:italic;
    font-size: 0.8em;
    width: 100%
}

section {
      float: left;
      padding: 35px 0;
      position: relative;
      width: 70%
    }
    
      section article {
        margin: 0 50px 40px;
        padding: 25px 0 0;
        position: relative
      }
      section header {
        font-size: 1em;
        padding: 0;
      }
      section h2 {
        font-size: 2.3em;
      }

aside {
      float: right;
      padding: 70px 0 30px;
      position: relative;
      width: 25%
    }
  
      aside h2 {
        color: #888;
        font-size: 1.8em
      }
      aside .tag-cloud {
        padding: 15px 35px 10px 0;
        text-align: center
      }
        aside .tag-cloud li {
          display: inline
        }
        aside .tag-cloud a {
          color: #69a
        }
        aside .tag-cloud a:hover {
          color: #a67
        }
        aside .tag-cloud .w1 {
          font-size: .8em
        }
        aside .tag-cloud .w2 {
          font-size: 1em
        }
        aside .tag-cloud .w3 {
          font-size: 1.1em
        }
        aside .tag-cloud .w4 {
          font-size: 1.2em
        }
        aside .tag-cloud .w5 {
          font-size: 1.3em
        }
        aside .tag-cloud .w6 {
          font-size: 1.4em
        }
        aside .tag-cloud .w7 {
          font-size: 1.5em
        }
        aside .tag-cloud .w8 {
          font-size: 1.6em
        }
        aside .tag-cloud .w9 {
          font-size: 1.8em
        }
        aside .tag-cloud .w10 {
          font-size: 2em
        }
</style>
<body>
	<h1> Simple <span> HTML5 </span>blog</h1>

	<nav>
		<ul>
		<li a href=""><span> Blog </span></li>
		<li a href=""> About</li>
		<li a href=""> Contact</li>
		</ul>
	</nav>

	<section>
	<header>
         <h2><a href="">Information about this example</a></h2>
         This example is a modified version of <a
              href="http://netstream.ru/htmlsamples/html5-blog/index.html">
         http://netstream.ru/htmlsamples/html5-blog/index.html</a>
     </header>

     <p>Try to move the mouse on different elements. The structure will be highlighted
     and you will be able
     to see the different inclusions of elements one in each other. If you move the 
     cursor to this sentence,
     it will be highlighted in dark grey, showing the presence of an 

     <article> 
     	element,
     surrounded by a
     <section> element (light grey), etc. So we have some articles in a single section
     element. The page
     title at the top is a 
     <header> element, while the tag cloud on the right is a
     <aside> element. The
     main menu on top (with Blog, About, Contact) is a <nav> element.</p>
     
     <figure>
         <img src="http://www.fredcavazza.net/files/2009/09/html5_structure.png"
             alt="Example of HTML5 structural tags" />
         <figcaption>
             Fig. 1 : an example of how new structural elements could be used. This
             page put a
             <nav> on top, and does not have headers and footer for each
             article, like in this figure, but it could... By the way this is a
             <figcaption> inside a <figure> element...
         </figcaption>
    </figure>
   </article>
</section>

<aside>
   <h2>Tag cloud</h2>
   <ul class="tag-cloud">
       <li><a href="" rel="tag" class="w2">ajax</a></li>
       <li><a href="" rel="tag" class="w8">apple</a></li>
       <li><a href="" rel="tag" class="w3">css</a></li>
       
   </ul>
</aside>
 
</body>
</html>