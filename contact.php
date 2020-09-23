<html>
    <head>
        <title>Contact Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>  
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>

    <body>
        <div class="topnav" id="myTopnav">
            <a class="active" href="index.php">Home <i class="fa fa-fw fa-home"></i></a>
            <a href="about.html">About <i class="fa fa-fw fa-info"></i></a>
            <a href="record.php">Records <i class="fa fa-fw fa-clipboard"></i></a>
            <a href="loancalculator.html">Loan Calculator <i class="fa fa-fw fa-calculator"></i></a>
            <a href="contact.php">Contact <i class="fa fa-fw fa-envelope"></i></a>
            <a href="typetest.php">Typing Test <i class="fa fa-fw fa-laptop"></i></a>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>

        <div class="form-container">
            <form name="frmContact" id=""frmContact""  method="POST"
            action="connection.php" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">First name</label> <span
                    id="firstName-info" class="info"></span><br/> <input
                    type="text" class="input-field" name="firstName"
                    id="firstName" />
            </div>
            <div class="input-row">
                <label style="padding-top: 20px;">Last name</label> <span
                     id="lastName-info" class="info"></span><br /> <input
                     type="text" class="input-field" name="lastName"
                     id="lastName" />
            </div>
            <div class="input-row">
                <label>Your Email Address</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Type your message here</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                   <?php include 'statusMessage.php';?>
                </div>
            </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
        <script type="text/javascript"> 
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var firstName = $("#firstName").val();
            var lastName = $("#lastName").val();
            var userEmail = $("#userEmail").val();
            var content = $("#content").val();

            if (firstName == "") {
            $("#firstName-info").html("Required.");
            $("#firstName").css('border', '#e66262 1px solid');
            valid = false;
            }
            if (lastName == "") {
            $("#lastName-info").html("Required.");
            $("#lastName").css('border', '#e66262 1px solid');
            valid = false;
            }
            if (userEmail == "") {
            $("#userEmail-info").html("Required.");
            $("#userEmail").css('border', '#e66262 1px solid');
            valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)){
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
            $("#userMessage-info").html("Required.");
            $("#content").css('border', '#e66262 1px solid');
            valid = false;
        }
        return valid;
        }
    
        </script>
    </body>
</html>