 @foreach($data as $val)
 {{ $val->acad_yr }}
 @endforeach
 
 <?php if(count($data) > 0){?>
        <p>display generate button</p>
<?php } else { ?>
        <p>hide generate button</p>
<?php }?>

<button type="button" class="btn btn-secondary" onclick="modal_closed();">Close</button>
<?php
    if(count($data) > 0){?>
        <button type="button" class="btn btn-primary">Generate</button>
    <?php }
?>
