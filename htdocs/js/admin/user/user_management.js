function load_datatable(source)
{
    $('#usermanagement').dataTable({
		"bProcessing": true,
                "sAjaxSource": source,
		"aoColumns": [
                    { mData: 'id' } ,
                    { mData: 'pass' },
                    { mData: 'name' },
                    { mData: 'email' },
                    { mData: 'delete_flg' }
                ]
        });  
}

