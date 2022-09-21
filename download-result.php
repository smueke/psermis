 <?php 
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
session_start();
ob_start();
require_once('includes/configpdo.php');
error_reporting(0);
?>

<html>
<style>
body {
  padding: 4px;
  text-align: left;
}

table {
  width: 100%;
  margin: 2 0px auto;
  table-layout: auto;
}

.fixed {
  table-layout: fixed;
}

table,
td,
th {
  border-collapse: collapse;
}

th,
td {
  padding: 1px;
  border: solid 1px;
  text-align: center;
}


</style>
<center><img src="images/logo-3.png" alt="logo" style="width:80px;"><br>
                                                        <b>
                                                     Ndauni Day & Boarding Primary School<br>
                                                     P.O BOX 13-90137<br>
                                                 Pupil's Results Slip</b></center><br>
                                                 <hr style="height:2px; border:none; color:#000; background-color:black;">
<?php $rollid=$_SESSION['rollid'];
$classid=$_SESSION['classid'];
$qery = "SELECT   tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblclasses.ClassName,tblclasses.Term from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId where tblstudents.RollId=? and tblstudents.ClassId=?";
$stmt21 = $mysqli->prepare($qery);
$stmt21->bind_param("ss",$rollid,$classid);
$stmt21->execute();
                 $res1=$stmt21->get_result();
                 $cnt=1;
                   while($result=$res1->fetch_object())
                  {  ?>
<p><b>Pupil Name :</b> <?php echo htmlentities($result->StudentName);?>&nbsp; &nbsp;&nbsp; &nbsp;
<b>Pupil UPI NO :</b> <?php echo htmlentities($result->RollId);?>&nbsp; &nbsp;&nbsp; &nbsp;
<p><b>Pupil Class:</b> <?php echo htmlentities($result->ClassName);?>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
<b>Term: </b><?php echo htmlentities($result->Term);?>
<?php }

    ?>

     <div class="panel-body p-20">

 <table class="table table-inverse" border="1">
                      
                                                <table class="table table-hover table-bordered">
                                                <thead>
                                                        <tr>
                                                            <th>s/no</th>
                                                            <th>Subject Code</th>
                                                            <th>Subject</th>    
                                                            <th>Marks</th>
                                                        </tr>
                                               </thead>
  


                                                  
                                                  <tbody>
<?php                                              
// Code for result
 $query ="select t.StudentName,t.RollId,t.ClassId,t.marks,SubjectCode,SubjectId,tblsubjects.SubjectName from (select sts.StudentName,sts.RollId,sts.ClassId,tr.marks,SubjectId from tblstudents as sts join  tblresult as tr on tr.StudentId=sts.StudentId) as t join tblsubjects on tblsubjects.id=t.SubjectId where (t.RollId=? and t.ClassId=?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ss",$rollid,$classid);
$stmt->execute();
                 $res=$stmt->get_result();
                 $cnt=1;
                   while($row=$res->fetch_object())
                  {

    ?>

                                                    <tr>
                                                <td ><?php echo htmlentities($cnt);?></td>
                                                <td><?php echo htmlentities($row->SubjectCode);?></td>
                                                      <td><?php echo htmlentities($row->SubjectName);?></td>
                                                      <td><?php echo htmlentities($totalmarks=$row->marks);?></td>
                                                    </tr>
<?php 
$totlcount+=$totalmarks;
$cnt++;}
$grade = '';
$comments = '';
                            if($totlcount >=0 && $totlcount<= 99){
                                    $grade = 'C';
                                }else if($totlcount > 100 && $totlcount <= 199){
                                    $grade = 'C';
                                }else if($totlcount > 200 && $totlcount <=249){
                                    $grade = 'C+';
                                }else if($totlcount > 250 && $totlcount <=259){
                                    $grade = 'B-';
                                }else if($totlcount > 260 && $totlcount <=299){
                                    $grade = 'B';
                                }else if($totlcount > 300 && $totlcount <= 349){
                                    $grade = 'B+';
                                }else if($totlcount > 350 && $totlcount <= 399){
                                    $grade = 'A-';
                                }else if($totlcount > 400 && $totlcount <= 499){
                                    $grade = 'A';
                                }


                            if($totlcount >=0 && $totlcount<= 99){
                                    $comments = 'Weak';
                                }else if($totlcount > 100 && $totlcount <= 199){
                                    $comments = 'Poor';
                                }else if($totlcount > 200 && $totlcount <=249){
                                    $comments = 'Fair';
                                }else if($totlcount > 250 && $totlcount <=259){
                                    $comments = 'Work Harder';
                                }else if($totlcount > 260 && $totlcount <=299){
                                    $comments = 'Everage';
                                }else if($totlcount > 300 && $totlcount <= 349){
                                    $comments = 'Good';
                                }else if($totlcount > 350 && $totlcount <= 399){
                                    $comments = 'V.Good';
                                }else if($totlcount > 400 && $totlcount <= 499){
                                    $comments = 'Excellent';
                                }

?>
<tr>
<th scope="row" colspan="3">Total Marks</th>
<td><b><?php echo htmlentities($totlcount); ?></b> out of <b><?php echo htmlentities($outof=($cnt-1)*100); ?></b></td>
 </tr>
<tr>
  <th scope="row" colspan="3">Percntage</th>           
  <td><b><?php echo  htmlentities($totlcount*(100)/$outof); ?> %</b></td>
    </tr>
    <tr>
<th scope="row" colspan="3">Grade</th>
<td><b><?php echo htmlentities($grade); ?>
</tr> 
 <tr>
<th scope="row" colspan="3">Comments</th>
<td><b><?php echo htmlentities($comments); ?>
</tr>
      </tbody>
        </table>
        <table>
        <tr>
          
            <hr style="height:2px; border:none; color:#000; background-color:black;">
<b>H/T signature:...........................</b>&nbsp; &nbsp;&nbsp; &nbsp;

<b>Date:..............................</b> 

</tr>
</table>
           </div>
          
                                                     
</html>
<b>Signed:..................</b><br>
                                                     <b>Date:.....................</b><br>
<?php
$html = ob_get_clean();
$dompdf = new DOMPDF();
$dompdf->setPaper('A4', 'Potrait');
$dompdf->load_html($html);
$dompdf->render();
//$dompdf->stream("",array("Attachment" => false));
$dompdf->stream("result.pdf");
?>