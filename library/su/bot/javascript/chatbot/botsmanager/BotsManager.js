/***********************************************************************************************************
 * su.bot.javascript.chatbot.botsmanager.BotsManager
 * Location: http://www.bot.su/library/su/bot/javascript/chatbot/botsmanager/BotsManager.js
 * Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/botsmanager/botsmanager/builds/20070811/BotsManager.js
 * Index Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/botsmanager/botsmanager/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.javascript == "undefined") {su.bot.javascript = {};};
if (typeof su.bot.javascript.chatbot == "undefined") {su.bot.javascript.chatbot = {};};
if (typeof su.bot.javascript.chatbot.botsmanager == "undefined") {su.bot.javascript.chatbot.botsmanager = {};};

if (typeof su.bot.javascript.chatbot.botsmanager.BotsManager == "undefined") {
 su.bot.javascript.chatbot.botsmanager.BotsManager = function() {}; 
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype = new  com.oclib.javascript.lang.Root();

 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.className = "BotsManager"; 
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.classNamespace = "su.bot.javascript.chatbot.botsmanager.BotsManager"; 
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.classCreated = "20061018"; 
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.classLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/botsmanager/BotsManager.js"; 
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/botsmanager/botsmanager/index.html"; 
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.classVersion = "20070811"; 
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/botsmanager/botsmanager/builds/20070811/BotsManager.js"; 
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/botsmanager/botsmanager/builds/20070811/"; 
 
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.bots = new Array();
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.addBot = function(bot) {this.bots[this.bots.length] = bot;bot.setBotManager(this);bot.setCurrentLanguage(this.getCurrentLanguage());return 1;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getBots = function() {return this.bots;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getBotsCount = function() {return this.bots.length;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.setBots = function(bots) {this.bots = bots;};
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.currentLanguage = "";
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getCurrentLanguage = function () {return this.currentLanguage;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.setCurrentLanguage = function (currentLanguage) {this.currentLanguage = currentLanguage;};
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.botMessages = new Array();
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.addBotMessage = function(botMessage) {this.botMessages[this.botMessages.length] = botMessage;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getCountBotMessages = function(i) {return this.botMessages.length;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getBotMessage = function(i) {return this.botMessages[i];};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getBotMessages = function() {return this.botMessages;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getBotMessagesCount = function() {return this.botMessages.length;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getLastBotMessage = function() {return this.botMessages[this.botMessages.length-1];};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.setBotMessages = function(botMessages) {this.botMessages = botMessages;};
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.loader;
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.monitor;
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getMonitor = function() {return this.monitor;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.setMonitor = function(monitor) {this.monitor = monitor;monitor.setBotManager(this);};
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.userMessages = new Array();
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.addUserMessage = function(userMessage) {this.userMessages[this.userMessages.length] = userMessage;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getCountUserMessages = function(i) {return this.userMessages.length;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getUserMessage = function(i) {return this.userMessages[i];};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getUserMessages = function() {return this.userMessages;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getUserMessagesCount = function() {return this.userMessages.length;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getLastUserMessage = function() {return this.userMessages[this.userMessages.length-2];};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getCurrentUserMessage = function() {return this.userMessages[this.userMessages.length-1];};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.setUserMessages = function(userMessages) {this.userMessages = userMessages;};
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.save = true;
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getSave = function() {return this.save;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.setSave = function(save) {this.save = save;};
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.saveUrl = "";
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getSaveUrl = function() {return this.saveUrl;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.setSaveUrl = function(saveUrl) {this.saveUrl = saveUrl;};
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.uid = "";
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getUid = function() {return this.uid;};
  su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.setUid = function(uid) {this.uid = uid;};
 
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.main = function() { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.botsmanager.BotsManager.main is runing...");};
  this.getMonitor().setBotMessage(this.getFirstMessage(this.getCurrentLanguage()));
 };
 
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getFirstMessage = function(language) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.botsmanager.BotsManager.getFirtstMessage is runing...");};
  this.currentLanguage = language;
  var maxRelevanceMessage = new su.bot.javascript.chatbot.messages.ChatBotMessage();
  for(var i = 0; i < this.bots.length; i++) {
   var currentMessage = this.bots[i].getFirstMessage(language);
   if(currentMessage.getRelevance() == 1) {
    this.addBotMessage(currentMessage);
    return currentMessage;
   } else if(currentMessage.getRelevance() > maxRelevanceMessage.getRelevance()) {
    maxRelevanceMessage = currentMessage;
   };
  };
  this.addBotMessage(maxRelevanceMessage);
  return maxRelevanceMessage;
 };
 
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.getResponse = function(message) { 
  if(this.mustDebug()) {this.getLog().println(".");};
  if(this.mustDebug()) {this.getLog().println(".");};
  if(this.mustDebug()) {this.getLog().println(".");};
  if(this.mustTrace()) {this.getLog().println("BotsManager.getResponse is runing...");};
  if(this.mustDebug()) {this.getLog().println("BotsManager.getResponse message ="+message);};
  if(this.mustDebug()) {this.getLog().println(".");};
  this.addUserMessage(message);
  var maxRelevanceMessage = new su.bot.javascript.chatbot.messages.ChatBotMessage();
  for(var i = 0; i < this.bots.length; i++) {
   if(this.mustDebug()) {this.getLog().println(".");};
   if(this.mustDebug()) {this.getLog().println(".");};
   var currentMessage = this.bots[i].getResponse(message);
   if(this.mustDebug()) {this.getLog().println("BotsManager.getResponse: currentMessage.getResponder() ="+currentMessage.getResponder()+" currentMessage.getText() ="+currentMessage.getText()+" currentMessage.getRelevance() ="+currentMessage.getRelevance());};
   if(currentMessage.getRelevance() == 1) {
    this.currentLanguage = currentMessage.getLanguage();
    this.addBotMessage(currentMessage);
    this.getMonitor().setBotMessage(currentMessage);
    this.saveMessage(message, currentMessage);
    return 1;
   } else if(currentMessage.getRelevance() > maxRelevanceMessage.getRelevance()) {
    maxRelevanceMessage = currentMessage;
   };
  };
  if(this.mustDebug()) {this.getLog().println(".");};
  if(this.mustDebug()) {this.getLog().println(".");};
  if(this.mustDebug()) {this.getLog().println(".");};
  if(this.mustDebug()) {this.getLog().println("su.bot.javascript.chatbot.botsmanager.BotsManager.getResponse: " + "maxRelevanceMessage.getText() = " + maxRelevanceMessage.getText());};
  this.currentLanguage = maxRelevanceMessage.getLanguage();
  this.addBotMessage(maxRelevanceMessage);
  this.getMonitor().setBotMessage(maxRelevanceMessage);
  this.saveMessage(message, maxRelevanceMessage);
 };
 
 su.bot.javascript.chatbot.botsmanager.BotsManager.prototype.saveMessage = function(message, response) { 
  if(this.mustTrace()) {this.getLog().println("BotsManager.saveMessage is runing...");};
  if(!this.save || !this.saveUrl || this.saveUrl == "") {return 0;};
  var emessage = escape(message);
  emessage = emessage.replace(/\+/g, "%2B");
  var eresponse = escape(response.getText());
  var data = "action=saveMessage"+"&uid="+this.uid+"&message="+emessage+"&response="+eresponse;
  if(this.mustDebug()) {this.getLog().println("BotsManager.saveMessage data="+data);};
  var loader = new com.oclib.javascript.util.Loader();
  loader.setDebugging(this.getDebugging());
  loader.setLog(this.getLog());
  loader.setTracing(this.getTracing());
  var the = this;
  loader.setDoIfError(function() {if(the.mustDebug()) {the.getLog().println("BotsManager.saveMessage data not saved...");};});
  loader.setDoIfSuccess(function() {if(the.mustDebug()) {the.getLog().println("BotsManager.saveMessage data saved...");};});
  loader.makeRequest("POST", this.saveUrl, data);
 }; 
};