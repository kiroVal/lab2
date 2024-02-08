<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pat's website</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
  </head>
  <body>
  <!-- New section for PHP lessons -->
    <section id="php-lessons">
      <p class="section__text__p1">PHP Lessons</p>
      <h1 class="title">Class Discussion Conversation</h1>
      <div class="lesson-container">
        <h2>1. Introduction</h2>
        <p>Content for Introduction lesson goes here...</p>
      </div>
      <div class="lesson-container">
        <h2>2. Variables</h2>
        <p>Content for Variables lesson goes here...</p>
      </div>
      <div class="lesson-container">
        <h2>3. Echo / Print</h2>
        <p>Content for Echo / Print lesson goes here...</p>
      </div>
    </section>
    <nav id="desktop-nav">
      <div class="logo">Welcome</div>
      <div>
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo">Michael</div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="#about" onclick="toggleMenu()">About Me</a></li>
          <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
      </div>
    </nav>
    <section id="profile">
      <div class="section__pic-container">
        <img src="yuji.png" alt="Pats profile picture"/>
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Michael Patrick Escalambre</h1>
        <p class="section__text__p2">Student Programmer</p>
        <div id="socials-container">
          <img
            src="linkedin.png"
            alt="My LinkedIn profile"
            class="icon"
            onclick="window.open('https://www.linkedin.com/in/michael-patrick-escalambre-b8ab91237/', '_blank')"
          />
          <img
            src="facebook.png"
            alt="My Facebook Profile"
            class="icon"
            onclick="window.open('https://www.facebook.com/michaelpatrick.reyes', '_blank')"
          />
          <img
            src="github.png"
            alt="My Github profile"
            class="icon"
            onclick="window.open('https://github.com/kiroVal', '_blank')"
          />
        </div>
      </div>
    </section>
    <section id="about">
      <p class="section__text__p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      <div class="section-container">
        <div class="section__pic-container">
          <img
            src="pat2.png"
            alt="Profile picture"
            class="about-pic"
          />
        </div>
        <div class="about-details-container">
          <div class="about-containers">
            <div class="details-container">
              <h3>Education</h3>
              <p>2nd Year College Student<br />BSCS-Software and Systems</p>
            </div>
          </div>
          <div class="text-container">
            <p>
              Hello, my name is Michael Patrick Escalambre! You can call me Pat in short. I'm a sophomore here at Asia Pacific College, and the course
              The course that I am taking is computer science. 
              <br>I do not know how i ended up here but at least i am enjoying what i am doing. I love listening to
              music and i listen to different kinds of artists, too many to mention but my most favorite one is Brent Faiyaz and his song "Been Away". 
              That's all for now, hope you like my website!
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <p class="section__text__p1">Let's get in touch</p>
      <h1 class="title">Contact Me</h1>
      <div class="contact-info-upper-container">
        <div class="contact-info-container">
          <img
            src="email.png"
            alt="Email icon"
            class="icon contact-icon email-icon"
          />
          <p><a href="mailto:michaelpatrick.esc@gmail.com">Google Mail</a></p>
        </div>
        <div class="contact-info-container">
          <img
            src="linkedin.png"
            alt="LinkedIn icon"
            class="icon contact-icon"
          />
          <p><a href="https://www.linkedin.com/in/michael-patrick-escalambre-b8ab91237/">LinkedIn</a></p>
        </div>
      </div>
    </section>
    <footer>
      <nav>
        <div class="nav-links-container">
          <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; 2023 Michael Escalambre. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
