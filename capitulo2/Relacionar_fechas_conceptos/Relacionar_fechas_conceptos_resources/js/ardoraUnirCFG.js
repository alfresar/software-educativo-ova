//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=0;
var successes=0; successesMax=6; attempts=0; attemptsMax=1;
var score=0; scoreMax=1; scoreInc=1; scoreDec=1
var typeGame=0;
var tiTime=true;
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
var fMenssage="'Times New Roman', Times, serif";
var fActi="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=5; messageOk="Felicitacion lo hiciste muy bien"; messageTime=""; messageError="Lo siento, Intentalo de Nuevo "; messageErrorG="Lo siento, Intentalo de Nuevo "; messageAttempts=""; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var wordsGame="UmVsYWNpb25hcl9mZWNoYXNfY29uY2VwdG9z"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var joinPar=[["MjAwMA==", "U29mdHdhcmUgU29jaWFs"],["MTk4NQ==", "SW50ZXJuZXQ="],["MTk2MA==", "VXNvIGRlIGxhIHByb2dyYW1hY2nDs24="],["MjAwNQ==", "TXVsdGltZWRpYQ=="],["MTk5MA==", "RS0gTGVhcm5pbmc="],["MTk3NQ==", "RW5zZcOxYW56YSBBc2lzdGlkYSBwb3IgQ29tcHV0YWRvcmE="]];
var c=[[4,15],[4,8],[4,22],[4,10],[4,11],[4,34]];
var con1=["2000","1985","1960","2005","1990","1975"];
var con2=["Software Social","Internet","Uso de la programación","Multimedia","E- Learning","Enseñanza Asistida por Computadora"];
var sel1=""; join1=[]; join2=[];
