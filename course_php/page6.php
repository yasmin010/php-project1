<!DOCTYPE html>
<html>
<head>
	<title> output </title>
	<meta charset="utf-8">
</head>
<style>
body {
  display: inline;
}
header, nav, section, article, aside, footer {
	display: block
}
body > header > h1 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 30px;
  margin-bottom: 25px;
  width: 410px;
  text-align: center;
  color: #7C7D84;
}

header > h1, section h3 {
  color: #4F4F57;
}

dt{
  color: #4F4F57;
  padding-left: 20px;
}
nav {
 font-size: 14px;
 margin: 2px 0;
 padding: 0px 0px 10px 20px;  
}

nav li {
 display: inline;
 margin: 2px;
 padding: 5px;
 background-color: blue;
 border-radius: 5px 5px 5px 5px;
}

nav li:hover {
  background-color: #5D60EE;
}

nav a:active{
  position: relative;
  top: 2px;
}

nav li a {
  color: white;
}

nav li:first-child {
 margin-left: 0
}

html nav ul {
 margin-left: -15px;
}

section {
  margin-left: 35px;
  margin-right: 60px;
  margin-bottom: 20px;
  position: relative;
  width: 70%;
  float: left;
}

article header {
  margin-left: 10px;
}

article:hover {
  color: grey;
}

aside {
  float: right;
  position: relative;
  width: 20%;
}

aside li {
  margin-bottom: 10px;
}

footer {
 clear: both;
 color: grey;
 padding: 10px 50px
}
</style>
<body>
	<header>
		<h1> Jose Reboredo Profiles</h1>
	</header>
	<main>
		<section>
		<h2> Contact information </h2>
		<div>
			<dl>
			<dt> Name</dt>
			<dd itemprop="name"> Jose Manuel Reboredo Formoso</dd>
			<dt> position</dt>
			<dd itemprop="jobtitle"> Software Engineer</dd>
			<dt> company</dt>
			<dd itemprop="affiliation">workdigitalltd</dd>
			<dt>Email</dt>
			<dd itemprop="email">vixuesesroman@gmail.com</dd>
			<dt>Address</dt>
			<dd itemprop="address" itemscope itemtype='http://schema.org/postaladress'>
				<span itemprop="addressLocality">Leyton</span>
				<span itemprop="addressRegion">Greater London</span>
                <span itemprop="addressCountry">United Kingdom</span>
                <span itemprop="postalCode">E11 4EU</span>
			</dd>
		</dl>
		</div>
		<nav>
			<ul>
		       <li class="linksocial"><a href="http://twiter.com/vixuses" target="_blank"></a>Twiter</li>
			   <li class="linksocial"><a href="http://facebook.com/Jose.Reboredo" target="_blank"></a>Facebook</li>
		       <li class="linkSocial"><a href="https://github.com/JoseReboredo" target="_blank">GitHub</a></li>
               <li class="linkSocial"><a href="https://plus.google.com/u/0/111702401184807812743" target="_blank">Google+</a></li>
               <li class="LinkSocial"><a href="https://www.linkedin.com/in/reboredojose" target="_blank">Linkedin</a></li>
    </ul>
</nav>
</section>
<section>
      <header>
        <h1>About me (Personal life)</h1>
     </header>
       <article>
            <header>
             <h1>History</h1>
           </header>
           I born th 26th November 1982. So, I am 32 years old.
           I consider me a man without a real country. 
           I grew up in Morges, near Lausanne in Switzerland.
           I spent over there 9 years, from 6 to 15 when I came back to Spain.
           After that I lived during some years in Ourense before going to the universty of Vigo.
           I also lived 6 months in Saarbrocken, Germany.
           I spent over there the best 6 months of my live during my Eramus exchange.
           Now, after some years working in Spain I have made the decision to live in London.
       </article>
       <article>
            <header>
              <h1>Hobbies</h1>
            </header>
             I like playing football, spending time with my friends and family.
              I enjoy traveling, discovering new places. 
              I think we only live once and we are responsible for our life.
        </article>
       </section>
      <section>
          <header>
             <h1>Professional life/studies</h1>
          </header>
       <article>
           <header>
               <h1>Studies</h1>
           </header>
         I am a Telecommunication Engineer that has decided to focus in Software Engineering. 
         I speak french, english and spanish.
         And I also have some skills in german and portuguese.
         I try to keep learning things al the time.
       </article>
       <article>
          <header>
            <h1>Jobs</h1>
          </header>
         I am not very experienced. 
         I have worked in the university during a while. 
         I have participed in some projects as well.
         But my main experience was as PHP developer in Seresco.
       </article>
      </section>
      <aside>
      	<h1>Pictures of me</h1>
        <details>
        <summary>show/hide links</summary>
      	<ul class="tag-cloud">
      		<li><a href=""> picture one</a></li>
      		<li><a href=""> picture two</a></li>
      		<li><a href=""> picture three</a></li>
      		<li><a href=""> picture four</a></li>
      	</ul>
       </details>
      </aside>
      <footer>
      	<p><time datetime="2016-1-24">24/01/2016</time> by 
      	<span translate="no">Reboredo Jose</span></p>
</footer>
      </footer>

	</main>
</body>
</html>