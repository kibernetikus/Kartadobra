/***********************************************************************************************************
 * su.bot.kisa.javascript.chatbots.DateTime
 * Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/DateTime.js
 * Version Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/datetime/builds/20070811/DateTime.js
 * Index Version Location: http://www.bot.su/library/su/bot/kisa/javascript/chatbots/datetime/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.kisa == "undefined") {su.bot.kisa = {};};
if (typeof su.bot.kisa.javascript == "undefined") {su.bot.kisa.javascript = {};};
if (typeof su.bot.kisa.javascript.chatbots == "undefined") {su.bot.kisa.javascript.chatbots = {};};

if (typeof su.bot.kisa.javascript.chatbots.DateTime == "undefined") {
 su.bot.kisa.javascript.chatbots.DateTime = function() {}; 
 su.bot.kisa.javascript.chatbots.DateTime.prototype = new su.bot.javascript.chatbot.chatbots.ChatBot();

 su.bot.kisa.javascript.chatbots.DateTime.prototype.className = "DateTime"; 
 su.bot.kisa.javascript.chatbots.DateTime.prototype.classNamespace = "su.bot.kisa.javascript.chatbots.DateTime"; 
 su.bot.kisa.javascript.chatbots.DateTime.prototype.classCreated = "20070223"; 
 su.bot.kisa.javascript.chatbots.DateTime.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.kisa.javascript.chatbots.DateTime.prototype.classLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/DateTime.js"; 
 su.bot.kisa.javascript.chatbots.DateTime.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/datetime/index.html"; 
 su.bot.kisa.javascript.chatbots.DateTime.prototype.classVersion = "20070811"; 
 su.bot.kisa.javascript.chatbots.DateTime.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/datetime/builds/20070811/DateTime.js"; 
 su.bot.kisa.javascript.chatbots.DateTime.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/kisa/javascript/chatbots/datetime/builds/20070811/"; 

 su.bot.kisa.javascript.chatbots.DateTime.prototype.getResponse = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.kisa.javascript.chatbots.DateTime.getResponse is runing...");};
  var inputedNormalizedMessage = this.str.normalize(message);
  message = this.str.normalize(message.toLowerCase());
  message = message.replace(/\"/g, "");
  
  var chatBotMessage = new su.bot.javascript.chatbot.messages.ChatBotMessage();
  chatBotMessage.setResponder(this.getClassName());
  chatBotMessage.setEmotion("na");
  var l = this.getBotManager().getCurrentLanguage();
  chatBotMessage.setLanguage(l);
  chatBotMessage.setRelevance(0.1); 
  chatBotMessage.setText(""); 
  
  if((message.search("который час") > -1 
            || message.search("сколько часов") > -1 
            || message.search("часов сколько") > -1
            || message.search("сколько время") > -1 
            || message.search("сколько времени") > -1 
            || message.search("скока время") > -1 
            || message.search("скоко время") > -1 
            || message.search("скока времени") > -1 
            || message.search("сколько время") > -1
            || message.search("сколько на часах") > -1
            || message.search("сообщи точное время") > -1
            || message.search("сообщи время") > -1
            || message.search("скажи время") > -1)
           && message.search("несколько") == -1) { 
   chatBotMessage.setLanguage("ru");
   var date = new Date();
   var mm = date.getMinutes(); if(mm < 10) {mm = "0" + mm;};
   var ss = date.getSeconds(); if(ss < 10) {ss = "0" + ss;};
   chatBotMessage.setText("Сейчас " + date.getHours() + ":" + mm + ":" + ss + ".");
   chatBotMessage.setRelevance(this.getRelevance()); 
  } else if(message.search("time is it") > -1) { 
   chatBotMessage.setLanguage("en");
   var date = new Date();
   var mm = date.getMinutes(); if(mm < 10) {mm = "0" + mm;};
   var ss = date.getSeconds(); if(ss < 10) {ss = "0" + ss;};
   chatBotMessage.setText("Now " + date.getHours() + ":" + mm + ":" + ss + ".");
   chatBotMessage.setRelevance(this.getRelevance()); 
  } else if(message.search("день недели") > -1 ) { 
   chatBotMessage.setLanguage("ru");
   chatBotMessage.setText("Сегодня " + (new su.bot.kisa.javascript.util.Time()).getDayWeek() + ".");
   chatBotMessage.setRelevance(this.getRelevance()); 
  } else if(message.search("какая сегодня дата") > -1 
     					  || message.search("дата какая") > -1
						  || message.search("какая дата") > -1
						  || message.search("скажи дату") > -1
						  || message.search("дату скажи") > -1
						  || message.search("назови дату") > -1
						  || message.search("дату назови") > -1
						  || message.search("сообщи дату") > -1
						  || message.search("дату сообщи") > -1
						  || message.search("какой сейчас день") > -1 
						  || message.search("какой сегодня день") > -1 
						  || message.search("какой день") > -1
						  || message.search("день какой") > -1) {
   chatBotMessage.setLanguage("ru"); 
   var date = new Date();
   var dd = date.getDate(); if(dd < 10) {dd = "0" + dd;};
   var mm = date.getMonth()+1; if(mm < 10) {mm = "0" + mm;};
   chatBotMessage.setText("Сегодня " + dd + "/" + mm + "/" + date.getFullYear() + ".");
   chatBotMessage.setRelevance(this.getRelevance()); 
  } else if(message.search("какое сейчас число") > -1 
						  || message.search("какое сегодня число") > -1 
						  || message.search("какое число") > -1 
						  || message.search("число какое") > -1) { 
   chatBotMessage.setLanguage("ru");
   chatBotMessage.setText("Сегодня " + (new Date()).getDate() + ".");
   chatBotMessage.setRelevance(this.getRelevance()); 
  } else if(message.search("какой сейчас месяц") > -1 
						  || message.search("какой сегодня месяц") > -1 
						  || message.search("какой месяц") > -1 
						  || message.search("месяц какой") > -1) { 
   chatBotMessage.setLanguage("ru");
   chatBotMessage.setText("Сейчас " + (new su.bot.kisa.javascript.util.Time()).getMonth() + ".");
   chatBotMessage.setRelevance(this.getRelevance()); 
  } else if(message.search("какой сейчас год") > -1 
						  || message.search("какой сегодня год") > -1 
						  || message.search("какой год") > -1 
						  || message.search("год какой") > -1) { 
   chatBotMessage.setLanguage("ru");
   chatBotMessage.setText("Сейчас " + (new Date()).getFullYear() + " год.");
   chatBotMessage.setRelevance(this.getRelevance()); 
  }; 
  return chatBotMessage; 
 };
};