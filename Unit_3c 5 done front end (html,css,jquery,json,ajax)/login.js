let userAktif = {
    "id_user": "",
    "id_pengguna": "",
    "username": "",
    "status": "",
};
const LOGIN_STORAGE = "LOGIN_STORAGE";

$("form").submit( function(e){
    $.getJSON("assets/store.json", function(result){
        for(let i = 0; i < result[4].data.length; i++){
            // userEmail = json[4].data[i].email;
            // userPassword.push(json[4].data[i].password);
            if($("#inputEmail").val() == result[4].data[i].email && $("#inputPassword").val() == result[4].data[i].password){
                // window.location("index.html");
                console.log("berasil login");
                sessionLogin(result[4].data[i].id_user, result[4].data[i].id_pengguna, result[4].data[i].nama, true);
                window.location = "index.html";
                // const user = localStorage.getItem(LOGIN_STORAGE);
                // let data = JSON.parse(user);
                // console.log(data["username"]);
                // e.preventDefault();
            } else {
                e.preventDefault();
            }
        }
    });
    e.preventDefault();
});

function sessionLogin(id_user, id_pengguna, username, statusLogin){
    userAktif["id_user"] = id_user;
    userAktif["id_pengguna"] = id_pengguna;
    userAktif["username"] = username;
    userAktif["status"] = statusLogin;
    localStorage.setItem(LOGIN_STORAGE, JSON.stringify(userAktif));
}

function getUser(){
    const user = localStorage.getItem(LOGIN_STORAGE);
    let data = JSON.parse(user);
    return data;
}

function logout(){
    userAktif["id_user"] = "";
    userAktif["id_pengguna"] = "";
    userAktif["username"] = "";
    userAktif["status"] = "";
    localStorage.setItem(LOGIN_STORAGE, JSON.stringify(userAktif));
    localStorage.clear();
    window.location = "login.html";
}

function isThereLocalStorage(){
    if (typeof(LOGIN_STORAGE) !== 'undefined') {
        return true;
    } else {
        return false;
    }
}

// console.log(userAktif["id_user"].length);

// $("form").validate({
//     rules:{
//         email: {
//             required: true
//         },
//         password: {
//             required: true
//         }
//     },
//     messages:{
//         email: {
//             required: 'Please enter email!'
//         },
//         password: {
//             required: 'Please enter password!'
//         }
//     },
// });

// let userEmail = [] ;
// let userPassword = [] ;
// var useraktif;





// export { useraktif };
// if(window.location("index.html")){
//     $("#bannerText").add("<p>"+useraktif+"</p>").appendTo("#bannerText");
// }
// console.log(userEmail);
// console.log(userPassword);