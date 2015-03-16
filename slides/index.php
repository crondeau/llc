<!DOCTYPE html>
<html>
  <head>
    <title>Ladies Learning WordPress</title>

    <meta charset='utf-8'>
    <script src='assets/default.js'></script>
    <link rel="stylesheet" href="styles.css">
  </head>
  
  <?php function output($code){ echo htmlentities($code); }; ?>

  <body style='display: none'>

    <section class='slides layout-regular template-default'>
      <img src='assets/images/ladieslearningcode-125x125.gif'>
      <article class="home">
        <h1>
          Ladies Learning 
          <br>
          WordPress
        </h1>
        <p>
          <strong>Your Lead Instructor Today: Christine Rondeau</strong>
        </p>
          <ul>

            <li><a href="http://bluelimemedia.com">bluelimemedia.com</a></li>
            <li><a href="http://twitter.com/bluelimemedia">@bluelimemedia</a></li>
          </ul>
        <p>Open these slides in a modern browser and use your arrow keys to follow along</p>
        <br>
        <p><em>Original Content by <a href="http://www.wesbos.com">Wes Bos</a></em></p>
		<p>Slides are available at <a href="https://github.com/crondeau/llc">https://github.com/crondeau/llc</a></p>
      </article>


      <article>
        <h3>Agenda</h3>
		<p><strong>Friday evening</strong></p>
        <ul>
			<li>What is WordPress</li>
			<li>Set up our local server</li>
			<li>Set up a database</li>
			<li>Install WordPress locally</li>
		 </ul>
		</article>
		<article> 
		<h3>Agenda ctn...</h3>
		<p><strong>Saturday</strong></p>
        <ul>
          <li>Understand the anatomy of a WordPress theme and how we use it to display content</li>
          <li>Hack our theme</li>
          <li>Work with Twitter</li>
          <li>Plugins + Widgets</li>
          <li>Final Exercise</li>
        </ul>
      </article>

      <article>
        <h3>What is WordPress?</h3>
        <ul>
          <li>An Open Source Content Management System (CMS) used to power thousands of websites</li>
          <li>Initially used for blogs</li>
          <li>Powerful enough to run large websites and applications</li>
          <li>Used by Mashable, CNN, ,Techcrunch, Jay-z and many more...</li>
        </ul>
      </article>

	<article>
		<h3>WordPress.com vs WordPress.org</h3>
		<p>WordPress.com is hosted for you - No servers or code required!</p>
		<p>WordPress.com doesn't allow for a lot of customization. No plugins or custom themes.</p>
		<p></p>
		<p>WordPress.org can be downloaded and needs to be hosted.</p>
		<p>Self-Hosted sites allow for 100% customization - themes, plugins, etc..</p>
	</article>

      <article>
        <h3>Terminology</h3>
        <div>
          <p><strong>localhost</strong> - Local Server (MAMP or XAMPP) - A small service that runs on your laptop which mimics the functionality of a large, paid server. We are able to work on our website without uploading it anywhere.</p>
          <p><strong>PHP tags</strong> - PHP is the programming language WordPress is written in. When we need to use PHP, we put it inside <span class="red"> <?php output('<?php and ?>'); ?></span> tags so our server will know to process it as PHP.</p>
          <p><strong>stylesheet</strong> - The style.css file within our theme. From this file we control the colours, fonts, sizes and all style elements for our website.</p>
          <p><strong>Dashboard</strong> - The WordPress back end you see when you first log into your website.</p>
          </div>
      </article>
      <article>
          <div>
          <p><strong>Codex</strong> - The WordPress documentation. Very helpful when you require a reference or assistance with a certain part of WordPress. <a href="http://codex.wordpress.org/">http://codex.wordpress.org/</a></p>
          <p><strong>Permalinks</strong> - Human readable URL. When turned on, WordPress changes the url structure from something like MySite.com/?p=54 to MySite.com/contact-me</p>
          <p><strong>Theme</strong> - The collection of files that we use to lay out and style our WordPress website. WordPress allows you to easily change and modify themes without losing any of your posts or pages.</p>
          <p><strong>Template</strong> - A specific file within our theme that lays out either an entire page or part of a page. For example, page.php is the template within our theme that lays out the structure for all of our pages</p>
          </div>
          </article><article>
          <div>
          <p><strong>Post</strong> - A piece of content that is stored within the database. When we use the word post, we are referring to a blog post.</p>
          <p><strong>Plugin</strong> - An installable package that adds functionality to your Wordpress website. </p>
          <p><strong>Query</strong> - A request to the database that asks for certain posts based on several supplied parameters. </p>
          </div>
      </article>

	<article>
		<h3>What you need?</h3>
		<p>To make changes to your theme you will need a <strong>text editor</strong>.</p>
		<p>All code is written in plain text, so you can use notepad or textedit to edit your theme, but using a text editor makes things easier.</p>
		<p>There are plenty of text editors - Coda, Sublime Text, text wrangler, NotePad++, TextMate, vim... </p>
		<p>We recommend using <a href="http://www.sublimetext.com/2">Sublime Text</a> which has an unlimited trial but you are welcome to try anything you like - your table's mentor may have a specific favorite too!</p>
	</article>
  
  <article>
	  <h3>Setting up WordPress locally</h3>
	  <p>To develop your site on your computer, you'll need to run a "local server" which essentially mimicks a web server and includes<br> Apache, MySQL and PHP.<br><br></p> 
	  <ul>
		  <li>If you’re on a Windows computer download <a href="http://www.apachefriends.org/en/xampp-windows.html">XAMP</a> or <a href="http://bitnami.com/">Bitnami</a></li>
		  <li>If you’re running a Mac download <a href="http://www.mamp.info/en/index.html">MAMP</a></li>
	  </ul>
  </article>
  
  <article>
	  <h3>Download WordPress</h3>
	  <p>Go to <a href="https://wordpress.org/download/">WordPress.org</a> and download WP 4.1.1.</p>
