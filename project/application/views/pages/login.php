<!DOCTYPE html>

<html lang="en"><head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=""> 
    <script type="text/javascript" src="http://localhost/project/js/js-config.js"></script>
    
    <script type="text/javascript" src="http://localhost/project/js/jquery.js"></script>
   
    <script type="text/javascript" src="http://localhost/project/js/validator.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        if(<?php echo $nopass ?>){
             $("#no").hide();
         }else{
            $("no").show();
         }
       
        
    });
    </script>


    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/project/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/project/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="http://localhost/project/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/project/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   

        <!-- Navigation -->
        

    <div id="page-wrapper" >

            <div class="container" >
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <center> <h1 class="page-header">
                           เข้าสู่ระบบ
                        </h1></center>
                     </div>
                </div>
            </div>
                <!-- /.row -->

              <div class="container">
                <div class="card card-container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                                    
                            <form class="form-signin" action="http://localhost/project/index.php/login/login" method="post" data-toggle="validator" role="form" >
                                    <span id="reauth-email" class="reauth-email"></span>
                                    <input type="text" name="user" id="inputId" class="form-control" placeholder="ชื่อผู้ใช้งาน"  data-minlength="6" data-maxlength="10" required autofocus>
                                    <input type="password" name="password" id="inputPassword" data-minlength="6" maxlength="10" class="form-control" placeholder="รหัสผ่านผู้ใช้งาน" required>
                         <div class="from-grup" id="no">
                                    <div class="help-block with-errors"> 
                                        <span class="help-block">รหัสผ่านไม่ถูกต้อง</span>
                                    </div>
                        </div>
                                    
                                    <div id="remember" class="radio">
                                    <label><input type="radio" name="check" required  value="1"> สมาชิก </label>
                                    <label><input type="radio" name="check" required value="0"> เจ้าหน้าที่ </label>

                             

                             


                        </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">ยืนยัน</button>
                <br>




                <a href="register"><font color="black">สมัครสมาชิก</font></a> <a href="http://localhost/project/index.php/register"><font color="black">ลืมรหัสผ่าน</font></a>
                    </div>
            </div>
        
              
            </form><!-- /form -->
                       
                
        </div>
                <!-- /.row -->

                

  
                <!-- /.row -->

           
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>



  



<link rel="stylesheet" href="js/jquery.datetimepicker.css">

 
</body>
<script src="build/jquery.datetimepicker.full.min.js"></script>  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>  --->
<script src="js/jquery.datetimepicker.js"></script>
<script type="text/javascript">   

$(function(){

    var thaiYear = function (ct) {
        var leap=3;  
        var dayWeek=["พฤ.", "ศ.", "ส.", "อา.","จ.", "อ.", "พ."];  
        if(ct){  
            var yearL=new Date(ct).getFullYear()-543;  
            leap=(((yearL % 4 == 0) && (yearL % 100 != 0)) || (yearL % 400 == 0))?2:3;  
            if(leap==2){  
                dayWeek=["ศ.", "ส.", "อา.", "จ.","อ.", "พ.", "พฤ."];  
            }  
        }              
        this.setOptions({  
            i18n:{ th:{dayOfWeek:dayWeek}},dayOfWeekStart:leap,  
        })                
    };    
    
    $("input[name=datebird]").datetimepicker({
        timepicker:false,
        format:'d-m-Y',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000			
        lang:'th',  // แสดงภาษาไทย
        onChangeMonth:thaiYear,          
        onShow:thaiYear,                  
        yearOffset:543,  // ใช้ปี พ.ศ. บวก 543 เพิ่มเข้าไปในปี ค.ศ
        closeOnDateSelect:true,
    });
	    
});
</script>  
</html>
