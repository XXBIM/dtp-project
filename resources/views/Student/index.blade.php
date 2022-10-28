@extends('templates.app')
@section('content')
<div class ="card">
<div class="card-body">
<div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Class</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td class="text-muted">{{ $student->phone_number }} </td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->class }}</td>
                            <tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection