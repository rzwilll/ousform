@extends('layouts.sidebar')

@section('content')
<link href="{{ asset('/css/ous_index.css') }}" rel="stylesheet">



<div class="add-report">
        <button class="create-report p-2" onclick="modal_show_gen_report();"> <i class='bx bx-plus'></i>Add report</i></button>
        <!-- <a href="{{ route('ous.gen_report')}}"></a> -->
</div>

      <div class="report-container">
          <div class="report-table">
                <table>
                  <tr>
                    <th>REPORT:</th>
                    <th>DATE:</th>
                    <th></th>
                  </tr>
                  <tr>
                  <td>Report (A.Y: 2021-2022)</td>
                    <td>May 27, 2022</td>
                    <td>
                      <button class="edit-button"> <a href="{{ route('ous.view')}}"><i class='bx bxs-show'></i>View</a></button>
                      <button class="edit-button"> <a href="{{ route('ous.edit')}}"><i class='bx bxs-edit' ></i>Edit</a></button>
                  </td>
                  </tr>
                </table>
          </div>
      </div>

    <!-- Modal -->
    <div class="modal fade" id="modal_report" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Generate Report</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button> -->
          </div>
          <div class="modal-body">
            <h5>SELECT ACADEMIC YEAR</h5>
          <form action="/action_page.php">
                                <label for="cars">School Year:</label>
                                <select id="aac_yr" name="acad_year">
                                  <option value="volvo">2021-2022</option>
                                  <option value="saab">2020-2021</option>
                                </select>
                             </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Add</button>
          </div>
        </div>
      </div>
    </div>




@endsection

<script>
  function modal_show_gen_report(){
    
    $("#modal_report").modal('show');
  }
</script>