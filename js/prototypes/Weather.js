function Weather(params) {
    
    Initializable.call(this, params);
    
    var that = this;
    var url = "http://api.openweathermap.org/data/2.5/weather";
    var suffix = "&appid=44db6a862fba0b067b1930da0d769e98";
    this.position = undefined;
    var success = function(position) {
        that.position = position;
        if (typeof params.success === "function") {
            params.success(position);
        }
    };
    
    if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
          success, 
          params.failure,
          { 
              enableHighAccuracy: this.initialize("enableHighAccuracy", true), 
              timeout: this.initialize("timeout", 10000), 
              maximumAge: this.initialize("maximumAge", 0)
          }
        );
    } else {
        params.failure();
    }
    
    this.registerEvent = function(context, event, callback, key, gather) {
        context[event](function(e) {
            if (!(that.position || key)) {
                return "Missing params";
            }
            var middle = (!key) ? 
                            "?lat=" + that.position.coords.latitude + "&lon=" + that.position.coords.longitude : 
                            "?" + key + "=" + gather();
            $.ajax({
                url: url + middle + suffix,
                method: "POST",
                success: callback
            });
        });
    };
    
}