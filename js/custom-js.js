$(document).ready(function(){
  //adding the header.
  $(function(){
    $("#header").load("inc/header.php");
  });

  //adding the footer.
  $(function(){
    $("#footer").load("inc/footer.php");
  });
});
//deletion confirmation

function confirmDeletion(){
  return confirm('Are you sure you want to delete this?')
}
