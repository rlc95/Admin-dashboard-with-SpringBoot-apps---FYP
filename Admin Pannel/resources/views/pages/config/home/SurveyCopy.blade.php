
<style>
  
    * {
      box-sizing: border-box !important;
      }
      #survyfrm {
      background-color: #f6f8fb !important;
      padding: 20px !important;
      color: rgb(59, 59, 61) !important;
      border-radius: 5px !important;
      }
      #title, #description {
      text-align: center !important;
      text-shadow: 5px 5px 10px black !important;
      }
      label, #survyfrm p {
      font-size: 16px !important;
      }
      .dropdown, #nt-sure, #option-eight {
      margin-bottom: 20px !important;
      }
  
      /*
      #simple-bar {
       height: 250px;
       
      }
      */
  
      /*
      div.simple-bar
      {
      overflow-y:scroll;
      max-height: 580px; 
      }
      */
  
  </style>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <div class="container">
          <div class="card">
              <div class="card-header">
  
                  <h1 id= "title">Survey Form</h1>
                  <p id= "description" style="color: white;">Thank you for taking the time to help us</p>
              </div>
  
              <div class="card-body">
  
                  <div class="row">
                      <div class="col-sm-1 col-md-1 col-lg-2 col-xl-2"></div><!--Empty column-->
          
                      <div class="col-sm-10 col-md-10 col-lg-8 col-xl-8 simple-bar" id="simple-bar"><!--Form-->
  
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
          
                              <div class="row">
                                  <div class="col-7">
          
                                    <div class="wrapper">
                                   <div class="form-group">
                                    <label for="name">Survey Name:</label>
                                    <input type="text" class="form-control-sm" id="name" name="name" required style="padding-left: 0px; margin-left:5px;">
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
          
                              </div>
                              <button type="button" id="survysubbtn" class="btn btn-warning" style="width: 20%">Submit</button>
                              <button type="button" id="clearbtn" class="btn btn-primary" style="width: 20%">Clear</button>
          
                          </form>
                          
                          
  
                      </div>
          
                      <div class="col-sm-1 col-md-1 col-lg-2 col-xl-2"></div><!--Empty column-->
                  </div>
  
              </div>
  
              <div class="card-footer">
  
              </div>
  
  
          </div>
  
      </div>
      
  
      
  
  