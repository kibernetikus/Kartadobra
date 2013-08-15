/***********************************************************************************************************
 * su.bot.javascript.chatbot.messages.ChatBotMessage
 * Location: http://www.bot.su/library/su/bot/javascript/chatbot/messages/ChatBotMessage.js
 * Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/messages/chatbotmessage/builds/20070811/ChatBotMessage.js
 * Index Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/messages/chatbotmessage/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.javascript == "undefined") {su.bot.javascript = {};};
if (typeof su.bot.javascript.chatbot == "undefined") {su.bot.javascript.chatbot = {};};
if (typeof su.bot.javascript.chatbot.messages == "undefined") {su.bot.javascript.chatbot.messages = {};};

if (typeof su.bot.javascript.chatbot.messages.ChatBotMessage == "undefined") {
 su.bot.javascript.chatbot.messages.ChatBotMessage = function() {}; 
 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype = new com.oclib.javascript.lang.Root();

 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.className = "ChatBotMessage"; 
 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.classNamespace = "su.bot.javascript.chatbot.messages.ChatBotMessage"; 
 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.classCreated = "20061018"; 
 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.classLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/messages/ChatBotMessage.js"; 
 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/messages/chatbotmessage/index.html"; 
 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.classVersion = "20070811"; 
 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/messages/chatbotmessage/builds/20070811/ChatBotMessage.js"; 
 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/messages/chatbotmessage/builds/20070811/"; 
  
 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.emotion = "empty";
  su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.getEmotion = function () {return this.emotion;};
  su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.setEmotion = function (emotion) {this.emotion = emotion;};
 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.language = "english";
  su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.getLanguage = function () {return this.language;};
  su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.setLanguage = function (language) {this.language = language;};
 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.relevance = 0;
  su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.getRelevance = function () {return this.relevance;};
  su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.setRelevance = function (relevance) {this.relevance = relevance;};
 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.responder = "";
  su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.getResponder = function () {return this.responder;};
  su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.setResponder = function (responder) {this.responder = responder;};
 su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.text = "";
  su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.getText = function () {return this.text;};
  su.bot.javascript.chatbot.messages.ChatBotMessage.prototype.setText = function (text) {this.text = text;};
};