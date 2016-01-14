
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

                

  <form role="form" method="post"  id="frame1" action="http://localhost/code/index.php/household_controll/insert_house">
		 <h1 class="page-header">
                            ฟอร์มข้อมูลแบบสำรวจข้อมูลครัวเรือน
                        </h1>			
                          <div class="row">
                   		 	<div class="col-lg-12">
                           		 	<div class="form-inline">
                                		<label>บ้านเลขที่</label>
                               			<input class="form-control" placeholder="บ้านเลขที่ ตัวอย่าง 24/7" name="pk1" autofocus required>
                                		<label>หมู่ที่</label> 
                                        <select class="form-control" name="moo" >
                                    	<option value="0">โปรดเลือก</option>
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
                                    <div class="form-inline">
                                		<label>ถนน</label>
                               			<input class="form-control" placeholder="ชื่อถนน" name="road" autofocus required>
                                		<label>ซอย<input class="form-control" type="number" pattern="[0-9]" name="soi" 
                                        max="100" min="1"> </label>
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
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="3" required>กำจัดเอง
                                </label>
                                
                            </div>                             
                   		
                            <button type="submit" class="btn btn-default">จัดเก็บข้อมูล</button>
                            <button type="reset" class="btn btn-default">ล้างข้อมูล</button>

                        </form>
                        
                   

