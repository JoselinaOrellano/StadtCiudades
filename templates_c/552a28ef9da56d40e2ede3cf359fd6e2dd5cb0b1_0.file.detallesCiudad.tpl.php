<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 04:18:52
  from 'C:\xampp\htdocs\StadtCiudades\templates\detallesCiudad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edef18c9ae693_80336742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '552a28ef9da56d40e2ede3cf359fd6e2dd5cb0b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\StadtCiudades\\templates\\detallesCiudad.tpl',
      1 => 1591669129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_5edef18c9ae693_80336742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="card mb-3 tamañotarjeta">
  <img src="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->imagen;?>
" class="card-img-top" alt="..."  width="85%" height="500px">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['ciudad']->value->nombre;?>
</h5>
    <h6><?php echo $_smarty_tpl->tpl_vars['ciudad']->value->provincia;?>
</h6>
    <p>Codigo postal: <?php echo $_smarty_tpl->tpl_vars['ciudad']->value->codpostal;?>
</p>
    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['ciudad']->value->descripcion;?>
</p>
    <a href="" class="btn btn-outline-info">Volver</a>
  </div>
  
</div><?php }
}
