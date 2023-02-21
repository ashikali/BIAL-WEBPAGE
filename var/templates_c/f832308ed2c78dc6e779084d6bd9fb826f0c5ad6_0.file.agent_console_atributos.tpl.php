<?php
/* Smarty version 3.1.47, created on 2023-02-17 14:07:39
  from '/var/www/html/modules/agent_console/themes/default/agent_console_atributos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ef3cd35d4be2_68020923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f832308ed2c78dc6e779084d6bd9fb826f0c5ad6' => 
    array (
      0 => '/var/www/html/modules/agent_console/themes/default/agent_console_atributos.tpl',
      1 => 1674451778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ef3cd35d4be2_68020923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/usr/share/php/Smarty/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<table border="0">
    <tbody>
        <tr>
            <td><label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LBL_NOMBRE_CAMPANIA']->value, ENT_QUOTES, 'UTF-8', true);?>
: </label></td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TEXTO_NOMBRE_CAMPANIA']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
        </tr>
        <tr>
            <td><label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LBL_CALL_ID']->value, ENT_QUOTES, 'UTF-8', true);?>
: </label></td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TEXTO_CALL_ID']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
        </tr>
    <?php if ($_smarty_tpl->tpl_vars['CALLINFO_CALLTYPE']->value == 'incoming') {?>
        <tr>
            <td><label for="llamada_entrante_contacto_telefono"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LBL_CONTACTO_TELEFONO']->value, ENT_QUOTES, 'UTF-8', true);?>
: </label></td>
            <td><span id="llamada_entrante_contacto_telefono"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TEXTO_CONTACTO_TELEFONO']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
        </tr>
        <tr>
            <td><label for="llamada_entrante_contacto_id"><?php echo $_smarty_tpl->tpl_vars['LBL_CONTACTO_SELECT']->value;?>
: </label></td>
            <td>
              <select
                  name="llamada_entrante_contacto_id"
                  id="llamada_entrante_contacto_id"
                  class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['LISTA_CONTACTOS']->value),$_smarty_tpl);?>

              </select>
              <button id="btn_confirmar_contacto"><?php echo $_smarty_tpl->tpl_vars['BTN_CONFIRMAR_CONTACTO']->value;?>
</button>
            </td>
        </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['CALLINFO_CALLTYPE']->value == 'outgoing') {?>
        <tr>
            <td><label for="llamada_entrante_contacto_telefono"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LBL_CONTACTO_TELEFONO']->value, ENT_QUOTES, 'UTF-8', true);?>
: </label></td>
            <td><span id="llamada_entrante_contacto_telefono"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TEXTO_CONTACTO_TELEFONO']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
        </tr>
        <tr>
            <td><label for="llamada_saliente_nombres"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LBL_CONTACTO_NOMBRES']->value, ENT_QUOTES, 'UTF-8', true);?>
: </label></td>
            <td><span id="llamada_saliente_nombres"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TEXTO_CONTACTO_NOMBRES']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
        </tr>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ATRIBUTOS_LLAMADA']->value, 'ATRIBUTO');
$_smarty_tpl->tpl_vars['ATRIBUTO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ATRIBUTO']->value) {
$_smarty_tpl->tpl_vars['ATRIBUTO']->do_else = false;
?>
        <tr>
            <td><label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ATRIBUTO']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
: </label></td>
            <td><?php echo $_smarty_tpl->tpl_vars['ATRIBUTO']->value['value'];?>
</td>        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table><?php }
}
