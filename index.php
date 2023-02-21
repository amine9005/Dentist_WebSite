<?php
    $conn = mysqli_connect('localhost','root','','dentist_contact_db') or die("connection Failed");

    if(isset($_POST['submit'])){

        $name = mysqli_real_escape_string($conn,$_POST['contact_name']);
        $email = mysqli_real_escape_string($conn,$_POST['contact_email']);
        $number = $_POST['contact_number'];
        $date = $_POST['contact_date'];
        
        $insert = mysqli_query($conn,"INSERT INTO `contact_form`( `name`, `email`, `number`, `date`) VALUES ('$name','$email','$number','$date')") or die("insertion Failed");

        if($insert){
            $message[] = "Appointment has been made successfully";
        } else{
            $message[] = "Failed to make an Appointment";
        }
        header("Refresh:0");
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/f62f3425fc.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Header Section Starts -->
    <header>

        <a href="#" class="logo" >Dentail<span>Care</span></a>

        <nav class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#footer">About</a></li>

                <li><a href="#services">Services</a>
                    
                </li>
    
                <li><a href="#reviews">Review</a></li>
                
                <li><a href="#contact">Contact</a></li>
    
            </ul>
        </nav>

        <a href="#contact" class="link-btn">Make an appointment</a>

        <span id="menu-btn" class="fa-solid fa-bars"></span>
    </header>

    <!-- Header Section Ends -->



    <!-- Home  Section Starts-->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>Let us brighten Your smile</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab aspernatur maxime saepe facere dolores corporis consequuntur placeat recusandae alias, quas magni expedita fuga? Voluptatum, rem! Quibusdam nihil aliquid temporibus.</p>
                    <a href="#contact" class="link-btn">Make an appointment</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Home  Section Ends-->

    <!-- About Section Starts -->
    <section class="about" id="about">
        <div class="conatiner">
            <div class="row align-items-center">
                <div class="col-md-6 imgage">
                    <img src="imgs/dentist-1.png" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <span>About US</span>
                    <h3>The Best Health Care For You</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam deserunt totam dolore numquam unde pariatur aspernatur ut accusantium laudantium ad vitae fugit eos, ratione sapiente debitis quae aliquid animi eveniet nam id minima voluptate a, omnis est? Iusto quo culpa, ratione, est minima perferendis dolor eligendi ad cumque totam recusandae fugit beatae quos. Voluptate, facilis!</p>
                    <a href="#contact" class="link-btn">Make an appointment</a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section Ends -->


    <!-- Services Section Starts -->
    <section class="services" id="services">

        <h1 class="heading">Our services</h1>
        <div class="box-container container">
            <div class="box">
                <img src="imgs/icon-1.svg" alt="img">
                <h3>Alignment Specialist</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam culpa vero fuga, et eveniet illo dolorum aliquam neque eos labore veniam ipsa facere incidunt perspiciatis ad rerum id cupiditate ab?</p>
            </div>

            <div class="box">
                <img src="imgs/icon-2.svg" alt="img2">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga maxime, iure quo omnis, eum recusandae error, atque ipsum modi nihil officia et!</p>
            </div>

            <div class="box">
                <img src="imgs/icon-3.svg" alt="img">
                <h3>Oral hygene experts</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam culpa vero fuga, et eveniet illo dolorum aliquam neque eos labore veniam ipsa facere incidunt perspiciatis ad rerum id cupiditate ab?</p>
            </div>

            <div class="box">
                <img src="imgs/icon-4.svg" alt="img2">
                <h3>Root Canal Specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga maxime, iure quo omnis, eum recusandae error, atque ipsum modi nihil officia et!</p>
            </div>

            <div class="box">
                <img src="imgs/icon-5.svg" alt="img">
                <h3>Live Dental Advisory</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam culpa vero fuga, et eveniet illo dolorum aliquam neque eos labore veniam ipsa facere incidunt perspiciatis ad rerum id cupiditate ab?</p>
            </div>

            <div class="box">
                <img src="imgs/icon-6.svg" alt="img2">
                <h3>Cavity Inspection</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga maxime, iure quo omnis, eum recusandae error, atque ipsum modi nihil officia et!</p>
            </div>
        </div>

    </section>
    <!-- Services Section Ends -->

    <!-- Process Section Starts -->
    <section class="process"> 
        <div class="box-container container">

            <div class="box">
                <img src="imgs/process-1.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus harum commodi, tempore voluptas eos eaque laborum alias architecto corporis ab sapiente aut rem suscipit!</p>
            </div>
    
            <div class="box">
                <img src="imgs/process-2.png" alt="">
                <h3>Prediatric Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus harum commodi, tempore voluptas eos eaque laborum alias architecto corporis ab sapiente aut rem suscipit!</p>
            </div>
    
            <div class="box">
                <img src="imgs/process-3.png" alt="">
                <h3>Dentail Implants</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus harum commodi, tempore voluptas eos eaque laborum alias architecto corporis ab sapiente aut rem suscipit!</p>
            </div>
        </div>
    </section>
   

    <!-- Process Section Ends -->


    <!-- Reviews Section Starts -->

    <section class="reviews" id="reviews">
        <h1 class="heading">Satisfied Clients</h1>

        <div class="box-container container">

            <div class="box">
                <img src="imgs/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia sint illum deserunt amet, ipsa veritatis ipsam, accusamus possimus ratione at doloremque reiciendis? Velit, eum animi!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>James Smith</h3>
                <span>Satisfied Client</span>
            </div>

            <div class="box">
                <img src="imgs/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, sit! A recusandae dolorem fugiat explicabo ullam voluptatum doloribus ex voluptatibus cupiditate voluptates tempore consectetur saepe vel, veritatis ratione fuga quidem culpa ducimus quae minima!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Mary brown</h3>
                <span>Satisfied Client</span>
            </div>

            <div class="box">
                <img src="imgs/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, nihil ipsum. Eveniet quasi porro alias consequatur exercitationem recusandae blanditiis quis sequi fuga, repellendus vitae inventore. Laborum!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Edward robins</h3>
                <span>Satisfied Client</span>
            </div>

        </div>

    </section>
    <!-- Reviews Section  Ends -->


    <!-- Contact Section Starts -->
    <section class="contact" id="contact">
        <h1 class="heading">Make an appointment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<P class="message">'.$message.'</P>';
                    }
                }
            ?>
            <span>Your Name: </span>
            <input type="text" name="contact_name" placeholder="Enter Your Name" class="box" required>
            <span>Your Email: </span>
            <input type="email" name="contact_email" placeholder="Enter Your Email" class="box" required>
            <span>Your Number: </span>
            <input type="number" name="contact_number" placeholder="Enter Your Number" class="box" required>
            <span>Appointment Date: </span>
            <input type="datetime-local" name="contact_date" class="box" required>
            <input class="link-btn" type="submit" value="make appointment" name="submit">
        </form>

    </section>

    <!-- Contact Section Ends -->


    <!-- Footer Section Starts -->

    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>Phone Number</h3>
                <p> +999-999-9999</p>
                <p> +000-000-0000</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Our Adress</h3>
                <p>Lorem, ipsum - 72217</p>
            </div>
            
            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>Working Hours</h3>
                <p>7:00AM to 10:00PM</p>
            </div>
            
            <div class="box"> 
                <i class="fas fa-envelope"></i>
                <h3>Email Adress</h3>
                <p> email@email.com</p>
                <p> email2@email.com</p>
            </div>
        </div>
        <div class="credit">&copy;copyright <span>Amine Selmi</span></div>

    </section>

    <!-- Footer Section Ends -->



    
    <script src="js/main.js" type="text/javascript"></script>
</body>
</html>