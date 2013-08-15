/***********************************************************************************************************
 * su.bot.kisa.javascript.chatbots.MeasuringSystem
 * Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/MeasuringSystem.js
 * Version Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/measuringsystem/builds/20070811/MeasuringSystem.js
 * Index Version Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/measuringsystem/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.kisa == "undefined") {su.bot.kisa = {};};
if (typeof su.bot.kisa.javascript == "undefined") {su.bot.kisa.javascript = {};};
if (typeof su.bot.kisa.javascript.chatbots == "undefined") {su.bot.kisa.javascript.chatbots = {};};

if (typeof su.bot.kisa.javascript.chatbots.MeasuringSystem == "undefined") {
 su.bot.kisa.javascript.chatbots.MeasuringSystem = function() {}; 
 su.bot.kisa.javascript.chatbots.MeasuringSystem.prototype = new su.bot.javascript.chatbot.chatbots.ChatBot();

 su.bot.kisa.javascript.chatbots.MeasuringSystem.prototype.className = "MeasuringSystem"; 
 su.bot.kisa.javascript.chatbots.MeasuringSystem.prototype.classNamespace = "su.bot.kisa.javascript.chatbots.MeasuringSystem"; 
 su.bot.kisa.javascript.chatbots.MeasuringSystem.prototype.classCreated = "20070223"; 
 su.bot.kisa.javascript.chatbots.MeasuringSystem.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.kisa.javascript.chatbots.MeasuringSystem.prototype.classLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/MeasuringSystem.js"; 
 su.bot.kisa.javascript.chatbots.MeasuringSystem.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/measuringsystem/index.html"; 
 su.bot.kisa.javascript.chatbots.MeasuringSystem.prototype.classVersion = "20070811"; 
 su.bot.kisa.javascript.chatbots.MeasuringSystem.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/measuringsystem/builds/20070811/MeasuringSystem.js"; 
 su.bot.kisa.javascript.chatbots.MeasuringSystem.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/measuringsystem/builds/20070811/"; 
 
 su.bot.kisa.javascript.chatbots.MeasuringSystem.prototype.getResponse = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.kisa.javascript.chatbots.MeasuringSystem.getResponse is runing...");};
  var inputedNormalizedMessage = this.str.normalize(message);
  message = this.str.normalize(message.toLowerCase());
  message = message.replace(/\"/g, "");
  
  var chatBotMessage = new su.bot.javascript.chatbot.messages.ChatBotMessage();
  chatBotMessage.setResponder(this.getClassName());
  chatBotMessage.setEmotion("na");
  chatBotMessage.setRelevance(0.1); 
  var l = this.getBotManager().getCurrentLanguage();
  chatBotMessage.setLanguage(l);
  chatBotMessage.setText(""); 
  
  if(message.search("переведи") > -1 && message.search(" метр") > -1 && message.search(" в метр") == -1) {
   chatBotMessage.setLanguage("ru");
   var n = 1*message.slice(message.search("переведи")+9, message.search(" метр"));
   if(message.search("сантиметр") > -1) {chatBotMessage.setText(n + " м = " + n*100 + " см.");}
   else if(message.search("миллиметр") > -1) {chatBotMessage.setText(n + " м = " + n*1000 + " мм.");}
   else if(message.search("микрометр") > -1) {chatBotMessage.setText(n + " м = " + n*1000000 + " мкм.");}
   else if(message.search("микрон") > -1) {chatBotMessage.setText(n + " м = " + n*1000000 + " мкн.");}
   else if(message.search("нанометр") > -1) {chatBotMessage.setText(n + " м = " + n*1000000000 + " нм.");}
   else if(message.search("ангстрем") > -1) {chatBotMessage.setText(n + " м = " + n*10000000000 + " Å.");}
   else if(message.search("километр") > -1) {chatBotMessage.setText(n + " м = " + n/100 + " км.");}
   else if(message.search("пункт") > -1) {chatBotMessage.setText(n + " м = " + n*1000/0.353 + " (пункт).");}
   else if(message.search("дюйм") > -1) {chatBotMessage.setText(n + " м = " + n*1000/25.39 + " (дюйм).");}
   else if(message.search("ярд") > -1) {chatBotMessage.setText(n + " м = " + n/0.9144 + " (ярд).");}
   else if(message.search("мили") > -1) {chatBotMessage.setText(n + " м = " + n/100/1.6093 + " (миля).");}
   else if(message.search("фут") > -1) {chatBotMessage.setText(n + " м = " + n*3.281 + " (фут).");}
   else if(message.search("аршин") > -1) {chatBotMessage.setText(n + " м = " + n/2.13 + " (аршин).");}
   else {chatBotMessage.setText("Этого я еще не умею делать. Научи!");};
   chatBotMessage.setRelevance(this.getRelevance()); 
  } else if(message.search("переведи") > -1 && message.search(" градус") > -1 && message.search(" в радиан") > -1) {
   var n = 1*message.slice(message.search("переведи")+9, message.search(" градус"));
   chatBotMessage.setText(n + " (градус) = " + n/57.2958 + " (радиан).");
   chatBotMessage.setRelevance(this.getRelevance()); 
  } else if(message.search("переведи") > -1 && message.search(" радиан") > -1 && message.search(" в градус") > -1) {
   var n = 1*message.slice(message.search("переведи")+9, message.search(" радиан"));
   chatBotMessage.setText(n + " (радиан) = " + n*57.2958 + " (градус).");
   chatBotMessage.setRelevance(this.getRelevance()); 
  };
  
  return chatBotMessage; 
 };
};