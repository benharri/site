<?php
include 'header.php';
?>
    <!-- Header
   ================================================== -->
    <header id="home">

        <nav id="nav-wrap">

            <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

            <ul id="nav" class="nav">
                <li class="current">
                    <a class="smoothscroll" href="#home">Home</a>
                </li>
                <li>
                    <a class="smoothscroll" href="#about">About</a>
                </li>
                <li>
                    <a class="smoothscroll" href="#contact">Contact</a>
                </li>
                <li>
                    <a href="https://tildegit.org/ben/resume/raw/branch/master/resume.pdf">Resume</a>
                </li>
            </ul>
            <!-- end #nav -->

        </nav>
        <!-- end #nav-wrap -->

        <div class="row banner">
            <div class="banner-text">
                <h1 class="responsive-headline">Hello,
                    <br>I'm Benjamin Harris</h1>
                <hr>
                <h3>
                    <a class="smoothscroll" href="#about">I'm a Michigan-based software developer. Scroll down to learn more.</a>
                </h3>
                <hr />
                <?php include 'social.html'; ?>
            </div>
        </div>

        <p class="scrolldown">
            <a class="smoothscroll" href="#about">
                <i class="icon-down-circle"></i>
            </a>
        </p>

    </header>
    <!-- Header End -->


    <!-- About Section
   ================================================== -->
    <section id="about">

        <div class="row">

            <div class="three columns">

                <img class="profile-pic" src="images/profilepic.jpg" alt="" />

            </div>

            <div class="nine columns main-col">

                <h2>About Me</h2>

                <p>
                    I studied computer science at Northern Michigan University. 
                    I like writing code and doing sysadmin work. I love to
                    travel and have lived in Ecuador and Switzerland.
                </p>

                <p>
                    I run a public access unix system: <a href="https://tilde.team">tilde.team</a> and have been working on a multi-tilde collaborative effort to provide cool open-source services at the <a href="https://tildeverse.org">tildeverse</a>. Check out <a href="https://tilde.team/~ben/">my tilde page</a>!
                </p>

                <p>Check out what I'm up to
                    <a href="/now/">now</a>.</p>

                <div class="row">

                    <div class="columns download">
                        <p>
                            <a href="https://tildegit.org/ben/resume/raw/branch/master/resume.pdf" class="button">
                                <i class="fa fa-download"></i>Download/View Resume</a>
                        </p>
                    </div>

                </div>
                <!-- end row -->

            </div>
            <!-- end .main-col -->

        </div>

    </section>
    <!-- About Section End-->


    <!-- Contact Section
   ================================================== -->
    <section id="contact">

        <div class="row section-head">

            <div class="two columns header-col">

                <h1>
                    <span>Get In Touch.</span>
                </h1>

            </div>

            <div class="ten columns">

                <p class="lead">
                    Let me know if you have any cool ideas or want to work 
                    together on something! Feel free to send me a message 
                    on irc (benharri on freenode, ben on <a href="https://tilde.chat">tilde.chat</a>) 
                    or shoot me an email (ben at this domain).
                </p>

            </div>

        </div>



        </div>

    </section>
    <!-- Contact Section End-->


    <?php include 'footer.php';

