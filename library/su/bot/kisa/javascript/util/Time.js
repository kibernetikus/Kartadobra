/***********************************************************************************************************
 * su.bot.kisa.javascript.util.Time
 * Location: http://www.bot.su/library/su/bot/kisa/javascript/util/Time.js
 * Version Location: http://www.bot.su/library/su/bot/kisa/javascript/util/time/builds/20070223/Time.js
 * Index Version Location: http://www.bot.su/library/su/bot/kisa/javascript/util/time/builds/20070223/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.kisa == "undefined") {su.bot.kisa = {};};
if (typeof su.bot.kisa.javascript == "undefined") {su.bot.kisa.javascript = {};};
if (typeof su.bot.kisa.javascript.util == "undefined") {su.bot.kisa.javascript.util = {};};

if (typeof su.bot.kisa.javascript.util.Time == "undefined") {
 su.bot.kisa.javascript.util.Time = function() {}; 
 su.bot.kisa.javascript.util.Time.prototype = new com.oclib.javascript.lang.Root();

 su.bot.kisa.javascript.util.Time.prototype.className = "Time"; 
 su.bot.kisa.javascript.util.Time.prototype.classNamespace = "su.bot.kisa.javascript.util.Time"; 
 su.bot.kisa.javascript.util.Time.prototype.classCreated = "20061018"; 
 su.bot.kisa.javascript.util.Time.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.kisa.javascript.util.Time.prototype.classLocation = "http://www.bot.su/library/su/bot/kisa/javascript/util/Time.js"; 
 su.bot.kisa.javascript.util.Time.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/util/time/index.html"; 
 su.bot.kisa.javascript.util.Time.prototype.classVersion = "20070223"; 
 su.bot.kisa.javascript.util.Time.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/kisa/javascript/util/time/builds/20070223/Time.js"; 
 su.bot.kisa.javascript.util.Time.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/util/time/builds/20070223/"; 
  
 su.bot.kisa.javascript.util.Time.prototype.getMonth = function() { 
  var d=new Date(); 
  var month=new Array(12);
  month[0]="Январь"; month[1]="Февраль";
  month[2]="Март"; month[3]="Апрель";
  month[4]="Май"; month[5]="Июнь";
  month[6]="Июль"; month[7]="Август";
  month[8]="Сентябрь"; month[9]="Октябрь";
  month[10]="Ноябрь"; month[11]="Декабрь";
  return month[d.getMonth()];
 };

 su.bot.kisa.javascript.util.Time.prototype.getDayWeek = function() { 
  var d=new Date(); 
  var month=new Array(12);
  month[1]="Понедельник"; month[2]="Вторник";
  month[3]="Среда"; month[4]="Четверг";
  month[5]="Пятница"; month[6]="Суббота";
  month[0]="Воскресенье"; 
  return month[d.getDay()];
 };
};
