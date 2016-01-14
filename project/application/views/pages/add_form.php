       <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ข้อมูลครัวเรือน <small>โปรดเพิ่มข้อมูลให้ครบทุกช่อง</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> หากข้อไหนไม่สามารถระบุได้ ให้ใส่เลข 0
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       
                       
                    </div>
                </div>
                <!-- /.row -->

                

  <form role="form" method="post"  id="frame1" action="sql.php">
		 <h1 class="page-header">
                            ฟอร์มข้อมูลแบบสำรวจข้อมูลครัวเรือน
                        </h1>			
                          <div class="row">
                   		 <div class="col-lg-6">
                            <div class="form-group">
                                <label>บ้านเลขที่</label>
                                <input class="form-control" placeholder="บ้านเลขที่ 123/456" autofocus required>
                                <p class="help-block"></p>
                            </div>
                            

                            <div class="form-group">
                                <label>จำนวนคนในครอบครัว</label>
                                <input type="number"  class="form-control" id="menbfa" placeholder="กรอกเป็นตัวเลขเท่านั้น	" max="99" min="1" >
                            </div>        

                            <div class="form-inline">
                                <label>สัตว์เลี้ยง</label>
                                <div class="radio" >
                                    <label>                                       
                                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="0" > ไม่มี
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                         <input type="radio" name="optionsRadios" id="optionsRadios2" value="1" > มี
                                    </label>
                                </div>
                           </div>                           
                   		</div>
                   </div>
                   <div id="me" >
                       <div class="row" >
                       		<div class="form-inline" id="ani">
                             
                                        <label>ประเภทสัตว์&nbsp;&nbsp;</label>
                                   		<select class="form-control" >
                                    	<option value="0">โปรดเลือก</option>
                                        <option value="1">สุนัข</option>
                                        <option value="2">แมว</option>
                                        <option value="3">วัว</option>
                                        <option value="4">เป็ด</option>
                                         <option value="5">ไก่</option>
                                         <option value="6">นก</option>
                                         <option value="7">หมู</option>
                                    </select>                       
                               
                              
                                        <label><input type="number" pattern="[0-9]" name="anigen0" max="50" min="0">&nbsp;&nbsp;จำนวนเพศผู้&nbsp;&nbsp;</label>
                                        <label><input type="number" pattern="[0-9]" name="anigen1" max="50" min="0">จำนวนเพศเมีย&nbsp;&nbsp;</label>
                                                    
                                                             
                             </div>
                         			<center class="col-lg-6">                            
                             
                    <button type="button" class="btn btn-info " id="add"><span class="fa fa-fw fa-plus"></span></button>
                               
                    <button type="button" class="btn btn-danger" id="remove"><span class="fa fa-fw fa-minus"></span></button>
                              		</center><br>
                          
                   </div>
                    		 

                             
               </div>     
                            	
                            

                       

                           


                            <div class="form-group">
                            
                                <label>การจัดการขยะ</label>
                                <label class="radio-inline">
                          				<input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="1"  required>จัดเก็บโดยเทศบาล
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="2" required>นำไปทิ้งที่อื่น
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="o3" required>กำจัดเอง
                                </label>
                                
                            </div>

                           

                           

                    </div>
                   
			<script type="text/javascript" >
		
			</script>
          
 					<div class="col-lg-6" id="personal">
                    <h1 calss="page-header">
                      รายละเอียดรายบุคคล1
                        </h1>
                            <div class="form-inline">
                                <label>ชื่อ</label>
                                <input class="form-control" placeholder="ชื่อจริง"  required>
                                 <label>นามสกุล</label>
                                <input class="form-control" placeholder="นามสกุล"  required>
                                <p class="help-block"></p>
                            </div>
                            <div class="form-inline">
                                <label>เพศ</label>
                                <div class="radio">
                                    <label>                                       
                                         <input type="radio" name="gender" id="gender0" value="0" required >ชาย
                                    </label>
                                </div>
                            	<div class="radio">
                                    <label>
                                         <input type="radio" name="gender" id="gender1" value="1" required>หญิง
                                    </label>
                                </div>
                               </div>
                             <div class="form-group" id="contra">
                             	<label>การคุมกำเนิด</label>
                                <select required class="form-control" id="opcontra" >
                                    	<option  value="">โปรดเลือก</option>
                                        <option  value="1">ไม่มีการคุมกำเนิด</option>
                                        <option value="2">ใช้ยาคุมกำเนิด</option>
                                        <option  value="3">ใส่ห่วงยางอนามัย</option>
                                        <option  value="4">สามีใช้ถุงยางอนามัย</option>
                                        <option  value="5">ทำหมัน</option>
                                    </select>                      
                             </div>
                             
                            
                            

                            <div class="form-group" >
                                <label>สถานะ</label>
                                  <select  required class="form-control" >
                                    	<option value="" >โปรดเลือก</option>
                                        <option value="1" >โสด</option>
                                        <option value="2" >แต่งงานแล้ว</option>
                                        <option value="3" >หย่าร้าง</option>
                                      	
                                    </select>    
                            </div>        

							<div class="form-group">
                                <label>ความสัมพันในครอบครัว</label>
                                  <select required class="form-control"  >
                                    	<option value="">โปรดเลือก</option>
                                        <option value="1">พ่อ</option>
                                        <option value="2">แม่</option>
                                        <option value="3">ลูก</option>
                                        <option value="4">ปู่/ย่า</option>
                                      	<option value="5">น้า/อา</option>
                                        <option value="6">ป้า/ลุง</option>
                                        <option value="7">ลูกเขย</option>
                                        <option value="8">ลูกสะใภ้</option>
                                        <option value="9">ผู้อาศัย</option>
                                    </select>    
                            </div> 
                           <div style="margin:auto;width:400px;"> 
                               <label>วันเกิด</label>
            					  <input  type="text"   name="datebird" id="datebird" style="width:100px;" value="">
                            </div>                     
                          
                            <div class="form-group">
                            
                                <label>โรคประจำตัว</label>
                                <div class="radio">
                                    <label>                                       
                                         <input type="radio" name="disear" id="dis0" value="0" >ไม่มีโรคประจำตัว
                                    </label>
                                </div>
                            	<div class="radio">
                                    <label>
                                         <input type="radio" name="disear" id="dis1" value="1">มีโรคประจำตัว
                                    </label>
                                </div>
                              
                            </div>
                                    
                            <div class="form-group" id="showdis">
                            	<label>โรคประจำตัว</label>
                                	<div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="1" name="disea" >ความดันโลหิตสูง
                                    </label>
                                    </div>
                                   <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="2" name="disea">ความดันโลหิตต่ำ
                                    </label>
                                    </div>
                                    <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="3" name="disea">เบาหวาน
                                    </label>
                                    </div>
                                    <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="4" name="disea">โรคหลอดเลือด
                                    </label>
                                    </div>
                                    <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="5" name="disea">โรคหัวใจ
                                    </label>
                                    </div>
                                    <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="6" name="disea">โรคมะเร็ง
                                    </label>
                                    </div>
                                    <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="7" name="disea">โรคกล้ามเนื้อ
                                    </label>
                                    </div>
                                    <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="8" name="disea">โรคภูมิแพ้
                                    </label>
                                    </div><div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="9" name="disea">กระเพาะ
                                    </label>
                                    </div>
                                    <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="10" name="disea">โรคไขมันในเลือดสูง
                                    </label>
                                    </div>
                                    <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="11" name="disea">วันโรค
                                    </label>
                                    </div>
                                    <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="12" name="disea">อื่นๆ
                                    </label>
										<input type="text" name="other" placeholder="ระบุ...">
                                    </div>
                           </div> 
                           
                           
                           <div class="form-group">
                           			<label>ความผิดปกติทางร่างกาย</label>
                                	<div class="radio" >
                                    <label>
                                         <input type="radio" id="physical0" value="0" name="physical0"  >ปกติ
                                    </label>
                                    </div>
                                    <div class="radio" >
                                    <label>
                                         <input type="radio" id="physical1" value="1" name="physical0" >ไม่ปกติ
                                    </label>
                                    </div>
                           </div>
                           
                            <div class="form-group" id="physicalshow" >
                                    
                                    <div class="radio-inline" >
                                    <label>
                                         <input type="checkbox" value="1" id="physical01" required>พิการ
                                    </label>
                                    </div>
                                    <div class="radio-inline" >
                                    <label>
                                         <input type="checkbox" value="2" id="physical02" required >อัมพาต
                                    </label>
                                   </div>
                                   
                           </div>     
                             
                           
                           <div class="form-group" id="physical011">
                           		<label>พิการด้าน</label>
                                <div class="checkbox">
                           			<label>
                                         <input type="checkbox" value="1" name="defor">พิการด้านการมองเห็น
                                    </label>
                                 </div>
                                <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="2" name="defor">พิการทางการได้ยินและสื่อความหมาย
                                    </label>
                                </div>
                               	<div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="3" name="defor">พิการทางการเคลื่อนไหวหรือร่างกาย
                                    </label>
                                </div>
                              	<div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="4" name="defor">พิการทางจิตใจหรือพฤติกรรม
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="5" name="defor">ความพิการทางสติปัญญา
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="6" name="defor">ความพิการทางการเรียนรู้
                                    </label>
                                </div>
                           </div>  
                           
                           <div class="form-group" id="physical022">
                           		<label>อัมพาตด้าน</label>
                                <div class="checkbox">
                           			<label>
                                         <input type="checkbox" value="1" name="paral">อัมพาตครึ่งซีก
                                    </label>
                                 </div>
                                <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="2" name="paral">อัมพาตแขนขาทั้งสองข้าง
                                    </label>
                                </div>
                               	<div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="3" name="paral">อัมพาตครึ่งท่อน
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                         <input type="checkbox" value="4" name="paral">อัมพฤกษ์ และผู้ป่วยติดเตียง
                                    </label>
                                </div>
                              	
                           </div>   
                           
                           
                           
                                     
                           <div class="form-group">
                           		<label>ระดับการศึกษา</label>
                                	<select required class="form-control">
                                    <option value="">โปรดเลือก</option>
                                    <option value="1">ไม่เคยผ่านการศึกษา</option>
                                    <option value="2">ป.6</option>
                                    <option value="3">ม.3</option>
                                    <option value="4">ม.6/ปวช.</option>
                                    <option value="5">ปวส.</option>
                                    <option value="6">ปริญญาตรี</option>
                                    <option value="7">ปริญญาโท</option>
                                    <option value="8">ปริญญาเอก</option>
                                    </select>
                           </div>
                            <div class="form-group">
                           		<label>อาชีพ</label>
                                	<select required class="form-control">
                                    <option value="">โปรดเลือก</option>
                                    <option value="1">ธุรกิจส่วนตัว</option>
                                    <option value="2">ชาวนา/ชาวสวน</option>
                                    <option value="3">พนักงานรัฐวิสาหกิจ</option>
                                    <option value="4">รับราชการ</option>
                                    <option value="5">รับจ้างทั่วไป</option>
                                    <option value="6">พนักงานเอกชน</option>
                                    <option value="7">พนักงานรัฐอัตตราจ้าง</option>
                                    <option value="8">นักเรียน/นักศึกษา</option>
                                    <option value="9">อื่นๆ</option>
                                    </select>
                           </div>
                                  
                   		<button type="button" id="addmem" >+</button>
                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>
                        </div>
                     </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
