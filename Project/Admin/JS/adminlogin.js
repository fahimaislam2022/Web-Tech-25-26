document.getElementById("loginForm").addEventListener("submit", function (e) {
  const username = document.getElementById("username");
  const password = document.getElementById("password");
  let error = false;

  if (username.value.trim() === "") {
    alert("Please enter username!");
    error = true;
  }
  if (password.value.trim() === "") {
    alert("Please enter password!");
    error = true;
  }

  if (error) e.preventDefault();
});
