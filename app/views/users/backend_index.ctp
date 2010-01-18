<div id="column_left">
</div>

<div id="column_right">
    
    <?php $session->flash(); ?>
    
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th style="-moz-border-radius: 10px 0 0 0; -webkit-border-radius: 10px 0 0 0;">
                    <?=$paginator->sort(__('First name', 1), 'first_name')?>
                </th>
                <th>
                    <?=$paginator->sort(__('Last name', 1), 'last_name')?>
                </th>
                <th>
                    <?=$paginator->sort(__('Username', 1), 'username')?>
                </th>
                <th>
                    <?=$paginator->sort(__('Active', 1), 'active')?>
                </th>
                <th style="-moz-border-radius: 0 10px 0 0; -webkit-border-radius: 0 10px 0 0;">
                    <?=__('Actions', 1)?>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach($users as $user) { ?>
                <tr <?php if ($i++ % 2) echo 'class="odd"' ?>>
                    <td>
                        <?=$user['User']['first_name']?>
                    </td>
                    <td>
                        <?=$user['User']['last_name']?>
                    </td>
                    <td>
                        <?=$user['User']['username']?>
                    </td>
                    <td>
                        <?=$user['User']['active']?>
                    </td>
                    <td>
                        <?php
                            echo $html->link($html->image('/img/backend/edit.png', array('alt' => __('Edit', 1))),
                                             array('controller'=>'users', 'action' => 'edit',
                                             $user['User']['id']), array('escape' => false), null);
                        ?>
                        &nbsp;&nbsp;
                        <?php
                            echo $html->link($html->image('/img/backend/remove.png', array('alt' => __('Remove', 1))),
                                             array('controller'=>'users', 'action' =>'remove',
                                             $user['User']['id']), array('escape' => false),
                                             __('Are you sure you wish to delete this user', 1));
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">
                    <?=$paginator->prev($html->image('/img/backend/previous.png', array('alt' => __('Previous', 1))), array('escape' => false), null, array('escape' => false, 'class' => 'disabled'))?>
                    &nbsp;&nbsp;
                    <?=$paginator->next($html->image('/img/backend/next.png', array('alt' => __('Next', 1))), array('escape' => false), null, array('escape' => false, 'class' => 'disabled'))?>
                </td>
            </tr>
        </tfoot>
    </table>
</div>