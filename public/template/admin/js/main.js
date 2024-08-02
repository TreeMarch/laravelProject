$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id,url){
    if(confirm('Xoa ma khong the khoi phuc , ban chac chu ?')){
        $.ajaxSetup({
            type: 'DELETE',
            datatype : 'JSON',
            data : '{id}',
            url : url,
            success:function (result){
                console.log(result);
            }
        })
    }
}