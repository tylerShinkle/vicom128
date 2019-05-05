<!DOCTYPE html>
<html lang="en">

     <head>
        <!-- add favicon-->
        <title>devpendium</title>
        <meta charset="UTF-8">
        <meta name="description" content="devpendium web development tutorials.">
        <meta name="keywords" content="HTML, CSS, Javascript, php, node, tutorials, free">
        <meta name="author" content="Tyler Shinkle">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>
    
    <body>
         <!--overlays on top-->
        <!--Mobile burger menu overlay-->
            <section id="menuOver" class="overlay">
                <!--exit overlay button-->
                <button id=menuClose class="close">
                	&#215;
                </button>
                <!--overlay content-->
                <div class="overlayContentContainer">
                    <div id="linkContainer">
                    <a href="html.html">html</a> 
                        <a class = overlayRight href="html.html#ref">>references</a>
                        <a class = overlayRight href="html.html#projects">>projects</a>
                    <a href="css.html">css</a>
                        <a class = overlayRight href="css.html#ref">>references</a>
                        <a class = overlayRight href="css.html#projects">>projects</a>
                    <a href="js.html">java script</a>
                        <a class = overlayRight href="js.html#ref">>references</a>
                        <a class = overlayRight href="js.html#projects">>projects</a>
                    <a href="php.html">php</a>
                        <a class = overlayRight href="php.html#ref">>references</a>
                        <a class = overlayRight href="php.html#projects">>projects</a>
                    <a href="node.html">node.js</a>
                        <a class = overlayRight href="node.html#ref">>references</a>
                        <a class = overlayRight href="node.html#projects">>projects</a>
                    <a href="contact.html">contact</a>
                    </div>
                </div>
            </section>

            <!--Mobile language overlay-->
            <section id="langOver" class="overlay">
                <button id=langClose class="close">
                	&#215;
                </button>
                <div class="overlayContentContainer">
                    <p>languages</p>
                    <a href="html.html">html</a>
                    <a href="css.html">css</a>
                    <a href="js.html">java script</a>
                    <a href="php.html">php</a>
                    <a href="node.html">node.js</a>
                </div>
            </section>
        
        <!--Mobile projects overlay-->
            <section id="projectsOver" class="overlay">
                <button id=projectsClose class="close">
                	&#215;
                </button>
                <div class="overlayContentContainer">
                    <p>projects</p>
                    <a href="html.html#projects">html</a>
                    <a href="css.html#projects">css</a>
                    <a href="js.html#projects">java script</a>
                    <a href="php.html#projects">php</a>
                    <a href="node.html#projects">node.js</a>
                </div>
            </section>
        
        <!--Mobile references overlay-->
            <section id="refOver" class="overlay">
                <button id=refClose class="close">
                	&#215;
                </button>
                <div class="overlayContentContainer">
                    <p>references</p>
                    <a href="html.html#ref">html</a>
                    <a href="css.html#ref">css</a>
                    <a href="js.html#ref">java script</a>
                    <a href="php.html#ref">php</a>
                    <a href="node.html#ref">node.js</a>
                </div>
            </section>
        <!--overlays done-->
        <!--mobile title bar-->
            <nav id="mobileTitle">
                <div id="logo">
                    <a href="index.html">devpendium</a>
                </div>
            <!--access menu overlay on mobile-->
                <button id="burger"  class="open" value=menuOver>
                <!--diplay overlay on click-->
                &#9776;
                </button>
            </nav>
        <!--mobile title bar done-->
        
        <!--mobile directory bar-->
            <nav id="mobileDirectory">
                <!--access language overlay on mobile-->
                <button id="language" class="open" value="langOver">
                languages
                </button>
            
                <div id="rightContainer">
                <!--access projects overlay on mobile-->
                    <button id="projects" class="open" value="projectsOver">
                    projects
                    </button>
                <!--access references overlay on mobile-->
                    <button id="references" class="open" value="refOver">
                    references
                    </button>
                </div>
            </nav>
        <!--mobile directory bar done-->
        <!--desktop directory bar-->
            <nav id="desktopDirectory">
                <div class=tierContainer>
                    <a  href="html.html" class="desktopDir">html</a>
                    <ul class=tier>
                        <li><a href="html.html#ref">References</a></li>
                        <li><a href="html.html#projects">Projects</a></li>
                    </ul>
                </div>
                <div class=tierContainer>
                    <a  href="css.html" class="desktopDir">css</a>
                    <ul class=tier>
                        <li><a href="css.html#ref">References</a></li>
                        <li><a href="css.html#projects">Projects</a></li>
                    </ul>
                </div>
                <div class=tierContainer>
                    <a  href="js.html" class="desktopDir">java script</a>
                    <ul class=tier>
                        <li><a href="js.html#ref">References</a></li>
                        <li><a href="js.html#projects">Projects</a></li>
                    </ul>
                </div>
                <div class=tierContainer>
                    <a  href="php.html" class="desktopDir">php</a>
                    <ul class=tier>
                        <li><a href="php.html#ref">References</a></li>
                        <li><a href="php.html#projects">Projects</a></li>
                    </ul>
                </div>
                <div class=tierContainer>
                    <a  href="node.html" class="desktopDir">node.js</a>
                    <ul class=tier>
                        <li><a href="node.html#ref">References</a></li>
                        <li><a href="node.html#projects">Projects</a></li>
                    </ul>
                </div>
                <a href="contact.html">contact</a>
            </nav>
        <!-- end desktop directory bar-->
        <h2 id="confirmation">Your message has been sent!</h2>
        <form id="contact" action="sendmail.php" method="post">
                        <fieldset>
                            <legend>Contact Us</legend>
                            <label>First Name:</label>
                            <input type="text" name="first_name" placeholder="First Name">
                            <label>Last Name:</label>
                            <input type="text" name="last_name" placeholder="Last Name">
                            <label>Email:</label>
                            <input type="email" name="email" placeholder="Email address">
                            <label>Subject:</label>
                            <input type="text" name="subject">
                            <label>Message:</label>
                            <textarea name="message" placeholder="message..."></textarea>
                            <br>
                            <input id="abutt" type="submit" value="Send Mail!">
                        </fieldset>
                    </form>
        <div id="content"></div>
        <script src="js/script.js"></script>
    </body>
