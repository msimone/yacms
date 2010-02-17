var date_refresh_rate = 10000;
var time_refresh_rate = 1000;

var months =
[
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
];

function clock_draw_date(selector, format_str)
{
    var fmt = format_str;
    var date = new Date();
    
    var d = date.getDate();
    var m = months[date.getMonth()];
    var y = date.getFullYear();
    
    fmt = fmt.replace('%d', d).replace('%m', m).replace('%y', y);
    $(selector).html(fmt);
    
    setTimeout(function() { clock_draw_date(selector, format_str); selector = null; format_str = null; }, date_refresh_rate);
}

function clock_draw_time(selector, format_str)
{
    var fmt = format_str;
    var date = new Date();
    
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    
    if (h < 10) h = '0' + h;
    if (m < 10) m = '0' + m;
    if (s < 10) s = '0' + s;
    
    fmt = fmt.replace('%H', h).replace('%M', m).replace('%S', s);
    
    $(selector).html(fmt);
    
    setTimeout(function() { clock_draw_time(selector, format_str); selector = null; format_str = null; }, time_refresh_rate);
}
