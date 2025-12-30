document.getElementById("loginForm").addEventListener("submit", function (e) {
  let valid = true;

  const username = document.getElementById("username");
  const password = document.getElementById("password");
  const userError = document.getElementById("userError");
  const passError = document.getElementById("passError");

  userError.textContent = "";
  passError.textContent = "";

  if (username.value.trim() === "") {
    userError.textContent = "Please enter your username.";
    valid = false;
  }

  if (password.value.trim() === "") {
    passError.textContent = "Please enter your password.";
    valid = false;
  }

  if (!valid) e.preventDefault();
});
