@extends('index')

@section('content')              


                    <div class="col-md-12">
                             


                            {!! Form::open(['url' => '/add/create']) !!}
                                
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                            
                                    <h3 class="panel-title"><strong>Hotel</strong> Details</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Please Fill the Hotel Registration Form...</p>
                                             
                    
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                {!! Form::label('name','Hotel Name:', ['class' => 'col-md-3 control-label']) !!}                                                     
                                                <div class="col-md-9">
                                                    {!! Form::text('hotel_Name', null, ['class' => 'form-control']) !!}                                                    
                                                    <span class="help-block">Enter Hotel Name</span>                                                    
                                                </div>                                                
                                            </div>   

                                            <div class="form-group">
                                                {!! Form::label('name','Hotel Address:', ['class' => 'col-md-3 control-label']) !!}                                                     
                                                <div class="col-md-9">
                                                    {!! Form::text('hotel_Address', null, ['class' => 'form-control']) !!}                                                    
                                                    <span class="help-block">Enter Hotel Address</span>                                                    
                                                </div>                                                
                                            </div> 

                                            <div class="form-group">
                                                {!! Form::label('name','City:', ['class' => 'col-md-3 control-label']) !!}                                                     
                                                <div class="col-md-9">
                                                    {!! Form::text('hotel_city', null, ['class' => 'form-control']) !!}                                                    
                                                    <span class="help-block">Enter City</span>                                                    
                                                </div>                                                
                                            </div> 
                                            
                                            
                                        </div>
                                        
                                        
                                    </div>

                                </div>
                                <div class="panel-footer"> 
                                    {!! Form::submit('Insert', ['class' => 'btn btn-primary pull-right']) !!}   
                                    
                                </div>
                            </div>
                             {!! Form::close() !!}  
                            
                        </div>

@stop