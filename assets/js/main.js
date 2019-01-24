// cargo los roles con ajax
$.ajax({
  url: BASE_URL+'role',   
  dataType: 'json'    
})
.done(function(result) { 

  $.each(result, function(index, val) {
   $("#role").append('<option>'+val.role+'</option>') 
 });
});





// //************* dashboard totals ******************//
$.ajax({
  url: BASE_URL+'dashboard/totalgeneral',   
  dataType: 'json'    
})
.done(function(result) {  

 $('#totalusers').html(result);

 // console.log(result);

});















// // add users
// $('#addUsers').click(function(event) {
// 	window.location=BASE_URL+'users/add';
// });

// // pdf users
// $('#pdfUsers').click(function(event) {
// 	window.location=BASE_URL+'users/reportUPdf';
	
// });

// // excel users
// $('#excelUsers').click(function(event) {
// 	window.location=BASE_URL+'users/reportUExcel';
// });


// // back users
// $('#backUsers').click(function(event) {
// 	window.location=BASE_URL+'users';
// });


// // **************leads  ********************//

// // add leads
// $('#addLeads').click(function(event) {
//   window.location=BASE_URL+'leads/add';
// });

// // back leads
// $('#backLeads').click(function(event) {
//   window.location=BASE_URL+'leads';
// });


// // load types
// $.ajax({
//   url: BASE_URL+'leads/loadtypes',   
//   dataType: 'json'    
// })
// .done(function(result) { 

//   $.each(result, function(index, val) {
//    $("#type").append('<option>'+val.type+'</option>') 
//  });
// });


// // pdf leads
// $('#pdfLeads').click(function(event) {
//   window.location=BASE_URL+'leads/reportLPdf';
  
// });

// // excel leads
// $('#excelLeads').click(function(event) {
//   window.location=BASE_URL+'leads/reportLExcel';
// });



// // **************  customers  ********************//

// // add customers
// $('#addCustomers').click(function(event) {
//   window.location=BASE_URL+'customers/add';
// });

// // back customers
// $('#backCustomers').click(function(event) {
//   window.location=BASE_URL+'customers';
// });


// // pdf customers
// $('#pdfCustomers').click(function(event) {
//   window.location=BASE_URL+'customers/reportCPdf';
  
// });

// // excel customers
// $('#excelCustomers').click(function(event) {
//   window.location=BASE_URL+'customers/reportCExcel';
// });


// //************* dashboard totals ******************//
// $.ajax({
//   url: BASE_URL+'dashboard/totalusers',   
//   dataType: 'json'    
// })
// .done(function(result) {  

//  $('#totalusers').html(result.totalusers);

// });


// $.ajax({
//   url: BASE_URL+'dashboard/totalcustomers',   
//   dataType: 'json'    
// })
// .done(function(result) {      
//  $('#totalcustomers').html(result.totalcustomers);
// });


// $.ajax({
//   url: BASE_URL+'dashboard/totalprojects',   
//   dataType: 'json'    
// })
// .done(function(result) {      
//  $('#totalprojectsusers').html(result.totalprojects);
// });

// $.ajax({
//   url: BASE_URL+'dashboard/totalleads',   
//   dataType: 'json'    
// })
// .done(function(result) {      
//  $('#totalleads').html(result.totalleads);
// });


// $.ajax({
//   url: BASE_URL+'dashboard/totalprojects',   
//   dataType: 'json'    
// })
// .done(function(result) {      
//  $('#totalprojects').html(result.totalprojects);
// });




// //*************** users projects    **********
// $.ajax({
//   url: BASE_URL+'projects/totalprojects',   
//   dataType: 'json'    
// })
// .done(function(result) {      
//  $('#totalprojectsusers').html(result.totalprojects);
// });

// // excel customers
// $('#viewallprojects').click(function(event) {
//   window.location=BASE_URL+'projects/viewallprojects';
// });

// // pdf users
// $('#pdfbyuser').click(function(event) {
//   window.location=BASE_URL+'projects/reportUPPdf';
  
// });

// // excel users
// $('#excelbyuser').click(function(event) {
//   window.location=BASE_URL+'projects/reportUPExcel';
// });








