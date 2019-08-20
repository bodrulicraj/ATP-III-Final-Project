
$(document).ready(function(){

  $(document).on('click', '.view_data', function(){
    var batchid = $(this).attr("id");
    if(batchid != ''){
      $.ajax({
        url:"batch_detail",
        method:"GET",
        data:{batchId : batchid},
        success:function(data){
          var result = '';
          result = "<table class='table table-sm table-striped'>"+
                      "<tbody>"+
                        "<tr>"+
                          "<td width='35%'class='text-right'>Batch Id:</td>"+
                          "<td width='65%'>"+ data[0].batchid +"</td>"+
                        "</tr>"+
                        "<tr>"+
                          "<td width='35%' class='text-right'>Course Name:</td>"+
                          "<td width='65%'>"+ data[0].coursename +"</td>"+
                        "</tr>"+
                        "<tr>"+
                          "<td width='35%' class='text-right'>Course Credit:</td>"+
                          "<td width='65%'>"+ data[0].credit +"</td>"+
                        "</tr>"+
                        "<tr>"+
                          "<td width='35%' class='text-right'>Course Duration:</td>"+
                          "<td width='65%'>"+ data[0].duration +"</td>"+
                        "</tr>"+
                      "</tbody>"+
                    "</table>";
          $('#batch_detail').html(result);
          $('#viewBatch').modal('show');
        }
      });
    }
  });

});
