<?php
/* Smarty version 3.1.47, created on 2023-01-24 14:05:29
  from '/var/www/html/modules/dashboard/themes/default/appletgrid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63cf9851bfac97_61116540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e765a88879f557e54568c080155f09d6ad4f031c' => 
    array (
      0 => '/var/www/html/modules/dashboard/themes/default/appletgrid.tpl',
      1 => 1674451778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63cf9851bfac97_61116540 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="80%" cellspacing="0" id="applet_grid" align="center">
<tr>
    <td class="appletcolumn" id="applet_col_1">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['applet_col_1']->value, 'applet');
$_smarty_tpl->tpl_vars['applet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['applet']->value) {
$_smarty_tpl->tpl_vars['applet']->do_else = false;
?>
        <div class='appletwindow' id='portlet-<?php echo $_smarty_tpl->tpl_vars['applet']->value['code'];?>
'>
            <div class='appletwindow_topbar'>
                <div class='appletwindow_title' width='80%'><!-- <img src='modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/<?php echo $_smarty_tpl->tpl_vars['applet']->value['applet'];?>
/images/<?php echo $_smarty_tpl->tpl_vars['applet']->value['icon'];?>
' align='absmiddle' />&nbsp;--><?php echo $_smarty_tpl->tpl_vars['applet']->value['name'];?>
</div>
                <div class='appletwindow_widgets' align='right' width='10%'>
                    <a class='appletrefresh'>
                        <i class="fa fa-refresh" style="color:#aaa"></i>
                    </a>
                </div>
            </div>
            <div class='appletwindow_content' id='<?php echo $_smarty_tpl->tpl_vars['applet']->value['code'];?>
'>
                <div class='appletwindow_wait'><img src='/themes/tenant/images/issabel_logo_pattern.png' class="imageSpin"></div>
                <div class='appletwindow_fullcontent'></div>
            </div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </td>
    <td class="appletcolumn" id="applet_col_2">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['applet_col_2']->value, 'applet');
$_smarty_tpl->tpl_vars['applet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['applet']->value) {
$_smarty_tpl->tpl_vars['applet']->do_else = false;
?>
        <div class='appletwindow' id='portlet-<?php echo $_smarty_tpl->tpl_vars['applet']->value['code'];?>
'>
            <div class='appletwindow_topbar'>
                <div class='appletwindow_title' width='80%'><!-- <img src='modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/<?php echo $_smarty_tpl->tpl_vars['applet']->value['applet'];?>
/images/<?php echo $_smarty_tpl->tpl_vars['applet']->value['icon'];?>
' align='absmiddle' />&nbsp;--><?php echo $_smarty_tpl->tpl_vars['applet']->value['name'];?>
</div>
                <div class='appletwindow_widgets' align='right' width='10%'>
                    <a class='appletrefresh'>
                        <i class="fa fa-refresh" style="color:#aaa"></i>
                    </a>
                </div>
            </div>
            <div class='appletwindow_content' id='<?php echo $_smarty_tpl->tpl_vars['applet']->value['code'];?>
'>
                <div class='appletwindow_wait'><img src='/themes/tenant/images/issabel_logo_pattern.png' class="imageSpin"></div>
                <div class='appletwindow_fullcontent'></div>
            </div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </td>
</tr>
</table>
<?php }
}
