/***********************************************************************************************************
 * su.bot.kisa.javascript.chatbots.Calculator
 * Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/Calculator.js
 * Version Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/calculator/builds/20070811/Calculator.js
 * Index Version Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/calculator/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.kisa == "undefined") {su.bot.kisa = {};};
if (typeof su.bot.kisa.javascript == "undefined") {su.bot.kisa.javascript = {};};
if (typeof su.bot.kisa.javascript.chatbots == "undefined") {su.bot.kisa.javascript.chatbots = {};};

if (typeof su.bot.kisa.javascript.chatbots.Calculator == "undefined") {
 su.bot.kisa.javascript.chatbots.Calculator = function() {}; 
 su.bot.kisa.javascript.chatbots.Calculator.prototype = new su.bot.javascript.chatbot.chatbots.ChatBot();

 su.bot.kisa.javascript.chatbots.Calculator.prototype.className = "Calculator"; 
 su.bot.kisa.javascript.chatbots.Calculator.prototype.classNamespace = "su.bot.kisa.javascript.chatbots.Calculator"; 
 su.bot.kisa.javascript.chatbots.Calculator.prototype.classCreated = "20070223"; 
 su.bot.kisa.javascript.chatbots.Calculator.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.kisa.javascript.chatbots.Calculator.prototype.classLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/Calculator.js"; 
 su.bot.kisa.javascript.chatbots.Calculator.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/calculator/index.html"; 
 su.bot.kisa.javascript.chatbots.Calculator.prototype.classVersion = "20070811"; 
 su.bot.kisa.javascript.chatbots.Calculator.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/calculator/builds/20070811/Calculator.js"; 
 su.bot.kisa.javascript.chatbots.Calculator.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/calculator/builds/20070811/"; 
 
 su.bot.kisa.javascript.chatbots.Calculator.prototype.getResponse = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.kisa.javascript.chatbots.Calculator.getResponse is runing...");};
  var inputedNormalizedMessage = this.str.normalize(message);
  message = this.str.normalize(message.toLowerCase());
  message = message.replace(/\"/g, "");
  
  var chatBotMessage = new su.bot.javascript.chatbot.messages.ChatBotMessage();
  chatBotMessage.setResponder(this.getClassName());
  chatBotMessage.setEmotion("na");
  var l = this.getBotManager().getCurrentLanguage();
  chatBotMessage.setLanguage(l);
  if(message == "") {
   chatBotMessage.setText("Не знаю что сказать...");
   chatBotMessage.setRelevance(0.01);
   return chatBotMessage;
  };
  var r = Math.random();
  
  var response = "";
  if(message.search("сколько будет:") > -1) {
   if(message.indexOf("?") > -1) {
    message = message.slice(message.indexOf("сколько будет:")+14, message.indexOf("?"));
   } else {
    message = message.slice(message.indexOf("сколько будет:")+14);
   };
  } else if(message.search("сколько будет") > -1) {
   if(message.indexOf("?") > -1) {
    message = message.slice(message.indexOf("сколько будет")+13, message.indexOf("?"));
   } else {
    message = message.slice(message.indexOf("сколько будет")+13);
   };
  } else if(message.search("посчитай:") > -1) {
   if(message.indexOf("?") > -1) {
    message = message.slice(message.indexOf("посчитай:")+9, message.indexOf("?"));
   } else {
    message = message.slice(message.indexOf("посчитай:")+9);
   };
  } else if(message.search("посчитай") > -1) {
   if(message.indexOf("?") > -1) {
    message = message.slice(message.indexOf("посчитай")+8, message.indexOf("?"));
   } else {
    message = message.slice(message.indexOf("посчитай")+8);
   };
  };
  
  message = message.replace(/=\?/,"");
  message = message.replace(/=/,""); 
	  
  try {
   chatBotMessage.setRelevance(0.99);
   chatBotMessage.setText(eval("with (Math) {"+message+"}")+".");
  } catch(err) {
   chatBotMessage.setText("Не знаю что сказать...");
   chatBotMessage.setRelevance(0.01);
  };
  return chatBotMessage;
 };
};