@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('About') }}</div>
                
                
                <div class="card-body">
                
                    <h1>About Us</h1>
                    <div class="row">
                        <div class="col-md-8">
                            <p>We are an application focused on keeping your information and accounts safe by 
                            alerting you if a breach on any of your accounts has happened.
                            We use a simple monitoring system which allows you to obtain the latest inforation on what is happening
                            inside of your accounts, as well as whether or not any malicious breaches have happened.
                            </p>


                        </div>
                        <div class="col-md-4">
                            <img src="images/lock.png" alt="Lock." class="PageImage" />
                            
                        </div>

                    </div>

                    


                </div>
            </div>
        </div>
    </div>
</div>
@endsection