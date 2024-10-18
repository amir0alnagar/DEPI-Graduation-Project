@extends('dashbaord.layouts.master')

@section('title',  "show product ($product->title)")

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card card-custom border-light shadow-lg">
                <div class="card-header text-center">
                    <h1>{{$product->id}}</h1>
                    <h2 class="mb-0">{{ $product->title ?? 'No Title' }}</h2>
                </div>
                <div class="card-body">
                    @if($product->image)
                    <img src="{{ Storage::url($product->image) }}" alt="Product Image" class="img-fluid" style="max-width: 100%; height: auto;">
                    @else
                    <p>No Image Available</p>
                    @endif
                    <p class="card-text large-text bold-text">{{ $product->description ?? 'No Description' }}</p>
                    <h4>{{ $product->create_user->name ?? 'No Admin Name' }}</h4>
                    <h5>{{ $product->subcategory->category->title ?? 'No Category' }}</h5>
                    <h5>{{ $product->subcategory->title ?? 'No Sub_Category' }}</h5>
                    <hr>

                    <div class="d-flex justify-content-between">
                        <a class="btn btn-outline-secondary btn-custom3" href="{{ route('products.edit',  $product->id) }}">
                            <i class="fa-solid fa-edit"></i>{{ 'Edit' }}
                        </a>

                        <form action="{{ route('products.destroy',  $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-custom3" type="submit">
                                <i class="fa-solid fa-trash-alt"></i> {{'Delete'}}
                            </button>
                        </form>

                        <a class="btn btn-outline-primary btn-custom3" href="{{ route('products.index') }}">
                            <i class="fa-solid fa-arrow-left"></i> {{ 'Return to Products'}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
