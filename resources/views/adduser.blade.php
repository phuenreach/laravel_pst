@extends('admindashboad')

@section('title','Add User')

@section('change-content')

<div class="container">
    <form action="{{route('adduser')}}" method="POST">
        @csrf
        <div class="row center-row">
            <div class="col-sm-6 form-re">
            <label>Name</label>
                <input type="text"class="input-val" autocomplete="off" name="name">
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-6 form-re">
                <label>Gender</label>
                <select name="gender" id="cars" class="input-val">
                    <option value="male" >Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form-re" name="">
            <label>Email</label>
                <input type="email" name="email" class="input-val" autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form-re">
            <label>Phone Number</label>
                <input name="phone" type="text"class="input-val" autocomplete="off">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 form-re">
            <label>Password</label>
                <input name="password" type="password"class="input-val" autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form-re">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>
</div>
@endSection