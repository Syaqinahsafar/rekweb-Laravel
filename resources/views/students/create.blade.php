@extends('templates/main')

@section('title', 'Form Add Data Mahasiswa')

@section('container')
<div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 class="mt-3"> Form Add Data Mahasiswa</h1>

                    <form  method="post" action="/students">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Insert Name" name="name" value="{{old('name') }}">

                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror('name')

                        </div>

                        <div class="form-group">
                            <label for="matric">Matric</label>
                            <input type="text" class="form-control @error('matric') is-invalid @enderror" id="matric" placeholder="Insert Matric" name="matric" value="{{old('matric') }}">

                            @error('matric')<div class="invalid-feedback">{{ $message }}</div>@enderror('matric')

                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control  @error('matric') is-invalid @enderror" id="email" placeholder="Insert Email" name="email" value="{{old('email') }}">

                            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror('email')

                        </div>

                        <div class="form-group">
                            <label for="course">Course</label>
                            <input type="text" class="form-control  @error('matric') is-invalid @enderror" id="course" placeholder="Insert Course" name="course" value="{{old('course') }}">
                        
                            @error('course')<div class="invalid-feedback">{{ $message }}</div>@enderror('course')

                        </div>

                        <button type="submit" class="btn btn-primary">Add Data!</button>
                        
                    </form>  

                </div>
            </div>
        </div>
@endsection 
