<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link -->
    <link rel="icon" href="img/logo_icon.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/create.css">
    <!-- title -->
    <title>شركة ثقة &nbsp;&nbsp;|&nbsp;&nbsp; إستمارة تقديم</title>
</head>
<body>
    
    <header>
        <img src="img/logo.png" alt="" draggable="false">
        <p class="title">
            شــركـة ثقــة لخــدمـات الـدفـع الإلكـترونـي و الحــلول المــتكامـلة ش . م . م
        </p>
        <h3>استمارة طلب وظيفة</h3>
    </header>
    <div class="container">
        <form action="php/insert.php" method="post" enctype="multipart/form-data">
            <div class="employee" id='employee_specific'>
                <span>خاص بالموظف</span>
                <div class="fields">
                    <div class="field">
                        <input type="text" id="username" name="username" class="input-group" placeholder="" required>
                        <label for="username">الاســم </label>
                    </div>
                    <div class="field">
                        <input type="email" id="mail" name="useremail" class="input-group" placeholder="" required>
                        <label for="email">البريد الإلكتروني</label>
                    </div>
                    <div class="field">
                        <select id="job" name="job" required>
                            <option value=""></option>
                            <option value="منــدوب مبيــعات">منــدوب مبيــعات</option>
                            <option value="مشــرف مبيــعات">مشــرف مبيــعات</option>
                            <option value="مديــر مبيــعات">مديــر مبيــعات</option>
                        </select>
                        <label for="job">الوظيــفة المطــلوبة</label>
                    </div>
                    <div class="field">
                        <select id="enlistment" name="enlistment" required>
                            <option value=""></option>
                            <option value="تــم تأديــة الخــدمـة">تــم تأديــة الخــدمـة</option>
                            <option value="إعفــاء">إعفــاء</option>
                        </select>
                        <label for="enlistment">المــوقف مــن التجــنيد</label>
                    </div>
                    <div class="field">
                        <select id="nationality" name="nationality" required>
                            <option value="مصــري">مصــري</option>
                        </select>
                        <label for="nationality">الجنـــسية </label>
                    </div>
                    <div class="field">
                        <select id="religion" name="religion" required>
                            <option value=""></option>
                            <option value="مسلم">مسلم</option>
                            <option value="مسيحي">مسيحي</option>
                        </select>
                        <label for="religion">الديانة </label>
                    </div>
                    <div class="field">
                        <select id="marital_status" name="marital_status" required>
                            <option value=""></option>
                            <option value="أعــزب">أعــزب</option>
                            <option value="متــزوج">متــزوج</option>
                        </select>
                        <label for="marital_status">الحــاله الإجتــماعيـة</label>
                    </div>
                    <div class="field">
                        <input type="date" id="dateOFbirth" name="dateOFbirth" class="input-group" placeholder="" required>
                        <label for="dateOFbirth">تاريــخ الميـــلاد</label>
                    </div>
                    <div class="field">
                        <input type="text" id="placeOFbirth" name="placeOFbirth" class="input-group" placeholder="" required>
                        <label for="placeOFbirth"> محــل الميـــلاد </label>
                    </div>
                    <div class="field">
                        <input type="text" id="address" name="address" class="input-group" placeholder="" required>
                        <label for="address"> العنــوان </label>
                    </div>
                    <div class="field">
                        <input type="text" id="address_street" name="address_street" class="input-group" placeholder="" required>
                        <label for="address_street">شــارع</label>
                    </div>
                    <div class="field">
                        <input type="tel" maxlength="11" id="numberOFphpne" name="numberOFphpne" class="input-group" placeholder="" required>
                        <label for="numberOFphpne">رقــم الهــاتـف</label>
                    </div>
                    <div class="field">
                        <input type="file" accept="image/*" id="frontOFcard" name="frontOFcard" class="input-group" placeholder="">
                        <label for="frontOFcard">رفــع صـورة البطـاقــة / امــام</label>
                    </div>
                    <div class="field">
                        <input type="file" accept="image/*" id="backOFcard" name="backOFcard" class="input-group" placeholder="">
                        <label for="backOFcard">رفــع صـورة البطـاقــة / خلــف</label>
                    </div>
                    <div class="field">
                        <input type="file" accept="image/*" id="photoOFuser" name="photoOFuser" class="input-group" placeholder="">
                        <label for="photoOFuser">رفــع صــورة شخــصيـة</label>
                    </div>
                </div>
            </div>
            <div class="employee" id="educational">
                <span>المـــؤهـلات العلــميـة</span>
                <div class="fields">
                    <div class="field">
                        <input type="text" id="sideOFstudy" name="sideOFstudy" class="input-group" placeholder="" required>
                        <label for="sideOFstudy">جهــه الدراســـة</label>
                    </div>
                    <div class="field">
                        <input type="text" id="specialization" name="specialization" class="input-group" placeholder="" required>
                        <label for="specialization">التــخصص</label>
                    </div>
                    <div class="field">
                        <input type="text" id="graduation_year" name="graduation_year" class="input-group" placeholder="" required>
                        <label for="graduation_year">سنــة التخـــرج</label>
                    </div>
                    <div class="field">
                        <input type="text" id="educational_qualification" name="educational_qualification" class="input-group" placeholder="" required>
                        <label for="educational_qualification">المــؤهل الـدراسـي</label>
                    </div>
                </div>
            </div>
            <div class="employee" id="courses">
                <span>الـدورات التــدربيــة</span>
                <footer class="footer">( يرجـي ذكـر الـدورات التدربيــة التـي تـزيد مدتهـا عـن شهـر )</footer>
                <div class="fields">
                    <div class="field">
                        <input type="text" id="course_name" name="course_name" class="input-group" placeholder="">
                        <label for="course_name">اســم الــدورة</label>
                    </div>
                    <div class="field">
                        <input type="text" id="course_location" name="course_location" class="input-group" placeholder="">
                        <label for="course_location">مكــان الــدورة</label>
                    </div>
                    <div class="field">
                        <input type="text" id="course_duration" name="course_duration" class="input-group" placeholder="">
                        <label for="course_duration">مــده الــدورة</label>
                    </div>
                    <div class="field">
                        <input type="text" id="typeOFcertificate" name="typeOFcertificate" class="input-group" placeholder="">
                        <label for="typeOFcertificate">نــوع الشــهادة</label>
                    </div>
                    <div class="field">
                        <input type="file" id="photoOFcertificate" name="photoOFcertificate" class="input-group" placeholder="">
                        <label for="photoOFcertificate">رفــع صـورة شهــادة الـدورات التـدربيــة</label>
                    </div>
                </div>
            </div>  
            <div class="employee" id="jobs">
                <span>الخــبرة العمــلية</span>
                <div class="fields">
                    <div class="field">
                        <input type="text" id="job_name" name="job_name_1" class="input-group" placeholder="" required>
                        <label for="job_name">مسـمي الــوظيــفة</label>
                    </div>
                    <div class="field">
                        <input type="text" id="job_duration" name="job_duration_1" class="input-group" placeholder="" required>
                        <label for="job_duration">جهـه العمـــل</label>
                    </div>
                    <div class="field">
                        <input type="date" id="pointOFstart" name="pointOFstart_1" class="input-group" placeholder="" required style="width: 150px;">
                        <label for="pointOFstart">الفتــرة مــن</label>
                    </div>
                    <div class="field">
                        <input type="date" id="pointOFend" name="pointOFend_1" class="input-group" placeholder="" required style="width: 150px;">
                        <label for="pointOFend">إلــي</label>
                    </div>
                    <div class="field">
                        <input type="number" id="salary" name="salary_1" class="input-group" placeholder="" required>
                        <label for="salary">الــراتـب</label>
                    </div>
                    <div class="field">
                        <input type="text" id="reasonFORleaving" name="reasonFORleaving_1" class="input-group" placeholder="" required>
                        <label for="reasonFORleaving">سبــب تـرك الـعـمل</label>
                    </div>
                    <div class="field">
                        <select id="do_you_work" name="do_you_work_1">
                            <option value=""></option>
                            <option value="no">لا</option>
                            <option value="yes">نعم</option>
                        </select>
                        <label for="do_you_work">هـل تعــمل فـي الوقــت الحـالـي</label>
                    </div>
                    <div class="field">
                        <input type="file" id="attached_1" name="attached_1" class="input-group" required>
                        <label for="attached_1">رفــع شهــادة الخبــرة العمليــة</label>
                    </div>
                    <div class="field w-75">
                        <textarea type="text" id="responsibilities" name="responsibilities_1" class="input-group" placeholder="" style="height: 200px;"></textarea>
                        <label for="responsibilities">بيـــن اهــم الواجبــات و المسؤليــات التــي قمــت بهـا اثنــاء عمـــلك</label>
                    </div>
                </div>
            </div>
            <div class="employee" id="jobs">
                <span>الخــبرة العمــلية</span>
                <div class="fields">
                    <div class="field">
                        <input type="text" id="job_name" name="job_name_2" class="input-group" placeholder="" >
                        <label for="job_name">مسـمي الــوظيــفة</label>
                    </div>
                    <div class="field">
                        <input type="text" id="job_duration" name="job_duration_2" class="input-group" placeholder="" >
                        <label for="job_duration">جهـه العمـــل</label>
                    </div>
                    <div class="field">
                        <input type="date" id="pointOFstart" name="pointOFstart_2" class="input-group" placeholder=""  style="width: 150px;">
                        <label for="pointOFstart">الفتــرة مــن</label>
                    </div>
                    <div class="field">
                        <input type="date" id="pointOFend" name="pointOFend_2" class="input-group" placeholder=""  style="width: 150px;">
                        <label for="pointOFend">إلــي</label>
                    </div>
                    <div class="field">
                        <input type="number" id="salary" name="salary_2" class="input-group" placeholder="" >
                        <label for="salary">الــراتـب</label>
                    </div>
                    <div class="field">
                        <input type="text" id="reasonFORleaving" name="reasonFORleaving_2" class="input-group" placeholder="" >
                        <label for="reasonFORleaving">سبــب تـرك الـعـمل</label>
                    </div>
                    <div class="field">
                        <input type="file" accept=".png,.jpg,.pdf,.doc,.docs" id="attached_2" name="attached_2" class="input-group" >
                        <label for="attached_2">رفــع شهــادة الخبــرة العمليــة</label>
                    </div>
                    <div class="field w-75">
                        <textarea type="text" id="responsibilities" name="responsibilities_2" class="input-group" placeholder="" style="height: 200px;"></textarea>
                        <label for="responsibilities">بيـــن اهــم الواجبــات و المسؤليــات التــي قمــت بهـا اثنــاء عمـــلك</label>
                    </div>
                </div>
            </div>
            <div class="employee" id="jobs">
                <span>الخــبرة العمــلية</span>
                <div class="fields">
                    <div class="field">
                        <input type="text" id="job_name" name="job_name_3" class="input-group" placeholder="" >
                        <label for="job_name">مسـمي الــوظيــفة</label>
                    </div>
                    <div class="field">
                        <input type="text" id="job_duration" name="job_duration_3" class="input-group" placeholder="" >
                        <label for="job_duration">جهـه العمـــل</label>
                    </div>
                    <div class="field">
                        <input type="date" id="pointOFstart" name="pointOFstart_3" class="input-group" placeholder=""  style="width: 150px;">
                        <label for="pointOFstart">الفتــرة مــن</label>
                    </div>
                    <div class="field">
                        <input type="date" id="pointOFend" name="pointOFend_3" class="input-group" placeholder=""  style="width: 150px;">
                        <label for="pointOFend">إلــي</label>
                    </div>
                    <div class="field">
                        <input type="number" id="salary" name="salary_3" class="input-group" placeholder="" >
                        <label for="salary">الــراتـب</label>
                    </div>
                    <div class="field">
                        <input type="text" id="reasonFORleaving" name="reasonFORleaving_3" class="input-group" placeholder="" >
                        <label for="reasonFORleaving">سبــب تـرك الـعـمل</label>
                    </div>
                    <div class="field">
                        <input type="file" accept=".png,.jpg,.pdf,.doc,.docs" id="attached_3" name="attached_3" class="input-group" >
                        <label for="attached_1">رفــع شهــادة الخبــرة العمليــة</label>
                    </div>
                    <div class="field w-75">
                        <textarea type="text" id="responsibilities" name="responsibilities_3" class="input-group" placeholder="" style="height: 200px;"></textarea>
                        <label for="responsibilities">بيـــن اهــم الواجبــات و المسؤليــات التــي قمــت بهـا اثنــاء عمـــلك</label>
                    </div>
                </div>
            </div>
            <div class="employee" id="jobs">
                <span>الخــبرة العمــلية</span>
                <div class="fields">
                    <div class="field">
                        <input type="text" id="job_name" name="job_name_4" class="input-group" placeholder="" >
                        <label for="job_name">مسـمي الــوظيــفة</label>
                    </div>
                    <div class="field">
                        <input type="text" id="job_duration" name="job_duration_4" class="input-group" placeholder="" >
                        <label for="job_duration">جهـه العمـــل</label>
                    </div>
                    <div class="field">
                        <input type="date" id="pointOFstart" name="pointOFstart_4" class="input-group" placeholder=""  style="width: 150px;">
                        <label for="pointOFstart">الفتــرة مــن</label>
                    </div>
                    <div class="field">
                        <input type="date" id="pointOFend" name="pointOFend_4" class="input-group" placeholder=""  style="width: 150px;">
                        <label for="pointOFend">إلــي</label>
                    </div>
                    <div class="field">
                        <input type="number" id="salary" name="salary_4" class="input-group" placeholder="" >
                        <label for="salary">الــراتـب</label>
                    </div>
                    <div class="field">
                        <input type="text" id="reasonFORleaving" name="reasonFORleaving_4" class="input-group" placeholder="" >
                        <label for="reasonFORleaving">سبــب تـرك الـعـمل</label>
                    </div>
                    <div class="field">
                        <input type="file" accept=".png,.jpg,.pdf,.doc,.docs" id="attached_4" name="attached_4" class="input-group" >
                        <label for="attached_4">رفــع شهــادة الخبــرة العمليــة</label>
                    </div>
                    <div class="field w-75">
                        <textarea type="text" id="responsibilities" name="responsibilities_4" class="input-group" placeholder="" style="height: 200px;"></textarea>
                        <label for="responsibilities">بيـــن اهــم الواجبــات و المسؤليــات التــي قمــت بهـا اثنــاء عمـــلك</label>
                    </div>
                </div>
            </div>
            <div class="employee last" id="jobs">
                <span>أذكــر ثلاثــة أشخــاص يمكــن الاتصــال بهــم كمــرجـع عنـك</span>
                <div class="fields">
                    <div class="field inp-1">
                        <input type="text" id="person_name_1" name="person_name_1" class="input-group" placeholder="الاســم الاول" required>
                    </div>
                    <div class="field inp-2">
                        <input type="text" id="person_employer_1" name="person_employer_1" class="input-group" placeholder="الوظــيفـة" required>
                    </div>
                    <div class="field inp-3">
                        <input type="text" id="person_address_1" name="person_address_1" class="input-group" placeholder="عنــوان الاتصــال" required>
                    </div>
                    <div class="field inp-4">
                        <input type="text" id="person_phone_1" name="person_phone_1" class="input-group" placeholder="رقــم الهــاتـف" maxlength="11" required>
                    </div>
                </div>
                <hr>
                <div class="fields">
                    <div class="field inp-1">
                        <input type="text" id="person_name_2" name="person_name_2" class="input-group" placeholder="الاســم الاول" required>
                    </div>
                    <div class="field inp-2">
                        <input type="text" id="person_employer_2" name="person_employer_2" class="input-group" placeholder="الوظــيفـة" required>
                    </div>
                    <div class="field inp-3">
                        <input type="text" id="person_address_2" name="person_address_2" class="input-group" placeholder="عنــوان الاتصــال" required>
                    </div>
                    <div class="field inp-4">
                        <input type="text" id="person_phone_2" name="person_phone_2" class="input-group" placeholder="رقــم الهــاتـف" maxlength="11" required>
                    </div>
                </div>
                <hr>
                <div class="fields">
                    <div class="field inp-1">
                        <input type="text" id="person_name_3" name="person_name_3" class="input-group" placeholder="الاســم الاول" required>
                    </div>
                    <div class="field inp-2">
                        <input type="text" id="person_employer_3" name="person_employer_3" class="input-group" placeholder="الوظــيفـة" required>
                    </div>
                    <div class="field inp-3">
                        <input type="text" id="person_address_3" name="person_address_3" class="input-group" placeholder="عنــوان الاتصــال" required>
                    </div>
                    <div class="field inp-4">
                        <input type="text" id="person_phone_3" name="person_phone_3" class="input-group" placeholder="رقــم الهــاتـف" maxlength="11" required>
                    </div>
                </div>
            </div>
            <div class="employee employee-btns">
                <div class="btns">
                    <button class="btn btn-success" type="submit" name="submit">تسجيل</button>
                    <button class="btn btn-danger" type="reset" name="reset">حذف</button>
                </div>
            </div>
        </form>
    </div>
    <button id="btn" title="العودة للأعلى">
        <img src="https://img.icons8.com/ios/50/000000/up-squared.png"/>
    </button>
    <script src="js/unpkg.com_xlsx@0.15.1_dist_xlsx.full.min.js"></script>
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>