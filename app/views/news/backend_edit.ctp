<div id='column_left'>
</div>
<div id='column_right'>
    <?php
        $session->flash();
        echo $form->create('News', array('id' => 'news-form', 'url' => $html->url()));
        
        echo $form->input('news_title', array('label' => __('News Title:', 1)));
        echo $form->input('content',    array('label' => __('Content:', 1)));
        
        echo $form->end('Save');
    ?>
</div>

<script type="text/javascript">
$(function()
{
    $('#NewsContent').tinymce(
    {
        theme: 'advanced',
        script_url : '/js/tinymce/tiny_mce.js',
        theme_advanced_toolbar_location : "top",
    });
});
</script>
