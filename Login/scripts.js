document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (username === "admin" && password === "admin123") {
      alert("Login successful");
      // Sesuaikan path dengan struktur direktori yang telah disebutkan
      window.location.href = "../Dashboard/Dashboard.php";
    } else {
      alert("Username atau password salah. Silakan coba lagi.");
    }
  });