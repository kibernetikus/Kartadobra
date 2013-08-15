/***********************************************************************************************************
 * com.oclib.javascript.util.events.20070110. Events
 * Location: http://www.oclib.com/library/com/oclib/javascript/util/Events.js
 * Version Location: http://www.oclib.com/library/com/oclib/javascript/util/events/20070110/.js
 * Index Version Location: http://www.oclib.com/library/com/oclib/javascript/util/events/20070110/index.html
 * © Open Class Library (http://www.oclib.com/)
***********************************************************************************************************/
if (typeof com == "undefined") {com = {};};
if (typeof com.oclib == "undefined") {com.oclib = {};};
if (typeof com.oclib.javascript == "undefined") {com.oclib.javascript = {};};
if (typeof com.oclib.javascript.util == "undefined") {com.oclib.javascript.util = {};};

if (typeof com.oclib.javascript.util.Events == "undefined") {
 com.oclib.javascript.util.Events = function() {};

 com.oclib.javascript.util.Events.prototype = new com.oclib.javascript.lang.Root();

 com.oclib.javascript.util.Events.prototype.className = "Events"; 
 com.oclib.javascript.util.Events.prototype.classNamespace = "com.oclib.javascript.util.Events"; 
 com.oclib.javascript.util.Events.prototype.classCreated = "20061018"; 
 com.oclib.javascript.util.Events.prototype.classCreator = "http://www.oclib.com/"; 
 com.oclib.javascript.util.Events.prototype.classLocation = "http://www.oclib.com/library/com/oclib/javascript/util/Events.js"; 
 com.oclib.javascript.util.Events.prototype.classIndexLocation = "http://www.oclib.com/library/com/oclib/javascript/util/events/"; 
 com.oclib.javascript.util.Events.prototype.classVersion = "20070110"; 
 com.oclib.javascript.util.Events.prototype.classVersionLocation = "http://www.oclib.com/library/com/oclib/javascript/util/events/20070110/Events.js"; 
 com.oclib.javascript.util.Events.prototype.classVersionIndexLocation = "http://www.oclib.com/library/com/oclib/javascript/util/events/20070110/"; 


 /**
  * Events.addEventListener
  * Parameter: element of type DOMString or Element - Element or Name of element.
  * Parameter: type of type DOMString - The event type for which the user is registering
  * Parameter: listener of type EventListener - The listener parameter takes an interface implemented by the user which contains the methods to be called when the event occurs.
  * Parameter: useCapture of type boolean - If true, useCapture indicates that the user wishes to initiate capture. After initiating capture, all events of the specified type will be dispatched to the registered EventListener before being dispatched to any EventTargets beneath them in the tree. Events which are bubbling upward through the tree will not trigger an EventListener designated to use capture.
  * Return: void
  * See more: <a href="http://www.w3.org/TR/2000/REC-DOM-Level-2-Events-20001113/events.html#Events-registration">http://www.w3.org/TR/2000/REC-DOM-Level-2-Events-20001113/events.html#Events-registration</a>
  * See more: <a href="http://developer.mozilla.org/en/docs/DOM:element.addEventListener">http://developer.mozilla.org/en/docs/DOM:element.addEventListener</a>
  */
 com.oclib.javascript.util.Events.prototype.addEventListener = function(element, type, listener, useCapture) {
  if(this.mustTrace()) {this.getLog().println("Events.addEventListener is runing...");}; 
  if(typeof element == "string") {element = document.getElementById(element)}; 
  if(!element) {return -1;};
  if(element.addEventListener) {
   element.addEventListener(type, listener, useCapture);
  } else if(element.attachEvent) {
   eventIE = "on"+type;
   element.attachEvent(eventIE, listener);
  } else {
   return -1;
  };
 };
 
 /**
  * Events.removeEventListener
  * Parameter: element of type DOMString or Element - Element or Name of element.
  * Parameter: type of type DOMString - Specifies the event type of the EventListener being removed.
  * Parameter: listener of type EventListener - The EventListener parameter indicates the EventListener to be removed.
  * Parameter: useCapture of type boolean - Specifies whether the EventListener being removed was registered as a capturing listener or not. If a listener was registered twice, one with capture and one without, each must be removed separately. Removal of a capturing listener does not affect a non-capturing version of the same listener, and vice versa.
  * Return: void
  * See more: <a href="http://www.w3.org/TR/2000/REC-DOM-Level-2-Events-20001113/events.html#Events-registration">http://www.w3.org/TR/2000/REC-DOM-Level-2-Events-20001113/events.html#Events-registration</a>
  * See more: <a href="http://developer.mozilla.org/en/docs/DOM:element.removeEventListener">http://developer.mozilla.org/en/docs/DOM:element.removeEventListener</a>
  */
 com.oclib.javascript.util.Events.prototype.removeEventListener = function(element, type, listener, useCapture) {
  if(this.mustTrace()) {this.getLog().println("Events.removeEventListener is runing...");}; 
  if(typeof element == "string") {element = document.getElementById(element)}; 
  if(!element) {return -1;};
  if(element.removeEventListener) {
   element.removeEventListener(type, listener, useCapture);
  } else if (element.detachEvent) {
   eventIE = "on"+type;
   element.detachEvent(eventIE, listener);
  } else {
   return -1;
  };
 };
};