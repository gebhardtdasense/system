<input class="input-medium search-query" id="user_search" type="text" placeholder="EMail or Username" size="30"/>
<input class="btn-sm btn-success" id="user_go" type="submit" value="Search"/>
</br>
</br>
Users: ${count}
<table class="sai_table table table-hover table-condensed" style="overflow: auto;">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>E-Mail</th>
        <th>JoinDate</th>
        <th>Locale</th>
        <th>Last Active</th>
        <th>Flag</th>
        <!--<th style="width: 110px;">Rights</th>-->
        <th>reset password</th>
    </tr>
    ${rows}
</table>