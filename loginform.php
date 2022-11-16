 <?php
 session_start();

if($_SESSION['login'] == "OK" || $_SERVER['HTTP_REFERER'] == "http://localhost:8888/mymessages.php")  {
?>
 
 <!DOCTYPE html>
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Css tags-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="ProjectStyle.css">
        <link rel="stylesheet" href="animation.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

      

        <title>Jaehyeon</title>
    </head>

    <body>
        <header class="header fixed-top" id="header">
            <div class="collapse" id="navbarToggleExternalContent" >
                <div class="bg-dark p-4 text-right">
                    <button class="btn btn btn-outline-info m-2" type="button" onclick="navthrough()">
                        <a href="#page1" style="text-decoration: none; color:white">About Me</a>
                    </button>                        
                    <button class="btn btn-outline-warning m-2" type="button" onclick="navthrough()">
                        <a href="#page2" style="text-decoration: none; color:white"> Resume</a>
                    </button>
                    
                    <button class="btn btn-outline-secondary m-2" type="button" onclick="navthrough()">
                        <a href="#page3" style="text-decoration: none; color:white"> Skills</a>
                    </button>

                    <button class="btn btn-outline-danger m-2" type="button" onclick="navthrough()">
                        <a href="#page4" style="text-decoration: none; color:white"> Contact</a>
                    </button>
            
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark ">
                <div class="container-fluid" >
                    <div class="text-left">
                        <button class="btn btn btn-light" type="button">
                            <a href="#page0">
                                <img src="images/home.png" width="40" height="40" class="d-inline-block align-top" alt="">
                            </a>
                        </button>
                        
                    </div>
                    <div class="text-center">
                        <?php
                            echo'<span stlye=\"color:white;\"> Login Success! <br> </span>';
                            echo "<span style=\"color:white;\"> Welcome  "  .$_SESSION['fname']. " ".$_SESSION['lname']. "</span>";
                        ?>
                    </div>     
                    <div class="text-right" >
                    <form id = "messagecheck-form" action="mymessages.php" method="post">
                       
                        <input type="hidden" id="MUsername" name="musername" value="<?php echo $_SESSION['username'] ?>">
                        <button class="btn btn btn-warning m-2" type="submit">My Messages</button>

                        <button class="btn btn-danger m-2" type="button" onclick="logout()" > Log out
                        <?php
                            session_start();
                            $result = session_destroy();
                        ?>
                    </form>
            
                        
                    
                    </div>
                    
                </div>
            </nav>
        </header>
        
        <div class="main">
            <div id="page0">
                <a id="home" class="smooth">
                </a>
                <h1> Welcome to My Website!</h1>
                <p>Scroll below for more information!</p>
                <div id="arrow">
                    <a href="#about">
                        <img src="https://img.icons8.com/ios-filled/50/000000/circled-down-2.png"> 
                    </a>    
                </div>
            </div>

            <div id ="Parallax">
                
            </div>

            <div id="page1">
                <a id="about" class="smooth"></a>
                <h2>About</h2>
                <div class="row">
                    <div class="col">
                        <div data-aos="fade-right">
                        <div class="card text-center" id="namecard" style="width: 18rem;">
                            <img src="images/me1.png"  class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Jaehyeon Yang</b></h5>
                                    <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target=".collapse-horizontal" aria-expanded="false" aria-controls="collapseWidthExample collapseWidthExample1">
                                        Reveal myself
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                            <div style="min-height: 200px;">
                                <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                <div class="card card-body" style="width: 500px; height:200px;">
                                    <h4>About Me</h4><br>
                                    <h7>I am Jaehyeon Yang, Computer Science student in University of Nebraska-Lincoln from Seoul, South Korea.</h7>
                                </div>
                                </div>
                            </div>

                            <div style="min-height: 200px;">
                                <div class="collapse collapse-horizontal" id="collapseWidthExample1">
                                <div class="card card-body" style="width: 500px; height:200px;">
                                <br><br> I enjoy doing both indoor and outdoor activities including listening to music, watching netflix and playing soccer. I recently started going for a rock climb and I am enjoying it a lot!
                                </div>
                                </div>
                            </div>

                    </div>
                </div> 
                <div id="arrow">
                    <a href="#Resume">
                        <img src="https://img.icons8.com/ios-filled/50/000000/circled-down-2.png"> 
                    </a>    
                </div>
            </div>

            <div id ="Parallax1">

            </div>

            <div id="page2">
                <a id="Resume" class="smooth">
                    <h2>Resume</h2>
                    <div class="row ml-5 pl-5">
                        <div class="col">
                            <div class="container-resume" id="experience">
                                <div class="card border-0" style="width: 18rem;">
                                    <div data-aos="fade-down-right">
                                        <div class="card-header border-0 ">
                                            <br> <h3>Experience</h3>
                                        </div>
                                    </div>

                                    <div data-aos="fade-down-right">
                                    <ul class="list-group list-group-flush" style="list-style-type: none;">
                                      <li class="list-group-item border-0 ">
                                        <img src="https://img.icons8.com/ios-filled/50/000000/briefcase.png" width="40" height="40"> 
                                        Sunspirit Blockchain <br>(Aug 2021 - Nov 2021)
                                      </li>
                                    </div>  

                                      <div data-aos="fade-down-right">
                                      <li class="list-group-item border-0 ">
                                        <img src="https://img.icons8.com/ios-filled/50/000000/briefcase.png" width="40" height="40"> 
                                        Erudite Digital Learnig Lab <br>(Aug 2018 - May 2019)
                                      </li>
                                    </div>
                                    </ul>
                                  </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="container-resume" id="education">
                                <div class="card border-0" style="width: 18rem;">
                                    <div data-aos="fade-down-right">
                                        <div class="card-header border-0 ">
                                            <br> <h3>Education</h3>
                                        </div>
                                    </div>

                                    <ul class="list-group list-group-flush">
                                        <div data-aos="fade-down-right">
                                            <li class="list-group-item border-0 ">
                                                <img src="https://img.icons8.com/glyph-neue/64/000000/book.png" width="40" height="40">    
                                                University of Nebraska-Lincoln <br>
                                                (Jan 2017 - Jan 2022)
                                            </li>
                                        </div>
                                       
                                        <div data-aos="fade-down-right">  
                                            <li class="list-group-item border-0 ">
                                                <img src="https://img.icons8.com/glyph-neue/64/000000/book.png" width="40" height="40">    
                                                INTI International University <br>
                                                (Jan 2015 - May 2016)
                                            </li>
                                        </div>    
                                    </ul>
                                  </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="container-resume" id="education">
                                <div class="card border-0" style="width: 18rem;">
                                    <div data-aos="fade-down-right">

                                    <div class="card-header border-0 ">
                                        <br> <h3>Projects</h3>
                                    </div>

                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <div data-aos="fade-down-right">

                                      <li class="list-group-item border-0  ">
                                        <img src="https://img.icons8.com/external-smashingstocks-glyph-smashing-stocks/66/000000/external-project-banking-and-finance-smashingstocks-glyph-smashing-stocks.png" width="40" height="40">
                                        First step to Reading Fluency <br>

                                      </li>
                                      </div>
                                    </ul>
                                  </div>
                            </div>
                        </div>

                    </div>
                </a>  
                <div id="arrow">
                    <a href="#Skills">
                        <img src="https://img.icons8.com/ios-filled/50/000000/circled-down-2.png"> 
                    </a>    
                </div>
            </div>

            <div id ="Parallax2">

            </div>

            <div id="page3">
                <div data-aos="zoom-in">
                <a id="Skills" class="smooth">
                    <h2>Skills</h2>
                    <div class="row ml-5 pl-5">
                        <div class="col">
                            <h3>Languages</h3> <br><br>
                            <div data-aos="fade-up"
                                data-aos-duration="2000">
                            <div class="row">
                                <div class="col-2">
                                    Korean
                                </div>
                                <div class="col-8">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" id="Korean">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div data-aos="fade-up"
                                data-aos-duration="2000" data-aos-delay="300">
                            <div class="row">
                                <div class="col-2">
                                    English
                                </div>
                                <div class="col-8">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" id="English">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <div data-aos="fade-up"
                                data-aos-duration="2000" data-aos-delay="400">
                                <div class="row">
                                    <div class="col-2">
                                        Chinese
                                    </div>
                                    <div class="col-8">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"  id="Chinese">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                        </div>

                        <div class="col">
                            <h3>Skills</h3><br><br>
                            <div data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="row">
                                    <div class="col-2">
                                        Java
                                    </div>
                                    <div class="col-8">
                                        <div class="progress">
                                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" id="English">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div data-aos="fade-up"
                                data-aos-duration="2000" data-aos-delay="300">
                                <div class="row">
                                    <div class="col-2">
                                        C/C++
                                    </div>
                                    <div class="col-8">
                                        <div class="progress">
                                            <div class="progress-bar bg-success  progress-bar-striped progress-bar-animated" role="progressbar"  id="G">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div data-aos="fade-up"
                                data-aos-duration="2000" data-aos-delay="400">
                                <div class="row">
                                    <div class="col-2">
                                        C#
                                    </div>
                                    <div class="col-8">
                                        <div class="progress">
                                            <div class="progress-bar bg-success  progress-bar-striped progress-bar-animated" role="progressbar" id="E">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div data-aos="fade-up"
                                data-aos-duration="2000" data-aos-delay="600">
                            <div class="row">
                                <div class="col-2">
                                    HTML5
                                </div>
                                <div class="col-8">
                                    <div class="progress">
                                        <div class="progress-bar bg-success  progress-bar-striped progress-bar-animated" role="progressbar"  id="G">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div data-aos="fade-up"
                                data-aos-duration="2000" data-aos-delay="700">
                            <div class="row">
                                <div class="col-2">
                                    CSS3
                                </div>
                                <div class="col-8">
                                    <div class="progress">
                                        <div class="progress-bar bg-success  progress-bar-striped progress-bar-animated" role="progressbar"  id="G">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div data-aos="fade-up"
                                data-aos-duration="2000" data-aos-delay="800">
                            <div class="row">
                                <div class="col-2">
                                    Bootstrap5
                                </div>
                                <div class="col-8">
                                    <div class="progress">
                                        <div class="progress-bar bg-success  progress-bar-striped progress-bar-animated" role="progressbar"  id="G">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div data-aos="fade-up"
                                data-aos-duration="2000" data-aos-delay="900">
                            <div class="row">
                                <div class="col-2">
                                    MYSQL
                                </div>
                                <div class="col-8">
                                    <div class="progress">
                                        <div class="progress-bar bg-success  progress-bar-striped progress-bar-animated" role="progressbar"  id="H">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div data-aos="fade-up"
                                data-aos-duration="2000" data-aos-delay="1000">
                            <div class="row">
                                <div class="col-2">
                                    Javascript
                                </div>
                                <div class="col-8">
                                    <div class="progress">
                                        <div class="progress-bar bg-success  progress-bar-striped progress-bar-animated" role="progressbar"  id="E">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                        </div>

                        <div class="col">
                            <h3>Tools</h3><br><br>
                            <div data-aos="fade-up"
                                data-aos-duration="2000">
                            <div class="row">
                                <div class="col-2">
                                    Notepad++
                                </div>
                                <div class="col-8">
                                    <div class="progress">
                                        <div class="progress-bar bg-info  progress-bar-striped progress-bar-animated" role="progressbar"  id="Korean">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div data-aos="fade-up"
                                data-aos-duration="2000" data-aos-delay="300">
                            <div class="row">
                                <div class="col-2">
                                    Git
                                </div>
                                <div class="col-8">
                                    <div class="progress">
                                        <div class="progress-bar bg-info  progress-bar-striped progress-bar-animated" role="progressbar"  id="English">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div data-aos="fade-up"
                                data-aos-duration="2000" data-aos-delay="400">
                            <div class="row">
                                <div class="col-2">
                                    VSCode2
                                </div>
                                <div class="col-8">
                                    <div class="progress">
                                        <div class="progress-bar bg-info  progress-bar-striped progress-bar-animated" role="progressbar"  id="F">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <div data-aos="fade-up"
                                data-aos-duration="2000" data-aos-delay="500">
                            <div class="row">
                                <div class="col-2">
                                    Windows
                                </div>
                                <div class="col-8">
                                    <div class="progress">
                                        <div class="progress-bar bg-info  progress-bar-striped progress-bar-animated" role="progressbar"  id="Korean">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div data-aos="fade-up"
                                data-aos-duration="2000" data-aos-delay="600">
                                <div class="wow">  
                                    <div class="row">
                                        <div class="col-2">
                                            MAC
                                        </div>
                                        <div class="col-8">
                                            <div class="progress">
                                                <div class="progress-bar bg-info  progress-bar-striped progress-bar-animated" role="progressbar"  id="G">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                           
                            </div>

                        </div>
                    </div>
                </a>
            </div>
            <div id="arrow">
                    <a href="#contact">
                        <img src="https://img.icons8.com/ios-filled/50/000000/circled-down-2.png"> 
                    </a>    
                </div>
            </div>

            <div id ="Parallax3">

            </div>

            <div id="page4">
                <a id="contact" class="smooth">
                    <h2>Contact </h2>
                    <div class="row">
                        <div class="col-9 mt-5">
                            <form id="contact-form" action="messages.php" method="post";>
                                <span style="margin-left: 9vh; font-size:17pt;"> Contact Me!</span>
                            <div class="container-form mt-3">
                                <div class="row g-3" style="justify-content: center;">
                                    <div class="col-md-5">
                                      <label for="validationDefault01" class="form-label">First name</label>
                                      <input type="text" class="form-control" id="mfname" name="mfname" value="" placeholder="First Name..." required>
                                    </div>
                                    <div class="col-md-5">
                                      <label for="validationDefault02" class="form-label">Last name</label>
                                      <input type="text" class="form-control" id="mlname" name="mlname" value="" placeholder="Last Name..." required>
                                    </div>
                                </div>

                                <div class="row" style="justify-content: center;">    
                                    <div class="col-8">
                                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="memail" name="memail" placeholder="name@example.com" required>
                                    </div>
                                </div>

                                <div class="row" style="justify-content: center;">
                                  <div class="col-8">
                                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                    <textarea class="form-control" id="textmessage" rows="4" name="textmessage" placeholder="Type your message..." required></textarea>
                                  </div>  
                                </div>

                                  <div class="col-12 mt-3 mb-3">
                                    <button class="btn btn-grey" type="reset">Reset form</button>
                                    <button class="btn ml-3 btn-dark" type="submit">Submit form</button>
                                  </div>
                                </form>
                                
                            </div>
                        </div>

                        <div class="col-3 mt-5">
                            <span> Connect With Me! </span>
                            <div class="container-connect">
                                <div class="row mt-3 mb-3" style="justify-content: center; cursor: pointer;">
                                    <img src="https://img.icons8.com/glyph-neue/64/000000/linkedin.png" onclick="linkedin()">
                                </div>
                                
                                <div class="row mb-3" style="justify-content: center; cursor: pointer;">
                                    <img src="https://img.icons8.com/ios-filled/50/000000/facebook-new.png" onclick="facebook()">
                                </div>
                                <div class="row" style="justify-content: center; cursor: pointer;">
                                    <img src="https://img.icons8.com/glyph-neue/64/000000/instagram-new.png" onclick="instagram()">
                                </div>
                                <div class="row mt-2 mb-3" style="justify-content: center; cursor: pointer;">
                                    <img src="https://img.icons8.com/glyph-neue/64/000000/handshake.png" onclick="handshake()">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </a>
            </div>
                
            </div>
        </div>    
        

        <footer>
            <div class = "bg-dark p-3">
            © 2022 by Jaehyeon Yang
            <button class="btn btn btn-outline-info m-2" type="button">
                <a href="#page0" style="text-decoration: none; color:white">To the Top</a>
            </button>  
            Total Visits: <?php 
                include 'visit.php';
            ?>    
            </div>
        </footer>
    <!-- Javascript implementation-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
    <script src="Projectjs.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
  
    <script>
        AOS.init();
    </script>

    </body>

</html>
<?php

 }
 else{
    header("Location : error.php");
 }
 exit();
 ?>