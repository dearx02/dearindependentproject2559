<!DOCTYPE html>





<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >ส่วนผู้ใช้งาน</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User Name <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> ข้อมูลส่วนตัว</a>
                        </li>
                        
                      
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> ออกจากระบบ </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav"> <!-- เปลี่ยนสีพื้นหลังเมนู -->
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-desktop"></i> หน้าหลัก </a>
                    </li>
                    <li>
                        <a href="profile.php"><i class="fa fa-fw fa-user"></i> ข้อมูลส่วนตัว </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-copy"></i> เพิ่มข้อมูลแบบสำรวจ<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="forms.html"><i class="fa fa-fw fa-home"></i>ข้อมูลครัวเรือน</a>
                            </li>
                            <li>
                                <a href="formsesta.html"><i class="fa fa-fw fa-calendar"></i>ข้อมูลสถานประกอบการ</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="survey.php"><i class="fa fa-fw fa-repeat"></i> อัพเดทข้อมูลแบบสำรวจ </a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-fw fa-sign-out"></i> ออกจากระบบ </a>
                    </li>
                   
                 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         <small></small>
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
                           ข้อมูลที่สำรวจ
                        </h1>			
                         <div class="col-lg-6">
                        <h2>โดย echo ชื่อ member</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>บ้านเลขที่ +หมู่</th>
                                        <th>ประเภท</th>
                                        <th>แก้ไขข้อมูล</th>
                                        <th>เพิ่มข้อมูล</th>
                                        <th>อัพเดทข้อมูล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>บ้านเลขที่ 18/2 หมู่15</td>
                                        <td>ครัวเรือน</td>
                                        <td><span><div class="glyphicon glyphicon-pencil"></span></td>
                                        <td><span><div class="glyphicon glyphicon-plus"></span></td>
                                        <td><span><div class="glyphicon glyphicon-retweet"></span></td>
                                    </tr>
                                    <tr>
                                        <td>/about.html</td>
                                        <td>261</td>
                                        <td>33.3%</td>
                                        <td>$234.12</td>
                                    </tr>
                                    <tr>
                                        <td>/sales.html</td>
                                        <td>665</td>
                                        <td>21.3%</td>
                                        <td>$16.34</td>
                                    </tr>
                                    <tr>
                                        <td>/blog.html</td>
                                        <td>9516</td>
                                        <td>89.3%</td>
                                        <td>$1644.43</td>
                                    </tr>
                                    <tr>
                                        <td>/404.html</td>
                                        <td>23</td>
                                        <td>34.3%</td>
                                        <td>$23.52</td>
                                    </tr>
                                    <tr>
                                        <td>/services.html</td>
                                        <td>421</td>
                                        <td>60.3%</td>
                                        <td>$724.32</td>
                                    </tr>
                                    <tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
                                        <td>$126.34</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                                
                                    

                           

                           

                    
                   
			
          
 					
                            

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
  

      <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


 
</html>
