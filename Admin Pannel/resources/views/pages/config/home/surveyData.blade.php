@extends('layouts.admin-dashboard')

@section('title','dashboard')




@section('content')


<div class="container">

    <div class="card">
        
        <div class ="card-header">
          <div class="container">
            <div class="row">
            
                  <div class="row">
                    <div class="col-sm">
                      <label class="form-label" for="form1" style="margin-top: 5px; text-shadow: 10px;">Search</label>
                    </div>
                    <div class="col-sm">
                      <input type="text" class="search form-control" placeholder="Find Your Data" id="searchinput" style="position: relative; right: 100px;"  >
                    </div>
                  </div>
                    
                  <a href="#" class="notification" style="background-color: rgb(205, 87, 87); color: white; text-decoration: none; padding: 8px 19px; display: inline-block;  border-radius: 2px; position: relative; left: 680px;">
                    <span>Survey Data</span>
                    <span class="badge" id="count" style="position: absolute; top: -1px;  padding: 5px 10px; border-radius: 50%; background: red;  color: white; "></span>
                  </a> 

            </div>
            
          </div>
          
        </div>

        <div class="card-body">
            <input class="form-control form-control-sm" type="hidden" id="surveyData" name="surveyData" value="{{$survey}}">
            <input class="form-control form-control-sm" type="hidden" id="survyname" name="survyname" value="">
            <input class="form-control form-control-sm" type="hidden" id="survyid" name="survyid" value="">
            <table class="table"  id="survyTbl">
                <thead>
                  <tr>
                    
                    <th>Survey Name</th>
                    <th>Survey Data</th>
                    
                  </tr>
                </thead>
                <tbody>
                    
                </tbody>
              </table>

        </div>

    </div>



</div>

<script src="{{ url('assets/js/blade/config/home/survey.js') }}"></script>

@endsection