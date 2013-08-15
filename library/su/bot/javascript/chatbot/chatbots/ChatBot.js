/***********************************************************************************************************
 * su.bot.javascript.chatbot.chatbots.ChatBot
 * Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/ChatBot.js
 * Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/chatbots/builds/20070811/ChatBot.js
 * Index Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/chatbots/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.javascript == "undefined") {su.bot.javascript = {};};
if (typeof su.bot.javascript.chatbot == "undefined") {su.bot.javascript.chatbot = {};};
if (typeof su.bot.javascript.chatbot.chatbots == "undefined") {su.bot.javascript.chatbot.chatbots = {};};

if (typeof su.bot.javascript.chatbot.chatbots.ChatBot == "undefined") {
 su.bot.javascript.chatbot.chatbots.ChatBot = function() {}; 
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype = new  com.oclib.javascript.lang.Root();

 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.className = "ChatBot"; 
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.classNamespace = "su.bot.javascript.chatbot.chatbots.ChatBot"; 
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.classCreated = "20061018"; 
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.classLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/ChatBot.js"; 
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/chatbots/index.html"; 
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.classVersion = "20070811"; 
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/chatbots/builds/20070811/ChatBot.js"; 
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/chatbots/builds/20070811/"; 
  
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.botManager;
  su.bot.javascript.chatbot.chatbots.ChatBot.prototype.getBotManager = function () {return this.botManager;};
  su.bot.javascript.chatbot.chatbots.ChatBot.prototype.setBotManager = function (botManager) {this.botManager = botManager;};
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.currentLanguage = "english";
  su.bot.javascript.chatbot.chatbots.ChatBot.prototype.getCurrentLanguage = function () {return this.currentLanguage;};
  su.bot.javascript.chatbot.chatbots.ChatBot.prototype.setCurrentLanguage = function (currentLanguage) {this.currentLanguage = currentLanguage;};
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.lastMessage = "";
  su.bot.javascript.chatbot.chatbots.ChatBot.prototype.getLastMessage = function () {return this.lastMessage;};
  su.bot.javascript.chatbot.chatbots.ChatBot.prototype.setLastMessage = function (lastMessage) {this.lastMessage = lastMessage;};
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.lastResponse = "";
  su.bot.javascript.chatbot.chatbots.ChatBot.prototype.getLastResponse = function () {return this.lastResponse;};
  su.bot.javascript.chatbot.chatbots.ChatBot.prototype.setLastResponse = function (lastResponse) {this.lastResponse = lastResponse;};
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.messageNumber = 0;
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.relevance = 0.5;
  su.bot.javascript.chatbot.chatbots.ChatBot.prototype.getRelevance = function () {return this.relevance;};
  su.bot.javascript.chatbot.chatbots.ChatBot.prototype.setRelevance = function (relevance) {this.relevance = relevance;};
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.str = new com.oclib.javascript.util.Str(); 
 
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.getFirstMessage = function(language) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.ChatBot.getFirtstMessage is runing...");};
  var chatBotMessage = new su.bot.javascript.chatbot.chatbots.ChatBotMessage();
  chatBotMessage.setLanguage(this.getCurrentLanguage(language));
  chatBotMessage.setEmotion("na");
  chatBotMessage.setRelevance(0);
  chatBotMessage.setResponder(this.getClassName());
  return chatBotMessage;
 }; 
 
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.getResponse = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.ChatBot.getResponse is runing...");};
  var chatBotMessage = new su.bot.javascript.chatbot.chatbots.ChatBotMessage();
  chatBotMessage.setLanguage(this.getCurrentLanguage(language));
  chatBotMessage.setEmotion("na");
  chatBotMessage.setRelevance(0);
  chatBotMessage.setResponder(this.getClassName());
  return chatBotMessage;
 }; 
 
 su.bot.javascript.chatbot.chatbots.ChatBot.prototype.init = function(message) {if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.ChatBot.init is runing...");};};
};