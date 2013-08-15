/***********************************************************************************************************
 * su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab
 * Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/EmptyQuestionLoadTab.js
 * Version Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/emptyquestionloadtab/builds/20070811/EmptyQuestionLoadTab.js
 * Index Version Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/emptyquestionloadtab/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.kisa == "undefined") {su.bot.kisa = {};};
if (typeof su.bot.kisa.javascript == "undefined") {su.bot.kisa.javascript = {};};
if (typeof su.bot.kisa.javascript.chatbots == "undefined") {su.bot.kisa.javascript.chatbots = {};};

if (typeof su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab == "undefined") {
 su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab = function() {}; 
 su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab.prototype = new su.bot.javascript.chatbot.chatbots.LoadTab(); 

 su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab.prototype.className = "EmptyQuestionLoadTab"; 
 su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab.prototype.classNamespace = "su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab"; 
 su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab.prototype.classCreated = "20070223"; 
 su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab.prototype.classLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/EmptyQuestionLoadTab.js"; 
 su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/emptyquestionloadtab/index.html"; 
 su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab.prototype.classVersion = "20070811"; 
 su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/emptyquestionloadtab/builds/20070811/EmptyQuestionLoadTab.js"; 
 su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/emptyquestionloadtab/builds/20070811/"; 
 
 su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab.prototype.responder = "EmptyQuestionLoadTab";
 
 su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab.prototype.getResponse = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.EmptyQuestionLoadTab.getResponse is runing...");};  
  var inputedNormalizedMessage = this.str.normalize(message);
  message = this.str.normalize(message.toLowerCase());
  message = message.replace(/\"/g, "");  
  var l = this.getBotManager().getCurrentLanguage();
  if(message.indexOf("?") > -1 && this.table && this.table[l] && this.table[l][0]) { 
   if(this.mustDebug()) {this.getLog().println("EmptyQuestionLoadTab.getResponse table has length="+this.table[l].length);};
   var r = Math.floor(Math.random()*this.table[l].length);
   return this.table[l][r];
  } else {
   var chatBotMessage = new su.bot.javascript.chatbot.messages.ChatBotMessage();
   chatBotMessage.setRelevance(0.1);
   chatBotMessage.setResponder(this.getClassName());
   chatBotMessage.setText("");
   return chatBotMessage;
  };
 };  
};