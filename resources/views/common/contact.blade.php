@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2>Contact us</h2>
        <form action="">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name here...">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" placeholder="Enter your email here...">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Enter your message here.."></textarea>
            </div>
            <button class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection