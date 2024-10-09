<div class="form-group mb-3">
    <label for="description">Title <span class="text-danger">*</span></label>
    <input type="text" name="title" id="title" value="{{ Request::old('title') ? Request::old('title') : $subcategory->title }}" class="form-control @error('title') is-invalid  @enderror">
    @error('title')
    <span class="invalid-feedback" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{ Request::old('description') ? Request::old('description') : $subcategory->description }}"  class="form-control @error('description') is-invalid  @enderror">
    @error('description')
    <span class="invalid-feedback" role="alert"><strong clss="text-danger">{{ $message }}</strong></span>

    @enderror
    <div class="form-group mb-3">
        <label for="category">category <span class="text-danger">*</span></label>
        <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid  @enderror">
            @if ($categories->count() > 0)
            <option value="" selected>Select Category</option>

            @endif
            @forelse (categories as $cat )
            <option value="{{ $cat->id }}" @if($cat->id == $subcategory->category_id) selected @endif>{{ $cat->title }}</option>

            @empty
                <option value="">nocategory</option>
            @endforelse
        </select>
        @error('category_id')

        <span class="invalid-feedback" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
        @enderror
    </div>
    </div>
</div>
