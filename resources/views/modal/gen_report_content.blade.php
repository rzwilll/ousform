

<form class="form-horizontal" id="generate_form" method="POST">
    <select class="form-select" name="acadyr_id" id="acadyr_id" aria-label="Default select example">
        <option value="">Choose Academic Year..</option>
        @foreach($data as $val)
        <option value="{{$val->id}}">{{$val->acad_yr}}</option>
        @endforeach
    </select>
<br>

<?php if(count($data) > 0){?>
    <button type="submit" class="btn btn-primary">Generate Report</button>
<?php }
else { ?>
    <p><small style = "color:red"> You already submitted required reports</small></p>

<?php }?>

<button type="button" class="btn btn-secondary" onclick="modal_closed();">Close</button>
</form>
<script>
    $('#generate_form').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        formData.append('_token', `{{ csrf_token() }}`);
        
        $.ajax({
            method: 'post',
            url: '/ous/generate_report',
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                alert(response);
                Swal.fire({
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500
                }).then(result => {
                    location.reload();  
                });
                
            },
            error: function(reject){
                console.log(reject);
            // var errors = $.parseJSON(reject.responseText);
            // $.each(errors, function (key, val) {

            //     if(val.logodirectory){
            //         $("img#profileDisplay").attr('style', 'border: 1px solid #ffc107; width: 30%;');
            //         $("span#profileError-msg").text(val.logodirectory[0]);
            //     }

            // });
        }
            
        });
    });
</script>