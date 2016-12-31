<?php

    $error = ""; $successMessage = "";

    if ($_POST) {

        if (!$_POST["email"]) {

            $error .= "An email address is required.<br>";

        }

          if (!$_POST["subject"]) {

            $error .= "The subject field is required.<br>";

        }

          if (!$_POST["content"]) {

            $error .= "The content field is required.<br>";

        }

        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {

            $error .= "The email address is invalid.<br>";

        }

        if ($error != "") {

            $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) on your form:</strong></p>' . $error . '</div>';


        } else {

            $emailTo = "matthew.connors333@gmail.com";

            $subject = $_POST['subject'];

            $content = $_POST["content"];

            $headers = "From: ".$_POST["email"];

             if (mail($emailTo, $subject, $content, $headers)) {

               $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, I\'ll get back to you ASAP!</div>';

            } else {

                $error =  '<div class="alert alert-danger" role="alert"><p>Your message couldn\'t be sent. Please try again later.</p></div>';

            }

        }

    }

?>

<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

      <title>Matt Connors Portfolio</title>

    <link rel="stylesheet" href="styles.css">
    <!-- Bootstrap CSS -->



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    </head>

    <body data-spy="scroll" data-target="#navbar" data-offset="150">

<!--        Nav Bar -->
        <nav class="navbar navbar-light bg-faded navbar-fixed-top" id="navbar">
              <a class="navbar-brand" href="#">Matthew Connors Portfolio</a>
              <ul id="navbar" class="nav navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </nav>

<!--        Jumbotron-->
        <div class="jumbotron" id="jumbotron">
              <img id="me" src="https://scontent.fbos1-1.fna.fbcdn.net/v/t1.0-9/13346880_10154052964075239_5622202862369632412_n.jpg?oh=edc9fbcb78a195372d2f598b29393bae&oe=58716B52">
              <p id="intro" class="lead">Hey Everyone! I'm Matthew Connors, a Rhode Island-based Web Developer &amp; Photographer. Thanks for stopping by!</p>
              <hr class="m-y-2">
            </div>

<!--        About section-->
        <div class="container container-fluid">

            <h2 class="display-4"><span id="about"></span>My Story</h2>

            <div class="row">
              <p>Born and raised in Cumberland, RI.  I grew up playing football, baseball, video games, and even loved acting.  When I was 15, my family moved to Sault Ste. Marie, ON to purchase Trout Lake Cabins and Marina.  Over the next several years, I completed high school at White Pines where I continued my football and acting career.  After several offers to play football for Canadian colleges, I decided to return to Rhode Island where I received a full scholarship through the Army ROTC program at URI.</p>
               <p>This is where I spent the next four years, majoring in Communication Studies with a minor in Leadership.  While attending URI, I was very active within the University community;  I joined Sigma Pi Fraternity where I was elected as Secretary of the E-Board and nominated to be President senior year (I declined to live off campus), I was elected president of RAM GOALs (Responsible Alcohol Management for Greek Organizations and Leaders) where we made several presentations in front of 1000s of Greek members, and I also held the rank of Captain in ROTC.</p>
                <p>Less than a year after graduating URI and becoming a 2LT, I was selected by the Rhode Island National Guard to attend flight training at Fort Rucker, Alabama.  Over the next year and a half, I was trained how to fly the Bell 206 Jet Ranger, OH-58 Kiowa Warrior, and UH-60 Blackhawk helicopters.  After graduation and returning home to RI in 2013, I continued my flight training, just recently making it to Readiness Level 1, a fully mission ready pilot.</p>
                <p>Since returning from Flight School, I have worked at several different RI companies including Picerne Realty, Collette Vacations, and Delta Mechanical Contractors.  While I learned a lot about business, marketing, and project management, I did not find that I was happy in any of these positions.  I felt that they were repetitive and uncreative.  This is when I started getting into photography.  Luckily for me, my mom is an incredible photographer (check out her site <a href="http://melissaconnorsphotography.zenfolio.com/" target="_blank">here</a>) and not only gave me some of her equipment but has shared invaluable knowledge about the craft. </p>
                <p>Since picking up Photography I have worked on several professional projects including weddings, interviews with senators, the RI Boy Scouts 100th anniversary celebration, corporate events, engagements, and have even been featured on the news.  While this is all great, most of the time, I just enjoy taking pictures of my dog Rucker.</p>
                <p>Shortly after picking up Photography, I wanted to pursue my other new passion, technology.  This is something looking back, that I should have pursued all along.  I mean, it practically runs in my family.  My aunt, 2 uncles, 2 cousins, and little brother are all programmers/former programmers.  Watching my uncles growing up I was amazed by the lifestyle and seemingly endless knowledge they possessed.  However, when I first started learning to program in high school, I was immediately intimidated by it, gave up, and switched classes.</p>
                <p>While this was the case then, this won't be the case now.  Since restarting on my coding journey, I have completed LaunchCode's CS50x, Rob Percival's Complete Web Developer's Course 2.0 on Udemy, and was 1 of 25 applicants out of 100+ accepted into Rhode Island's first General Assembly Web Development Immersive class! </p>
                <p>To be continued...</p>
                <p>Please see below for several projects that I have worked on. </p>
              </div>
            </div>




