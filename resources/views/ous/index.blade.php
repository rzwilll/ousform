@extends('layouts.sidebar')

@section('content')
<link href="{{ asset('/css/ous_index.css') }}" rel="stylesheet">



<div class="add-report">
                       <button class="create-report p-2"><a href="{{ route('ous.add')}}"> <i class='bx bx-plus'></i>Add report</i></a></button>
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
                    </div>

                </div>



@endsection