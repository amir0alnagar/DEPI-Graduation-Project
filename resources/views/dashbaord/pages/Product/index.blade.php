@extends('dashbaord.layouts.master')
@section('title', 'Products')
@section('content')


<div class="row">
    <div class="col-12 grid-margin">
        <div class="d-flex justify-content-end flex-wrap">
            <div class="d-flex justify-content-between align-items-end flex-wrap">
                <a href="{{ route('products.create') }}" class="btn btn-custom1 my-3 text-light font-weight-bold">
                    <span>{{'Add Product'}}</span>
                </a>
                </div>

            </div>
        </div>
    </div>

    @include('dashbaord.pages.product.messages.messages')

<!-- Table with stripped rows -->
<div class="table-responsive">

    <table class="table table-striped w-100 m-auto">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Available Quantity</th>
                <th>Category name</th>
                <th>SubCategory name</th>
                <th>Created By</th>
                <th>Updated By</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                    @forelse ($products as $product )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{Str::words($product->description , '5', '....') ?? 'N/A' }}</td>
                        <td>{{ $product->price ?? 'N/A' }}</td>
                        <td>{{ $product->available_quantity ?? 'N/A' }}</td>
                        <td>{{ $product->subCategory->category->title ?? 'N/A' }}</td>
                        <td>{{ $product->subCategory->title ?? 'N/A' }}</td>
                        <td>{{ $product->create_user->name ?? 'N/A' }}</td>
                        <td>{{ $product->update_user->name ?? 'N/A' }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at ?? 'N/A'}}</td>
                        <td>
                            <form action="{{ route('products.destroy' , $product->id) }}" method="post" class="d-flex justify-content-between aligin-items-center">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-warning font-weight-bold btn-sm fs-6" href="{{ route('products.show' , $product->id) }}">Show</a>
                                @if (auth()->user()->user_type  == 'admin')
                                <a class="btn btn-primary btn-sm font-weight-bold fs-6" href="{{ route('products.edit' , $product->id) }}">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm font-weight-bold fs-6">Delete</button>
                                @endif
                            </form>
                        </td>
                    </tr>
                    @empty

                    @endforelse
            </tbody>
          </table>
</div>
          <div class="my-4 d-flex justify-content-center">
            {{ $products->links() }}
          </div>

@endsection
