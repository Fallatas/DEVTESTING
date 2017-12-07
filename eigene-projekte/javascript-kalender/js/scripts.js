
/*Überschrift*/
/*Hier werden die Monate umgewandelt von einem Integer zum einem String.*/

var datum = new Date();
var monat = datum.getMonth() + 1;

if (monat == 1){
   monat = "Januar 2017";
}else if(monat == 2){
   monat = "Februar 2017";
   $("#fuenftewoche").hide();
}else if(monat == 3){
   monat = "Marz 2017";
}else if(monat == 4){
   monat = "April 2017";
   $("#tag31").hide();
}else if(monat == 5){
   monat = "Mai 2017";
}else if(monat == 6){
   monat = "Juni 2017";
   $("#tag31").hide();
}else if(monat == 7){
   monat = "Juli 2017";
}else if(monat == 8){
 monat = "August 2017";
}else if(monat == 9){
   monat = "September 2017";
   $("#tag31").hide();
}else if(monat == 10){
   monat = "Oktober 2017";
}else if(monat = 11){
   monat = "November 2017";
   $("#tag31").hide();
}else if(moant == 12){
   monat = "Dezember 2017";
}

/*Gibt den Monat farblich an.*/
$("#monat").hide().fadeIn(3000).addClass("monatsfarbe");

/*Monat wird ausgegeben*/
var monatsausgabe = document.getElementById("monat").innerHTML = monat;

/*Hier werden die Tage bearbeitet.*/

var tage = new Date();
var aktueller_tag = tage.getDate();

