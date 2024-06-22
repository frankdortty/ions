<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ions-World</title>
    <link rel="stylesheet" href="constant/style.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="icon" href="media/logo1.png">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border-bottom: 1px solid #e3e3e3;
            padding: 28px 15px;
            text-align: left;
        }
        th {
            font-weight: 100;
            text-transform: capitalize;
        }
        td {
            width: auto;
            /* background-color: aqua; */
            height: 100px;
        }
        .file-info,.imagee {
            display: flex;
            align-items: center;
        }
        .file-info img {
            width: 52px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<div class="main tools">
    <header>
        <?php include_once("constant/header.php"); ?>
    </header>
    <div class="firstsection">
        <div class="lapping">
            <h2>Tools <br> & Tips</h2>
            <div class="text">
                <div class="left"><div class="line"></div></div>
                <div class="right">
                    <p>
                        In this section, we'll explore a variety of helpful tools and tips to boost your 
                        productivity, enhance your skills, and achieve success in your endeavors. 
                        From handy software and applications to practical advice and strategies, we've got you 
                        covered. Let's dive in and discover the tools and tips that can take you to the next level!
                    </p>
                </div>
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
        <?php include_once("constant/footer.php"); ?>
    </footer>
</div>
    <script src="script.js"></script>
    <script src="constant/script.js"></script>
</body>
</html>
