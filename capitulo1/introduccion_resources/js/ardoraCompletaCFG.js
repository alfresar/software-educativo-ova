//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=0;
var successes=0; successesMax=7; attempts=0; attemptsMax=1;
var score=0; scoreMax=7; scoreInc=1; scoreDec=1
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
var timeOnMessage=5; messageOk="Felicidades has completado con exito el taller"; messageTime=""; messageError="Ohh!, cometistes unos erorres pero no te preocupes puedes volverlo a intentar"; messageAttempts=""; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
var consolidateSuccess=0; var consolidateScore=0;
borderOk="#008000"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var indexTXT=0; var txtC=['<p>Es un medio <input aria-label="Item 1" type="text" name="item1" id="item1" class="ardoraDropInput" readonly> que tiene como objetivo principal facilitar el proceso tanto de <input aria-label="Item 2" type="text" name="item2" id="item2" class="ardoraDropInput" readonly> como de aprendizaje. </p><p> </p>','<p>Es un <input aria-label="Item 3" type="text" name="item3" id="item3" class="ardoraDropInput" readonly> de computación que a través de una plataforma digital colabora con el proceso facilitando la adquisición de <input aria-label="Item 4" type="text" name="item4" id="item4" class="ardoraDropInput" readonly>. </p><p>  </p><p> </p>','<p>Los <input aria-label="Item 5" type="text" name="item5" id="item5" class="ardoraDropInput" readonly> educativos pueden ser usados durante el aula, dentro del <input aria-label="Item 6" type="text" name="item6" id="item6" class="ardoraDropInput" readonly> escolar, o incluso en un <input aria-label="Item 7" type="text" name="item7" id="item7" class="ardoraDropInput" readonly> externo a este ambiente. </p><p>  </p><p> </p>'];
var answers=["enseñanza","pedagógico","softwares","programa","conocimientos","contexto","local"];
var a=["Mg==","MQ==","NQ==","Mw==","NA==","Ng==","Nw=="];
var itemCorr=["0","0","0","0","0","0","0"];
var itemHelp=["","","","","","",""];
var animationX=[]; animationY=[]; animationPosX=[]; animationPosY=[]; animationLetter=[];
var wordsGame="aW50cm9kdWNjaW9u"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var fHelp="Verdana, Geneva, sans-serif";
