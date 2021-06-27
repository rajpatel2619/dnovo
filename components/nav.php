
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#aboutnav">Mission</a></li>
  <li><a href="#teamnav">Team</a></li>
  <!-- <li class="divider"></li>
  <li><a href="#!">three</a></li> -->
</ul>
<!-- Dropdown Structure -->
<ul id="dropdown2" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>

<nav style="position: fixed;top:0;z-index:2;">
    <div class="nav-wrapper nav-box" >
        <div class="container">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons" style="color:teal;">menu</i></a>
            <!-- <div class="brand-logo">
                
                <img class="responsive-img" width="50" src="./images/logo.jpg" >
            </div> -->
            <a href="#" class="brand-logo brand" style="color: teal;">
            <div style="display: flex;">
            <img src="images/logo.png" width="150" height="50" alt="">
            <p class="hide-on-med-and-down" style="margin: 0;">&nbsp;&nbsp; D'novo <span class="">Solutions</span></p>
            </div>
            <!-- D’novo <span class="hide-on-med-and-down">Solutions</span> -->
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down ">
            <li><a href="/">Home</a></li>
            <li><a href="/#servicesbox">Services</a></li>
            <li><a href="/career.php">Careers</a></li>
            <li><a href="/#teambox">Team</a></li>
            <!-- Dropdown Trigger -->
            <!-- <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">About<i class="material-icons right">arrow_drop_down</i></a></li> -->
            <li><a href="/contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view">
            <div class="background" style="background-color: teal;">
                <!-- <img src="images/office.jpg"> -->
            </div>
            <a href="#user"><img class="responsive-img" src="images/logo.png"></a>
            <a href="#name"><span class="white-text name" style="font-size: 1.4rem;">D’novo Solutions</span></a>
            <a href="#email"><span class="white-text email">The Grip of Trust…</span></a>
        </div>
    </li>
    <li><a href="/"><i class="material-icons">bookmark</i>Home</a></li>
    <li><a href="/#servicesbox"><i class="material-icons">accessibility</i>Services</a></li>
    <li><a href="/career.php"><i class="material-icons">bookmark</i>Careers</a></li>
    <li><a href="/#teambox"><i class="material-icons">accessibility</i>Team</a></li>
    <li><a href="/contact.php"><i class="material-icons">bookmark</i>Contact</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a class="subheader" href="mailto:support@dnovo.org.in"><i class="material-icons">contact_mail</i>support@dnovo.org.in</a></li>
    <!-- <li><a class="dropdown-trigger" href="#!!" data-target="dropdown2">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li> -->
</ul>