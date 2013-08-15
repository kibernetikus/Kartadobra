//timers
jQuery.fn.extend({
	everyTime: function(interval, label, fn, times, belay) {
		return this.each(function() {
			jQuery.timer.add(this, interval, label, fn, times, belay);
		});
	},
	oneTime: function(interval, label, fn) {
		return this.each(function() {
			jQuery.timer.add(this, interval, label, fn, 1);
		});
	},
	stopTime: function(label, fn) {
		return this.each(function() {
			jQuery.timer.remove(this, label, fn);
		});
	}
});

jQuery.extend({
	timer: {
		guid: 1,
		global: {},
		regex: /^([0-9]+)\s*(.*s)?$/,
		powers: {
			// Yeah this is major overkill...
			'ms': 1,
			'cs': 10,
			'ds': 100,
			's': 1000,
			'das': 10000,
			'hs': 100000,
			'ks': 1000000
		},
		timeParse: function(value) {
			if (value == undefined || value == null)
				return null;
			var result = this.regex.exec(jQuery.trim(value.toString()));
			if (result[2]) {
				var num = parseInt(result[1], 10);
				var mult = this.powers[result[2]] || 1;
				return num * mult;
			} else {
				return value;
			}
		},
		add: function(element, interval, label, fn, times, belay) {
			var counter = 0;

			if (jQuery.isFunction(label)) {
				if (!times)
					times = fn;
				fn = label;
				label = interval;
			}

			interval = jQuery.timer.timeParse(interval);

			if (typeof interval != 'number' || isNaN(interval) || interval <= 0)
				return;

			if (times && times.constructor != Number) {
				belay = !!times;
				times = 0;
			}

			times = times || 0;
			belay = belay || false;

			if (!element.$timers)
				element.$timers = {};

			if (!element.$timers[label])
				element.$timers[label] = {};

			fn.$timerID = fn.$timerID || this.guid++;

			var handler = function() {
				if (belay && this.inProgress)
					return;
				this.inProgress = true;
				if ((++counter > times && times !== 0) || fn.call(element, counter) === false)
					jQuery.timer.remove(element, label, fn);
				this.inProgress = false;
			};

			handler.$timerID = fn.$timerID;

			if (!element.$timers[label][fn.$timerID])
				element.$timers[label][fn.$timerID] = window.setInterval(handler,interval);

			if ( !this.global[label] )
				this.global[label] = [];
			this.global[label].push( element );

		},
		remove: function(element, label, fn) {
			var timers = element.$timers, ret;

			if ( timers ) {

				if (!label) {
					for ( label in timers )
						this.remove(element, label, fn);
				} else if ( timers[label] ) {
					if ( fn ) {
						if ( fn.$timerID ) {
							window.clearInterval(timers[label][fn.$timerID]);
							delete timers[label][fn.$timerID];
						}
					} else {
						for ( var fn in timers[label] ) {
							window.clearInterval(timers[label][fn]);
							delete timers[label][fn];
						}
					}

					for ( ret in timers[label] ) break;
					if ( !ret ) {
						ret = null;
						delete timers[label];
					}
				}

				for ( ret in timers ) break;
				if ( !ret )
					element.$timers = null;
			}
		}
	}
});

if (jQuery.browser.msie)
	jQuery(window).one("unload", function() {
		var global = jQuery.timer.global;
		for ( var label in global ) {
			var els = global[label], i = els.length;
			while ( --i )
				jQuery.timer.remove(els[i], label);
		}
	});
	

(function($){
    //id()
    $.fn.id = function(s){
        if(!s) s = 'id';
        return parseInt($(this).attr('id').replace(s, ''));
    };
    //trim()
    $.fn.trim = function(s){
      return s.replace( /^\s+/, '').replace( /\s+$/, '');
    };
})(jQuery);

