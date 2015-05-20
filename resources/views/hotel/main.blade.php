@extends('index')

@section('content')
					<div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='/add';">
                                <div class="widget-item-left">
                                    <span class="fa fa-book"></span>
                                </div>                             
                                <div class="widget-data">                                    
                                    <div class="widget-title">Add Hotels</div>
                                    <div class="widget-subtitle">Insert Hotels Details</div>
                                </div>                               
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        

                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='/search';">
                                <div class="widget-item-left">
                                    <span class="fa fa-search"></span>
                                </div>                             
                                <div class="widget-data">                                    
                                    <div class="widget-title">Search Hotels</div>
                                    <div class="widget-subtitle">Search Hotels.</div>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>

                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='/update';">
                                <div class="widget-item-left">
                                    <span class="fa fa-eye"></span>
                                </div>                             
                                <div class="widget-data">                                    
                                    <div class="widget-title">View Hotels</div>
                                    <div class="widget-subtitle">View the Hotel Details</div>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>

                    </div>
@stop