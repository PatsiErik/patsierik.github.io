 <?php
 
 if($_POST["message"]) {

mail("patsi.erik@gmail.com", "Here is the subject line",

$_POST["insert your message here"]. "From: patsi.erik@gmail.com");

}

?>



<form id="fs-frm" name="basic-rsvp-form" accept-charset="utf-8" method="post" action="rsvp.php">
    <fieldset id="fs-frm-inputs">
        <label for="full-name">Full Name</label>
        <input type="text" name="name" id="full-name" placeholder="First and Last" required="">
        <label for="attending">Will you Attend?</label>
        <select name="attending" id="attending" required="">
            <option value="" selected="" disabled="">Select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
        <label for="plus">Plus one?</label>
        <select name="Plus1" id="Plus1" required="">
            <option value="" selected="" disabled="">Select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
        <div id="p1label" style="display:none">
            <label for="full-name">Full Name (Plus One)</label>
            <input type="text" name="name" id="full-name" placeholder="First and Last" required="">
        </div>
    </fieldset>    
    <script>
        document.getElementById('Plus1').addEventListener('change', function (e) {
                if (e.target.value === "Yes") {
                    document.getElementById('p1label').style.display = 'block';
                }
            });
        document.getElementById('Plus1').addEventListener('change', function (e) {
                if (e.target.value === "No") {
                    document.getElementById('p1label').style.display = 'none';
                }
        });
    </script>
    <input type="submit" value="RSVP">
</form>