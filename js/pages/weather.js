$(function() {
    
    var obj = {};
    function type(response) {
        if (!obj.name) {
            $("#location-container").removeClass("invisible");
        }
        $("#data-time").text((new Date(response.dt * 1000)).toString());
        if (response.name !== obj.name) {
            obj.name = response.name;
            $("#city").text(obj.name);
        }
        if (response.sys.country !== obj.country) {
            obj.country = response.sys.country;
            $("#country").text(obj.country);
        }
        if (response.main.temp !== obj.temp) {
            obj.temp = response.main.temp;
            $("#current-temp").text(obj.temp);
        }
        $(".img-desc-container").remove();
        var newImages = '';
        for (var index = 0; index < response.weather.length; index++) {
            newImages += '<div class="img-desc-container">' +
                             '<img src="http://openweathermap.org/img/w/' + response.weather[index].icon + '.png" alt="">' +
                             '<span class="description">' + response.weather[index].description + '</span>' + 
                         '</div>';
        }
        $("#location-container").after(newImages);
        var details = {};
        details["Max temperature"] = response.main.temp_max;
        details["Min temperature"] = response.main.temp_min;
        details["Humidity"] = response.main.humidity;
        details["Pressure"] = response.main.pressure;
        details["Wind direction"] = response.wind.deg;
        details["Wind speed"] = response.wind.speed;
        details["Cloudness"] = response.clouds.all;
        details["Sunrise"] = new Date(response.sys.sunrise * 1000);
        details["Sunset"] = new Date(response.sys.sunset * 1000);
        details["Lat,Lon"] = response.coord.lat + "," + response.coord.lon;
        var detailStructure = '';
        for (var key in details) {
            detailStructure += '<ul>' +
                                   '<li>' + key + ': </li>' +
                                   '<li>' + details[key] + '</li>' +
                               '</ul>';
        }
        $("#weather-params").html(detailStructure);
    }
    
    var event = new Event();
    event.add("weather");
    var w = new Weather({
        successCallback: type,
        success: function() {
            w.registerEvent(event, "weather", type);
            event.weather();            
        },
        failure: function() {
            $("#main-container").removeClass("allowed");
            w.registerEvent(event, "weather", type, "q", gather);
            w.registerEvent($("#weather-button"), "click", type, "q", gather);
            $(".form").keyup(function (e) {
                if (e.keyCode == 13) {
                    event.weather();
                }
            });
        }
    });
    function gather() {
        return $("#input").val();
    }
    
    
});