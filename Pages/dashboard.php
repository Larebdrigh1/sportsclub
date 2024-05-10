<?php
session_start(); // Start or resume a session

// Check if user is not logged in, redirect to sign-in page
if (!isset($_SESSION['userID'])) {
    header("Location: sign-in.php");
    exit(); // Ensure that script execution stops after redirection
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../Styles/dashboard.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
    />
  </head>
  <body>
    <div class="container">
      <!-- Sidebar -->
      <aside class="sidebar">
        <div class="sidebar-section">
          <h2>Teams</h2>
          <button id="homePageBtn">Home Page</button>
          <button id="currentTeamBtn">View Team Details</button>
        </div>
        <div class="sidebar-section">
          <h2>Messages</h2>
          <button id="teamChatBtn">Team 1 Chat</button>
          <button id="messageTeamLeaderBtn">Message Team Leader</button>
        </div>
        <div class="sidebar-section">
          <h2>Events</h2>
          <button id="eventBtn">View All Events</button>
          <button id="createEventBtn">Create Event</button>
        </div>
      </aside>

      <!-- Main Content -->
      <main class="main-content">
        <!-- Navigation Bar -->
        <nav class="navbar">
          <div class="navbar-left">
            <h2 class="nav-title">Team 101</h2>
          </div>
          <div class="navbar-right">
            <button class="white-btn" id="joinAnotherTeamBtn">Join another team</button>
            <button class="white-btn" id="createNewTeamBtn">Create new team</button>
          </div>
        </nav>

        <!-- Right Side Content -->
        <!--HOME PAGE BUTTON-->
        <div class="right-side">
          <!-- Container for home page content -->
          <div id="home-page-container" class="page-container">
            <!-- Content of the home page goes here -->
            <h2>Hey there!</h2>
            <p class="home-welcome">
              Welcome to the official website of our badminton team! We're more
              than just a team; we're a community of passionate athletes
              dedicated to the thrilling sport of badminton. Whether you're here
              to improve your skills, meet new friends, or compete at the
              highest level, you've come to the right place.
            </p>
            <img
              class="badminton-image"
              src="https://media.istockphoto.com/id/466766434/fi/vektori/monikulmainen-ammattimainen-sulkapalloilija.jpg?s=612x612&w=0&k=20&c=MHZ8HIqsoT7oDwOecN95TXNwAXyPiDJRbdPMqbFNi2U="
              alt="Badminton Player"
              class="badminton-image"
            />
            <div class="benefits-section">
              <h3>Your Access rights Includes</h3>
              <ul>
                <li>
                  Professional Coaching: Our experienced coaches are committed
                  to helping you reach your full potential on the court.
                </li>
                <li>
                  State-of-the-Art Facilities: Train in a top-notch facility
                  equipped with the latest amenities and equipment.
                </li>
                <li>
                  Team Camaraderie: Join a supportive and inclusive community
                  where you'll build lasting friendships with fellow players.
                </li>
                <li>
                  Competitive Opportunities: Take part in tournaments and
                  matches to test your skills against other players and teams.
                </li>
                <li>
                  Fitness and Fun: Stay active, healthy, and have fun while
                  playing one of the most exciting sports out there.
                </li>
              </ul>
            </div>
            <div>
              <h3>Take you passion to a whole new level</h3>
              <p>
                Whether you're a beginner or a seasoned player, there's a place
                for you on our team.
              </p>
            </div>
          </div>

          <!-- TEAM CHAT -->
          <div id="chat-container" class="right-side" style="display: none; padding: 30px;">
            <!-- Chat between Hudeifa and Farnoosh -->
            <div class="page-container">
              <div class="chat-box">
                <div class="message received">
                  <span class="sender">Farnoosh</span>It will be nice to see the whole team.
                </div>
                <div class="message sent">
                  <span class="sender">Hudeifa</span>Yeah, sure.
                </div>
                <div class="message received">
                  <span class="sender">Farnoosh</span>Are you done with the practices?.
                </div>
                <div class="message sent">
                  <span class="sender">Hudeifa</span>Not much but a little bit yesterday.
                </div>
                <div class="message received">
                  <span class="sender">Farnoosh</span>We have a match after two days.
                </div>
                <div class="message sent">
                  <span class="sender">Hudeifa</span>Yeah, sure We'll win.
                </div>
              </div>
              <!-- Write your message textfield -->
              <div class="message-input">
                <input type="text" placeholder="Write your message..." />
                <button></button>
              </div>
            </div>
          </div>

          <!-- TEAM LEADER MESSAGING -->
          <div id="chat-leader-container" class="right-side" style="display: none; padding: 30px;">
            <!-- Chat between Hudeifa and Farnoosh -->
            <div class="page-container">
              <div class="chat-box">
                <div class="message received">
                  <span class="sender">Precious</span>Hello, sorry i can't make it to the match today.
                </div>
                <div class="message sent">
                  <span class="sender">Malaika</span>Why? Hope you are okay?.
                </div>
                <div class="message received">
                  <span class="sender">Precious</span>Yes I am. Just a little down and i dont feel too well.
                </div>
                <div class="message sent">
                  <span class="sender">Malaika</span>Oh okay, get well soon.
                </div>
                <div class="message received">
                  <span class="sender">Precious</span>We have a match next month right?.
                </div>
                <div class="message sent">
                  <span class="sender">Malaika</span>Yeah.
                </div>
              </div>
              <!-- Write your message textfield -->
              <div class="message-input">
                <input type="text" placeholder="Write your message..." />
                <button></button>
              </div>
            </div>
          </div>
          <!--CURRENT TEAM BUTTON-->
          <div id="team-details-container" class="page-container" style="display: none;">
            <h2>Team Details</h2>
            <div class="team-details">
              <p><strong>Location:</strong> <span id="location"></span></p>
              <p><strong>Sport:</strong> <span id="sportType"></span></p>
              <p><strong>Members:</strong> <span id="memberCount"></span></p>
            </div>
            <h2>Team Members</h2>
            <div id="memberList" class="member-list">
              <!-- Member names will be dynamically added here -->
            </div>
            <h2>Contact Info:</h2>
            <div class="contact-info">
              <p><strong>Team Leader:</strong> <span id="teamLeaderName"></span></p>
              <p><strong>Email:</strong> <span id="teamLeaderEmail"></span></p>
              <p><strong>Phone Number:</strong> <span id="teamLeaderPhone"></span></p>
            </div>
          </div>

        </div>
         <!-- Container for messaging pages -->

        <!-- All Events Content -->
      <div id="events-content" class="right-side" style="display: none;padding: 30px;">
        <!-- Events content goes here -->
        <div class="Events-text">
          <h2> <span class="Heading">Upcoming Events </span> </h2>
        </div>
        <style>
          .sports {
            text-align: center;
            color: #B60303;
          }
          .vs {
            color: White;
          }
        </style>
        <div class="remaining">
          <p>
            <br>
            X-Team <span class="vs">VS</span> Team B
        </div>
        <br>
        <div class="sub">
          <span class="sports">Badminton</span> <span class="Dates">Date: 16th.May.2024</span> <span class="Venue">Venue: Joensuu Areena</span> <span class="Time"> Time: 16:00</span>
        </div>
        <br>
        <br>
        <div class="remaining">
          UEF <span class="vs">VS</span> K-FC
        </div>
        <br>
        <div class="sub">
          <span class="sports">Football</span> <span class="Dates">Date: 20th.May.2024</span> <span class="Venue">Venue: Joensuu Areena</span> <span class="Time"> Time: 14:00</span>
        </div>
        <br>
        <br>
        <div class="remaining">
          Sky-G <span class="vs">VS</span> ABC
        </div>
        <br>
        <div class="sub">
          <span class="sports">Tennis</span> <span class="Dates">Date: 29th.May.2024</span> <span class="Venue">Venue: Joensuu Areena</span> <span class="Time"> Time: 14:00</span>
        </div>
        <br>
        <br>
        </p>

        <div class="Events-text">
          <h2> <span class="Heading">Past Events</span> </h2>
        </div>
        <br>
        <div class="remaining">
          <p>
            Manchester  <span class="m-score" style="color: #FAFAFA">1</span>  <span class="l-score" style="color: #FAFAFA">3</span> Liverpool
        </div>

        <br>
        <div class="sub">
          <span class="sports">Football</span> <span class="Dates">Date: 4th.May.2024</span> <span class="Venue">Venue: Joensuu Areena</span> <span class="Time"> Time: 14:00</span>
        </div>
      </div>

      <!-- CREATE EVENTS  -->
      <div id="create-event-content" class="right-side" style="display: none; padding: 30px;">
      <h2>Sports Type<span  style="color: #9F0303; font-size: medium;">*</span></h2>
      <div class="input-group">
        <input type="text" placeholder="Enter Sport Type">
      </div>
  
      <div class="header-container">
        <h2 class="header-item">First Team's Name<span style="color: #9F0303; font-size: medium;">*</span></h2>
        <h2 class="header-item">Second Team's Name<span style="color: #9F0303; font-size: medium;">*</span></h2>
      </div>
      <div class="input-group">
        <input type="text" placeholder="Enter First team's name">
        <input type="text" placeholder="Enter second team's name">
      </div>
  
      <h2>Event Location<span style="color: #9F0303; font-size: medium;">*</span></h2>
      <div class="input-group">
        <input type="text" placeholder="Enter venue for the event">
      </div>
  
      <h2>Event Duration<span style="color: #9F0303; font-size: medium;">*</span></h2>
      <div class="input-group">
        <input type="text" placeholder="Enter duration for the event">
      </div>
  
      <div class="checkbox-group">
        <input type="checkbox" id="remember">
        <label for="team-leader">I am a team leader</label>
        <br>
  
        <button class="cancel-button">Cancel</button>
        <button class="create-button">Create Event</button>
        </div>

      </main>
    </div>

    <script src="../Script/dashboard.js"></script>
  </body>
</html>
