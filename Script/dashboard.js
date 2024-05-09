document.addEventListener("DOMContentLoaded", function () {
  document.getElementById('joinAnotherTeamBtn').addEventListener('click', function() {
    window.location.href = '../Pages/join.php';
  });
  
  document.getElementById("createNewTeamBtn").addEventListener("click", function() {
    window.location.href = '../Pages/create.php';
  });

  // Define variables for elements
  const homePageBtn = document.getElementById("homePageBtn");
  const currentTeamBtn = document.getElementById("currentTeamBtn");
  const teamChatBtn = document.getElementById("teamChatBtn");
  const messageTeamLeaderBtn = document.getElementById("messageTeamLeaderBtn");
  const eventBtn = document.getElementById("eventBtn");
  const createEventBtn = document.getElementById("createEventBtn");
  const navbar = document.querySelector(".navbar");
  const navTitle = document.querySelector(".nav-title");
  const homePageContainer = document.getElementById("home-page-container");
  const teamDetailsContainer = document.getElementById("team-details-container");
  const eventsContent = document.getElementById("events-content");
  const locationElement = document.getElementById("location");
  const sportTypeElement = document.getElementById("sportType");
  const memberCountElement = document.getElementById("memberCount");
  const teamLeaderNameElement = document.getElementById("teamLeaderName");
  const teamLeaderEmailElement = document.getElementById("teamLeaderEmail");
  const teamLeaderPhoneElement = document.getElementById("teamLeaderPhone");
  const memberListElement = document.getElementById("memberList");
  const createEventContent = document.getElementById("create-event-content");

  // Define the team details manually
  const teamDetails = {
    location: "Joensuu Areena",
    sportType: "Badminton",
    memberCount: 9,
    teamLeader: {
      name: "Joe Smith",
      email: "joesmith2@gmail.com",
      phone: "0503245764"
    },
    members: ["Precious", "Malaika", "Hudeifa", "Ayyan", "Lareb", "Usama", "Awais", "Ujjol", "Farnoosh"]
  };

  // Function to toggle navbar visibility
  function toggleNavbar() {
    navbar.classList.toggle("hidden");
  }

  // Function to update title
  function updateTitle(title) {
    navTitle.textContent = title;
  }

  // Function to display team details
  function displayTeamDetails() {
    locationElement.textContent = teamDetails.location;
    sportTypeElement.textContent = teamDetails.sportType;
    memberCountElement.textContent = teamDetails.memberCount;
    teamLeaderNameElement.textContent = teamDetails.teamLeader.name;
    teamLeaderEmailElement.textContent = teamDetails.teamLeader.email;
    teamLeaderPhoneElement.textContent = teamDetails.teamLeader.phone;

    // Clear previous member list
    memberListElement.innerHTML = "";
    // Populate member list
    teamDetails.members.forEach((member, index) => {
      const memberElement = document.createElement("div");
      memberElement.classList.add("member-box");
      memberElement.textContent = "Member " + (index + 1) + ": " + member;
      memberListElement.appendChild(memberElement);
    });

    // Show team details container
    teamDetailsContainer.style.display = "block";
  }

  // Function to hide team details container
  function hideTeamDetails() {
    teamDetailsContainer.style.display = "none";
  }

  // Function to display events content
  function displayEventsContent() {
    // Display the events content
    eventsContent.style.display = "block";
  }

  // Function to hide events content
  function hideEventsContent() {
    // Hide the events content
    eventsContent.style.display = "none";
  }

  // Function to display create event content
  function displayCreateEventContent() {
    // Display the create event content
    createEventContent.style.display = "block";
  }

  // Function to hide create event content
  function hideCreateEventContent() {
    // Hide the create event content
    createEventContent.style.display = "none";
  }

  // Home Page Button
  homePageBtn.addEventListener("click", function () {
    toggleNavbar();
    updateTitle("Home Page");
    // Show home page container
    homePageContainer.style.display = "block";
    // Hide team details container
    hideTeamDetails();
    // Hide events content
    hideEventsContent();
    // Hide create event content
    hideCreateEventContent();
  });

  // Current Team Button
  currentTeamBtn.addEventListener("click", function () {
    toggleNavbar();
    updateTitle("Current Team Details");
    // Hide home page container
    homePageContainer.style.display = "none";
    // Display team details
    displayTeamDetails();
    // Hide events content
    hideEventsContent();
    // Hide create event content
    hideCreateEventContent();
  });

  // Message Team Leader Button
  teamChatBtn.addEventListener("click", function () {
    toggleNavbar();
    updateTitle("General Team Messaging");
    // Hide both containers
    homePageContainer.style.display = "none";
    hideTeamDetails();
    // Hide events content
    hideEventsContent();
    // Hide create event content
    hideCreateEventContent();
  });

  // New Message Group Button
  messageTeamLeaderBtn.addEventListener("click", function () {
    toggleNavbar();
    updateTitle("Message Team Leader");
    // Hide both containers
    homePageContainer.style.display = "none";
    hideTeamDetails();
    // Hide events content
    hideEventsContent();
    // Hide create event content
    hideCreateEventContent();
  });

  // All Events Button
  eventBtn.addEventListener("click", function () {
    toggleNavbar();
    updateTitle("All Events");
    // Hide both containers
    homePageContainer.style.display = "none";
    hideTeamDetails();
    // Display events content
    displayEventsContent();
    // Hide create event content
    hideCreateEventContent();
  });

  // Create Event Button
  createEventBtn.addEventListener("click", function () {
    toggleNavbar();
    updateTitle("Create Event");
    // Hide both containers
    homePageContainer.style.display = "none";
    hideTeamDetails();
    // Hide events content
    hideEventsContent();
    // Display create event content
    displayCreateEventContent();
  });
});
