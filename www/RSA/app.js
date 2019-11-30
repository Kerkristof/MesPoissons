var key_public = document.getElementById("KP");
var key_private = document.getElementById("KPR");
var button_gen = document.getElementById("Gen");
var input_enc = document.getElementById("IEnc");
var input_dec = document.getElementById("IDec");
var button_enc = document.getElementById("BEnc");
var button_dec = document.getElementById("BDec");



function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

function r(){
  var i = getRandomInt(100);
  if (1-(i%2)) {
    i++;
  }
  return i;
}

function premier(n) {
  for (var i = 2; i < n/2; i++) {
    if (1-(n%i)) {
      return false;
    }
  }
  return true;
}

function g_nb_premier(){
  var i = r();

  while (!premier(i)) {
    i+=2;
  }
  return i;
}

function gen() {
  key_public.value = g_nb_premier();
  key_private.value = g_nb_premier();
}

button_gen.onclick=gen;
