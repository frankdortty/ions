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
    <header class="choose" >
        <?php 
            include_once("constant/header.php");
        ?>
    </header>
    <main>
        <div class="firstsection chooselap">
            <div class="lapping ">
                <h2>Why Choose IONS TECH?</h2>
            </div>
        </div>
        <div class="secoundsection">
            <div class="choosetext">
                <div class="text">
                    <h2>01.</h2>
                    <p>
                        Expertise: Our team of experienced professionals has in-depth knowledge and 
                        expertise in various areas of IT, including memory management, operating systems, 
                        and cloud computing. We stay up-to-date with the latest industry trends to provide 
                        you with cutting-edge solutions.
                    </p>
                </div>
                <div class="text">
                    <h2>02.</h2>
                    <p>
                        Personalized Approach: We understand that every business is unique,
                        and that's why we take a personalized approach to meet your specific needs. 
                        Whether it's training programs tailored to your skill level or customized IT 
                        consultancy services, we prioritize your success.
                    </p>
                </div>
                <div class="text">
                    <h2>03.</h2>
                    <p>
                        Proven Results: Our track record speaks for itself. 
                        We have helped numerous clients optimize their lead management processes, 
                        streamline email marketing campaigns, and make data-driven decisions using tools like 
                        Ontraport. We are committed to delivering tangible results for your business.
                    </p>
                </div>
                <div class="text">
                    <h2>04.</h2>
                    <p>
                        Comprehensive Solutions: From training programs to IT consultancy 
                        services and cloud computing solutions, we offer a wide range of services to 
                        support your digital transformation journey. We are your one-stop destination 
                        for all your IT needs.
                    </p>
                </div>
                <div class="text">
                    <h2>05.</h2>
                    <p>
                        Customer Satisfaction: Our top priority is your satisfaction. 
                        We strive to provide exceptional customer service and support throughout 
                        your engagement with us. We are here to listen to your needs, address your concerns, 
                        and ensure your success.
                    </p>
                </div>
            </div>
        </div>
        <div class="chat">
        <?php include_once("constant/chat.php")?>
    </div>
    </main>
    <footer>
        <?php
            include_once("constant/footer.php");
        ?>
    </footer>
    <script src="script.js"></script>
    <script src="constant/script.js"></script>
</body>
</html>