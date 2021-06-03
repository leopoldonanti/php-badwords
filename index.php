<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
    background-color: black;
    color: white;
    width: 80%;
    margin: auto;
    }
    p{
      text-justify: inter-word;
      color: red;
    }
    hr{
      color: white;
    }

  </style>
</head>
<body>
  
  <?php
  $testo = "Fuck, fuck fuck, fuck fuck fuck fuck fuck fuuck.
  Fuck, fuck fuck, fuck fuck fuck fuck fuck FUUUCK.
  FUUCK
  FUUCK
  FUUCK FUUCK
  Fuck, Fuck FUCFUCFUCFUCFUFUFUFUCFUCFUCFUCFUFUFU
  FUFU FUCK. FUFU FUCK. fu-fu-fuFUUUC fu-fu-fu-fu-fu FAA fu-fuc-fuc
  FUCK FUCK FUCK
  fuckityfuckityfuck fuck. FUCK!
  fuckityfuckityfuck fuck. FUCK
  fuckityfuckityfuck, fuckityfuckityfuck, fuckityfuckityfuck, FUKYFUKYFUKYFUKY
  fuckityfuckityfuck. FUCK fuckityfuckityfuck FUCK fuckityFUCK! fuckityFUCK!
  FU-FU-FU-FU-FU-FU-FUCK!
  FUCK FUCK FUCK FUCK FUCK FUCK FUCK FUCK FUCK, FUCKFUCKFUCK FOK FUCK FUCK FUCK FUCK FUCK FOOK. FAAK
  fu-fu-fu-fu FUUUUUCK!
  fuck. fuck fuck fuck, fuck fuck fucking fuck fuking fuck
  fuck. fuck fuck fuck, fuck fuck fucking fuck fuking fuck, fucking fuck fucking fuck
  FUUUUUUCK
  FUUUUCK
  FUUUUUUCK
  FUUUUCK
  FUUUUUUCK!(fuckityfuckity)
  FUUUUUUCK!(fuckityfuckity)
  FUUUUUUCK!(fuckityfuckity)
  FUUUUUUCK!(fuckityfuckity)
  LLLADIES AND GENTLENMEN. BILLMAN SPEAKER OF GREEN JELLO...
  FOK FOK FOOK. FOCKITY FOOCK
  FOK FOK FOK, FOCKITY FOCK
  FOK FOK FOK, FOCKITY FOCK
  FOK FOK FOK, FOCKITY-FOFOFOFOOOOOOOOCK
  FOCKFOCKFOCK FOOOOOOOOOOCK
  fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fuuuck(fuck fuck fuck fuck)
  fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fuuuck(fuck fuck fuck fuck)
  fu-fu-fu-fuck(FOCK FOCK FOCK FOCK)
  fu-fu-fu-fuck(FOCK FOCK FOCK FOCK)
  fuc-fuc-fuc-fuc-fuck (FUCK) fuck(FO- FOOOOOOK) FUUUUUUUUCK
  Fuck, fuck fuck, fuck fuck fuck fuck fuck fuuck.
  Fuck, fuck fuck, fuck fuck fuck fuck fuck. FUCK
  FUUUCK
  FUUUUUCK
  FUUCK, FUUUCK.
  FOCK-FUCK FUFUFUFUFUFUFUFUFUFUFUFUCFUCFUCFUCFUFUFUFUFUCK
  FUCKIN FUCK FUCKIN FUCK
  fuck. fu-fuck. fu-fuck. fu-fuck.
  fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fuck(fuck) fuck (fuck) fuck (fu-fu) fuck (fu-fu)
  fa (fa) fa (fa) fa (fa) fa (fa) fuckifuckifuckifuckfucki, fuck.
  fucki fuck fuck fuck fuck fuck fuck fuck fuck fuuuck
  fucki fuck fuck fuck fuck fuck fuck fuck fuck fuuuck
  fucki fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fuuck
  fucki fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fuuck
  (fuuuuuuck fuuck fuuck, fuuuuuck fu-fuuuck)fucki fuck fuck fuck fuck fuck fuck fuck fuck fuuuck.fucki fuck fuck fuck fuck fuck fuck fuck fuck fuuuck
  (fuuuuuck fuck fuck fuuuck fuuuuck)fucki fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fuuck fucki fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fuuck
  (fuuuuck fuuuuck) fuckity fuck fuck, fuckity fuck fuck
  fuckity fuck fuck fuck fuck fuck fuck
  fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fu fuck (fuck)
  fuck (fuck) fuck (fuck) fuck (fuck)
  Fuck, fuck fuck, fuck fuck fuck fuck fuck fuuck.(fu-fu-fu-fuuck)
  fu-fu-fuc-fuc-fuc-fuck.
  SHIIT";

  $parolacce = array(
    "Fuck",
    "fuck",
    "FUCK",
    "FOCK",
    "FOK",
    "fu-fuck",
    "FOOK",
    "FUUUUUUCK",
    "FUUUCK",
    "FOOOOOOOOOOCK",
    "fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fu-fuuck",
    "FAAK",

  );
  
  ?>

<h1> Lyrics: NSFW from the Band Physcostick.</h1>

<p> <?php echo $testo ?> </p>

<hr>

<h1>Valore della lunghezza-stringa:</h1>

<p> <?php echo strlen($testo); ?> </p>

<hr>

<h1>Testo censurato:</h1>

<p> <?php echo str_replace($parolacce, "***", $testo) ?> </p>

</body>
</html>