//FORM VALIDATIONS
//CLANAK
const formClanak = document.querySelector("#form-clanak");
const title = document.getElementById("title");
const description = document.getElementById("description");
const content = document.getElementById("content");
const img = document.getElementById("imgUpload");
const category = document.getElementById("category");

formClanak.addEventListener("submit", (e) => {
  let control = true;

  const titleValue = title.value.trim();
  const descValue = description.value.trim();
  const contentValue = content.value.trim();
  const imgValue = img.value;
  const categoryValue = category.value;

  if (titleValue.length < 5 || titleValue.length > 70) {
    setErrorFor(title, "Naslov vijesti mora imati od 5 do 40 znakova!");
    control = false;
  } else {
    setSuccessFor(title);
  }

  if (descValue.length < 10 || descValue.length >= 370) {
    setErrorFor(description, "Kratki sadrzaj mora imati od 5 do 120 znakova!");
    control = false;
  } else {
    setSuccessFor(description);
  }
  if (contentValue.length === 0) {
    setErrorFor(content, "Tekst vijesti ne smije biti prazan!");
    control = false;
  } else {
    setSuccessFor(content);
  }
  if (categoryValue === "empty") {
    setErrorFor(category, "Kategorija mora biti odabrana!");
    control = false;
  } else {
    setSuccessFor(category);
  }
  if (imgValue.length === 0) {
    setErrorFor(img, "Slika mora biti odabrana!");
  } else {
    setSuccessFor(img);
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
