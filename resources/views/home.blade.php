@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

<div class="card">
    <div class="card-header">
        <form action="{{ url()->current() }}" method="GET">
            <input type="hidden" name="s" value="true">
          <div class="form-row">
            <div class="col">
               <select  class="custom-select mr-sm-2" name="brand">
                <option selected value="">Choose Brands</option>
                <option {{ request()->get('brand') == 1 ? 'selected' : '' }} value="1">One</option>
                <option {{ request()->get('brand') == 2 ? 'selected' : '' }} value="2">Two</option>
                <option {{ request()->get('brand') == 3 ? 'selected' : '' }} value="3">Three</option>
                <option {{ request()->get('brand') == 4 ? 'selected' : '' }} value="4">Four</option>
                <option {{ request()->get('brand') == 5 ? 'selected' : '' }} value="5">Five</option>
              </select>
            </div>
            <div class="col">
               <select  class="custom-select mr-sm-2" name="category">
                <option selected value="">Choose Category</option>
                <option {{ request()->get('category') == 1 ? 'selected' : '' }}  value="1">One</option>
                <option {{ request()->get('category') == 2 ? 'selected' : '' }}  value="2">Two</option>
                <option {{ request()->get('category') == 3 ? 'selected' : '' }}  value="3">Three</option>
                <option {{ request()->get('category') == 4 ? 'selected' : '' }}  value="4">Four</option>
                <option {{ request()->get('category') == 5 ? 'selected' : '' }}  value="5">Five</option>
              </select>
            </div>
            <div class="col">
                <input type="date" class="form-control" name="form">
            </div>
            <div class="col">
                <input type="date" value="{{ date("Y/m/d") }}" class="form-control" name="to">
            </div>
            <div class="col-1">
                <button type="submit"  class="btn btn-primary">Search</button>
            </div>
          </div>
        </form>
    </div>
</div>
<br>

            <div class="card">
                <table class="table">
                  <thead>
                    <tr class="card-header">
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Brand</th>
                      <th scope="col">Category</th>
                      <th scope="col">Email</th>
                    </tr>
                  </thead>
                  <tbody class="card-body">
                    @foreach($users as $user)
                    <tr>
                      <th scope="row">{{ $user->id }}</th>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->brand }}</td>
                      <td>{{ $user->category }}</td>
                      <td>{{ $user->email }}</td>   
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>



        </div>
    </div>
</div>
@endsection
