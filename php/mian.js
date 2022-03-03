let id = $("input[name*='Perfume_id']")
id.attr("readonly","readonly");


$(".btnedit").click( e =>{
    let textvalues = displayData(e);

    ;
    let Perfumename = $("input[name*='Perfume_name']");
    let PerfumeType = $("input[name*='Perfume_type']");
    let Perfumeprice = $("input[name*='Perfume_price']");

    id.val(textvalues[0]);
    Perfumename.val(textvalues[1]);
    PerfumeType.val(textvalues[2]);
    Perfumeprice.val(textvalues[3].replace("€", ""));
});


function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.id == e.target.dataset.id){
           textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}



// let id = $("input[name*='Perfume_id']")
// id.attr("readonly","readonly");



// $(".btnedit").click( e =>{
//     let textvalues = displayData(e);

//     ;
//     let Perfumename = $("input[name*='Perfume_name']");
//     let PerfumeType = $("input[name*='Perfume_Type']");
//     let Perfumeprice = $("input[name*='Perfume_Price']");

//     id.val(textvalues[0]);
//     Perfumename.val(textvalues[1]);
//     PerfumeType.val(textvalues[2]);
//     Perfumeprice.val(textvalues[3].replace("$", ""));
// });


// function displayData(e) {
//     let id = 0;
//     const td = $("#tbody tr td");
//     let textvalues = [];

//     for (const value of td){
//         if(value.dataset.id == e.target.dataset.id){
//            textvalues[id++] = value.textContent;
//         }
//     }
//     return textvalues;
// }