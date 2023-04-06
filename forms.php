<h3>Form List</h3>
<hr class="border-primary">
<div class="col-md-12">
    <table id="forms-tbl" class="table table-stripped">
        <thead>
            <tr>
                <th>#</th>
                <th>DateTime</th>
                <th>Code</th>
                <th>Title</th>
                <th>URL</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
                $forms = $db->conn->query("SELECT * FROM `form_list` order by date(date_created) desc");
                while($row = $forms->fetch_assoc()):
            ?>
            <tr>
                <td class="text-center"><?php echo $i++ ?></td>
                <td><?php echo date("M d,Y h:i A",strtotime($row['date_created'])) ?></td>
                <td><?php echo $row['form_code'] ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><a
                        href="./form.php?code=<?php echo $row['form_code'] ?>">form.php?code=<?php echo $row['form_code'] ?></a>
                </td>
                <td class='text-center'>
                    <p id="my-paragraph">Nhấn vào đây để hiển thị danh sách Action</p>
                    <ul id="my-list" class="hidden">
                        <li>   
                        <a style="background-color: rgba(83, 128, 234, 1);" href="javascript:void(0)" class="btn btn-default border rem_form btn_origin" data-id='<?php echo $row['form_code'] ?>'><span class="fa fa-trash text-danger"></span></a>

</li>
                        <li>                        
                            <a style="background-color: rgba(83, 128, 234, 1);" href="./index.php?p=view_responses&code=<?php echo $row['form_code'] ?>" class="btn btn-default border btn_origin">Responses</a>
</li>
                        <li>    
                        <a style="background-color: rgba(83, 128, 234, 1);" href="./index.php?p=view_form&code=<?php echo $row['form_code'] ?>" class="btn btn-default border btn_origin">Chỉnh sửa</a>

</li>
                        <li>                        
                            <a style="background-color: rgba(83, 128, 234, 1);" class="btn btn-default border btn_origin" href="statistical_user.html">Thống kê người tham gia khảo sát</a>
</li>
                        <li>                        
                            <a style="background-color: rgba(83, 128, 234, 1);" class="btn btn-default border btn_origin" href="statistical_answer.html">Thống kê câu trả lời theo câu hỏi . </a>
</li>
                    </ul>
                    
                </td>
            </tr>
            <?php endwhile;  ?>
        </tbody>
    </table>
</div>

<style>
    .hidden {
    display: none;
  }
  ul {
    list-style-type: none;
}
</style>

<script>
const paragraph = document.getElementById("my-paragraph");
const list = document.getElementById("my-list");

paragraph.addEventListener("click", () => {
    list.classList.toggle("hidden");
});

$(function() {
    $('#forms-tbl').dataTable();
    $('.rem_form').click(function() {
        start_loader();
        var _conf = confirm("Are you sure to delete this data?")
        if (_conf == true) {
            $.ajax({
                url: 'classes/Forms.php?a=delete_form',
                method: 'POST',
                data: {
                    form_code: $(this).attr('data-id')
                },
                dataType: 'json',
                error: err => {
                    console.log(err)
                    alert("an error occured")
                },
                success: function(resp) {
                    if (resp.status == 'success') {
                        alert("Data successfully deleted");
                        location.reload()
                    } else {
                        console.log(resp)
                        alert("an error occured")
                    }
                }
            })
        }
        end_loader()
    })
})
</script>