const dateForm = document.querySelector('#dateForm');
const buttonDate = document.querySelector('#buttonDate');





const loader = document.getElementById("loader");

dateForm.addEventListener('submit', (event) => {
    event.preventDefault();
    const date = document.querySelector('#date').value;


    if(date !== "") {

        buttonDate.disabled = true;
        buttonDate.style.backgroundColor = "#aea9a9";

        loader.style.display = "block";


        $.ajax({
            url: 'https://hub.integrat.pro/api/smartisReport/reportByDate.php',
            method: 'POST',
            dataType: 'json',
            data: { inputData: date },
            success: function(response) { // Функция, которая будет выполнена при успешном выполнении запроса
                const url = 'https://hub.integrat.pro/api/smartisReport/showReport.php?resultData=' + encodeURIComponent(JSON.stringify(response))
                    + '&date=' + date;

                buttonDate.disabled = false;
                buttonDate.style.backgroundColor = "green";

                loader.style.display = "none";


                window.open(url, '_blank');
            },
            error: function(jqXHR, textStatus, errorThrown) { // Функция, которая будет выполнена при ошибке запроса
                console.log(textStatus + ': ' + errorThrown); // Выводим ошибку в консоль
            }
        });

    }


});















