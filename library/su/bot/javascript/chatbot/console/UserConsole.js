/***********************************************************************************************************
 * su.bot.javascript.chatbot.console.UserConsole
 * Location: http://www.bot.su/library/su/bot/javascript/chatbot/console/Firstsu.bot.javascript.chatbot.console.UserConsole.js
 * Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/console/userconsole/builds/20070811/UserConsole.js
 * Index Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/console/userconsole/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.javascript == "undefined") {su.bot.javascript = {};};
if (typeof su.bot.javascript.chatbot == "undefined") {su.bot.javascript.chatbot = {};};
if (typeof su.bot.javascript.chatbot.console == "undefined") {su.bot.javascript.chatbot.console = {};};

if (typeof su.bot.javascript.chatbot.console.UserConsole == "undefined") {
 su.bot.javascript.chatbot.console.UserConsole = function() {}; 
 su.bot.javascript.chatbot.console.UserConsole.prototype = new com.oclib.javascript.lang.Root();

 su.bot.javascript.chatbot.console.UserConsole.prototype.className = "su.bot.javascript.chatbot.console.UserConsole"; 
 su.bot.javascript.chatbot.console.UserConsole.prototype.classNamespace = "su.bot.javascript.chatbot.console.UserConsole"; 
 su.bot.javascript.chatbot.console.UserConsole.prototype.classCreated = "20061018"; 
 su.bot.javascript.chatbot.console.UserConsole.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.javascript.chatbot.console.UserConsole.prototype.classLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/console/UserConsole.js"; 
 su.bot.javascript.chatbot.console.UserConsole.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/console/userconsole/index.html"; 
 su.bot.javascript.chatbot.console.UserConsole.prototype.classVersion = "20070811"; 
 su.bot.javascript.chatbot.console.UserConsole.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/console/userconsole/builds/20070811/UserConsole.js"; 
 su.bot.javascript.chatbot.console.UserConsole.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/console/userconsole/builds/20070811/"; 
  
 su.bot.javascript.chatbot.console.UserConsole.prototype.dom;
  su.bot.javascript.chatbot.console.UserConsole.prototype.getDom = function () {return this.dom;};
  su.bot.javascript.chatbot.console.UserConsole.prototype.setDom = function (dom) {this.dom = dom;};
 su.bot.javascript.chatbot.console.UserConsole.prototype.ev;
  su.bot.javascript.chatbot.console.UserConsole.prototype.getEvent = function () {return this.ev;};
  su.bot.javascript.chatbot.console.UserConsole.prototype.setEvent = function (ev) {this.ev = ev;};
 su.bot.javascript.chatbot.console.UserConsole.prototype.monitor;
  su.bot.javascript.chatbot.console.UserConsole.prototype.getMonitor = function () {return this.monitor;};
  su.bot.javascript.chatbot.console.UserConsole.prototype.setMonitor = function (monitor) {this.monitor = monitor;};
 
 su.bot.javascript.chatbot.console.UserConsole.prototype.main = function() { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.console.UserConsole.main is runing...");};
  var the = this;
  this.getEvent().addEventListener("userConsoleSendButton", "click", function(e) {the.writeMessage(e);}, false);
  this.getEvent().addEventListener("userConsoleText", "keypress", function(e) {if(e.keyCode != 13 && e.which != 13) {return -1;}; the.writeMessage(e);}, false);
 };

 su.bot.javascript.chatbot.console.UserConsole.prototype.writeMessage = function(e) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.console.UserConsole.writeMessage is runing...");};
  var message = document.getElementById("userConsoleText").value;
  message = message.replace(/\"/g, "'");
  document.getElementById("userConsoleText").value = "";
  this.getMonitor().setUserMessage(message);
 };
};