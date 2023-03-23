function showWelcomeMessage() {
  // Get the student's name from a cookie or localStorage
  const studentName = localStorage.getItem('studentName');
  
  // Create a welcome message
  const welcomeMessage = `Welcome, ${studentName}!`;

  // Display the welcome message in an alert box or a pop-up notification
  alert(welcomeMessage);
}
// Get the login form and button
const loginForm = document.getElementById('login-form');
const loginButton = document.getElementById('login-button');

// Add an event listener to the login button
loginButton.addEventListener('click', function(event) {
  // Prevent the default form submission
  event.preventDefault();
  
  // Get the student's name from the form input
  const studentName = loginForm.elements['student-name'].value;
  
  // Store the student's name in localStorage
  localStorage.setItem('studentName', studentName);
  
  // Show the welcome message
  showWelcomeMessage();
});