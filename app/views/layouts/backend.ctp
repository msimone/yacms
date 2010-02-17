<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title><?=$title_for_layout?></title>
    
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
    
    <link rel="shortcut icon" href="/img/backend/favicon.png" />
    <link rel="icon" type="image/png" href="/img/backend/favicon.png" />
    
    <link rel="stylesheet" type="text/css" href="/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/css/backend/forms.css" />
    <link rel="stylesheet" type="text/css" href="/css/backend/tables.css" />
    <link rel="stylesheet" type="text/css" href="/css/backend/default.css" />
    
    <script type="text/javascript" src="/js/jquery-1.4.min.js">
    </script>
    
    <script type="text/javascript" src="/js/tinymce/jquery.tinymce.js">
    </script>
    
    <script type="text/javascript" src="/js/clock.js">
    </script>
  </head>
  <body>    
    <?php if ($session->check('Auth.User')) { ?>
        <?=$this->element('backend/menu');?>
    <?php } ?>
    
    <div id="content">
        <?=$content_for_layout?>
        <div style="clear: both;"></div>
    </div>
    
    <script type="text/javascript">
    // <![CDATA[
    
    $(function()
    {
        clock_draw_date('#clock-date', '%m %d, %y');
        clock_draw_time('#clock-time', '%H:%M:%S');
        
      /*
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
                                            $('#menu-button-close').toggleClass('active');
                                            $('#menu').animate({top: '-' + $('#menu').css('height'), opacity: '0'}, 'slow');
                                            $('#content').animate({top: '-' + $('#menu').css('height')}, 'slow');
                                       },
                                       function()
                                       {
                                            $('#menu-button-close').toggleClass('active');
                                            $('#menu').animate({top: '0', opacity: '1'}, 'slow');
                                            $('#content').animate({top: '0', opacity: '1'}, 'slow');
                                       });
      */
    });
    
    // ]]>
    </script>
    
  </body>
</html>