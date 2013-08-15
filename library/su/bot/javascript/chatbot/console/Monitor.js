/***********************************************************************************************************
 * su.bot.javascript.chatbot.console.Monitor
 * Location: http://www.bot.su/library/su/bot/javascript/chatbot/console/Monitor.js
 * Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/console/firstmonitor/builds/20070811/Monitor.js
 * Index Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/console/firstmonitor/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.javascript == "undefined") {su.bot.javascript = {};};
if (typeof su.bot.javascript.chatbot == "undefined") {su.bot.javascript.chatbot = {};};
if (typeof su.bot.javascript.chatbot.console == "undefined") {su.bot.javascript.chatbot.console = {};};

if (typeof su.bot.javascript.chatbot.console.Monitor == "undefined") {
 su.bot.javascript.chatbot.console.Monitor = function() {}; 
 su.bot.javascript.chatbot.console.Monitor.prototype = new com.oclib.javascript.lang.Root();

 su.bot.javascript.chatbot.console.Monitor.prototype.className = "Monitor"; 
 su.bot.javascript.chatbot.console.Monitor.prototype.classNamespace = "su.bot.javascript.chatbot.console.Monitor"; 
 su.bot.javascript.chatbot.console.Monitor.prototype.classCreated = "20061018"; 
 su.bot.javascript.chatbot.console.Monitor.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.javascript.chatbot.console.Monitor.prototype.classLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/console/Monitor.js"; 
 su.bot.javascript.chatbot.console.Monitor.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/console/firstmonitor/index.html"; 
 su.bot.javascript.chatbot.console.Monitor.prototype.classVersion = "20070811"; 
 su.bot.javascript.chatbot.console.Monitor.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/console/firstmonitor/builds/20070811/Monitor.js"; 
 su.bot.javascript.chatbot.console.Monitor.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/console/firstmonitor/builds/20070811/"; 
  
 su.bot.javascript.chatbot.console.Monitor.prototype.currentLanguage = "";
  su.bot.javascript.chatbot.console.Monitor.prototype.getCurrentLanguage = function () {return this.currentLanguage;};
  su.bot.javascript.chatbot.console.Monitor.prototype.setCurrentLanguage = function (currentLanguage) {this.currentLanguage = currentLanguage;};
 su.bot.javascript.chatbot.console.Monitor.prototype.botElementId;
  su.bot.javascript.chatbot.console.Monitor.prototype.getBotElementId = function () {return this.botElementId;};
  su.bot.javascript.chatbot.console.Monitor.prototype.setBotElementId = function (botElementId) {this.botElementId = botElementId;};
 su.bot.javascript.chatbot.console.Monitor.prototype.botManager;
  su.bot.javascript.chatbot.console.Monitor.prototype.getBotManager = function () {return this.botManager;};
  su.bot.javascript.chatbot.console.Monitor.prototype.setBotManager = function (botManager) {this.botManager = botManager;};
 su.bot.javascript.chatbot.console.Monitor.prototype.dom;
  su.bot.javascript.chatbot.console.Monitor.prototype.getDom = function () {return this.dom;};
  su.bot.javascript.chatbot.console.Monitor.prototype.setDom = function (dom) {this.dom = dom;};
 su.bot.javascript.chatbot.console.Monitor.prototype.messageIdPrefix = "mid-";
  su.bot.javascript.chatbot.console.Monitor.prototype.getMessageIdPrefix = function () {return this.messageIdPrefix;};
  su.bot.javascript.chatbot.console.Monitor.prototype.setMessageIdPrefix = function (messageIdPrefix) {this.messageIdPrefix = messageIdPrefix;};
 su.bot.javascript.chatbot.console.Monitor.prototype.messageNumber = 0;
  su.bot.javascript.chatbot.console.Monitor.prototype.addMessageNumber = function () {return ++this.messageNumber;};
  su.bot.javascript.chatbot.console.Monitor.prototype.getMessageNumber = function () {return this.messageNumber;};
  su.bot.javascript.chatbot.console.Monitor.prototype.setMessageNumber = function (messageNumber) {this.messageNumber = messageNumber;};
 su.bot.javascript.chatbot.console.Monitor.prototype.monitorElementId;
  su.bot.javascript.chatbot.console.Monitor.prototype.getMonitorElementId = function () {return this.monitorElementId;};
  su.bot.javascript.chatbot.console.Monitor.prototype.setMonitorElementId = function (monitorElementId) {this.monitorElementId = monitorElementId;};
 su.bot.javascript.chatbot.console.Monitor.prototype.monitorElement;
  su.bot.javascript.chatbot.console.Monitor.prototype.getMonitorElement = function () {return this.monitorElement;};
  su.bot.javascript.chatbot.console.Monitor.prototype.setMonitorElement = function (monitorElement) {this.monitorElement = monitorElement;};
 su.bot.javascript.chatbot.console.Monitor.prototype.userElementId;
  su.bot.javascript.chatbot.console.Monitor.prototype.getUserElementId = function () {return this.userElementId;};
  su.bot.javascript.chatbot.console.Monitor.prototype.setUserElementId = function (userElementId) {this.userElementId = userElementId;};
 
 su.bot.javascript.chatbot.console.Monitor.prototype.main = function() { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.console.Monitor.main is runing...");};
  this.setMonitorElement(document.getElementById(this.getMonitorElementId()));
 };
 
 su.bot.javascript.chatbot.console.Monitor.prototype.printlnMessage = function(userId, message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.console.Monitor.printlnMessage is runing...");};
  var messageElement = document.createElement("div");
  messageElement.id = this.getMessageIdPrefix() + this.getMessageNumber();
  messageElement.className = userId;
  var messageBeforeElement = document.createElement("span");
  messageBeforeElement.className = "messageBefore";
  messageBeforeElement.appendChild(document.createTextNode(document.getElementById(userId+"Before-"+this.currentLanguage).value));
  messageElement.appendChild(messageBeforeElement);
  var messageContentElement = document.createElement("span");
  messageContentElement.appendChild(document.createTextNode(message));
  messageElement.appendChild(messageContentElement);
  this.getMonitorElement().appendChild(messageElement);
  this.getMonitorElement().scrollTop = this.getMonitorElement().scrollHeight;
  this.addMessageNumber();
 };
 
 su.bot.javascript.chatbot.console.Monitor.prototype.setBotMessage = function(botMessage) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.console.Monitor.setBotMessage is runing...");};
  this.currentLanguage = botMessage.getLanguage();
  if(botMessage.getRelevance() > 0) {this.printlnMessage(this.getBotElementId(), botMessage.getText());};
 };
 
 su.bot.javascript.chatbot.console.Monitor.prototype.setUserMessage = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.console.Monitor.setUserMessage is runing...");};
  this.printlnMessage(this.getUserElementId(), message);
  var the = this;
  setTimeout(function() {the.botManager.getResponse(message);}, Math.random()*500);
 };
};