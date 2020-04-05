<!DOCTYPE html>
<html lang="en">

<head>
    <title>RANA_ACADEMY</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php
   $cookie_name = "user";
   $cookie_value = "aparna";
   setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
   ?>
   <html>
   <body>
   
   <?php
   if(!isset($_COOKIE[$cookie_name])) {
       // echo "Cookie named '" . $cookie_name . "' is not set!";
   } else {
       // echo "Cookie '" . $cookie_name . "' is set!<br>";
        //echo "Value is: " . $_COOKIE[$cookie_name];
        setcookie("test_cookie", "test", time() + 3600, '/');
   }
   ?>
   
   
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        h1 {
            color: lawngreen;
            font-size: 70px;
            font-family: " american typewriter,serif";
            ;
            font-weight: bold;
        }
        
        p {
            color: lightcyan;
            font-size: 30px;
            font-style: italic
        }
        /* Style the header */
        /* header {
            background-color: #666;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
        }
        /* Create two columns/boxes that floats next to each other */
        
        nav {
            float: left;
            width: 30%;
            height: 700px;
            /* only for demonstration, should be removed */
            background: #ccc;
            padding: 20px;
        }
        /* Style the list inside the menu */
        
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        
        article {
            float: left;
            padding: 20px;
            width: 70%;
            /*background-color: #f1f1f1;*/
            height: 4500px;
            /* only for demonstration, should be removed */
        }
        /* Clear floats after the columns */
        
        section:after {
            content: "";
            display: table;
            clear: both;
        }
        /* Style the footer */
        
        footer {
            background-color: #777;
            padding: 10px;
            text-align: center;
            color: white;
        }
        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        
        @media (max-width: 600px) {
            nav,
            article {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>

<body>
<?php
if(count($_COOKIE) > 0) {
    //echo "Cookies are enabled.";
} else {
    //echo "Cookies are disabled.";
}
?>


    <header>
        <div class="header">
            <a href="#default" class="logo">RANA_ACADEMY</a>
            <div class="header-right">
                <a href="index.html">HOME</a>
                <a class="active" href="#coarses">COARSES</a>
                <a href="about.html">ABOUT</a>
                <a href="3.html">REGSTER</a>
            </div>
        </div>
    </header>
    <body>
    <p>Avail coarses: <span id="txtHint"></span></p> 

<p>search coarse: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}
</script>
    <style>
        
.example {
  padding: 20px;
  color: white;
}
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 60px) {
  .example{background: red;}
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
  .example {background: green;}
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
  .example {background: blue;}
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  .example {background: orange;}
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  .example {background: pink;}
}
        .header {
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 20px 10px;
        }
        
        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }
        
        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }
        
        .header a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .header a.active {
            background-color: dodgerblue;
            color: white;
        }
        
        .header-right {
            float: right;
        }
        
        @media screen and (max-width: 500px) {
            .header a {
                float:none;
                display: block;
                text-align: left;
            }
            .header-right {
                float: none;
            }
        }
        
        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: red;
            color: white;
            text-align: center;
        }
        
        body {
           background-image: url("../img/z.jpg");
            background-size: cover;
            width: 40000;
            height: 50000;
            background-color: aqua;
        }
        
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .b {
            font-size: 40px;
            color: pink;
            font-weight: 700;
            font-family: "luminari,fantasy";
        }
        
        .a {
            font-size: 30px;
            color: mediumspringgreen;
            font-weight: 600;
            font-family: "luminari,fantasy";
        }
    </style>

    <section>
        <nav>
            <ul>
                <video width="400" height="450" controls autoplay>
                    <source src="../img/vd2.mp4" type="video/mp4">
                </video>
                <li><a href="#php">PHP</a></li>
                <li><a href="#python"> PYTHON</a></li>
                <li><a href="#java"> JAVA</a></li>
                <li><a href="#ruby">RUBY/RUBY ON NAILS</a></li>
                <li><a href="#java script">JAVA SCRIPT</a></li>
                <li><a href="#html">HTML</a></li>
                <li><a href="#front end developer">FRONT END DEVELOPER</a></li>
                <li><a href="#swift">SWIFT</a></li>
                <li><a href="#c#">C#</a></li>

            </ul>
        </nav>

        <article>
            <h1 id="python" >PYTHON</h1>
            <img src="../img/y.jpg">

            <p>Python is an advanced programming language that is interpreted, object-oriented and built on flexible and robust semantics.</p>
            <h1 id="java">JAVA</h1>
            <img src="../img/py.jpg">
            <p > Java is a general-purpose, object-oriented, high-level programming language with several features that make it ideal for web-based development.
            </p>
            <h1 id="ruby">RUBY/RUBY ON NAILS</h1>
            <img src="../img/r.jpg">
            <p>Ruby is an open-sourced, object-oriented scripting language that can be used independently or as part of the Ruby on Rails web framework. WHO USES IT?</p>
            <h1 id="javascript">JAVA SCRIPT</h1>
            <img src="../img/js.jpg">
            <p>JavaScript is a client-side programming language that runs inside a client browser and processes commands on a computer rather than a server. It is commonly placed into an HTML or ASP file. Despite its name, JavaScript is not related to Java</p>
            <h1 id="php">PHP</h1>
            <img src="../img/php.jpg">
            <P>PHP is an open-source scripting language designed for creating dynamic web pages that effectively work with databases. It is also used as a general-purpose programming languag</P>
            <h1 id="front end developer">HOW TO BECOME FRONT END DEVELOPER</h1>
            <p>Front-end developers build websites using languages like HTML, CSS, and JavaScript. They understand the processes involved in developing and publishing websites. They use the Git technology to collaborate and Webpack to configure their projects.
                Our aim is to teach you how to use the essential tools for becoming a front-end developer.</p>

            <h1 id="html">HTML (HyperText Markup Language)</h1>
            <img src="../img/ht.jpg">
            <p>HTML is the standard markup language used to create web pages; it ensures proper formatting of text and images (using tags) so that Internet browsers can display them in the ways they were intended to look.</p>

            <h1 id="swift">Swift</h1>
            <img src="../img/st.jpg">
            <p>Swift is Apple’s newest open-source, multi-paradigm programming language for iOS and OS X apps. Swift integrates Objective-C’s named parameters and object-oriented model, while including an advanced compiler, debugger and framework infrastructure.</p>

            <img id="c#"src="../img/ct.jpg">
            <p >Pronounced C-sharp (not C-hashtag), C# is a multi-paradigm programming language that features strong typing, imperative, declarative, functional, generic, object-oriented and component-oriented disciplines.</p>

        </article>
    </section>

    <footer>

        <div class="footer">
            <h2>CONTACT US 987654321 </h2>
            <img src="../img/t.jpg">
            <h3 style="text-align: right;">emald: ranaacademy@gmail.com</h3style/h3>
                <h3 style="text-align-last: righnstt;">CHENNAI Ambattur.</h3>
                <h3 style="text-align: right;">insta id RANA_ACADEMY </h3>
        </div>
    </footer>

</body>

</html>