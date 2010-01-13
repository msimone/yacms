<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
  <head profile="http://www.w3.org/2000/08/w3c-synd/#">
    
    <title><?=$title_for_layout?></title>
    
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    
    <link rel="stylesheet" type="text/css" href="/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/css/backend/default.css" />
    
    <link rel="shortcut icon" href="/img/backend/favicon.png" />
    <link rel="icon" type="image/png" href="/img/backend/favicon.png" />
    
    <script src="/js/jquery-1.3.2.min.js" type="text/javascript"></script>
    
    <script src="/js/ifx.js" type="text/javascript"></script>
  </head>
  <body xml:lang="en">
    <div id="menu-close">
    </div>
    <div id="menu">
      <div id="clock">
        <div id="clock-time">
        </div>
        <div id="clock-date">
        </div>
      </div>
      
      <div class="menu-button-background">
        <div class="menu-button">
        </div>
      </div>
      
      <div class="menu-button-background">
        <div class="menu-button">
        </div>
      </div>
      
      <div class="menu-button-background">
        <div class="menu-button">
        </div>
      </div>
      
      <div class="menu-button-background">
        <div class="menu-button">
        </div>
      </div>
      
    </div>
    <div id="content">
      <?=$content_for_layout?>
    </div>
    <script type="text/javascript">
    // <![CDATA[
    var months = ['January',  'February', 'March',    'April',
                  'May',      'June',     'July',     'August',
                  'September','October',  'November', 'December'];
    
    function refresh_clock()
    {
      var date = new Date();
      
      var hours   = date.getHours();
      var minutes = date.getMinutes();
      var seconds = date.getSeconds();
      
      var day   = date.getDate();
      var month = months[date.getMonth()];
      var year  = date.getFullYear();
      
      if (hours < 10)   hours   = '0' + hours;
      if (minutes < 10) minutes = '0' + minutes;
      if (seconds < 10) seconds = '0' + seconds;
      
      $('#clock-time').html(hours + ':' + minutes + ':' + seconds);
      $('#clock-date').html(month + ' ' + day + ', ' + year);
      
      setTimeout('refresh_clock()', 1000);
    }
    
    $(function()
    {
      refresh_clock();
      
      
      $('.menu-button').hover(
        
        function() {
          
          $(this).animate({className: 'menu-button-hover'}, 'normal');
          
          
          },
        function() {
          
          $(this).animate({className: 'menu-button'}, 'normal');
          
        }
        
      );
      
      
      
      $('#menu-close').click(function()
      {
        var menu = $('#menu');
        var content = $('#content');
        
        if (menu.attr('disabled'))
        {
          menu.removeAttr('disabled');
          menu.animate({top: '0', opacity: '1'}, 'normal');
          content.animate({top: '0', opacity: '1'}, 'normal');
          $('#menu-close-selected').attr('id', 'menu-close');
        }
        else
        {
          menu.attr('disabled', 'disabled');
          menu.animate({top: '-' + menu.css('height'), opacity: '0'}, 'normal');
          content.animate({top: '-' + menu.css('height')}, 'normal');
          $('#menu-close').attr('id', 'menu-close-selected');
        }
      });
    });
    // ]]>
    </script>
  </body>
</html>