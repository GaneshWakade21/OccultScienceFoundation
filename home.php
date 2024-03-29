<?php include "db.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Occult Science Foundation</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
 
    <link href="images/osf.png" rel="icon">
    <link rel="stylesheet" href="ploader.css">
    <style>
        .alb{
            width: 250px;
            height: 250px;
            padding: 10px;
        }
        .alb img{
            width: 100%;
            height: 100%;
            cursor: pointer;
            border: 3px solid blue;
            transition: transform .2s;
        }
        a{
            text-decoration: none;
            color: black;
        }
          .uploadimg{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
        }
    </style>

</head>

<body>

    <div id="preloader"></div>

    <!-- <div class="loader_bg" id="loader_bg">
        <div class="loader">
            <video width="400" autoplay>
                <source src="./images/loadercircle.mp4" type="video/mp4">
                Your browser does not support HTML video.
            </video>
        </div>
    </div> -->


    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/osflogo.png"
                            style="width: 50px;height: 50px; border: 1px solid #FF5733;border-radius: 50px;">
                        <span>
                            Occult Science Foundation
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row
                                align-items-center">
                            <ul class="navbar-nav ">
                                <li class="nav-item active ">
                                    <a class="nav-link scrollto text-dark" href="home.php">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scrollto text-dark" href="about.html">About Us</a>
                                </li>
                                <!-- <li class="nav-item">
                                        <a class="nav-link text-dark"
                                            href="missionVision.php">Mission &
                                            Vision</a>
                                    </li> -->
                                <li class="nav-item">
                                    <a class="nav-link scrollto text-dark" href="core.html">Core Values</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scrollto text-dark" href="courses.html">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scrollto text-dark" href="appoint.html">Book Appointment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scrollto text-dark" href="dev.html">Dev Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scrollto text-dark" href="adminlogin.php">Admin Login</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/banner1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/astro4.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/vastushastra.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- slider section -->
    </div>
    <!-- about section -->

    <section class="about_section layout_padding2-top
            layout_padding-bottom">
        <div class="design-box">
            <img src="images/design-2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2 style="color: #0a192f">
                                Chairperson, Occult Science Foundation
                            </h2>
                        </div>

                        <p class="text text-justify">
                            Ms. Usha Vasundhrra, B.A., B-Ed, is a Certified Professional having a rich experience of 10
                            years in the field of Astrology, being residing in Zirakpur, though active primarily in &
                            around Chandigarh & related cities. Her clientel is also blessed with International Clients.
                            She has done various Certifications & has in-depth knowledge and experience of around 5
                            years in the field of Numerology, Mobile Numerology, Tarot Cards Placement, Vastu Shastra
                            and Lal Kitab remedies.
                            She has also attained a Jr. Docrate level Diploma in the field of Naturopathy recently and
                            henceforth will be an added advantage for her clients to guide them medical solutions for
                            their respective ongoing health issues.
                            She is being highly recommend & appreciated for her work ethics and quality delivery in the
                            desired fields of Cosmic Science as listed above several times in part years till date in
                            various Professional Programmes and Seminars.
                            In order to add pinch of excellence and professionalism, she is the sister in law of famous
                            Astrologer named P. Khurrana, & had got her all basics of Numerology from this high profiled
                            professional in her early days. She had engraved the liking and learning in this field post
                            her marriage and since then she had never looked backed and have a premium quality warehouse
                            of the concerned Knowledge bytes.

                            <!-- DeviShakti previously known as Vasundharra
                                School Of Astrologgy in Panchkula, Chandigarh is
                                one of the leading businesses in the Tarot
                                Reading Services. Also known for Tarot Reading
                                Services, Astrology Training Centres, Tarot
                                Reading Classes, Vastu Shastra Classes, Lal
                                Kitab Experts, Numerology Classes and much more.
                                Find Address, Contact Number, Reviews & Ratings,
                                Photos, Maps of Vasundharra School Of
                                Astrologgy, Panchkula, Chandigarh. -->
                        </p>
                        <div>
                            <span><a href="gallery.html">
                                    Gallery
                                </a>
                                <a href="certificate.html" style="margin: 5px">
                                    Certificate
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-box">
                        <img src="images/new1.png" alt="" style="width: 300px;height: 280px;">
                        <span style="font-size: 23px; font-weight: bold; margin:auto">Ms. Usha Vasundhrra</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- <section class="text-gray-600 body-font" id="nap">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex w-full mb-20 flex-wrap">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4 font-semibold">Latest Collection</h1>
      <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">New collection of Gold,Silver and Diamond products.</p>
    </div>
    <div class="flex flex-wrap md:-m-2 -m-1">
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-1/2 ">
          <img alt="gallery" class="w-full object h-full object-center block" src="assets/alljwelleries/">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="assets/alljwelleries/">
        </div>
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="assets/alljwelleries/">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="assets/alljwelleries/>">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="assets/alljwelleries/">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block bg-wite" src="assets/alljwelleries/">
        </div>
      </div>
    </div>
  </div>
