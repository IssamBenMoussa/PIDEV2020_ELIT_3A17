
$(document).ready(function () {
    var url='https://api.openweathermap.org/data/2.5/forecast?';
    var weatherDiv = $('.weather');
    var weather = function () {
        $.ajax({
            url: url,
            data: {
                //main parameters
                q : 'tunis',
                appid : '92a1a30c76d9df27ab451e77adf22b3b',
                units : 'metric'

            },
            success: function (json) {
                var l = json['list']; //list of all times
                var st= $('#dateEvent').val();
                var eventDate = new Date(st);
                var initD = new Date(l[0]['dt_txt']);
                var diff =  Math.abs(initD.getTime()-eventDate.getTime());
                var index = 0;
                for (i=1;i<json['cnt'];i++)
                {
                    /*     alert('temp = '+l[i]['main']['temp']+' Description '+l[i]['weather'][0]['description']
                             +' date '+l[i]['dt_txt']+' icon : '+l[i]['weather'][0]['icon']+'.png');*/
                    var dateApi = new Date(l[i]['dt_txt']);
                    var x = Math.abs(dateApi.getTime()-eventDate.getTime());
                    if(x<diff) // get minimum diff index
                    {
                        initD = dateApi;
                        diff=x;
                        index = i;
                    }
                }
                weatherDiv.append($('<img>').attr('src','http://openweathermap.org/img/wn/'+l[index]['weather'][0]['icon']+'.png'));
                weatherDiv.append($('<p>').text(l[index]['weather'][0]['description']).attr('style','font-family: impact'));
                weatherDiv.append($('<p>').text('Temperature : '+Math.floor(l[index]['main']['temp'])+'°C').attr('style','font-family: monospace'));
            }
        })
    };
    weather();



});