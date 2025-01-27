
$('#addusr').on('click', function () {
    $('#aduser').show();
    $('#main').hide();
    $('#usr').hide();
    $('#surv').hide();
    $('#adcus').hide();
   // $('#datamgrtn').hide();
})

$('#dshbrd').on('click', function () {
    $('#aduser').hide();
    $('#main').show();
    $('#usr').hide();
    $('#surv').hide();
    $('#adcus').hide();
    $('#datamgrtn').hide();
})

$('#usr').on('click', function () {
  $('#aduser').hide();
  $('#main').hide();
  $('#usr').show();
  $('#adcus').hide();
  $('#datamgrtn').hide();
 $('#surv').hide();
})


$('#addcustmr').on('click', function () {
  $('#aduser').hide();
  $('#main').hide();
  $('#usr').hide();
  $('#adcus').show();
  $('#datamgrtn').hide();
 $('#surv').hide();
})

$('#datamigtn').on('click', function () {
  $('#aduser').hide();
  $('#main').hide();
  $('#usr').hide();
  $('#datamgrtn').show();
  $('#surv').hide();
  $('#adcus').hide();
})


$('#survy').on('click', function () {
  $('#aduser').hide();
  $('#main').hide();
  $('#usr').hide();
  $('#adcus').hide();
  $('#datamgrtn').hide();
  $('#surv').show();
})



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
            }
            else {
                error.insertAfter(element);
            }
        },
    
      
    });

});

    

$(function() {

    $('#submitbtn').click(function(e) {
        if ($('#mfrm').valid()) {
            
            document.forms["mfrm"].submit();
            alert("Register Process was done successfully");
        }
        else {
            
            return false;
        }
    });
    
});





//survey form

$(function() {
  
  //Start mfrm form bvalidation
  $("#survyfrm").validate({
        onsubmit: false,
        onkeyup: false,
        onkeydown:false,
        onclick: false,
        onkeypress:false,
        onblur:true,
        ignore: [],
        rules: {

          fname: {
                required: true,
                
                
            },
            
            svyage: {
                required: true,     
               //IDCheck:true,
               //IDCheckexist:true,
              //GenerateDOB:true,
             // ageCount:true
              
            },

            svyemail: {
                required: true,
               
                
            },

            optradio: {
                required: true,
               
                
            },

            favorite: {
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

          fname: {
                
              required: "please enter name",
                  
            },

            svyemail: {
                required: "please enter your email",
               
                
            },

            svyage: {
                required: "please enter your address",
                
                
            },

            optradio: {
                required: "please enter your gender",
                
                
            },

            favorite: {
                required: "Please select",
               
                
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
            }else if(element.hasClass('frmchck')){
              error.insertAfter(element.parent());
            } else if(element.hasClass('custom-select')){
              error.insertAfter(element.parent());
            }
            else {
                error.insertAfter(element);
            }
            
        },
    
      
    });

});


$(function() {

  $('#survysubbtn').click(function(e) {
      
      console.log('music', $('#music').val());
 
      if ($('#survyfrm').valid()) {
          
          document.forms["survyfrm"].submit();
          alert("Register Process was done successfully");
      }
      else {
          
          return false;
      }
  });
  
});


/*
$("#addNewField").on("click", function (e) {




});
*/


$(function() {

  $("#custm").validate({
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
        
        InputEmail: {
            required: true,     
        },

    },
    
    messages: {

      InputName: {
            
          required: "please enter name",
              
        },

        InputEmail: {
            required: "please enter your email",
           
            
        },

    },
    

    errorPlacement: function(error, element) {
        if(element.hasClass('selectpicker')){
            error.insertAfter(element.parent());
        }else if(element.hasClass('frmchck')){
          error.insertAfter(element.parent());
        } else if(element.hasClass('custom-select')){
          error.insertAfter(element.parent());
        }
        else {
            error.insertAfter(element);
        }
        
    },

  
});


});









$(function() {

  $('#submitcus').click(function(e) {

    if ($('#custm').valid()) {
        
        document.forms["custm"].submit();
        alert("Register Process was done successfully");
    }
    else {
        
        return false;
    }
});


});


