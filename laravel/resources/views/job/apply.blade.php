@extends('layouts.topbar')

@section('content')

        <div class="main">
            <div class="document-title">
                <div class="container">
                    <h3 class="center">Apply for </h3>
                </div><!-- /.container -->
            </div><!-- /.document-title -->

            <div class="container">
    <div class="col-sm-12">
        <form method="get" action="?">
            <div class="row">
                

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>First Name</label>
                        <input class="form-control" type="text">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label>Middle Name</label>
                        <input class="form-control" type="text">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label>Surname</label>
                        <input class="form-control" type="text">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <h3 class="page-header">Contact Information</h3>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Country</label>
                        <input class="form-control" type="text">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>City</label>
                        <input class="form-control" type="text">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Address</label>
                        <input class="form-control" type="text">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Phone</label>
                        <input class="form-control" type="text">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="text">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Website</label>
                        <input class="form-control" type="text">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <h3 class="page-header">Biography</h3>

            <div class="form-group">
                
        <textarea style="display: none;" id="editor" class="form-control"></textarea><input value="1" name="_wysihtml5_mode" type="hidden"><iframe style="display: block; background-color: rgb(255, 255, 255); border-collapse: separate; border-color: rgb(230, 230, 230); border-style: solid; border-width: 1px; clear: none; float: none; margin: 0px; outline: 0px none rgb(54, 54, 54); outline-offset: 0px; padding: 11px 12px; position: static; top: auto; left: auto; right: auto; bottom: auto; z-index: auto; vertical-align: text-bottom; text-align: start; box-sizing: border-box; box-shadow: none; border-radius: 3px; width: 100%; height: auto;" marginheight="0" marginwidth="0" allowtransparency="true" security="restricted" class="wysihtml5-sandbox" frameborder="0" height="0" width="0"></iframe>
            </div><!-- /.form-group -->

            <h3 class="page-header">Experience </h3>

            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Job Title</label>
                        <input class="form-control" type="text">
                    </div><!-- /.form-group -->

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Date From</label>
                                <input class="form-control" type="text">
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Date To</label>
                                <input class="form-control" type="text">
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->
                </div><!-- /.col-* -->

                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <h3 class="page-header">Education</h3>

            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>School Name</label>
                        <input class="form-control" type="text">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label>Degree</label>
                        <input class="form-control" type="text">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <h3 class="page-header">Skills</h3>

            <div class="row">
                <div class="col-sm-1">
                    <div class="form-group">
                        <label>Windows<input class="form-control" type="checkbox"></label>                        
                    </div><!-- /.form-group -->                    
                </div><!-- /.col-* -->
                <div class="col-sm-1">
                  <div class="form-group">
                          <label>Python<input class="form-control" type="checkbox"></label>                        
                  </div><!-- /.form-group -->
                </div><!-- /.col-* -->      
                <div class="col-sm-1">
                    <div class="form-group">
                        <label>CSS<input class="form-control" type="checkbox"></label>                        
                    </div><!-- /.form-group -->                    
                </div><!-- /.col-* -->
                    

                <div class="col-sm-1">
                    <div class="form-group">
                        <label>Php<input class="form-control" type="checkbox"></label>                        
                    </div><!-- /.form-group -->                    
                </div><!-- /.col-* -->
                <div class="col-sm-1">
                  <div class="form-group">
                          <label>Java<input class="form-control" type="checkbox"></label>                        
                  </div><!-- /.form-group -->
                </div><!-- /.col-* -->      
                <div class="col-sm-1">
                    <div class="form-group">
                        <label>Json<input class="form-control" type="checkbox"></label>                        
                    </div><!-- /.form-group -->                    
                </div><!-- /.col-* -->
                <div class="col-sm-1">
                  <div class="form-group">
                          <label>XML<input class="form-control" type="checkbox"></label>                        
                  </div><!-- /.form-group -->
                </div><!-- /.col-* --> 
                <div class="col-sm-1">
                    <div class="form-group">
                        <label>Linux<input class="form-control" type="checkbox"></label>                        
                    </div><!-- /.form-group -->                    
                </div><!-- /.col-* -->
                <div class="col-sm-1">
                  <div class="form-group">
                          <label>C#<input class="form-control" type="checkbox"></label>                        
                  </div><!-- /.form-group -->
                </div><!-- /.col-* -->     
            </div><!-- /.row -->
            <div class="row">
              <div class="col-sm-3">
                  <div class="form-group">
                          <label>Documentation<input class="form-control" type="checkbox"></label>                        
                  </div><!-- /.form-group -->
                </div><!-- /.col-* --> 
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Good communication Skills<input class="form-control" type="checkbox"></label>                        
                    </div><!-- /.form-group -->                    
                </div><!-- /.col-* -->
                <div class="col-sm-3">
                  <div class="form-group">
                          <label>Good Communication Skills<input class="form-control" type="checkbox"></label>                        
                  </div><!-- /.form-group -->
                </div><!-- /.col-* -->  
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <div class="center">
                    <button type="submit" class="btn btn-secondary btn-lg">Save Resume</button>
                </div><!-- /.center -->
              </div>
            </div>    
            <hr>
        </form>
    </div><!-- /.col-* -->    

        
    </div><!-- /.col-* -->
</div><!-- /.container -->
</div><!-- /.main -->
@endsection 
