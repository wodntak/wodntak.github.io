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
                    <div class="text-right" >
                        <button class="btn btn btn-outline-warning m-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign in</button>

                            <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form id = "signin-form" action="login.php" method="post">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                        <label for="Username" class="col-form-label" style="float: left;">Username:</label>
                                        <input type="text" class="form-control" id="Username" name="username">
                                        </div>
                                        <div class="mb-3">
                                        <label for="Password" class="col-form-label" style="float: left;">Password:</label>
                                        <input type="password" class="form-control" id="Password" name="pass">
                                        </div>
                                    
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closesign()">Close</button>
                                    <button type="submit" class="btn btn-primary" onclick="Signin()">Confirm</button>
                                    </div>
                                    
                                </div>
                                </div>
                                </form>
                            </div>

                        <button class="btn btn btn-outline-info m-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1">Register</button>

                            <div class="modal" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <form id = "register-form" action="Register.php" method="post">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="fname" class="col-form-label" style="float: left;">First name:</label>
                                                    <input type="text" class="form-control" id="fname" name="fname" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="lname" class="col-form-label" style="float: left;">Last name:</label>
                                                    <input type="text" class="form-control" id="lname" name="lname" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="Username1" class="col-form-label" style="float: left;">Username:</label>
                                                    <input type="text" class="form-control" id="Username1" name="username" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="EmailReg" class="col-form-label" style="float: left;">Email:</label>
                                                    <input type="text" class="form-control" id="EmailReg" name="email" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="PasswordReg" class="col-form-label" style="float: left;">Password:</label>
                                                    <input type="password" class="form-control" id="PasswordReg" name="pass" pattern="^\w{6,}$" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeregi()">Close</button>
                                            <button type="submit" class="btn btn-primary" onclick="Register()">Confirm</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        <button class="navbar-toggler" id="externalbutton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                    </div>
                </button>
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
                                      <div class="row" style="justify-content: center;">    
                  <div class="row">
                        
                        </div>

                        <div class="col-3 mt-5">
                            <span> Connect With Me! </span>
                            <div class="container-connect">
                                <div class="row mt-3 mb-3" style=" justify-content: center; cursor: pointer;">
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

