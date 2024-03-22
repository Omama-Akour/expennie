<?php
/* Smarty version 4.4.1, created on 2024-03-21 11:45:51
  from 'C:\xampp\htdocs\expennies-P0_Start\resources\views\categories\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65fc0fdfaa2557_44744338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5487c3a5dde840529fba2dcf0705d005dc079cca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\expennies-P0_Start\\resources\\views\\categories\\index.tpl',
      1 => 1711017943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:categories/edit_category_modal.tpl' => 1,
  ),
),false)) {
function content_65fc0fdfaa2557_44744338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19814251965fc0fdfa9ae47_69759291', 'javascripts');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138566762365fc0fdfa9b526_53894253', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186646741965fc0fdfa9b8e7_82601714', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'javascripts'} */
class Block_19814251965fc0fdfa9ae47_69759291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascripts' => 
  array (
    0 => 'Block_19814251965fc0fdfa9ae47_69759291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'javascripts'} */
/* {block 'title'} */
class Block_138566762365fc0fdfa9b526_53894253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_138566762365fc0fdfa9b526_53894253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Categories<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_186646741965fc0fdfa9b8e7_82601714 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_186646741965fc0fdfa9b8e7_82601714',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="categories container content-body">
        <div class="text-end mb-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCategoryModal">
                <i class="bi bi-plus-circle me-1"></i>
                New Category
            </button>
        </div>
        <!-- New Category Modal -->
        <div class="modal fade" id="newCategoryModal" tabindex="-1" aria-hidden="true">
            <!-- Modal content -->
        </div>
        
        <!-- Edit Category Modal -->
        <?php $_smarty_tpl->_subTemplateRender('file:categories/edit_category_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- Categories Table -->
        <table id="categoriesTable" class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['category']->value['created_at'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['category']->value['updated_at'];?>
</td>
                        <td>
                            <!-- Actions buttons -->
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
<?php
}
}
/* {/block 'content'} */
}
