// function formToJson(form) {
//     console.log("data 1");
//     console.log(form);
//     var formData = form.serializeArray();
//     console.log("data 2");
//     console.log(formData);
//     var json = {};
//
//     $.each(formData, function() {
//         json[this.name] = this.value;
//     });
//
//     console.log("data 2");
//     console.log(json);
//     return JSON.stringify(json);
// }
//
//
// function submitreload(urlpost,postid,request) {
//     e.preventDefault();
//     var formData = {};
//     formData['data'] = $('#'+postid).serializeArray();
//     console.log('data');
//     console.log(formData['data'] );
//     console.log('data2');
//     console.log(JSON.stringify(formData));
//
//     swal({
//         title: "Checking...",
//         text: "Please wait",
//         icon: "images/ajaxloader.gif",
//         iconHtml: 1500,
//         showConfirmButton: false,
//         allowOutsideClick: false
//     });
//     $.ajax
//     ({
//         type: 'POST',
//         url: urlpost,
//         data: JSON.stringify(formData),
//         contentType: 'application/json',
//
//         success: function () {
//
//             // document.getElementById('myForm').style.display = 'none';
//             console.log("successful");
//
//             // sessionStorage.setItem("submitsuccess", "true");
//             // document.location.reload();
//             // alert("login sucessful")
//             swal({
//                 title: 'Sucesss!',
//                 text: 'Success in '+request +" !",
//                 icon: 'success',
//                 button: 'Close',
//                 timer: 1000
//             });
//         },
//         error: function (x, e) {
//             // alert("login unsucessful")
//             swal({
//                 title: 'Error !',
//                 text: x.statusText,
//                 icon: 'error',
//                 button: 'Close',
//             });
//             // for error handling
//             if (x.status == 0) {
//                 console.log('You are offline!! -  Please Check Your Network.');
//             } else if (x.status == 404) {
//                 console.log('Requested URL not found.');
//             } else if (x.status == 500) {
//                 console.log('Internal Server Error.');
//             }
//             else if (x.status == 400) {
//                 console.log('Validation Error.');
//             }
//             else if (e == 'parsererror') {
//                 console.log('Error. - Parsing JSON Request failed.');
//             } else if (e == 'timeout') {
//                 console.log('Request Time out.');
//             } else {
//                 console.log('Unknown Error. - ' + x.responseText);
//             }
//         }
//     });
//     return false;
// }
//


