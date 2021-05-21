//Register
const fullname = document.getElementById("name");
const surname = document.getElementById("surname");
const username = document.getElementById("usernameRegister");
const password = document.getElementById("passwordRegister");
const password2 = document.getElementById("passwordRegister2");

const formRegister = document.getElementById("form-register");

formRegister.addEventListener("submit", (e) => {
  let control = true;

  const nameValue = fullname.value.trim();
  const surnameValue = surname.value.trim();
  const usernameValue = username.value.trim();
  const passwordValue = password.value;
  const password2Value = password2.value;

  if (nameValue < 1 || nameValue > 30) {
    setErrorFor(fullname, "Please limit name to 1-30 characters");
    control = false;
  } else {
    setSuccessFor(fullname);
  }

  if (surnameValue < 1 || surnameValue > 30) {
    setErrorFor(surname, "Please limit surname to 1-30 characters");
    control = false;
  } else {
    setSuccessFor(surname);
  }

  if (usernameValue === "") {
    setErrorFor(username, "Username cannot be blank");
    control = false;
  } else {
    setSuccessFor(username);
  }

  if (passwordValue === "") {
    setErrorFor(password, "Password cannot be blank");
    control = false;
  } else {
    setSuccessFor(password);
  }

  if (password2Value === "") {
    setErrorFor(password2, "Password2 cannot be blank");
    control = false;
  } else if (passwordValue !== password2Value) {
    setErrorFor(password2, "Passwords do not match");
    setErrorFor(password, "Passwords do not match");
    control = false;
  } else {
    setSuccessFor(password2);
  }
  if (!control) {
    e.preventDefault();
  }
});

const setErrorFor = (input, message) => {
  const formControl = input.parentElement; //form-control div
  const small = formControl.querySelector("small");

  small.innerText = message;
  formControl.className = "form-control error";
};

const setSuccessFor = (input) => {
  const formControl = input.parentElement;
  formControl.className = "form-control success";
};

img.addEventListener("change", () => {
  const file = document.querySelector(".img-file");
  let path = img.value;

  path = path.replace(/^.*\\/, "");
  file.textContent = path;
});
