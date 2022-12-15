

    <label for="">Select</label>
    <select name="" id="">
        <option value="">Academic Year</option>
        @foreach($data as $val)
        <option value="{{$val->id}}">{{$val->acad_yr}}</option>
        @endforeach
 
    </select>

    <br>
    

 

<?php
    if(count($data) > 0){?>
        <button type="button" class="btn btn-primary">Generate Report</button>
    <?php }
    else { ?>
        <p><small style = "color:red"> You already submitted required reports</small></p>

   <?php }?>

   <button type="button" class="btn btn-secondary" onclick="modal_closed();">Close</button>


