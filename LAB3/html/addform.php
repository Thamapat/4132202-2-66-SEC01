<form>
    <label for="inp_id">ID :</label>
    <input type="text" name="id" id="inp_id"><br>
    <label for="inp_name">Nmae :</label>
    <input type="text" name="name" id="inp_name"><br>
    <label for="inp_prov">Province :</label>
    <input type="text" name="prov" id="inp_prov"> <br>
    <button type="submit"> SAVE </button>
    <button type="reset"> CANCLE </button>
</form>

<script>
    $("form").submit(function(e){
        e.preventDefault();

        let fm = $(this);
        $.ajax({
            url:"/addform.php",
            method: "PORT",
            data: fm.serialize(),
            success: function(res) {
                if(res == "error")
                    alert("Don't insert data into DB.");
                else
                    $("#div_item").load("/listitem.php");
            }
        });
    });
</script>