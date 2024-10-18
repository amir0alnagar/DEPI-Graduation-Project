@if(session()->has('Created_Product_Sucessfully'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('Created_Product_Sucessfully') }}
</div>
</p>
@elseif(session()->has('Updated_Product_Sucessfully'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('Updated_Product_Sucessfully') }}
</div>
</p>
@elseif(session()->has('softDeleted_subcategory_successfully'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('softDeleted_subcategory_successfully') }} <a href="{{ route('subcategories.delete') }}">Trash</a>
</div>
</p>
@elseif(session()->has('Restored Product'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('Restored Product') }}
</div>
</p>
@elseif(session()->has('Deleted Product'))
<p>
<div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
    {{ session()->get('Deleted Product') }}
</div>
</p>
@endif
