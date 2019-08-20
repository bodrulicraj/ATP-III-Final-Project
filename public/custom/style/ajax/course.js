
$(document).ready(function(){

  $(document).on('click', '.view_data', function(){
    var cid = $(this).attr("id");
    if(cid != ''){
      $.ajax({
        url:"course_detail",
        method:"GET",
        data:{cId : cid},
        success:function(data){
          var result = '';
          result = "<table class='table table-sm table-striped'>"+
                      "<tbody>"+
                        "<tr>"+
                          "<td width='35%'class='text-right'>Course Id:</td>"+
                          "<td width='65%'>"+ data[0].cid +"</td>"+
                        "</tr>"+
                        "<tr>"+
                          "<td width='35%' class='text-right'>Course Name:</td>"+
                          "<td width='65%'>"+ data[0].cname +"</td>"+
                        "</tr>"+
                        "<tr>"+
                          "<td width='35%' class='text-right'>Course Credit:</td>"+
                          "<td width='65%'>"+ data[0].credit +"</td>"+
                        "</tr>"+
                        "<tr>"+
                          "<td width='35%' class='text-right'>Department:</td>"+
                          "<td width='65%'>"+ data[0].department +"</td>"+
                        "</tr>"+
                      "</tbody>"+
                    "</table>";
          $('#course_detail').html(result);
          $('#viewCourse').modal('show');
        }
      });
    }
  });

});
