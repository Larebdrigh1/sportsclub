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
  const createEventContent = document.getElementById("create-event-content");
  const chatContainer = document.getElementById("chat-container");
  const chatLeaderContainer = document.getElementById("chat-leader-container");
  const locationElement = document.getElementById("location");
  const sportTypeElement = document.getElementById("sportType");
  const memberCountElement = document.getElementById("memberCount");
  const teamLeaderNameElement = document.getElementById("teamLeaderName");
  const teamLeaderEmailElement = document.getElementById("teamLeaderEmail");
  const teamLeaderPhoneElement = document.getElementById("teamLeaderPhone");
  const memberListElement = document.getElementById("memberList");

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

  // Function to hide all main content containers
  function hideAllMainContentContainers() {
    homePageContainer.style.display = "none";
    teamDetailsContainer.style.display = "none";
    eventsContent.style.display = "none";
    createEventContent.style.display = "none";
    chatContainer.style.display = "none";
    chatLeaderContainer.style.display = "none";
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

  // Add event listeners to each button
  homePageBtn.addEventListener("click", function () {
    toggleNavbar();
    updateTitle("Home Page");
    hideAllMainContentContainers();
    homePageContainer.style.display = "block";
  });

  currentTeamBtn.addEventListener("click", function () {
    toggleNavbar();
    updateTitle("Current Team Details");
    hideAllMainContentContainers();
    displayTeamDetails();
  });

  teamChatBtn.addEventListener("click", function () {
    toggleNavbar();
    updateTitle("General Team Messaging");
    hideAllMainContentContainers();
    chatContainer.style.display = "block";
  });

  messageTeamLeaderBtn.addEventListener("click", function () {
    toggleNavbar();
    updateTitle("Message Team Leader");
    hideAllMainContentContainers();
    chatLeaderContainer.style.display = "block";
  });

  eventBtn.addEventListener("click", function () {
    toggleNavbar();
    updateTitle("All Events");
    hideAllMainContentContainers();
    eventsContent.style.display = "block";
  });

  createEventBtn.addEventListener("click", function () {
    toggleNavbar();
    updateTitle("Create Event");
    hideAllMainContentContainers();
    createEventContent.style.display = "block";
  });
});
