@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Customers List </h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <form action="customers" method="POST">
                
                <div class="form-group"><label for="name">Name</label><input name="name" type="text" value="{{old('name')}} " class="form-control"><div>{{$errors->first('name')}}</div></div>
                <div class="form-group"><label for="email">Email</label><input name="email" type="text" value="{{old('email')}} " class="form-control"><div>{{$errors->first('email')}} </div></div>
                <div class="form-goup">
                    <label for="active">Active</label>
                    <select name="active" id="active" class="form-control"> 
                        <option value="" disabled>Select an option</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="company_id">Company</label>
                    <select name="company_id" id="company_id" class="form-control"> 
                        @foreach ($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}} </option>
                        @endforeach
                           
                       
                    </select>
                </div>
               <button type="submit" class="btn btn-primary">Submit</button>
               @csrf
            </form>
        </div>
    </div>
    <hr>
    
    <div class="row">
        
        <div class="col-6">
            <h3>Active Customers</h3>
            @foreach ($activeCustomers as $c)
                <p> {{$c->name}} </p>
            @endforeach    
        </div>
        <div class="col-6">
            <h3>Inactive Customers</h3>
            @foreach ($inactiveCustomers as $c)
                <p> {{$c->name}} </p>
            @endforeach    
        </div>
        
        {{-- <div class="col-6">
            <h3>Inactive Customers</h3>
            @foreach ($inactiveCustomers as $c)
                <li> {{$c->name}} <span class="text-muted">( {{$c->email}})</span> </li>
            @endforeach        
        </div> --}}
    </div>
      
    </div>
@endsection

