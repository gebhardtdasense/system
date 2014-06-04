<div id="api_wrapper">
<h4>System API</h4>
<hr>
<div id="api_content">    
<div class="tabbable">
    <ul class="nav nav-tabs" id="localetab">
        ${tabopts}
    </ul>
    <div class="tab-content">
        ${tabs}        
    </div>
</div>
 <table class="table table-hover table-condensed" style="overflow: auto;">
        <tr>
            <th>ID</th>
            <th>Group</th>
            <th>Type</th>
            <th>ParentID</th>
            <th>ParentValue</th>
            <th>Name</th>
            <th>Verify</th>
        </tr>
        <tr>
            <td><input type="text" id="new_call_id" placeholder="new id" style="width: 140px;"></td>
            <td><input type="text" id="new_call_group" placeholder="new group" style="width: 140px;"></td>
            <td><input type="text" id="new_call_type" placeholder="new type" style="width: 140px;"></td>
            <td><input type="text" id="new_call_parentid" placeholder="parent id" style="width: 140px;"></td>
            <td><input type="text" id="new_call_parentvalue" placeholder="parent value" style="width: 140px;"></td>
            <td><input type="text" id="new_call_name" placeholder="name" style="width: 140px;"></td>
            <td><input type="text" id="new_call_verify" placeholder="verify" style="width: 140px;"></td>
        </tr>
        
    </table>
    <button type="button" class="btn-small btn-success" id="addcall">Add</button>
</div><!-- /.modal -->
</div>