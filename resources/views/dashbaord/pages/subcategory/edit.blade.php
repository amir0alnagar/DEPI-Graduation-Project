@extends('dashbaord.layouts.master')
@section('title' , "Edit SubCategory ($subcategories->title)")
@section('content')
<div class="container  mt-4">
    <div class="row justidy-content-center">
        <div class="col-12">
            <div class="card shadow-lg mb-4">
                <div class="card-header">
                    <strong>Edit SubCategory (<span class="text-primary">{{ $subcategories->title }}</span>) </strong>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('subcategories.update' , $subcategories->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                @include('dashbaord.pages.subcategory.form')
                                <button type="submit" class="btn btn-primary px-4 btn-md borderd-2 shadow rounded">Update</button>
                            <a class="btn btn-danger btn-md px-2 py-2 font-weight-bold fs-6 shadow borderd-2 rounded" href="{{ url()->previous() }}">Go Back</a>
                            </form>
                        </div>
                    </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
