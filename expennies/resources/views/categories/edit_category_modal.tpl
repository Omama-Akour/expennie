{extends 'layout.tpl'}

{block javascripts}
    {* Include any necessary JavaScript files or scripts here *}
{/block}

{block title}Categories{/block}

{block content}
    <div class="container">
        <!-- Your main content goes here -->

        <!-- Button to trigger the edit category modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
            Edit Category
        </button>
    </div>

    <!-- Edit Category Modal -->
    <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-outline form-white mb-4">
                        <input type="text" name="name" required class="form-control form-control-lg" placeholder="Category Name" />
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
{/block}
