//click on add button item Brand model
$("#usradd").on("click", function (e) {
    console.log('texst',e);
    
    
    //$("#itbmodl").modal("toggle");
   
   

});


$('.search').on('keyup',function(){
    var searchTerm = $("#searchinput").val().toLowerCase();
    $('#userTbl tbody tr').each(function(){
        var lineStr = $(this).text().toLowerCase();
        if(lineStr.indexOf(searchTerm) === -1){
           $(this).hide(); 
        }else{
            $(this).show();
        }
    });
});



function view(id) {

    $("#viewmodl").modal("toggle");

    $.ajax({
  
        type:'GET',
  
        url:"/searchviewuser",
        dataType: 'json',
        cache: false,
        async: false,
        data:{'id':id},
  
        success:function(Searchdata){
            console.log('Searchdata',Searchdata);
            //var result = Searchdata.data;
           //console.log(result);
            $('#usrna').val(Searchdata.name);
            $('#usrid').val(Searchdata.company_name);
            $('#usremail').val(Searchdata.email);
            $('#usrcntct').val(Searchdata.contact_num);
            $('#adrs').val(Searchdata.adrss);
            $('#ocpn').val(Searchdata.occuptn);
        }

    });
    
}

/*
$('#view').on('click',function(){
    $("#viewmodl").modal("toggle");
    var id = $("#viewid").val();
    console.log(id);
    $.ajax({
  
        type:'GET',
  
        url:"/searchviewuser",
        dataType: 'json',
        cache: false,
        async: false,
        data:{'id':id},
  
        success:function(Searchdata){
            console.log('Searchdata',Searchdata);
            //var result = Searchdata.data;
           //console.log(result);
            $('#usrna').val(Searchdata.name);
            $('#usrid').val(Searchdata.company_name);
            $('#usremail').val(Searchdata.email);
            $('#usrcntct').val(Searchdata.contact_num);
            $('#adrs').val(Searchdata.adrss);
            $('#ocpn').val(Searchdata.occuptn);
        }

    });

});
*/


function edit(id) {
    $("#editmodl").modal("toggle");
    $.ajax({
  
        type:'GET',
  
        url:"/searchviewuser",
        dataType: 'json',
        cache: false,
        async: false,
        data:{'id':id},
  
        success:function(Searchdata){

            //var result = Searchdata.data;
           console.log('Searchdata',Searchdata);
            $('#edtid').val(id);
            $('#InputName').val(Searchdata.name);
            $('#InputID').val(Searchdata.company_name);
            $('#InputEmail').val(Searchdata.email);
            $('#inputContact').val(Searchdata.contact_num);
            $('#InputAddrs').val(Searchdata.adrss);
            $('#InputOcuptn').val(Searchdata.occuptn);
            $('#InputPasswrd').val(Searchdata.password);
            $('#InputUsername').val(Searchdata.uname);
            $('#userRoleid').val(Searchdata.uri);
        }
  
    });
}

/*
$('#edit').on('click',function(){
    $("#editmodl").modal("toggle");
    var id = $("#editid").val();
    console.log(id);
    $.ajax({
  
        type:'GET',
  
        url:"/searchviewuser",
        dataType: 'json',
        cache: false,
        async: false,
        data:{'id':id},
  
        success:function(Searchdata){

            //var result = Searchdata.data;
           console.log('Searchdata',Searchdata);
            $('#edtid').val(id);
            $('#InputName').val(Searchdata.name);
            $('#InputID').val(Searchdata.company_name);
            $('#InputEmail').val(Searchdata.email);
            $('#inputContact').val(Searchdata.contact_num);
            $('#InputAddrs').val(Searchdata.adrss);
            $('#InputOcuptn').val(Searchdata.occuptn);
        }
  
    });

});
*/



$(function() {
  
    //Start mfrm form bvalidation
    $("#mfrm").validate({
          onsubmit: false,
          onkeyup: false,
          onkeydown:false,
          onclick: false,
          onkeypress:false,
          onblur:true,
          ignore: [],
          rules: {
  
            InputName: {
                  required: true,
                  
                  
              },
              
              InputID: {
                  required: true,     
                 //IDCheck:true,
                 //IDCheckexist:true,
                //GenerateDOB:true,
               // ageCount:true
                
              },
  
              InputEmail: {
                  required: true,
                 
                  
              },
  
              InputAddrs: {
                  required: true,
                 
                  
              },
  
              inputContact: {
                  required: true,
                  //TPNCheck:true
                  
                  
              },
  
              InputOcuptn: {
                  required: true,
                 
                  
              },
  
              Image: {
                  required: true,
                  //ImageCheck:true
                  
              },
  
          },
          
          messages: {
  
            InputName: {
                  
                   required: "please enter name",
                    
              },
  
              InputID: {
                  required: "please enter ID number",
                 
                  
              },
  
              InputAddrs: {
                  required: "please enter your address",
                  
                  
              },
  
              inputContact: {
                  required: "Please enter contact number",
                 
                  
              },
  
              InputOcuptn: {
                  required: "please enter your occupation",
                  
                  
              },
  
              Image: {
                  required: "Please choose your picture",
                 
              },
  
          },
  
          errorPlacement: function(error, element) {
              if(element.hasClass('selectpicker')){
                  error.insertAfter(element.parent());
              } else {
                  error.insertAfter(element);
              }
          },
      
        
      });
  
  });
  
      
  
  $(function() {
  
      $('#submitedit').click(function(e) {
          if ($('#mfrm').valid()) {
              console.log("dddddd");
            updateAjax();
            //alert("Register Process was done successfully");
          }
          else {
              
              return false;
          }
      });
      
  });


function updateAjax() {
 
    $.ajax({
        type: "POST",
        url: "/user_update",
        async: false,
        data: { 

            id : $('#edtid').val(),
            UserRoleid : $('#userRoleid').val(),
            InputName: $("#InputName").val(),
            InputID: $("#InputID").val(),
            InputEmail: $("#InputEmail").val(),
            inputContact: $("#inputContact").val(),
            InputOcuptn: $("#InputOcuptn").val(),
            InputAddrs: $("#InputAddrs").val(),
            InputPassword: $("#InputPasswrd").val(),
            InputUsername: $("#InputUsername").val(),
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data, status) {
            console.log('data',data);
        
            if (data) {
                $("#editmodl").modal("toggle");
                location.reload(true);
            }
        },
    });
}


$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});



