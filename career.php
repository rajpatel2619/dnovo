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


    <br><br><br>
    <div>
        <img src="./images/career1.jpg" width="100%" class="responsive-img" alt="">
    </div>
    <section class="container">
        <div>
            <h3 class="center-align">Apply for a Job</h3>
            <p class="center-align">Please submit the form below and we will get back to you when we have the position open.</p>
            <div class="row">
                <form class="col s12" action="/action.php" method="POST">
                    <div class="row">
                        <div class="input-field col s12 l6">
                            <input id="name" name="name" type="text" class="validate" required>
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="phone" name="phone" type="number" class="validate" required>
                            <label for="phone">Contact Number</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 l6">
                            <input id="email" name="email" type="email" class="validate" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="location" name="location" type="text" class="validate" required>
                            <label for="location">Location</label>
                        </div>
                    </div>



                    <div class="row">
                        <div class="input-field col s12 l6">
                            <input id="exp" type="text" name="experience" class="validate" required>
                            <label for="exp">Experience</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <select name="jobtype" required>
                                <option value="permanent">Permanent</option>
                                <option value="contract">Contract</option>
                            </select>
                            <label>Job Type</label>
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s12 ">
                            <input id="res" type="text" name="resume" class="validate" required>
                            <label for="res">Resume - Drive Link</label>
                        </div>
                    </div>

                    <div class="row" style="display: flex;justify-content: center;">
                        <button class="btn waves-effect waves-light" type="submit" name="career">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <br> <br>
        <div>
            <h3 class="center-align">Employee Benefits</h3>
            <br><br>
            <div class="row">
                <div class="col s12 l4">
                    <img src="./images/learn.png" alt="">
                    <h6>Learn & Excel</h6>
                    <p>By working with opinion leaders, the liberty to learn by doing and hone skills.</p>
                </div>
                <div class="col s12 l4">
                    <img src="./images/challange.png" alt="">
                    <h6>Challenge yourself</h6>
                    <p>It's just about business as usual, but about doing and doing more with new stuff.</p>
                </div>
                <div class="col s12 l4">
                    <img src="./images/step.png" alt="">
                    <h6>A step ahead</h6>
                    <p>Keep current, work on new technology and ventures that change sports.</p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

    <?php include("./components/footer.php") ?>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./jq.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



</body>

</html>