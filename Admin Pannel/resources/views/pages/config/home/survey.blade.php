<style>

hr {
  height:2px;
  border-width:0;
  background-color:#5f5151;
}

</style>



<br>
<div class="row">
    <div class="col-md-6">
    <div class="card card-default">
    <div class="card-header">
    <h3 class="card-title">SURVEY</h3>
    </div>
    <div class="card-body p-0">

    <div class="container">
    
        <input type="hidden" name="selctId" id="selctId" class="form-control form-control-sm" value="">
        <form class="form-horizontal" action="/survy_store" name="survyfrm" id="survyfrm" method="post" autocomplete="off" enctype="multipart/form-data">
            
            @csrf
            @if(isset($errors) && count($errors)>0)
            @foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <i class="mdi mdi-alert-outline me-2"></i> {{$error}}
            </div>
            @endforeach
            @endif
           

            <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                <div class="row">

                    <div class="col">
          
                        <div class="row mb-1 mt-3">
                           
                            <label class="col-12 col-sm-6 col-lg-3 col-form-label-md" for="name">Survey Name:</label>
                            <!--
                            <input type="text" class="form-control-sm" id="name" name="name" required style="padding-left: 0px; margin-left:5px;">
                            -->
                            <div class="col-12 col-sm-4 col-lg-5">
                                <input type="text" class="form-control form-control-sm"  id="name" name="name" required placeholder="Survey Name">
                            </div>
                           
                           
                        </div>
                           
                        <div id="input-fields">



                        </div>
                            
                            <button type="button" id="addNewField"  class="btn btn-success" onclick="addInputField()"><i class="fa fa-plus" style="margin-right: 5px; font-size:13px;"></i>Add Field</button>
                            <!--
                            <a href="#" type="button" class="btn btn-danger" id="removeField"><i class="fa fa-plus"></i>Remove</a>
                            -->
                            <br><br>
  
                          
                           
  
                        
                            
                    </div>

                </div>

                <button type="button" id="survysubbtn" class="btn btn-warning">Submit</button>
                <button type="button" id="clearbtn" class="btn btn-primary">Clear</button>

            </div>

        </form>


    </div>
    
    </div>
    
    <div class="card-footer">
    </div>
    </div>
    
    </div>
    </div>

    