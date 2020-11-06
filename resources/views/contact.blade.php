@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Help') }}</div>
                
                
                <div class="card-body">
                
                    <h1>Contact Us</h1>
                    <div class="row">
                        <div class="col-md-8">
                            <h2>Contact Information:</h2>
                            
                            <div class="col-md-6">
                                <p>Phone Number: 123-456-7890</p>
                                <p>Email: breachalert@messiah.edu</p>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <img src="images/faq.png" alt="FAQ." class="PageImage" />
                            
                        </div>

                    </div>

                    


                </div>
            </div>
        </div>
    </div>
</div>
@endsection