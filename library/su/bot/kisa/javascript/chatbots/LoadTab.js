/***********************************************************************************************************
 * su.bot.kisa.javascript.chatbots.LoadTab
 * Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/LoadTab.js
 * Version Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/loadtab/builds/20070811/LoadTab.js
 * Index Version Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/loadtab/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.kisa == "undefined") {su.bot.kisa = {};};
if (typeof su.bot.kisa.javascript == "undefined") {su.bot.kisa.javascript = {};};
if (typeof su.bot.kisa.javascript.chatbots == "undefined") {su.bot.kisa.javascript.chatbots = {};};

if (typeof su.bot.kisa.javascript.chatbots.LoadTab == "undefined") {
 su.bot.kisa.javascript.chatbots.LoadTab = function() {}; 
 su.bot.kisa.javascript.chatbots.LoadTab.prototype = new su.bot.javascript.chatbot.chatbots.LoadTab(); 

 su.bot.kisa.javascript.chatbots.LoadTab.prototype.className = "LoadTab"; 
 su.bot.kisa.javascript.chatbots.LoadTab.prototype.classNamespace = "su.bot.kisa.javascript.chatbots.LoadTab"; 
 su.bot.kisa.javascript.chatbots.LoadTab.prototype.classCreated = "20070223"; 
 su.bot.kisa.javascript.chatbots.LoadTab.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.kisa.javascript.chatbots.LoadTab.prototype.classLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/LoadTab.js"; 
 su.bot.kisa.javascript.chatbots.LoadTab.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/loadtab/index.html"; 
 su.bot.kisa.javascript.chatbots.LoadTab.prototype.classVersion = "20070811"; 
 su.bot.kisa.javascript.chatbots.LoadTab.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/loadtab/builds/20070811/LoadTab.js"; 
 su.bot.kisa.javascript.chatbots.LoadTab.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/loadtab/builds/20070811/"; 
  
 su.bot.kisa.javascript.chatbots.LoadTab.prototype.getFirstMessage = function(language) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.kisa.javascript.chatbots.LoadTab.getFirtstMessage is runing...");};
  var chatBotMessage = new su.bot.javascript.chatbot.messages.ChatBotMessage();
  chatBotMessage.setResponder(this.getClassName());
  chatBotMessage.setEmotion("hello");
  chatBotMessage.setRelevance(this.getRelevance());
  this.setCurrentLanguage(language);
  chatBotMessage.setLanguage(language);
  if(language == "ru") {
   chatBotMessage.setText("Привет! Познакомимся?");
  } else if(language == "en") {
   chatBotMessage.setText("Hi! Let us?");
  } else {
   chatBotMessage.setText("I'm sorry, but I don't know this language.");
  };
  return chatBotMessage;
 };
};