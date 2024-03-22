{extends 'layout.tpl'}

{block javascripts}
    {* {encore_entry_script_tags 'categories'} *}
{/block}

{block title}Categories{/block}

{block content}
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
        {include 'categories/edit_category_modal.tpl'}

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
                {foreach from=$categories item=category}
                    <tr>
                        <td>{$category.name}</td>
                        <td>{$category.created_at}</td>
                        <td>{$category.updated_at}</td>
                        <td>
                            <!-- Actions buttons -->
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
{/block}
