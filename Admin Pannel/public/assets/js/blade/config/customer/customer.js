$('#custmrview').on('click',function(){
    $("#custmrmodl").modal("toggle");
    var id = $("#custmrid").val();
    console.log(id);
    $.ajax({
  
        type:'GET',
  
        url:"/searchviewcustomer",
        dataType: 'json',
        cache: false,
        async: false,
        data:{'id':id},
  
        success:function(Searchdata){
     
            var result = Searchdata.data;
           console.log(result);
            $('#usrna').val(result.Name);
            $('#usremail').val(result.Email);
            $('#usrcntct').val(result.ContactNumber);
            $('#adrs').val(result.Address);
            $('#dob').val(result.Birthday);
            $('#gndr').val(result.Gender);
        }

    });

});