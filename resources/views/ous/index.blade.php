@extends('layouts.sidebar')

@section('section')
<h3>Academic Program Advising Report</h3>
@endsection
@section('content')
<link href="{{ asset('/css/ous_index.css') }}" rel="stylesheet">


<div class="add-report">
        <button class="create-report p-2" id="create-report"> <i class='bx bx-plus'></i>Add report</i></button>
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
                  @foreach($reports as $val)
                    <tr>
                      <td>Report (A.Y: {{$val->school_year}})</td>
                        <td>{{  date('M d, Y', strtotime($val->created_at)) }}</td>
                        <td>
                          
          
                          <a href="{{ url('ous/details/'.$val->re_id) }}" type="button" class="btn btn-info">
                            @if($val->status == 1)
                            <i class='bx bx-show'></i>View
                            @elseif($val->status!=1)
                            <i class='bx bxs-edit'></i>Edit
                            @endif
                          </a>
                          <!-- <button class="edit-button"> <a href="{{ route('ous.edit')}}"><i class='bx bxs-edit' ></i>Edit</a></button> -->
                          
                      </td>
                    </tr>
                  @endforeach
                </table>
          </div>
      </div>


@endsection


                                        