var weather = {
    global: {
        snowVarName: "show_snow",
        rainVarName: "show_rain",
        weatherCityId: '1581130',
    },
    init: function() {
        weather.set_up_event();
    },
    set_up_event: function() {
        weather.set_weather();
    },
    set_weather: function() {
        let weatherAppId = '63f5126cbf2040864c5689044efa3f4b';
        $.ajax({
            url: `//api.openweathermap.org/data/2.5/weather?id=${weather.global.weatherCityId}&lang=vi&units=metric&appid=${weatherAppId}`,
            success: function(result) {
                if (result.weather[0].main.includes("Rain")) {
                    pano.setVariableValue(weather.global.rainVarName, true);
                }
                if (result.weather[0].main.includes("Snow")) {
                    pano.setVariableValue(weather.global.snowVarName, true);
                }
                let weatherHtml = `<div id="openweathermap-widget">
                                    <div id="container-openweathermap-widget">
                                        <link href="css/weather.css" rel="stylesheet">
                                        <div class="weather_w"> 
                                            <div class="widget-right weather-right--type1 widget-right--brown">
                                            <div class="widget-right__header widget-right__header--brown">
                                              <div class="widget-right__layout">
                                                <div class="weather-right__temperature">${Math.round(result.main.temp)}<span>°C</span></div>
                                                <div>
                                                  <h2 class="widget-right__title">${result.name}</h2>
                                                </div>
                                            </div>
                                            <div class="weather-right weather-right--brown">
                                              <div class="weather-right__layout">
                                                <div class="weather-right__weather">
                                                  <div class="weather-right-card">
                                                    <table class="weather-right__table">
                                                      <tbody>
                                                      <tr class="weather-right__items">
                                                        <td class="weather-right__item">Gió</td>
                                                        <td class="weather-right__item weather-right__wind-speed">${result.wind.speed} m/s </td>
                                                      </tr>
                                                      <tr class="weather-right-card__items">
                                                        <td class="weather-right__item">Độ ẩm</td>
                                                        <td class="weather-right__item weather-right__humidity">${result.main.humidity}%</td>
                                                      </tr>
                                                    </tbody></table>
                                                  </div>
                                                  </div><img src="//openweathermap.org/img/wn/${result.weather[0].icon}@2x.png" width="50" alt="Thời tiết tại ${result.name}" class="weather-right__icon weather-right__icon--type1">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>`;
                $("body").append(weatherHtml);
            }
        });
    },
}

weather.init();
