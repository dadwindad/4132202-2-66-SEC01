<?php
include "condb.php";
$id = $_GET['id'];

$sql = "SELECT * FROM tb_member WHERE id_member='$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form>
    <label for="inp_id">ID :</label>
    <input type="text" name="id" id="inp_id" readonly value="<?= $row['id_member'] ?>"> <br>
    <label for="inp_name">Name :</label>
    <input type="text" name="name" id="inp_name" value="<?= $row['name'] ?>"><br>
    <label for="inp_prov">Province :</label>
    <input type="text" name="prov" id="inp_prov" value="<?= $row['id_province'] ?>"> <br>
    <hr>
    <button type="submit" class="btn btn-primary"> SAVE </button>
    <button type="reset" class="btn btn-danger"> CANCLE </button>
</form>

<script>
    $("form").submit(function(e) {
        e.preventDefault();

        let fm = $(this);
        $.ajax({
            url: "/edititem.php",
            method: "POST",
            data: fm.serialize(),
            success: function(res) {
                console.log(res);

                if (res == "error")
                    alert("Don't insert data into DB.");
                else {
                    $("#div_item").load("/listitem.php");
                    $('#staticBackdrop').modal('hide');
                }
            }
        });
    });
</script>