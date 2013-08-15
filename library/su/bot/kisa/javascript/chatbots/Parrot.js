/***********************************************************************************************************
 * su.bot.kisa.javascript.chatbots.Parrot
 * Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/Parrot.js
 * Version Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/parrot/builds/20070811/Parrot.js
 * Index Version Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/parrot/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.kisa == "undefined") {su.bot.kisa = {};};
if (typeof su.bot.kisa.javascript == "undefined") {su.bot.kisa.javascript = {};};
if (typeof su.bot.kisa.javascript.chatbots == "undefined") {su.bot.kisa.javascript.chatbots = {};};

if (typeof su.bot.kisa.javascript.chatbots.Parrot == "undefined") {
 su.bot.kisa.javascript.chatbots.Parrot = function() {}; 
 su.bot.kisa.javascript.chatbots.Parrot.prototype = new su.bot.javascript.chatbot.chatbots.ChatBot();

 su.bot.kisa.javascript.chatbots.Parrot.prototype.className = "Parrot"; 
 su.bot.kisa.javascript.chatbots.Parrot.prototype.classNamespace = "su.bot.kisa.javascript.chatbots.Parrot"; 
 su.bot.kisa.javascript.chatbots.Parrot.prototype.classCreated = "20070223"; 
 su.bot.kisa.javascript.chatbots.Parrot.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.kisa.javascript.chatbots.Parrot.prototype.classLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/Parrot.js"; 
 su.bot.kisa.javascript.chatbots.Parrot.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/parrot/index.html"; 
 su.bot.kisa.javascript.chatbots.Parrot.prototype.classVersion = "20070811"; 
 su.bot.kisa.javascript.chatbots.Parrot.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/parrot/builds/20070811/Parrot.js"; 
 su.bot.kisa.javascript.chatbots.Parrot.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/parrot/builds/20070811/"; 


 su.bot.kisa.javascript.chatbots.Parrot.prototype.getResponse = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.kisa.javascript.chatbots.Parrot.getResponse is runing...");};
  var inputedNormalizedMessage = this.str.normalize(message);
  message = this.str.normalize(message.toLowerCase());
  message = message.replace(/\"/g, "");
  
  var chatBotMessage = new su.bot.javascript.chatbot.messages.ChatBotMessage();
  chatBotMessage.setResponder(this.getClassName());
  chatBotMessage.setEmotion("na");
  var l = this.getBotManager().getCurrentLanguage();
  chatBotMessage.setLanguage(l);
  chatBotMessage.setRelevance(0.1);   
  
  if(message.search("скажи:") > -1) {
   chatBotMessage.setLanguage("ru");
   chatBotMessage.setText("Ок. Тупо повторяю твои слова: "+this.str.normalize(message.slice(message.indexOf("скажи:")+6)));
   chatBotMessage.setRelevance(this.getRelevance());
  } else if(message.search("скажи") > -1 && message.search("расскажи") == -1) {
   chatBotMessage.setText("Ок. Тупо повторяю твои слова: "+this.str.normalize(message.slice(message.indexOf("скажи")+5)));
   chatBotMessage.setRelevance(this.getRelevance());
  };
  return chatBotMessage;  
 };
};