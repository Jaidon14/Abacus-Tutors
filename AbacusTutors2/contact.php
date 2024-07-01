<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-05NTHYC88G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-05NTHYC88G');
</script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Abacus Tutors 2</title>

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link rel="stylesheet" href="styles.css">

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    </head>

    <body>

        <!-- Navigation -->
        <nav>
            <a href="index.php"><img src="images/abacus.jpg" alt=""></a>
            <div class="navigation">
                <ul>
                    <i id="menu-close" class="fas fa-times"></i>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="course.html">Courses</a></li>
                    <li><a href="work.html">Our Work</a></li>
                    <li><a class="active" href="contact.php">Contact</a></li>
                </ul>
                <img id="menu-btn" src="images/menu.png" alt="">
            </div>
        </nav>

        <!-- Home -->

        <section id="about-home">
            <h2>Contact Us</h2>
        </section>

        <section id="contact">
            <div class="getin">
                <h2>Stay in touch</h2>
                <p>Looking to start your abacus tutors journey? <br><br> Please contact us for any inquiries or for any enrollment related questions. </p>

                <div class="getin-details">
                    <h3>Headquaters</h3>
                    <div>
                        <i class="far fa-home get"></i>
                        <p>25 Hennie Alberts Street, Brackenhurst</p>
                    </div>
                    <h3>Phone Number</h3>
                    <div>
                        <i class="fas fa-phone-alt get"></i>
                        <p>Callen (+27) 60 579 7562 <br><!--additional numbers here--></p>
                    </div>
                    <h3>Email Address</h3>
                    <div>
                        <i class="fal fa-envelope-open-text get"></i>
                        <p>cpulliah@gmail.com <br> <!--additional emails here--></p>
                    </div>
                    <h3>Follow Us</h3>
                    <div class="pro-links">
                       <!--<a href=""><i class="fab fa-facebook-f"></i></a>-->
                        <a href="https://www.instagram.com/abacus.tutors/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <!--<a href=""><i class="fab fa-linkedin-in"></i></a>-->
                    </div>
                </div>
            </div>
            <form action="contcon.php" method="POST">
            <div class="form">
                <h4>Let's connect!</h4>
                <p></p>
                <div class="form-row">
                    <input type="text" placeholder="name" name="name">
                    <input type="email" placeholder="email" name="email">
                </div>
                <div class="form-col">
                    <input type="text" placeholder="subject (enrollment or query)" name="subject">
                </div>
                <div class="form-col">
                    <textarea name="assist" id="" cols="30" rows="8" placeholder="How can we assist?"></textarea>
                </div>
                <div class="form-col">
                <button type="submit" name="submit">submit</button>
                </div>
            </div>
            </form>
        </section>

        <section id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.500862089309!2d28.09585068382322!3d-26.31027645429196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9505246850c3eb%3A0x6acd6ea4611a764c!2s25%20Hennie%20Alberts%20St%2C%20Brackenhurst%2C%20Alberton%2C%201448!5e0!3m2!1sen!2sza!4v1717603104614!5m2!1sen!2sza"
              style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>


        <!-- Footer -->
        <footer>
            <div class="footer-col">
                <h3>Top Courses</h3>
                <li>Grade 10 Trig</li>
                <li>Grade 11 probability</li>
                <li>Grade 12 calculus</li>
            </div>
            <div class="footer-col">
                <h3>Keep in touch</h3>
                <li>Callen Pulliah</li>
                <li>(+27) 60 579 7562</li>
            </div>
            <div class="footer-col">
                <h3>Located</h3>
                <li>25 Hennie Alberts Street, Brackenhurst</li>
            </div>

            <div class="copyright">
                <p>Copyright ©2024 All rights reserved </p>
                <div class="pro-links">
                    <!--<a href=""><i class="fab fa-facebook-f"></i></a>-->
                    <a href="https://www.instagram.com/abacus.tutors/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <!--<a href=""><i class="fab fa-linkedin-in"></i></a>-->
                </div>
            </div>
        </footer>

        <script>
              $('#menu-btn').click(function(){
            $('nav .navigation ul').addClass('active')
        });
              $('#menu-close').click(function(){
            $('nav .navigation ul').removeClass('active')
        });

       
        </script>


    </body>

</html>