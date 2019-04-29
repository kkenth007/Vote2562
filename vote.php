<?php
session_start();
$ID=$_SESSION['ID'];
include "./include/config.php";

    // $data = "SELECT * FROM applicant";
    $data = "SELECT * FROM applicant INNER JOIN area ON applicant.AREA_ID = area.AREA_ID WHERE area.AREA_ID=$ID";
    $result = mysqli_query($con,$data);
    // print_r($result);

    $areaname = "SELECT * FROM area WHERE AREA_ID=$ID";
    $fethName = mysqli_query($con,$areaname);
    $all = mysqli_fetch_array($fethName);
    
    // echo $_SESSION['IDCard']."<br/>";
    // echo $_SESSION['Fullname']."<br/>";
    // echo $_SESSION['Register']."<br/>";
    // echo $_SESSION['Password']."<br/>";
    // echo $_SESSION['ID']."<br/>";
    // echo $_SESSION['status']."<br/>";
    // echo "Status_SCORE => ".$_SESSION['Status_scored'];

    if($_SESSION['Status_scored'] == '1'){
      header("Location:logout.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <?php include "./include/header.php"; ?>
</head>

<body>
        

    <div class="jumbotron text-center">
        <h1>เลือกตั้ง 62 เด้อ <i class="fas fa-vote-yea"></i> </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <ul class="list-group">
                    <li class="list-group-item active">เมนู</li>
                    <li class="list-group-item"><a href="logout.php">ออกจากระบบ</a></li>
                </ul>
            </div>
            <div class="col-sm-8">
                <h4>เลือกตั้ง จังหวัด <strong><?php echo $all['province']; ?></strong> <?php echo $all['areaname']; ?> <strong></strong></h4>
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th width="10px;">หมายเลข</th>
                                <th width="90px;">โลโก้พรรค</th>
                                <th>ชื่อพรรค</th>
                                <th width="90px;">รูปผู้สมัคร</th>
                                <th width="220px;">ชื่อผู้สมัคร</th>
                                <th>ลงคะเเนน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                            <tr>
                                <td class="text-center"><?php echo $row['Number_applicant']; ?></td>
                                <td><img width="80px;" src="<?php echo $row['Logo_applicant']; ?>" alt=""></td>
                                <td><?php echo $row['Name_applicant']; ?></td>
                                <td><img src="<?php echo $row['Logo_Candidate']; ?>" width="80px;"></td>
                                <td><?php echo $row['Candidate_name']; ?></td>
                                <td>
                                    <input type="radio" name="radio" value="<?php echo $row['ID_Candidate']; ?>" id="">
                                </td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td class="bg-warning" colspan="6" style="padding: 15px;">
                                    ไม่ประสงค์ลงคะเเนน <input type="radio" name="radio" value="ไม่ประสงค์ลงคะเเนน" id="" checked> 
                                </td>
                            </tr>
                        </tbody>

                    </table>
                       <button class="btn btn-success" id="datasave" data-toggle="modal" data-target="#ConfirmSave">บันทึกข้อมูล </button>
                       <!-- <input type="button" class="btn btn-success" onclick="confir();" value="Save"> -->

                    <!-- Modal -->
                    <div class="modal fade" id="ConfirmSave" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form action="fetch.php" method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ยืนยันการเลือกผู้สมัคร</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               คุณต้องการที่จะเลือก <strong id="span_name" ></strong> หรือไม่
                               <input type="hidden" name="check" id="checkX">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="confirm_OK">ยืนยัน</button>
                            </form>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </form> -->
                <br><br><br>
            </div>
        </div>

        <script>  
            $(document).ready(function(){  
                 $(document).on('click', '#datasave', function(){  
                    //   var choosee_id = $(this).attr("id"); 
                      var choose_id = $("input[name='radio']:checked").val(); 

                      document.getElementById("checkX").value = choose_id;
                    //   alert(choose_id);
                      $.ajax({  
                           url:"fetch.php",  
                           method:"POST",  
                           data:{choose_id:choose_id},  
                           dataType:"json",  
                           success:function(data){  
                                // alert(data.party_name); OK
                                // $('#span_name').val(data.party_name);   
                                $('#span_name').html(data.Name_applicant); 
                                $('#ConfirmSave').modal('show');  
                           }  
                      });  
                 });  
                 
                 $(document).on('click', '#confirm_OK', function(){  
                    var chooses_id = $("input[name='radio']:checked").val(); 
                      if(chooses_id != '')  
                      {  
                           $.ajax({  
                                url:"fetch.php",  
                                method:"POST",  
                                data:{Insert:chooses_id},  
                                success:function(data){  
                                    //  $('#employee_detail').html(data);  
                                    //  $('#dataModal').modal('show');  
                                }  
                           });  
                      }            
                 });  
            });  
            </script>
</body>

</html>