function addInputField() {
  var inputFields = document.getElementById("input-fields");
  var newField = document.createElement("div");
  var fieldNumber = inputFields.childElementCount + 1;
  newField.innerHTML = `
  <div class="row">
    <label class="col-12 col-sm-6 col-lg-3 col-form-label-md" for="field-${fieldNumber}-label">Field ${fieldNumber} Label:</label>
    <div class="col-12 col-sm-4 col-lg-5">
      <input type="text" class="form-control form-control-sm" id="field-${fieldNumber}-label" required name="field-${fieldNumber}-label">
    </div>
  </div>
  
    <select class="form-control form-control-sm selectpicker col-12 col-sm-6 col-lg-3 mb-2 mt-2" id="field-${fieldNumber}-type" data-container="false" data-style="btn-light" data-styleBase="btn" data-hide-disabled="true" data-live-search="true" data-actions-box="true" data-virtual-scroll="false" onchange="createInputField(${fieldNumber})">
    <option value="select">Select</option>
      <option value="text">Text</option>
      <option value="radio">Radio Button</option>
      <option value="checkbox">Checkbox</option>
      <option value="select">Dropdown</option>
    </select>
    
  `;

  
  
  inputFields.appendChild(newField);

  var lbl = document.getElementById(`field-${fieldNumber}-label`).value;
  console.log('lbl',lbl);

  var inptType = document.getElementById(`field-${fieldNumber}-type`).value;
    console.log('inptType',inptType);

  if (lbl != '') {
    var inptType = document.getElementById(`field-${fieldNumber}-type`).value;
    console.log('inptType',inptType);
  }

}

function createInputField(fieldNumber) {
  var inputFields = document.getElementById("input-fields");
  var fieldLabel = document.getElementById(`field-${fieldNumber}-label`).value;
  console.log('fieldLabel',fieldLabel);
  var fieldType = document.getElementById(`field-${fieldNumber}-type`).value;
  var newField = document.createElement("div");
  newField.className = "row mb-2";
  //newField.innerHTML = `<div class="row">`;
  newField.innerHTML = `
    <label class="col-12 col-sm-6 col-lg-3 col-form-label-md" for="field-${fieldNumber}">${fieldLabel}:</label>
  `;

  if (fieldType === "text") {
    newField.innerHTML += `<div class="col-12 col-sm-4 col-lg-5">
      <input class="form-control form-control-sm" type="text" id="field-${fieldNumber}" name="field-${fieldNumber}">
      <input type="hidden" id="field-${fieldNumber}-type" name="field-${fieldNumber}-type" class="form-control form-control-sm" value="text">
      </div>`;
  } else if (fieldType === "radio") {
    var options = prompt("Enter options for radio buttons (comma separated):");
    
    newField.innerHTML += `<input type="hidden" id="field-${fieldNumber}-type" name="field-${fieldNumber}-type" class="form-control form-control-sm" value="radio">
    <input type="hidden" id="field-${fieldNumber}-item" name="field-${fieldNumber}-item" class="form-control form-control-sm" value="`+options+`">`;
    
    options = options.split(",");

    console.log('options',options);
   
    for (var i = 0; i < options.length; i++) {
      
      newField.innerHTML += `<div class="form-check mr-3">
        <input type="radio" class="form-check-input" id="field-${fieldNumber}-${i+1}" name="field-${fieldNumber}" value="${options[i]}" ${(i === 0 ? "checked" : "")}>
        <label class="form-check-label" for="field-${fieldNumber}-${i+1}">${options[i]}</label>
        </div>`;
    }
    

  } else if (fieldType === "checkbox") {
    var items = prompt("Enter items for checkbox (comma separated):");
    newField.innerHTML += `<input type="hidden" id="field-${fieldNumber}-type" name="field-${fieldNumber}-type" class="form-control form-control-sm" value="checkbox">
    <input type="hidden" id="field-${fieldNumber}-item" name="field-${fieldNumber}-item" class="form-control form-control-sm" value="`+items+`">`;

    items = items.split(",");

    for (var i = 0; i < items.length; i++) {
      newField.innerHTML += `<div class="form-check mr-3 ml-2">
        <input class="form-check-input" type="checkbox" id="field-${fieldNumber}-${i+1}" name="field-${fieldNumber}-${i+1}" value="${items[i]}">
        <label class="form-check-label" for="field-${fieldNumber}-${i+1}">${items[i]}</label>
        </div>`;
    }

    
  } 
      else if (fieldType === "select") {
    	var options = prompt("Enter options for dropdown (comma separated):");
     	options = options.split(",");
       newField.innerHTML += `<input type="hidden" id="field-${fieldNumber}-type" name="field-${fieldNumber}-type" class="form-control form-control-sm" value="DropDown">
       <input type="hidden" id="field-${fieldNumber}-item" name="field-${fieldNumber}-item" class="form-control form-control-sm" value="`+options+`">`;


   	newField.innerHTML += `<div class="col-12 col-sm-4 col-lg-5"><select class="form-control form-control-sm selectpicker" data-container="false" data-style="btn-light" data-styleBase="btn" data-hide-disabled="true" data-live-search="true" data-actions-box="true" data-virtual-scroll="false" id="field-${fieldNumber}-${i+1}">`;
    console.log(`field-${fieldNumber}-${i+1}`);
     $("#selctId").val(`field-${fieldNumber}-${i+1}`);
        var html = '';
         for (var i = 0; i < options.length; i++) {
          
   		html += `	<option value="${options[i]}">${options[i]}</option>`;
    	}

        newField.innerHTML += `</select></div>`;
        
  }
  
  inputFields.appendChild(newField);
  newField.outerHTML += "<hr/>";
  var selctId = $("#selctId").val();
  $("#"+selctId+"").html(html);
  
}


