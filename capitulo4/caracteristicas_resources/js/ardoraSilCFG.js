//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=0;
var successes=0; successesMax=6; attempts=0; attemptsMax=1;
var score=0; scoreMax=6; scoreInc=1; scoreDec=1
var typeGame=0;
var tiTime=false;
var tiTimeType=0;
var tiButtonTime=true;
var textButtonTime="Comenzar";
var tiSuccesses=false;
var tiAttempts=false;
var tiScore=false;
var startTime;
var colorBack="#FFFDFD"; colorButton="#91962F"; colorText="#000000"; colorSele="#FF8000";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=5; messageOk="Felicidades, has completado todo con exito"; messageTime=""; messageError="Ohh! fallastes, pero no te preocupes puedes volverlo a intentar"; messageErrorG="Ohh! fallastes, pero no te preocupes puedes volverlo a intentar"; messageAttempts=""; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var wGame=["Un software educativo son llamados - educativas, programas educativos o informática educativa.","Un software educativo es una - pedagógica  elaborada específicamente con esta finalidad","Se necesita un dispositivo - para acceder como computadora, smartphone, etc","Una de las características de un software educativo es que deber ser -","Un Software tiene como función la de - el trabajo de los estudiantes","El software educativo sirve para reforzar los temas vistos en clase y facilitan el -"];
var wIma=["","","","","",""];
var audio=["","","","","",""];
var wAlt=["","","","","",""];
var w0=["cGxhdGFmb3JtYXM=","aGVycmFtaWVudGE=","ZGlnaXRhbA==","aW50ZXJhY3Rpdm8=","aW5kaXZpZHVhbGl6YXI=","YXByZW5kaXphamU="];
var w1=["bGlicm9z","dXRpbGlkYWQ=","Zmlqbw==","bW9ub3RvbW8=","YWdydXBhcg==","bWF0ZXJpYQ=="];
var w2=["dGV4dG9z","Y29tcHV0YWRvcg==","dGVjbGFkbw==","Y29tcGxlam8=","Y29tcGxlamFy","bm90YQ=="];
var w3=["Zm90b2dyYWZpYXM=","bGxhdmVybw==","YW5hbG9nbw==","ZGlmaWNpbCB1c28=","ZGlmaWN1bHRhcg==","Y3Vyc28="];
var c=[11,11,7,11,14,11];
var wW=["Un software educativo son llamados plataformas educativas, programas educativos o informática educativa","Un software educativo es una herramienta pedagógica  elaborada específicamente con esta finalidad","Se necesita un dispositivo digital para acceder como computadora, smartphone, etc","una de las características de un software educativo es que deber ser interactivo","Un Software tiene como función la de individualizar el trabajo de los estudiantes","El software educativo sirve para reforzar los temas vistos en clase y facilitan el aprendizaje"];
var dirMedia="caracteristicas_resources/media/";
var wordsGame="Y2FyYWN0ZXJpc3RpY2Fz"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var ram_G=["-1","-1","-1","-1","-1","-1"]; var indexGame=0; var tiAudio=false;
