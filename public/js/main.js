
function logout(){
location.href = "logout.php";
}

function hideNav(){
  $(".navbar-collapse").collapse('hide');
  $('#lhc_status_container').show();
  
}

function togglePaywall(){
  $(".navbar-collapse").collapse('hide');
  $('#lhc_status_container').hide();
  closeServices();
  $('#paywallModal').modal('show');
}


$('.modal').click(function(e) {
  $('#lhc_status_container').show();
});

