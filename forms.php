

<div class="container results_box">
    <?php 
            $i = 1;
                $forms = $db->conn->query("SELECT * FROM `form_list` order by date(date_created) desc");
                while($row = $forms->fetch_assoc()):
            ?>
    <div class="container">

        <div class="row " style="display: flex; justify-content: center;">

            <div class="col-xl-8">
                <div class="results_content">
                    <a class="txt_results_content" href="./form.php?code=<?php echo $row['form_code'] ?>">
                        <h3><?php echo $row['title'] ?></h3>
                        <div class="row">
                            <div class="col-6 owner">
                                <h4>Code</h4>
                                <h5><?php echo $row['form_code'] ?></h5>
                            </div>

                            <div class="col-6 created_date">
                                <h4>Create at</h4>
                                <h5><?php echo date("M d,Y h:i A",strtotime($row['date_created'])) ?></h5>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-3 m-auto">
                            <a href="./listforms.php?p=view_responses&code=<?php echo $row['form_code'] ?>" class="btn btn-default border">All Responses</a>
                        </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile;  ?>

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