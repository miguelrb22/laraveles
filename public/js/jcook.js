var COOKIES = 
{	
		createCookie: function (name,value,days) {
				// days:  days the cookie lasts;  0: until the browser is closed, NEGATIVE VALUE, inmediatly
				if (days) {
					var date = new Date();
					date.setTime(date.getTime()+(days*24*60*60*1000));
					var expires = "; expires="+date.toGMTString();
				}
				else var expires = "";
				if( this.isOpera() ) value = value.replace(/\"/gi, "'");
				document.cookie = name+"="+value+expires+"; path=/";
		},
		readCookie:	function (name) {
				var nameEQ = name + "=";
				var ca = document.cookie.split(';');
				for(var i=0;i < ca.length;i++) {
					var c = ca[i];
					while (c.charAt(0)==' ') c = c.substring(1,c.length);
					if (c.indexOf(nameEQ) == 0){ 
						ret = c.substring(nameEQ.length,c.length);
						if( this.isOpera() ){
							ret = ret.toString().replace(/\'/gi, '"');
						}
						return ret;	
					}
				}
				return null;
		},
		eraseCookie: function (name) {
				this.createCookie(name,"",-1);
		},
		isOpera: function(){
			return (window.navigator.userAgent.toLowerCase().indexOf("presto")>-1?true:false);
		}
			
}