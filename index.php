<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Link your CSS file for styling -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <div class="nav-bar">
            <div style="font-size: 30px; color: white; font-weight: bolder; margin-left: 20px;" class="logo">Codecrafter</div>
            <div class="nav">
              <div class="Home"><a href="#home">Home</a></div>
              <div class="About"><a href="#About">About</a></div>
              <div class="services"><a href="#Services">services</a></div>
              <div class="Contact"><a href="#Contact">Contact</a></div>
            </div>
          </div>
    </header>
        <div id="home" class="hero">
          <div class="her">  
            <h1>Welcome to Codecrafter!</h1>
            <p>Your ultimate destination for web development solutions. <br>
               Unlock your coding potential with our comprehensive tutorials, <br>interactive coding challenges,and real-world projects.
            </p>
            <a href="#explore-services.php" class="btn">Explore Services</a>
         </div>
            
        </div>
        
        <div id="About" class="know">
            <h2>About Us </h2>
            <div class="line"></div>
            <p>Welcome to Codecrafter, where we craft cutting-edge solutions for your digital needs.<br> Our team of skilled developers, designers, and strategists is dedicated to delivering<br> high-quality software products that empower businesses and individuals.</p>
            <div class="write" style="width: 100%; display: flex; justify-content: space-around; align-items: center; padding-right:40px; margin-top: 20px;">
                <div class="mission">
                    <img src="./image/mission-removebg-preview.png" alt="">
                    <h3>Our Mission</h3>
                    <p>At Codecrafter, our mission is to transform ideas into reality<br> through innovative and efficient web development solutions.</p>
                </div>
                <div class="career">
                    <img src="./image/career-removebg-preview.png" alt="">
                    <h3>Career</h3>
                    <p>If you are looking for a rewarding career in the programming world,<br>and make a difference, we invite you to join our team at Codecrafter.</p>
                </div>

                <div class="work">
                    <img src="./image/part-removebg-preview.png" alt="">
                    <h3>Let's Work Together</h3>
                    <p>Let's work together to create remarkable digital solutions.<br>We're ready to collaborate and bring your ideas to life.</p>
                </div>

                <div class="choose">
                    <img src="./image/choose-removebg-preview.png" alt="">
                    <h3>Why choose us</h3>
                    <p>Our team of experts delivers exceptional results tailored to your unique needs.<br>We offer unparalleled expertise, collaboration, in project we undertake</p>
                </div>

            </div>

        </div>
        
        <div id="Services" class="serve">
            <h1>Our Services</h1>
            <div class="line-serve"></div>
           <div class="image-container"><img src="./image/fotis-fotopoulos-DuHKoV44prg-unsplash.jpg" alt=""></div>
            <div class="content-serve">
                <div class="container">
                    <img src="./image/Wooden Ambience Lamp 'essential' - Etsy.jpg" alt="">
                    <h4>Mobile development</h4>
                    <p>Our team of experts delivers exceptional results tailored to your unique needs.<br>We offer unparalleled expertise, collaboration, in project we undertake</p>
                </div>

                <div class="container">
                    <img src="./image/Wooden Ambience Lamp 'essential' - Etsy.jpg" alt="">
                    <h4>Mobile development</h4>
                    <p>Our team of experts delivers exceptional results tailored to your unique needs.<br>We offer unparalleled expertise, collaboration, in project we undertake</p>
                </div>

                <div class="container">
                    <img src="./image/Wooden Ambience Lamp 'essential' - Etsy.jpg" alt="">
                    <h4>Mobile development</h4>
                    <p>Our team of experts delivers exceptional results tailored to your unique needs.<br>We offer unparalleled expertise, collaboration, in project we undertake</p>
                </div>
            </div>

        </div>


        <div id="Contact" class="Contact-me">
            <div class="form-area">
                <h1>Contact Us</h1>
                <form class="" action="send.php" method="post">
                    <input type="email" name="email" placeholder="Email" required><br>
                    <input type="text" name="subject" placeholder="Subject" required><br>
                    <textarea name="message" placeholder="Message" required></textarea><br>
                    <button type="submit" name="send">Submit</button>
                </form>
            </div>
            <div class="content-area">
                <h2>Contact Information</h2>
                <p>Address: 123 Codecrafter, City, Nigeria</p>
                <p>Phone: +234 8157800949</p>
                <p>Email: codecrafter530@gmail.com</p>
            </div>
        </div>

        <footer>
            <p>&copy; 2023 Codecrafter. All rights reserved.</p>
        </footer>
    </body>
</html>