/***********************************************************************************************************
 * su.bot.kisa.javascript.chatbots.SituationLoadTab
 * Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/SituationLoadTab.js
 * Version Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/situationloadtab/builds/20070811/SituationLoadTab.js
 * Index Version Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/situationloadtab/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.kisa == "undefined") {su.bot.kisa = {};};
if (typeof su.bot.kisa.javascript == "undefined") {su.bot.kisa.javascript = {};};
if (typeof su.bot.kisa.javascript.chatbots == "undefined") {su.bot.kisa.javascript.chatbots = {};};

if (typeof su.bot.kisa.javascript.chatbots.SituationLoadTab == "undefined") {
 su.bot.kisa.javascript.chatbots.SituationLoadTab = function() {}; 
 su.bot.kisa.javascript.chatbots.SituationLoadTab.prototype = new su.bot.javascript.chatbot.chatbots.SituationtLoadTab();

 su.bot.kisa.javascript.chatbots.SituationLoadTab.prototype.className = "SituationLoadTab"; 
 su.bot.kisa.javascript.chatbots.SituationLoadTab.prototype.classNamespace = "su.bot.kisa.javascript.chatbots.SituationLoadTab"; 
 su.bot.kisa.javascript.chatbots.SituationLoadTab.prototype.classCreated = "20070223"; 
 su.bot.kisa.javascript.chatbots.SituationLoadTab.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.kisa.javascript.chatbots.SituationLoadTab.prototype.classLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/SituationLoadTab.js"; 
 su.bot.kisa.javascript.chatbots.SituationLoadTab.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/situationloadtab/index.html"; 
 su.bot.kisa.javascript.chatbots.SituationLoadTab.prototype.classVersion = "20070811"; 
 su.bot.kisa.javascript.chatbots.SituationLoadTab.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/situationloadtab/builds/20070811/SituationLoadTab.js"; 
 su.bot.kisa.javascript.chatbots.SituationLoadTab.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/situationloadtab/builds/20070811/"; 
 
 su.bot.kisa.javascript.chatbots.SituationLoadTab.prototype.getResponse = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SituationLoadTab.getResponse is runing...");}; 
  var inputedNormalizedMessage = this.str.normalize(message);
  message = this.str.normalize(message.toLowerCase());
  message = message.replace(/\"/g, ""); 
  var l = this.getBotManager().getCurrentLanguage();
  if(this.mustTrace()) {this.getLog().println("SituationLoadTab.getResponse l="+l);}; 
  if(message == this.getBotManager().getLastUserMessage()) {message = "repeat";} 
  else if(message == "") {message = "empty";} 
  else if(message.length < 2 && message != "." && message != ")" && message !="(") {message = "short";} 
  else if(message.length>128) {message = "long";} 
  else if(message.indexOf("))") > -1) {message = "))";}
  else if(message.indexOf("((") > -1) {message = "((";}
  else if(message.indexOf("!!!") > -1) {message = "!!!";}
  else if(message.indexOf("!!") > -1) {message = "!!";}
  else if(message.indexOf("???") > -1) {message = "???";}
  else if(message.indexOf("??") > -1) {message = "??";};
  if(this.table && this.table[l] && this.table[l][message]) {
   return this.table[l][message][Math.floor(Math.random()*this.table[l][message].length)];
  } else {
   var chatBotMessage = new su.bot.javascript.chatbot.messages.ChatBotMessage();
   chatBotMessage.setRelevance(0.1);
   chatBotMessage.setResponder(this.getClassName());
   return chatBotMessage;
  }; 
 };
};