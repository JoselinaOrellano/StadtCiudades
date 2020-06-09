<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-06 16:24:29
  from 'C:\xampp\htdocs\StadtCiudades\templates\modificarCiudad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edba71d4857d8_37509234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c15d082f325e5b058357dcb9554b2432d21361d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\StadtCiudades\\templates\\modificarCiudad.tpl',
      1 => 1591453465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_5edba71d4857d8_37509234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->imagen;?>
" class="card-img-top" alt="..." width="100%" height="225">
              <div class="card-body">
              <h4><?php echo $_smarty_tpl->tpl_vars['ciudad']->value->nombre;?>
</h4>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['ciudad']->value->provincia;?>
</p>
                <div class="d-flex justify-content-between align-items-center">
                  <a href="modificar/<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->id_ciudad;?>
" class="btn btn-primary">Modificar</a>                  
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
  </div><?php }
}
