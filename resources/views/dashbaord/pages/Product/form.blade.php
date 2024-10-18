{{-- Subcategory --}}
<div class="form-group mb-3">
    <label for="subcategory">subcategory <span class="text-danger">*</span></label>
    <select name="subcategory_id" id="subcategory_id" class="form-control @error('subcategory_id') is-invalid  @enderror">
        @if ($subcategories->count() > 0)
        <option value="" selected>Select SubCategory</option>
        @endif
        @forelse ($subcategories as $subcat )
        <option value="{{ $subcat->id }}">{{ $subcat->title }}</option>

        @empty
            <option value="">nosubcategory</option>
        @endforelse
    </select>

    @error('subcategory_id')
    <span class="invalid-feedback" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
    @enderror
</div>

{{-- Title --}}
<div class="form-group mb-3">
    <label for="description">Title <span class="text-danger">*</span></label>
    <input type="text" name="title" id="title" value="{{ Request::old('title') ? Request::old('title') : $product->title }}" class="form-control @error('title') is-invalid  @enderror">
    @error('title')
    <span class="invalid-feedback" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
    @enderror
</div>


{{-- Image --}}
<div class="form-group mb-3">
    <label for="image" class="form-label text-white">{{ __('form-dash.Product Image') }}</label>
    <input type="file" name="image" id="image"class="form-control @error('image') is-invalid @enderror">
    {{-- @if(isset($product) && $product->image)
        <div class="mt-2">
            <img src="{{ Storage::url($product->image) }}" alt="Product Image" class="img-fluid" style="width: 100%; height: auto;">
        </div>
    @endif --}}
    @error('image')
        <span class="invalid-feedback" role="alert">
            <strong class="text-danger">{{ $message }}</strong>
        </span>
    @enderror
</div>

{{-- Description (textarea) --}}
<div class="form-group mb-3">
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{ Request::old('description') ? Request::old('description') : $product->description }}"  class="form-control @error('description') is-invalid  @enderror">
    @error('description')
    <span class="invalid-feedback" role="alert"><strong clss="text-danger">{{ $message }}</strong></span>
    @enderror
    </div>
</div>
{{-- Price --}}
<div class="form-group mb-3">
    <label for="price">Price</label>
    <input type="number" step="0.01" name="price" id="price"
    value="{{ Request::old('price') ? Request::old('price') : $product->price }}"
    class="form-control @error('price') is-invalid  @enderror">
    @error('price')
    <span class="invalid-feedback" role="alert"><strong clss="text-danger">{{ $message }}</strong></span>
    @enderror
    </div>
</div>


{{-- Available Quantity --}}
<div class="form-group mb-3">
    <label for="available_quantity">Available Quantity</label>
    <input type="number" step="0.01" name="available_quantity" id="available_quantity"
    value="{{ Request::old('available_quantity') ? Request::old('available_quantity') : $product->available_quantity }}"
    class="form-control @error('available_quantity') is-invalid  @enderror">
    @error('available_quantity')
    <span class="invalid-feedback" role="alert"><strong clss="text-danger">{{ $message }}</strong></span>
    @enderror
    </div>
</div>




