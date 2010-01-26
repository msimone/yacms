<div id='column_left'>
</div>
<div id='column_right'>
    <?php
        $session->flash();
        echo $form->create('Page', array('id' => 'pages-form', 'url' => $html->url()));
        
        echo $form->input('page_title', array('label' => __('Page Title:', 1)));
        echo $form->input('menu_title', array('label' => __('Menu Title:', 1)));
        echo $form->input('slug',       array('label' => __('Slug:', 1)));
        echo $form->input('content',    array('label' => __('Content:', 1), 'class' => 'ckeditor'));
        
        echo $form->end('Save');
    ?>
</div>