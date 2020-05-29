@extends('site.master')

@section('title', 'Contact')
@section('page-section-title', 'Contact Me')

@section('content')
<div class="col-md-12 col-lg-8 main-content">
            
    <form action="#" method="post">
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control ">
            </div>
            <div class="col-md-12 form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" class="form-control ">
            </div>
            <div class="col-md-12 form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control ">
            </div>
            </div>
            <div class="row">
            <div class="col-md-12 form-group">
                <label for="message">Write Message</label>
                <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
            </div>
            </div>
            <div class="row">
            <div class="col-md-6 form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
            </div>
        </div>
    </form>
            
</div>
@endsection