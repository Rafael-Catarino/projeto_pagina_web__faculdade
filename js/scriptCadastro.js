const nome = document.querySelector("#name");
const email = document.querySelector("#email_register");
const senha = document.querySelector("#password_register");
const senhaRepita = document.querySelector("#password_register_repite");
const emailRegex = /\S+@\S+\.\S+/;

nome.addEventListener("input", () => {
  if (nome.value.length < 3) {
    nome.style.border = "2px solid #8d0c1d";
    document.querySelector(".msg_nome").style.display = "block";
  } else {
    nome.style.border = "";
    document.querySelector(".msg_nome").style.display = "none";
  }
});

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

senhaRepita.addEventListener("input", () => {
  if (senhaRepita.value.length < 8) {
    senhaRepita.style.border = "2px solid #8d0c1d";
    document.querySelector(".msg_senha_repita").style.display = "block";
  } else {
    senhaRepita.style.border = "";
    document.querySelector(".msg_senha_repita").style.display = "none";
  }
});