$(document).ready(function() {
    $('#myTable').DataTable();
    $('#myForm').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission

        swal({
            title: "Checking...",
            text: "Please wait",
            icon: "images/ajaxloader.gif",
            iconHtml: 1500,
            showConfirmButton: false,
            allowOutsideClick: false
        });

        var formData = {};
        formData['data'] = $('#myForm').serializeArray();
        console.log(formData['data'])
            var json = {};

            $.each(formData['data'], function() {
                json[this.name] = this.value;
            });

        $.ajax({
            url: 'http://localhost:8712/loan/api/calculate',
            type: 'POST',
            dataType: 'json',
            contentType: 'application/json',
            data: JSON.stringify(json), // Convert the data to a JSON string
            success: function(response) {
                // Handle the success response from the server
                console.log(response);
                            swal({
                title: 'Sucesss!',
                text: 'Success in calculating loan' +" !",
                icon: 'success',
                button: 'Close',
                timer: 1000
            });
           displayData(response);
            },
            error: function(xhr, status, error) {
                // Handle any errors that occur during the request
                console.error(error);
            swal({
                title: 'Error !',
                text: status,
                icon: 'error',
                button: 'Close',
            });
            }
        });
    });
    $('#myModalForm').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission

        swal({
            title: "Checking...",
            text: "Please wait",
            icon: "images/ajaxloader.gif",
            iconHtml: 1500,
            showConfirmButton: false,
            allowOutsideClick: false
        });

        var table = $('#myTable').DataTable();
        const data = table.rows().data().toArray();
        var columns = ['Payment Number','Period Installments','Interest Payment','Principal Payment','Remaining Balance'];
        var dataAsHTML = '<table><tr>';
        for(var i in columns){
            dataAsHTML += '<th>'+columns[i]+'</th>';
        }
        dataAsHTML +='</tr>';
        for (let i = 0; i < data.length; i++) {
            dataAsHTML += '<tr>';
            for (let j = 0; j < data[i].length; j++) {
                dataAsHTML += `<td>${data[i][j]}</td>`;
            }
            dataAsHTML += '</tr>';
        }
        dataAsHTML +='</table>'
        console.log("html");
        console.log(dataAsHTML);



        var formData = {};
        formData['data'] = $('#myModalForm').serializeArray();
        console.log(formData['data'])
        var json = {};

        $.each(formData['data'], function() {
            json[this.name] = this.value;
        });

        json['emailtext'] = dataAsHTML;

        $.ajax({
            url: 'http://localhost:8712/loan/api/calculate',
            type: 'POST',
            dataType: 'json',
            contentType: 'application/json',
            data: JSON.stringify(json), // Convert the data to a JSON string
            success: function(response) {
                // Handle the success response from the server
                console.log(response);
                swal({
                    title: 'Sucesss!',
                    text: 'Success in sending email' +" !",
                    icon: 'success',
                    button: 'Close',
                    timer: 1000
                });

            },
            error: function(xhr, status, error) {
                // Handle any errors that occur during the request
                console.error(error);
                swal({
                    title: 'Error !',
                    text: status,
                    icon: 'error',
                    button: 'Close',
                });
            }
        });
    });
    $("#exportToPdf").click(function (event) {
        event.preventDefault(); // Prevent form submission

        // Your code to generate the PDF using jsPDF
        // const doc = new jsPDF();
        // doc.text("Hello, PDF!", 10, 10);
        // doc.save('datatable.pdf');



        const doc = new jsPDF();

        // Extract data from DataTable
        const table = $('#myTable').DataTable();
        const data = table.rows().data().toArray();

        // Define table columns and rows
        const columns = ['Payment Number', 'Period Installments','Interest Payment','Principal Payment','Remaining Balance']; // Add more column headers if needed

        // AutoTable plugin to generate PDF
        doc.autoTable({
            head: [columns],
            body: data,
        });

        // Save or display the PDF
        doc.save('datatable.pdf');
    });
    $("#sendToEmail").click(function (event){
        var modal = document.getElementById('myModal');
        modal.style.display ="block";
    });



});

function  displayData(response){
    // $('#myTable tr:not(:first)').remove();
    console.log("testting ..............");
    console.log(response);
    console.log(response.responseBody);
    var payments =JSON.parse(response.responseBody);

    var table = $('#myTable').DataTable();
    if (table) {
        table.clear().draw();
    }
    for (var i in payments) {
        var items = [];
        payment = payments[i];

        items.push(payment.paymentNumber);
        items.push(payment.periodInstallment);
        items.push(payment.interestPayment);
        items.push(payment.principalPayment);
        items.push(payment.remainingBalance);
        console.log("items ");
        console.log(items);

        table.row.add(items).draw(false);
    }
    $('#exportToPdf').css('display', 'inline-block')
    $('#sendToEmail').css('display', 'inline-block')

}


function closeForm() {
    document.getElementById("myModal").style.display = "none";
}

function exportTableToPDF() {
    event.preventDefault();
    console.log("printed")
    const doc = new jsPDF();

    // Extract data from DataTable
    const table = $('#myTable').DataTable();
    const data = table.rows().data().toArray();

    // Define table columns and rows
    const columns = ['Column 1', 'Column 2']; // Add more column headers if needed

    // AutoTable plugin to generate PDF
    doc.autoTable({
        head: [columns],
        body: data,
    });

    // Save or display the PDF
    doc.save('datatable.pdf');
}
