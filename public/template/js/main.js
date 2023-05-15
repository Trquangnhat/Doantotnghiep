$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

function removeRow(id, url) {
    if (confirm("Xóa mà không thể khôi phục. Bạn có chắc ?")) {
        $.ajax({
            type: "DELETE",
            datatype: "JSON",
            data: { id },
            url: url,
            success: function (result) {
                console.log(result);
                if (result.error === false) {
                    alert(result.message);
                    location.reload();
                } else {
                    alert("Xóa lỗi vui lòng thử lại");
                }
            },
        });
    }
}

/*Upload File */
// $('#upanh').change(function () {
//     const form = new FormData();
//     form.append('file', $(this)[0].files[0]);
//     $.ajax({
//         processData: false,
//         contentType: false,
//         type: 'POST',
//         dataType: 'JSON',
//         data: form,
//         url: '/upload/services',
//         success: function (results) {

//             console.log(results);
//             // if (results.error === false) {
//             //     $('#hinhanh_show').html('<a href="' + results.url + '" target="_blank">' +
//             //         '<img src="' + results.url + '" width="100px"></a>');
//             //     console.log()
//             //     $('#hinhanh01').val(results.url);
//             // } else {
//             //     alert('Upload File Lỗi');
//             // }
//         }
//     });
// });

$("#upload").change(function (e) {
    const form = new FormData();
    form.append("file", $(this)[0].files[0]);

    console.log($(this)[0].files[0]);
    e.preventDefault();

    axios
        .post("/upload/services", form, {
            headers: {
                "Content-Type": "multipart/form-data",
            },
        })
        .then((results) => {
            console.log(results);
            if (results.data.error === false) {
                $("#hinhanh_show").html(
                    '<a href="' +
                        results.data.url +
                        '" target="_blank">' +
                        '<img src="' +
                        results.data.url +
                        '" width="100px"></a>'
                );
                $("#hinhanh01").val(results.data.url);
            } else {
                alert("Upload File Lỗi");
            }
        })
        .catch((err) => {
            console.log("catch", err);
        });

    // try {
    //     $.ajax({
    //         processData: false,
    //         contentType: "multipart/form-data",
    //         type: "POST",
    //         dataType: "JSON",
    //         data: form,
    //         url: "/upload/services",
    //         success: function (results) {
    //             console.log(results);
    //             if (results.error === false) {
    //                 $("#hinhanh_show").html(
    //                     '<a href="' +
    //                         results.url +
    //                         '" target="_blank">' +
    //                         '<img src="' +
    //                         results.url +
    //                         '" width="100px"></a>'
    //                 );
    //                 $("#hinhanh01").val(results.url);
    //             } else {
    //                 alert("Upload File Lỗi");
    //             }
    //         },
    //     });
    // } catch (e) {
    //     console.log(e);
    // }
});

// hiển thị mật khẩu
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var toggleIcon = document
        .getElementById("toggle-password")
        .getElementsByTagName("i")[0];
    console.log("ok");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    }
}
function togglePasswordVisibility2() {
    var passwordInput = document.getElementById("password2");
    var toggleIcon = document
        .getElementById("toggle-password2")
        .getElementsByTagName("i")[0];
    console.log("ok");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    }
}

$("#upload2").change(function (e) {
    const form = new FormData();
    form.append("file", $(this)[0].files[0]);

    console.log($(this)[0].files[0]);
    e.preventDefault();

    axios
        .post("/upload/services", form, {
            headers: {
                "Content-Type": "multipart/form-data",
            },
        })
        .then((results) => {
            console.log(results);
            if (results.data.error === false) {
                $("#hinhanh_show2").html(
                    '<a href="' +
                        results.data.url +
                        '" target="_blank">' +
                        '<img src="' +
                        results.data.url +
                        '" width="100px"></a>'
                );
                $("#hinhanh02").val(results.data.url);
            } else {
                alert("Upload File Lỗi");
            }
        })
        .catch((err) => {
            console.log("catch", err);
        });

    // try {
    //     $.ajax({
    //         processData: false,
    //         contentType: "multipart/form-data",
    //         type: "POST",
    //         dataType: "JSON",
    //         data: form,
    //         url: "/upload/services",
    //         success: function (results) {
    //             console.log(results);
    //             if (results.error === false) {
    //                 $("#hinhanh_show").html(
    //                     '<a href="' +
    //                         results.url +
    //                         '" target="_blank">' +
    //                         '<img src="' +
    //                         results.url +
    //                         '" width="100px"></a>'
    //                 );
    //                 $("#hinhanh01").val(results.url);
    //             } else {
    //                 alert("Upload File Lỗi");
    //             }
    //         },
    //     });
    // } catch (e) {
    //     console.log(e);
    // }
});