<?php
  if (isset($_REQUEST['email'])) { //if "email" variable is filled out, send email
  
  //Set admin email for email to be sent to (use you own MATC email address)
    $admin_email = "shinklt1@gmatc.matc.edu"; 

  //Set PHP variable equal to information completed on the HTML form
    $email = $_REQUEST['email']; //Request email that user typed on HTML form
    $subject = $_REQUEST['subject']; //Request subject that user typed on HTML form
    $message = $_REQUEST['message']; //Request message that user typed on HTML form
  //Combine first name and last name, adding a space in between
    $name = $_REQUEST['first_name'] . " " .  $_REQUEST['last_name']; 
            
  //Start building the email body combining multiple values from HTML form    
    $body  = "From: " . $name . "\n"; 
    $body .= "Email: " . $email . "\n"; //Continue the email body
    $body .= "Message: " . $message; //Continue the email body
  
  //Create the email headers for the from and CC fields of the email     
    $headers = "From: " . $name . " <" . $email . "> \r\n"; //Create email "from"
    $headers .= "CC: " . $name . " <" . $email . ">"; //Send CC to visitor
    
  //Actually send the email from the web server using the PHP mail function
  mail($admin_email, $subject, $body, $headers); 
    
  //Display email confirmation response on the screen
  echo "Thank you for contacting us!"; 
  }
  
  //if "email" variable is not filled out, display an error
  else  { 
     echo "There has been an error!";
        }
?>

</html>