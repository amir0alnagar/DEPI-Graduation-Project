@extends('dashbaord.layouts.master')
@section('title' , "subcategory ($subcategory->title)")
@section('content')
<div class="container text-center my-3 mb-2 single-subcategory">
    <div class="bg-dark  w-75 mx-auto shadow-lg rounded p-5">
        <h2 class="badge text-bg-light text-info fs-1">{{ $subcategory->id }}</h2>
        <h3 class="border border-info bg-light rounded  w-50 m-auto text-primary fs-1">{{ $subcategory->title }}</h3>
        <p class="text-warning fs-3">{{ $subcategory->description }}</p>
        <div>
            <form method="post">
                @csrf
                @method('DELETE')
                <a class="btn btn-success mx-1 p-1"  href="{{ route('subcategories.edit' , $subcategory->id) }}"><i class="fa-solid fa-edit"></i> Edit</a>
                <button class="btn btn-danger mx-1 p-1"><i class="fa-solid fa-trash-alt p-1"></i>Delete</button>
                <p class="mt-4">
                    <a class="btn btn-info" href="{{ route('subcategories.index') }}">Return To subcategory</a>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection
