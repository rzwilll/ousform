@extends('layouts.sidebar')
@section('section')
<h3>Advisee</h3>
@endsection
@section('content')

<link href="{{ asset('/css/advisee.css') }}" rel="stylesheet">


        <div class="top-area">
                    <div class="left-top">
                        <div class="top-left">
                            <!-- <form action="/action_page.php">
                                <label for="cars">School Year:</label>
                                <select id="aac_yr" name="acad_year">
                                  <option value="volvo">2021-2022</option>
                                  <option value="saab">2020-2021</option>
                                </select>
                             </form> -->

                             
                              <label for="yr_filter"> School Year: </label>
                                  <select name="" id="">
                                    @foreach ($academic_school_year as $acadyear)
                                    <option value="{{$acadyear->id}}"> {{$acadyear->acad_yr}}</option>
                                    @endforeach   
                                  </select>
                           
                        </div>

                        <div class="top-left">
                            <form action="/action_page.php">
                                <label for="cars">Semester:</label>
                                <select id="sem" name="sem">
                                  <option value="volvo">1</option>
                                  <option value="saab">2</option>
                                </select>
                          </form>
                        </div>
                    </div>

                    <div class="right-top">
                        <p class="mt-2">Records Found: 20</p>
                    </div>
                
        </div>
                <!-- <div class="pagination-container">
                    <div class="pagination">
                        <a href="#">A</a>
                        <a class="active" href="#">B</a>
                        <a href="#">C</a>
                        <a href="#">D</a>
                        <a href="#">E</a>
                        <a href="#">F</a>
                        <a href="#">G</a>
                        <a href="#">H</a>
                        <a href="#">I</a>
                        <a href="#">J</a>
                        <a href="#">K</a>
                        <a href="#">L</a>
                        <a href="#">N</a>
                        <a href="#">O</a>
                        <a href="#">P</a>
                        <a href="#">Q</a>
                        <a href="#">R</a>
                        <a href="#">S</a>
                        <a href="#">T</a>
                        <a href="#">U</a>
                        <a href="#">W</a>
                        <a href="#">X</a>
                        <a href="#">Y</a>
                        <a href="#">Z</a>
                    </div>
                </div> -->

               
                <div class="table-body">

                    <table>
                        <tr>
                          <th>Student ID No.</th>
                          <th>Full Name</th>
                          <th>Year Level</th>
                          <th>GPA</th>
                          <th>CGPA</th>
                          <th></th>
                        </tr>
                        @foreach($adviseelist as $student )
                          <tr>
                            <td>{{$student['stud_idnum']}}</td>
                            <td>{{$student['stud_first']}} {{$student['stud_mi']}} {{$student['stud_last']}} </td>
                            <td></td>
                            <td>{{$student['student_gpa']}}</td>
                            <td>1.85</td>
                            <td><a href="{{route('advisee.view')}}">View</a></td>
                          </tr>
                        @endforeach
                        <!-- 
                        <tr>
                            <td>2021-1123</td>
                            <td>Nikki Omandac</td>
                            <td>2</td>
                            <td>1.50</td>
                            <td>1.75</td>
                            <td><a href="#">View</a></td>
                        </tr>
                        <tr>
                            <td>2021-1120</td>
                            <td>Kyle Pacquingan</td>
                            <td>2</td>
                            <td>1.25</td>
                            <td>1.50</td>
                            <td><a href="#">View</a></td>
                        </tr>
                        <tr>
                            <td>2021-2010</td>
                            <td>Kent Pabes</td>
                            <td>2</td>
                            <td>1.25</td>
                            <td>1.50</td>
                            <td><a href="#">View</a></td>
                        </tr>                       
                        <tr>
                            <td>2021-2100</td>
                            <td>Abdulrahman Lingga</td>
                            <td>2</td>
                            <td>1</td>
                            <td>1.25</td>
                            <td><a href="#">View</a></td>
                        </tr>                       
                        <tr>
                            <td>2021-2300</td>
                            <td>Liza Soberano</td>
                            <td>2</td>
                            <td>2</td>
                            <td>1.75</td>
                            <td><a href="#">View</a></td>
                        </tr>  
                        <tr>
                            <td>2021-2010</td>
                            <td>Kathryn</td>
                            <td>1</td>
                            <td>1.85</td>
                            <td>1.85</td>
                            <td><a href="#">View</a></td>
                        </tr>
                         -->
                      </table>

                      
                </div>

@endsection