function acceptCookies() {
  // Set a cookie with a name "acceptedCookies" and value "true" that expires in 30 days
  document.cookie = "acceptedCookies=true; expires=" + new Date(Date.now() + 30 * 24 * 60 * 60 * 1000).toUTCString();
  
  // Hide the cookies banner
  document.getElementById("cookies-banner").style.display = "none";
}

// Check if the "acceptedCookies" cookie exists
if (document.cookie.indexOf("acceptedCookies=true") === -1) {
  // If the cookie doesn't exist, show the cookies banner
  document.getElementById("cookies-banner").style.display = "block";
}
