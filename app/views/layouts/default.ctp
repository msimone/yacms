<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head profile="http://www.w3.org/2000/08/w3c-synd/#">
    
    <title><?=$title_for_layout?></title>
    
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
    
    <link rel="stylesheet" type="text/css" href="/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/css/backend/default.css" />
    
    <link rel="shortcut icon" href="/img/backend/favicon.png" />
    <link rel="icon" type="image/png" href="/img/backend/favicon.png" />
    
    <script src="/js/jquery-1.4.min.js" type="text/javascript"></script>
    <script src="/js/ifx.js" type="text/javascript"></script>
  </head>
  <body xml:lang="en">
    
    <?php /*if ($session->check('Auth.User.id')) { */?>
        <?=$this->element('backend/menu')?>
    <?php /*}*/ ?>
    
    <div id="content">
      <?=$content_for_layout?>
      <div style="clear: both;"></div>
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
      
      $('#menu-button-<?=$this->params['controller']?>').addClass('menu-button-active');
      $('a', $('#menu-button-<?=$this->params['controller']?>')).addClass('menu-button-icon-active');
      
      $('.menu-button-icon').hover(function() { $(this).animate({className: 'menu-button-icon-hover'}, 'normal'); },
                                   function() { $(this).animate({className: 'menu-button-icon'}, 'normal'); });
      
      $('.menu-button-icon selectable').click(function()
      {
        $('.menu-button').removeClass('menu-button-active');
        $('.menu-button-icon').removeClass('menu-button-icon-active');
        
        $(this).addClass('menu-button-active');
        $(this).parent().addClass('menu-button-icon-active');
      });
      
      $('#menu-button-close').toggle(function()
                                     {
                                        $('#menu').animate({top: '-' + $('#menu').css('height'), opacity: '0'}, 'slow');
                                        $('#content').animate({top: '-' + $('#menu').css('height')}, 'slow');
                                        $('#menu-button-close').attr('id', 'menu-button-close-selected');
                                     },
                                     function()
                                     {
                                        $('#menu').animate({top: '0', opacity: '1'}, 'slow');
                                        $('#content').animate({top: '0', opacity: '1'}, 'slow');
                                        $('#menu-button-close-selected').attr('id', 'menu-button-close');
                                     });
    });
    // ]]>
    </script>
    
  </body>
</html>