</article>

      <article>
        <h3>Code + Database = <span class="red padbottom">&hearts;</span></h3>
         <div>
          <img src="http://cl.ly/C1dr/Screen%20Shot%202011-11-21%20at%2010.07.51%20PM.png" alt="">
          <p>The database holds our data and the code defines how and when the data is printed to the page. The two work together to <span class="red">output HTML</span>.</p>
          <p><span class="red">/wp-admin</span> and <span class="red">/wp-includes</span> holds the engine of WordPress - we don't touch it. <span class="red">/wp-content</span> holds our specific content like themes, plugins and image uploads.</p>
        </div>
      </article>

      <article id="install">
      <style type="text/css">#install p.small {font-size: 22px; }</style>
        <h3 class="padBottom">Installing WordPress!</h3>
        <p>This can be a little tricky the first time, so let's go over the steps.</p><br>
        <div class="build">
          <p><strong>Step 1</strong>: For Mac users, unzip the WordPress package. For PC users, <em>extract</em> the files.  Then you'll have a folder called <span class="red">wordpress</span>. </p>
          <p><strong>Step 2</strong>: Move the <span class="red">wordpress</span> folder to your local server (localhost).</p>
          <p class="small">TIP: Make sure you only have one folder called wordpress. You shouldn't have a folder called wordpress inside of one called wordpress! To find the folder:<br>
          <strong>Windows:</strong><br>
          If you installed XAMPP in your c: drive, it should be located here: c:\xampp\htdocs\<br>
          <strong> Mac: </strong><br>
          Click the MAMP icon &rarr; Preferences &rarr; Web Server and under Document Root, you will see the file path.</p>
          <p><strong>Step 3</strong>: Open PHPmyadmin and create a DB (database) called <span class="red">llc</span></p>
          <p class="small"><strong>Windows:</strong> Go to <a href="http://localhost" target=_blank>http://localhost</a> <strong>Mac: </strong>Go to <a href="http://localhost:8888/MAMP/" target=_blank>http://localhost:8888/MAMP/</a><br>
          <strong>Both:</strong> click the PHPMyAdmin link.</p>
        </div>
      </article>

      <article>
          <div class="build">
            <p><strong>Step 4</strong>: Rename <code>wp-config-sample.php</code> to <code>wp-config.php</code> and open it</p>
            <p><strong>Step 5</strong>: Open in your text editor</p>
            <p><strong>Step 6</strong>: Set the below.</p>
            <img src="http://cl.ly/C1Tn/Screen%20Shot%202011-11-21%20at%2010.26.16%20PM.png" alt="">
            <p class="small"> <span class="red">Windows Users: Leave password blank.</span></p>
            <p><strong>Step 6</strong>: Surf to <a href="http://localhost/wordpress" target=_blank>http://localhost/wordpress</a> or <a href="http://localhost:8888/wordpress" target=_blank>http://localhost:8888/wordpress</a> in Chrome (or your favorite browser like Firefox or IE10) and install!</p>
          </div>
      </article>

      <article>

		  <img src="http://cl.ly/image/1k3v273o1x0J/Image%202015-01-26%20at%208.59.22%20AM.png" style="margin: 0 auto; display: block;" alt="">
      </article>
      <article>
        <img src="http://cl.ly/image/191A1e1b1q1U/Image%202015-01-26%20at%209.03.16%20AM.png" alt="">
      </article>

      <article>
        <h3>Adding Content</h3>
        <p>Create some <em>dummy content</em> for your website so we can work with the site.</p>
        <p>Create <strong>7 posts</strong>, fill them with some dummy content and make sure to add a few <strong>tags/categories</strong> to each.</p>
        <img src="http://cl.ly/image/0r2a0Z2q3s0G/Screenshot%202015-01-26%2009.14.45.png" alt="">
        <p>See next slide for more content additions.</p>
      </article>
      <article>
        <p>Create <strong>3 pages</strong> called Blog, Contact and Home.</p>
        <img src="http://cl.ly/image/1R1U1C3R0P3D/Screenshot%202015-01-26%2009.15.00.png" alt="">
        <p>The boring parts are almost done, I promise! Have some fun with any of these Lorem Ipsum dummy text generators:</p>
        <p><a href="http://meettheipsums.com/" target="_blank">meettheipsums.com</a></p>
      </article>

      <article>
          <h3>Customizing Settings</h3>
          <p>Set the Blog page and Home page accordingly and switch # of posts to 5.
          <span class="small">Found under Settings->Reading</span></p>
          <img src="http://cl.ly/image/331A2Y0c0b2h/Image%202015-01-26%20at%209.30.55%20AM.png" alt="">
         <!--  <p><img src="http://cl.ly/BuMH/Screen%20Shot%202011-11-17%20at%203.05.41%20PM.png" alt=""></p>
          <p>2. switch # of posts to 5 <img src="http://wes.io/MLov/content" alt=""> </p> -->
      </article>

      <article>
        <p><strong>Remember Permalinks?</strong> Lets turn on pretty permalinks</p>
        <p class="small">Settings->permalinks</p>
        <p><img src="http://wes.io/MLtT/content" alt=""></p>
      </article>


      <article class="center" style="background:url(http://www.drodd.com/images10/clapping-gif12.gif); background-size:cover;">
        <h3 style="color:white;">You're done settings up!</h3>
      </article>

      <article>
        <h3 class="padBottom">WordPress Themes</h3>
        <div>
          <p>Themes control how your site looks.</p>
          <p>Your Data (Posts, Page, Comments...) is stored in the database so you wont lose your data if you switch!</p>
          <p>There is no limit to what a WordPress theme can look like.</p>
          <p>There are thousands of themes available for free or for pay.</p>
          <p>Many great WP Developers got their start tweaking existing themes.</p>
          <p>So... Thats what we're going to do today!</p>
        </div>
      </article>


      <article>
        <h3>Some good and trusted theme resources</h3>
          <p>Wordpress.org/extend/themes - All Free</p>
          <p>Themify.me Paid &amp; Free</p>
          <p>WooThemes.com - Paid and Free</p>

          <p>+ Many More - anyone have a favourite?</p>
      </article>

      <article>
        <h3>The Ladies Learning Code theme</h3>
        <p>The default theme is a little confusing, lets install a simpler one we can build upon!</p>
        <p>All themes live in <code>/wp-content/themes</code></p>
        <p>In your <strong>learnerfiles</strong> folder, move (drag+drop) the <strong>ladies-learning-code</strong> folder into your <code>/wp-content/themes</code> folder</p>
        <p><img src="http://cl.ly/C0CJ/Screen%20Shot%202011-11-21%20at%2011.02.09%20PM.png" alt=""></p>
        <p>Under <strong>Appearance &rarr; Themes</strong>, you will now see our Ladies Learning Code theme. Activate it.</p>

      </article>

      <article>
        <h3>Anatomy of a WordPress Theme</h3>
        <p>A WordPress Theme is made up of a number of template files that are used to display different pages on your site</p>
        <br>
        <h3 class="padTop">For Example...</h3>
        <br>
        <p><code>single.php</code> is used to show a single blog post while <code>index.php</code> is used to display the main blog page listing, your most recent posts. More on this later.</p>
      </article>

      <article>
        <h3>Theme Layout Basics</h3>
        <p>Most template pages can be broken down into the following:</p>
        <pre>