<!--        Portfolio section-->
        <div class="container">

        <h2 class="display-4"><span id="portfolio"></span>Portfolio</h2>
                <div class="flex-container">
                <div class="cards">
                <img class="card-img-top" src="fitwithfriends.png" alt="Card image cap">
                <div class="card card-block">
                  <h3 class="card-title">Fit with Friends</h3>
                  <p class="card-text">Currently in development.  My way of revolutionizing fitness.</p>
                  <p><a href="http://fitwithfriends.net/" target="_blank" class="btn btn-success">Check it Out!</a></p>
                </div>
                </div>
                <div class="cards">
                  <img class="card-img-top" src="secret-diary.png" alt="Card image cap">
                <div class="card card-block">
                  <h3 class="card-title">Secret Diary</h3>
                  <p class="card-text">Web App that allows users to log in and save their thoughts.</p>
                  <p><a href="/secret-diary" target="_blank" class="btn btn-success">Check it Out!</a></p>
                </div>
                </div>
                <div class="cards">
                    <img class="card-img-top" src="weather-app.png" alt="Card image cap">
                <div class="card card-block">
                  <h3 class="card-title">Weather App</h3>
                  <p class="card-text">Weather App using the openweathermap.org API</p>
                  <p><a href="/weather-app" target="_blank" class="btn btn-success card-button">Check it Out!</a></p>
                </div>
                </div>
                <div class="cards">
                <img class="card-img-top memorable" src="Memorable-Places.png" alt="Card image cap">
                <div class="card card-block">
                  <h3 class="card-title mem" >Memorable Places</h3>
                  <p class="card-text">Maps app that uses Xcode &amp; Swift</p>
                  <p><a href="https://github.com/mconnors333/Memorable-Places" target="_blank" class="btn btn-success">Check it Out!</a></p>
                </div>
                </div>
                <div class="cards">
                  <img class="card-img-top trivia" src="trivia.png" alt="Card image cap">
                <div class="card card-block">
                  <h3 class="card-title">Trivia</h3>
                  <p class="card-text">Trivia game using an API &amp; Javascript</p>
                  <p><a href="http://matt-connors.com/trivia" target="_blank" class="btn btn-success">Check it Out!</a></p>
                </div>
                </div>
                <div class="cards">
                <img class="card-img-top" id="photographyCard" src="viewbug.png" alt="Dog on fence">
                <div class="card card-block">
                  <h3 class="card-title">Photography</h3>
                  <p class="card-text">My Viewbug Photography Porfolio</p>
                  <p><a href="https://www.viewbug.com/member/Matt__Connors#/Matt__Connors/gallery?sort=mostview" target="_blank" class="btn btn-success">Check it Out!</a></p>
                </div>
              </div>
              </div>
            </div>

<!--        contact Section-->

        <div class="container">

            <h2 class="display-4"><span id="contact"></span>Get in Touch!</h2>

            <div id="error"></div>

            <form method="post">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject">
                </div>
                  <div class="form-group">
                    <label for="content">What would you like to ask me?</label>
                    <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                  </div>
                <button type="submit" id="submit" class="btn btn-primary">Submit</button>


            </form>


        </div>





        <!--        Footer section-->


          <div class="bg-success" id="footer">

            <h2 id="footer-text" class="display-5">Connect with me on Social Media</h2>
            <a href="https://github.com/mconnors333" target="_blank"><img src="https://s11.postimg.org/qaj20q48z/1477000357_github.png" class="socialIcons"></a>
            <a href="https://www.linkedin.com/in/matthew-connors" target="_blank"><img src="https://s4.postimg.org/8r9c7rdm5/1477000196_linkedin_circle.png" class="socialIcons"></a>
            <a href="https://twitter.com/Matt__Connors" target="_blank"><img src="https://s4.postimg.org/fx13a7mp9/1477000165_twitter_circle.png" class="socialIcons"></a>
            <a href="https://www.instagram.com/matt_connors_photo/" target="_blank"><img src="https://s4.postimg.org/i0bihvmi5/1477000175_instagram_circle.png" class="socialIcons"></a>
            <a href="https://www.viewbug.com/member/Matt__Connors#/Matt__Connors/gallery?sort=mostview" target="_blank"><img src="https://www.viewbug.com/media/images/layout/profile/slideshow_empty280x280.jpg" class="socialIcons" id="viewbug"></a>


        </div>



    <!-- jQuery first, then Tether, then Bootstrap JS. -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

    <script src="scripts.js"></script>




  </body>
</html>
