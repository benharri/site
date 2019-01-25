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
                    <a class="smoothscroll" href="#resume">Resume</a>
                </li>
                <li>
                    <a class="smoothscroll" href="#contact">Contact</a>
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

                <p>I studied computer science at Northern Michigan University. I'm into full-stack web development. I love to
                    travel and have lived in Ecuador and Switzerland.
                </p>

                <p>
                    I run a public access unix system: <a href="https://tilde.team">tilde.team</a> and have been working on a multi-tilde collaborative effort to provide cool open-source services at the <a href="https://tildeverse.org">tildeverse</a>. Check out <a href="https://tilde.team/~ben/">my tilde page</a>!
                </p>

                <p>Check out what I'm up to
                    <a href="/now">now</a>.</p>

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


    <!-- Resume Section
   ================================================== -->
    <section id="resume">

        <!-- Education
      ----------------------------------------------- -->
        <div class="row education">

            <div class="three columns header-col">
                <h1>
                    <span>Education</span>
                </h1>
            </div>

            <div class="nine columns main-col">

                <div class="row item">

                    <div class="twelve columns">

                        <h3>Northern Michigan University</h3>
                        <p class="info">Bachelor of Arts - Computer Science/Economics double major, Mathematics minor
                            <span>&bull;</span>
                            <em class="date">August 2013 - May 2017</em>
                        </p>

                        <p>
                            Standard Computer Science curriculum with an emphasis on Test-Driven development, agile development, and sturdy, maintainable
                            code.
                        </p>

                    </div>

                </div>
                <!-- item end -->

                <div class="row item">

                    <div class="twelve columns">

                        <h3>Zurich University of Applied Sciences (ZHAW)</h3>
                        <p class="info">Study Abroad Exchange Semester
                            <span>&bull;</span>
                            <em class="date">February - July 2015</em>
                        </p>

                        <p>
                            Continued Computer Science coursework in German.
                        </p>

                    </div>

                </div>
                <!-- item end -->

            </div>
            <!-- main-col end -->

        </div>
        <!-- End Education -->


        <!-- Work
      ----------------------------------------------- -->
        <div class="row work">

            <div class="three columns header-col">
                <h1>
                    <span>Work</span>
                </h1>
            </div>

            <div class="nine columns main-col">

                <div class="row item">

                    <div class="twelve columns">

                        <h3>Hagerty Insurance Agency</h3>
                        <p class="info">Developer
                            <span>&bull;</span>
                            <em class="date">December 2017 - Present</em>
                        </p>

                        <p>
                            Work on the Automation release train to improve business processes across the board.
                        </p>

                    </div>

                </div>
                <!-- item end -->

                <div class="row item">

                    <div class="twelve columns">

                        <h3>Hagerty Insurance Agency</h3>
                        <p class="info">Test Engineer
                            <span>&bull;</span>
                            <em class="date">June - December 2017</em>
                        </p>

                        <p>
                            Work on the Apps Development team to improve processes, verify code changes, and collaborate with business stakeholders to
                            ensure software results and performance.
                        </p>

                    </div>

                </div>
                <!-- item end -->

                <div class="row item">

                    <div class="twelve columns">

                        <h3>Northern Michigan University</h3>
                        <p class="info">Student Programmer, Business Intelligence/Information Systems
                            <span>&bull;</span>
                            <em class="date">May 2014 - May 2017</em>
                        </p>

                        <p>
                            Worked under Enterprise Software Director to build web applications meant for internal student and staff use. Gained skills
                            and experience in self-direction and full-stack web development, including PHP, Oracle SQL, jQuery,
                            and Bootstrap.
                        </p>

                    </div>

                </div>
                <!-- item end -->

                <div class="row item">

                    <div class="twelve columns">

                        <h3>Iron Fish Distillery</h3>
                        <p class="info">App Developer/Webmaster
                            <span>&bull;</span>
                            <em class="date">June 2016 - June 2018</em>
                        </p>

                        <p>
                            Build and maintain several web applications for internal use. Also in charge of maintenance of the Wordpress site.
                        </p>

                    </div>

                </div>
                <!-- item end -->

            </div>
            <!-- main-col end -->

        </div>
        <!-- End Work -->


        <!-- Skills
      ----------------------------------------------- -->
        <div class="row skill">

            <div class="three columns header-col">
                <h1>
                    <span>Skills</span>
                </h1>
            </div>

            <div class="nine columns main-col">

                <p>There are some of my most notable skills:
                </p>

                <div class="bars">

                    <ul class="skills">
                        <li>
                            <span class="bar-expand php"></span>
                            <em>PHP</em>
                        </li>
                        <li>
                            <span class="bar-expand sql"></span>
                            <em>SQL</em>
                        </li>
                        <li>
                            <span class="bar-expand python"></span>
                            <em>python</em>
                        </li>
                        <li>
                            <span class="bar-expand cpp"></span>
                            <em>C++</em>
                        </li>
                        <li>
                            <span class="bar-expand jquery"></span>
                            <em>jQuery</em>
                        </li>
                        <li>
                            <span class="bar-expand unix-admin"></span>
                            <em>Unix Administration</em>
                        </li>
                        <li>
                            <span class="bar-expand git"></span>
                            <em>Git</em>
                        </li>
                        <li>
                            <span class="bar-expand unit-testing"></span>
                            <em>Unit Testing</em>
                        </li>
                        <li>
                            <span class="bar-expand bootstrap"></span>
                            <em>Bootstrap</em>
                        </li>
                    </ul>

                </div>
                <!-- end skill-bars -->

            </div>
            <!-- main-col end -->

        </div>
        <!-- End skills -->

    </section>
    <!-- Resume Section End-->



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
Let me know if you have any cool ideas or want to work together on something! Feel free to send me a message on irc (benharri on freenode, ben on <a href="https://tilde.chat">tilde.chat</a>) or shoot me an email (ben at this domain).
</p>

            </div>

        </div>



        </div>

    </section>
    <!-- Contact Section End-->


    <?php include 'footer.php';
