<?php
/* Smarty version 3.1.47, created on 2023-02-24 15:04:29
  from '/var/www/html/modules/calls_per_hour/themes/default/filter-calls.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63f884a5caaff6_35363195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d3a63944136a6227b12c666aaae7d91f6378447' => 
    array (
      0 => '/var/www/html/modules/calls_per_hour/themes/default/filter-calls.tpl',
      1 => 1674451780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f884a5caaff6_35363195 (Smarty_Internal_Template $_smarty_tpl) {
?>    <table width='100%' border='0'>
                <tr>
                    <td class='letra12'><?php echo $_smarty_tpl->tpl_vars['fecha_ini']->value['LABEL'];?>
<span  class='required'>*</span></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fecha_ini']->value['INPUT'];?>
</td>
                    <td class='letra12'><?php echo $_smarty_tpl->tpl_vars['fecha_fin']->value['LABEL'];?>
<span  class='required'>*</span></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fecha_fin']->value['INPUT'];?>
</td>
                    <td class='letra12' colspan="2">&nbsp;</td>
                    <td><input type='submit' name='submit_fecha' value='<?php echo $_smarty_tpl->tpl_vars['LABEL_FIND']->value;?>
' class='button' /></td>
                </tr>
                <tr>
                    <td class='letra12' align='left'><?php echo $_smarty_tpl->tpl_vars['tipo']->value['LABEL'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tipo']->value['INPUT'];?>
</td>
                    <td class='letra12' align='left'><?php echo $_smarty_tpl->tpl_vars['estado']->value['LABEL'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['estado']->value['INPUT'];?>
</td>
                    <td class='letra12' align='left'><?php echo $_smarty_tpl->tpl_vars['queue']->value['LABEL'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['queue']->value['INPUT'];?>
</td>
                    <td class='letra12'>&nbsp;</td>
                </tr>
    </table>

<?php }
}
