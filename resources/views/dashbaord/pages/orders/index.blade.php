@extends('dashbaord.layouts.master')
@section('title','Orders')
@section('content')

         <!-- Table with stripped rows -->
           <table class="table w-75 m-auto datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>User id</th>
                <th>details</th>
              </tr>
            </thead>
            <tbody>
                    @forelse ($orders as $order )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->email ?? 'N/A' }}</td>
                        <td>{{ $order->phone ?? 'N/A' }}</td>
                        <td>{{ $order->address ?? 'N/A' }}</td>
                        <td>{{ $order->city }}</td>
                        <td>{{ $order->user->id ?? 'N/A'}}</td>
                        <td>{{Str::words($order->order , '5', '....') ?? 'N/A' }}</td>
                        <td>
                    </tr>
                    @empty

                    @endforelse
            </tbody>
          </table>
          <div class="my-4 d-flex justify-content-center">
            {{ $orders->links() }}
          </div>
          <!-- End Table with stripped rows -->
@endsection
