$(document).ready(function(e) {
	
    $('#addimage').click(function(e) {
            $( "#msg" ).html('');
            var fname = $('#fname').val();
            var packagephoto_data = $('#img1').prop('files')[0];
            var packagephoto2_data = $('#img2').prop('files')[0];
    
            var form_data = new FormData();
    
            form_data.append('packagephoto_name', packagephoto_data);
            form_data.append('packagephoto2_name', packagephoto2_data);
            form_data.append('fname', fname);
            $.ajax({
                url: "upload_docs_connect.php",
                type: 'POST',
                contentType: false,
                processData: false,
                data: form_data,
                success: function(data){
                    if(data != '') {
                    $( "#msg" ).append(data);
                    } else {
                    $( "#msg" ).append('No Data Found');       
                    }
                }
    
            });
        });	
        
    });   