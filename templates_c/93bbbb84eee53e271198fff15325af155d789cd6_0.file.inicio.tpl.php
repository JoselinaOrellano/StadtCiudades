<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 03:32:17
  from 'C:\xampp\htdocs\StadtCiudades\templates\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edee6a10301b2_09345627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93bbbb84eee53e271198fff15325af155d789cd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\StadtCiudades\\templates\\inicio.tpl',
      1 => 1591665818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_5edee6a10301b2_09345627 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main role="main">

  <section class="jumbotron text-center fondo ">
    <div >
      <h1>Stadt Ciudades</h1>
      <p class="lead ">Las ciudades mas lindas de Argentina</p>   
      
    </div>
  </section>
  
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ciudades']->value, 'ciudad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->value) {
?>
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
                  <div class="btn-group">
                    <a href="ciudad/<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->id_ciudad;?>
" class="btn btn-info">Ver mas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  </div>
  
</main><?php }
}
