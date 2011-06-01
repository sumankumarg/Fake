var deferredContent = function(retries) {
  var script    = $('posterous_initialization_script');
  var postData  = (script.readAttribute('data-post-data'));
  var postsData = (script.readAttribute('data-posts-data'));
  var url       = script.readAttribute('data-posterous-deferred-content-url');

  data = {
    authenticity_token: window._token,
    referrer: window.location.href
  };
  
  if (postData !== null) {
    data["post"] = postData;
  }
  
  if (postsData !== null) {
    data["posts"] = postsData;
  }

  $j.jsonp({
    url: url,
    data: data,
    success: function(json) {
      if (window.p) {
        p.makeDeferredCallbacks(json);
      } else {
        document.observe('posterous:initialized', function() {
          p.makeDeferredCallbacks(json);
        });
      }
    },
    error: function() {
      if (retries < 3) {
        retries++;
        deferredContent(retries);
      }
    }
  });
};

deferredContent(0);
