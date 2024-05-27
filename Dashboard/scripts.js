document.addEventListener("DOMContentLoaded", function () {
	const userProfile = document.getElementById("user-profile");
	const dropdownMenu = document.getElementById("dropdown-menu");
	const logout = document.getElementById("logout");
  
	// Menangani klik pada elemen profil pengguna
	userProfile.addEventListener("click", function (event) {
	  event.stopPropagation(); // Prevent click event from bubbling up
	  dropdownMenu.classList.toggle("active");
	});
  
	// Menangani klik pada elemen logout
	logout.addEventListener("click", function (event) {
	  event.preventDefault(); // Prevent default anchor behavior
	  window.location.href = "../Login/login.php"; // Ganti 'login.html' dengan halaman login Anda
	});
  
	// Close the dropdown if clicked outside
	document.addEventListener("click", function (event) {
	  if (!userProfile.contains(event.target)) {
		dropdownMenu.classList.remove("active");
	  }
	});
  });