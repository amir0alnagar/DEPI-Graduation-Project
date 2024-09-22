@if(session()->has('Created_Subcategory_Successfully'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('Created_Subcategory_Successfully') }}
</div>
</p>
@elseif(session()->has('updated_Subcategory_successfully'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('updated_Subcategory_successfully') }}
</div>
</p>
@elseif(session()->has('softDeleted_Subcategory_successfully'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('softDeleted_Subcategory_successfully') }} <a href="{{ route('categories.delete') }}">Trash</a>
</div>
</p>
@elseif(session()->has('restored_Subcategory_successfully'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('restored_Subcategory_successfully') }}
</div>
</p>
@elseif(session()->has('forceDeleted_Subcategory_successfully'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('forceDeleted_Subcategory_successfully') }}
</div>
</p>
@endif
