<?php
session_start();

include "./include/config.php";

    $data = "SELECT * FROM table_applicant";
    $result = mysqli_query($con,$data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <style>
        th {
            padding: 15px;
        }
    </style>
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
                <h4>เลือกตั้ง จังหวัด <strong>เลย</strong> เขต <strong>1</strong></h4>
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
                                <td class="text-center"><?php echo $row['candidate_number']; ?></td>
                                <td><img width="80px;" src="<?php echo $row['logo']; ?>" alt=""></td>
                                <td><?php echo $row['party_name']; ?></td>
                                <td><img src="<?php echo $row['candidate_picture']; ?>" width="80px;"></td>
                                <td><?php echo $row['candidate_name']; ?></td>
                                <td>
                                    <input type="radio" name="radio" value="<?php echo $row['candidate_id']; ?>" id="">
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
                    <!-- <button class="btn btn-success" id="datasave" data-toggle="modal" data-target="#ConfirmSave"
                       >บันทึกข้อมูล</button> -->
                       <button class="btn btn-success" id="datasave" data-toggle="modal" data-target="#ConfirmSave">บันทึกข้อมูล </button>
                       <!-- <input type="button" class="btn btn-success" onclick="confir();" value="Save"> -->

                    <!-- Modal -->
                    <div class="modal fade" id="ConfirmSave" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ยืนยันการเลือกผู้สมัคร</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               คุณต้องการที่จะเลือก <strong id="span_name" ></strong> หรือไม่
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">ยืนยัน</button>
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
                 $('#add').click(function(){  
                      $('#insert').val("Insert");  
                      $('#insert_form')[0].reset();  
                 });  
                 $(document).on('click', '#datasave', function(){  
                    //   var employee_id = $(this).attr("id"); 
                      var choose_id = $("input[name='radio']:checked").val(); 
                    //   alert(choose_id);
                      $.ajax({  
                           url:"fetch.php",  
                           method:"POST",  
                           data:{choose_id:choose_id},  
                           dataType:"json",  
                           success:function(data){  
                                // alert(data.party_name); OK
                                // $('#span_name').val(data.party_name);   
                                $('#span_name').html(data.party_name); 
                                $('#ConfirmSave').modal('show');  
                           }  
                      });  
                 });  
                 
                 $(document).on('click', '.view_data', function(){  
                      var employee_id = $(this).attr("id");  
                      if(employee_id != '')  
                      {  
                           $.ajax({  
                                url:"select.php",  
                                method:"POST",  
                                data:{employee_id:employee_id},  
                                success:function(data){  
                                     $('#employee_detail').html(data);  
                                     $('#dataModal').modal('show');  
                                }  
                           });  
                      }            
                 });  
            });  
            </script>
</body>

</html>