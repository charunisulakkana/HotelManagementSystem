@extends('index')

@section('content')

					<div class="row">
                        <div class="col-md-12">
                                           
                            {!! Form::open(['url' => '/search/show']) !!}
                            
                                
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>View</strong> Hotel Details</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Please Search the City...</p>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! Form::label('name','City:', ['class' => 'col-md-3 control-label']) !!}                                                     
                                                <div class="col-md-9">
                                                    {!! Form::text('hotel_city', null, ['class' => 'form-control']) !!}                                                    
                                                    <span class="help-block">Enter City</span>                                                    
                                                </div>                                                
                                            </div> 
                                
                                            
                                            
                                        </div>
                                        
                                        <div class="col-md-6">

                                                                             
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="panel-footer">
                                     {!! Form::submit('Search', ['class' => 'btn btn-primary pull-right']) !!}                                   
                                </div>
                            </div>
                           {!! Form::close() !!}  
                            
                        </div>
                    </div>
@stop