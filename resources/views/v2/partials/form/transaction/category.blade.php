<div class="row mb-3">
    <label :for="'category_name_' + index"
           class="col-sm-1 col-form-label d-none d-sm-block">
        <i class="fa-solid fa-bookmark"></i>
    </label>
    <div class="col-sm-10">
        <input type="search"
               class="form-control ac-category"
               :id="'category_name_' + index"
               x-model="transaction.category_name"
               :data-index="index"
               placeholder="{{ __('firefly.category')  }}">
    </div>
</div>
