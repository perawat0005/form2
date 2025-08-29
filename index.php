<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>



    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&family=Athiti:wght@200;300;400;500;600;700&family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Itim&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        font-family: "Athiti", sans-serif;
    }
</style>

<body>


    <div class="flex justify-center items-center bg-green-200">


        <div class="flex lg:py-15 w-full max-w-5xl">
            <div class="card bg-green-50 rounded-none lg:rounded-lg">
                <figure class="h-full">
                    <img
                        class="w-full h-full object-cover"
                        src="assets/meeting1.jpg"
                        alt="Shoes" />
                </figure>
                <div class="card-body">
                    <span class="card-title text-xl">
                        โครงการรับเสด็จสมเด็จพระเจ้าน้องนางเธอ เจ้าฟ้าจุฬาภรณวลัยลักษณ์ อัครราชกุมารี กรมพระศรีสวางควัฒน วรขัตติยราชนารี โรงพยาบาลห้วยราช อำเภอห้วยราช จังหวัดบุรีรัมย์ ประจำปีงบประมาณ 2568
                        วันที่ 29-31 สิงหาคม พ.ศ.2568 ณ โรงเรียนห้วยราชพิทยาคม อำเภอห้วยราช จังหวัดบุรีรัมย์
                    </span>


                    <div class="divider">ข้อมูลตอบรับ</div>

                    <form id="formData">

                        <div class="md:flex gap-4">
                            <fieldset class="fieldset w-full">
                                <legend class="fieldset-legend text-base text-xl"><span class="text-red-600">*</span> คำนำหน้า</legend>
                                <select class="select validator text-xl w-full" id="pname" required>
                                    <option disabled selected value="">-- เลือกคำนำหน้า --</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                            </fieldset>


                            <fieldset class="fieldset w-full">
                                <legend class="fieldset-legend text-base text-xl"><span class="text-red-600">*</span> ชื่อ</legend>
                                <input type="text" class="input validator text-xl w-full" placeholder="ชื่อ" id="fname" required />
                            </fieldset>

                            <fieldset class="fieldset w-full">
                                <legend class="fieldset-legend text-base text-xl"><span class="text-red-600">*</span> นามสกุล</legend>
                                <input type="text" class="input validator text-xl w-full" placeholder="นามสกุล" id="lname" required />
                            </fieldset>

                        </div>

                        <div class="md:flex mt-4 gap-4">
                            <fieldset class="fieldset w-full">
                                <legend class="fieldset-legend text-base text-xl"><span class="text-red-600">*</span> ตำแหน่ง</legend>
                                <input type="text" class="input validator text-xl w-full" placeholder="ตำแหน่ง" id="position" required />
                            </fieldset>


                            <fieldset class="fieldset w-full">
                                <legend class="fieldset-legend text-base text-xl"><span class="text-red-600">*</span> หน่วยงาน</legend>
                                <select class="select validator text-xl w-full" id="depart" required>
                                    <option disabled selected value="">-- เลือกหน่วยงาน --</option>
                                    <option value="1">โรงพยาบาล</option>
                                    <option value="2">รพ.สต.</option>
                                    <option value="3">สออ.</option>
                                    <option value="4">สอจ.</option>
                                </select>
                            </fieldset>

                            <fieldset class="fieldset w-full">
                                <legend class="fieldset-legend text-base text-xl"><span class="text-red-600">*</span> ชื่อหน่วยงาน</legend>
                                <input type="text" class="input validator text-xl w-full" placeholder="ชื่อหน่วยงาน" id="depart_name" required />
                            </fieldset>
                        </div>



                        <div class="md:flex mt-4">
                            <fieldset class="fieldset">
                                <legend class="fieldset-legend text-base text-xl"><span class="text-red-600">*</span> ความประสงค์เข้าร่วม</legend>

                                <div class="flex gap-6">

                                    <div class="flex items-center gap-2">
                                        <input type="radio" name="radio-1" class="radio radio-success radio-xl validator" value="Y" />
                                        <legend class="fieldset-legend text-base text-xl">เข้าร่วม</legend>
                                    </div>



                                    <div class="flex items-center gap-2">
                                        <input type="radio" name="radio-1" class="radio radio-success radio-xl validator" value="N" />
                                        <legend class="fieldset-legend text-base text-xl">ไม่เข้าร่วม</legend>
                                    </div>
                                </div>

                            </fieldset>
                        </div>



                        <div class="card-actions justify-center mt-10">
                            <button class="btn btn-success w-full lg:w-32" type="submit">บันทึกข้อมูล</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

</body>




<script src="plugins/mask/dist/jquery.inputmask.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/th.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="js/controll.js"></script>


</html>