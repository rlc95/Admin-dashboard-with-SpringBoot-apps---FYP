$(function() {
    var indx = Array();
    var surveyData =  $('#surveyData').val();
    var survey = JSON.parse(surveyData);
    console.log('survey',survey);

        var html = '';
        var name = '';
        var label = '';
        var idnum = 0;
    survey.map((val, index) => {

        
        console.log('formdata',val.form_data);
        console.log('data',typeof val.form_data);
        var array = JSON.parse(val.form_data);

        console.log('array',typeof array[0]);
        console.log('hjgjh',array);


        array.map((val, index1) => {
            
            if (index1 != 0) {
                
                var id = val.id;

                const replaced = id.replace(/\D/g, ''); // 👉️ '123'
                console.log('id',replaced);   
                
                indx.push(replaced);

            }
        });

        let uniqueChars = indx.filter((c, index) => {
            return indx.indexOf(c) === index;
        });

        console.log('uniqueChars',uniqueChars);

        array.map((val, index1) => {
            console.log('index1',index1);
            if (index1 == 0) {
                name = val.value;
                $('#survyname').val(name);

                console.log('nameVal',name);
                
            }else{

                var id = val.id;

                const replaced = id.replace(/\D/g, '');
                console.log('id',replaced);  
                
                for (let index = 0; index < uniqueChars.length; index++) {

                    if (uniqueChars[index] == replaced) {
                        

                        if (val.id == 'field-'+replaced+'-label') {
                            //idnum = index1;
                            label += val.value;
                        }
                        if (val.id == 'field-'+replaced+'-type') {
                            if (val.value == 'text') {
                                label += ':'+val.value+' <br /> ';
                            }else{
                                label += ':'+val.value;
                            }
                            
                        }
                        if (val.id == 'field-'+replaced+'-item') {
                            if (index == (uniqueChars.length - 1)) {
                                label += '('+ val.value +')';
                            }else{
                                label += '('+ val.value +') <br /> ';
                            }
                            
                        }
                    }
                    
                }
            }

            console.log('label',label);
        });
        
        //$('#survyid').val(label);
        var nameVal = $('#survyname').val();
        //var labelVal = 
        //var IdnumVal = $('#survyid').val();
        

        html += `<tr> 
        <td>`  + nameVal + `</td>
        <td>`  + label + `</td>
        <td>
            <input type="hidden" name="viewid" id="viewid" value="`  + val.id + `" class="form-control form-control-sm" >
            <a class = "btn btn-primary" id="view"  role = "button">View</a>
        </td>
    </tr>`

      
    label = '';
    while ( indx.length > 0) {
        indx.pop();
    } 

    });
    
    $("#survyTbl tbody").html(html);

});