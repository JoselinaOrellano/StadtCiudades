<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 04:15:05
  from 'C:\xampp\htdocs\StadtCiudades\templates\listaCiudades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edef0a998eaf2_94508052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d4c5b2f665c65c7c99e8a2cff2ceff19624d6b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\StadtCiudades\\templates\\listaCiudades.tpl',
      1 => 1591668882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_5edef0a998eaf2_94508052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                    <a href="modificar/<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->id_ciudad;?>
" class="btn btn-info boton">Modificar</a>
                    <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->id_ciudad;?>
" class="btn btn-info boton">Eliminar</a>
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

<?php }
}
