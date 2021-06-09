@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('saveCategory') }}" method="POST">
                    @csrf 
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Category Name</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Category Decription</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
@endsection