// // img profile admin
// $.ajax({
//   url: BASE_URL+'users/imgprofile',   
//   dataType: 'json'    
// })
// .done(function(result) {         
//  $('#imgprofile').html('<img src=" '+BASE_URL+'uploads/thumbnails/'+result.route+
//   ' " class="img-responsive img-circle" />' );
// });

// // img profile
// $.ajax({
//   url: BASE_URL+'users/imgprofileuser',   
//   dataType: 'json'    
// })
// .done(function(result) {         
//  $('#imgprofileuser').html('<img src=" '+BASE_URL+'uploads/thumbnails/'+result.route+
//   ' " class="img-responsive img-circle" />' );
// });





// // load states combo
// $.ajax({
//   url: BASE_URL+'register/loadstates',   
//   dataType: 'json'    
// })
// .done(function(result) { 

//   $.each(result, function(index, val) {
//    $("#state").append('<option>'+val.state+'</option>') 
//  });
// });



// // load capitals combo
// $.ajax({
//   url: BASE_URL+'register/loadcapitals',   
//   dataType: 'json'    
// })
// .done(function(result) { 

//   $.each(result, function(index, val) {
//    $("#capital").append('<option>'+val.capital+'</option>') 
//  });
// });


// // load roles
// // $.ajax({
// //   url: BASE_URL+'register/loadroles',   
// //   dataType: 'json'    
// // })
// // .done(function(result) { 

// //   $.each(result, function(index, val) {
// //    $("#role").append('<option>'+val.role+'</option>') 
// //  });
// // });



//   // combo dependent
//   $("#state").change(function () {
//    $("#state option:selected").each(function () {
//     mystate=$('#state').val();
//     $.post(BASE_URL+'register/combo',
//      {mystate: mystate}, function(result){
//       $("#capital").html(result);
//     });            
//   });
//  })


// //**************** projects **********************//
// function newProject() {

//   window.location=BASE_URL+'projects/add';

// }


// // load 
// $.ajax({
//   url: BASE_URL+'projects/loadbathrooms',   
//   dataType: 'json'    
// })
// .done(function(result) { 

//   $.each(result, function(index, val) {
//    $("#bathrooms").append('<option>'+val.bathrooms+'</option>') 
//  });
// });

// // load 
// $.ajax({
//   url: BASE_URL+'projects/loadbedrooms',   
//   dataType: 'json'    
// })
// .done(function(result) { 

//   $.each(result, function(index, val) {
//    $("#bedrooms").append('<option>'+val.bedrooms+'</option>') 
//  });
// });

// // load 
// $.ajax({
//   url: BASE_URL+'projects/loadbudget',   
//   dataType: 'json'    
// })
// .done(function(result) { 

//   $.each(result, function(index, val) {
//    $("#budget").append('<option>'+val.budget+'</option>') 
//  });
// });


// pdf users
// $('#pdf').click(function(event) {
//   window.location=BASE_URL+'projects/reportPPdf';
  
// });

// // excel users
// $('#excel').click(function(event) {
//   window.location=BASE_URL+'projects/reportPExcel';
// });




// msg alerts
// $(document).ready(function(){    

//   $("#msgUser").fadeOut(1500);
//   $("#msgNoUser").fadeOut(1500);
//   $("#msgProject").fadeOut(1000);
//   $("#msgUserRegister").fadeOut(1000);
//   $("#msgPassChange").fadeOut(1000);
//   $("#msgCloseSess").fadeOut(1000);
//   $("#msgCustomerDeleted").fadeOut(1000);
//   $("#msgCustomerCreated").fadeOut(1000);
//   $("#msgCustomerEdited").fadeOut(1000);
//   $("#msgLeadDeleted").fadeOut(1000);
//   $("#msgLeadCreated").fadeOut(1000);
//   $("#msgLeadEdited").fadeOut(1000);
//   $("#msgUserDeleted").fadeOut(1000);
//   $("#msgUserCreated").fadeOut(1000);
//   $("#msgUserEdited").fadeOut(1000);
//   $("#msgProjectDeleted").fadeOut(1000);
//   $("#msgProjectRejected").fadeOut(1000);
//   $("#msgProjectAproved").fadeOut(1000);
//   $("#msgPasswordChanged").fadeOut(1000);
//   $("#msgUploadFailed").fadeOut(1000);


// });















