	window.fbAsyncInit = function() {
	    // FB.Event.subscribe('auth.statusChange', function(response) {
	    //     console.log( "FB.Event.subscribe auth.statusChange" );
	    //     console.log( response );
	    // });
			FB.init({
					appId   : "499475773754800",
					cookie  : true,  // enable cookies to allow the server to access
									// the session
					xfbml   : true,  // parse social plugins on this page
					version : 'v2.10', // use version 2.10
					status  : true
			});
	    FB.getLoginStatus(function(response){
				// console.log(response);
				// console.log(response.authResponse);
				// console.log(response.authResponse.userID);
	   // console.log( "FB.getLoginStatus" );
					// Replace the id by any other public page id
					FB.api('/587069864797346?fields=id,name,feed{name,picture,from,type,message,link,source,event,caption}', function(response) {
						 $('.fb-feed').empty();
						 $(response.feed.data).each(function(i, post) {
							 var message = post.message;
							 var name = post.name;
							 var link = post.link;
								 if(message || name || link) {
									 var link = link;
									 var message = message;
									 var name = name;
								 } else {
									 var link = "";
									 var message = "";
									 var name = "";
								 }

								 entry = $('<div class="fb-item well"></div>');
								 switch(post.type) {
									 case 'status':
										 entry.append('<div class="fb-content">' + message + '</div>');
									 break;
									 case 'link':
										 entry.append('<div class="fb-content"><a href="' + link + '">' + name + '</a></div>');
									 break;
									 case 'event':
									 		entry.append('<h3>"' + name + '"</h3>');
									 		entry.append('<div class="fb-content">' + name + '</div>');
									 		entry.append('<div class="image" style="background-image: url(' + post.picture + ')"></div>');
									 break;
									 case 'photo':
										 entry.append('<div class="image" style="background-image: url(' + post.picture + ')" ></div>');
										 entry.append('<div class="fb-content"><a href="' + link + '">' + message + '</a></div>');
									 break;
									 case 'video':
									 	 entry.append('<h3>"' + name + '"</h3>');
										//  entry.append('<div><a href="' + link + '"></a></div>');
										 entry.append('<video width="50%" height="240" controls> <source src="' + post.source + '" type="video/mp4" >Your browser does not support the video tag.</video>');
									 break;
								 }

								 $('.fb-feed').append(entry);
						 });
					 });
	    });
		};
		// Load the SDK asynchronously
		(function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) return;
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/en_US/sdk.js";
		    fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
