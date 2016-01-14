 <div id="page-wrapper" style=" height: auto;">

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


                

  <form role="form" method="post"  id="frame1" >
		 <h1 class="page-header">
                            เพิ่มข้อมูลสัตว์เลี้ยง
                        </h1>			
                          <div class="row">
                   		 	<div class="col-lg-8">
                           
                            <div class="form-group" id="showadd">
                                    
                                        <label>เพิ่มข้อมูลไปยังบ้านเลขที่</label>
                                        <input class="form-control" placeholder="echo บ้านเลขที่ หมู่" name="" readonly  >
                            
                                
                                        <label>
                                        
                            </div>    
                           
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

                    
                                               
                    <div class="form-group">
                        <button type="button" class="btn btn-info " id="add"><span class="fa fa-fw fa-plus"></span></button>
                               
                        <button type="button" class="btn btn-danger" id="remove"><span class="fa fa-fw fa-minus"></span></button>
                                   
                          
                   </div>
                             
                    <div class="form-group">
                        <div class="form-inline">
                            <label>สัตว์อื่นๆ</label><input type="text" class="form-control" placeholder="คำเรียกสัตว์เลี้ยง">
                            <label>จำนวนเพศผู้</label><input type="number" pattern="[0-9]" name="etc0" max="50" min="0">
                            <label>จำนวนเพศเมีย</label><input type="number" pattern="[0-9]" name="etc1" max="50" min="0">
                        </div>
                    </div>   
                   		
                            <button type="submit" class="btn btn-default">จัดเก็บข้อมูล</button>
                            <button type="reset" class="btn btn-default">ล้างข้อมูล</button>

                        </form>
    
                    </div>
                </div>
        </div>
</div>           
                   

                    
       
