<?php
/* Smarty version 3.1.47, created on 2023-02-24 18:05:25
  from '/var/www/html/modules/hold_time/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63f8af0d687536_76184464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '156473e5985a74ea49b59d5fe2e6073b91751af1' => 
    array (
      0 => '/var/www/html/modules/hold_time/themes/default/filter.tpl',
      1 => 1674451779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f8af0d687536_76184464 (Smarty_Internal_Template $_smarty_tpl) {
?><table width='100%' border='0'>
    <tr>
        <td align='left'>
            <table>
            <tr>
                <td class='letra12'>
                    <?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>

                    <span  class='required'>*</span>
                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>

                </td>
                <td class='letra12'>
                    &nbsp;
                </td>
                <td class='letra12'>
                    <?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>

                    <span  class='required'>*</span>
                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>

                </td>
                <td>&nbsp;</td>
            </tr>

            <tr>
                <td class='letra12' align='left'><?php echo $_smarty_tpl->tpl_vars['call_type']->value['LABEL'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['call_type']->value['INPUT'];?>
</td>
                <td class='letra12'>
                    &nbsp;
                </td>
                <td class='letra12' align='left'><?php echo $_smarty_tpl->tpl_vars['call_state']->value['LABEL'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['call_state']->value['INPUT'];?>
</td>
                <td>
                    <input type='submit' name='submit_fecha' value="<?php echo $_smarty_tpl->tpl_vars['LABEL_FIND']->value;?>
" class='button'>
                </td>
            </tr>
            </table>
        </td>
    </tr>
</table>
<?php }
}
