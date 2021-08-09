var js = {
	get_all_data : function(){
		$.ajax({
      url: 'http://a.local/Crud/get_all_data',
      type : 'POST',
      dataType: 'JSON',
    })
    .done(function(data) {
      var html = '';
      var num = 1;
      $(data).each(function(i,v){
        html +=
          "<tr>"+
            "<td>"+num+"</td>"+
            "<td>"+v.fname+"</td>"+
            "<td>"+v.lname+"</td>"+
            "<td>"+v.email+"</td>"+
            "<td>"+
              "<a href='javascript:void(0);' id='"+v.id+"' onclick='js.update(this);'>Update</a>"+" "+
              "<a href='javascript:void(0);' id='"+v.id+"' onclick='js.delete(this);'>Delete</a>"+
            "</td>"+
          "</tr>";
          num++;
      });
      $('.table tbody').html(html);
    });
	},

  insert : function(){
    var fname = $('[name=fname]').val();
    var lname = $('[name=lname]').val();
    var email = $('[name=email]').val();

    var data = {
      'fname' : fname,
      'lname' : lname,
      'email' : email,
    }

    $.ajax({
      url: 'http://a.local/Crud/insert',
      type : 'POST',
      dataType: 'JSON',
      data : data,
    })
    .done(function(data) {
      js.get_all_data();
      $('[name=fname]').val('');
      $('[name=lname]').val('');
      $('[name=email]').val('');
    });
  },

  delete : function(opj){
    var id = $(opj).attr('id');
    $.ajax({
      url: 'http://a.local/Crud/delete',
      type : 'POST',
      dataType: 'JSON',
      data : {'id':id },
    })
    .done(function(data) {
      js.get_all_data();
    });
  },

  update : function(a){
      var id = $(a).attr('id');

      var data = {'id':id };

      $.ajax({
        url: 'http://a.local/Crud/update',
        type : 'POST',
        dataType: 'JSON',
        data : data,
      })
      .done(function(data) {
        var id = $('[name=id]').val(data.id);
        var fname = $('[name=fname_update]').val(data.fname);
        var lname = $('[name=lname_update]').val(data.lname);
        var email = $('[name=email_update]').val(data.email);

      });
  },

  updatedata : function(a){
        var id = $('[name=id]').val();
        var fname_update = $('[name=fname_update]').val();
        var lname_update = $('[name=lname_update]').val();
        var email_update = $('[name=email_update]').val();
        var data = {
          'id' : id,
          'fname' : fname_update,
          'lname' : lname_update,
          'email' : email_update,
        }
        // console.log(data);

        $.ajax({
          url: 'http://a.local/Crud/updatedata',
          type : 'POST',
          dataType: 'JSON',
          data : data,
        })
        .done(function(data) {
          js.get_all_data();
        });

  }

}