<?php
include "../header.html";
?>
   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/#about">About</a></li>
	         <li><a href="/#resume">Resume</a></li>
            <li><a href="/#contact">Contact</a></li>
            <li class="current"><a class="smoothscroll" href="#now">Now</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">What I'm up to now</h1>
            <!--<h3>This is what I'm working on <a class="smoothscroll" href="#now">now</a></h3>-->
            <hr />

        </div>
      </div>


   </header> <!-- Header End -->


   <!-- Now Section
   ================================================== -->
   <section id="resume">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="/images/profilepic.jpg" alt="" />

         </div>

         <div class="nine columns main-col">

            <h2>What I've been up to</h2>

            <ul>
                <li>&bull; Living in Traverse City, MI</li>
                <li>&bull; Working at Hagerty Classic Car Insurance as a <del>Test Engineer</del> <ins>Developer</ins></li>
                <li>&bull; Learning C# and practicing Ruby</li>
                <li>&bull; <del>Flying Drones</del> (cold isn't good for battery life, hopefully picking this back up once it's warmer out:)</li>
                <li>&bull; Thinking of cool ideas for <a href="https://tilde.team">tilde.team</a></li>
                <li>&bull; We have a <a href="https://tilde.team/discord/">Discord server</a> now!</li>
                <li>&bull; Probably spending too much time on irc??? <a href="https://tilde.team/irc/">tilde-irc</a></li>
                <li>&bull; Looking for open source projects to contribute to. <a href="mailto:ben@tilde.team">Hit me up</a> if you have any ideas or suggestions.</li>
            </ul>

            <p>Updated April 10th, 2018</p>

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->







<?php include "../footer.php";
