<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-06 19:05:26
  from 'C:\xampp\htdocs\StadtCiudades\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edbccd6a1e339_79067465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b8445318bca17c9592c083769ba72941345e99a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\StadtCiudades\\templates\\nav.tpl',
      1 => 1591463124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edbccd6a1e339_79067465 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="">
    <img src="img/logo.png" width="40" height="40" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="">Inicio <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="modificar/todo">Modificar / Eliminar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="agregar">Agregar <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav><?php }
}