if (aktueller_tag == 1){
   aktueller_tag = "01";
   $("#tag1").hide().fadeIn(3000).addClass("color");
   var tagesausgabe1 = document.getElementById("tag1").innerHTML = aktueller_tag;
}else if(aktueller_tag == 2){
   aktueller_tag = "02";
   $("#tag2").hide().fadeIn(3000).addClass("color");
   var tagesausgabe2 = document.getElementById("tag2").innerHTML = aktueller_tag;
}else if(aktueller_tag == 3){
   aktueller_tag = "03";
   $("#tag3").hide().fadeIn(3000).addClass("color");
   var tagesausgabe3 = document.getElementById("tag3").innerHTML = aktueller_tag;
}else if(aktueller_tag == 4){
   aktueller_tag = "04";
   $("#tag4").hide().fadeIn(3000).addClass("color");
   var tagesausgabe4 = document.getElementById("tag4").innerHTML = aktueller_tag;
}else if(aktueller_tag == 5){
   aktueller_tag = "05";
   $("#tag5").hide().fadeIn(3000).addClass("color");
   var tagesausgabe5 = document.getElementById("tag5").innerHTML = aktueller_tag;
}else if (aktueller_tag == 6){
   aktueller_tag = "06";
   $("#tag6").hide().fadeIn(3000).addClass("color");
   var tagesausgabe6 = document.getElementById("tag6").innerHTML = aktueller_tag;
}else if (aktueller_tag == 7){
   aktueller_tag = "07";
   $("#tag7").hide().fadeIn(3000).addClass("color");
   var tagesausgabe7 = document.getElementById("tag3").innerHTML = aktueller_tag;
}else if(aktueller_tag == 8){
   aktueller_tag = "08";
   $("#tag8").hide().fadeIn(3000).addClass("color");
   var tagesausgabe8 = document.getElementById("tag8").innerHTML = aktueller_tag;
}else if(aktueller_tag == 9){
   aktueller_tag = "09";
   $("#tag9").hide().fadeIn(3000).addClass("color");
   var tagesausgabe9 = document.getElementById("tag9").innerHTML = aktueller_tag;
}else if(aktueller_tag == 10){
   aktueller_tag = "10";
   $("#tag10").hide().fadeIn(3000).addClass("color");
   var tagesausgabe10 = document.getElementById("tag10").innerHTML = aktueller_tag;
}else if(aktueller_tag == 11){
   aktueller_tag = "11";
   $("#tag11").hide().fadeIn(3000).addClass("color");
   var tagesausgabe11 = document.getElementById("tag11").innerHTML = aktueller_tag;
}else if (aktueller_tag == 12){
   aktueller_tag = "12";
   $("#tag12").hide().fadeIn(3000).addClass("color");
   var tagesausgabe12 = document.getElementById("tag12").innerHTML = aktueller_tag;
}else if(aktueller_tag == 13){
   aktueller_tag = "13";
   $("#tag13").hide().fadeIn(3000).addClass("color");
   var tagesausgabe13 = document.getElementById("tag13").innerHTML = aktueller_tag;
}else if(aktueller_tag == 14){
   aktueller_tag = "14";
   $("#tag14").hide().fadeIn(3000).addClass("color");
   var tagesausgabe14 = document.getElementById("tag14").innerHTML = aktueller_tag;
}else if(aktueller_tag == 15){
   aktueller_tag = "15";
   $("#tag15").hide().fadeIn(3000).addClass("color");
   var tagesausgabe15 = document.getElementById("tag15").innerHTML = aktueller_tag;
}else if (aktueller_tag == 16){
   aktueller_tag = "16";
   $("#tag16").hide().fadeIn(3000).addClass("color");
   var tagesausgabe16 = document.getElementById("tag16").innerHTML = aktueller_tag;
}else if(aktueller_tag == 17){
   aktueller_tag = "17";
   $("#tag17").hide().fadeIn(3000).addClass("color");
   var tagesausgabe17 = document.getElementById("tag17").innerHTML = aktueller_tag;
}else if(aktueller_tag == 18){
   aktueller_tag = "18";
   $("#tag18").hide().fadeIn(3000).addClass("color");
   var tagesausgabe18 = document.getElementById("tag18").innerHTML = aktueller_tag;
}else if(aktueller_tag == 19){
   aktueller_tag = "19";
   $("#tag19").hide().fadeIn(3000).addClass("color");
   var tagesausgabe19 = document.getElementById("tag19").innerHTML = aktueller_tag;
}else if(aktueller_tag == 20){
   aktueller_tag = "20";
   $("#tag20").hide().fadeIn(3000).addClass("color");
   var tagesausgabe20 = document.getElementById("tag20").innerHTML = aktueller_tag;
}else if(aktueller_tag == 21){
   aktueller_tag = "21";
   $("#tag21").hide().fadeIn(3000).addClass("color");
   var tagesausgabe21 = document.getElementById("tag21").innerHTML = aktueller_tag;
}else if(aktueller_tag == 22){
   aktueller_tag = "22";
   $("#tag22").hide().fadeIn(3000).addClass("color");
   var tagesausgabe22 = document.getElementById("tag22").innerHTML = aktueller_tag;
}else if(aktueller_tag == 23){
   aktueller_tag = "23";
   $("#tag23").hide().fadeIn(3000).addClass("color");
   var tagesausgabe23 = document.getElementById("tag23").innerHTML = aktueller_tag;
}else if(aktueller_tag == 24){
   aktueller_tag = "24";
   $("#tag24").hide().fadeIn(3000).addClass("color");
   var tagesausgabe24 = document.getElementById("tag24").innerHTML = aktueller_tag;
}else if(aktueller_tag == 25){
   aktueller_tag = "25";
   $("#tag25").hide().fadeIn(3000).addClass("color");
   var tagesausgabe25 = document.getElementById("tag25").innerHTML = aktueller_tag;
}else if(aktueller_tag == 26){
   aktueller_tag = "26";
   $("#tag26").hide().fadeIn(3000).addClass("color");
   var tagesausgabe26 = document.getElementById("tag26").innerHTML = aktueller_tag;
}else if(aktueller_tag == 27){
   aktueller_tag = "27";
   $("#tag27").hide().fadeIn(3000).addClass("color");
   var tagesausgabe27 = document.getElementById("tag27").innerHTML = aktueller_tag;
}else if(aktueller_tag == 28){
   aktueller_tag = "28";
   $("#tag28").hide().fadeIn(3000).addClass("color");
   var tagesausgabe28 = document.getElementById("tag28").innerHTML = aktueller_tag;
}else if(aktueller_tag == 29){
   aktueller_tag = "29";
   $("#tag29").hide().fadeIn(3000).addClass("color");
   var tagesausgabe29 = document.getElementById("tag29").innerHTML = aktueller_tag;
}else if(aktueller_tag == 30){
   aktueller_tag = "30";
   $("#tag30").hide().fadeIn(3000).addClass("color");
   var tagesausgabe30 = document.getElementById("tag30").innerHTML = aktueller_tag;
}else if(aktueller_tag == 31){
   aktueller_tag = "31";
   $("#tag31").hide().fadeIn(3000).addClass("color");
   var tagesausgabe31 = document.getElementById("tag31").innerHTML = aktueller_tag;
}



