$(document).ready(function(){
  index();
});

function index(){
  // event.preventDefault();
  $.get("/notes", function(data){
   $("#results").html("");
   $("#results").html(data);
   make_clickable();
 });
}

function create(){
  event.preventDefault();
  $.post("/notes", $("#create").serialize(), function(data){
    index();
  })
}

function make_clickable(){
  $('textarea').on("click", function(){
    $('textarea').off("keyup");
    $(this).on("keyup", function(){
      var mydata = $(this).val();
      var index = $(this).attr('name');
      $.ajax({
        url: "/notes/"+index,
        method:'POST',
        datatype:'json',
        data:{"content":mydata},
        success:function(data){
        }
      });
    });
  });
}

function local_delete(index){
  $.ajax({
    url: "/notes/"+index,
    method:'DELETE',
    success:function(){
      $.get("/notes", function(data){
       $("#results").html("");
       $("#results").html(data);
       make_clickable();
     });
    }
  });
}
