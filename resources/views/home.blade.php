@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>            
                <div class="card-body">
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                   
                    You are logged in, {{ Auth::user()->name }}!
                    <h2>Welcome to BreachAlert!</h2>
                    @if (Auth::user()->type == 1)
                        <p>You are an admin</p>
                        <!-- Test uploads -->
                        <form method="POST" action="uploads" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="upload"></input>
                            <button type="submit">Save Upload</button>
                        </form>
                        <h1>Welcome Administrator!</h1>
                        <p>All management options can be found below!</p>
                    @elseif (Auth::user()->type == 2)
                        <p>You are a student</p>
                    
                        <div class="row">
                            <div class="col-md-8">
                                <h2><a href="#" class="linkTitle">About Us</a></h2>
                                <br>
                                <p>We are an application focused on keeping your information and accounts safe by 
                                alerting you if a breach on any of your accounts has happened.</p>
                            
                            </div>
                            <div class="col-md-4">
                                <img src="images/lock.png" alt="Lock." class="PageImage" />
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-8">
                                <h2><a href="#" class="linkTitle">Contact Us</a></h2>
                                <br>
                                <p>Contact Us for any help or information you might need.</p>
                            
                            </div>
                            <div class="col-md-4">
                                <img src="images/faq.png" alt="FAQ." class="PageImage" />
                            </div>
                        </div>
                    @endif
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