var pirdob = function ()
{
    var t = this, js_arr = [];
    // аякс
    this.g = function(dt, succ, send, compl, err)
    {
        var dg, dp = '', tp = 'JSON';
        switch(typeof dt)
        {
            case 'string': dg = dt; break;
            case 'object': 
                dg = dt.g; 
                if(dt.p) dp = dt.p; 
                if(dt.t) tp = dt.t;
        }
        $.ajax({
            url: dg[0]=='/'?dg:'/a/'+dg,
            type: 'POST',
            data: dp,
            dataType: tp,
            timeout: 10000,
            beforeSend: function(){
                if(send && $.isFunction(send)) send();
            },
            complete: function(){
                if(compl) eval(compl+'();');
            },
            success: function(response){
                if(succ){
                    var data = response;
                    if(succ && $.isFunction(succ)) succ(data);
                }
            },
            error: function(){
                if(err && $.isFunction(err)) err()
                else alert('Ошибка! Попробуйте попзжа!');
                return false;
            }
        });
    }
    //генерация случайных чисел
    this.getrandom = function(min_random, max_random) 
    {
        var range = max_random - min_random + 1;
        return Math.floor(Math.random()*range) + min_random;
    }
    //content ajax
    this.c = function(u)
    {
        var c = $('#hcontent');
        if(!c.length) return;
        c.html('<div class="hload"></div>')
       $.ajax({
            url: u,
            type: 'GET',
            dataType: 'JSON',
            timeout: 10000,
            success: function(html){
                if(!c.length||!html) return;
                c.html(html)
                t.update();
            },
            error: function(){
                c.html('Ошибка! Попробуйте позднее!')
                return false;
            }
        });
    }
    //комментарии
    this.set_comment = function(t)
    {
        var p = $('<textarea></textarea>'), b = t.parents('.commentsblock'), id = b.attr('id').replace('id', '');
        t.before(p).hide();
        p.blur(function(){
            if(p.val()!='') return;
            p.remove();
            t.show();
        }).focus().keypress(function(e){
            if(e.keyCode=='13')
            {
                var val = p.val();
                if(val=='') return;
                p.val('отправляем...').attr('disabled', true);
                j.g({g:'user/addcomment',p:'id='+id+'&t='+encodeURIComponent(val)}, function(dt){
                    p.remove();
                    t.show();
                    if(dt.err) return;
                    var bb = b.find('.commentpost:first').clone();
                    b.find('.polecomm').append(bb);
                    bb.attr('id', 'id'+dt.id);
                    bb.find('.comment').html(dt.t);
                    bb.find('.name').html(dt.n).attr('src', 'id'+dt.uid);
                    bb.find('.ava').attr('src', dt.a).css({'width':'55px','height':'55px'});
                    bb.show();
                })
                return false;
            }else if(e.keyCode=='27')
            {
                p.remove();
                t.show();
            }
        });
    },
    this.h = function(t){
        //закрываем все модальные окна
        if($('.modal').length) $('.modal').modal('hide');
        if(typeof t == 'object') t = t.href;
        history.pushState( null, null, t );
        //styles
        var s = t.replace('http://', '').split('/');
        if(s[1])
        {
            s = s[1];
            s = s.split('?');
            s = s[0];
            this.css(s+'.css');
        }
        this.c(t);
    }
    this.d = function(s) {return encodeURIComponent(s);}
    this.update = function(){
        //город
        if($('.cityblock').length)
        {
            j.js('/media/js/jquery.autocomplete.min.js', false, function(){
                $('.cityblock').each(function(){
                    var tb = $(this);
                   tb.find('#city_search').click(function(){
                       $(this).select();
                   }).autocomplete('/a/public/cities', {
                           width: 320,
                           max: 10,
                           autoFill: true,
                           scroll: true,
                           scrollHeight: 300,
                           dataType: "json",
                           parse: function(data) {
                               return $.map(data, function(row) {
                                   return {
                                       data: row,
                                       value: row.n,
                                       result: row.n
                                   }
                               });
                           },
                           formatItem: function(dt) {
                                   return dt.n+'<br/><span>'+dt.r+'</span>';
                           }
                   }).result(function(e, dt) {
                       tb.find('#city_id').val(dt.i);
                   });
                   tb.removeClass('cityblock');
               })   
               
            });
        }
        //карусель
        if($('.carousel').length)
        {
            t.js('/media/js/bootstrap-carousel.js', null, function(){
                $('.carousel').carousel().removeClass('carousel');
            });
        }
        //medias
        if($('.media_gallery').length && $('.media_gallery a').length)
        {
            t.js('/media/js/bootstrap-modal.js');
            t.html('media.php', null, function(){
                j.set_media();
            }); 
        }
        //модальные окна
        if($('[data-toggle="modal"]').length) t.js('/media/js/bootstrap-modal.js');
        //tab-ы
        if($('[data-toggle="tab"]').length) t.js('/media/js/bootstrap-tab.js');
        //history uri
        if($('#hcontent').length && $('.h').length)
        {
            t.js('/media/js/h/history.js', function(){
                $( window ).bind( "popstate", function( e ) {
                    var returnLocation = history.location || document.location;
                    j.c(returnLocation);
                });
            }, function(){
                $('.h').click(function() {
                    if(this.href) j.h(this);
                    return false;
                });
                $('.h').removeClass('h');
            });
        }
    },
    this.js = function(s,f,ff)
    {
        if($.inArray(s, js_arr)!==-1) return ff?ff():false;
        $.getScript(s,ff||f);
        js_arr.push(s);
    }
    
    this.html = function(s,f,ff)
    {
        if($.inArray(s, js_arr)!==-1) return ff?ff():false;
        this.g({g:'/media/html/'+s, t:'TEXT'}, function(dt){
            $('body').prepend(dt);
            return ff?ff():(f?f():false);
        })
        js_arr.push(s);
    }
    
    this.css = function(s)
    {
        if($.inArray(s, js_arr)!==-1) return;
        
        this.g({g:'/media/css/'+s, t:'TEXT'}, function(dt){
            $('head').prepend('<style>'+dt+'<style>');
        }, null, null, function(){});
        js_arr.push(s);
    }

}

j = new pirdob();

$.ajaxSetup({
    cache: true
});




$(document).ready(function() {
    j.update()
    $('#setcontact').click(function(){
        var t = $('#feedback'), f_name = t.find('#f_name').val(), f_email = t.find('#f_email').val(), f_text = t.find('#f_text').val();

        t.find('.modal-body').html('Сообщение отправляется, подождите...');
        j.g({g:'public/contact',p:'n='+j.d(f_name)+'&e='+j.d(f_email)+'&t='+j.d(f_text)}, function(){
            t.find('.modal-body').html('Сообщение отправлено! Ждите ответа!');
            setTimeout(function(){
                t.modal('hide');
            }, 2000)
        })
        return false;
    })
});
