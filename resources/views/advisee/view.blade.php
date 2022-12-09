@extends('layouts.sidebar')

@section('content')

<link href="{{ asset('/css/studenteval.css') }}" rel="stylesheet">


<div class="student-info">
                    <p><b>NAME: </b>Rizahtin B. Camama</p>
                    <p><b>YEAR LEVEL: </b>2</p>
                    <p><b>CGPA: </b>1.85</p>
                    <p><b>GPA: </b>1.85</p>

                </div>
                
                <div class="table-body">
                    <table>
                        <tr>
                          <th>Subject Code</th>
                          <th>Description</th>
                          <th>Grade</th>
                        </tr>
                        <tr>
                            <td colspan ="3"class="sem-info"><p><b> SY: </b> <b> 2018-2019</b> <b>SEM: </b> <b>1</b> <small>(Bachelor of Sciene in Information Technology)</small></p>
                            </td>
                        </tr>
                        <tr>
                          <td>CCC100</td>
                          <td>Fundamentals of Computing</td>
                          <td><b>1.25</b></td>
                        </tr>
                        <tr>
                            <td>CCC101</td>
                            <td>Computer Programming</td>
                            <td><b>2.50</b></td>
                          </tr>
                        <tr>
                            <td>GEC101</td>
                            <td>Computer Programming</td>
                            <td><b>2.50</b></td>
                        </tr>
                        <tr>
                            <td>GEC102</td>
                            <td>Computer Programming</td>
                            <td><b>2.50</b></td>
                        </tr>
                        <tr>
                            <td>GEC104</td>
                            <td>Computer Programming</td>
                            <td><b>2.50</b></td>
                        </tr>
                        <tr>
                            <td>MAT104</td>
                            <td>Computer Programming</td>
                            <td><b>2.50</b></td>
                        </tr>
                        <tr>
                            <td>NST001</td>
                            <td>Computer Programming</td>
                            <td><b>2.50</b></td>
                        </tr>
                        <tr>
                            <td>PED001</td>
                            <td>Computer Programming</td>
                            <td><b>2.50</b></td>
                        </tr>
                        <tr class="gpa-data">
                            <td colspan="2" class=" text-danger gpa">GPA</td>
                            <td class=""><b class=" text-danger">2.50</b></td>
                        </tr>


                </div>

@endsection