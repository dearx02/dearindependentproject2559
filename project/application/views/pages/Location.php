
<script type="text/javascript">
    $(document).ready(function() {
        var counter=1;
        $("#me").hide(); 
        $("#contra").hide(); 
        $("input[name=disear]").prop('required', true);
        $("input[name=physical0]").prop('required', true);
            
        $("#gender0").click(function(){$("#opcontra").prop('required', false);});
        $("#gender1").click(function(){$("#opcontra").prop('required', true);});
        $("#gender0").click(function() {$("#opcontra").find("option:selected").removeAttr("selected"); });
        $("#gender1").click(function() {$("#contra").show(700) ;});
        $("#gender0").click(function() {$("#contra").hide(700);});

        $("#name_esta").hide();
        $("#Fnameowner").hide();
        $("#Lnameowner").hide();

        

        $("#store").click(function() {$("#name_esta,#Fnameowner,#Lnameowner").show(700);});
         $("#stall").click(function() {$("#name_esta,#Fnameowner,#Lnameowner").show(700);});
         $("#dorm").click(function() {$("#name_esta,#Fnameowner,#Lnameowner").show(700);});
          $("#rest").click(function() {$("#name_esta,#Fnameowner,#Lnameowner").show(700);});
           $("#houserent").click(function() {$("#name_esta,#Fnameowner,#Lnameowner").show(700);});
            $("#apartment").click(function() {$("#name_esta,#Fnameowner,#Lnameowner").show(700);});

        $("#store").click(function() {$("input[name=name_esta],input[name=Fnameowner],input[name=Lnameowner]").prop('required', true);});
        $("#stall").click(function() {$("input[name=name_esta],input[name=Fnameowner],input[name=Lnameowner]").prop('required', true);});
        $("#dorm").click(function() {$("input[name=name_esta],input[name=Fnameowner],input[name=Lnameowner]").prop('required', true);});
        $("#rest").click(function() {$("input[name=name_esta],input[name=Fnameowner],input[name=Lnameowner]").prop('required', true);});
        $("#houserent").click(function() {$("input[name=name_esta],input[name=Fnameowner],input[name=Lnameowner]").prop('required', true);});
        $("#apartment").click(function() {$("input[name=name_esta],input[name=Fnameowner],input[name=Lnameowner]").prop('required', true);});
        

         $("#house").click(function() {$("#name_esta,#Fnameowner,#Lnameowner").hide(700);});
        $("#house").click(function() {$("input[name=name_esta],input[name=Fnameowner],input[name=Lnameowner]").prop('required', false);});


       

        $("#physical1").click(function(){$("#ph").prop('required', true);});
        
        $("#physicalshow").hide();
        $("#showdis").hide();


        $("#name_esta").hide();
        $("#Fnameowner").hide();
        $("#Lnameowner").hide();


        $("#physical011").hide();
        $("#physical022").hide();
        $("#optionsRadios1").click(function() {$("#me").val("0").hide(700);});
        $("#optionsRadios2").click(function() {$("#me").show(700);});
        
        
        $("#physical1").click(function() {$("#physicalshow").show(500);});
        $("#dis0").click(function() {$("#showdis").hide(700); });
        $("#dis1").click(function() {$("#showdis").show(700); });
        $("#physical01").click(function() {$("#physical011").show(500);});
        $("#physical02").click(function() {$("#physical022").show(500);});
        $("#dis0").click(function() {$("input[name=disea]").prop('checked',false)  });
        $("#physical0").click(function() {$("#physical11,#physical22,input[name=defor],input[name=paral]").prop('checked',false)  });
        $("#physical0").click(function() {$("#physicalshow,#physical022,#physical011").hide(500)  });
        
                        });
                    