<?php output('<?php get_header(); ?>

{ The Page\'s Content and the Loop live Here}

<?php get_sidebar(); ?>

<?php get_footer(); ?>'); ?>
        </pre>

      </article>

      <article>
        <img src="http://cl.ly/Buih/Screen%20Shot%202011-11-17%20at%204.38.53%20PM.png" alt="">
      </article>

      <article>
        <img src="http://wes.io/VAzp/content" style="height:100%;" alt="">
      </article>

      <article>
        <h3>Exercise #2</h3>
        <div>
          <p>Let's get comfortable with the basic building blocks of our theme. We're going to edit <code>sidebar.php</code> and <code>footer.php</code></p>
          <h3 class="padTop">Exercise #2: Task #1</h3>
          <p>Open <code>footer.php</code> add your name to the copyright. Save it and refresh your website.</p>
          <p>You now have your name at the bottom of your website. Easy, eh?</p>
          <p>Let's step it up a notch!</p>
        </div>
      </article>  

      <!-- <article>
        <h3 class="">Exercise #2: Task #2</h3>        
        <div class="build">
          <p>Placing an image in the header.</p>
          <p><strong>Step 1:</strong> Open <code>header.php</code> and find the line that looks like this:</p>
          <pre> <?php output("<h1><a href=\"<?php echo home_url( '/' ); ?>\">
          <?php bloginfo( 'name' ); ?></a></h1>") ?> </pre>
          <p>Delete it!</p>
          <p>Now we're going to do two things: 1. Create a link, 2. Put an image inside that link.</p>
          
        </div>

      </article> 

      <article class="smallcode">
          <strong>Making a dynamic Link to our blog home page</strong>
          <pre> <?php output("<a href=\"<?php echo home_url( '/' ); ?>\">IMAGE HERE</a>") ?> </pre>
          outputs:
          <pre><?php output('<a href="http://localhost/wordpress">IMAGE HERE</a>'); ?></pre>
          <strong>Add the Image</strong>
          <p>We need the <code>path to the image</code> and <code>the file name</code></p>
          <pre><?php output('<img src="<?php bloginfo("template_directory"); ?>/i/header.png" />')?></pre>
          outputs:  
          <pre><?php output('<img src="http://localhost/wordpress/wp-content/themes/ladies-learning-code/i/header.png" alt="">');?></pre>

      </article>

      <article class="smallcode">
      <style type="text/css">
      .smallcode pre {
        font-size:18px;
      }
      </style>
        <h3>Put it all together!</h3>
        <pre>
<?php output("
  <a href=\"<?php echo home_url( '/' ); ?>\">
      <img src=\"<?php bloginfo(\"template_directory\"); ?>/i/header.png\" />
  </a>
"); ?>
        </pre>
        <strong class="padbottom">You should now have a banner image in your header</strong>
        <img src="http://cl.ly/C0EL/Screen%20Shot%202011-11-22%20at%2012.14.38%20AM.png" alt="">
      </article>

      -->

      <article>
        <h3 class="padBottom">Adding a picture of you to the sidebar!</h3>
        <div>
          <p>Open <code>sidebar.php</code> and look for these comments:</p>
          <img src="http://cl.ly/C04f/Screen%20Shot%202011-11-22%20at%2012.21.27%20AM.png" alt="">
          <p>In our theme folder, we have an image called <code>portrait.png</code> in our <code>i</code> folder. Let's use that one to embed into the sidebar. If you wish you use your own image, simply put your image in the <code>i</code> folder.</p>
        </div>
      </article>

      <article>
          <p>To embed the image, we use an <code>img</code> tag. Here we will use a template tag to get the full path to the image in our theme folder. We need the <code>path to the image</code> and <code>the file name</code></p>
          
          <pre><?php output('<img src="<?php bloginfo("template_directory"); ?>/i/portrait.png">')?></pre>
          
          outputs:  

          <pre><?php output('<img src="http://localhost/wordpress/wp-content/themes/ladies-learning-code/i/portrait.png" alt="">');?></pre>

        </div>

      </article>

      <article>
        <h3>You're Done!</h3>
        <p>You should now have an image in your sidebar</p>
        <img src="assets/images/sidebar.png" alt="">
      </article>


      <article class="defs">
        <h3>What are all these other files?</h3>
        <p>Different Pages can be displayed with different layouts.</p>
        <p>Example: 2010 Archives can have a different layout than a category view.</p>
         <p>Let's take a look at the important template files ones in our theme... <p>
      </article>
      <article>
        <!-- <p><strong>404.php</strong> - Displays when no page is found</p> -->
        <p><strong>archive.php</strong> Shows Archives of old posts</p>
        <!-- <p><strong>attachment.php </strong>- Not really used, for displaying indivdual pictures</p> -->
        <p><strong>author.php</strong> - Displaying all posts by a certain author</p>
        <p><strong>category.php</strong> -  Displaying all posts within a certain Category</p>
        <!-- <p><strong>comments.php </strong>- The layout of comments under your posts</p> -->
        <p><strong>footer.php</strong> - The footer that is appended at the bottom of every page </p>
        <p><strong>functions.php</strong>  -Commonly used for enabling theme features such a custom navigations and post thumbnail sizes</p>
        <p><strong>header.php</strong>- The header that is appended at the bottom of every page </p>
        <p><strong>index.php</strong>- The front page of your blog, displays the latest <em>n</em> posts  </p>
      </article>

      <article class="defs">
        <!-- <p><strong>humans.txt</strong>-  </p> -->
        <!-- <p><strong>/i</strong>-  </p> -->
        <!-- <p><strong>/js</strong>-  </p> -->
        <p><strong>loop.php</strong> - A reuseable file to display posts (much more later!) </p>
        <p><strong>page.php</strong>-  Default template for displaying pages</p>
        <!-- <p><strong>screenshot.png</strong>-  </p> -->
        <p><strong>search.php</strong>- Template for displaying search results  </p>
        <!-- <p><strong>searchform.php</strong>-  </p> -->
        <p><strong>sidebar.php</strong>- Sidebar that is appended to every page </p>
        <p><strong>single.php</strong>- Default template used for displaying a single post </p>
        <!-- <p><strong>style.css</strong>-  </p> -->
        <p><strong>tag.php</strong> - Displaying all posts within a certain tag </p>
        <p><strong>Not sure which?</strong> Edit the file, refresh the page, and see if you got the right one!” ie. don’t be afraid to start.</p>

        <p>For more info about templates, see the <a href="http://codex.wordpress.org/Template_Hierarchy" target="_blank">Wordpress Template Hierarchy</a> documentation.</p>
      </article>

<!--       <article>
        <h3>But how does it know what file to use?</h3>
        <p>WordPress has something called the Template Hierarchy.</p>
        <img src="http://codex.wordpress.org/images/thumb/1/18/Template_Hierarchy.png/750px-Template_Hierarchy.png">
      </article>

      <article class="">
        <h3>When someone visits your website, wordpress figured out what sort of page they are looking for based on this Hierarchy </h3>
        <p>Print this out and tape it to your wall. Very important in understanding theme development.</p>
        <br><br>
        <strong><p>Lets Step through mysite.com/tag/dogs</p></strong>
        <p>What Page? &rarr; archive page &rarr; What kind? A tag &rarr; Do we have tag-dogs.php? nope. &rarr; Do we have tag-3.php? Nope &rarr; Do we have tag.php? Yep! Lets use that!</p>
        <p>If wordpress doesnt find a template file, it always falls back to index.php to try and display it</p>

      </article> -->


      <article>
        <h3>CSS 101</h3>
        <div>
          <p>Before we can start customizing our WordPress theme, it will be helpful to learn the basics of CSS. We won't be diving too deep into CSS as it's a huge topic on its own, but let's take a quick look.</p>
          <p>CSS stands for Cascading Style Sheets, they allow you easily add style to the elements on your website. Examples of elements are heading tags, images, divs (content and sidebars), links and lists.</p>
          
          <p>For today, it's enough to open the <code>style.css</code> file in your theme and try changing the colours and fonts from there.</p>

          <p>A basic CSS definition has three parts: <strong>selector, property and value.</strong> </p>
        </div>
      </article>

<article>
<h3>Selectors</h3>
<p>The <strong>Selector</strong> defines which element the CSS will be applied to.</p>
        <pre>

<?php output('<div class="post"> ... </div>'); ?> 
div.post { ... }

<?php output('<span class="date"> ... </span>'); ?> 
span.date { ... }

<?php output('<span class="category"></span> <div class="meta"></div>'); ?>  
span.category, div.meta { … } 

<?php output('<div class="parent"><div class="child"></div></div>'); ?> 
div.parent div.child { ... }

        </pre>  
</article>   


<article>
  <h3>The Property and Value</h3>
  <p>The <strong>property</strong> defines which style is being set on the current <strong>selector</strong> and the value set it.</p>
  <p>There are hundreds of CSS Properties, here a few popular ones for a div with the class of wrapper</p>
<pre>
.wrapper {
  background : black;
  border:2px solid green;
  font-family:Georgia, sans-serif; 
} 
</pre>
<p>Let's go through a bunch of common CSS...</p>
</article>


<article>
<pre>a {
  text-decoration: none; /* Removes all underlines from links */
  color: blue; /* Changes all links to blue */
}</pre>

<pre>a:hover {
  color: red; /* Changes all links to red  only when we hover*/
}</pre>

<pre>.post {
  background : url(relative/pathp/to/the/background.png); /* Add an image to the background */
  border: 3px solid yellow; /* add a yellow border */
  padding:20px; /* Increase padding to 20px */
}</pre>

</article><article>
<pre>.post h2 a { /* finds .post -> Heading 2 -> links */
  font-size:40px; 
  font-family: georgia, sans-serif; /* change the font */
  border-bottom:3px solid goldenRod; /* Changes the bottom border only to goldenRod colour*/
}</pre>


<pre>ol li { /* Selects all ordered list items */
  list-style-type: upper-roman;  /* Changes from 1,2,3 to I, II, III...*/
}</pre>

</article><article>
<pre>{
  list-style-type: square; /* changes from circle bullets to squares*/
  font-style: italic;
}</pre>

<pre>.more {
  float: left; /* other possible values: right, none */
  text-align: center; /* other possible values: left, right, inherit */
  margin: 10px 20px 15px 25px; /* Top Right Bottom Left margin values*/
  font-weight: bold;
  width: 100%;
  height: 500px;
  overflow: scroll; /* anything over 500px high will have scrollbars */
}</pre>
  
</article>

   




      <article>
        <h3>Exercise #3: Theme Customization!</h3>
        <p>Now that we have a good feel for our theme layout, let's customize it a little more</p>
        <p>1. Change the background colour for our site</p>
        <p>2. Add a pattern to the background</p>
        <p>3. Change the link colour from red to something else</p>
        <p>4. Add a background colour to our nav links when you hover them</p>
        <p>5. Center your website title</p>

      </article>

      <article>
        <h3>1. Change the background colour</h3>
        <div class="build">
          <p>Open your style.css file</p>
          <p>Locate the line that sets the body background colour</p>
          <img src="assets/images/css1.png" alt="">
          <p>Change it to whatever colour you want!</p>
<p style="font-size:19px;"><span class="block" style="background: #BADA55;">#BADA55</span> <span class="block" style="background: #B1009A; color:white;">#B1009A</span> <span class="block" style="background: pink; color:white;">pink</span>
<span class="block" style="background: papayaWhip;">papayaWhip</span> <span class="block" style="background: goldenrod; color:white;">goldenrod</span> <span class="block" style="background: seaGreen; color:#fff;">seaGreen</span><br><br>
          <span class="block" style="background: whiteSmoke;">whiteSmoke</span>
          <span class="block" style="background:tomato;">tomato</span>
          <span class="block" style="background:thistle;">thistle</span>
          <span class="block" style="background:skyBlue;">skyBlue</span>
          <span class="block" style="background:yellowGreen;">yellowGreen</span>
          </p>
          
          <p>Visit <a href="http://flatuicolors.com/" target=_blank>flatuicolors.com</a> or <a href="http://colours.neilorangepeel.com/" target="_blank">colours.neilorangepeel.com</a> for some inspiration!</p>

        </div>
      </article>

      <article>
        <h3>2. Add a background pattern</h3>
        <p>Find your <code>body</code> selector and add the following code:</p>
        <pre><?php output("background: url(i/bg1.png);"); ?></pre>
        <p>This will pull the files from your <code>i</code> folder within your theme. Take a look at the available 4 images or download your own from <a href="http://subtlepatterns.com/">subtlepatterns.com</a>.</p>
      </article>

      <article>
        <h3>3. Change the link colour from red to something else</h3>
        <p>To select links with CSS, we use the <code>a { ... }</code> selector. Find this in your code and change the link colour to something else</p>
        <img src="assets/images/link-colour.png" alt="">
      </article>

      <article>
        <h3>4. Add a background colour to our nav links when you hover them</h3>
        <p>Our navigation is simply just a list of links that have been styled. We can change the look of these links with the navigation link selector. We can also change the colour or background colour on hover. Let's try that!</p>
        <img src="assets/images/nav-hover.png" alt="">
      </article>

      <article>
        <h3>5. Center your website title</h3>
        <div class="build">
          <p>Your website title is aligned to the left by default. Let's write some CSS to center this.</p>
          <p>In <code>style.css</code> look for the <strong>Hero Styling</strong> section:</p>
          <img src="assets/images/center-title.png" alt="">

          <p>Under the <code>.hero</code> selector, add <code>text-align:center;</code></p>
          <img src="assets/images/tac.png">

        </div>
      </article>


<!--       <article>
        <h3>Lets try it!</h3>
        <p>Open up a few files template files and type <pre>"Hello, I'm editing {insert the name of the file here}"</pre> at the top. Save those files and them surf around your website.</p>
        <p>Can you find where you made the edits?</p>

        <p><img src="http://cl.ly/BvVT/Screen%20Shot%202011-11-17%20at%204.00.43%20PM.png"></p>
        <p><img src="http://cl.ly/BuYw/Screen%20Shot%202011-11-17%20at%204.01.16%20PM.png" alt=""></p>
      </article>
 -->


      <article class="center">
        <h3 class="fullSlide">The Loop</h3>
      </article>

      <article>
        <h3>What is the loop?</h3>
        <div>
          <p>The loop is the lifeblood of a WordPress Theme, is it use to iterate over and display each of the posts that are available on a given page.</p>
          <h3 class="padTop">The Loop in plain english</h3>
          <p>“For as long as there are posts to show, show them”</p>
          <p>Our home page loop shows 5 posts, but a single post page only shows 1.</p>
          <p>Every page has at least a basic loop to output that page's content.</p>
        </div>
      
      </article>

      <article>
        <p><img src="http://cl.ly/C20B/Screen%20Shot%202011-11-22%20at%205.58.51%20PM.png" alt=""></p>
      </article>

      <article>
        <h3>Sudo Loop</h3>
        <p>This is the logic behind the loop in plain english</p>
<pre>
  if we have posts
      while we have posts
         1. The Code in here is run once for every piece of content 
            retrieved from the database
         2. We might want to output the title, the date and the content
      end while
  end if
</pre>
      <h3 class="padTop">Confused?</h3>
      <p>Lets step through how WordPress works if someone visits your blog home page and when someone visit your blog page.</p>

      </article>

      <article>
        <h3>The Loop Steps</h3>
        <div>
          <p>1. The blog page is requested by the user. WordPress asks the database for all content for that page.</p>
          <p>2. The database returns 5 of the latest blog posts</p>
          <p>3. WordPress first grab the header.php file and starts the page output</p>
          <p>4. WordPress then hits the loop. Since we have 5 posts from the database, we output the code within the loop 5 times</p>
          <p>5. WordPress is done the loop, it moves on and outputs the sidebar and the footer</p>
        </div>
      </article>

      <article>
        <h3>The Code</h3>
        <p>A stripped down look outputting only the title and the content.</p>
<pre><?php output("<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>

<?php endwhile; ?>
"); ?>
</pre>
      <h3 class="">Still Confused? Dont Worry!</h3>
      <p>Our WordPress theme comes with the loop.php which handles most of this for you.</p>
      <p>You just need to be aware of how the loop works and what it looks like so you can edit it!</p>
      </article>

      <article>
        <h3>Template Tags</h3>
        
        <div>
        <p>Wondering how to actually get your content onto the page while you're inside the loop?</p>
          <p>Template tags are short little PHP functions that will output content from your site.</p>
          <p>No knowledge of PHP is required.</p>
          <p>Most template tags only work within the loop</p>
          <p>Others are global and can be used anywhere on the site</p>
          <p>Remember we used <span class="red"><?php output("<?php echo home_url( '/' ); ?>"); ?></span> in our header?</p>
        </div>
      </article>

      <article>
        <h3>Template Tag Examples</h3>
        <div>
          <p>There are hundreds of template tags</p>
          <p class="small"><a href="http://codex.wordpress.org/Template_Tags">http://codex.wordpress.org/Template_Tags</a></p>
          <img src="assets/images/template-tags.png" alt="">
          <p>Lets take a look at some of the commonly used ones.</p>
        </div>
      </article>

      <article>
        <div class="build">
          <p><?php output("<?php the_title(); ?>"); ?></p>
          <p><?php output("<?php the_content(); ?>"); ?></p>
          <p><?php output("<?php the_excerpt(); ?>"); ?></p>
          <p><?php output("<?php the_permalink(); ?>"); ?></p>
          <p><?php output("<?php the_time(); ?>"); ?></p>
          <p><?php output("<?php the_tags(); ?>"); ?></p>
          <p><?php output("<?php the_category(); ?>"); ?></p>
          <p><?php output("<?php comments_template(); ?>"); ?></p>
          <p><?php output("<?php the_author(); ?>"); ?></p>
          <p><?php output("<?php the_post_thumbnail(); ?>"); ?></p>
        </div>
      </article>

      <article>
        <h3>Exercise #4: Working with single.php and the loop</h3>
        <p>1. Open single.php in your editor</p>
        <p>Type <span class="red">Hello, I'm editing single.php!</span> on the second line.</p>
        <img src="assets/images/editing-single.png" alt="">
        <p>Save the file and go to a single post on your website</p>
        <p>Do you see where it says <span class="red">Hello, I'm editing single.php!</span> </p>
        <p>We don't see this on any other page because single.php only controls single blog posts.</p>
      </article>

      <article>
        <h3>2. Add a post thumbnail with template tags to our single.php</h3>
        <p>Want to associate an image with each of your posts? Let's create something like this:

        <img src="assets/images/post-thumbnail.png" alt="">

        
      </article>

      <article>
        <p>Go into the WordPress admin an edit one of your posts.</p>
        <p>At the bottom right, click set featured image.<img src="http://wes.io/V8TP/featured"></p>
        
        <p>Select and upload a file. You will need a rather large image for this. If you don't have any available, use the provided images in the learner files folder.</p>
      </article>

      <article>
        <p>When the upload is finished, select "Set featured image" from the bottom right</p>
        <img src="http://wes.io/V8S2/set-featured-image" alt="">
      </article>

      <article>
        <div>
        <p>Click update <img src="http://cl.ly/C2Lt/Screen%20Shot%202011-11-22%20at%2010.35.29%20PM.png" alt=""></p>
          <p>and then view the post. <img src="http://cl.ly/C2dp/Screen%20Shot%202011-11-22%20at%2010.35.53%20PM.png" alt=""></p>
          <p>The image doesn't appear! Why not? We need to use the template tag to add it to our theme!</p>

          <p>We will use the template tag <code>the_post_thumbnail()</code> to pull the image in. In single.php look for the comments and use the following code:</p>

          <p><code><?php output("<?php the_post_thumbnail('wide');?>") ?></code></p>

          <p><img src="http://wes.io/V8Ut/post-thumbs" alt=""></p>
        </div>

      </article>

      <article class="smallcode">
        <img src="assets/images/post-thumbnail.png" alt="">
      </article>

      <article>
        <h3>Adding a sub-title to our website</h3>
        <p>On every page we want to have a sub-title tagline underneath the website title.</p>
        <img src="http://wes.io/V7Lo/final-product" alt="">
      </article>

      <article>
        <h3>Step 1: Adding the sub title</h3>
        <p>First we need to add the sub-title description to our <code>header.php</code> file. Go ahead and open this file and look for the hero div.</p>

        <img src="http://wes.io/V7jp/herodiv" alt="">
      </article>

      <article>
        <p>Under the closing <code>h1 tag</code>, add the following h3 and template tag:</p>
        <br>
        <code><?php output("<h3><?php bloginfo('description'); ?></h3>"); ?></code>

        <p>This will pull in the text you previously set under settings → General</p>
        <img src="http://wes.io/V82k/settings" alt="">
      </article>

      <article>
        <h3>Step 2: Adding the CSS</h3>
        <p>Open your style.css file and scroll down to the hero section. Our final CSS is on the next slide, but let's step through and code it ourselves!</p>
      </article>
      
      <article>
        <pre>
.hero {
  /* Style the hero here */
  text-align: center;
  background-image:url(i/herobg.jpg);
  background-position: top;
  background-size:cover;
  background-attachment: fixed;
  overflow: hidden;
  padding:100px;
  color:white;
}

.hero a, .hero h3 {
  color:white;
  background:rgba(0,0,0,0.6);
  display: inline-block;
  padding:10px;
}
        </pre>
      </article>




      <article>
        <h3>Custom Page Templates</h3>
        <div>
          <p>Sometimes we don't want the same old structure for every single page</p>
          <p>What if we want one page to have a totally different structure? No sidebar? Three Columns? Full page map?!</p>
          <p>The sky is the limit!</p>
          <p>For this, we use something called custom page templates</p>
          <p>We can create many templates that are similar to page.php and assign them to various pages</p>
        </div>
      </article>

      <article>
        <h3>Exercise #5: Creating a Custom Page template</h3>
        <div>
          <p>We're going to create two custom page templates</p>
          <p>The first one will be a simple page without a sidebar for our pages that don't require a sidebar, like our contact page!.</p>
          <p>The second will be our custom landing page for our home page.</p>
          <p><strong>Step 1:</strong> Duplicate our <span class="red">page.php</span> file and rename it <span class="red">page-nosidebar.php</span></p>
          <p><strong>Step 2:</strong> At the top of <span class="red">page-nosidebar.php</span> let's name our template with:</p>
          <pre><?php output("<?php /* Template Name: No Sidebar Template */ ?>"); ?></pre>
        </div>

      </article>

      <article>         <p>Your Code should look something like
this:</p>         <br>         <img src="http://wes.io/V8LA/custom-
page-template" alt="">       </article>       <article>         <div
class="build">           <p><strong>Step 3:</strong> We don't want a
sidebar for this page, so delete <span class="red"><?php
output("<?php get_sidebar(); ?>"); ?></span>. Make sure to save your
file after this change. </p>           <p><strong>Step 4:</strong> Go
to the WordPress dashboard, and edit your contact page. Don't forget to press the Update button!</p>
<p>You'll now see under "Page Attributes" we have a template
dropdown.</p>           <p><img src="http://wes.io/MLnn/content"
alt=""></p>           <p>Select Contact Page and click update then
view. <img src="http://cl.ly/C2Lt/Screen%20Shot%202011-11-22%20at%2010
.35.29%20PM.png" alt=""></p>         </div>       </article>

      <article>
        <h3>Building a template for our home page</h3>
        <p>Let's create a new page called <span class="red">page-home.php</span></p>
        <p>This time, fill it with the following Markup:</p>
<pre><?php output("
  <?php /* Template Name: Home Page */  ?>
  <?php get_header(); ?>

  <div class=\"section\">
    <div class=\"innerWrapper home\">
      coming soon
    </div> <!-- /.innerWrapper -->
  </div> <!-- /.section -->
  <?php get_footer(); ?>
"); ?></pre>

      </article>

      <article>
        <img src="http://wes.io/MM8D/content" style="" alt="">
        <p>Edit your home page and assign the "Home Page Template" </p>
        <p>We will come back to this in our final exercise and build out a custom landing page!</p>
      </article>

      <article>
        <h3>Exercise #6: Widgets!</h3>
        <p>Widgets are modular items that can be added to your sidebar (or anywhere else in the theme). You can see there are some default ones already under Appearance → Widgets</p>

        <p>How do we add one?</p>
        <p>Let's add our latest tweets to the sidebar! Go here, <a target="_blank" href="https://twitter.com/settings/widgets">https://twitter.com/settings/widgets</a>, log into your account and click "Create New". If you don't have a Twitter account, no worries! You can embed another users Tweets. Try using Ladies Learning Code's Twitter, @learningcode.</p>
        <p><img src="http://wes.io/KgQ7/Screen%20Shot%202012-11-05%20at%204.31.31%20PM.png" alt=""></p>
        
      </article>

      <article>
        <p>Pick your options, then select "Create Widget". The button will change to "Save Changes" and you will see code at the bottom of the screen to paste into your web page.</p>
        <img src="http://cl.ly/image/413S1m081G2G/Image%202015-01-26%20at%2010.49.13%20AM.png" alt="" height="475">
      </article>

      <article class="cols">
        
        <p><strong>Step 1:</strong> In your Dashboard under Appearance &rarr; Widgets</p>
        <p><strong>Step 2:</strong> From the Available Widgets box, Drag and drop the <code>text</code> widget (it might be near the bottom) into your "Primary Widget Area".</p>
        <p><strong>Step 3:</strong> Fill in a Title of your choice.</p>
        <p><strong>Step 4:</strong> Paste the code copied from Twitter into the big white box. Click Save.</p>
        <p>See example on the next slide.</p>
      </article>

      <article class="center">
        <p><img src="http://cl.ly/image/0q1J03391X1e/Image%202015-01-26%20at%2010.56.17%20AM.png" alt=""></p>
      </article>

      <article class="center">
        <h3>Save it and you now have your twitter feeding into your sidebar!</h3>
        <img src="http://cl.ly/image/1c1q0W2S2H3e/Image%202015-01-26%20at%2010.59.43%20AM.png" alt="">
      </article>

      <article>
        <h3>Plugins</h3>
        <p>WordPress can only include so much functionality in the base package. When you need more functionality, plugins come to the rescue! There is a huge community of developers that create plugins that you can install for free.</p>
        <p>Can be as small as adding a popup photo gallery to as large as running a social network!</p>
        <p>Some things to note when looking for plugins:</p>
        <ul>
          <li>does it support your version of WordPress?</li>
          <li>has it been recently-ish updated (within the last 2 years)</li>
          <li>check out the reviews</li>
        </ul>
      </article>

      <article>
        <p>All Plugins live in the <code>/wp-content/plugins</code> folder but we can also access them via the dashboard, just like themes! <strong>Delete</strong> the plugins you don't want and <strong>Activate</strong> the ones that you need.</p>
        <p><img src="assets/images/plugins.png" alt=""></p>
      </article>

      <article>
       <!--  <p>You can Delete the plugins you don't want</p>
        <p><img src="http://f.cl.ly/items/2r0T472k0I2g3q1H1W08/Screen%20Shot%202011-11-23%20at%2012.20.30%20AM.png" alt=""></p>
        <p>And Activate the ones you need</p>-->
        <p><img src="http://cl.ly/C2Sg/Screen%20Shot%202011-11-23%20at%2012.22.56%20AM.png" alt=""></p> 
        <p>Akismet is 100% required to block spammers. You can sign up for a free account here:
        <a href="https://akismet.com/signup/#free">https://akismet.com/signup/#free</a></p>
      </article>

      <article>
        <p>Go to <strong>Plugins &rarr; Add New</strong>, to install & search for new plugins.</p>
        <p><img src="assets/images/plugins-add.png" alt=""></p>
      </article>

      <article>
        <h3>A few good ones...</h3>
          <p>wp-pagenavi</p>
          <p>Jetpack</p>
          <p>Share This / Addthis</p>
          <p>Subscribe To Comments</p>
          <p>Contact Form 7</p>
          <p>Quick Cache</p>          
          <p>Advanced custom fields</p>
          <p>Custom Post Type UI</p>
          <p>Anyone have a favourite? </p>
      </article>

      <article>
        <h3>Let's try add a social networking plugin!</h3>
        <p>Go to <strong>Plugins &rarr; Add New</strong></p>
        <p>Search for "Simple Share Buttons Adder" and select the "Install Now" button.</p>
        <p><img src="assets/images/plugins-social.png"></p>
      </article>

      <article>
        <p>You will automatically be taken to the installation screen.  When complete, activate it.</p>
        <p><img src="assets/images/plugins-social-install.png"></p>
      </article>
      <article>
        <p>Once activated, it can now be accessed from the Settings links in the sidebar or in the plugins section.</p>
        <p><img src="assets/images/plugins-social-settings.png" alt=""></p>
      </article>
        
      <article>
        <p>For this plugin, you can customizing settings such as where on the site to include the share buttons, customizing the share message, which networks to share from and many more options.  Let's check out some of the settings.</p>
        <p><img src="assets/images/plugins-social-options.png" alt=""></p>
      </article>
      
      <article>
        <h3>Exercise #7: The Final Exercise!</h3>
        <p>This is your time to shine and put everything you have learned today to work.</p>
      </article>

      <article>
        <img src="http://cl.ly/C1x2/Screen%20Shot%202011-11-23%20at%2012.36.55%20AM.png" alt="">
      </article>
        
      <article>
        <img src="http://wes.io/VAnP/final" style="height:100%; display:block; margin:0 auto;">
      </article>
      <article>
        <div>
          <p><strong>Step 1:</strong> From the dashbaord, edit your "Home" page. Write a few lines about yourself and upload a photo.</p>
          <p><strong>Step 2:</strong> Remember our <span class="red">page-home.php</span>? Open it up again and delete "Coming Soon..."</p>
          <p><strong>Step 3:</strong> We're now going to write our own loop so we can get the page's content.</p>
          <pre>
<?php output('<div class="welcome">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
  <?php endwhile; ?>
</div>
') ?>
          </pre>

        </div>
      </article>

      <article>
         <div>
           <p><strong>Step 4:</strong> Inside the loop, we use our template tag <span class="red"><?php output('<?php the_content(); ?>'); ?></span> to fetch the content from our home page.</p>
           <p class="small">Our loop now looks like this:</p>
          <pre>
<?php output('<div class="welcome">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
</div>
') ?>
          </pre>   
           
                 <img src="http://wes.io/V7x1/wow" alt="">
         </div>
      </article>

      <article>
        <div>
          <p>Now that we have our Home content pulling in, lets work on our three columns.</p>
          <p><strong>Step 5: </strong>Right underneath <span class="red"><?php output('<?php endwhile; ?> </div>');?></span>, create an empty div with the class of homeColumn.</p>
          <pre>
<?php output('<div class="homeColumn"></div>'); ?></pre>      
          <p><strong>Step 6:</strong> Inside that div, insert an <span class="red"><?php output("<h3>Column 1</h3>");?></span>.</span></p>
<pre><?php output('
<div class="homeColumn">
  <h3>Column 1</h3>
  
</div>
'); ?>
</pre>
        </div>
      </article>


      <article>
        <p><strong>Step 7:</strong> Create two more columns with the class of homeColumn. Our code should look like this:</p>
        <pre>
<?php output('
  <div class="homeColumn">
    <h3>Column 1</h3>
  </div>

  <div class="homeColumn">
    <h3>Column 2</h3>
  </div>

  <div class="homeColumn">
    <h3>Column 3</h3>
  </div>
') ?>
        </pre>
      </article>

      <article>
        <p><strong>Step 8:</strong>Fill our columns with content!</p>
        <p>This part is up to you. You can fill it with any WordPress code, text, image or external embed:</p>
        <ul>
          <li>
            Latest Posts:
            <br>
             <code><?php output("<?php wp_get_archives('type=postbypost&limit=10'); ?>"); ?></code>
          </li>
          <li>List of categories
          <br>
            <code><?php output("<ul><?php wp_list_categories('title_li='); ?></ul>"); ?></code>
          </li>

          <li>Tag Cloud
          <br>
          <code>
            <?php output("<?php wp_tag_cloud(); ?>"); ?>
          </code>
          </li>
          <li>+ More on next slide</li>
        </ul>
      </article>

      <article>
        <li>Twitter or <a href="https://developers.facebook.com/docs/plugins/like-box-for-pages" taret="_blank">facebook</a> Widget</li>
        <li><a href="http://business.pinterest.com/widget-builder/" target=_blank>Pinterest</a> Board</li>
        <li>Youtube or vimeo embed</li>
        <li>Soundcloud playlist</li>
        <li>Buy now button for your product</li>
        <li><a href="http://snapwidget.com/" target=_blank>Instagram Widget</a></li>
      </article>
      <article>
      
      <p><strong>Step 9:</strong> You're done! I've provided you with some minimal style in your <span class="red">style.css</span> file in the section marked "CUSTOM HOME PAGE STYLE".</p>

      <p>Spend some time working on your site to make it your own. Chat with your tables and mentors to see how you can customize your theme to be totally yours!</p>


      </article>


      <article>
        <h3>What else with WordPress?</h3>
        <p>Custom Post types</p>
        <p>Advanced backend interfaces</p>
        <p>Plugin Development is an whole ‘nother world</p>
        <p>WordCamps and Meetups - The WordPress community is amazing</p>
      </article>

      <article>
        <h3>Making WordPress Live</h3>
        <p>Migrating WordPress, or hosting it so everyone can see it, requires a few steps to make it live.</p>
        <p>First, you need host. There are tons of great, affordable ones. I recommend using <a href="http://wpengine.com/">WPEngine</a>.</p>
        <p>Second, you will need to follow the migration guide. Here's a video on how to do this: <a href="https://www.youtube.com/watch?v=gk6_lW9INos" target=_blank>youtube.com/watch?v=gk6_lW9INos</a></p>
      </article>

      <article>
        <h3>Getting Help</h3>
        <p>http://wordpress.stackexchange.com/</p>
        <p>#WordPress on freenode</p>
        <p>WordPress forums</p>
        <p>The codex is the most valuable thing in the world.</p>
      </article>

      <article class="center">
        <span style="font-size: 80px; color:#000; padding-top: 250px; display:block;">Questions? Thanks!</span>
      </article>
      
    </section>

  </body>
</html>
