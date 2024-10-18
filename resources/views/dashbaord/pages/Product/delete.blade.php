@extends('dashbaord.layouts.master')
@section('title', 'Deleted categories')

@section('content')

{{-- @include('dashbaord.pages.Product.messages.messages') --}}

<div class="table-responsive">

<table class="table w-50 m-auto mt-4 datatable">
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
                <th>Deleted at</th>
                @if (auth()->user()->user_type == "admin")
                <th class="font-weight-bold">Action</th>
                @endif
                </tr>
            </thead>
            <tbody>
            @forelse ($products as $product)
            <tr>
                <td class="font-weight-bold">{{ $loop->iteration }}</td>
                <td>{{ $product->title ?? 'N/A' }}</td>
                <td>{{ Str::words($product->description, '3', '...') ?? 'N/A' }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ $product->available_quantity }}</td>
                <td>{{ $product->subCategory->category->title ?? 'N/A' }}</td>
                <td>{{ $product->subCategory->title ?? 'N/A' }}</td>
                <td>{{ $product->create_user->name ?? 'N/A' }}</td>
                <td>{{ $product->update_user->name ?? 'N/A' }}</td>
                <td>{{ $product->created_at->format('Y-m-d H:i') }}</td>
                <td>{{ $product->updated_at ? $product->updated_at->format('Y-m-d H:i') : 'N/A' }}</td>
                <td>{{ $product->deleted_at ? $product->deleted_at->format('Y-m-d H:i') : 'N/A' }}</td>
                @if(auth()->user()->user_type == "admin")
                <td class="text-center">
                    <div class="d-flex justify-content-between">
                        <form action="{{ route('products.restore' , $product->id) }}" method="GET">
                            <button type="submit" class="btn btn-sm btn-success font-weight-bold fs-6 mx-1">{{ 'Restore' }}</button>
                        </form>

                        <form action="{{ route('products.forceDelete', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger font-weight-bold fs-6 mx-1">{{ 'Delete' }}</button>
                        </form>
                    </div>
                </td>
                @endif
            </tr>
            @empty
        <div class="alert alert-danger text-center my-5 w-100 mx-auto">
            <span class="h6"> There Are No Deleted products Yet!</span>
        </div>
        @endforelse
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center my-4">
    <div class="me-6">
        {{ $products->links() }}
    </div>
</div>

@endsection
