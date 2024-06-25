@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
                     <h5 class="card-title fw-semibold mb-4">Forms</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('about') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name </label>
                                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
                                </div>
                              
                                <div class="mb-3">
                                    <label for="title" class="form-label">title</label>
                                    <textarea class="form-control" id="title" name="title"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            
                  </div>
            </div>
        </div>
    </div>
@endsection