$(".Chck").on("change", function () { //
  var id = $(this,'.Chck:checked').attr("id")
  let checkStatus = $(this,".Chck").is(":checked");

  console.log('id',id);
  console.log('checkStatus',checkStatus);

  if (checkStatus) {
      
      $("#"+id+"").val(1); // if checked then value is 1

  } else {
    $("#"+id+"").val(0);
  }
  

});




function next() {

  $("#frst").hide();
  $("#nxt").show();

}

function prev() {

  $("#frst").show();
  $("#nxt").hide();
}




var loadFile = function(event) {
  var image = document.getElementById('output');
  image.src=URL.createObjectURL(event.target.files[0]);
};





/*
$(function () {

  
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  


    //Datemask dd/mm/yyyy
    //$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    //$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    //$('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    /*
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })


    

  })
 */
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })




$('#trnfrArchv').on('click', function () {
  
});

$('#trnfrHbase').on('click', function () {
  
});






  $(function () {
    $("#srauth").autocomplete({  
        serviceUrl: '/serchauthrty',
        type: "GET",
        dataType: "json",
        minChars: "3",
        preventBadQueries: true,
        forceFixPosition: true,
        preserveInput: true,
        noSuggestionNotice: "Searching value empty...",
        beforeRender: function (container, suggestions) {
            console.log(suggestions)
            container = '<div class="autocomplete-suggestion" data-index="1">TEST</div>';
            return container;
          },
        
        onSearchStart: function (suggesion) {
            $("#srauthId").val("");
           // cursorWait();
            //add_inputLoader($("#srauth"));
        },

        onSearchComplete: function (suggesion) {
           // cursorDefault();
            //remove_inputLoader($("#srauth"));
        },

        onSelect: function (suggestion) {
            //set subbject
            console.log(suggestion);
            $("#srauth").val(suggestion.value);
            $("#srauthId").val(suggestion.data);
        },
    });

});

$('#datasrch').on('click', function () {
  
  $.ajax({
  
    type:'GET',

    url:"/searchviewuser",
    dataType: 'json',
    cache: false,
    async: false,
    data:{'id':$("#srauthId").val()},

    success:function(Searchdata){
 
        var result = Searchdata.data;
        console.log('result',result);
        /*
       console.log(result);
        $('#usrna').val(result.name);
        $('#usrid').val(result.idnumber);
        $('#usremail').val(result.email);
        $('#usrcntct').val(result.cntctnum);
        $('#adrs').val(result.adrss);
        $('#ocpn').val(result.occuptn);

        */
    }

});

});



/*
$(function() {

  $('input[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});
*/


//Date range picker
//$('#reservation').daterangepicker();




$(function() {

  // Get context with jQuery - using jQuery's .get() method.
  var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

  var areaChartData = {
    labels  : ['day-1', 'day-5', 'day-10', 'day-15', 'day-20', 'day-25', 'day-30'],
    datasets: [
      {
        label               : 'Transactions',
        backgroundColor     : 'rgba(60,141,188,0.9)',
        borderColor         : 'rgba(60,141,188,0.8)',
        pointRadius          : false,
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : [10000, 15000, 12000, 16000, 18000, 20000, 19000]
      },
      {
        label               : 'Electronics',
        backgroundColor     : 'rgba(210, 214, 222, 1)',
        borderColor         : 'rgba(210, 214, 222, 1)',
        pointRadius         : false,
        pointColor          : 'rgba(210, 214, 222, 1)',
        pointStrokeColor    : '#c1c7d1',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data                : [65, 59, 80, 81, 56, 55, 40]
      },
    ]
  }

  var areaChartOptions = {
    maintainAspectRatio : false,
    responsive : true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines : {
          display : false,
        }
      }],
      yAxes: [{
        gridLines : {
          display : false,
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  new Chart(areaChartCanvas, {
    type: 'line',
    data: areaChartData,
    options: areaChartOptions
  })



//-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })



});



$(function() {

  // Get context with jQuery - using jQuery's .get() method.
  var areaChartCanvas = $('#usrareaChart').get(0).getContext('2d')

  var areaChartData = {
    labels  : ['day-1', 'day-5', 'day-10', 'day-15', 'day-20', 'day-25', 'day-30'],
    datasets: [
      {
        label               : 'Users',
        backgroundColor     : 'rgba(60,141,188,0.9)',
        borderColor         : 'rgba(60,141,188,0.8)',
        pointRadius          : false,
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : [100, 150, 120, 160, 180, 200, 190]
      },
      
    ]
  }

  var areaChartOptions = {
    maintainAspectRatio : false,
    responsive : true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines : {
          display : false,
        }
      }],
      yAxes: [{
        gridLines : {
          display : false,
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  new Chart(areaChartCanvas, {
    type: 'line',
    data: areaChartData,
    options: areaChartOptions
  })



//-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#usrlineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    //lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })



});
