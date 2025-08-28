
    $(document).ready(function() {


        $("#date_b").flatpickr({
            dateFormat: "d/m/Y",
            locale: "th",
            disableMobile: true
        })




        let checkValueArr = ""
        $(document).on('change', 'input[name="radio-1"]', function() {
            let chackValue = $('input[name="radio-1"]:checked').val();
            let cObject = {
                'check': chackValue
            }

            checkValueArr = chackValue
        })




        $('#formData').submit(function(e) {
            e.preventDefault()

            let pname = $('#pname').val();
            let fname = $('#fname').val();
            let lname = $('#lname').val();
            let position = $('#position').val();
            let depart = $('#depart').val();
            let depart_name = $('#depart_name').val();
            let check = checkValueArr;

            if(pname == "" || fname == "" || lname == ""){
                Swal.fire('กรุณาระบุชื่อ-นามสกุล', '', 'warning');
            }else if(position == ""){
                Swal.fire('กรุณาระบุตำแหน่ง', '', 'warning');
            }else if(depart == ""){
                Swal.fire('กรุณาระบุประเภทหน่วยงาน', '', 'warning');
            }else if(depart_name == ""){
                Swal.fire('กรุณาระบุชื่อหน่วยงาน', '', 'warning');
            }
            else if (check == "") {
                Swal.fire('กรุณาระบุความประสงค์', '', 'warning');
            } else {
                Swal.fire({
                    icon: 'info',
                    title: 'ต้องการบันทึกข้อมูลใช่หรือไม่',
                    showCancelButton: true,
                    cancelButtonText: 'ยกเลิก',
                    confirmButtonText: 'บันทึก',
                    closeOnConfirm: false,
                }).then(function(result) {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: 'add.php',
                            method: 'post',
                            data: {
                                "pname": pname,
                                "fname": fname,
                                "lname": lname,
                                "position": position,
                                "depart": depart,
                                "depart_name": depart_name,
                                "check": check
                            },
                            success: function(result) {
                                if (result == 200) {
                                    Swal.fire('ตอบรับสำเร็จ', '', 'success').then((res) => {
                                        if (res.isConfirmed) {
                                            location.reload();
                                        }
                                    })
                                } else {
                                    Swal.fire('เกิดข้อผิดพลาด', '', 'warning');
                                }
                            }
                        })
                    }
                })
            }






        })
    })
