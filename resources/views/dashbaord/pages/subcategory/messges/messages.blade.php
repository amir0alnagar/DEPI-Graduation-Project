@if(session()->has('Created_SubCategory_Successfully'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('Created_SubCategory_Successfully') }}
</div>
</p>
@elseif(session()->has('updated_subcategory_successfully'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('updated_subcategory_successfully') }}
</div>
</p>
@elseif(session()->has('softDeleted_subcategory_successfully'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('softDeleted_subcategory_successfully') }} <a href="{{ route('subcategories.delete') }}">Trash</a>
</div>
</p>
@elseif(session()->has('restored_subcategory_successfully'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('restored_subcategory_successfully') }}
</div>
</p>
@elseif(session()->has('forceDeleted_subcategory_successfully'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('forceDeleted_subcategory_successfully') }}
</div>
</p>
@endif
