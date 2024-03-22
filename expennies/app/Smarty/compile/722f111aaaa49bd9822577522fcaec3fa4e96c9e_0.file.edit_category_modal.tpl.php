<?php
/* Smarty version 4.4.1, created on 2024-03-19 12:21:52
  from 'C:\xampp\htdocs\expennies-P0_Start\resources\views\categories\edit_category_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f97550b8c231_45157224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '722f111aaaa49bd9822577522fcaec3fa4e96c9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\expennies-P0_Start\\resources\\views\\categories\\edit_category_modal.tpl',
      1 => 1710843257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f97550b8c231_45157224 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="editCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-outline form-white mb-4">
                    <input type="text" name="name" required
                           class="form-control form-control-lg"
                           placeholder="Category Name" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle me-1"></i>
                    Close
                </button>
                <button type="button" class="btn btn-success save-category-btn">
                    <i class="bi bi-check-circle me-1"></i>
                    Save
                </button>
            </div>
        </div>
    </div>
</div>
<?php }
}
