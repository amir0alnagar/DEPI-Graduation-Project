@extends('dashbaord.layouts.master')
@section('title','subcategory')
@section('content')
<div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-end flex-wrap">
                    <div class="d-flex justify-contnet-between align-items-end flex-wrap">
                        <a href="{{ route('subcategory.create') }}" class="mx-3 mt-3 btn btn-success text-light font-weight-bold">
                            <span>Add subcategory</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @include('dashbaord.pages.subcategory.massages.massages')
         <!-- Table with stripped rows -->
           <table class="table w-75 m-auto datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category name</th>
                <th>Created By</th>
                <th>Updated By</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                    @forelse ($subcategories as $subcategory )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $subcategory->title }}</td>
                        <td>{{Str::words($subcategory->description , '5', '....') ?? 'N/A' }}</td>
                        <td>{{ $subcategory->category->title }}</td>
                        <td>{{ $subcategory->create_user->name ?? 'N/A' }}</td>
                        <td>{{ $subcategory->update_user->name ?? 'N/A' }}</td>
                        <td>{{ $subcategory->created_at }}</td>
                        <td>{{ $subcategory->updated_at ?? 'N/A'}}</td>
                        <td>
                            <form action="{{ route('subcategories.destroy' , $subcategory->id) }}" method="post" class="d-flex justify-content-between aligin-items-center">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-warning font-weight-bold btn-sm fs-6" href="{{ route('subcategories.show' , $subcategory->id) }}">Show</a>
                                @if (auth()->user()->user_type  == 'admin')
                                <a class="btn btn-primary btn-sm font-weight-bold fs-6" href="{{ route('subcategories.edit' , $subcategory->id) }}">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm font-weight-bold fs-6">Delete</button>
                                @endif
                            </form>
                        </td>
                    </tr>
                    @empty

                    @endforelse
            </tbody>
          </table>
          <div class="my-4 d-flex justify-content-center">
            {{ $categories->links() }}
          </div>
          <!-- End Table with stripped rows -->
@endsection
