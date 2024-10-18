@extends('dashbaord.layouts.master')
@section('title','Moderators')
@section('content')

         <!-- Table with stripped rows -->
           <table class="table w-75 m-auto datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Type</th>
              </tr>
            </thead>
            <tbody>
                    @forelse ($moderators as $user )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email ?? 'N/A' }}</td>
                        <td>{{ $user->user_type ?? 'N/A' }}</td>

                        <td>
                    </tr>
                    @empty

                    @endforelse
            </tbody>
          </table>
          <div class="my-4 d-flex justify-content-center">
            {{ $moderators->links() }}
          </div>
          <!-- End Table with stripped rows -->
@endsection