</script>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ข้อมูลครัวเรือน <small>โปรดเพิ่มข้อมูลให้ครบทุกช่อง</small>
                        </h1>
                        <ol class="breadcrumb">
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                
                <!-- /.row -->

                

  <form role="form" method="post"  id="frame1" action="sql.php">
		 <h1 class="page-header">
                            เพิ่มข้อมูลแบบสำรวจ
                        </h1>			
                          <div class="row">
                   		 	<div class="col-lg-6">
                            <div class="form-group">
                                
                                    <label>ประเภทข้อมูลแบบสำรวจ</label>
                                        <div class="radio" >
                                            <label><input type="radio" name="TypeAddress" id="house" value="a" required> ครัวเรือน </label>
                                        </div>
                                        <div class="radio">
                                            <label> <input type="radio" name="TypeAddress"  id="store" value="b" required> ร้านค้า</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="TypeAddress"  id="rest" value="c" required> ร้านอาหาร</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="TypeAddress"  id="stall" value="d" required> แผงลอย</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="TypeAddress"  id="dorm" value="e" required> หอพัก</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="TypeAddress" id="houserent" value="f" required> บ้านพัก</label>
                                        </div>
                                        <div class="radio"><label><input type="radio" name="TypeAddress"  id="apartment" value="g" > อพาร์ทเม้นท์</label>
                                        </div>
                                        
                            </div>
                            <div class="form-group" id="name_esta">
                                    
                                        <label>ชื่อร้านค้าสถานประกอบการ</label>
                                        <input class="form-control" placeholder="ชื่อร้านค้า ร้านอาหาร หอพัก เช่น หอพักดวงกมล" name="name_esta"  >
                            </div> 

                             <div class="form-group" id="Fnameowner">
                                    
                                        <label>ชื่อเจ้าของสถานประกอบการ</label>
                                        <input class="form-control" placeholder="ชื่อจริง" name="Fnameowner"   >
                            </div>    
                            <div class="form-group" id="Lnameowner">
                                        <label>นามสกุล</label>
                                        <input class="form-control" placeholder="นามสกุล" name="Lnameowner"  >
                                                
                            </div>


                            <div class="form-group">

                           		

                                		<label>บ้านเลขที่</label>
                               			<input class="form-control" placeholder="บ้านเลขที่ ตัวอย่าง 24/7" name="pk1"  required>
                                		
                            </div>
                            <div class="form-group"><label>หมู่ที่</label> 
                                    <select class="form-control" name="moo" required>
                                    	<option value="">โปรดเลือก</option>
                                        <option value="1">1:เชิงดอย</option>
                                        <option value="2">2:ห้วยแก้ว</option>
                                        <option value="3">3:กองบิน41</option>
                                        <option value="4">4:ห้วยทราย</option>
                                        <option value="5">5:ร่ำเปิง</option>
                                        <option value="6">6:โป่งน้อย</option>
                                        <option value="7">7:ช่างทอง</option>
                                        <option value="8">8:หลิ่งห้า</option>
                                        <option value="9">9:ดอยสุเทพ</option>
                                        <option value="10">10:อุโมงค์</option>
                                        <option value="11">11:ดอยปุย</option>
                                        <option value="12">12:ภูพิงค์</option>
                                        <option value="13">13:สันลมจอย</option>
                                        <option value="14">14:ใหม่หลังมอ</option>
                                        <option value="15">15:ทรายคำ</option>     
                                    </select>                       
                                                        
                            </div>
                            

                            <div class="form-group">
                                
                                		<label>ถนน</label><input class="form-control" placeholder="ชื่อถนน" name="road"  required>
                                		<label>ซอย</label><input class="form-control" type="number" pattern="[0-9]" name="soi"max="100" min="1">
                                
                            </div>
                            <div class="form-group">
                                        <label>เบอร์โทรศัพท์</label><input class="form-control"  name="phone"  pattern="[0-9]">
                            </div>




                            <div class="form-group">
                                
                                <label>การจัดการขยะ</label>
                                    <select class="form-control" name="waste" >

                                        <option value="0">โปรดเลือก</option>
                                        <option value="1">1:จัดเก็บโดยเทศบาล</option>
                                        <option value="2">2:กำจัดเองด้วยวิธีการเผา</option>
                                        <option value="3">3:กำจัดเองด้วยวิธีการฝัง</option>
                                        <option value="4">4:นำไปทิ้งที่อื่น</option>
                                        
                                    </select>   
                               
                               
                                
                            </div>

                           

                           

                    
                   
			
          
 					
                                  
                   		
                            <button type="submit" class="btn btn-default">จัดเก็บข้อมูล</button>
                            <button type="reset" class="btn btn-default">ล้างข้อมูล</button>

                        </form>
                        
                   

                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
