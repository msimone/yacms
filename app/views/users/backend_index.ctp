<div id="column_left">
</div>
<div id="column_right">
    
    <?php $session->flash(); ?>
    
    <table id="model-display" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th style="-moz-border-radius: 10px 0 0 0; -webkit-border-radius: 10px 0 0 0;"><?=$paginator->sort(__('First name', 1), 'first_name')?></th>
                <th><?=$paginator->sort(__('Last name', 1), 'last_name')?></th>
                <th><?=$paginator->sort(__('Username', 1), 'username')?></th>
                <th><?=$paginator->sort(__('Active', 1), 'active')?></th>
                <th style="-moz-border-radius: 0 10px 0 0; -webkit-border-radius: 0 10px 0 0;"><?=__('Actions', 1)?></th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach($users as $user) { ?>
                <tr <?=($i++ % 2) ? 'class="odd"' : ''?>>
                    <td><?=$user['User']['first_name']?></td>
                    <td><?=$user['User']['last_name']?></td>
                    <td><?=$user['User']['username']?></td>
                    <td>
                        <?php
                            echo $user['User']['active'] ?
                            $html->link(null, array('controller'=>'users', 'action' => 'toggle', $user['User']['id']), array('class' => 'button-32px button-32px-active'), null) :
                            $html->link(null, array('controller'=>'users', 'action' => 'toggle', $user['User']['id']), array('class' => 'button-32px button-32px-inactive'), null);
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $html->link(null, array('controller' => 'users', 'action' => 'edit', $user['User']['id']), array('class' => 'button-32px button-32px-edit'), null);
                            echo $html->link(null, array('controller' => 'users', 'action' => 'remove', $user['User']['id']), array('class' => 'button-32px button-32px-remove'), __('Are you sure you want to remove this user?', 1));
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">
                    <?=$paginator->prev('', array('class' => 'button-32px button-32px-previous'), null, array('class' => 'button-32px button-32px-previous disabled'))?>
                    <?=$paginator->next('', array('class' => 'button-32px button-32px-next'),     null, array('class' => 'button-32px button-32px-next disabled'))?>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

<script>

function toggle(e)
{
    jQuery.post($(e).attr('href'));
    $(e).toggleClass('button-32px-active').toggleClass('button-32px-inactive');
    
    return false;
}

$(function()
{
    $('.button-32px-active').click(function() { return toggle(this); });
    $('.button-32px-inactive').click(function() { return toggle(this); });
});
</script>
