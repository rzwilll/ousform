@extends('layouts.sidebar')


@section('content')

<div class="report-content">
                    <table>
                        <tr>
                            <td><b>Program Title:</b></td>
                            <td> Bachelor of Science in Information Technology</td>
                        </tr>
                        <tr>
                            <td><b>Department:</b></td>
                            <td> Information Technology</td>
                        </tr>
                        <tr>
                            <td><b>Academic Year:</b></td>
                            <td>2021-2022</td>
                        </tr>
                        <tr>
                            <td><b>Reporting Period:</b></td>
                            <td>Second Semester of A.Y. 2021-2022</td>
                        </tr>
                        <tr>
                            <td><b>Report Submission Date:</b></td>
                            <td>May 27, 2022</td>
                        </tr>
                        <tr>
                            <td><b>Program Adviser:</b></td>
                            <td>Rizahtin B. Camama</td>
                        </tr>
                    
                    </table>
                    <br>
                    <form action="">
                        <table>
                            <tr>
                                <td colspan="4" class="report-section"><b>I. Progran Academic Performance Profile</b></td>
                            </tr>
                            <tr>
                                <td><b>Total Program Enrolee:</b></td>
                                <td>40 (out of 80)</td>
                                <td><b>Number of Students with INC:</b></td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><b>Survival Rate:</b></td>
                                <td>100% (40/40)</td>
                                <td><b>Number of Students withdraw from the Program:</b></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><b>Completion Rate:</b></td>
                                <td>100% (out of 80)</td>
                                <td><b>Number of Students with failing grades:</b></td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><b>Promotion Rate:</b></td>
                                <td>100% (out of 80)</td>
                                <td><b>Number of Rizal's Excellence Awardees:</b></td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><b>Failure Rate:</b></td>
                                <td>2.5%(out of 80)</td>
                                <td><b>Number of Chancellor's Excellence Awardees:</b></td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><b>Dropout Rate:</b></td>
                                <td> 0% (out of 80)</td>
                                <td><b>Number of Dean's Excellence Awardees:</b></td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><b>Average GPA of Students:</b></td>
                                <td>1.5444</td>
                                <td><b>Number of Students with GPA below 2.50:</b></td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><b>Average CGPA of Students:</b></td>
                                <td>1.75</td>
                                <td><b>Number of Students with CGPA below 2.50:</b></td>
                                <td>1</td>
                            </tr>
                        </table>
                         <br>
                        <table>
                            <tr>
                                <td colspan="4" class="report-section"><b>II. Program Engagement & Activities</b></td>
                            </tr>
                            <tr>
                                <td><b>Objectives</b></td>
                                <td><b>Curricular & Co-curricular Activities</b></td>
                                <td><b> Accomplishment</b></td>
                                <td></td>
                            </tr>
                           
                            <tr>
                                <td><input type="text " name="" id="objective" class="form-control"placeholder="Objective..."></td>
                                <td><input type="text " name="" id="activities" class="form-control"placeholder="....."></td>
                                <td><input type="text " name="" id="accomplishment" class="form-control"placeholder="....."></td>
                                <td class=" col-1 add-btn"> </td>
                            </tr>
                            <tr>
                                <td><input type="text " name="" id="objective" class="form-control"placeholder="Objective..."></td>
                                <td><input type="text " name="" id="activities" class="form-control"placeholder="....."></td>
                                <td><input type="text " name="" id="accomplishment" class="form-control"placeholder="....."></td>
                                <td class=" col-1 add-btn"> <button class="add-button"> <a href=""><i class='bx bx-plus'></i>Add</a></button></td>
                            </tr>
                        </table>
                        <br>
                        <table>
                            <tr>
                                <td colspan="3" class="report-section"><b>III. Program Outputs and Deliverables</b></td>
                            </tr>
                            <tr>
                                <td><b>Program Outputs</b></td>
                                <td><b>Deliverables</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="text " name="" id="prog_output" class="form-control"placeholder="..."></td>
                                <td><input type="text " name="" id="deliverables" class="form-control"placeholder="..."></td>
                                <td class="col-1 add-btn"> <button class="add-button"> <a href=""><i class='bx bx-plus'></i>Add</a></button></td>
                            </tr>
                        </table>
                        <br>
                        <table>
                            <tr>
                                <td colspan="4" class="report-section"><b>IV. Consultation and Advising</b></td>
                            </tr>
                            <tr>
                                <td>Date of Consultation</td>
                                <td>Nature of Advising</td>
                                <td>Action Taken</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="text " name="" id="date" class="form-control"placeholder="..."></td>
                                <td><input type="text " name="" id="nature" class="form-control"placeholder="..."></td>
                                <td><input type="text " name="" id="action" class="form-control"placeholder="..."></td>
                                <td class=" col-1 add-btn"> <button class="add-button"> <a href=""><i class='bx bx-plus'></i>Add</a></button></td>
                            </tr>
                        </table>
                        <br>
                        <table>
                            <tr>
                                <td colspan="2" class="report-section"><b>V.Risk and Challenges</b></td>
                            </tr>
                            <tr>
                                <td><input type="text " name="" id="risk" class="form-control"placeholder="..."></td>
                                <td class="col-1 add-btn"> <button class="add-button"> <a href=""><i class='bx bx-plus'></i>Add</a></button></td>
                            </tr>
                        </table>
                        <br>
                        <table>
                            <tr>
                                <td colspan ="2"class="report-section"><b>V.Collaborations and Linkage</b></td>
                            </tr>
                            <tr>
                                <td><input type="text " name="" id="collaboration" class="form-control"placeholder="..."></td>   
                                <td class=" col-1 add-btn"> <button class="add-button"> <a href=""><i class='bx bx-plus'></i>Add</a></button></td>
                            </tr>
                        </table>
                        <br>
                        <table>
                            <tr>
                                <td  colspan= "2"class="report-section"><b>VII. Problems Encountered</b></td>
                               
                            </tr>
                            <tr>
                                <td><input type="text " name="" id="problems" class="form-control"placeholder="..."></td>   
                                <td class=" col-1 add-btn"> <button class="add-button"> <a href=""><i class='bx bx-plus'></i>Add</a></button></td>
    
                            </tr>
    
                        </table>
                        <br>
                        <table>
                            <tr>
                                <td  colspan="2" class="report-section"><b>VIII. Recommendations</b></td>
                            </tr>
                            <tr>
                                <td><input type="text " name="" id="recommendations" class="form-control"placeholder="..."></td>   
                                <td class="col-1 add-btn"> <button class="add-button"> <a href=""><i class='bx bx-plus'></i>Add</a></button></td>
    
                            </tr>
                        </table>
                        <br>
                        <table>
                            <td colspan="2" class="report-section"><b>IX.Program Plans</b></td>
                            </tr>
                            <tr>
                                <td><input type="text " name="" id="plans" class="form-control"placeholder="..."></td>   
                                <td class=" col-1 add-btn"> <button class="add-button"> <a href=""><i class='bx bx-plus'></i>Add</a></button></td>
                            </tr>
    
                        </table>

                        <button class="mt-2  text-center btn btn-primary" style=" border: none; background: #a41d24;"><b style=" color:white; padding:1em;">SUBMIT</b></button>
                    </form>




                </div>

@endsection