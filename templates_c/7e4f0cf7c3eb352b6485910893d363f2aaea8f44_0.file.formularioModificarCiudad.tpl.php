<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 22:59:31
  from 'C:\xampp\htdocs\StadtCiudades\templates\formularioModificarCiudad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edea6b3c60063_96888562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e4f0cf7c3eb352b6485910893d363f2aaea8f44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\StadtCiudades\\templates\\formularioModificarCiudad.tpl',
      1 => 1591649968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_5edea6b3c60063_96888562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="contenedorformulario">
    <form action="guardarcambios/<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->id_ciudad;?>
" method="GET">  
    <div class="form-group">
        <label for="inputAddress">Ciudad:</label>
        <input type="text" name="nombre"  value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->nombre;?>
" class="form-control" id="inputAddress" >
    </div>
    <div class="form-group">
        <label for="inputAddress2">Provincia:</label>
        <input type="text" name="provincia"  value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->provincia;?>
"class="form-control" id="inputAddress2">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Descripcion:</label>
        <input type="text" name="descripcion"  value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->descripcion;?>
"class="form-control" id="inputAddress2" >
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">Imagen:</label>
        <input type="text" name="imagen"  value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->imagen;?>
" class="form-control" id="inputCity">
        </div>
        
        <div class="form-group col-md-2">
        <label for="inputZip">Codigo Postal:</label>
        <input type="text" name="codpostal"  value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->codpostal;?>
" class="form-control" id="inputZip">
        </div>
    </div>
    
    <button type="submit" class="btn btn-info">Guardar cambios</button>
    </form>
</div><?php }
}
