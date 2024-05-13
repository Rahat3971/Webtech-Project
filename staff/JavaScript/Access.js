function Search(){
    $(document).ready(function () {
        $('#search').on('input', function () {
            var searchTerm = $(this).val().toLowerCase();

            $('#innertable tbody tr').each(function () {
                var rowData = $(this).text().toLowerCase();
                if (rowData.indexOf(searchTerm) !== -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
}
function hover_details_Total_Patient(){
    var counting_patient_input = document.getElementById("patientsdetails");
    var OriginalpatientContent = counting_patient_input.value;

    counting_patient_input.addEventListener("mouseenter",function(){
        counting_patient_input.value="Here listed the total number of Patient.";
    });
    counting_patient_input.addEventListener("mouseleave",function(){
        counting_patient_input.value= OriginalpatientContent;
    });

}

function hover_details_Count_appointment(){
    var counting_appointment_input = document.getElementById("appointmentdetails");
    var OriginalappointmentContent = counting_appointment_input.value;

    counting_appointment_input.addEventListener("mouseenter",function(){
        counting_appointment_input.value="Counting the total Appointment.";
    });
    counting_appointment_input.addEventListener("mouseleave",function(){
        counting_appointment_input.value= OriginalappointmentContent;
    });

}

function hover_details_Avg(){
    var avg_doctor_input = document.getElementById("details");
    var OriginalContent = avg_doctor_input.value;

    avg_doctor_input.addEventListener("mouseenter",function(){
        avg_doctor_input.value="There is show averege patient per doctor.";
    });
    avg_doctor_input.addEventListener("mouseleave",function(){
        avg_doctor_input.value= OriginalContent;
    });

}

function User_Profile(){
    var user_input = document.getElementById("user_profile");
    var OriginalContent = user_input.value;

    user_input.addEventListener("mouseenter",function(){
        user_input.value="Profile!";
    });
    user_input.addEventListener("mouseleave",function(){
        user_input.value= OriginalContent;
    });
    // $(document).ready(function(){
    //     $("user_profile").on('img',function(){
    //         var user_input = $(this).fadeTo(0,0).hover('moseenter',function(){
    //             $(this).fadeTo(100,1);}, function() {$(this).fadeTo(100,0);
    //         });
    //     });
    // });
}
