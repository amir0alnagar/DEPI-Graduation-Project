@extends('dashbaord.layouts.master')
@inject('product', '\App\Models\Product')
@section('title' ,  'Create Product')

@section('content')

 <div class="container mt-">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow-lg mb-4">
                    <div class="card-header">
                        <strong class="card-title fs-2">Create SubCategory</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-12">
                            <form action="{{ route('products.store') }}" method="POST" >
                                @csrf
                                @include('dashbaord.pages.Product.form')
                                    <button type="submit" class="btn btn-success btn-md py-1 my-1 font-weight-bold fs-5 border-2 border-dark rounded">Submit</button>
                                    <button type="Reset" class="btn btn-secondary btn-md py-1 font-weight-bold fs-5 border-2 border-dark rounded">Reset</button>
                                </form>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