</section> -->
    <!-- <p class="text text-justify" style="font-size: 13px;font-style: italic;">
        The added trust factor to the concerned
        business hub is the clean image of Mr Akshey Mehta, proprietor,
        who was both and brought up in Chandigarh. The concerned
        individual's interest in his work provides a good amount of
        options for the consumers to pick and choose from the latest
        available designs along with customized designs of their own
        choice.The business hub also appreciated payments via Debit
        Cards,</p> -->
    <!-- price section -->

    <!-- <section class="price_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            New Arriveles
          </h2>
        </div>
        <div class="price_container">

        </div>
        <div class="d-flex justify-content-center">
          <a href="" class="price_btn">
            See More
          </a>
        </div>
      </div>
    </section> -->
    <!-- end price section -->

    <!-- ring section -->

    <center>
        <!-- The image has scrolling behavior to left -->
        <!-- <marquee  behavior="scroll" direction="left">   
        <span style="display: flex; cursor: pointer">    
          <img src="images/img7.jpg" alt="" style="width: 300px; height:300px; margin: 12px">
          <img src="images/img9.jpg" alt="" style="width: 300px; height:300px; margin: 12px">
          <img src="images/img10.jpg" alt="" style="width: 300px; height:300px;">
          <img src="images/img11.jpg" alt="" style="width: 300px; height:300px; margin: 12px">
          <img src="images/img12.jpg" alt="" style="width: 300px; height:300px; margin: 12px">
          <img src="images/img13.jpg" alt="" style="width: 300px; height:300px; margin: 12px">
          <img src="images/img14.jpg" alt="" style="width: 300px; height:300px; margin: 12px">             
        </span> 
    </marquee>   -->

    </center>

    <!-- end ring section -->
    <!-- testing -->

    <!-- client section -->
    <div class="design-box">
        <img src="images/design-1.png" alt="">
    </div>
    <section class="client_section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Testimonial's
                </h2>
            </div>
            <h4 class="secondary_heading">
                What Our Precious Clients Say !
            </h4>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="name">
                                    <h5>
                                        Ms. Vaishali Sood
                                    </h5>
                                    <h6>
                                        <img src="images/client.jpg" alt="">
                                    </h6>
                                </div>
                            </div>
                            <div class="detail-box text text-justify">
                                <p>
                                    “Hello everyone,
                                    I am Vaishali Sood tarot card reader ,
                                    numerologist and vastu Consultant. I
                                    started my journey in this occult
                                    science in 2017. I have learnt
                                    numerology, tarot cards reading and
                                    Vastu from Usha Vasundhra ma'am. She is
                                    real good mentor for me . She will teach
                                    you in simplest possible way and guide
                                    you wherever you feel struck. I will
                                    strongly recommend to all aspirants to
                                    learn from her. Ma'am u r the best ,this
                                    is coming directly from my heart. All
                                    the best .
                                    Gratitude
                                    Vaishali sood.”
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="name">
                                    <h5>
                                        Mr. Ajay Sharma
                                    </h5>
                                    <h6>

                                    </h6>
                                </div>
                            </div>
                            <div class="detail-box text text-justify">
                                <p>
                                    “Great knowledge of
                                    Numerology,Vedic,Vastu,Laal Kitab.
                                    Wonderful Teaching Techniques, Best in
                                    Chandigarh Tricity. Apart from teaching
                                    she is always their to help whenever I
                                    Am struck with any kundli a great
                                    mentor.I would like to Recommend her for
                                    all those who always wanted to become a
                                    true knowledgeable Astrologer. I would
                                    like to give 5 ⭐ Rating. Thanks Usha
                                    Mam.”
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="name">
                                    <h5>
                                        Ms. Suukanya Sharma
                                    </h5>
                                    <h6>

                                    </h6>
                                </div>
                            </div>
                            <div class="detail-box text text-justify">
                                <p>
                                    Dear Usha Aunty Ji,
                                    Namaste & best wishes
                                    Very genuine human being which you
                                    hardly see in today's world. Simple yet
                                    authentic. Will guide you in a very
                                    positive way where you remove all your
                                    fears and move ahead in life. I wish the
                                    universe creates more such genuine
                                    persons who are truly a blessing in
                                    today's world. Highly recommended.
                                    Thanks & Regards
                                    Suukanya Sharma
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="name">
                                    <h5>
                                        Mr. Nishant
                                    </h5>
                                    <h6>

                                    </h6>
                                </div>
                            </div>
                            <div class="detail-box text text-justify">
                                <p>
                                    I love to be casual and
                                    comfortable, but I also love the
                                    easy glamour of wearing jewelry
                                    all the time.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="name">
                                    <h5>
                                        Ms. Divya
                                    </h5>
                                    <h6>
                                        <img src="" alt="">
                                    </h6>
                                </div>
                            </div>
                            <div class="detail-box text text-justify">
                                <p>
                                    Every woman’s wardrobe… long
                                    live the pearl necklace, true or
                                    false, from our first date until
                                    our last breath!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="name">
                                    <h5>
                                        Ms. Ritu Sharma
                                    </h5>
                                    <h6>

                                    </h6>
                                </div>
                            </div>
                            <div class="detail-box text text-justify">
                                <p>
                                    Trends come and go, and style
                                    evolves. It’s important to have
                                    pieces of jewelry that are
                                    timeless and look chic despite
                                    ever-changing fashions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="name">
                                    <h5>
                                        Ms. Ritu
                                    </h5>
                                    <h6>

                                    </h6>
                                </div>
                            </div>
                            <div class="detail-box text text-justify">
                                <p>
                                    It’s good to start early when
                                    buying jewelry pieces. Aside
                                    from being investments, they are
                                    classic, they are timeless, and
                                    they are something that you pass
                                    on – it’s a memory, it’s an
                                    heirloom.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="name">
                                    <h5>
                                        Mr. Krish
                                    </h5>
                                    <h6>

                                    </h6>
                                </div>
                            </div>
                            <div class="detail-box text text-justify">
                                <p>
                                    Layering is the best way to
                                    express yourself through
                                    jewelry; each piece makes a
                                    statement, each piece has its
                                    story and if curated and layered
                                    well, it can enhance your look
                                    and make sure you stand out.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="name">
                                    <h5>
                                        Mr. Ravinder Singh Gill
                                    </h5>
                                    <h6>

                                    </h6>
                                </div>
                            </div>
                            <div class="detail-box text text-justify">
                                <p>
                                    I always accessorize with
                                    jewelry. I am a bit of a magpie;
                                    I love sparkles, and so wearing
                                    jewelry makes me feel more
                                    exciting and confident, too!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <form action="<?php echo $_SERVER['PHP_SELF'];
                                    ?>" method="post">
                                <div>
                                    <input type="text" placeholder="Name" name="name" required />
                                </div>
                                <div>
                                    <input type="email" placeholder="Email" name="email" required />
                                </div>
                                <div>
                                    <input type="text" placeholder="Phone" name="phone" required />
                                </div>
                                <div>
                                    <input type="text" class="message-box" placeholder="Message" name="message"
                                        required />
                                </div>
                                <div>
                                  
                                </div>
                                <div class="d-flex" style="margin:0cm;">
                                    <button type="submit">
                                        SEND
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </section>

    <!-- end client section -->

    <!-- contact section -->

    <!-- <section class="contact_section layout_padding">
        <div class="design-box">
            <img src="images/design-2.png" alt="">
        </div>
        <div class="container ">
            <div class="">
                <h2 class="">
                    Contact Us
                </h2>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div>
                            <input type="text" placeholder="Name" name="name" required />
                        </div>
                        <div>
                            <input type="email" placeholder="Email" name="email" required />
                        </div>
                        <div>
                            <input type="text" placeholder="Phone" name="phone" required />
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Message" name="message" required />
                        </div>
                        <div>
                            
                        </div>
                        <div class="d-flex" style="margin">
                            <button type="submit">
                                SEND
                            </button>
                        </div>

                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map_container">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3429.218172046401!2d76.7485432!3d30.740372599999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fedea45555555%3A0x75e55f80941e5726!2sAkshey%20Jewellers!5e0!3m2!1sen!2sin!4v1665899314597!5m2!1sen!2sin"
                                width="600" height="300" frameborder="0" style="border:0;
                                            width: 100%; height:100%" allowfullscreen>
                            </iframe>
                        </div>
                         
                    </div>
                </div>
            </div>
    </section>
 -->

    <!-- end contact section -->

    <!-- info section -->
    <div class="uploadimg">
        <?php 
       
        $sql = "SELECT * FROM images ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) { ?>
                <div class="alb">
                    <img src="uploads/<?=$images['image_url']?>" >
                    
                    <!-- Delete Button Start-->
                    <!-- <a href="delete.php?id=<?=$images['id']?>" style="color: red">DELETE</a> -->
                    <!-- Delete Button end -->

                </div>
    <?php } }?>
    </div>
    <section class="info_section ">
        <div class="container h-90">
            <div class="info_container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="info_logo">
                            <a href="">
                                <img src="images/OccultLogo.jpg" alt="">
                                <span style="font-size: 15px">
                                    Occult Science Foundation
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_contact">
                            <a href="">
                                <img src="images/location.png" alt="">
                                <span>
                                    Booth No.321, Sector 37D,
                                    Vidya Path, Sector 37,
                                    Chandigarh,
                                    160036
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_contact">
                            <a href="">
                                <img src="images/phone.png" alt="">
                                <span>
                                    +91 98153 65001
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_contact">
                            <a href="">
                                <img src="images/mail.png" alt="">
                                <span>
                                    ushavasundhrra631@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="info_form">
                            <div class="d-flex justify-content-center">
                                <h5 class="info_heading">
                                    Newsletter
                                </h5>
                            </div>
                            <form action="">
                                <div class="email_box">
                                    <label for="email2">Enter Your Email</label>
                                    <input type="text" id="email2">
                                </div>
                                <div>
                                    <button>
                                        subscribe
                                    </button>
                                </div>
                            </form>
                        </div> -->
                <div class="info_social">
                    <div class="d-flex justify-content-center">
                        <h5 class="info_heading">
                            Follow Us
                        </h5>
                    </div>
                    <div class="social_box">
                        <a href="">
                            <img src="images/fb.png" alt="">
                        </a>
                        <a href="">
                            <img src="images/twitter.png" alt="">
                        </a>
                        <a href="">
                            <img src="images/linkedin.png" alt="">
                        </a>
                        <a href="">
                            <img src="images/insta.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            &copy; <span id="displayYear"></span> All Rights
            Reserved By
            <a href="https://html.design/">Occult Science Foundation</a>
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

   

    <!-- <script>
        var loader = document.getElementById("loader_bg");

        var dismissLoadingScreen = function () {
            loader.style.display = "none";
        }
        var wait5Seconds = function () {
            var result = setTimeout(dismissLoadingScreen, 15000);
        }
        window.addEventListener("load", wait5Seconds);
    </script> -->





</body>

</html>
