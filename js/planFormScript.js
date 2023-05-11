



$(document).ready(function() {

    let date = null;
    let inputDate = null;


    $('#selectForm').hide();

    $('#dateForm').submit(function(event) {

        event.preventDefault();
        date = $('#date').val();



        if(date !== "") {

            $(this).hide();

            $('#selectForm').show();

        }


    });

    $('#selectForm').submit(function(event) {


        event.preventDefault();

        inputDate = $('#select').find('option:selected').text();




        if(inputDate !== "") {

            $(this).hide();

            $('#channelsForm').show();



            const dateObj = new Date(date);

            const day = dateObj.getDate().toString().padStart(2, "0");
            const month = (dateObj.getMonth() + 1).toString().padStart(2, "0");
            const year = dateObj.getFullYear().toString();
            const formattedDate = `${day}.${month}.${year}`;


            $('#dateValue').text(`Дата: ${formattedDate}`);
            $('#selectValue').text(`ЖК: ${inputDate}`);



        }




    });


    $('#channelsForm').submit(function(event) {

        event.preventDefault();


        const form = document.getElementById('channelsForm');
        const inputs = form.querySelectorAll('input[type="number"]');

        const data = {};

        inputs.forEach((input) => {
            data[input.name] = input.value;
        });


        $.ajax({
            url: 'https://hub.integrat.pro/api/smartisReport/leadsPlan/savePlan.php',
            method: 'POST',
            data: { date: date,
                jk: inputDate,
                data: data

            },
            success: function() {

                location.reload();



            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus + ': ' + errorThrown);
            }
        });



















    });








    });













