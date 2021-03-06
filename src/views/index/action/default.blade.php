@if(CRUDBooster::canRead() && $buttonDetail)
    <a class='btn btn-xs btn-primary btn-detail' title='{{cbTrans("action_detail_data")}}'
       href='{{CRUDBooster::mainpath("detail/".$id)."?return_url=".urlencode(Request::fullUrl())}}'>
        {!! cbIcon('eye') !!}
    </a>
@endif

@if(CRUDBooster::canUpdate() && $button_edit)
    <a class='btn btn-xs btn-success btn-edit' title='{{cbTrans("action_edit_data")}}'
       href='{{CRUDBooster::mainpath("edit/".$id)."?return_url=".urlencode(Request::fullUrl())."&parent_id=".g("parent_id")."&parent_field=".$parent_field}}'>
        {!! cbIcon('pencil') !!}
    </a>
@endif

@if(CRUDBooster::canDelete() && $deleteBtn)
    <?php $url = CRUDBooster::mainpath("delete/".$id);?>
    <a class='btn btn-xs btn-warning btn-delete' title='{{cbTrans("action_delete_data")}}' href='javascript:;'
       onclick='{{CRUDBooster::deleteConfirm($url)}}'>
        {!! cbIcon('trash') !!}
    </a>
@endif