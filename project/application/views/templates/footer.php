
    <!-- jQuery -->
    <script src="http://localhost/project/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/project/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="http://localhost/project/js/plugins/morris/raphael.min.js"></script>
    <script src="http://localhost/project/js/plugins/morris/morris.min.js"></script>
    <script src="http://localhost/project/js/plugins/morris/morris-data.js"></script>



  



<link rel="stylesheet" href="http://localhost/project/js/jquery.datetimepicker.css">

 
</body>
<script src="http://localhost/project/build/jquery.datetimepicker.full.min.js"></script>  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>  -->
<script src="http://localhost/project/js/jquery.datetimepicker.js"></script>
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
