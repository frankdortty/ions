<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ions-World</title>
    <link rel="stylesheet" href="constant/style.css">
    <link rel="stylesheet" href="home.css">
    <link rel="icon" href="media/logo1.png">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
    <header>
        <?php 
            include_once("constant/header.php");
        ?>
    </header>
    <div class="firstsection">
        <div class="lapping">
            <h2>IT Consulting & Services</h2>
            <div class="text">
                <div class="left"><div class="line"></div></div>
                <div class="right">
                    <p>
                        Welcome to Ions Tech Group, your go-to IT consultancy firm. 
                        We specialize in providing top-notch solutions and expertise to help businesses 
                        thrive in the digital world. Whether it's optimizing your information systems, 
                        streamlining operations, or harnessing the power of cutting-edge technologies, 
                        we've got you covered. Let's unlock the full potential of your business together!
                    </p>
                </div>
            </div>
        </div>
        <div class="button">
            <button><div class="plus">+</div><div class="red">Find out more</div></button>
        </div>
    </div>
    <div class="secoundsection">
        <div class="services">
           <div class="top">
                <h2>Our Services</h2>
                <p>
                    Level Up Your Business with Our State-of-the-Art IT Solutions 
                    and Expert Consultancy Services! Harness the Power of Technology 
                    to Propel Your Success!
                </p>
           </div>
        </div>
        <div class="lapping">
            <div class="boxes">
                <div class="box">
                    <h2>Cloud Solutions</h2>
                    <p>
                        Ready to take your business to new heights with our Cloud 
                        Computing services? We'll help you harness the power of the cloud 
                        for efficiency, scalability, and cost-effectiveness. 
                        Let's revolutionize your business together! 💻☁️
                    </p>
                    <a href="">+ Learn More</a>
                </div>
                <div class="box">
                    <h2>Managed IT Services</h2>
                    <p>
                        Our Managed IT Services take care of your IT needs so you can 
                        focus on what you do best. We handle everything from monitoring to support. 
                        Let us be your trusted IT partner! 💻🔧
                    </p>
                    <a href="">+ Learn More</a>
                </div>
                <div class="box">
                    <h2>Data Recovery</h2>
                    <p>
                        Our Data Recovery services are here to save your precious data. 
                        We've got the tools and expertise to recover lost or damaged files.
                        Don't let data loss be a nightmare - we're here to help!  💾🔧


                    </p>
                    <a href="">+ Learn More</a>
                </div>
                <div class="box">
                    <h2>Training</h2>
                    <p>
                        Our Training services empower you with knowledge and skills for the digital world. 
                        From memory management to operating systems, we've got you covered. Level up your 
                        expertise with our courses! 📚💪
                    </p>
                    <a href="">+ Learn More</a>
                </div>
                <div class="box">
                    <h2>Network Solutions</h2>
                    <p>
                        Our Network Solutions keep your business connected and running smoothly. 
                        From setup to maintenance, we've got you covered. Stay connected with our 
                        top-notch solutions! 🌐🔌
                    </p>
                    <a href="">+ Learn More</a>
                </div>
                <div class="box">
                    <h2>Support Consulting</h2>
                    <p>
                        Our Support Consulting services offer expert guidance and assistance 
                        for all your IT needs. From troubleshooting to optimizing, we've got you covered. 
                        Let us be your trusted support partner! 💪🔧
                    </p>
                    <a href="">+ Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="thirdsection">
        <div class="slidshow-section">
            <div class="slideshow-container">
                <div class="slide slides">
                    <div class="content">
                        <p>Testemonials</p>
                        <h2>"Ions Tech transformed our operations, boosting productivity and growth."</h2>
                        <p class="reds">EMMANUEL <br> CEO of LIAS</p>
                    </div>
                </div>
                <div class="slide slides1">
                    <div class="content">
                        <p>Testemonials</p>
                        <h2>"Ions Tech's IT consultancy services and cloud computing expertise were game-changers."</h2>
                        <p class="reds">RUTH IJEOMA <br> CEO IONS WORLD</p>
                    </div>
                </div>
                <div class="slide slides2">
                    <div class="content">
                        <p>Testemonials</p>
                        <h2>"Ontraport, implemented by Ions Tech, optimized our marketing campaigns for success."</h2>
                        <p class="reds">Clara Rodriguez <br> Executive Director of Aurello Inc.</p>
                    </div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
    </div>
    <div class="fourtsection">
        <div class="read">
            <h2>Ready to find out more?</h2>
            <div class="text">
                <div class="line"></div>
                <p>
                    We're here to provide you with all the information you need. Whether you have questions 
                    about our services, want to discuss specific training programs, or need guidance on IT <br>
                    consultancy or cloud computing, we've got you covered. Just let us know what you're 
                    interested in, and we'll be more than happy to assist you further. 
                    Your digital success starts here!
                </p>
            </div>
        </div>
        <div class="button">
            <button><div class="plus">+</div><div class="red">Find out more</div></button>
        </div>
    </div>
    <div class="chat">
        <?php include_once("constant/chat.php")?>
    </div>
    <footer>
        <?php
            include_once("constant/footer.php");
        ?>
    </footer>
    <script src="script.js"></script>
    <script src="constant/script.js"></script>
</body>
</html>