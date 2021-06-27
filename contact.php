<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <script src="https://kit.fontawesome.com/7071de66ae.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" href="./images/logo.jpg" type="image/icon type">
    <title>D’novo Solutions</title>

</head>

<body id="body">
    <?php include("./components/nav.php") ?>


    <br><br><br><br>
    <section class="container">
        <h4 style="text-align: center;color:teal;">Get in touch with us !</h4>
            <br>
            <div class="row">
                <div class="col s12 l5">
                    <img src="./images/thanks.png" class="responsive-img" alt="">
                    <br>
                    <p style="text-align: center;font-size:1.1em;font-style:italic;">" A gesture of collective Appreciation for our work and contribution to DDUGKY at NIRDPR."</p>
                </div>
                <div class="col s12 l6 offset-l1">
                    
                    <div class="row">
                        <form class="col s12" action="/action.php" method="POST">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="first_name" type="text" name="first_name" class="validate" required>
                                    <label for="first_name">First Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="last_name" type="text" name="last_name" class="validate" required>
                                    <label for="last_name">Last Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="state" type="text" name="state" class="validate" required>
                                    <label for="state">State Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="org" type="text" name="org" class="validate" required>
                                    <label for="org">Organization Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 l6">
                                    <input id="phone" type="number" name="phone" class="validate" required>
                                    <label for="phone">Contact Number</label>
                                </div>
                           
                                <div class="input-field col s12 l6">
                                    <input id="email" type="email" name="email" class="validate" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="subject" type="text" name="subject" class="validate" required>
                                    <label for="subject">Purpose of Contact</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="msg" type="text" name="msg" class="validate" required>
                                    <label for="msg">Message</label>
                                </div>
                            </div>
                            <div class="row" style="display: flex;justify-content: center;">
                                <button class="btn waves-effect waves-light" type="submit"  name="contact">Send
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
    <br>
    <br>

    <?php include("./components/footer.php") ?>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./jq.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



</body>

</html>