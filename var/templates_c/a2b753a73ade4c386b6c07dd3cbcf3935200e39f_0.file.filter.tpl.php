<?php
/* Smarty version 3.1.47, created on 2023-01-25 17:22:09
  from '/var/www/html/modules/calls_detail/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63d117e954e7e2_27137919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2b753a73ade4c386b6c07dd3cbcf3935200e39f' => 
    array (
      0 => '/var/www/html/modules/calls_detail/themes/default/filter.tpl',
      1 => 1674451780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d117e954e7e2_27137919 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <td width="10%"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
: </td>
        <td><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
 <input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" /></td>
        <td><?php echo $_smarty_tpl->tpl_vars['calltype']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['calltype']->value['INPUT'];?>
 <input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" /></td>
    </tr>
    <tr class="letra12">
        <td><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['agent']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['agent']->value['INPUT'];?>
</td>
    </tr>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['phone']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['phone']->value['INPUT'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['queue']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['queue']->value['INPUT'];?>
</td>
    </tr>
<?php if ($_smarty_tpl->tpl_vars['INCOMING_CAMPAIGN']->value || $_smarty_tpl->tpl_vars['OUTGOING_CAMPAIGN']->value) {?>
    <tr>
        <td colspan="2">&nbsp;</td>
        <?php if ($_smarty_tpl->tpl_vars['INCOMING_CAMPAIGN']->value) {?>
        <td><?php echo $_smarty_tpl->tpl_vars['id_campaign_in']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['id_campaign_in']->value['INPUT'];?>
</td>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['OUTGOING_CAMPAIGN']->value) {?>
        <td><?php echo $_smarty_tpl->tpl_vars['id_campaign_out']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['id_campaign_out']->value['INPUT'];?>
</td>
        <?php }?>
    </tr>
<?php }?>
</table>

<?php }
}
