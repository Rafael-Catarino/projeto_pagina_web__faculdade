const email = document.querySelector("#email");
const senha = document.querySelector("#password");
const emailRegex = /\S+@\S+\.\S+/;

email.addEventListener("input", () => {
  if (!emailRegex.test(email.value)) {
    email.style.border = "2px solid #8d0c1d";
    document.querySelector(".msg_email").style.display = "block";
  } else {
    email.style.border = "";
    document.querySelector(".msg_email").style.display = "none";
  }
});

senha.addEventListener("input", () => {
  if (senha.value.length < 8) {
    senha.style.border = "2px solid #8d0c1d";
    document.querySelector(".msg_senha").style.display = "block";
  } else {
    senha.style.border = "";
    document.querySelector(".msg_senha").style.display = "none";
  }
});
