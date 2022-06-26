//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=0;
var successes=0; successesMax=4; attempts=0; attemptsMax=1;
var score=0; scoreMax=4; scoreInc=1; scoreDec=1
var typeGame=0;
var tiTime=false;
var tiTimeType=2;
var tiButtonTime=true;
var textButtonTime="Comenzar";
var tiSuccesses=true;
var tiAttempts=false;
var tiScore=true;
var startTime;
var colorBack="#FFFDFD"; colorButton="#91962F"; colorText="#000000"; colorSele="#FF8000";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="Verdana, Geneva, sans-serif";
var fResp="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=5; messageOk="Felicidades, ha completado el quiz sobre OVA"; messageTime=""; messageError="Ohh!, has cometidos algunas equivocaciones, no te preocupes puedes volver a intentarlo."; messageErrorG="Ohh!, has cometidos algunas equivocaciones, no te preocupes puedes volver a intentarlo."; messageAttempts=""; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#00FF40"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var wordsGame="b3ZhX3F1aXo="; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var tags=["Que significan las letras OVA?","Que contiene un OVA?","Seleccione las caractetisticas de un OVA","Que puede contener un OVA"];
var answers1=["MU9iamV0byBWaXJ0dWFsIGRlIEFwcmVuZGl6YWpl","ME9iamV0byBWaXJ0dWFsIGRlbCBBcHJlbmRpeg==","ME9yZGVuIFZpcnR1YWwgcGFyYSBBcHJlbmRlcg=="];
var answers2=["MU9iamV0aXZv","MUNvbnRlbmlkbw==","MUFjdGl2aWRhZGVzIGRlIGFwcmVuZGl6YWpl","MUV2YWx1YWNpw7Nu","ME5pbmd1bmEgZGUgbGFzIGFudGVyaW9yZXM=","MENhcmFjdGVyaXN0aWNhcw==","MExpc3RhZG8gZGUgRXN0dWRpYW50ZXM=","MFJlZGVzIFNvY2lhbGVz"];
var answers3=["MVJldXRpbGl6YWJsZXM=","MUNvbXBhdGlibGVz","MUVzdHJ1Y3R1cmFkb3M=","MUF0ZW1wb3JhbGVz","MFJhcGlkb3M=","MFNvbG8gcGFyYSBlbnRvcm5vcyBXRUI=","MFNvbG8gcGFyYSBNb3ZpbGVz"];
var answers4=["MVZpZGVvcw==","MUp1ZWdvcw==","MURpYWdyYW1hcw==","MUF1ZGlvcw==","MUltYWdlbmVz","MFRleHRvcyBFeHRlbnNvcw==","MENvbXBhcyBlbiBMaW5lYQ=="];
var ans=[answers1,answers2,answers3,answers4];
var err=["Las letras OVA, significan Objeto Virtual de Aprendizaje","La estructura general de los OVA contiene un objetivo, un contenido, una actividad de aprendizaje y","Los Ovas son, Reutilizables, Compatibles, Estructurados y Atemporales.",""];
var ima=["","","",""];
var mp4=["","","",""];
var ogv=["","","",""];
var alt=["","","",""];
var indexTag=0; actualAnswers=[]; dirMedia="ova_quiz_resources/media/";
var tiRandOrder=false;
var iT=0;var r_order=[];
