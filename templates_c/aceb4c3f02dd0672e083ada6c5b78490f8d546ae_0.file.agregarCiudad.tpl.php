<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-06 19:41:13
  from 'C:\xampp\htdocs\StadtCiudades\templates\agregarCiudad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edbd539340a66_32394928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aceb4c3f02dd0672e083ada6c5b78490f8d546ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\StadtCiudades\\templates\\agregarCiudad.tpl',
      1 => 1591465264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_5edbd539340a66_32394928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="contenedorformulario">
    <form action="cargar" method="GET">  
    <div class="form-group">
        <label for="inputAddress">Ciudad:</label>
        <input type="text" name="nombre"  class="form-control" id="inputAddress" >
    </div>
    <div class="form-group">
        <label for="inputAddress2">Provincia:</label>
        <input type="text" name="provincia"  class="form-control" id="inputAddress2" >
    </div>
    <div class="form-group">
        <label for="inputAddress2">Descripcion:</label>
        <input type="text" name="descripcion"  class="form-control" id="inputAddress2" >
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">Imagen:</label>
        <input type="text" name="imagen"  class="form-control" id="inputCity">
        </div>
        
        <div class="form-group col-md-2">
        <label for="inputZip">Codigo Postal:</label>
        <input type="text" name="codpostal" class="form-control" id="inputZip">
        </div>
    </div>
    
    <button type="submit" class="btn btn-info">Agregar ciudad</button>
    </form>
</div><?php }
}
