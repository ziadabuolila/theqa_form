<!DOCTYPE html>
<html lang="ar">
    <head>
        <!-- meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="this system is private property">
        <!-- link icon -->
        <link rel="icon" href="img/logo_icon.png">
        <!-- link css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/staff_data.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>Theqa Pay</title>
    </head>
    <body>
        <?php 
            include 'inc/config.php';
            $IDuse = $_GET['userid'];
            $item = mysqli_query($conection, "SELECT * FROM users WHERE user_id=$IDuse");
            $user = mysqli_fetch_array($item);
        ?>
        <!-- header -->
        <div class='header'>
            <div>
                <a href='index.html' class='navbar-brand'>
                    <img src='img/logo.png' alt='' draggable='false'>
                </a>
                <div id='nav'> 
                    <div class='collapse navbar-collapse mx-2'>
                        <div>
                            <div class='dropdowns'>
                                <div class='dropdown mx-2 my-2'>
                                    <button class='btn dropdown-toggle' type='button' data-toggle='dropdown' aria-expanded='false'>
                                        <span id='User_Name_Show'></span>
                                    </button>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' id="name" onclick="copyToClipboard(this.id)">
                                            <i class='fa fa-user text-dark'></i>
                                            <p class='mx-2'>
                                                <?php echo $user['user_name']?>
                                            </p>
                                        </a>
                                        <div class='dropdown-divider m-0'></div>
                                        <a class='dropdown-item' id="email" onclick="copyToClipboard(this.id)">
                                            <i class="fa-regular fa-envelope"></i>
                                            <p class='mx-2'>
                                                <?php echo $user['user_email']?>
                                            </p>
                                        </a>
                                        <div class='dropdown-divider m-0'></div>
                                        <a class='dropdown-item bg-danger text-center text-light' style="cursor: pointer; border-radius: 0 0 3.5px 3.5px;" id="logout" onclick="logout()">
                                            <i class="fa-solid fa-unlock-keyhole"></i>
                                            <span class='mt-2'>
                                                Log Out
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='IconMenu'>
                        <span></span>
                        <span class='Active'></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- content -->
        <div class="content">
            <!-- menu -->
            <div class='menu'>
                <ul>        
                    <li class='li'>
                        <a href='#' class=''>
                            <i class='fa-solid fa-parachute-box'></i>
                            <span>طلبات التوظيف</span>
                            <i class='fa fa-angle-left'></i>
                        </a>
                        <ul class='mm-collapse'>
                            <li>
                                <a href='index.php?userid=<?php echo $user['user_id']?>'>
                                    <i class='fas fa-file-invoice'></i>
                                    <span> الطلبات </span>
                                </a>
                            </li>
                            <li>
                                <a href='del/index.php?userid=<?php echo $user['user_id']?>'>
                                    <i class="fa-solid fa-trash"></i>
                                    <span> المحذوفات </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class='li'>
                        <a href='#' class=''>
                            <i class='fa-solid fa-users-line'></i>
                            <span>قائمة المعينيين</span>
                            <i class='fa fa-angle-left'></i>
                        </a>
                        <ul class='mm-collapse'>
                            <li>
                                <a href='index_appointed.php?userid=<?php echo $user['user_id']?>' class=''>
                                    <i class='fa-solid fa-id-card-clip'></i>
                                    <span> المعينيين  </span>
                                </a>
                            </li>
                            <li>
                                <a href='del/index_appointed.php?userid=<?php echo $user['user_id']?>'>
                                    <i class="fa-solid fa-trash"></i>
                                    <span> المحذوفات </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class='li'>
                        <a href='#' class=''>
                            <i class="fa-solid fa-signs-post"></i>
                            <span>قائمة المؤجلين</span>
                            <i class='fa fa-angle-left'></i>
                        </a>
                        <ul class='mm-collapse'>
                            <li>
                                <a href='index_postpone.php?userid=<?php echo $user['user_id']?>'>
                                    <i class='fa-solid fa-info'></i>
                                    <span> المؤجلين  </span>
                                </a>
                            </li>
                            <li>
                                <a href='del/index_postpone.php?userid=<?php echo $user['user_id']?>'>
                                    <i class="fa-solid fa-trash"></i>
                                    <span> المحذوفات  </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class='settings'>
                        <a href='settings.php?userid=<?php echo $user['user_id']?>&mood=create' class='active'>
                            <i class='fa fa-cog'></i>
                            <span>الاعدادات</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- show-board -->
            <div class="show-board">
                <div class="title-info">
                    <p>الأعدادات</p>    
                    <div class='dropdowns'>
                        <div class='dropdown mx-2 my-2'>
                            <button class='btn dropdown-toggle' type='button' data-toggle='dropdown' aria-expanded='false'>
                                تصدير
                            </button>
                            <div class='dropdown-menu'>
                                <a class='dropdown-item px-1' onclick="ExportToXLSX('xls')">
                                    <button class='btn btn-info text-center text-light ml-2 w-100'>
                                        التصدير الي إكسيل   
                                    </button>
                                </a>
                                <div class='dropdown-divider m-0'></div>
                                <a class='dropdown-item px-1' onclick="ExportToPDF()">
                                    <button class='btn btn-info text-center text-light ml-2 w-100'>
                                        التصدير الي pdf
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    $finished_mood = $_GET['mood'];
                ?>
                <form action="php/create_user.php?userid=<?=$user['user_id']?>&mood=<?=$finished_mood?>" method="post" id="form">
                    <input type="hidden" id="rowid" name="rowid" value="">
                    <div class="modal-header text-light">
                        <h5 class="modal-title" id="showdataTitle">إنشاء عنصر</h5>
                    </div>
                    <div class="form-row py-3">
                        <div class="col-xl-12 col-md-10 col-sm-10 inputs-group">
                            <div class="form-group">
                                <label for="name"> الأسم على النظام </label>
                                <input type="text" class="form-control" name="name" id="people_name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">البريد على النظام</label>
                                <input type="text" class="form-control " name="email" id="people_email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">كلمة المرور</label>
                                <input type="text" class="form-control " name="password" id="people_password" required>
                            </div>
                            <div class="form-group">
                                <label for="ability"> القدرة </label>
                                <select name="ability" class="form-control" style="width: 209px;" id="people_ability" required>
                                    <option value=""></option>
                                    <option value="true">قادر</option>
                                    <option value="false">غير قادر</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="job"> الوظيفة</label>
                                <input type="text" class="form-control" name="job" id="people_job" required>
                            </div>
                            <div class="form-group">
                                <label for="active"> النشاط </label>
                                <select name="active" class="form-control" style="width: 209px;" id="people_active" required>
                                    <option value=""></option>
                                    <option value="true">نشط</option>
                                    <option value="false">غير نشط</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary ml-2 w-100" data-dismiss="modal" id="save">تسجيل</button>
                        <button type="reset" class="btn btn-primary ml-2 w-100" data-dismiss="modal" id="clear">تنظيف</button>
                    </div>
                </form>
                <div class="data-info">
                    <table class="table table-bordered table-striped" id="table">
                        <thead>
                            <tr class="no">
                                <th>#</th>
                                <th>الأسم على النظام</th>
                                <th>البريد على النظام</th>
                                <th> كلمة المرور</th>
                                <th> القدرة </th>
                                <th> الوظيفة </th>
                                <th> النشاط </th>
                                <th>الاجراءات </th>
                            </tr>
                        </thead>
                        <tbody id="body-data">
                        <?php
                                include('inc/config.php');
                                $result = mysqli_query($conection,'SELECT * FROM users');
                                $i = 1;
                                while($row = mysqli_fetch_array($result)){
                                    echo"
                                        <tr>
                                            <td>$i</td>
                                            <td>$row[user_name]</td>
                                            <td>$row[user_email]</td>
                                            <td style='direction: ltr;'>$row[user_password]</td>
                                            <td>$row[ability]</td>
                                            <td>$row[job]</td>
                                            <td>$row[active]</td>
                                            <td>
                                                <div class='dropdown'>
                                                    <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown' aria-expanded='false' style='padding: 0 !important; height: 35px; width: 55px;'>
                                                        <svg class='svg-inline--fa fa-gear p-1' aria-hidden='true' focusable='false' data-prefix='fas' data-icon='gear' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' data-fa-i2svg=''><path fill='currentColor' d='M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z'></path></svg><!-- <i class='fa fa-cog p-1'></i> Font Awesome fontawesome.com -->
                                                    </button>
                                                    <div class='dropdown-menu' style='position: absolute; transform: translate3d(2px, 35px, 0px); top: 0px; left: 0px; will-change: transform;' x-placement='bottom-start'>
                                                        <form action='settings.php' method='get'>
                                                            <input type='hidden' id='userid' name='userid' value='$user[user_id]'>
                                                            <input type='hidden' id='id' name='id' value='$row[user_id]'>
                                                            <input type='hidden' id='id' name='number' value='$i'>
                                                            <input type='hidden' id='mood' name='mood' value='update'>
                                                            <button type='submit' name='edit' class='btn btn-primary w-100 m-1'>
                                                                تعديل
                                                            </button>
                                                        </form>
                                                        <form action='php/delete.php?userid=$user[user_id]' method='post'>
                                                            <input type='hidden' id='id' name='id' value='$row[user_id]'>
                                                            <input type='hidden' id='typedatabase' name='typedatabase' value='settings'>
                                                            <input type='hidden' id='TOtypedatabase' name='TOtypedatabase' value=''>
                                                            <button class='btn btn-danger w-100 m-1' type='submit'>
                                                                حذف
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>                 
                                        </tr>
                                    ";
                                    $i += 1;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
            if(isset($_GET['edit'])){
                $id = $_GET['id'];
                $peoples = mysqli_query($conection, "SELECT * FROM users WHERE user_id=$id");
                $people = mysqli_fetch_array($peoples);

                $number = $_GET['number'];
                $mood = $_GET['mood'];
                if($mood == 'update'){
                    echo "<script>
                        const rowid = document.querySelector('#rowid');
                        const people_name = document.querySelector('#people_name');
                        const people_email = document.querySelector('#people_email');
                        const people_password = document.querySelector('#people_password');
                        const people_ability = document.querySelector('#people_ability');
                        const people_job = document.querySelector('#people_job');
                        const people_active = document.querySelector('#people_active');

                        rowid.value = '$people[user_id]';
                        people_name.value = '$people[user_name]';
                        people_email.value = '$people[user_email]';
                        people_password.value = '$people[user_password]';
                        people_ability.value = '$people[ability]';
                        people_job.value = '$people[job]';
                        people_active.value = '$people[active]';
                        save.innerHTML = 'إعادة تسجيل العنصر';
                        showdataTitle.innerHTML = 'تعديل العنصر' + `<span>$number</span>`;
                    </script>";
                };
            }
        ?>
        <!-- alert -->
        <div class="alert alert-success d-none" role="alert" id="alert"></div>
        <!-- js files -->
        <script src='js/main.js'></script>
        <script src='js/logout_1.js'></script>
        <script src='js/jquery-3.7.0.min.js'></script>
        <script src='js/popper.min.js'></script>
        <script src='js/bootstrap.js'></script>
        <script src='js/all.min.js'></script>
        <script src='js/menu.js'></script>
        <script src='js/unpkg.com_xlsx@0.15.1_dist_xlsx.full.min.js'></script>
        <script src='js/pdf.bundle.min.js'></script>
        <script src='js/pdf.bundle.js'></script>
        <script src='js/export.js'></script>
        <script>
            let name = document.querySelector('#User_Name_Show');
            name.innerHTML = "<?php echo $user['user_name']?>";
        </script>
        <script>
            if(<?php echo $user['ability']?> == true){
                document.querySelector('.settings').style.display = 'block';
            }else{
                document.querySelector('.settings').style.display = 'none';
            }
        </script>
    </body>
</html>