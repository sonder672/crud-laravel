@extends('auth.login') @section('content') <div class="container"> 
    <div class="row justify-content-center"> 
        <div class="col-md-8"> 
            <div class="card"> 
                <div class="card-header">Notes</div> 
                <div class="card-body"> @if (session('status')) 
                    <div class="alert alert-success" role="alert"> {{ session('status') }} 
                        
                    </div> @endif 
                    <a href="/notes/create" class="btn btn-primary">Create Note</a> 
                    <hr> 
                    <h3>Your Notes</h3> 
                    <div class="card"> 
                        <div class="card-body"> 
                            <h3><a href="/notes"></a></h3> 
                            <small>Written on</small> 
                        </div> 
                    </div> 
                    <br>  
                    <p>You have no Notes</p>
                </div> 
            </div> 
        </div> 
    </div> 
</div> @endsection